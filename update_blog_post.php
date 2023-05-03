<!-- blog post update -->
<?php
include('connection.php');
session_start();
if(isset($_GET['id'])){
    $id= $_GET['id'];
}
$date=$_POST['date'];
$lstmfddate=$_POST['lstdate'];
$blgtitle=$_POST['blgtitle'];
$blgcon=$_POST['editordata'];
$category=$_POST['category'];
$tag=$_POST['tags'];

$query ="UPDATE `post` SET `date`='$date',`last_modified`='$lstmfddate',`blog_title`='$blgtitle',`blog_content`='$blgcon',`categories`='$category',`tags`='$tag' WHERE `id`= $id";
$result = mysqli_query($conn,$query);
if($result){
    echo "update succefully";
    header('location:user_profile_page.php');
}
?>