<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Company;
class CompanyController extends Controller{

    public function index() {

        $company = new Company();
        $data['companies'] = $company->orderBy('NAME', 'ASC')->findAll();
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

        echo 'Company saved on DB';
    }

}