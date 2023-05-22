<!-- <h3>Зачем мы ходим в школу?</h3>
<blockquote>
 <?php echo strftime('Сегодня %d-%m-%Y'); ?>
</blockquote> -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Постфиксті және префиксті формалар</title>

  </head>
  <body>

<!-- <?php
    $X=5;
    $Z=$X++; // $Z=5, $X=6
    echo "<B>Постфиксті форма (\$Z=\$X++;):</B><BR> ";
    echo "\$Z = $Z <BR>\$X = $X <BR><BR>";
    $X=5;
    $Z=++$X; // $Z=6, $X=6
    echo "<B> Префиксті форма (\$Z=++\$X;):</B><BR> \$Z = $Z <BR>\$X = $X";
?> -->
<!-- <?php
     $names = array("Азат","Бекзат","Айым");
     if ($names[0]=="Азат") {
       echo "Сәлем, Азат!";
       $num = 1;
       $account = 2000;}
       if ($num) echo "<br> Азат тізімде бірінші!";
       $bax = 30;
       if ($account > 100*$bax+3)
       echo "Бұл жол тізімде болмайды, өйткені шарт орындалмады";
   ?> -->


   <!-- <?php
    $names = array("Азат","Бекзат","Айым");
      if ($names[0]=="Азат") {
        echo "Сәлем, Азат!<br>";
        $num = 1;
        $account = 2000;
      }
      else {
        echo "Сәлем, $names[0] . Біз Азатты күтіп едік :( "; }
        if ($num) echo "Азат тізімде бірінші!<br>";
        else echo " Азат тізімде бірінші емес?!";
        $bax = 30;
        if ($account > 100*$bax+3)echo "Бұл жол тізімде болмайды, өйткені шарт орындалмады ";

         else echo "Бірақ мына жол шығады!";
?> -->

<!-- <?
$names = array("Азат","Бекзат","Айым");
if ($names[0]=="Азат") {
// егер жиымдағы бірінші ат Азат болса
echo "Сәлем, Азат!";}
elseif ($names[0] == "Бекзат"){
// егер жиымдағы бірінші ат Бекзат болса
echo "Сәлем, Бекзат!";}
elseif ($names[0] == "Айым"){
// егер жиымдағы бірінші ат Азат, Бекзат емес, Айым болса
echo "Сәлем, Айым!";}
else {
echo "сен кімсің?";
}
?> -->
<!--
 <?
   $names = array("Азат","Бекзат","Айым");
    switch ($names[0]){
       case "Азат": echo "Сәлем, Азат!"; break;
       case "Бекзат": echo "Сәлем, Бекзат!"; break;
       case "Айым": echo "Сәлем, Айым!"; break;
    default: echo "Сәлем, $names[0].
    Ал сіздің атыңыз кім?"; }
?> -->

<!-- <?php
$books = array ("php" => "PHP users guide", 12 => true);
echo $books["php"]; // "PHP users guide" шығады
echo $books[12];
?> -->

<!-- <?php
    $arr = array ("a","b","c");
    print_r($arr);
    unset($arr[0]); unset($arr[1]);unset($arr[2]);
    echo "<br>";

    print_r($arr);

    $arr[] = "aa";
    print_r($arr);
    echo "<br>";
    $arr = array_values($arr);
    $arr[] = "bb";
    print_r($arr);
?> -->
  </body>
</html>
