<?php
$array1 = array(1, 2, 4.5, 8, 15);
$array2 = array("a" => 1.5, "b" => 2.5, "c" => 4.6, "d" => 10.4);
 $count=count($array1)
echo array_sum($array1); // Outputs: 30.5
echo "<br>";
echo array_sum($array2); // Outputs: 19
?>