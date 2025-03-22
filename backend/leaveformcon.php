<?php session_start(); ?>
<?php require 'dbcon.php' ?>
<?php 

if(isset($_POST['leaveform'])){

   $leavetype = $_POST['type'];
    $startdate = $_POST['startDate'];
    $enddate = $_POST['endDate'];
    $reason = $_POST['reason'];
    $submitdate = date('Y-m-d');
     $availability = 'check';
    $empid = $_SESSION['empid'];
     $time = getdate(date('U'));
    $formid = $time['year'].$empid.$time['mday'].$time['mon'];
    
}
    try{ 

    $stm = $conn->query("INSERT INTO leaveform (LFID,type,start,end,submitdate,reason,available,empid) VALUES('$formid','$leavetype','$startdate','$enddate','$submitdate','$reason','$availability','$empid' )");
    $stm->execute();

    
     
    
     header("location: ../LeaveForm.php?success");
    }
    catch(PDOException $e){
         echo $e->getMessage();
         header("location: ../LeaveForm.php?unsuccess");
    }
  


 


    