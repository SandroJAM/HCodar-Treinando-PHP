<?php

 $arr1 = [1, 2, 3];
 $arr2 = [4, 5, 6];
 $arr3 = [7, 8, 9];

 $arr4 = ["ads", "ad", "s"];

 $arrMerge =  array_merge($arr1, $arr2, $arr3);

 print_r($arrMerge);
 echo "<br>";

 $arrMerge =  array_merge($arr1, $arr2, $arr3, $arr4);

 print_r($arrMerge);
 echo "<br>";