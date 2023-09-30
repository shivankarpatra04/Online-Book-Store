<?php
    define("HOST","mysql:host=localhost;dbname=shivankar_book_store");
    define("USERNAME","root");
    define("PASSWORD","");
    
    //Define PDO Connection
    try{
    $con = new PDO(HOST,USERNAME,PASSWORD);
    }
    catch(PDOException $ex){
        echo "Connection failed".$ex->getMessage();
    }
?>
