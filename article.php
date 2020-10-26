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


     // echo $result['text']} . $_GET["id"] . "<br />";

        //if(isset($_GET['id'])) {
        //echo $_GET['id'];

                $sql = mysqli_query($link, 'SELECT * FROM `news` WHERE id =   "' . mysqli_real_escape_string($link, $_GET['id']) . '" ');
                while ($result = mysqli_fetch_array($sql)) {
                echo "{$result['title']}<br>";
                echo "{$result['prev']}<br>";
                echo "{$result['text']}<br>";
      }
    

?>