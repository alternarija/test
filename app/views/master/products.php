<?php
require_once(MASTER_INC_PATH . "header.php");
?>
<div id = "main">
    
    <div class = "wrapper">
        <div id = "products">
            <h1>Bestsellers</h1>
            <div class = "grid-container">
            <?php foreach($products as $product): ?>

            
                <div class = "product-item">
                    <div class = "product-title"><?php echo $product->title; ?></div>
                    <div class = "product-img"><img src="resources/img/<?php echo $product->image; ?>" ></div>  
                    <div class = "product-desc"><?php echo $product->description; ?></div>
                </div>


            
            <?php endforeach; ?>
            </div>
        </div>
        <div id = "comments">

        </div>
    </div>
        
    
</div>

<?php
require_once(MASTER_INC_PATH . "footer.php");
?>