<?php

// echo "topS3cr3t!";

// $lettersArray =array("a","b");
$pwdLength = $_GET['length'];
$lettersArray = range("a","z");

$password = "";

 for($i=0; $i<8; $i++){
     $randomIndex = rand(0,25);
     $password .= $lettersArray [$randomIndex]; 
 }
 
 $password[0]= rand(0,9);
 $password = str_shuffle($password);
 //echo $password;
 
// $randomIndex = rand(0,25); // generates from 0 to 25 
$data = array();
$data["suggestPwd"] = $password;

echo json_encode($data);
?>