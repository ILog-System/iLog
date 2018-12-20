<?php

	$db_con = new mysqli('localhost', 'root', '', 'thesis');

	// Check connection
	if ($db_con->connect_error) {
		die("Connection failed: " . $db_con->connect_error);
	}

	$alldata = json_decode(file_get_contents("php://input"));

	$count = count($alldata); 
    $output_res = array('error' => false);

    foreach($alldata as $key => $value){
        $idNumber = $value->idNumber;
        $fname = $value->firstname;
        $lname = $value->lastname;
        $mname = $value->middlename;
        $pos = $value->position;
        $gen = $value->gender;
        $email = $value->email;
        $contact = $value->contactNumber;
        $password = $value->password;
        $time1 = $value->time1;
        $time2 = $value->time2;



        $msqsql = "INSERT INTO thesis_user (user_idNumber, user_fname, user_lname, user_mname, user_pos, user_gen, user_email, user_contact, user_pass , mondayIn , mondayOut) VALUES ('$idNumber', '$fname' , '$lname' , '$mname' , '$pos' , '$gen' , '$email' , '$contact' , '$password' , '$time1' , '$time2')";
        $mtquery = $db_con->query($msqsql);
    }


    if($mtquery){
        $output_res['comments'] = "($count) Items added successfully";
    }else{
        $output_res['error'] = true;
        $output_res['comments'] = "Cannot add Items";
    }


    echo json_encode($output_res);
?>