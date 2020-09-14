<?php

function findGuest(){
    $conn = mysqli_connect('localhost', 'root', '', 'users'); // Устанавливает новое соединение с сервером MySQL. Первый аргумент - адрес сервера, второй имя пользователея, третий - пароль, четвертый - таблица
    
    $id = 'SELECT id FROM `users`.`usersdata` WHERE `email` = "guest"';

    $result = mysqli_query($conn, $id); // Выполняет запрос к базе данных, добавляет заказ
    
    $id = mysqli_fetch_all($result, MYSQLI_ASSOC); // Выбирает все строки из результирующего набора и помещает их в ассоциативный массив, обычный массив или в оба

    $id = $id[0]['id'];

    return $id;
}

function emptyOrderCheck($id){

    if(sizeof($id[0]["MAX(`numberOfOrder`)"])==0){
        $guestID = findGuest();

        $insertOrder = "INSERT INTO `store`.`orders` (email, userId, numberOfOrder) VALUES ('guest', $guestID, 1)";

        $conn = mysqli_connect('localhost', 'root', '', 'store'); // Устанавливает новое соединение с сервером MySQL. Первый аргумент - адрес сервера, второй имя пользователея, третий - пароль, четвертый - таблица
    
        mysqli_query($conn, $insertOrder); // Выполняет запрос к базе данных, добавляет в корзину товары
        
        mysqli_close($conn); // Закрывает ранее открытое соединение с базой данных

        return true;
    }
    else{
        return false;
    }

};

