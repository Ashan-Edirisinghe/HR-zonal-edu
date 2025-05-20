<?php session_start(); ?>
<?php require 'dbcon.php' ?>
<?php 

if(isset($_POST['userlogin'])){
    
   $id = $_POST['userID'];
    $psw = $_POST['userpsw'];

    $stm = $conn->query("SELECT * FROM employee WHERE  EMPId = '$id' ");
    $stm->execute();

    $row = $stm->FETCH(PDO::FETCH_ASSOC);

    if( $stm->rowCount() > 0){ 
   
   if(  verifypsw($row["Password"],$psw)){

    $_SESSION['empid'] = $row['EMPID'];
   //  header("location: ../UserDashboard.php");
   }
}

     
 
}

$status = array();
    while($row_status = $stm_status->fetch(PDO::FETCH_ASSOC)){
        $status[] = $row_status;
         
    }
    echo count($status);
    echo "ji";
    echo "<pre>";
     print_r($status);
 
        echo "</pre>";

function verifypsw($pass,$newpass){
    if($pass == $newpass){
        return true;
    }
}


 
 
?>