<?php 
namespace App\Models;

use App\Database\ActiveRecord;

class Comment extends ActiveRecord
{
    public $id, $name, $email, $comment_text, $approved;
    static $key = 'id';
    static $table = 'comments';

    public function prepareInsert(){

        $this->name =  htmlspecialchars($_POST['name'],ENT_QUOTES);
        $this->email = htmlspecialchars(trim($_POST['email']),ENT_QUOTES);
        $this->comment_text = htmlspecialchars($_POST['text'],ENT_QUOTES);
        $this->approved = 1;
       
    }
}