<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class HomeController extends Controller{

    public function index() {

        $data['header'] = view('layout/header');
        $data['footer'] = view('layout/footer');

        return view('home', $data);
    }

}