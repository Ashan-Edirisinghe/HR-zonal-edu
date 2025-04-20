<?php require 'dbcon.php' ?>
<?php session_start(); ?>
<?php 

if(isset($_POST['userout'])){

    
session_unset();

session_destroy();

 header("Location: ../UserLogin.php");


}


