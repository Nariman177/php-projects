<?php
    $title = 'Сайт нашей школы';
    $header = "$welcome, Гость!";
    $id = strtolower(strip_tags(trim($_GET['id'])));
    switch($id){
      case 'about':
      $title = 'О сайте';
      $header = 'О нашем сайте';
    break;
    case 'contact':
      $title = 'Контакты';
      $header = 'Обратная связь';
    break;
      case 'table':
      $title = 'Таблица умножения';
      $header = 'Таблица умножения';
  break;
    case 'calc':
    $title = 'Он-лайн калькулятор';
    $header = 'Калькулятор';
   break;
}
?>
<a href="lib.inc.php">libka</a>
<a href="data.inc.php">libka</a>

<!DOCTYPE html>
<html>

<head>
  <title>Сайт нашей школы</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title> <?php echo $title?></title>
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <a href="top.inc.php"></a>
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1> <?php echo $header?></h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
<?php
switch($id){
case 'about':
include 'about.php';
break;
case 'contact':
include 'contact.php';
break;
case 'table':
include 'table.php';
break;
case 'calc':
include 'calc.php';
break;
default:
include 'index.inc.php';
}
?>

    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
    <a href="menu.inc.php">topka</a>
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
    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 2021
    <a href="bottom.inc.php "></a>
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>
