<?php


$servername         = "localhost";
$username           = "root";
$password           = "";
$dbname             = "ilog";

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

$idNumber = $request->idNumber;
$firstname = $request->firstName;
$lastname = $request->lastName;
$middlename = $request->middleName;
$position = $request->position;
$gender = $request->gender;
$email = $request->email;
$contact = $request->contactNumber;
$password = $request->password;


	if(!empty($_POST['idNumber']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['middlename']) && !empty($_POST['position']) && !empty($_POST['gender']) && !empty($_POST['email']) && !empty($_POST['contact']) && !empty($_POST['password'])){
	    $idNumber = $_POST["idNumber"];
		$firstName = $_POST["firstname"];
		$lastName = $_POST["lastname"];
		$middleName = $_POST["middlename"];
		$position = $_POST["position"];
		$gender = $_POST["gender"];
		$email = $_POST["email"];
		$contactNumber = $_POST["contact"];
		$password = $_POST["password"];
}

// $idNumber = isset($_POST['idNumber']) ? $_POST['idNumber'] : '';
// $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
// $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';
// $middleName = isset($_POST['middleName']) ? $_POST['middleName'] : '';
// $position = isset($_POST['position']) ? $_POST['position'] : '';
// $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
// $email = isset($_POST['email']) ? $_POST['email'] : '';
// $contactNumber = isset($_POST['contactNumber']) ? $_POST['contactNumber'] : '';
// $password = isset($_POST['password']) ? $_POST['password'] : '';


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `registeradmin`(`idNumber`, `firstName` , `lastName` , `middleName` , `position` , `gender` , `email` , `contact` , `password`) VALUES ('$idNumber','$firstName','$lastName','$middleName','$position','$gender','$email','$contactNumber','$password')";

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// $sql = "INSERT INTO registeradmin(idNumber,firstName,lastName,middleName,position,gender,email,contact,password)VALUES('".$idNumber."','".$firstname."','".$lastname."','".$middlename."','".$position."','".$gender."','".$email."','".$contact."','".$gender."')";

// $sql = "INSERT INTO registeradmin(idNumber,firstName,lastName,middleName,position,gender,email,contact,password) VALUES ($idNumber,$firstname,$lastname,$middlename,position,gender,email,contact,password)";



// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// }
// else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }


	//  if(mysqli_num_rows($match) > 0)
	//  {
	// 	$sql = "INSERT INTO userinfo(status,idNum,lastname,firstname,username,password)VALUES('".$stat."','".$id."','".$last."','".$first."','".$user."','".$pass."')";
	// 		$result = mysqli_query($conn,$sql);
			
	// 		if($result) echo "Register Success";
	// 		else echo("Username already used");
	//  }
	// else
	// {
		
			
	// 	 echo "Error to register";
			
	// }
	 

$conn->close();


?>