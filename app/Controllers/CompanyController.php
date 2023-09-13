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
}