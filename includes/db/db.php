<?php
//DB details
$dbHost = 'localhost';
$dbUsername = 'auzziech_element';
$dbPassword = 'element1234567890!';
$dbName = 'auzziech_element';

//Create connection and select DB

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


/*
if ($conn->connect_error) {
die("Unable to connect database: " . $conn->connect_error);
} 

else{


$sql = "INSERT INTO contacts (name, company_name, contact_no,association,notes)
VALUES ('ahmad', 'tech hub', '123456789','afasdfasdfasdf','adfasdfasdfasdf')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



//die();

}*/


?>