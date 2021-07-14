<?php namespace App\Models;

use CodeIgniter\Model;

class HeaderImagesModel extends Model
{

    protected $table = "header_images";

    protected $primaryKey = 'id';

    protected $allowedFields = ['name','link'];

}