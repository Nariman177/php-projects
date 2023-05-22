<!-- <?php
function drawTable ($cols = 10, $rows = 10, $background = 'yellow') {
	echo "<table border = '1' width='500' text-align:center>";
	for ($tr = 1; $tr <= $rows; $tr++) { // минимальная таблица умножения - это 1 х 1
	    echo "<tr>"; // рисует строку (внутри <tr> находится <td> - нужен очередной цикл)
	        for ($td = 1; $td <= $cols; $td++) {
	            if ($tr == 1 || $td == 1) {
	               echo "<th style = 'background : {$background}'>" . $tr * $td . "</th>"; // <th> - заголовочные ячейки
	            } else
	            echo "<td>" . $tr * $td . "</td>"; // $tr * $td - для вывода значений (цифр) внутри таблицы
	        	}
	        }
	    echo "</tr>";
	 echo "</table>";
	}
?> -->

<!-- <?
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$cols = abs((int) $_POST['cols']);
$rows = abs((int) $_POST['rows']);
$color = trim(strip_tags($_POST['color']));
}
$cols = ($cols) ? $cols : 10;
$rows = ($rows) ? $rows : 10;
$color = ($color) ? $color : 'yellow';
?> -->

<?


?>

<!DOCTYPE html>
<html>

<head>
  <title>Таблица умножения</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->

    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1>Таблица умножения</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->

			<?php

				// drawTable($cols, $rows, $color);
        if(isset($_GET['cols']) && isset($_GET['rows'])){
           $cols = (int) $_GET['cols'];
           $rows = (int) $_GET['rows'];
           echo "<table border = '1' width='300'>";
             for ($tr = 1; $tr <= $rows; $tr++) { // минимальная таблица умножения - это 1 х 1
                     echo "<tr>"; // рисует строку (внутри <tr> находится <td> - нужен очередной цикл)
                     for ($td = 1; $td <= $cols; $td++) {
                             echo "<td>" . ($tr * $td) . "</td>"; // $tr * $td - для вывода значений (цифр) внутри таблицы
                         }
                     echo "</tr>";
                 }
             echo "</table>";
    }
     ?>




    <!-- Таблица -->
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
    <ul>
      <li><a href='index.php'>Домой</a>
      </li>
      <li><a href='about.php'>О нас</a>
      </li>
      <li><a href='contact.php'>Контакты</a>
      </li>
      <li><a href='table.php'>Таблица умножения</a>
      </li>
      <li><a href='calc.php'>Калькулятор</a>
      </li>
    </ul>
    <!-- Меню -->
  </div>
  <ul>
    <li><a href='<?= $leftMenu[0]['href']?>'><?= $leftMenu[0]['link']?></a></li>
    <li><a href='<?= $leftMenu[1]['href']?>'><?= $leftMenu[1]['link']?></a></li>
    <li><a href='<?= $leftMenu[2]['href']?>'><?= $leftMenu[2]['link']?></a></li>
    <li><a href='<?= $leftMenu[3]['href']?>'><?= $leftMenu[3]['link']?></a></li>
  </ul>
</body>
</html>
