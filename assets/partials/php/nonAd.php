<?php
	
try {
	$conn = new PDO("mysql:host=localhost;dbname=ilsa", "root", ""); 
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e)
{
	echo "Connection failed: " . $e->getMessage();
}


$stmt=$conn->prepare("SELECT idNumber,firstname,lastname,middlename,position,gender,email,contact from user");
   
$stmt->execute();
$result = $stmt->fetchAll( PDO::FETCH_ASSOC );
$json = json_encode( $result );
echo $json;

?>