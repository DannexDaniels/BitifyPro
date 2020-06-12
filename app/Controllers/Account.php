<?php


namespace App\Controllers;

use CodeIgniter\Controller;

class Account extends Controller
{
    public function index(){
        echo "there's nothing to see here bro. go the hell back.";

        $data = array(
            'bitcoin' => $this->request->getVar('bitcoins'),
            'wallet' => $this->request->getVar('wallet'),
        );
        print_r($data);
    }

    public function profile(){
        echo view('template/header');
        echo view('template/navigation');
        echo view('account/profile');
        echo view('template/footer');
        echo view('template/ending');
    }

    public function referrals(){
        echo view('template/header');
        echo view('template/navigation');
        echo view('account/referrals');
        echo view('template/footer');
        echo view('template/ending');
    }

    public function subscriptions(){
        echo view('template/header');
        echo view('template/navigation');
        echo view('account/subscriptions');
        echo view('template/footer');
        echo view('template/ending');
    }
}