<html>
<body>
<form action="calc.php" method="post">
NUM1:-<input type="number" name="num1"><br>
Operator:<input type="text"name="op"><br>
NUM2:-<input type="number" name="num2"><br>
<input type="submit">
</form>

<?php
$num1=$_POST["num1"];
$num2=$_POST["num2"];
$op=$_POST["op"];
switch($op){
    case "+":
    echo $num1+$num2;
    break;
        case "-":
    echo $num1-$num2;
    break;
        case "*":
    echo $num1*$num2;
    break;
    case "/":
    echo $num1/$num2;
    break;
    default :
    echo "INVALID op";
}
?>
 

</body>
</html>
