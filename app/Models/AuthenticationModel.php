<?php


namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
use CodeIgniter\Validation\ValidationInterface;

class AuthenticationModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['f_name','l_name','username','email','country','password'];


}