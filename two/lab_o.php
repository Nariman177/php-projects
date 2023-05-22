 <blockquote>
   <?php

   setlocale(LC_ALL, "russian");
    $day = strftime('%d');
    $mon = strftime('%B');
    $year = strftime('%Y');
    echo 'Сегодня ', $day, ' число, ', $mon, ' месяц, ', $year, ' год.';

    ?>
 </blockquote>
