<?php

require('functions.php');

if(isset($_POST['cartPOST'])){
    createOrder();
};

$totalPrice = 0;
$totalDiscount = 0;

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/form/cart.css">
		<meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no'/>
    </head>
    <body>
        <div class="container">
            <div class="container__shoppingCart">
                <div class="container__shoppingCart__textAndIcon">
                <div><img src="../images/ZMaterials/cart-white.png" class="icon"></div>
                <div class="container__shoppingCart__text">Shoping cart</div>
                </div>
            </div>

            <div class = "container__middle">

                <div class="container__goods">
                <table>
                <tr>
                    <th>name</th>
                    <th>price</th>
                    <th>discount</th>
                </tr>

                <?php if(emptyCartCheck()):?>
                    <td><?php echo 'cart is empty' ?></td>
                <?php else:?>
                <?php foreach(getGoodsIds() as $value):?>
                        
                    <?php 
                        $goodsId = $value["goodsId"]; 
                        $lot = getGoods($goodsId);
                    ?>

                    <tr>
                        <td><?php echo $lot[0]["name"] ?></td>
                        <td>
                            <?php 
                                echo $lot[0]["price"]; 
                                $price = $lot[0]["price"]; 
                                $totalPrice = $totalPrice + $price; 
                            ?>
                        </td>
                        <td>
                        <?php echo $lot[0]["discount"]; 
                        $discount = $lot[0]["discount"]; 
                        $discount = getPrice($price, $discount); 
                        $totalDiscount = $totalDiscount + $discount; ?>
                        </td>
                    </tr>
                    
                <?php endforeach;?>
                <?php endif?>
                

                </table>
                </div>

            </div>

            

            <div class="line"></div>
            <div class="container__total">
            <div class="container__total__container">
                <div class="container__total__text">
                <div>Total:</div>
                <div><?php echo $totalPrice; ?></div>
                </div>
                <div class="container__total__text">
                <div>Total discount:</div>
                <div><?php echo $totalDiscount; ?></div>
                </div>
                <div class="container__total__text">
                <div>Summary:</div>
                <div><?php echo $totalPrice-$totalDiscount; ?></div>
                </div>
            </div>
            </div>
            <div class="line"></div>

            <div class="container__promo"><input type="text" placeholder="Do you have a promocode?"></div>

            <div class="container__Checkout">
                <div class="container__Checkout__text">
                <div>Checkout</div>
                </div>
            </div>

            <div class="container__email"><input type="email" placeholder="example@email.com"></div>

            <div class="container__pay">
                <form action="cart.php" method="POST" class="container__pay__containerButton">
                        <button class="button" name="cartPOST" type="submit" value=""> Create an order </button>
                </form> 
            </div>
        </div>
    </body>
</html>