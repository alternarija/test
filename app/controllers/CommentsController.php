<?php 
namespace App\Controllers;

use App\Controllers\MainController;
use App\Models\Comment;

class CommentsController extends MainController{

    public function store(){
        
        if(isset($_POST['comment-sbt'])){

            if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['text']) && !empty($_POST['text'])){
                

                $comment = new Comment;
                $comment->prepareInsert();
              
                try{
                 
                    $comment->insert();
                    $redirect = APP_URL . "/products/show";
                    header("Location: {$redirect}");
                    exit();
                }
                catch(\Exception $e){
                    // TODO redirect with vars
                    $redirect = APP_URL . "/products/show";
                    header("Location: {$redirect}");
                    exit();
                
                }
                
                
            }else{

                // TODO redirect with vars
                $redirect = APP_URL . "/products/show";
                header("Location: {$redirect}");
                exit();
            }
            
        }
    }

    public function approve(){

        if(isset($_POST['sbt_comm'])){

            $comment_id = htmlspecialchars($_POST['comm_id'],ENT_QUOTES);

            $comment = Comment::getById($comment_id);
            $comment->approved = 1;
            try{
                $comment->update($comment_id);
                $redirect = APP_URL . "/admin/show";
                    header("Location: {$redirect}");
                    exit();
            }catch(\Exception $e){
                // TODO redirect with vars
                $redirect = APP_URL . "/products/show";
                header("Location: {$redirect}");
                exit();
            
            }
            

            
        }

    }


}