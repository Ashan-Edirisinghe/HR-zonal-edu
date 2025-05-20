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

  
    <div class="container-fluid  j  ">
        
        <div class="row"> 
            <div > 
              <a href="index.php" style="color: #000;">       <img src="images/logo.png " class="img1 " >  
                    </div>
        <div> 
         <h1 class="title"> Zonal Education Office  
          <br>  Mulatiyana</h1>  </a>
          </div>
          <div>

         <h2 class="ptitle"></h2>
         <br>
         

        </div>
 
       </div>   
    </div>
    </header> 



    <nav class="navbar navbar-expand-lg " style="background-color: rgba(224, 224, 224, 0.94);">
        <div class="container-fluid">
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav me-auto">
              <a class="nav-link fw-bold "  href="UserDashboard.php">Home</a>
              
              <a class="nav-link fw-bold" href="LeaveForm.php"> Leaves</a>
              <a class="nav-link fw-bold" href="noticepage.php"> Notices</a>
              <img >
              </div>
              <div class="navbar-nav ms-auto">  
              <form action="backend/user_logout.php" method="POST">

              <button class="btn btn-primary " type="submit" name="userout"> logout</button>

              </form>
              </div>
            </div>
          </div>
        </div>
      </nav>
  
       
            
           

 
  </body>
  </html>