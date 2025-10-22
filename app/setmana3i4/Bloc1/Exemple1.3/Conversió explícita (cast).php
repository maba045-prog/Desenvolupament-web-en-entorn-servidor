<?php
$nota_str = "8.5";
$nota_float = (float)$nota_str;  // converteix a float
$nota_int = (int)$nota_float;    // converteix a integer
$aprov = (bool)$nota_int;        // converteix a boolean

echo $nota_float; // 8.5
echo $nota_int;   // 8
echo $aprov;      // 1 (true)
?>
