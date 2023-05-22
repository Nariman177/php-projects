<!-- <?php
$daysOfTheWeek = [
	'ru'=>[1=>'Понедельник', 2=>'Вторник', 3=>'Среда', 4=>'Четверг', 5=>'Пятница', 6=>'Суббота', 7=>'Воскресенье'],
	'en'=>[1=>'Monday', 2=>'Tuesday', 3=>'Wednesday', 4=>'Thursday', 5=>'Friday', 6=>'Saturday', 7=>'Sunday']
];
echo $daysOfTheWeek['ru'][1].', '; echo $daysOfTheWeek['en'][3];
?> -->

<!-- <?php
	for ($num = 1000, $i = 0; $num > 50; $num /= 2, $i++);
	echo $num.'<br>';
	echo $i.'<br>';
?> -->

<?php
   $sum = 0;
   for ( $i = 1; $i <= 100; $i++) {
       $sum += $i;
    }
   echo($sum);
?>

<!-- <?php
	$num = 1000;
	$i = 0;
	while ($num > 50){
		$num /= 2;
		$i++;
	}
	echo $num.'<br>';
	echo $i.'<br>';
?> -->
