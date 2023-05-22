<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Меню</h2>
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
    <?php
    $leftMenu = [
      ['link'=>'Домой', 'href'=>'index.php'],
      ['link'=>'О нас', 'href'=>'about.php'],
      ['link'=>'Контакты', 'href'=>'contact.php'],
      ['link'=>'Таблица умножения', 'href'=>'table.php'],
      ['link'=>'Калькулятор', 'href'=>'calc.php']
    ];
   ?>
  </body>
</html>
