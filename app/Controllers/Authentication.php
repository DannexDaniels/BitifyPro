<?php
/**
 * Created by PhpStorm.
 * User: dannexdaniels
 * Date: 5/4/20
 * Time: 10:15 PM
 */

namespace App\Controllers;

use CodeIgniter\Controller;

class Authentication extends Controller
{
    public function index(){

        echo view('template/header');
        echo view('login');
        echo view('template/footer');
    }

    public function register(){
        echo view('template/header');
        echo view('register');
        echo view('template/footer');
    }

    public function login(){
        echo view('template/header');
        echo view('login');
        echo view('template/footer');
    }

    public function forgot_password(){
        echo view('template/header');
        echo view('forgot_password');
        echo view('template/footer');
    }
}