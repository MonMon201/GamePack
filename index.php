<?php
#обработчики нажатия на кнопки
require('./src/php/functions.php');

if(isset($_POST['ACO'])){
    
    $conn = mysqli_connect('localhost', 'root', '', 'store');

    $tag = 'ACO';

    $id = goodsById($tag);

    putToCart($id);

};

if(isset($_POST['Civ6'])){
    
    $conn = mysqli_connect('localhost', 'root', '', 'store');

    $tag = 'Civ6';

    $id = goodsById($tag);

    putToCart($id);

};

if(isset($_POST['Witcher3'])){
    
    $conn = mysqli_connect('localhost', 'root', '', 'store');

    $tag = 'Witcher3';

    $id = goodsById($tag);

    putToCart($id);

};

if(isset($_POST['DL'])){
    
    $conn = mysqli_connect('localhost', 'root', '', 'store');

    $tag = 'DL';

    $id = goodsById($tag);

    putToCart($id);

};

if(isset($_POST['DeathStranding'])){
    
    $conn = mysqli_connect('localhost', 'root', '', 'store');

    $tag = 'DeathStranding';

    $id = goodsById($tag);

    putToCart($id);

};

if(isset($_POST['BD3'])){
    
    $conn = mysqli_connect('localhost', 'root', '', 'store');

    $tag = 'BD3';

    $id = goodsById($tag);

    putToCart($id);

};

if(isset($_POST['Rust'])){
    
    $conn = mysqli_connect('localhost', 'root', '', 'store');

    $tag = 'Rust';

    $id = goodsById($tag);

    putToCart($id);

};

if(isset($_POST['DMC5'])){
    
    $conn = mysqli_connect('localhost', 'root', '', 'store');

    $tag = 'DMC5';

    $id = goodsById($tag);

    putToCart($id);

};

if(isset($_POST['F76'])){
    
    $conn = mysqli_connect('localhost', 'root', '', 'store');

    $tag = 'F76';

    $id = goodsById($tag);

    putToCart($id);

};

if(isset($_POST['GTAV'])){
    
    $conn = mysqli_connect('localhost', 'root', '', 'store');

    $tag = 'GTAV';

    $id = goodsById($tag);

    putToCart($id);

};

if(isset($_POST['Ori'])){
    
    $conn = mysqli_connect('localhost', 'root', '', 'store');

    $tag = 'Ori';

    $id = goodsById($tag);

    putToCart($id);

};

if(isset($_POST['Inj2'])){
    
    $conn = mysqli_connect('localhost', 'root', '', 'store');

    $tag = 'Inj2';

    $id = goodsById($tag);

    putToCart($id);

};

if(isset($_POST['Ins'])){
    
    $conn = mysqli_connect('localhost', 'root', '', 'store');

    $tag = 'Ins';

    $id = goodsById($tag);

    putToCart($id);

};

if(isset($_POST['RE2'])){
    
    $conn = mysqli_connect('localhost', 'root', '', 'store');

    $tag = 'RE2';

    $id = goodsById($tag);

    putToCart($id);

};

if(isset($_POST['PUBG'])){
    
    $conn = mysqli_connect('localhost', 'root', '', 'store');

    $tag = 'PUBG';

    $id = goodsById($tag);

    putToCart($id);

};

?>


<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" href=".\src\css\main\main2.css">
		<meta name='viewport' content='width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no' />
    </head>

    <body>
        


<!-- ------------------------------------------------------------------- ОВЕРЛЕИ ------------------------------------------------------------------------ -->


