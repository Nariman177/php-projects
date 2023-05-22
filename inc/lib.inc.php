
<?php

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




?>

<?
function drawMenu($menu, $vertical=true){
    $style = "";
    if(!$vertical)
      // $style = " style='display:inline-block; margin-right:15px;'";
      $style = "--horizon";

    echo "<ul class='nav__list'>";
      foreach($menu as $item ){
        echo "<li class='nav__list-li$style'>";
          echo "<a href='{$item['href']}' class='nav__list-link'>{$item['link']}</a>";
        echo "</li>";
      }
      unset($value);
    echo "</ul>";
  }

  $navMenu = [
    ['link' => 'Домой', 'href' => 'index.php'],
    ['link' => 'О нас', 'href' => 'about.php'],
    ['link' => 'Контакты', 'href' => 'contact.php'],
    ['link' => 'Таблица умножения', 'href' => 'table.php'],
    ['link' => 'Калькулятор', 'href' => 'calc.php']
  ];

?>
