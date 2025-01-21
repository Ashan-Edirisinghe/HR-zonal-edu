<?php session_start(); ?>
<?php require 'dbcon.php' ?>
<?php 



if(isset($_POST['fileSearch'])){
     
     $empid = $_POST['searchId'];

     $stm = $conn->query("SELECT * FROM empfiles WHERE empid = 'EMP001ZE' ");
     $stm->execute();
     $row = $stm->fetch();
     echo "<pre>";
     print_r($row);
     echo "</pre>";



}
?>