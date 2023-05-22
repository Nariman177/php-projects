<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>кука</title>
</head>
<body>
<?php
    $visitCount = 0;
    if( isset($_COOKIE['visitCount'])) {
        $visitCount = $_COOKIE['visitCount'];
    }
    $visitCount++;

    $lastVisit = 0;
    if( isset($_COOKIE['lastVisit'])) {
        $lastVisit = intval($_COOKIE['lastVisit']);
    }
    setcookie('visitCount', $visitCount);
    setcookie('lastVisit', time());

    echo "Вообщем посещений: ".$visitCount."<br>";
    echo "Последнее посещение: ".date('d-m-Y H:i', $lastVisit)."<br>";

    
?>


<?php
    $visit_count = 0;
    if (isset($_COOKIE['visit_count'])) {
        $visit_count = intval($_COOKIE['visit_count']);
    } 

    $visit_count++;

    $last_visit = ' ';


    if (isset($_COOKIE['last_visit'])) {
        $last_visit = $_COOKIE['last_visit'];
    }


    $last_visit = date("d-m-Y");


    setcookie('visit_count', $visit_count);
    setcookie('last_visit', $last_visit);


    echo "Вы были на этой странице: " .$visit_count. " раз <br>";
    echo "Последний раз вы были на странице: " .$last_visit. "<br>";
?>
</body>
</html>