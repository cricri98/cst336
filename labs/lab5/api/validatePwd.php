<?php
// Validates something
// stripos  
$username = $_GET['username'];
$password = $_GET['pwd'];

//echo $username ."<br>";
//echo $pwd . "<br>";
if(stripos($password,$username) !== false ){
    //echo "Username is  ";
    $data["validPwd"] = false;
}else{
    $data["validPwd"]= true;
}

echo json_encode($data);
?>