<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title>Wikipedia</title>
  <link rel="stylesheet" href="style.css" />
  <script src="https://kit.fontawesome.com/fb10ec7990.js" crossorigin="anonymous"></script>


<?php

  $host = 'localhost';  // Хост, у нас все локально
  $user = 'root';    // Имя созданного вами пользователя
  $pass = ''; // Установленный вами пароль пользователю
  $db_name = 'news';   // Имя базы данных
  $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой
      // Ругаемся, если соединение установить не удалось
      if (!$link) {
        echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
        exit;
      }
    
?>


  <h1 align= "center">Информационный портал</h1>
  <h2><a>Последние записи:</a></h2>

</head>
<body>
<hr>
    <div> 
        <?php
        $items = array(
            0 => array(
                "icon" => "science",
                "id" => "site/topic/science",
                "title" => "Наука",
            ),
        );
        ob_start();
        include("assets/templates/main.php");
        $content = ob_get_clean();
        include("assets/templates/layout.php");

        $sql = mysqli_query($link, 'SELECT * FROM `news` WHERE id = 1');
            while ($result = mysqli_fetch_array($sql)) {
               
                echo "{$result['title']}<br>";
                echo "{$result['prev']}<br>";
                echo "{$result['text']}<br>";

      }

        ?><div><img class="left" width= 500px height= 300px src="picture/1.jpg"></div> 
    </div><a href = 'article.php?id=1'> читать далее </a>
<hr>
    <div> 

        <?php
        $items = array(
            0 => array(
                "icon" => "sport",
                "id" => "site/topic/sport",
                "title" => "Спорт",
            ),
        );
        ob_start();
        include("assets/templates/main.php");
        $content = ob_get_clean();
        include("assets/templates/layout.php");

                $sql = mysqli_query($link, 'SELECT * FROM `news` WHERE id = 2');
            while ($result = mysqli_fetch_array($sql)) {
                
                echo "{$result['title']}<br>";
                echo "{$result['prev']}<br>";
                echo "{$result['text']}<br>";
      }

        ?> 
        <div><img class="left" width= 500px height= 300px src="picture/2.jpg"></div>        
    </div><a href = 'article.php?id=2'> читать далее </a>
<hr>
    <div> 
        <?php
        $items = array(
            0 => array(
                "icon" => "animals",
                "id" => "site/topic/animals",
                "title" => "Животные",
            ),
        );
        ob_start();
        include("assets/templates/main.php");
        $content = ob_get_clean();
        include("assets/templates/layout.php");

            $sql = mysqli_query($link, 'SELECT * FROM `news` WHERE id = 3');
                
            while ($result = mysqli_fetch_array($sql)) {
                
                echo "{$result['title']}<br>";
                echo "{$result['prev']}<br>";
                echo "{$result['text']}<br>";
      }
        ?> <div><img class="left" width= 500px height= 300px src="picture/3.jpg"></div>         
    </div><a href = 'article.php?id=3'> читать далее </a>

<hr>
</body>
</html>

