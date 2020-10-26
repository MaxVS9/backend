<!DOCTYPE html>
<html lang="ru">
  <head>
    <title><?=$title?></title>
    <?php
      foreach (glob("assets/css/*.css") as $filename)
      {
          echo "<link rel='stylesheet' href='$filename'>";
      }
    ?>
  </head>
  <body>
    <?php include("assets/libs/icons.php"); ?>
    <main>
      <?=$content?>
    </main>
  </body>
</html>