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
        echo view('template/header');
        echo view('dashboard');
        echo view('template/footer');
    }
}