<?php namespace App\Models;

use CodeIgniter\Model;

class AbsenceModel extends Model{
    protected $table = 'Absences';
    protected $allowedFields = ['date','user_id'];
}
