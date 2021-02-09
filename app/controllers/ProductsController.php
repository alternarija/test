<?php 
namespace App\Controllers;

use App\Controllers\MainController;
use App\Models\Product;

class ProductsController extends MainController
{

    public function show(){

        $products = Product::get("ORDER BY id DESC LIMIT 9");
        //var_dump($products); exit;
        $var = ['products' => $products]; //variable for view

        $this->getView(false, 'products' ,$var);
        
    }
}