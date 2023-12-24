<?php
if(isset($_POST["submit"]))
{
    $fname = $_POST["name"];
    $watsapp = $_POST["watsapp"];


    $serverName = "localhost";
    $userName = "root1";
    $password = "kareem";
    $dbName = "footbal";
    // connection
    $conn = new mysqli($serverName, $userName, $password, $dbName);
    //check connection
    if ($conn->connect_error) {
        echo "failed connection";
    } else {
        echo "successful connection" . "<br>";
    }
    //excute sql 
    
    $sql = "INSERT INTO joinUs (fname , watsapp)
    VALUES('$fname' , '$watsapp')";
    
    
    if ($conn->query($sql) === true) {
        echo "Record Inserted successfully";
    } else {
        echo "Record is not Inserted successfully";
    }
    $conn->close();


}

?>