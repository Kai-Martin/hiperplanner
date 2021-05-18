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
    public function save()
    {
      helper(['form']);

      $rules = [
          'date_start'        => 'required|min_length[10]|max_length[10]',
          'date_end'          => 'required|min_length[10]|max_length[10]'
      ];
      if( $this->validate($rules) ){
        $start = new DateTime( $this->request->getVar('date_start') );
        $end = new DateTime( $this->request->getVar('date_end') );

        $interval = $end->diff($start);

        $days = $interval->d;


      //     $model = new AbsenceModel();
      //     $data = [
      //         'date'    => $this->request->getVar('date'),
      //     ];
      //     $model->save($data);
      //     return redirect()->to('/addentry');
      // }else{
      //     $data['validation'] = $this->validator;
      //     echo view('addentry', $data);
      }
    }
}
