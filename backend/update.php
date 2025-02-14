 
 <?php require 'dbcon.php'?>
 <!DOCTYPE html>
 <head>
    <title> login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="headfoot.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jockey+One:wght@400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

        
    
</head>
<body>
    <div class=" text-end">  
        <form class="d-flex mb-2" method="post" action="backend/update.php">

            <input class="form-control me-2"   placeholder="contact"  name="update-contact">
            <button class="btn btn-primary" name='edit-contact' type="submit">Edit</button>
          </form>

          <form class="d-flex mb-2" method="post" action="backend/search.php">

            <input class="form-control me-2"   placeholder="profession"  name="update-contact">
            <button class="btn btn-primary" name='edit-contact' type="submit">Edit</button>
          </form>

          <form class="d-flex" method="post" action="backend/search.php">

            <input class="form-control me-2"   placeholder="salary index"  name="update-contact">
            <button class="btn btn-primary" name='edit-contact' type="submit">Edit</button>
          </form>
          
     </div>
</body>

 </html>

  
 
<?php
 session_start();
if(isset($_POST['edit-contact'])){
   
 $empid= $_SESSION['empids'];
 $newcontact = $_POST['update-contact'];
 $stmt = $conn->prepare(" UPDATE empfiles set m_number = :1 WHERE empid = :2");
  $stmt->bindParam(':1',$newcontact);
  $stmt->bindParam(':2',$empid);
  
  
 $stmt->execute();

 header("location: ../files.php");
}

?>