<?php 
namespace App\Models;

use App\Database\ActiveRecord;

class Comment extends ActiveRecord
{
    public $id, $name, $email, $comment_text, $approved;
    static $key = 'id';
    static $table = 'comments';
}