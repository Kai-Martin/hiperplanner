<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\AbsenceModel;

class Addentry extends Controller
{
    public function index()
    {
        $session = session();

        helper(['form']);

        echo view('templates/header');
        echo view('pages/Addentry');
<<<<<<< Updated upstream
    	echo view('templates/footer');
=======
      	echo view('templates/footer');

>>>>>>> Stashed changes
    }
    public function save()
    {
      helper(['form']);

      $session = session();

      $rules = [
          'date_start'        => 'required|min_length[10]|max_length[10]',
          'date_end'          => 'required|min_length[10]|max_length[10]'
      ];
      if( $this->validate($rules) ){
<<<<<<< Updated upstream
        $start = new DateTime( $this->request->getVar('date_start') );
        $end = new DateTime( $this->request->getVar('date_end') );

        $interval = $end->diff($start);

        $days = $interval->d;
=======
        $start = new \DateTime( $this->request->getVar('date_start') );
        $end = new \DateTime( $this->request->getVar('date_end') );

        $interval = $end->diff($start);

        $days = $interval->d;

        $model = new AbsenceModel();


        date_sub($start, new \DateInterval('P1D'));
        for($d = 0; $d <= $days; $d++){

          date_add($start, new \DateInterval('P1D'));
>>>>>>> Stashed changes

          $data = [
              'date'    => $start -> format('Y-m-d'),
              'user_id' => $_SESSION['user_id'],
          ];

          $model->save($data);
        }
        return redirect()->to('/dashboard');
      }
    }
}
