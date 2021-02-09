<?php 
namespace App\Models;

use App\Database\ActiveRecord;

class Product extends ActiveRecord
{
    public $id, $title, $description, $image;
    static $key = 'id';
    static $table = 'products';
}