<!-- В этом контейнере находятся оверлеи для лотов, оверлей можно открыть, нажав на лот, закрыть его можно, нажав на тёмную область вне оверлея, 
    нажав esc или нажав на кнопку закрытия -->

        <div class="overlayConatiner">

        <?php $overlay = getOverlay('ACO'); ?>
        <div class="overlay AC opacity">
            <!-- это глобальный оверлей, div, по ширине экрана, который оттеняет всё, помимо оверлея -->
            <div class="overlay__globalOverlay"></div>
            <!-- здесь содержится сам оверлей для лота. Модификатор - фон для формы -->
            <div class="overlay__lot bgAC">
                
                <!-- это форма, в которой находится картинка и информация -->
                <div class="overlay__lot__form">
                    <!-- кнопка закрытия оверлея, если на неё нажать - оверлей закроется -->
                    <img src="./src/images/ZMaterials/closeButton.png" class="closeButton">
                    
                    <div class="overlay__lot__form__top"> <div class="packname"> <?php echo $overlay["name"]; ?> </div> </div>
    
                        <div class="overlay__lot__form__middle">
                            
                            <div class="overlay__lot__form__slider"> 
                                <img src=<?php echo $overlay["background"]; ?> class="screen"> 
                            </div>
                            <!-- Цена игры и платформы, с которых её можно запустить -->
                            <div class="overlay__lot__form__platformsAndPrice">
                                <div class="platforms">
                                    Platforms:<br>
                                    <img src="./src/images/ZMaterials/steam_icon.png" class="platformsIcons">
                                </div>
                                <div class="price">
                                    PRICE:<br>
                                    <?php echo $overlay["price"]; ?>$<br>
                                    DISCOUNT:<br>
                                    <?php echo $overlay["discount"]; ?>%
                                </div>
                            </div>
    
                            <div class=overlay_lot__form__text>
                                <!-- Описание, системные требования, для этого блока сделана возможность прокручивания, чтобы иметь возможность 
                                    положить больше текста -->
                                <div class="overlay_lot__form__text__description">
                                    <h3>DESCRIPTION</h3>
                                    <p>
                                        <?php echo $overlay["goodsDescription"]; ?>        
                                    </p>
                                </div>
    
                                <div class="overlay_lot__form__text__sysReq">
                                    <h3>System Requirements</h3>
                                    <p>
                                        <?php echo $overlay["goodsSystemReq"]; ?>  
                                    </p>
                                </div>
                            </div>
                        </div>

                            <form action="index.php" method="POST" class="overlay__lot__form__containerButton">    
                                <button class="overlay__lot__form__button" name="ACO" type="submit" value=""> <div class="overlay__lot__form__button__text">Add to cart</div> </button>
                            </form>

                            <div class="overlay__lot__form__button white">
                                <div class="overlay__lot__form__button__text">Add to wishlist</div>
                            </div>
                            
                        <div class="overlay__lot__form__bottom"></div>
                    </div>
                    
            </div>
        </div>

        <?php $overlay = getOverlay('Civ6'); ?>
        <div class="overlay civilization6 opacity">
            <!-- это глобальный оверлей, div, по ширине экрана, который оттеняет всё, помимо оверлея -->
            <div class="overlay__globalOverlay"></div>
            <!-- здесь содержится сам оверлей для лота. Модификатор - фон для формы -->
            <div class="overlay__lot bgCiv6">
                
                <!-- это форма, в которой находится картинка и информация -->
                <div class="overlay__lot__form">
                    <!-- кнопка закрытия оверлея, если на неё нажать - оверлей закроется -->
                    <img src="./src/images/ZMaterials/closeButton.png" class="closeButton">
                    
                    <div class="overlay__lot__form__top"> <div class="packname"> <?php echo $overlay["name"]; ?> </div> </div>
    
                        <div class="overlay__lot__form__middle">
                            
                            <div class="overlay__lot__form__slider"> 
                                <img src=<?php echo $overlay["background"]; ?> class="screen"> 
                            </div>
                            <!-- Цена игры и платформы, с которых её можно запустить -->
                            <div class="overlay__lot__form__platformsAndPrice">
                                <div class="platforms">
                                    Platforms:<br>
                                    <img src="./src/images/ZMaterials/steam_icon.png" class="platformsIcons">
                                </div>
                                <div class="price">
                                    PRICE:<br>
                                    <?php echo $overlay["price"]; ?>$<br>
                                    DISCOUNT:<br>
                                    <?php echo $overlay["discount"]; ?>%
                                </div>
                            </div>
    
                            <div class=overlay_lot__form__text>
                                <!-- Описание, системные требования, для этого блока сделана возможность прокручивания, чтобы иметь возможность 
                                    положить больше текста -->
                                <div class="overlay_lot__form__text__description">
                                    <h3>DESCRIPTION</h3>
                                    <p>
                                        <?php echo $overlay["goodsDescription"]; ?>        
                                    </p>
                                </div>
    
                                <div class="overlay_lot__form__text__sysReq">
                                    <h3>System Requirements</h3>
                                    <p>
                                        <?php echo $overlay["goodsSystemReq"]; ?>  
                                    </p>
                                </div>
                            </div>
                        </div>

                            <form action="index.php" method="POST" class="overlay__lot__form__containerButton">    
                                <button class="overlay__lot__form__button" name="Civ6" type="submit" value=""> <div class="overlay__lot__form__button__text">Add to cart</div> </button>
                            </form>

                            <div class="overlay__lot__form__button white">
                                <div class="overlay__lot__form__button__text">Add to wishlist</div>
                            </div>
                            
                        <div class="overlay__lot__form__bottom"></div>
                    </div>
                    
            </div>
        </div>

        <?php $overlay = getOverlay('Witcher3'); ?>
        <div class="overlay witcher opacity">
            <!-- это глобальный оверлей, div, по ширине экрана, который оттеняет всё, помимо оверлея -->
            <div class="overlay__globalOverlay"></div>
            <!-- здесь содержится сам оверлей для лота. Модификатор - фон для формы -->
            <div class="overlay__lot bgWitcher3">
                
                <!-- это форма, в которой находится картинка и информация -->
                <div class="overlay__lot__form">
                    <!-- кнопка закрытия оверлея, если на неё нажать - оверлей закроется -->
                    <img src="./src/images/ZMaterials/closeButton.png" class="closeButton">
                    
                    <div class="overlay__lot__form__top"> <div class="packname"> <?php echo $overlay["name"]; ?> </div> </div>
    
                        <div class="overlay__lot__form__middle">
                            
                            <div class="overlay__lot__form__slider"> 
                                <img src=<?php echo $overlay["background"]; ?> class="screen"> 
                            </div>
                            <!-- Цена игры и платформы, с которых её можно запустить -->
                            <div class="overlay__lot__form__platformsAndPrice">
                                <div class="platforms">
                                    Platforms:<br>
                                    <img src="./src/images/ZMaterials/steam_icon.png" class="platformsIcons">
                                </div>
                                <div class="price">
                                    PRICE:<br>
                                    <?php echo $overlay["price"]; ?>$<br>
                                    DISCOUNT:<br>
                                    <?php echo $overlay["discount"]; ?>%
                                </div>
                            </div>
    
                            <div class=overlay_lot__form__text>
                                <!-- Описание, системные требования, для этого блока сделана возможность прокручивания, чтобы иметь возможность 
                                    положить больше текста -->
                                <div class="overlay_lot__form__text__description">
                                    <h3>DESCRIPTION</h3>
                                    <p>
                                        <?php echo $overlay["goodsDescription"]; ?>        
                                    </p>
                                </div>
    
                                <div class="overlay_lot__form__text__sysReq">
                                    <h3>System Requirements</h3>
                                    <p>
                                        <?php echo $overlay["goodsSystemReq"]; ?>  
                                    </p>
                                </div>
                            </div>
                        </div>

                            <form action="index.php" method="POST" class="overlay__lot__form__containerButton">    
                                <button class="overlay__lot__form__button" name="Witcher3" type="submit" value=""> <div class="overlay__lot__form__button__text">Add to cart</div> </button>
                            </form>

                            <div class="overlay__lot__form__button white">
                                <div class="overlay__lot__form__button__text">Add to wishlist</div>
                            </div>
                            
                        <div class="overlay__lot__form__bottom"></div>
                    </div>
                    
            </div>
        </div>

        <?php $overlay = getOverlay('DL'); ?>
        <div class="overlay dl opacity">
            <!-- это глобальный оверлей, div, по ширине экрана, который оттеняет всё, помимо оверлея -->
            <div class="overlay__globalOverlay"></div>
            <!-- здесь содержится сам оверлей для лота. Модификатор - фон для формы -->
            <div class="overlay__lot bgDl">
                
                <!-- это форма, в которой находится картинка и информация -->
                <div class="overlay__lot__form">
                    <!-- кнопка закрытия оверлея, если на неё нажать - оверлей закроется -->
                    <img src="./src/images/ZMaterials/closeButton.png" class="closeButton">
                    
                    <div class="overlay__lot__form__top"> <div class="packname"> <?php echo $overlay["name"]; ?> </div> </div>
    
                        <div class="overlay__lot__form__middle">
                            
                            <div class="overlay__lot__form__slider"> 
                                <img src=<?php echo $overlay["background"]; ?> class="screen"> 
                            </div>
                            <!-- Цена игры и платформы, с которых её можно запустить -->
                            <div class="overlay__lot__form__platformsAndPrice">
                                <div class="platforms">
                                    Platforms:<br>
                                    <img src="./src/images/ZMaterials/steam_icon.png" class="platformsIcons">
                                </div>
                                <div class="price">
                                    PRICE:<br>
                                    <?php echo $overlay["price"]; ?>$<br>
                                    DISCOUNT:<br>
                                    <?php echo $overlay["discount"]; ?>%
                                </div>
                            </div>
    
                            <div class=overlay_lot__form__text>
                                <!-- Описание, системные требования, для этого блока сделана возможность прокручивания, чтобы иметь возможность 
                                    положить больше текста -->
                                <div class="overlay_lot__form__text__description">
                                    <h3>DESCRIPTION</h3>
                                    <p>
                                        <?php echo $overlay["goodsDescription"]; ?>        
                                    </p>
                                </div>
    
                                <div class="overlay_lot__form__text__sysReq">
                                    <h3>System Requirements</h3>
                                    <p>
                                        <?php echo $overlay["goodsSystemReq"]; ?>  
                                    </p>
                                </div>
                            </div>
                        </div>

                            <form action="index.php" method="POST" class="overlay__lot__form__containerButton">    
                                <button class="overlay__lot__form__button" name="DL" type="submit" value=""> <div class="overlay__lot__form__button__text">Add to cart</div> </button>
                            </form>

                            <div class="overlay__lot__form__button white">
                                <div class="overlay__lot__form__button__text">Add to wishlist</div>
                            </div>
                            
                        <div class="overlay__lot__form__bottom"></div>
                    </div>
                    
            </div>
        </div>
        
        <?php $overlay = getOverlay('DeathStranding'); ?>
        <div class="overlay dea opacity">
            <!-- это глобальный оверлей, div, по ширине экрана, который оттеняет всё, помимо оверлея -->
            <div class="overlay__globalOverlay"></div>
            <!-- здесь содержится сам оверлей для лота. Модификатор - фон для формы -->
            <div class="overlay__lot bgDea">
                
                <!-- это форма, в которой находится картинка и информация -->
                <div class="overlay__lot__form">
                    <!-- кнопка закрытия оверлея, если на неё нажать - оверлей закроется -->
                    <img src="./src/images/ZMaterials/closeButton.png" class="closeButton">
                    
                    <div class="overlay__lot__form__top"> <div class="packname"> <?php echo $overlay["name"]; ?> </div> </div>
    
                        <div class="overlay__lot__form__middle">
                            
                            <div class="overlay__lot__form__slider"> 
                                <img src=<?php echo $overlay["background"]; ?> class="screen"> 
                            </div>
                            <!-- Цена игры и платформы, с которых её можно запустить -->
                            <div class="overlay__lot__form__platformsAndPrice">
                                <div class="platforms">
                                    Platforms:<br>
                                    <img src="./src/images/ZMaterials/steam_icon.png" class="platformsIcons">
                                </div>
                                <div class="price">
                                    PRICE:<br>
                                    <?php echo $overlay["price"]; ?>$<br>
                                    DISCOUNT:<br>
                                    <?php echo $overlay["discount"]; ?>%
                                </div>
                            </div>
    
                            <div class=overlay_lot__form__text>
                                <!-- Описание, системные требования, для этого блока сделана возможность прокручивания, чтобы иметь возможность 
                                    положить больше текста -->
                                <div class="overlay_lot__form__text__description">
                                    <h3>DESCRIPTION</h3>
                                    <p>
                                        <?php echo $overlay["goodsDescription"]; ?>        
                                    </p>
                                </div>
    
                                <div class="overlay_lot__form__text__sysReq">
                                    <h3>System Requirements</h3>
                                    <p>
                                        <?php echo $overlay["goodsSystemReq"]; ?>  
                                    </p>
                                </div>
                            </div>
                        </div>

                            <form action="index.php" method="POST" class="overlay__lot__form__containerButton">    
                                <button class="overlay__lot__form__button" name="DeathStranding" type="submit" value=""> <div class="overlay__lot__form__button__text">Add to cart</div> </button>
                            </form>

                            <div class="overlay__lot__form__button white">
                                <div class="overlay__lot__form__button__text">Add to wishlist</div>
                            </div>
                            
                        <div class="overlay__lot__form__bottom"></div>
                    </div>
                    
            </div>
        </div>

        <?php $overlay = getOverlay('BD3'); ?>
        <div class="overlay bl opacity">
            <!-- это глобальный оверлей, div, по ширине экрана, который оттеняет всё, помимо оверлея -->
            <div class="overlay__globalOverlay"></div>
            <!-- здесь содержится сам оверлей для лота. Модификатор - фон для формы -->
            <div class="overlay__lot bgBl">
                
                <!-- это форма, в которой находится картинка и информация -->
                <div class="overlay__lot__form">
                    <!-- кнопка закрытия оверлея, если на неё нажать - оверлей закроется -->
                    <img src="./src/images/ZMaterials/closeButton.png" class="closeButton">
                    
                    <div class="overlay__lot__form__top"> <div class="packname"> <?php echo $overlay["name"]; ?> </div> </div>
    
                        <div class="overlay__lot__form__middle">
                            
                            <div class="overlay__lot__form__slider"> 
                                <img src=<?php echo $overlay["background"]; ?> class="screen"> 
                            </div>
                            <!-- Цена игры и платформы, с которых её можно запустить -->
                            <div class="overlay__lot__form__platformsAndPrice">
                                <div class="platforms">
                                    Platforms:<br>
                                    <img src="./src/images/ZMaterials/steam_icon.png" class="platformsIcons">
                                </div>
                                <div class="price">
                                    PRICE:<br>
                                    <?php echo $overlay["price"]; ?>$<br>
                                    DISCOUNT:<br>
                                    <?php echo $overlay["discount"]; ?>%
                                </div>
                            </div>
    
                            <div class=overlay_lot__form__text>
                                <!-- Описание, системные требования, для этого блока сделана возможность прокручивания, чтобы иметь возможность 
                                    положить больше текста -->
                                <div class="overlay_lot__form__text__description">
                                    <h3>DESCRIPTION</h3>
                                    <p>
                                        <?php echo $overlay["goodsDescription"]; ?>        
                                    </p>
                                </div>
    
                                <div class="overlay_lot__form__text__sysReq">
                                    <h3>System Requirements</h3>
                                    <p>
                                        <?php echo $overlay["goodsSystemReq"]; ?>  
                                    </p>
                                </div>
                            </div>
                        </div>

                            <form action="index.php" method="POST" class="overlay__lot__form__containerButton">    
                                <button class="overlay__lot__form__button" name="BD3" type="submit" value=""> <div class="overlay__lot__form__button__text">Add to cart</div> </button>
                            </form>

                            <div class="overlay__lot__form__button white">
                                <div class="overlay__lot__form__button__text">Add to wishlist</div>
                            </div>
                            
                        <div class="overlay__lot__form__bottom"></div>
                    </div>
                    
            </div>
        </div>

        <?php $overlay = getOverlay('Rust'); ?>
        <div class="overlay rust opacity">
            <!-- это глобальный оверлей, div, по ширине экрана, который оттеняет всё, помимо оверлея -->
            <div class="overlay__globalOverlay"></div>
            <!-- здесь содержится сам оверлей для лота. Модификатор - фон для формы -->
            <div class="overlay__lot bgRust">
                
                <!-- это форма, в которой находится картинка и информация -->
                <div class="overlay__lot__form">
                    <!-- кнопка закрытия оверлея, если на неё нажать - оверлей закроется -->
                    <img src="./src/images/ZMaterials/closeButton.png" class="closeButton">
                    
                    <div class="overlay__lot__form__top"> <div class="packname"> <?php echo $overlay["name"]; ?> </div> </div>
    
                        <div class="overlay__lot__form__middle">
                            
                            <div class="overlay__lot__form__slider"> 
                                <img src=<?php echo $overlay["background"]; ?> class="screen"> 
                            </div>
                            <!-- Цена игры и платформы, с которых её можно запустить -->
                            <div class="overlay__lot__form__platformsAndPrice">
                                <div class="platforms">
                                    Platforms:<br>
                                    <img src="./src/images/ZMaterials/steam_icon.png" class="platformsIcons">
                                </div>
                                <div class="price">
                                    PRICE:<br>
                                    <?php echo $overlay["price"]; ?>$<br>
                                    DISCOUNT:<br>
                                    <?php echo $overlay["discount"]; ?>%
                                </div>
                            </div>
    
                            <div class=overlay_lot__form__text>
                                <!-- Описание, системные требования, для этого блока сделана возможность прокручивания, чтобы иметь возможность 
                                    положить больше текста -->
                                <div class="overlay_lot__form__text__description">
                                    <h3>DESCRIPTION</h3>
                                    <p>
                                        <?php echo $overlay["goodsDescription"]; ?>        
                                    </p>
                                </div>
    
                                <div class="overlay_lot__form__text__sysReq">
                                    <h3>System Requirements</h3>
                                    <p>
                                        <?php echo $overlay["goodsSystemReq"]; ?>  
                                    </p>
                                </div>
                            </div>
                        </div>

                            <form action="index.php" method="POST" class="overlay__lot__form__containerButton">    
                                <button class="overlay__lot__form__button" name="Rust" type="submit" value=""> <div class="overlay__lot__form__button__text">Add to cart</div> </button>
                            </form>

                            <div class="overlay__lot__form__button white">
                                <div class="overlay__lot__form__button__text">Add to wishlist</div>
                            </div>
                            
                        <div class="overlay__lot__form__bottom"></div>
                    </div>
                    
            </div>
        </div>


        <?php $overlay = getOverlay('DMC5'); ?>
        <div class="overlay dmc opacity">
            <!-- это глобальный оверлей, div, по ширине экрана, который оттеняет всё, помимо оверлея -->
            <div class="overlay__globalOverlay"></div>
            <!-- здесь содержится сам оверлей для лота. Модификатор - фон для формы -->
            <div class="overlay__lot bgDmc">
                
                <!-- это форма, в которой находится картинка и информация -->
                <div class="overlay__lot__form">
                    <!-- кнопка закрытия оверлея, если на неё нажать - оверлей закроется -->
                    <img src="./src/images/ZMaterials/closeButton.png" class="closeButton">
                    
                    <div class="overlay__lot__form__top"> <div class="packname"> <?php echo $overlay["name"]; ?> </div> </div>
    
                        <div class="overlay__lot__form__middle">
                            
                            <div class="overlay__lot__form__slider"> 
                                <img src=<?php echo $overlay["background"]; ?> class="screen"> 
                            </div>
                            <!-- Цена игры и платформы, с которых её можно запустить -->
                            <div class="overlay__lot__form__platformsAndPrice">
                                <div class="platforms">
                                    Platforms:<br>
                                    <img src="./src/images/ZMaterials/steam_icon.png" class="platformsIcons">
                                </div>
                                <div class="price">
                                    PRICE:<br>
                                    <?php echo $overlay["price"]; ?>$<br>
                                    DISCOUNT:<br>
                                    <?php echo $overlay["discount"]; ?>%
                                </div>
                            </div>
    
                            <div class=overlay_lot__form__text>
                                <!-- Описание, системные требования, для этого блока сделана возможность прокручивания, чтобы иметь возможность 
                                    положить больше текста -->
                                <div class="overlay_lot__form__text__description">
                                    <h3>DESCRIPTION</h3>
                                    <p>
                                        <?php echo $overlay["goodsDescription"]; ?>        
                                    </p>
                                </div>
    
                                <div class="overlay_lot__form__text__sysReq">
                                    <h3>System Requirements</h3>
                                    <p>
                                        <?php echo $overlay["goodsSystemReq"]; ?>  
                                    </p>
                                </div>
                            </div>
                        </div>

                            <form action="index.php" method="POST" class="overlay__lot__form__containerButton">    
                                <button class="overlay__lot__form__button" name="DMC5" type="submit" value=""> <div class="overlay__lot__form__button__text">Add to cart</div> </button>
                            </form>

                            <div class="overlay__lot__form__button white">
                                <div class="overlay__lot__form__button__text">Add to wishlist</div>
                            </div>
                            
                        <div class="overlay__lot__form__bottom"></div>
                    </div>
                    
            </div>
        </div>

        <?php $overlay = getOverlay('F76'); ?>
        <div class="overlay f76 opacity">
            <!-- это глобальный оверлей, div, по ширине экрана, который оттеняет всё, помимо оверлея -->
            <div class="overlay__globalOverlay"></div>
            <!-- здесь содержится сам оверлей для лота. Модификатор - фон для формы -->
            <div class="overlay__lot bgF76">
                
                <!-- это форма, в которой находится картинка и информация -->
                <div class="overlay__lot__form">
                    <!-- кнопка закрытия оверлея, если на неё нажать - оверлей закроется -->
                    <img src="./src/images/ZMaterials/closeButton.png" class="closeButton">
                    
                    <div class="overlay__lot__form__top"> <div class="packname"> <?php echo $overlay["name"]; ?> </div> </div>
    
                        <div class="overlay__lot__form__middle">
                            
                            <div class="overlay__lot__form__slider"> 
                                <img src=<?php echo $overlay["background"]; ?> class="screen"> 
                            </div>
                            <!-- Цена игры и платформы, с которых её можно запустить -->
                            <div class="overlay__lot__form__platformsAndPrice">
                                <div class="platforms">
                                    Platforms:<br>
                                    <img src="./src/images/ZMaterials/steam_icon.png" class="platformsIcons">
                                </div>
                                <div class="price">
                                    PRICE:<br>
                                    <?php echo $overlay["price"]; ?>$<br>
                                    DISCOUNT:<br>
                                    <?php echo $overlay["discount"]; ?>%
                                </div>
                            </div>
    
                            <div class=overlay_lot__form__text>
                                <!-- Описание, системные требования, для этого блока сделана возможность прокручивания, чтобы иметь возможность 
                                    положить больше текста -->
                                <div class="overlay_lot__form__text__description">
                                    <h3>DESCRIPTION</h3>
                                    <p>
                                        <?php echo $overlay["goodsDescription"]; ?>        
                                    </p>
                                </div>
    
                                <div class="overlay_lot__form__text__sysReq">
                                    <h3>System Requirements</h3>
                                    <p>
                                        <?php echo $overlay["goodsSystemReq"]; ?>  
                                    </p>
                                </div>
                            </div>
                        </div>

                            <form action="index.php" method="POST" class="overlay__lot__form__containerButton">    
                                <button class="overlay__lot__form__button" name="F76" type="submit" value=""> <div class="overlay__lot__form__button__text">Add to cart</div> </button>
                            </form>

                            <div class="overlay__lot__form__button white">
                                <div class="overlay__lot__form__button__text">Add to wishlist</div>
                            </div>
                            
                        <div class="overlay__lot__form__bottom"></div>
                    </div>
                    
            </div>
        </div>

        <?php $overlay = getOverlay('GTAV'); ?>
        <div class="overlay gta opacity">
            <!-- это глобальный оверлей, div, по ширине экрана, который оттеняет всё, помимо оверлея -->
            <div class="overlay__globalOverlay"></div>
            <!-- здесь содержится сам оверлей для лота. Модификатор - фон для формы -->
            <div class="overlay__lot bgGta">
                
                <!-- это форма, в которой находится картинка и информация -->
                <div class="overlay__lot__form">
                    <!-- кнопка закрытия оверлея, если на неё нажать - оверлей закроется -->
                    <img src="./src/images/ZMaterials/closeButton.png" class="closeButton">
                    
                    <div class="overlay__lot__form__top"> <div class="packname"> <?php echo $overlay["name"]; ?> </div> </div>
    
                        <div class="overlay__lot__form__middle">
                            
                            <div class="overlay__lot__form__slider"> 
                                <img src=<?php echo $overlay["background"]; ?> class="screen"> 
                            </div>
                            <!-- Цена игры и платформы, с которых её можно запустить -->
                            <div class="overlay__lot__form__platformsAndPrice">
                                <div class="platforms">
                                    Platforms:<br>
                                    <img src="./src/images/ZMaterials/steam_icon.png" class="platformsIcons">
                                </div>
                                <div class="price">
                                    PRICE:<br>
                                    <?php echo $overlay["price"]; ?>$<br>
                                    DISCOUNT:<br>
                                    <?php echo $overlay["discount"]; ?>%
                                </div>
                            </div>
    
                            <div class=overlay_lot__form__text>
                                <!-- Описание, системные требования, для этого блока сделана возможность прокручивания, чтобы иметь возможность 
                                    положить больше текста -->
                                <div class="overlay_lot__form__text__description">
                                    <h3>DESCRIPTION</h3>
                                    <p>
                                        <?php echo $overlay["goodsDescription"]; ?>        
                                    </p>
                                </div>
    
                                <div class="overlay_lot__form__text__sysReq">
                                    <h3>System Requirements</h3>
                                    <p>
                                        <?php echo $overlay["goodsSystemReq"]; ?>  
                                    </p>
                                </div>
                            </div>
                        </div>

                            <form action="index.php" method="POST" class="overlay__lot__form__containerButton">    
                                <button class="overlay__lot__form__button" name="GTAV" type="submit" value=""> <div class="overlay__lot__form__button__text">Add to cart</div> </button>
                            </form>

                            <div class="overlay__lot__form__button white">
                                <div class="overlay__lot__form__button__text">Add to wishlist</div>
                            </div>
                            
                        <div class="overlay__lot__form__bottom"></div>
                    </div>
                    
            </div>
        </div>

        <?php $overlay = getOverlay('Ori'); ?>
        <div class="overlay ori opacity">
            <!-- это глобальный оверлей, div, по ширине экрана, который оттеняет всё, помимо оверлея -->
            <div class="overlay__globalOverlay"></div>
            <!-- здесь содержится сам оверлей для лота. Модификатор - фон для формы -->
            <div class="overlay__lot bgOri">
                
                <!-- это форма, в которой находится картинка и информация -->
                <div class="overlay__lot__form">
                    <!-- кнопка закрытия оверлея, если на неё нажать - оверлей закроется -->
                    <img src="./src/images/ZMaterials/closeButton.png" class="closeButton">
                    
                    <div class="overlay__lot__form__top"> <div class="packname"> <?php echo $overlay["name"]; ?> </div> </div>
    
                        <div class="overlay__lot__form__middle">
                            
                            <div class="overlay__lot__form__slider"> 
                                <img src=<?php echo $overlay["background"]; ?> class="screen"> 
                            </div>
                            <!-- Цена игры и платформы, с которых её можно запустить -->
                            <div class="overlay__lot__form__platformsAndPrice">
                                <div class="platforms">
                                    Platforms:<br>
                                    <img src="./src/images/ZMaterials/steam_icon.png" class="platformsIcons">
                                </div>
                                <div class="price">
                                    PRICE:<br>
                                    <?php echo $overlay["price"]; ?>$<br>
                                    DISCOUNT:<br>
                                    <?php echo $overlay["discount"]; ?>%
                                </div>
                            </div>
    
                            <div class=overlay_lot__form__text>
                                <!-- Описание, системные требования, для этого блока сделана возможность прокручивания, чтобы иметь возможность 
                                    положить больше текста -->
                                <div class="overlay_lot__form__text__description">
                                    <h3>DESCRIPTION</h3>
                                    <p>
                                        <?php echo $overlay["goodsDescription"]; ?>        
                                    </p>
                                </div>
    
                                <div class="overlay_lot__form__text__sysReq">
                                    <h3>System Requirements</h3>
                                    <p>
                                        <?php echo $overlay["goodsSystemReq"]; ?>  
                                    </p>
                                </div>
                            </div>
                        </div>

                            <form action="index.php" method="POST" class="overlay__lot__form__containerButton">    
                                <button class="overlay__lot__form__button" name="Ori" type="submit" value=""> <div class="overlay__lot__form__button__text">Add to cart</div> </button>
                            </form>

                            <div class="overlay__lot__form__button white">
                                <div class="overlay__lot__form__button__text">Add to wishlist</div>
                            </div>
                            
                        <div class="overlay__lot__form__bottom"></div>
                    </div>
                    
            </div>
        </div>

        <?php $overlay = getOverlay('Inj2'); ?>
        <div class="overlay inj opacity">
            <!-- это глобальный оверлей, div, по ширине экрана, который оттеняет всё, помимо оверлея -->
            <div class="overlay__globalOverlay"></div>
            <!-- здесь содержится сам оверлей для лота. Модификатор - фон для формы -->
            <div class="overlay__lot bgInj2">
                
                <!-- это форма, в которой находится картинка и информация -->
                <div class="overlay__lot__form">
                    <!-- кнопка закрытия оверлея, если на неё нажать - оверлей закроется -->
                    <img src="./src/images/ZMaterials/closeButton.png" class="closeButton">
                    
                    <div class="overlay__lot__form__top"> <div class="packname"> <?php echo $overlay["name"]; ?> </div> </div>
    
                        <div class="overlay__lot__form__middle">
                            
                            <div class="overlay__lot__form__slider"> 
                                <img src=<?php echo $overlay["background"]; ?> class="screen"> 
                            </div>
                            <!-- Цена игры и платформы, с которых её можно запустить -->
                            <div class="overlay__lot__form__platformsAndPrice">
                                <div class="platforms">
                                    Platforms:<br>
                                    <img src="./src/images/ZMaterials/steam_icon.png" class="platformsIcons">
                                </div>
                                <div class="price">
                                    PRICE:<br>
                                    <?php echo $overlay["price"]; ?>$<br>
                                    DISCOUNT:<br>
                                    <?php echo $overlay["discount"]; ?>%
                                </div>
                            </div>
    
                            <div class=overlay_lot__form__text>
                                <!-- Описание, системные требования, для этого блока сделана возможность прокручивания, чтобы иметь возможность 
                                    положить больше текста -->
                                <div class="overlay_lot__form__text__description">
                                    <h3>DESCRIPTION</h3>
                                    <p>
                                        <?php echo $overlay["goodsDescription"]; ?>        
                                    </p>
                                </div>
    
                                <div class="overlay_lot__form__text__sysReq">
                                    <h3>System Requirements</h3>
                                    <p>
                                        <?php echo $overlay["goodsSystemReq"]; ?>  
                                    </p>
                                </div>
                            </div>
                        </div>

                            <form action="index.php" method="POST" class="overlay__lot__form__containerButton">    
                                <button class="overlay__lot__form__button" name="Inj2" type="submit" value=""> <div class="overlay__lot__form__button__text">Add to cart</div> </button>
                            </form>

                            <div class="overlay__lot__form__button white">
                                <div class="overlay__lot__form__button__text">Add to wishlist</div>
                            </div>
                            
                        <div class="overlay__lot__form__bottom"></div>
                    </div>
                    
            </div>
        </div>

        <?php $overlay = getOverlay('Ins'); ?>
        <div class="overlay ins opacity">
            <!-- это глобальный оверлей, div, по ширине экрана, который оттеняет всё, помимо оверлея -->
            <div class="overlay__globalOverlay"></div>
            <!-- здесь содержится сам оверлей для лота. Модификатор - фон для формы -->
            <div class="overlay__lot bgIns">
                
                <!-- это форма, в которой находится картинка и информация -->
                <div class="overlay__lot__form">
                    <!-- кнопка закрытия оверлея, если на неё нажать - оверлей закроется -->
                    <img src="./src/images/ZMaterials/closeButton.png" class="closeButton">
                    
                    <div class="overlay__lot__form__top"> <div class="packname"> <?php echo $overlay["name"]; ?> </div> </div>
    
                        <div class="overlay__lot__form__middle">
                            
                            <div class="overlay__lot__form__slider"> 
                                <img src=<?php echo $overlay["background"]; ?> class="screen"> 
                            </div>
                            <!-- Цена игры и платформы, с которых её можно запустить -->
                            <div class="overlay__lot__form__platformsAndPrice">
                                <div class="platforms">
                                    Platforms:<br>
                                    <img src="./src/images/ZMaterials/steam_icon.png" class="platformsIcons">
                                </div>
                                <div class="price">
                                    PRICE:<br>
                                    <?php echo $overlay["price"]; ?>$<br>
                                    DISCOUNT:<br>
                                    <?php echo $overlay["discount"]; ?>%
                                </div>
                            </div>
    
                            <div class=overlay_lot__form__text>
                                <!-- Описание, системные требования, для этого блока сделана возможность прокручивания, чтобы иметь возможность 
                                    положить больше текста -->
                                <div class="overlay_lot__form__text__description">
                                    <h3>DESCRIPTION</h3>
                                    <p>
                                        <?php echo $overlay["goodsDescription"]; ?>        
                                    </p>
                                </div>
    
                                <div class="overlay_lot__form__text__sysReq">
                                    <h3>System Requirements</h3>
                                    <p>
                                        <?php echo $overlay["goodsSystemReq"]; ?>  
                                    </p>
                                </div>
                            </div>
                        </div>

                            <form action="index.php" method="POST" class="overlay__lot__form__containerButton">    
                                <button class="overlay__lot__form__button" name="Ins" type="submit" value=""> <div class="overlay__lot__form__button__text">Add to cart</div> </button>
                            </form>

                            <div class="overlay__lot__form__button white">
                                <div class="overlay__lot__form__button__text">Add to wishlist</div>
                            </div>
                            
                        <div class="overlay__lot__form__bottom"></div>
                    </div>
                    
            </div>
        </div>

        <?php $overlay = getOverlay('RE2'); ?>
        <div class="overlay res opacity">
            <!-- это глобальный оверлей, div, по ширине экрана, который оттеняет всё, помимо оверлея -->
            <div class="overlay__globalOverlay"></div>
            <!-- здесь содержится сам оверлей для лота. Модификатор - фон для формы -->
            <div class="overlay__lot bgRes">
                
                <!-- это форма, в которой находится картинка и информация -->
                <div class="overlay__lot__form">
                    <!-- кнопка закрытия оверлея, если на неё нажать - оверлей закроется -->
                    <img src="./src/images/ZMaterials/closeButton.png" class="closeButton">
                    
                    <div class="overlay__lot__form__top"> <div class="packname"> <?php echo $overlay["name"]; ?> </div> </div>
    
                        <div class="overlay__lot__form__middle">
                            
                            <div class="overlay__lot__form__slider"> 
                                <img src=<?php echo $overlay["background"]; ?> class="screen"> 
                            </div>
                            <!-- Цена игры и платформы, с которых её можно запустить -->
                            <div class="overlay__lot__form__platformsAndPrice">
                                <div class="platforms">
                                    Platforms:<br>
                                    <img src="./src/images/ZMaterials/steam_icon.png" class="platformsIcons">
                                </div>
                                <div class="price">
                                    PRICE:<br>
                                    <?php echo $overlay["price"]; ?>$<br>
                                    DISCOUNT:<br>
                                    <?php echo $overlay["discount"]; ?>%
                                </div>
                            </div>
    
                            <div class=overlay_lot__form__text>
                                <!-- Описание, системные требования, для этого блока сделана возможность прокручивания, чтобы иметь возможность 
                                    положить больше текста -->
                                <div class="overlay_lot__form__text__description">
                                    <h3>DESCRIPTION</h3>
                                    <p>
                                        <?php echo $overlay["goodsDescription"]; ?>        
                                    </p>
                                </div>
    
                                <div class="overlay_lot__form__text__sysReq">
                                    <h3>System Requirements</h3>
                                    <p>
                                        <?php echo $overlay["goodsSystemReq"]; ?>  
                                    </p>
                                </div>
                            </div>
                        </div>

                            <form action="index.php" method="POST" class="overlay__lot__form__containerButton">    
                                <button class="overlay__lot__form__button" name="RE2" type="submit" value=""> <div class="overlay__lot__form__button__text">Add to cart</div> </button>
                            </form>

                            <div class="overlay__lot__form__button white">
                                <div class="overlay__lot__form__button__text">Add to wishlist</div>
                            </div>
                            
                        <div class="overlay__lot__form__bottom"></div>
                    </div>
                    
            </div>
        </div>

        <?php $overlay = getOverlay('PUBG'); ?>
        <div class="overlay pubg opacity">
            <!-- это глобальный оверлей, div, по ширине экрана, который оттеняет всё, помимо оверлея -->
            <div class="overlay__globalOverlay"></div>
            <!-- здесь содержится сам оверлей для лота. Модификатор - фон для формы -->
            <div class="overlay__lot bgPubg">
                
                <!-- это форма, в которой находится картинка и информация -->
                <div class="overlay__lot__form">
                    <!-- кнопка закрытия оверлея, если на неё нажать - оверлей закроется -->
                    <img src="./src/images/ZMaterials/closeButton.png" class="closeButton">
                    
                    <div class="overlay__lot__form__top"> <div class="packname"> <?php echo $overlay["name"]; ?> </div> </div>
    
                        <div class="overlay__lot__form__middle">
                            
                            <div class="overlay__lot__form__slider"> 
                                <img src=<?php echo $overlay["background"]; ?> class="screen"> 
                            </div>
                            <!-- Цена игры и платформы, с которых её можно запустить -->
                            <div class="overlay__lot__form__platformsAndPrice">
                                <div class="platforms">
                                    Platforms:<br>
                                    <img src="./src/images/ZMaterials/steam_icon.png" class="platformsIcons">
                                </div>
                                <div class="price">
                                    PRICE:<br>
                                    <?php echo $overlay["price"]; ?>$<br>
                                    DISCOUNT:<br>
                                    <?php echo $overlay["discount"]; ?>%
                                </div>
                            </div>
    
                            <div class=overlay_lot__form__text>
                                <!-- Описание, системные требования, для этого блока сделана возможность прокручивания, чтобы иметь возможность 
                                    положить больше текста -->
                                <div class="overlay_lot__form__text__description">
                                    <h3>DESCRIPTION</h3>
                                    <p>
                                        <?php echo $overlay["goodsDescription"]; ?>        
                                    </p>
                                </div>
    
                                <div class="overlay_lot__form__text__sysReq">
                                    <h3>System Requirements</h3>
                                    <p>
                                        <?php echo $overlay["goodsSystemReq"]; ?>  
                                    </p>
                                </div>
                            </div>
                        </div>

                            <form action="index.php" method="POST" class="overlay__lot__form__containerButton">    
                                <button class="overlay__lot__form__button" name="PUBG" type="submit" value=""> <div class="overlay__lot__form__button__text">Add to cart</div> </button>
                            </form>

                            <div class="overlay__lot__form__button white">
                                <div class="overlay__lot__form__button__text">Add to wishlist</div>
                            </div>
                            
                        <div class="overlay__lot__form__bottom"></div>
                    </div>
                    
            </div>
        </div>
            
