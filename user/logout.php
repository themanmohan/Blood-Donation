<?php 
include 'include/header.php';



session_unset();
$_SESSION['']="";

header("Location: ../index.php");
?>
