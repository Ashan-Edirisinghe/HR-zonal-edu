<?php 
session_start();
require 'dbcon.php';
if( isset($_POST['checkonleave'])){
$onleave =  array();
$today = date('Y-m-d');
$today_timestamp = strtotime($today);

while($row = $stm_aten->fetch(PDO::FETCH_ASSOC)){ 

//$onleave[] = $row;


$end_timestamp = strtotime($row['end']);
$value = ($end_timestamp - $today_timestamp) / (60 * 60 * 24);

if($value <= 0 ){
    $onleave[] = $row['empid'];
}

}


echo "<pre>";
print_r($onleave);
 
echo "</pre>";

$_SESSION['onleave'] = $onleave;

header("Location: ../adminDash.php");
}
?>