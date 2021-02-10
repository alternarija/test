<?php 
namespace App\Controllers;

use App\Controllers\MainController;
use App\Models\Product;
use App\Models\Comment;

class ProductsController extends MainController
{

    public function show(){

        $products = Product::get("ORDER BY id DESC LIMIT 9");
        $comments = Comment::get("WHERE approved = 1 ");

        
        $var = ['products' => $products, 'comments' => $comments]; //variable for view

        $this->getView('master/products', $var);
        
    }
}