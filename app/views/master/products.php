<?php
require_once(VIEW_PATH . "master/inc/header.php");
?>
<div id = "main">
    
    <div class = "wrapper">
        <div id = "products">
            <h2>Bestsellers</h2>
            <div class = "grid-container">
            <?php foreach($products as $product): ?>

            
                <div class = "product-item">
                    <div class = "product-title"><?php echo $product->title; ?></div>
                    <div class = "product-img"><img src="<?php echo APP_URL  . '/resources/img/' . $product->image; ?>" ></div>  
                    <div class = "product-desc"><?php echo $product->description; ?></div>
                </div>


            
            <?php endforeach; ?>
            </div>
        </div>
        <div id = "comments">
            
            <h2>Comments</h2>
            
            <?php //var_dump($comments); exit;
            if(count($comments) > 0):
                foreach($comments as $comment): ?>
                
                    <div class = "comment">
                        <p class = "comm-name"><?php echo $comment->name; ?></p>
                        <p class ="comm-text"><?php echo $comment->comment_text; ?></p>
                    </div>
            <?php
                endforeach;
            else: ?>
                <div class = "comment">
                        <p class ="comm-text">Be the first to comment</p>
                    </div>
            <?php
            endif; ?>
            <div id = "comment-form">
                <h4>Leave your comment</h4>
                <p class = "validate"></p>
                <form method="post" action="<?php echo APP_URL  . '/comments/store'; ?>">
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name"><br>
                    <label for="email">Email:</label><br>
                    <input type="text" id="email" name="email"><br>
                    <textarea name="text" placeholder="Leave your comment..."></textarea><br>
                    <input type="submit" value="Submit" name="comment-sbt">
                </form>
            </div>
        </div>
        
    </div>

        
    
</div>

<?php
require_once(VIEW_PATH . "master/inc/footer.php");
?>