<?
	include_once('connect.php');

	$data = json_decode(file_get_contents("php://input"));
	$idNumber=$conn->real_escape_string($data->idNumber);
	$firstName=$conn->real_escape_string($data->firstName);
	$lastName=$conn->real_escape_string($data->lastName);
	$middleName=$conn->real_escape_string($data->middleName);
	$position=$conn->real_escape_string($data->position);
	$gender=$conn->real_escape_string($data->gender);
	$email=$conn->real_escape_string($data->email);
	$contact=$conn->real_escape_string($data->contact);
	$password=$conn->real_escape_string($data->password);
?>