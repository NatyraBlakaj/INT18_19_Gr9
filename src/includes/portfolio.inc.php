<?php

function OpenConn(){
    $rootDirectory = 'http://localhost/PHP18_19_Gr24/src/portfolio.php';
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'portfolio';
    
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die("Connection failed: %s\n" . $pfconn->error);

    return $conn;
}

function deleteRecord($protfolioName){
    $sql = ' DELETE FROM projects WHERE name = "$protfolioName"';
   
    if (mysqli_query($conn, $sql)) {
       echo "Record deleted successfully";
    } else {
       echo "Error deleting record: " . mysqli_error($conn);
    }
}

function closeProtfolioConn(){  
    $conn -> close();
}