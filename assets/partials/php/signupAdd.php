<?php
    

  try {
        $conn = new PDO("mysql:host=localhost;dbname=ilsa", "root", ""); 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully"; 
    }
  catch(PDOException $e)
    {
         echo "Connection failed: " . $e->getMessage();
    }
  

    error_reporting(0);
    // var_dump($_POST);
    $imageData = $_FILES['file']['name'];
    $blob = fopen($_FILES['file']['tmp_name'], 'rb');
    if(!empty($_POST['idNumber'])&& !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['middlename']) && !empty($_POST['position']) && !empty($_POST['gender']) && !empty($_POST['email']) && !empty($_POST['contactNumber'])  && !empty($_POST['password']) && !empty($_POST['time1']) && !empty($_POST['time2']))
    {

       $ins_query=$conn->prepare("insert into admin(idNum,first,last,middle,pos,gen,email,con,pass,image)
        values( :idNumber,:firstname,:lastname,:middlename,:position,:gender,:email,:contactNumber,:password,:blob)");
        $ins_query1=$conn->prepare("insert into admin_sch(idNum, timeIn, timeOut)
        values(:idNumber,:time1,:time2)");

       $ins_query->bindParam(':idNumber', $_POST['idNumber']);
       $ins_query->bindParam(':firstname', $_POST['firstname']);
       $ins_query->bindParam(':lastname', $_POST['lastname']);
       $ins_query->bindParam(':middlename', $_POST['middlename']);
       $ins_query->bindParam(':position', $_POST['position']);
       $ins_query->bindParam(':gender', $_POST['gender']);
       $ins_query->bindParam(':email', $_POST['email']);
       $ins_query->bindParam(':password', $_POST['password']);
       $ins_query->bindParam(':contactNumber', $_POST['contactNumber']);
       $ins_query->bindParam(':blob', $blob, PDO::PARAM_LOB);
       $ins_query1->bindParam(':idNumber', $_POST['idNumber']);
       $ins_query1->bindParam(':time1', $_POST['time1']);
       $ins_query1->bindParam(':time2', $_POST['time2']);
      
      $ins_query->execute();
      $ins_query1->execute();
    }

  
   
    $sel_query->execute();
    echo json_encode($sel_query->fetchAll());
?>



 <!-- $result = $conn->prepare("select * from thesis_user order by id "); -->