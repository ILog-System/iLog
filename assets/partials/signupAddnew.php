<?php

 	$insertData = file_get_contents("php://input");
    $request = json_decode($insertData);
    $id_no = $request->id_no;
    $first_name = $request->first_name;
    $last_name = $request->last_name;
    $middle_name = $request->middle_name;
    $pos = $request->pos;
    $gen = $request->gen;
    $email = $request->email;
    $contact = $request->contact;
    $pass = $request->pass;



	$servername = "localhost";
	$username = "root";
	$password = ""; //Your User Password
	$dbname = "thesis"; //Your Database Name


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO thesis_user (user_idNumber, user_fname , user_lname , user_mname , user_pos , user_gen , user_email , user_contact , user_pass)
VALUES ('$id_no', '$first_name', '$last_name' , '$middle_name' , '$pos' , '$gen' , '$email' , '$contact' , '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>