function getMaxNumberOfOrder(){
    $conn = mysqli_connect('localhost', 'root', '', 'store'); // Устанавливает новое соединение с сервером MySQL. Первый аргумент - адрес сервера, второй имя пользователея, третий - пароль, четвертый - таблица
    
    $numberOfOrder = 'SELECT MAX(`numberOfOrder`) FROM `store`.`orders` WHERE `email` = "guest"';

    $result = mysqli_query($conn, $numberOfOrder); // Выполняет запрос к базе данных, добавляет заказ
    
    $numberOfOrder = mysqli_fetch_all($result, MYSQLI_ASSOC); // Выбирает все строки из результирующего набора и помещает их в ассоциативный массив, обычный массив или в оба

    if(emptyOrderCheck($numberOfOrder)){
        $numberOfOrder = 'SELECT MAX(`numberOfOrder`) FROM `store`.`orders` WHERE `email` = "guest"';

        $result = mysqli_query($conn, $numberOfOrder); // Выполняет запрос к базе данных, добавляет заказ
        
        $numberOfOrder = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    $numberOfOrder = $numberOfOrder[0]["MAX(`numberOfOrder`)"];

    $queryMaxId = "SELECT `id`, `numberOfOrder` FROM `store`.`orders` WHERE `numberOfOrder` = $numberOfOrder and `email` = 'guest'";
    
    $result = mysqli_query($conn, $queryMaxId); // Выполняет запрос к базе данных, добавляет заказ
    
    $id = mysqli_fetch_all($result, MYSQLI_ASSOC); // Выбирает все строки из результирующего набора и помещает их в ассоциативный массив, обычный массив или в оба
    
    mysqli_free_result($result); // Освобождает память, занятую результатами запроса
    
    mysqli_close($conn); // Закрывает ранее открытое соединение с базой данных

    return $id;
}

function getGoodsIds(){
    
    $conn = mysqli_connect('localhost', 'root', '', 'store'); // Устанавливает новое соединение с сервером MySQL. Первый аргумент - адрес сервера, второй имя пользователея, третий - пароль, четвертый - таблица
    
    $id = getMaxNumberOfOrder();

    $id = $id[0]["id"];
    
    $query = "SELECT `goodsId` FROM `cart` WHERE `orderID` = $id"; // Запрос к базе данных, который будет исполнен
    
    $result = mysqli_query($conn, $query); // Выполняет запрос к базе данных

    $goodsIds = mysqli_fetch_all($result, MYSQLI_ASSOC); // Выбирает все строки из результирующего набора и помещает их в ассоциативный массив, обычный массив или в оба
    
    mysqli_free_result($result); // Освобождает память, занятую результатами запроса
    
    mysqli_close($conn); // Закрывает ранее открытое соединение с базой данных
    
    return $goodsIds;
}

function getGoodsIdsByOrderID($id){
    
    $conn = mysqli_connect('localhost', 'root', '', 'store'); // Устанавливает новое соединение с сервером MySQL. Первый аргумент - адрес сервера, второй имя пользователея, третий - пароль, четвертый - таблица
    
    $query = "SELECT `goodsId` FROM `cart` WHERE `orderID` = $id"; // Запрос к базе данных, который будет исполнен
    
    $result = mysqli_query($conn, $query); // Выполняет запрос к базе данных

    $goodsIds = mysqli_fetch_all($result, MYSQLI_ASSOC); // Выбирает все строки из результирующего набора и помещает их в ассоциативный массив, обычный массив или в оба
    
    mysqli_free_result($result); // Освобождает память, занятую результатами запроса
    
    mysqli_close($conn); // Закрывает ранее открытое соединение с базой данных
    
    return $goodsIds;
}

function getOrdersIds(){

    $conn = mysqli_connect('localhost', 'root', '', 'store'); // Устанавливает новое соединение с сервером MySQL. Первый аргумент - адрес сервера, второй имя пользователея, третий - пароль, четвертый - таблица
    
    $query = "SELECT `id` FROM `store`.`orders` WHERE `email` = 'guest'";

    $result = mysqli_query($conn, $query); // Выполняет запрос к базе данных

    $orderIds = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    mysqli_free_result($result); // Освобождает память, занятую результатами запроса
    
    mysqli_close($conn); // Закрывает ранее открытое соединение с базой данных

    return $orderIds;

}

function getGoods($id){

    $conn = mysqli_connect('localhost', 'root', '', 'store'); // Устанавливает новое соединение с сервером MySQL. Первый аргумент - адрес сервера, второй имя пользователея, третий - пароль, четвертый - таблица
    $query = "SELECT `name`, `price`, `discount` FROM `goods` WHERE id = $id"; // Запрос к базе данных, который будет исполнен
    
    $result = mysqli_query($conn, $query); // Выполняет запрос к базе данных
    $goods = mysqli_fetch_all($result, MYSQLI_ASSOC); // Выбирает все строки из результирующего набора и помещает их в ассоциативный массив, обычный массив или в оба

    mysqli_free_result($result); // Освобождает память, занятую результатами запроса

    mysqli_close($conn); // Закрывает ранее открытое соединение с базой данных

    return $goods;

}

function getPrice($price, $discountPercent){

    $discount = ($price*$discountPercent)/100;
    return $discount;

}

function getOverlay($tag){
    $conn = mysqli_connect('localhost', 'root', '', 'store'); // Устанавливает новое соединение с сервером MySQL. Первый аргумент - адрес сервера, второй имя пользователея, третий - пароль, четвертый - таблица
    
    $query = "SELECT `name`, `background`, `goodsDescription`, `goodsSystemReq`, `price`, `discount` FROM `store`.`goods` WHERE `goods`.`tag` = '$tag'"; // Запрос к базе данных, который будет исполнен
    
    $result = mysqli_query($conn, $query); // Выполняет запрос к базе данных
    $goods = mysqli_fetch_all($result, MYSQLI_ASSOC); // Выбирает все строки из результирующего набора и помещает их в ассоциативный массив, обычный массив или в оба
    
    mysqli_free_result($result); // Освобождает память, занятую результатами запроса
    
    mysqli_close($conn); // Закрывает ранее открытое соединение с базой данных

    return $goods[0];
}

function putToCart($goodsId){

    $conn = mysqli_connect('localhost', 'root', '', 'store'); // Устанавливает новое соединение с сервером MySQL. Первый аргумент - адрес сервера, второй имя пользователея, третий - пароль, четвертый - таблица
    
    $id = getMaxNumberOfOrder();
    
    $orderID = $id[0]["id"];
    
    $id = $id[0]["numberOfOrder"];
    
    $insertCart = "INSERT INTO `store`.`cart` (orderID, amount, goodsId, numberOfOrder) VALUES ($orderID, 1, $goodsId, $id)"; // Запрос к базе данных, который будет исполнен

    mysqli_query($conn, $insertCart); // Выполняет запрос к базе данных, добавляет в корзину товары
    
    mysqli_close($conn); // Закрывает ранее открытое соединение с базой данных

};

function goodsById($tag){

    $conn = mysqli_connect('localhost', 'root', '', 'store');

    $query = "SELECT id FROM `store`.`goods` WHERE `goods`.`tag` = '$tag'";

    $result = mysqli_query($conn, $query);
    
    $goods = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);
    
    mysqli_close($conn);

    $id = $goods[0]["id"];

    return $id;

}

