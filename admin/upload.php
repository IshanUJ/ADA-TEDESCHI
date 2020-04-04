<?php
if(!empty($_FILES)){
    // Include the database configuration file
    require 'conn.php';
    
    // File path configuration
    $targetDir = "uploads/portfolio/";
    $fileName = $_FILES['file']['name'];
    $targetFilePath = $targetDir.$fileName;
    
    // Upload file to server
    if(move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)){
        // Insert file information in the database
        $insert = $mysqli->query("INSERT INTO portfolio_images (file_name, uploaded_on) VALUES ('".$targetFilePath."', NOW())");
    }
}
?>