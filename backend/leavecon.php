<?php require 'dbcon.php'?>
<?php session_start(); ?>
<?php 
 
//if(isset($_POST['leaveformnotice'])){

   
 


//$stm2 = $conn->query("SELECT * FROM leaveform WHERE available='check' ");
//$stm3 = $conn->query("SELECT fname, lname FROM empfiles WHERE empid IN (SELECT empid FROM employee WHERE empid IN (SELECT empid FROM leaveform WHERE available='check'))");
 
$stm4 = $conn->query("
SELECT leaveform.*, empfiles.fname, empfiles.lname
FROM leaveform
INNER JOIN employee ON leaveform.empid = employee.empid
INNER JOIN empfiles ON employee.empid = empfiles.empid
WHERE leaveform.available = 'check'
");

  $stm4->execute();


    
  $list = array();
 
     while($row = $stm4->fetch(PDO::FETCH_ASSOC)){

   
 
          $list[] =  $row;
   
    }

   echo "<pre>";  
    print_r($list);
    echo "</pre>";
 
 
  

    
    
   function sessiondata($list,$i){

    $_SESSION['l_LFID'] = $list[$i]['LFID'];
    $_SESSION['l_reason'] = $list[$i]['reason'];
    $_SESSION['l_submitdate'] = $list[$i]['submitdate'];
    $_SESSION['l_start'] = $list[$i]['start'];
    $_SESSION['l_end'] = $list[$i]['end'];
    $_SESSION['l_type'] = $list[$i]['type'];
    $_SESSION['l_fname'] = $list[$i]['fname'];
    $_SESSION['l_lname'] = $list[$i]['lname'];
    $_SESSION['l_empid'] = $list[$i]['empid'];
    
   
   }
 

  
 
  
  
  


  

 

 


if (count($list) > 0) {

  
  if (!isset($_SESSION['index'])) {

   
    $_SESSION['index'] = 0;
    sessiondata($list, $_SESSION['index']);
 
     
 
 }
   
  
   
   
  
  
   
  $_SESSION['leavenotice'] = true;
  
   
  header("Location: ../leavemanage.php");
   


      
  
     



} else { 
  $_SESSION['leavenotice'] = false;
  header("Location: ../leavemanage.php");
  
  exit;
}


 

if(isset($_POST['back']) && $_SESSION['index'] > 0){

  
  $_SESSION['index']-- ;

  //$_SESSION['l_LFID'] = $list[$_SESSION['index']]['LFID'];
  sessiondata($list,$_SESSION['index']);

  //echo $list[$index]['LFID'];
  
  header("Location: ../leavemanage.php");
  
 exit;
  
}  

if($_SESSION['index'] < 0 || $_SESSION['index'] > count($list)-1){ 
  $_SESSION['index'] = 0;
  sessiondata($list,$_SESSION['index']);
  header("Location: ../leavemanage.php");
  exit;
}
 
 
/*
echo $index . "<br>";
print_r (  $list[$index]['LFID'] );
*/

if(isset($_POST['front']) && $_SESSION['index'] < count($list)-1){
  
       
  $_SESSION['index']++;

 // $_SESSION['l_LFID'] = $list[$_SESSION['index']]['LFID'];

  sessiondata($list,$_SESSION['index']);

  //echo $list[$index]['LFID'];
  
  header("Location: ../leavemanage.php");
   exit;
} 



/* approval code */
if(isset($_POST['approve']) || isset($_POST['reject']) || isset($_POST['comment'])){

if(isset($_POST['approve'])){
  $validation = 'approved';
}else if(isset($_POST['reject'])){
  $validation = 'rejected';
}

$coment = $_POST['comment'];

echo $coment;
echo $validation;

$stm5 = $conn->query("UPDATE leaveform SET comment = '$coment', approved = '$validation', available = 'done' WHERE LFID = '$_SESSION[l_LFID]' ");
$stm5->execute();

header("Location: ../leavemanage.php");
exit;
}




 /*
}else{
  $_SESSION['leavenotice'] = false;
  header("Location: ../leavemanage.php");
  
  exit;
}


 */
?>