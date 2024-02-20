<?php
namespace App\Models;
use CodeIgniter\Model;

class Category_model extends Model{
    protected $table = 'category';
    protected $allowedFields = ['id', 'category_name'];
    protected $primaryKey = 'id';
}