<?php
	
try {
	$conn = new PDO("mysql:host=localhost;dbname=ilsa", "root", ""); 
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e)
{
	echo "Connection failed: " . $e->getMessage();
}



$stmt1=$conn->prepare("SELECT sch_id,idNum,timeIn,timeOut from admin_sch");
  

$stmt1->execute();
$result1 = $stmt1->fetchAll( PDO::FETCH_ASSOC );
$json = json_encode( $result1);
echo $json;

?>