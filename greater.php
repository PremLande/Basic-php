<html>
<title>FUNCTION</title>
<body>
<?php
function greater($num1,$num2,$num3){
if($num1>=$num2&&$num1>=$num3){
    
 return $num1;
}
{
elseif($num2>=$num1&&$num1>=$num3){
    
 return $num2;
}
   else 
  return $num3;

}
echo greater(15,6,77);
?>

</body>
</html>
