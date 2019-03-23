<?php //Булев Тип

 $x = 12;
 $y =34;
 $z =4.25;
 $bool_1 = $x != $y;

 $bool_2 = $x <= $y;

 echo $bool_1 . "<br/>" . $bool_2 . "<hr />";
 //echo "<br />";
 //echo $bool_2;

$bool_3 = !($x == $y); 

$bool_4 = $x == $y || $z < $y;//или
$bool_5 = $x != $y && $z < $y;//и 
$bool_6 = $z != $x ^ $y > $z;// взаимо исключающее
$bool = !($x != $y && $z < $x) || $x != $y;//сложное выражение

//echo  "<br />";
echo "<br />" . $bool_3;
echo "<br />" . $bool_4;
echo "<br />" . $bool_5;
echo "<br />" . $bool_6;
//echo "<br />" . $bool;
echo "<br /> $bool = !($x != $y && $z < $x) || $x != $y";

 ?>

