<h1><?php echo $welcome?></h1>
<?php
$hour = (int) strftime('%H');
$welcome = '';
if ($hour > 0 && $hour < 6) {
        $welcome = 'Доброй ночи';
    }
    elseif ($hour >= 6 && $hour < 12) {
        $welcome = 'Доброе утро';
    }
    elseif ($hour >= 12 && $hour < 18) {
        $welcome = 'Добрый день';
    }
    elseif ($hour >= 18 && $hour < 23) {
        $welcome = 'Добрый вечер';
    }
    else {
        $welcome = 'Доброй ночи';
    }
    echo $welcome;


?>
