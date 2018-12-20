<?php
    
    error_reporting(0);
    $conn = new PDO("mysql:host=localhost;dbname=thesis", "root", ""); 
    $_POST = json_decode(file_get_contents('php://input'), true);
    // $rawData = $_POST['base64'];
    // $filteredData = explode(',', $rawData);
    // $unencoded = base64_decode($rawData);
    if(!empty($_POST['idNumber'])&& !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['middlename']) && !empty($_POST['position']) && !empty($_POST['gender']) && !empty($_POST['email']) && !empty($_POST['contactNumber']) && !empty($_POST['password']) && !empty($_POST['canvas']))
    {
        
       // $rawData = $_POST['canvas'];
       // $unencoded = base64_decode($rawData);
       // $baseFromJavascript = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUAAAADwCAYAAABxLb1rAAAG80lEQVR4Xu3UAREAAAgCMelf2iA";
       // $base_to_php = explode(',', $baseFromJavascript);
       // $data = base64_decode($base_to_php[1]);
        $baseFromJavascript = $_POST['dataURL'];
        $unencoded = base64_decode($baseFromJavascript);
        $base_to_php = explode(',', $baseFromJavascript);
        $data = base64_decode($base_to_php[1]);
       $ins_query=$conn->prepare("insert into thesis_user (user_idNumber, user_fname, user_lname, user_mname, user_pos, user_gen, user_email, user_contact, user_pass,img)
        values( :idNumber,:firstname,:lastname,:middlename,:position,:gender,:email,:contactNumber,:password,:data)");
       $ins_query->bindParam(':idNumber', $_POST['idNumber']);
       $ins_query->bindParam(':firstname', $_POST['firstname']);
       $ins_query->bindParam(':lastname', $_POST['lastname']);
       $ins_query->bindParam(':middlename', $_POST['middlename']);
       $ins_query->bindParam(':position', $_POST['position']);
       $ins_query->bindParam(':gender', $_POST['gender']);
       $ins_query->bindParam(':email', $_POST['email']);
       $ins_query->bindParam(':contactNumber', $_POST['contactNumber']);
       $ins_query->bindParam(':password', $_POST['password']);
       $ins_query->bindParam(':data', $_POST['data']);
       $chk_ins=$ins_query->execute();
    }
    $result = $conn->prepare("select * from thesis_user order by id ");
    $sel_query->execute();
    echo json_encode($sel_query->fetchAll());
?>