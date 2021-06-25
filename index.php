
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="general_style.css">
        <title>Title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="header">
            <h1>ГОРОСКОПИК</h1>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="registration.html">Registration</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </div>
        <div id="content">
            <h2> <i> <b> Гороскоп — упорядоченное отображение взаимного расположения планет на звёздном небе в определенный промежуток времени по знакам зодиака. 
            Используется в астрологии с целью предсказания судьбы. 
            В старинных источниках гороскопом также именовался Асцендент или знак, в котором Асцендент находился.</b> </i> </h2>
            <a href="" class="gradient-button">Получить прогноз на сегодня!</a>
        </div>
        <div id="footer">
            <ul>
                <?php
                $a = array(
                    "Овен" => "images/oven_.png",
                    "Телец" => "images/telez.png",
                    "Близнецы" => "images/bliznezi.png",
                    "Рак" => "images/rak.png",
                    "Лев" => "images/lev.png",
                    "Дева" => "images/deva.png",
                    "Весы" => "images/vesi.png",
                    "Скорпион" => "images/skorpion.png",
                    "Стрелец" => "images/strelez.png",
                    "Козерог" => "images/kozerog.png",
                    "Водолей" => "images/vodolei.png",
                    "Рыбы" => "images/ribi.png"
                );
                foreach ($a as $key => $value) {
                    echo "<li><a href=''> <img src=" . $value . " alt=''> <h5>" . $key . "</h5> </a></li>";
                }
                ?>
            </ul>
        </div>
    </body>
</html>
