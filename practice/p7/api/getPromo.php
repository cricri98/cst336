<?php
// Get promo codes mp_codes
    include'../../../inc/dbConnection.php';
    $conn = getDatabaseConnection("midtermPractice");
    $namedParameters = array();
    
    $sql = "SELECT * FROM mp_codes WHERE 1";
    
?>