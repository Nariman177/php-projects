<?

function power($val, $pow) {
    if ($pow == 0) {
        echo (1); // егер дәрежесі 0 болса, 1 қайтару керек
    } else {
      echo $val * power($val, $pow - 1); // басқа жағдайда, функцияның өзін қайта жүргізу керек
    }
}

?>