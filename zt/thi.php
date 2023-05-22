<?
function math($num1, $num2, $operation) {
    switch ($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            return $num1 / $num2;
        default:
            return "Операция орындалмады";
    }
}

echo math(10, 5, '+');
echo math(10, 5, '-');
echo math(10, 5, '*');
echo math(10, 5, '/');
echo math(10, 5, '%');

?>