function getOrderNumber($id){

    $conn = mysqli_connect('localhost', 'root', '', 'store');

    $query = "SELECT numberOfOrder FROM `store`.`orders` WHERE `orders`.`id` = $id";

    $result = mysqli_query($conn, $query);

    $orderNumber = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);
    
    mysqli_close($conn);

    $num = $orderNumber[0]["numberOfOrder"];

    return $num;
};

function getCover($tag){
    $conn = mysqli_connect('localhost', 'root', '', 'store'); // Устанавливает новое соединение с сервером MySQL. Первый аргумент - адрес сервера, второй имя пользователея, третий - пароль, четвертый - таблица
    
    $query = "SELECT `cover` FROM `store`.`goods` WHERE `goods`.`tag` = '$tag'"; // Запрос к базе данных, который будет исполнен
    
    $result = mysqli_query($conn, $query); // Выполняет запрос к базе данных
    $cover = mysqli_fetch_all($result, MYSQLI_ASSOC); // Выбирает все строки из результирующего набора и помещает их в ассоциативный массив, обычный массив или в оба
    
    mysqli_free_result($result); // Освобождает память, занятую результатами запроса
    
    mysqli_close($conn); // Закрывает ранее открытое соединение с базой данных

    return $cover[0]["cover"];
};

function emptyCartCheck(){
    $conn = mysqli_connect('localhost', 'root', '', 'store'); // Устанавливает новое соединение с сервером MySQL. Первый аргумент - адрес сервера, второй имя пользователея, третий - пароль, четвертый - таблица
    
    $query = "SELECT `goodsId` FROM `store`.`cart`"; // Запрос к базе данных, который будет исполнен
    
    $result = mysqli_query($conn, $query); // Выполняет запрос к базе данных

    $ids = mysqli_fetch_all($result, MYSQLI_ASSOC); // Выбирает все строки из результирующего набора и помещает их в ассоциативный массив, обычный массив или в оба

    mysqli_close($conn); // Закрывает ранее открытое соединение с базой данных

    if(sizeof($ids)==0){
        return true;
    }
    else{
        return false;
    }
}

function createOrder(){
    if(!emptyCartCheck()){
        $conn = mysqli_connect('localhost', 'root', '', 'store'); // Устанавливает новое соединение с сервером MySQL. Первый аргумент - адрес сервера, второй имя пользователея, третий - пароль, четвертый - таблица
            
        $id = getMaxNumberOfOrder();
    
        $id = $id[0]["numberOfOrder"];
    
        $id = $id + 1;

        $guestID = findGuest();
            
        $insertOrder = "INSERT INTO `store`.`orders` (email, userId, numberOfOrder) VALUES ('guest', $guestID, $id)"; // Запрос к базе данных, который будет исполнен
        
        mysqli_query($conn, $insertOrder); // Выполняет запрос к базе данных, добавляет в корзину товары
        
        mysqli_close($conn); // Закрывает ранее открытое соединение с базой данных
    }
};

?>