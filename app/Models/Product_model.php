<?php
namespace app\Models;

use CodeIgniter\Model;

class Product_model extends Model{
    
    protected $table = 'product';
    protected $allowedFields = ['id', 'product_name', 'category_id', 'sub_category_id', 'price', 'description', 'main_image', 'sub_image1', 'sub_image2', 'sub_image3', 'sub_image4'];
    protected $primaryKey = 'id';
}