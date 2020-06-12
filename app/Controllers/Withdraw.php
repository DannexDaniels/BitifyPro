<?php


namespace App\Controllers;

use CodeIgniter\Controller;

class Withdraw extends Controller
{
    public function index(){
        echo view('template/header');
        echo view('template/navigation');
        echo view('withdraw');
        echo view('template/footer');
        echo view('template/ending');
    }
}