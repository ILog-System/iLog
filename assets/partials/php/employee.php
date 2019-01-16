<?php
	
try {
	$conn = new PDO("mysql:host=localhost;dbname=ilsa", "root", ""); 
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e)
{
	echo "Connection failed: " . $e->getMessage();
}


$stmt=$conn->prepare("SELECT admin.idNum,admin.first,admin.middle,admin.last,admin.pos,admin.gen,admin.email,admin.con,admin_sch.timeIn,admin_sch.timeOut from `admin` INNER JOIN `admin_sch` ON admin.idNum=admin_sch.idNum");

  
$stmt->execute();
$result = $stmt->fetchAll( PDO::FETCH_ASSOC );
$json = json_encode( $result );

echo $json;
?>