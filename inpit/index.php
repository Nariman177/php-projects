<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $size = ini_get("post_max_size");
    $letter = $size{strlen($size)-1};
    $size = (int) $size;



    switch (strtoupper($letter) ) {
      case "G":
          $size *= 1024;
          
      case "M":
          $size *= 1024;
      case "K":
          $size *= 1024;
    }

    echo "<p>Максимальный размер отправляемых данных {$size} байт. </p>";
    ?>
  </body>
</html>
