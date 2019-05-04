<?php

if(!empty($_FILES)){
    
if ($_FILES['upfile']['size'] > 1000000) {
        throw new RuntimeException('Exceeded filesize limit.');
    }
    
print_r($_FILES);

echo"Image size: " .$_FILES['fileName']['size'];

move_uploaded_file( $_FILES['fileName']['tmp_name'], "gallery/" . $_FILES['fileName']['name']);
}

    function displayImagesUploaded(){
    $images = scandir("gallery");
    //print_r($images);
    for($i = 2; $i < count($images); $i++){
        echo"<img src='gallery/$images[$i]' width='50' />";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Lab 9: File Upload </title>
    
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
    <style>
            img{ padding: 10px; }
            
            img:hover{ width: 250px; }
        </style>
    </head>
    <body>
        <br><br>
            <h1> File Upload </h1>
            
             <hr> 
             
            <form method="POST" enctype="multipart/form-data"> 
            Select file: <input type="file" name="fileName" /> <br />
            <input type="submit"  name="uploadForm" value="Upload File" /> 
            </form>
            
            <h3> Images upload: </h3>
            
            <?=displayImagesUploaded() ?>
             
             <hr>
             
             <footer>
            <img src="../../img/buddy_verified.png" alt="buddy checked"/><br/>
            &copy;  2019. Christopher Jimenez - CST 336 Internet Programming <br />
        <strong>Disclaimer:</strong> The content of this page is fake. It's only for educational purposes.
            <br/><br/>
            <img src="../../img/logo.png" alt="csumb.logo" />
        </footer>

    </body>
</html>