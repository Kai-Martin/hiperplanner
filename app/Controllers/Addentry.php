<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('templates/header');
        echo view('auth/Addentry');
    		echo view('templates/footer');
    }
  }
}