</div>
        
<!-- ------------------------------------------------------------------- МЕНЮ ------------------------------------------------------------------------ -->

        <div class = "menu">
            <!-- Глобальный оверлей для меню -->
            <div class = "overlay index0 opacity">
                <div class = "overlay__globalOverlay"></div>    
            </div>
            <!-- Контейнер с текстом. Модификаторы для того, чтобы его скрыть, и чтобы он не мешал возможности использовать другие блоки, заслоняя их, даже будучи
            невидимым -->
            <div  class="menu__textBlock index0 opacity">
                <p> <a href="#"> Main </a> </p>
                <p> <a href="./src/php/cart.php"> Cart </a> </p>
                <p> <a href="./src/php/orders.php"> Orders </a> </p>
                <p> <a href="#"> Support </a> </p>
                <p> <a href="#"> About us </a> </p>
            </div>

            <img src="src/images/ZMaterials/cross_icon.png" class="menu__icon closeMenu index3">
            <img src="src/images/ZMaterials/gamburger.png" class="menu__icon openMenu index3">

        </div>

        <header class="container">

            <div class="localContainer header__monthPack light">
                <div class="header__monthPack__text">  APRIL MONTH PACK </div>

                <div class="header__monthPack__button"> Check it out</div>

            </div>

        </header>

        <div class="container container__title container__black">
            RECENTLY POPULAR
        </div>


