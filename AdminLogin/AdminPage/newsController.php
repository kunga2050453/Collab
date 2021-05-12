<?php

session_start();
require "../connection.php";
$title = "";
$description = "";
$image = "";
$id = "0";
$update = true;

error_reporting(E_ALL);
ini_set('display_errors', '1');
// die('die');
// if post is clicked (creating)
if (isset($_POST['post'])) {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    $query = "INSERT INTO info (title, description, image) values ('$title', '$description', '$image')";
    mysqli_query($con, $query);
    $_SESSION['msg'] = "News saved";
}
// delete records
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($con, "DELETE FROM info WHERE id=$id");
    $_SESSION['msg'] = "News deleted";
    header('location: AdminPage.php');
}
if (isset($_GET['edit'])) {  
    $id = $_GET['edit'];
    $result = mysqli_query($con, "SELECT * FROM info WHERE id=$id");
    $blog = mysqli_fetch_array($result);
}
// update record

if (isset($_POST['update'])) {
    $id = $_POST['id'];
	$title = $_POST['title'];
	$description = $_POST['description'];
    
    
    mysqli_query($con, "UPDATE info SET title='$title', description='$description' WHERE id=$id");
    $_SESSION['msg'] = "news updated!"; 

    $result = mysqli_query($con, "SELECT * FROM info WHERE id=$id");
    $blog = mysqli_fetch_array($result);
    

	header('location: AdminPage.php');
}


?>