<html>
<title>ARRAY- KEy value pair</title>
<body>
<form action ="array.php" method ="POST">
<input type="text" name="stud">
<input type="submit">

<?php

$arr = array("Prem"=>"A","AUZ"=>"A+","mihir"=>"F");
$arr[3]="Paras";
echo count($arr);
echo "<br>";

echo $arr[$_POST["stud"]];
/*$arr1=array(1,2,3,4,5,6,7,8);
for($i=0;$i<=count($arr1);$i++){
echo "$arr1[$i]";
echo "<br>";
}
*/
?>
</body>
</html>
