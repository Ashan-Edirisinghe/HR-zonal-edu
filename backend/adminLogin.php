
<?php session_start(); ?>
<?php require 'dbcon.php' ?>
<?php 

if(isset($_POST['login'])){
   $id = $_POST['adminId'];
    $psw = $_POST['adminPsw'];

    $stm = $conn->query("SELECT * FROM admin WHERE  AdminId = '$id' ");
    $stm->execute();

    $row = $stm->FETCH(PDO::FETCH_ASSOC);

    if( $stm->rowCount() > 0){ 
   
   if(  verifypsw($row["Adminpsw"],$psw)){

    $_SESSION['adminRole'] = $row['Role'];
     header("location: ../adminDash.php");
   }
}
    
 
}


function verifypsw($pass,$newpass){
    if($pass == $newpass){
        return true;
    }
}
 
?>