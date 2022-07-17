<?php


//get data from form  
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


$to = "sales@tektune.co.uk";

$txt ="Hi TekTune, You have received a new Message. \r\n  Name = ". $name . "\r\n  Email = " . $email . "\r\n  Subject = " . $subject . "\r\n  Message =" . $message;



$headers = "From: noreply@gamestocker.com" . "\r\n" .
"CC: somebodyelse@example.com";

if($email!=NULL){
    $mail = mail($to,$subject,$txt,$headers);
    
    if($mail){
        header("Location:thanks.php");
    }
    
}

// header("Location:thanks.php");
?>