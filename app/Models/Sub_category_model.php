<?php
namespace App\Models;
use CodeIgniter\Model;

class Sub_category_model extends Model{
    protected $table = 'sub_category';
    protected $allowedFields = ['id', 'sub_category_name'];
    protected $primaryKey = 'id';
}