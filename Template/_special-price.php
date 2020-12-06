<?php

shuffle($product_shuffle);
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['special_price_submit'])){
    $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
}
}
$in_cart=$Cart->getCartId($product->getData('cart'));

?>      
        
        
        <section id="special-price">
            <div class="container">
                <h4>Special Price</h4>
                    <div id="filters" class="button-group text-right">
                        <button class="btn is-checked" data-filter="*">All Brand</button>
                        <button class="btn" data-filter=".Oppo">Oppo</button>
                        <button class="btn" data-filter=".Samsung">Samsung</button>
                        <button class="btn" data-filter=".Vivo">Vivo</button>
                    </div>
                    <div class="grid">
                        <?php array_map(function($item) use($in_cart){?>
                        <div class="grid-item  border <?php echo $item['item_brand']?? "Brand";?>">
                            <div class="item py-2"style="width:200px:">
                                <div class="product">
                                    <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id'])?>"><img src="<?php echo $item['item_image'] ??"./assets/oppo1.jpg";?>" alt="" class="img-fluid" style="height: 10rem; width: 10rem;"></a>
                                    <div class=" title pl-5">
                                        <h6><?php echo $item['item_name']??"Unknown";?></h6>
                                    </div>
                                    <div class="rating text-warning font-size-12 pl-5">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="price py-2 ml-5">
                                        <span>$<?php echo $item['item_price']??'0'; ?></span>
                                    </div>
                                    <form method="post" class="text-center">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id']?? '1';?>">
                            <input type="hidden" name="user_id" value="<?php echo 1;?>">
                            <?php
                               if (in_array($item['item_id'], $in_cart ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                            }else{
                                echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                            }
                            ?>
                           </form>
                                </div>
    
                            </div>
                        </div>
                        <?php },$product_shuffle)?>   
                    </div>
                </div>
        </section>
        