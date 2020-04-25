<form action="sqr.php"method="post">
ENTER A NUMBER<input type="number"name="num">
<input type="submit">
<h1><?php echo "SQR FUN";?></h1>
<hr>
<?php  
$num=$_POST["num"];
echo pow($num,2);

?>
