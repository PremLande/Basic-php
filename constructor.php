<html>
<title></title>
<body>

<?php
class stud{
var $name;
var $roll_no;
var $grade;
function __construct($aname,$aroll_no,$agtade){
$this->name=$aname;
$this->roll_no=$aroll_no;
$this->grade=$agrade;
echo"New student added<br>";
echo"<hr>";
}
function distinction(){
if($this->grade>=7.5){
return "YES";
}
return "NO";
}
}

$stud1=new stud("prem",63,7.1);
$stud2=new stud("auz",39,8);
$stud3=new stud("mihir",53,5);

echo "NAME=$stud2->name<br>";
echo "Distinction=";
echo $stud2->distinction();
echo"<br>";
echo "rollno=$stud2->roll_no";
?>



</body>
</html>