<!-- ------------------------------------------------------------------- ЛОТЫ ------------------------------------------------------------------------ -->

        <!-- Контейнер карточек, и их оверлеев -->

        <div class="container container__gamePacks">
            <!-- Карточки товаров и их оверлеи -->
            <div class="lot">
                <!-- Названия карточки товара, чтобы найти соответствующий оверлей -->
                <div class ="name"> <div class="AC"></div> </div>

                <div><img src=<?php $cover = getCover('ACO'); echo $cover; ?> class="container__gamePacks__wrapper__image"></div>

                <div class="lot__overlay">
                    <div class="lot__overlay-caption">
                        <h5>
                            Assasin's Creed: Odyssey
                        </h5>
                        <p>
                            Contains: AC: Odyssey;
                        </p>
                    </div>
                </div>
                
            </div>

            <div class="lot">

                <div class ="name"> <div class="civilization6"></div> </div>

                <div><img src=<?php $cover = getCover('Civ6'); echo $cover; ?> class="container__gamePacks__wrapper__image"></div>

                <div class="lot__overlay">
                    <div class="lot__overlay-caption">
                        <h5>
                            Civilization 6
                        </h5>
                        <p>
                            Contains: Civilization 6;
                        </p>
                    </div>
                </div>
                
            </div>


            <div class="lot">

                <div class ="name"> <div class="witcher"></div> </div>

                <div><img src=<?php $cover = getCover('Witcher3'); echo $cover; ?> class="container__gamePacks__wrapper__image"></div>

                <div class="lot__overlay">
                    <div class="lot__overlay-caption">
                        <h5>
                            Witcher 3
                        </h5>
                        <p>
                            Contains: Witcher 3;
                        </p>
                    </div>
                </div>
                
            </div>

            <div class="lot">

                <div class ="name"> <div class="dl"></div> </div>

                <div><img src=<?php $cover = getCover('DL'); echo $cover; ?> class="container__gamePacks__wrapper__image"></div>

                <div class="lot__overlay">
                    <div class="lot__overlay-caption">
                        <h5>
                            Dying Light
                        </h5>
                        <p>
                            Contains: Dying Light;
                        </p>
                    </div>
                </div>
                
            </div>

            <div class="lot">

                <div class ="name"> <div class="dea"></div> </div>

                <div><img src=<?php $cover = getCover('DeathStranding'); echo $cover; ?> class="container__gamePacks__wrapper__image"></div>

                <div class="lot__overlay">
                    <div class="lot__overlay-caption">
                        <h5>
                            Death Stranding
                        </h5>
                        <p>
                            Contains: Death Stranding;
                        </p>
                    </div>
                </div>
                
            </div>

            <div class="lot">

                <div class ="name"> <div class="bl"></div> </div>

                <div><img src=<?php $cover = getCover('BD3'); echo $cover; ?> class="container__gamePacks__wrapper__image"></div>

                <div class="lot__overlay">
                    <div class="lot__overlay-caption">
                        <h5>
                            Borderlands 3
                        </h5>
                        <p>
                            Contains: Borderlands 3;
                        </p>
                    </div>
                </div>
                
            </div>

            <div class="lot">

                <div class ="name"> <div class="rust"></div> </div>

                <div><img src=<?php $cover = getCover('Rust'); echo $cover; ?> class="container__gamePacks__wrapper__image"></div>

                <div class="lot__overlay">
                    <div class="lot__overlay-caption">
                        <h5>
                            Rust
                        </h5>
                        <p>
                            Contains: Rust;
                        </p>
                    </div>
                </div>
                
            </div>

            <div class="lot">

                <div class ="name"> <div class="dmc"></div> </div>

                <div><img src=<?php $cover = getCover('DMC5'); echo $cover; ?> class="container__gamePacks__wrapper__image"></div>

                <div class="lot__overlay">
                    <div class="lot__overlay-caption">
                        <h5>
                            Devil May Cry 5
                        </h5>
                        <p>
                            Contains: Devil May Cry 5;
                        </p>
                    </div>
                </div>
                
            </div>

            <div class="lot">

                <div class ="name"> <div class="f76"></div> </div>

                <div><img src=<?php $cover = getCover('F76'); echo $cover; ?> class="container__gamePacks__wrapper__image"></div>

                <div class="lot__overlay">
                    <div class="lot__overlay-caption">
                        <h5>
                            Fallout 76
                        </h5>
                        <p>
                            Contains: Fallout 76;
                        </p>
                    </div>
                </div>
                
            </div>

            <div class="lot">

                <div class ="name"> <div class="gta"></div> </div>

                <div><img src=<?php $cover = getCover('GTAV'); echo $cover; ?> class="container__gamePacks__wrapper__image"></div>

                <div class="lot__overlay">
                    <div class="lot__overlay-caption">
                        <h5>
                            GTA V
                        </h5>
                        <p>
                            Contains: GTA V;
                        </p>
                    </div>
                </div>
                
            </div>

            <div class="lot">

                <div class ="name"> <div class="ori"></div> </div>

                <div><img src=<?php $cover = getCover('Ori'); echo $cover; ?> class="container__gamePacks__wrapper__image"></div>

                <div class="lot__overlay">
                    <div class="lot__overlay-caption">
                        <h5>
                            Ori and the will of the Wisps
                        </h5>
                        <p>
                            Contains: Ori and the will of the Wisps;
                        </p>
                    </div>
                </div>
                
            </div>

            <div class="lot">

                <div class ="name"> <div class="inj"></div> </div>

                <div><img src=<?php $cover = getCover('Inj2'); echo $cover; ?> class="container__gamePacks__wrapper__image"></div>

                <div class="lot__overlay">
                    <div class="lot__overlay-caption">
                        <h5>
                            Injustice 2
                        </h5>
                        <p>
                            Contains: Injustice 2;
                        </p>
                    </div>
                </div>
                
            </div>

            <div class="lot">

                <div class ="name"> <div class="ins"></div> </div>

                <div><img src=<?php $cover = getCover('Ins'); echo $cover; ?> class="container__gamePacks__wrapper__image"></div>

                <div class="lot__overlay">
                    <div class="lot__overlay-caption">
                        <h5>
                            Insurgency Sandstorm
                        </h5>
                        <p>
                            Contains: Insurgency Sandstorm;
                        </p>
                    </div>
                </div>
                
            </div>

            <div class="lot">

                <div class ="name"> <div class="res"></div> </div>

                <div><img src=<?php $cover = getCover('RE2'); echo $cover; ?> class="container__gamePacks__wrapper__image"></div>

                <div class="lot__overlay">
                    <div class="lot__overlay-caption">
                        <h5>
                            Resident Evil 2
                        </h5>
                        <p>
                            Contains: Resident Evil 2;
                        </p>
                    </div>
                </div>
                
            </div>

            <div class="lot">

                <div class ="name"> <div class="pubg"></div> </div>

                <div><img src=<?php $cover = getCover('PUBG'); echo $cover; ?> class="container__gamePacks__wrapper__image"></div>

                <div class="lot__overlay">
                    <div class="lot__overlay-caption">
                        <h5>
                            PUBG
                        </h5>
                        <p>
                            Contains: PUBG;
                        </p>
                    </div>
                </div>
                
            </div>
            
        </div>

        <footer>
                <div><img src="src/images/logos/WhiteLogo.png" class="logo"></div>

                        <div class="contacts">
                            <div> Location <img src="./src/images/ZMaterials/location-icon-white.png" class="icons"> </div>
                            <div class="subtext"> Lapland, Candy Street, <br>Building # 5 </div>
                        </div>

                        <div class="contacts">
                            <div>Contacts <img src="./src/images/ZMaterials/phone-icon-black.png" class="icons"></div>
                            <div class="subtext">71(912)871-8103 <br>gamepack@gmail.com</div>
                        </div>

                        <div class="contacts">
                            <div> Social Networks </div>
                            <div>
                                <img src="./src/images/ZMaterials/inst-icon.png" class="sm-icons">
                                <img src="./src/images/ZMaterials/twitter-bg.png" class="sm-icons">
                                <img src="./src/images/ZMaterials/facebook-icon.png" class="sm-icons">
                            </div>

                    </div>


        </footer>

        <script src="./src/js/js.js"></script>
    </body>
</html>
