<?php namespace App\Models;

use CodeIgniter\Model;

class AdminAuthModel extends Model
{

    protected $table = "admins";

    protected $primaryKey = 'id';

    protected $allowedFields = ['first_name','last_name','username','password'];

}