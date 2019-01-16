<?php



	require 'connect.php';

	$connect = connect();

	// Add the new data to the database.
	$postdata = file_get_contents("php://input");
if(isset($postdata) && !empty($postdata))
{
    $request     = json_decode($postdata);
    
    $idNumber  = preg_replace('/[^a-zA-Z ]/','',$request->idNumber);
    $firstname = preg_replace('/[^0-9 ]/','',$request->firstName);
    $lastname = preg_replace('/[^0-9 ]/','',$request->lastName);
    $middlename = preg_replace('/[^0-9 ]/','',$request->middleName);
    $position = preg_replace('/[^0-9 ]/','',$request->position);
    $gender = preg_replace('/[^0-9 ]/','',$request->gender);
    $email = preg_replace('/[^0-9 ]/','',$request->email);
    $contactNumber = preg_replace('/[^0-9 ]/','',$request->contact);
    $password = preg_replace('/[^0-9 ]/','',$request->password);
    
    if($idNumber  == '' || $firstname == '' || $lastname = '' || $middlename = '' || $position = '' || $gender = '' ||  $email = '' || $contactNumber = '' || $password = '') return;

    $sql = "INSERT INTO `registeradmin`(`idNumber`, `firstName` , `lastName` , `middleName` , `position` , `gender` , `email` , `contact` , `password`) VALUES ('$idNumber','$firstname','$lastname','$middlename','$position','$gender','$email','$contactNumber','$password')";

    mysqli_query($connect,$sql);
}
exit;

	// include_once('connect.php');


	// $data = json_decode(file_get_contents("php://input"));

	// $idNumber = mysqli_real_escape_string($conn, $data->idNumber);
	// $firstname = mysqli_real_escape_string($conn, $data->firstname);
	// $lastname = mysqli_real_escape_string($conn, $data->lastname);
	// $middlename = mysqli_real_escape_string($conn, $data->middlename);
	// $position = mysqli_real_escape_string($conn, $data->position);
	// $gender = mysqli_real_escape_string($conn, $data->gender);
	// $email = mysqli_real_escape_string($conn, $data->email);
	// $contactNumber = mysqli_real_escape_string($conn, $data->contactNumber);
	// $password = mysqli_real_escape_string($conn, $data->password);

	// $query = "INSERT INTO registeradmin (idNumber,firstName,lastName,middleName,position,gender,email,contact,password) VALUES ('$idNumber','$firstname','$lastname','$middlename','$position','$gender','$email','$contactNumber','$password')";

	// mysqli_query($conn, $query);
	// echo true;

	// include('connect.php');

	// $data = json_decode(file_get_contents("php://input"))

	// if(empty($form_data->idNumber))
	// {
	// 	$error[] = "Id number is required";
	// }
	// else
	// {
	// 	$data[':idNumber'] = $form_data->idNumber;
	// }

	// if(empty($form_data->firstname))
	// {
	// 	$error[] = "first name is required";
	// }
	// else
	// {
	// 	$data[':firstname'] = $form_data->firstname;
	// }


	// if(empty($form_data->lastname))
	// {
	// 	$error[] = "last name is required";
	// }
	// else
	// {
	// 	$data[':lastname'] = $form_data->lastname;
	// }

	// if(empty($form_data->middlename))
	// {
	// 	$error[] = "middle name is required";
	// }
	// else
	// {
	// 	$data[':middlename'] = $form_data->middlename;
	// }

	// if(empty($form_data->position))
	// {
	// 	$error[] = "position is required";
	// }
	// else
	// {
	// 	$data[':position'] = $form_data->position;
	// }

	// if(empty($form_data->gender))
	// {
	// 	$error[] = "Gender is required";
	// }
	// else
	// {
	// 	$data[':gender'] = $form_data->gender;
	// }

	// if(empty($form_data->email))
	// {
	// 	$error[] = "email is required";
	// }
	// else
	// {
	// 	$data[':email'] = $form_data->email;
	// }

	// if(empty($form_data->contactNumber))
	// {
	// 	$error[] = "contact number is required";
	// }
	// else
	// {
	// 	$data[':contact'] = $form_data->contactNumber;
	// }


	// if(empty($form_data->password))
	// {
	// 	$error[] = "password is required";
	// }
	// else
	// {
	// 	$data[':password'] = password_hash($form_data->password , PASSWORD_DEFAULT);
	// }


	// if(empty($error))
	// {
	// 	$query = "INSERT INTO reg(idNum,fName,lName,mName,pos,gen,email,conNum,pass)VALUES(:idNumber,:firstname,:lastname,:middlename,:position,:gender,:email,:contact,:password)";

	// 	$statement = $connect->prepare($query);
	// 	if($statement->execute($data))
	// 	{
	// 		$message = "Registration complete!";
	// 	}
	// }
	// else{
	// 	$validation_error = implode(", " , $error);
	// }

	// $output = array(
	// 	'error' => $validation_error,
	// 	'message' => $message
	// );

	// echo json_encode($output);
?>