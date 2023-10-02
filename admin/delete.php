<?php
$Id = $_GET['ID'];
$con = mysqli_connect('localhost','root','','book_db');
mysqli_query($con,"DELETE FROM `book_form` WHERE id=$Id");
header("location:data.php");
?>
