<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Addentry extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('templates/header');
        echo view('pages/Addentry');
    		echo view('templates/footer');
    }
}
