<?php session_start(); ?>
<?php require 'dbcon.php' ?>
<?php 

if(isset($_POST['fileSubmit'])){
   $nic = $_POST['unic'];
    $fullname = $_POST['uFname'];
    $lastname = $_POST['uLname'];
    $uid = $_POST['uEmpid'];
    $appointdate = $_POST['appointDate'];
    $udob = $_POST['DOB'];
    $udep = $_POST['uDep'];
    $unum = $_POST['num'];
    $urole = $_POST['role'];
    try{ 

    $stm = $conn->query("INSERT INTO empfiles VALUES('$nic','$fullname','$lastname','$uid','$appointdate','$udob',$udep,'$unum','$urole')");
    $stm->execute();

    
     
    
     header("location: ../files.php?success");
    }
    catch(PDOException $e){
         echo $e->getMessage();
         header("location: ../files.php?success");
    }
  
}
    
 
 


 
 
?>