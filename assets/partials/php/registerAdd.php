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
  
    // $conn = new PDO("mysql:host=localhost;dbname=ilsa", "root", ""); 
    error_reporting(0);
    var_dump($_POST);
    $imageData = $_FILES['file']['name'];
    $blob = fopen($_FILES['file']['tmp_name'], 'rb');
    if(!empty($_POST['idNumber'])&& !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['middlename']) && !empty($_POST['position']) && !empty($_POST['gender']) && !empty($_POST['email']) && !empty($_POST['contactNumber']) && !empty($_POST['time1'])&& !empty($_POST['time2']) && !empty($_POST['time3']) && !empty($_POST['time4']) && !empty($_POST['time5']) && !empty($_POST['time6']) && !empty($_POST['time7']) && !empty($_POST['time8']) && !empty($_POST['time9'])  && !empty($_POST['time10'])  && !empty($_POST['time11'])  && !empty($_POST['time12']))
    {

       $ins_query=$conn->prepare("insert into user(idNumber,firstname,lastname,middlename,position,gender,email,contact,img)
        values( :idNumber,:firstname,:lastname,:middlename,:position,:gender,:email,:contactNumber,:blob)");
        $ins_query1=$conn->prepare("insert into sched(idNumber, mondayIn, mondayOut, tuesdayIn, tuesdayOut, wednesdayIn, wednesdayOut, thursdayIn, thursdayOut, fridayIn, fridayOut,saturdayIn,saturdayOut)
        values(:idNumber,:time1,:time2,:time3,:time4,:time5,:time6,:time7,:time8,:time9,:time10,:time11,:time12)");
       $ins_query->bindParam(':idNumber', $_POST['idNumber']);
       $ins_query->bindParam(':firstname', $_POST['firstname']);
       $ins_query->bindParam(':lastname', $_POST['lastname']);
       $ins_query->bindParam(':middlename', $_POST['middlename']);
       $ins_query->bindParam(':position', $_POST['position']);
       $ins_query->bindParam(':gender', $_POST['gender']);
       $ins_query->bindParam(':email', $_POST['email']);
       $ins_query->bindParam(':contactNumber', $_POST['contactNumber']);
       $ins_query->bindParam(':blob', $blob, PDO::PARAM_LOB);
       $ins_query1->bindParam(':idNumber', $_POST['idNumber']);
       $ins_query1->bindParam(':time1', $_POST['time1']);
       $ins_query1->bindParam(':time2', $_POST['time2']);
       $ins_query1->bindParam(':time3', $_POST['time3']);
       $ins_query1->bindParam(':time4', $_POST['time4']);
       $ins_query1->bindParam(':time5', $_POST['time5']);
       $ins_query1->bindParam(':time6', $_POST['time6']);
       $ins_query1->bindParam(':time7', $_POST['time7']);
       $ins_query1->bindParam(':time8', $_POST['time8']);
       $ins_query1->bindParam(':time9', $_POST['time9']);
       $ins_query1->bindParam(':time10', $_POST['time10']);
       $ins_query1->bindParam(':time11', $_POST['time11']);        
       $ins_query1->bindParam(':time12', $_POST['time12']);
       $chk_ins=$ins_query->execute();
       $chk_ins=$ins_query1->execute();
    }

  
    $result = $conn->prepare("select * from thesis_user order by id ");
    $sel_query->execute();
    echo json_encode($sel_query->fetchAll());
?>