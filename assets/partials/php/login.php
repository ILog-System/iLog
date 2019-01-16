<?php

 try {
        $conn = new PDO("mysql:host=localhost;dbname=ilsa", "root", ""); 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully"; 
    }
  catch(PDOException $e)
    {
         echo "Connection failed: " . $e->getMessage();
    }


 //    $stmt = $conn->prepare("SELECT idNum,pass FROM admin WHERE idNum=:idNumber");
 //    // $stmt->bindParam(':idNumber', $idNumber,PDO::PARAM_STR);
 //    $stmt->execute();
 //    $row=$stmt->fetch(PDO::FETCH_ASSOC);


 //    if(password_verify('password' , $row[0]['password'])){
 //    	print 'success';
	// }else{
 // 	   print 'error';
	// }
	     
	
  
// 
    // error_reporting(0);
    //   $stmt = $conn->prepare("SELECT idNum,pass from admin WHERE idNum='".$_POST['id']."' && pass='".$_POST['pass']."'");

    //     $stmt->execute();
    //     $row = $stmt->rowCount();
    //     if ($row > 0){
    //         echo "correct";
    //     } else{
    //         echo 'wrong';
    //     }
    
    
    
?>

