

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./burger_fast_food_icon_181517.ico">
</head>

<body>
    <div class="form_wrapper">
        <form action="handler.php" class="form" method="POST">
            <label for="name">Ваше имя</label>
            <input name="Имя" type="text" id="name" required>
            <label for="phone">Ваш телефон</label>
            <input name="Телефон" type="tel" id="phone" required>
            <label for="email">Ваш email</label>
            <input name="E-mail" type="email" id="email" required>
            <label for="position">Название товара</label>
            <input name="Название товара" type="text" id="position" class="position" required>
            <input type="submit" value="Заказать">
        </form>
    </div>
    
    <div class="catalog">
        <?php


        $string = file_get_contents('product.json');


        $data = array_values(json_decode($string, true));

        

        foreach ($data as $key) {
            foreach ($key as $key2) {
                echo    '<div class="card_container">
                            <div class="card">
                        
                                <div class="img">
                                    <img src="'.$key2["img"].'">
                                </div>
                                <div class="name">'.$key2["name"].'</div>
                                <div class="price">'.$key2["price"].'</div>
                                <button class="buy">Купить</button>
                            </div>
                        </div>';
                
            }
        }

        ?>
       
    </div>

    <script src="script.js"></script>
</body>
</html>

