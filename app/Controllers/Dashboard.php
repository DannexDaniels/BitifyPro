<?php
/**
 * Created by PhpStorm.
 * User: dannexdaniels
 * Date: 5/4/20
 * Time: 9:59 PM
 */

namespace App\Controllers;

use CodeIgniter\Controller;


class Dashboard extends Controller
{

    public function index(){
        helper('form');
        echo view('template/header');
        echo view('template/navigation');
        echo view('dashboard');
        echo view('template/footer');
        echo view('template/ending');
    }
}