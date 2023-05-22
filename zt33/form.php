<form method="post">
    <input type="text" name="myInput" placeholder="мәтінді енгізіңіз">
      <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $myInput = $_POST["myInput"];


    echo "Сіз осы сөздерді енгіздініз: " . $myInput;
}
?>
