<?php

// include database and object files
include_once '../config/db.php';
include_once '../objects/user.php';

ini_set("SMTP", "smtp.gmail.com");
ini_set("sendmail_from", "brahimchaoui273@gmail.com");
ini_set("smtp_port", "465");

// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$user = new User($db);
// set ID property of user to be edited
$user->mail = isset($_GET['mail']) ? $_GET['mail'] : die();
// read the details of user to be edited
$stmt = $user->ResentPassword();
if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
   
	$to_email = $row['mail'];
    $subject = "Reset password";
	$message = "Your password is : ". $row['password'] ;
	$headers = 'MIME-Version: 1.0' . "\r\n"; 
    $headers .= 'From: PerempApp Team <brahimchaoui273@gmail.com>' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

	$mailS=mail($to_email,$subject,$message,$headers);
	// var_dump($mailS);
	 $user_arr=array(
        "status" => true,
        "message" => "done !",
    );
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "Invalid mail or Password!",
    );
}
// make it json format
echo json_encode($user_arr);
?>
	