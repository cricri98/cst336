<?php

$code = $_GET['code'];

$found = false;
$codes = array
(
    array("getFifty","halfPrice",.5),  
    array("sand30","spring30",.3),  
    array("beach","sunny",.2)  
);

if(in_array($code, $codes)) {
    $found = true;
}
else {
   $found = false;
}

echo json_encode($found);


?>




