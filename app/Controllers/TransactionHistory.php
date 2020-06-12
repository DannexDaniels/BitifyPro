<?php


namespace App\Controllers;

use CodeIgniter\Controller;

class TransactionHistory extends Controller
{
    public function index(){
        echo "You got nothing to do right? get the hell out of here";
    }
    public function withdrawals(){
        echo view('template/header');
        echo view('template/navigation');
        echo view('trans_hist/withdrawals');
        echo view('template/footer');
        echo view('template/ending');
    }

    public function earnings(){
        echo view('template/header');
        echo view('template/navigation');
        echo view('trans_hist/earnings');
        echo view('template/footer');
        echo view('template/ending');
    }
}