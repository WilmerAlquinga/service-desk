<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Company;
class CompanyController extends Controller{

    public function index() {

        $company = new Company();
        $data['companies'] = $company->orderBy('CREATION_DATE', 'ASC')->findAll();
        $data['header'] = view('layout/header');
        $data['footer'] = view('layout/footer');

        return view('company/list_company', $data);
    }


    public function create() {

        $data['header'] = view('layout/header');
        $data['footer'] = view('layout/footer');

        return view('company/create_company', $data);
    }

    public function save() {

        $company = new Company();
        $name = $this->request->getVar('name');
        $description = $this->request->getVar('description');
        $representative = $this->request->getVar('representative');
        $logoName = NULL;
        
        if ($logo = $this->request->getFile('logo')) {
            $logoName = $logo->getRandomName();
            $logo->move('../public/uploads/logos/', $logoName);
        }

        $body = [
            'NAME' => $name,
            'DESCRIPTION' => $description,
            'CREATION_DATE' => date('Y-m-d H:i:s'),
            'REPRESENTATIVE' => $representative,
            'LOGO' => $logoName
        ];
        
        $company->insert($body);

        return $this->response->redirect(site_url('/list_company'));
    }

    public function delete($id=NULL) {

        $company = new Company();
        $companyData = $company->where('ID_COMPANY', $id)->first();

        if ($companyData['LOGO'] != NULL || $companyData['LOGO'] != '') {
            $path=('../public/uploads/logos/'.$companyData['LOGO']);
            unlink($path);
        }

        $company->where('ID_COMPANY', $id)->delete($id);

        return $this->response->redirect(site_url('/list_company'));
    }

    public function edit($id=NULL) {

        $company = new Company();
        $companyData = $company->where('ID_COMPANY', $id)->first();
        $data['company'] = $companyData;
        $data['header'] = view('layout/header');
        $data['footer'] = view('layout/footer');

        return view('company/edit_company', $data);
    }

    public function update() {

        $company = new Company();
        $id = $this->request->getVar('id');

        $currentCompany = $company->where('ID_COMPANY', $id)->first();
        $name = $this->request->getVar('name');
        $description = $this->request->getVar('description');
        $representative = $this->request->getVar('representative');
        $logoName = $currentCompany['LOGO'];
        
        $logoValidation = $this->validate([
            'logo' => [
                'uploaded[logo]',
                'ext_in[logo,jpg,jpeg,png]',
                'max_size[logo,1024]',
            ]
        ]);

        if ($logoValidation) {
            if ($logo = $this->request->getFile('logo')) {
                if ($currentCompany['LOGO'] != NULL && $currentCompany['LOGO'] != '') {
                    $path=('../public/uploads/logos/'.$currentCompany['LOGO']);
                    unlink($path);
                }

                $logoName = $logo->getRandomName();
                $logo->move('../public/uploads/logos/', $logoName);
            }
        }

        $body = [
            'NAME' => $name,
            'DESCRIPTION' => $description,
            'REPRESENTATIVE' => $representative,
            'LOGO' => $logoName
        ];
        
        $company->update($id, $body);

        return $this->response->redirect(site_url('/list_company'));
    }

}