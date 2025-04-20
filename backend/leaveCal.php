<?php session_start();    
 require 'dbcon.php';
 
if(isset($_POST['trigger'])){
 

$stm = $conn->query("SELECT appointdate,profession,dep FROM empfiles WHERE empid = '$_SESSION[ln_empid]'");
$stm->execute();
$row = $stm->fetch(PDO::FETCH_ASSOC);
$appointdate=  $row['appointdate'];
$_SESSION['l_profession'] = $row['profession'];
$dep = $row['dep'];
$today = date('Y-m-d');

$appointdate_timestamp = strtotime($appointdate);
$today_timestamp = strtotime($today);

// Calculate the difference in days
$datediff = ($today_timestamp - $appointdate_timestamp) / (60 * 60 * 24*365); 

// finding dep id
$stm1 = $conn->prepare("SELECT  name  FROM departments WHERE depid =  ? ") ;
$stm1->bindParam(1,$row['dep']);
$stm1->execute();
$row1 = $stm1->fetch(PDO::FETCH_ASSOC);

 $_SESSION['l_dep'] = $row1['name']; 
$_SESSION['l_appointdate'] = $appointdate;
$_SESSION['workperiod'] =  (int)$datediff;
 
 

// calculating leave limits
$_SESSION['vacationlimit'] = 25;
$_SESSION['casuallimit'] = 15;
$_SESSION['otherlimit'] = 10;

 $id = $_SESSION['l_empid'];
 echo $id;
 echo $_SESSION['l_dep'];
 echo $_SESSION['l_appointdate'];
 echo $_SESSION['workperiod'];
 
    

 // finding other vacation count
$stm2 = $conn->prepare("SELECT start ,end FROM leaveform WHERE empid = ?  AND approved = 'approved' AND type = ? ") ;
  $stm2->bindParam(1,$id);
  $stm2->bindParam(2,$_SESSION['l_type'] );

$stm2->execute();

$otherlist = array();

while($row2 = $stm2->fetch(PDO::FETCH_ASSOC)){
    $otherlist[] =  $row2;
}

echo "<pre>";
print_r($otherlist);
echo count($otherlist);
echo "</pre>";
 
$othercount = 0;

foreach($otherlist as $ol){
    $othercount = $othercount +$othercount;
    $start_timestamp = strtotime($ol['start']);
    $end_timestamp = strtotime($ol['end']);
    $othercount = ($end_timestamp - $start_timestamp) / (60 * 60 * 24);
     
    echo $othercount;
}

if($othercount === $_SESSION['otherlimit']){
    echo "You have exceeded your other leave limit";
    $_SESSION['newotherlimit'] = 0;
    
     
}else{

    echo "You have not exceeded your other leave limit";

    $_SESSION['newotherlimit'] = $_SESSION['otherlimit'] - $othercount;

    echo  $_SESSION['newotherlimit'] ;
  
   
}

 
 
header("Location: ../leavemanage.php");
exit(); // Stop further script execution
 
}
?>