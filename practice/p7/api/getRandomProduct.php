<?php
    include'../../../inc/dbConnection.php';

/*// Establishing a connection
$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Setting Errorhandling to Exception
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
*/

    $conn = getDatabaseConnection("midtermPractice");
    $sql = " SELECT * FROM mp_product ORDER BY RAND() LIMIT 1 ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
   // echo $sql;
    echo json_encode($records);


?>