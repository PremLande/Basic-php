<html>
<title>FUNCTION</title>
<body>
<?php
function cube($num){
echo "CUBE =";
 return $num*$num*$num;
}
for($x=0;$x<=100;$x++){   //TO find Cubes till 100
echo $res=cube($x);
echo "<br>";
}
?>

</body>
</html>
