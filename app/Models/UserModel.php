<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'Users';
    protected $allowedFields = ['name','email','password'];

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}
