<?php
/**
 * Created by PhpStorm.
 * User: dannexdaniels
 * Date: 5/4/20
 * Time: 10:15 PM
 */

namespace App\Controllers;

use App\Models\AuthenticationModel;
use CodeIgniter\Controller;

class Authentication extends Controller
{
    public function index(){
        $this->login();
    }

    public function createUser(){
        $model = new AuthenticationModel();

        if ($this->request->getVar('pass')===$this->request->getVar('conf_pass')):
            $data = array(
                'f_name' => $this->request->getVar('fname'),
                'l_name' => $this->request->getVar('lname'),
                'username' => $this->request->getVar('uname'),
                'email' => $this->request->getVar('email'),
                'country' => $this->request->getVar('country'),
                'password' => $this->request->getVar('pass')
            );


            try {
                $model->insert($data);
            } catch (\ReflectionException $e) {
                print_r($e);
            }

            $response = \CodeIgniter\Database\Config::getConnections();

            if ($response['default']->mysqli->errno==0)
                echo "registration was successfull";
            elseif($response['default']->mysqli->errno==1062)
                echo "username or email address is already used by someone else";
            else
                echo "registration failed because is a ".$response['default']->mysqli->error;


        else:
            echo 'password and confirmation password don\'t match';
        endif;

    }

    public function authenticate(){
        $model = new AuthenticationModel();

        $user = $model->where('username',$this->request->getVar('pass'))->findAll();

        if (empty($user))
            echo "You don't have an account with that username. You can create a new one.....";
        else {
            if ($this->request->getVar('pass') === $user[0]['password'])
                echo "logging has been successful";
            else
                echo "you have entered wrong password";
        }
    }

    public function resetPass(){
        $model = new AuthenticationModel();

        $user = $model->where('email',$this->request->getVar('email'))->findAll();

        if (empty($user))
            echo "You don't have an account with that username. You can create a new one.....";
        else
            echo "We will sent you a reset link";
    }
    public function register(){
        if ($this->request->getMethod()=='get'):
            echo view('template/header');
            echo view('register');
            echo view('template/ending');
        else:
            $this->createUser();
        endif;
    }

    public function login(){
        if ($this->request->getMethod()=='get'):
            echo view('template/header');
            echo view('login');
            echo view('template/ending');
        else:
            $this->authenticate();
        endif;
    }

    public function forgot_password(){
        if ($this->request->getMethod()=='get'):
            echo view('template/header');
            echo view('forgot_password');
            echo view('template/ending');
        else:
            $this->resetPass();
        endif;


    }
}