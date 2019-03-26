<?php
$numbers = array();
    for($i=0;$i<=4;$i++){
        $numbers[$i]=rand(1,70);
    }
// first 5 indexs are from 1-70
$numbers[5]=rand(1,25);
// last one is from 1-25
echo json_encode($numbers);
?>