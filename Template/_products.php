<?php
$item_id=$_GET['item_id']??1;
foreach($product->getData() as $item):
    if($item['item_id']==$item_id):
?>
<section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $item['item_image'] ??"./assets/product1.jpg"?>" class="img-fluid ml-5" alt="" style="height: 33rem;">
                        <div class="form-row pt-4 font-size-16">
                            <div class="col">
                            <?php
                                if(in_array($item['item_id'],$Cart->getCartId($product->getData('cart'))??[])){
                                    echo '<button type="submit" name="top_sale_submit" disabled class="btn btn-success pl-5 text-center font-size-16 form-control"> In the Cart</button>';
                                }
                                else{
                                    echo '<button type="submit" name="top_sale_submit" class="btn btn-warning pl-5 text-center font-size-16  form-control">Add to Cart</button>';
                                }
                            ?>
                                
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h5 class="font-size-30 font-castoro"><?php echo $item['item_name']??"Unknown";?></h5>
                        <small>by <?php echo $item['item_brand']??"Brand";?></small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12 ">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-lobster">20,534 ratings| 1000+ answered questions</a>
                        </div>
                        <hr class="mr-0">
                        <table class="my-3">
                            <tr class=" font-play font-size-14">
                                <td>M.R.P:</td>
                                <td><strike>$162.00</strike></td>
                            </tr>
                            <tr>
                                <td>Deal Price:</td>
                                <td class="text-danger font-size-20">$ <span><?php echo $item['item_price']??'0'; ?></span><small class="font-size-14 text-dark">&nbsp;Inlusive of all Taxes</small></td>
                            </tr>
                            <tr>
                                <td>You Save:</td>
                                <td class="text-danger">$10.00</td>
                            </tr>
                        </table>
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-secondary">
                                        <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-size-12">10 Days<br>Replacement</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-secondary">
                                        <span class="fas fa-truck border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-size-12">Delivered</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-secondary">
                                        <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-size-12">1 Year<br>Warranty</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div id="order-details" class="d-flex flex-column text-dark">
                            <small>Delivery By:Mar 29-Apr 14</small>
                            <small>Sold By <a href="#">Electronics</a>(5 out of 5 |18,191 ratings)</small>
                            <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;Deliver To Customer-36337</small>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="color my-3">
                                    <div class="d-flex justify-content-between">
                                        <h6>Colors:</h6>
                                        <div class=" p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                        <div class=" p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                        <div class=" p-2 color-secondary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="qty d-flex">
                                    <h6>Qty:</h6>
                                    <div class="px-4 d-flex ">
                                        <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1 "  placeholder="1">
                                        <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="size my-3">
                            <h6>Size:</h6>
                            <div class="d-flex justify-content-between w-75">
                                <div class="border p-2">
                                    <button class="btn p-0 font-size-14">4GB RAM</button>
                                </div>
                                <div class="border p-2">
                                    <button class="btn p-0 font-size-14">6GB RAM</button>
                                </div>
                                <div class="border p-2">
                                    <button class="btn p-0 font-size-14">8GB RAM</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <h6>Product Description</h6>
                        <hr>
                        <p class="font-size-14 font-castoro">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quas officia consectetur quasi dolore repellendus deleniti quam neque debitis corrupti ratione ipsa nisi quo, odio saepe reiciendis sequi enim consequuntur, fuga dolores. Fugit dolorem, dolorum quia animi quod laboriosam quis iste quaerat quas natus minus dolore dignissimos nobis corporis recusandae?</p>
                        <p class="font-size-14 font-castoro">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quas officia consectetur quasi dolore repellendus deleniti quam neque debitis corrupti ratione ipsa nisi quo, odio saepe reiciendis sequi enim consequuntur, fuga dolores. Fugit dolorem, dolorum quia animi quod laboriosam quis iste quaerat quas natus minus dolore dignissimos nobis corporis recusandae?</p>
                    </div>
                </div>
            </div>
       </section>
<?php
    endif;
    endforeach;
?>