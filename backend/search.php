<?php session_start(); ?>
<?php require 'dbcon.php' ?>
<?php 



if(isset($_POST['fileSearch'])){
     
     $empid = $_POST['searchId'];

     $stm = $conn->prepare("SELECT * FROM empfiles WHERE empid = ? ");
     $stm->bindParam(1,$empid);
     $stm->execute();
      $row = $stm->fetch(PDO::FETCH_ASSOC);
      
     
       $_SESSION['fnames'] = $row['fname'];
       $_SESSION['lnames'] = $row['lname'];
       $_SESSION['empids'] = $row['empid'];
       $_SESSION['appointdates'] = $row['appointdate'];
       $_SESSION['dobs'] = $row['dob'];
       $_SESSION['unics'] = $row['unic'];
       $_SESSION['dobs'] = $row['dob'];
       $_SESSION['deps'] = $row['dep'];
       
       $stm1 = $conn->prepare("SELECT  name  FROM departments WHERE depid =  ? ") ;
       $stm1->bindParam(1,$_SESSION['deps']);
       $stm1->execute();
       $row1 = $stm1->fetch(PDO::FETCH_ASSOC);
     /*   echo "<pre>";
     print_r($row1);
     echo "</pre>";
     */
       $_SESSION['depname'] = $row1['name'];
        
       header("location: ../files.php");
}
?>