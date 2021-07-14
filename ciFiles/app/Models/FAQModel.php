<?php namespace App\Models;

use CodeIgniter\Model;

class FAQModel extends Model
{

    protected $table = "faqs";

    protected $primaryKey = 'id';

    protected $allowedFields = ['question','answer'];

}