<?php 
try{

//CREATING DATABASE VARIABLES
$hostname = "localhost";

$dbname = "hrzonal";

$user = "root";

$password = "";

//CONNCECTING TO DB


$conn = new PDO("mysql:host=$hostname;dbname=$dbname",$user,$password);

//ERROR HANDELING
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){
    echo $e->getMessage();
}
 

 //attendace

 $stm_aten =  $conn->query(" SELECT empid,end FROM leaveform WHERE approved = 'approved'");
 $stm_aten->execute();

 // Only execute this query if the user is logged in and empid session exists
 if(isset($_SESSION['empid'])) {
     $stm_status = $conn->query("SELECT start,end,reason FROM leaveform WHERE available = 'check' AND empid ='".$_SESSION['empid']."' ");
     $stm_status->execute();
 }
?>