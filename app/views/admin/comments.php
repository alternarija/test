<?php
require_once(VIEW_PATH . "master/inc/header.php");
?>
<div id = "main" class = "admin-comments">
    <div class='wrapper'>
        <h3>Comments: </h3>
        <?php foreach($comments as $comment): ?>
            <div class = "admin-comment">
                
                <p><?php echo 'name: ' . $comment->name; ?></p>
                <p><?php echo 'email: ' . $comment->email; ?></p>
                <p><?php echo $comment->comment_text; ?></p>
                <form method = "post" action = "<?php echo APP_URL . '/comments/approve'?>">
                    <input type = "hidden" value = "<?php echo $comment->id; ?>" name = "comm_id">
                    <input type = "submit" value = "Approve" name = "sbt_comm">
                </form>
            </div>
        <?php endforeach; ?> 
    </div>
</div>

<?php
require_once(VIEW_PATH . "master/inc/footer.php");
?>