<?php
include('connection.php');
session_start();
// if(isset($_SESSION['email'])){
//     $email= $_SESSION['email'];
// }
$email= $_SESSION['email'];
if(isset($_FILES["file"])){
    $targetDir = "uploads/";
$file = $_FILES["file"]["name"];
$tmp = $_FILES["file"]["tmp_name"];

$file_trgt = $targetDir . basename($_FILES["file"]["name"]);

$fileType = pathinfo($targetDir,PATHINFO_EXTENSION);
if(move_uploaded_file($tmp, "profile/".$file)){
    
    echo "<img src='profile/".$file."'>";
}
$sql = "UPDATE `sign_in` SET `user_profile` ='$file' WHERE `email` = '$email'";

// $sql= "INSERT INTO `sign_in` (`user_profile`) VALUES ('$file') WHERE `email` = $_SESSION['email']";
$res = mysqli_query($conn,$sql);
if($res){
    echo "<img width='200px' src='profile/. $file' class='userpic'>";

    echo "upload successfull";
    
}
else{
    alert('pic not upload');
}

}


?>