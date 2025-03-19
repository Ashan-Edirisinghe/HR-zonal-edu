<?php require 'dbcon.php'?>
<?php session_start(); ?>

<?php 



$stm2 = $conn->query("SELECT * FROM leaveform WHERE available='check' ");

$stm2->execute();
 
$list = array();
$_SESSION['index'];
while($row = $stm2->fetch(PDO::FETCH_ASSOC)){
 
 echo "<pre>";
 print_r($row); 
 echo "</pre>";
    
 
 $list[] = $row;

  
 
}
 
 
 
    

  if(isset($_POST['front'])){
     
    $_SESSION['index']++;

    $_SESSION['l_LFID'] = $list[$_SESSION['index']]['LFID'];
    //echo $list[$index]['LFID'];
    
    header("Location: ../leavemanage.php");
     exit;
  }

  else if(isset($_POST['back'])){

    
    $_SESSION['index']-- ;
    $_SESSION['l_LFID'] = $list[$_SESSION['index']]['LFID'];

    //echo $list[$index]['LFID'];
    
    header("Location: ../leavemanage.php");
    
 exit;
    
  }else {
   // $_SESSION['l_LFID'] = $list[$index]['LFID'];
  }
  /*
echo $index . "<br>";
print_r (  $list[$index]['LFID'] );
*/
 /* function sessiondata($list,$i){
 $_SESSION['l_LFID'] = $list[$i]['LFID'];
   
 }
 */

?>