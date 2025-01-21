<?php session_start(); ?>
<!DOCTYPE html>
 <html> 
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
    <header> 
    <div class="container-fluid  j  ">
        
        <div class="row"> 
            <div > 
              <a href="home.html" style="color: #000;">       <img src="images/logo.png " class="img1 " >  
                    </div>
        <div> 
         <h1 class="title"> Zonal Education Office  
          <br>  Mulatiyana</h1>  </a>
          </div>
          <div>

         <h2 class="ptitle"> Leaves</h2>
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
            <a class="nav-link fw-bold "  href="adminDash.php">Home</a>
              <a class="nav-link fw-bold" href="files.php"> Files</a>
              <a class="nav-link fw-bold" href="leavemanage.php"> Leaves</a>
              <a class="nav-link fw-bold" href="Notice.php"> Notices</a>
              <img >
              </div>
              <div class="navbar-nav ms-auto">  
              <button class="btn btn-primary "> logout</button>
              </div>
            </div>
          </div>
        </div>
      </nav>

   <div class="container ">
     <div class="row " >

<!-- add files  -->

    <div class="col-sm-6 g-2"  style="background-color: rgba(224, 224, 224, 0.94);">
        <h3 class="fs-5 text-center">ADD Files</h3>
        <div class="g-2 "  >
            <form action="backend/file_control.php" method="POST">
                <div class="mb-1">
                  <label for="addNic" class="form-label">NIC Number</label>
                  <input type="text" class="form-control" id="addNic" name="unic" >
                  
                </div>

                <div class="mb-1">
                    <label for="addfname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="addfname" name="uFname" >
                    
                  </div>

                  <div class="mb-1">
                    <label for="addlname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="addlname" name="uLname">
                    
                  </div>

                  <div class="mb-1">
                    <label for="addid" class="form-label">Empoyee ID</label>
                    <input type="text" class="form-control" id="addid" name="uEmpid">
                    
                  </div>
                 
                  <div class="mb-1">
                    <label for="addAdate" class="form-label">Appointed Date</label>
                    <input type="text" class="form-control" id="addAdate" name="appointDate" >
                    
                  </div>

                  <div class="mb-1">
                    <label for="adddob" class="form-label">Date Of Birth</label>
                    <input type="text" class="form-control" id="adddob" name="DOB" >
                    
                  </div>

                  

                  
                  
                  <label for="adddep" class="form-label">Select Department</label>
                  <select class="form-select mb-1" aria-label="Default select example" id="adddep" name="uDep">
                    <option selected> ID</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Three</option>
                  </select>
                  <br>
  
                   <div class="d-flex justify-content-center align-item-center g-1">  
                   <button type="submit" class="btn btn-primary g-1" name="fileSubmit" >Submit</button> 

                   </div>
                
                
              </form>
              <?php
             if(isset($_GET['success'])){
              echo "added";
             }
             
             ?>
        </div>
    
    
    </div>


    <div class="col-sm-6 g-2"  >
    

      <div class="p-5 text-center d-flex gap-2 " style="background-color: rgba(224, 224, 224, 0.94); ">
        <div class=" mx-5 fw-bold fs-5" > Employee History</div>
        <div class="ms-auto text-end">  
           <form class="d-flex" method="post" action="backend/search.php">

               <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="searchId">
               <button class="btn btn-primary" name='fileSearch' type="submit">Search</button>
             </form>
             
        </div>
        </div>
        
        <div class="d-grid p-4 text-center gap-3 "  style="background-color: rgba(224, 224, 224, 0.94); ">
          <div>   
            <table class="table">
                    
              <tbody>
                <tr>
                  <th scope="row" class="table-light"> Full Name </th>
                  <td> <?php echo $_SESSION['fnames'] ; echo " "; echo $_SESSION['lnames'] ; ?></td>
                   
                </tr>
                <tr>
                  <th scope="row" class="table-light">Employee ID</th>
                  <td>
                  <?php echo $_SESSION['empids'] ; ?>
                  </td>
                  
                </tr>
                <tr>
                  <th scope="row" class="table-light">Appointed Date</th>
                  
                  <td> <?php echo $_SESSION['appointdates'] ; ?> </td>
                </tr>
                <tr>
                  <th scope="row" class="table-light"> Salary Index</th>
                  <td>Jacob</td>
                  
                </tr>
                <tr>
                  <th scope="row" class="table-light"> Date Of Birth </th>
                  <td> <?php echo $_SESSION['dobs'] ; ?></td>
                  
                </tr>

                 

                <tr>
                  <th scope="row" class="table-light"> Contact Number</th>
                  <td>Jacob</td>
                  
                </tr>

                <tr>
                  <th scope="row" class="table-light"> NIC</th>
                  <td>
                  <?php echo $_SESSION['unics'] ; ?>
                </td>
                  
                </tr>

                 <tr>
                  <th scope="row" class="table-light"> Department</th>
                  <td>
                  <?php echo $_SESSION['depname'] ; ?>
                  </td>
                  
                </tr>
                </tbody>
                </table>

                <div class="d-flex gap-2 mt-1 p-3 justify-content-center align-item-center "> 
                  <button class="btn btn-success">Update</button>

                  <button class="btn btn-danger ms-5"> Delete</button>
                </div>

            </div>

            <div >
              
              <div class=" mx-5 fw-bold fs-5" > Files</div>

              <div class=" p-4 "> 
                <form class=" "> 

                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" value="">
                  <label class="form-check-label" for="flexSwitchCheckDefault">ID Copy</label>
                </div>

                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                  <label class="form-check-label" for="flexSwitchCheckDefault">Exam Certificates</label>
                  
                </div>
               
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                  <label class="form-check-label" for="flexSwitchCheckDefault">Promotion Letter </label>
                  </div>

                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Designation Letter</label>
                    </div>

                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                      <label class="form-check-label" for="flexSwitchCheckDefault">Office Change</label>
                    </div>
                  <div class="p-3"> 

                    <input type="checkbox" class="btn-check" id="btn-check-2" checked autocomplete="off">
                    <label class="btn btn-primary" for="btn-check-2">Checked</label>
                  </div>
                </form>

              </div>              
            </div>

            </div>
             
       
           
    </div>
         
   
    </div>


     </div>

         

   </div>






      <div class="container-fluid ">
        <div class="row">
          <div class="col gy-5 ">
            <div class="footer p-5 fw-bold">
                
              <div class=""></div>
              <div> Zonal Education Office <br> Mulatiyana</div>  <br>


              <div class="footernav"> <a href="adminDash.php">  Home </a> <br>
              <a href="files.php">  Files </a> <br>
              <a href="leavemanage.php">  Leaves </a> <br>
              <a href="Notice.php">  Notice </a>
            
            </div>

              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                </svg>  011 234 4556 
              </div> <br>


              <div> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
              </svg>  No 3, Main Road Mulatiyana</div> <br>



              <div> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
              </svg> mul@edup.wp.gov.lk</div>

           
            
            </div>
          </div>
        </div>

      </div>


    </body>
    </html>