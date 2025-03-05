
<?php require 'dbcon.php' ?>
<?php session_start(); ?>
<?php 

if(isset($_POST['adminout'])){

    
session_unset();

session_destroy();

 header("Location: ../admin_log.php");


}












?>