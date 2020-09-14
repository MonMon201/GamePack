<?php

require('functions.php');

if(isset($_POST['orderPOST'])){
    $conn = mysqli_connect('localhost', 'root', '', 'store'); // Устанавливает новое соединение с сервером MySQL. Первый аргумент - адрес сервера, второй имя пользователея, третий - пароль, четвертый - таблица
    
    $id = getMaxNumberOfOrder();

    $id = $id[0]["numberOfOrder"];

    $id = $id + 1;

    $guestID = findGuest();
    
    $insertOrder = "INSERT INTO `store`.`orders` (email, userId, numberOfOrder) VALUES ('guest', $guestID, $id)"; // Запрос к базе данных, который будет исполнен
    
    mysqli_query($conn, $insertOrder); // Выполняет запрос к базе данных, добавляет в корзину товары
    
    mysqli_close($conn); // Закрывает ранее открытое соединение с базой данных
};

$totalPrice = 0;
$totalDiscount = 0;

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/form/orders1.css">
		<meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no'/>
    </head>
    <body>
        <div class="container">
            <div class="container__shoppingCart">
                <div class="container__shoppingCart__textAndIcon">
                <div><img src="../images/ZMaterials/list1.png" class="icon"></div>
                <div class="container__shoppingCart__text">Orders</div>
                </div>
            </div>

            <div class = "container__middle">

                <div class="container__goods">
                
                <table>
                
                <?php foreach(getOrdersIds() as $value): ?>

                    <?php $orderId = $value["id"]; ?>
                    <tr>
                        <td><div class="line"></div></td>
                        <td><div class="line"></div></td>
                        <td><div class="line"></div></td>
                    </tr>
                    <tr>
                        <td><div> Order number #<?php $number = getOrderNumber($orderId); echo $number; ?> </div></td>
                    </tr>
                    <tr>
                        <td><div class="line"></div></td>
                        <td><div class="line"></div></td>
                        <td><div class="line"></div></td>
                    </tr>
                    <tr>
                        <th>name</th>
                        <th>price</th>
                        <th>discount</th>
                    </tr>
                    
                <?php foreach(getGoodsIdsByOrderID($value["id"]) as $value):?>

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
                            <?php 
                                echo $lot[0]["discount"]; 
                                $discount = $lot[0]["discount"]; 
                                $discount = getPrice($price, $discount); 
                                $totalDiscount = $totalDiscount + $discount; 
                            ?>
                        </td>
                    </tr>
                    
                <?php endforeach;?>
                <?php endforeach;?>

                </table>
                </div>

            </div>

            
            <div class = "bottom">
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
            </div>
        </div>
    </body>
</html>