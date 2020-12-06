<?php
ob_start();
    include('header.php')
?>
 
 <?php
 count($product->getData('cart'))?include('Template/_carts.php'): include('Template/notfound/_notfound.php');
    
?>
<?php
    count($product->getData('wishlist'))?include('Template/_wishlist.php'): include('Template/notfound/_wishlist_notfound.php');

?>
        
       
<?php
    include('Template/_new-phones.php');
?>       
        
    
<?php
    include('footer.php')
?>  