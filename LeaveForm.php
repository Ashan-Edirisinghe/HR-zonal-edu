<?php include 'demo.php'?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Leave Form</title>
     <link rel="stylesheet" href="headfoot.css">
     <link rel="stylesheet" href="stylel.css">
   
</head>
<body>


    <div class="container">
        <div class=" row">
            <div class="col-sm g-2"> 
            <div style="background-color:rgba(224, 224, 224, 0.94);" class="p-5 leave-form"> 
            <h2>Leave Form</h2>

            <form id="leaveForm"  method="POST" action="backend/leaveformcon.php" clss="">
                <label for="type">Type</label>
                <select id="type" name="type">
                    <option value="vacation">Vacation</option>
                    <option value="casual">Casual</option>
                    <option value="other">Other</option>
                </select>

                <label for="startDate">Start Date</label>
                <input type="date" id="startDate" name="startDate" required>

                <label for="endDate">End Date</label>
                <input type="date" id="endDate" name="endDate" required>

                <label for="reason">Reason</label>
                <textarea id="reason" name="reason" rows="4" required></textarea>

                <center><button type="submit" name="leaveform">Submit</button></center>
                 
            </form>
            
              
            </div>
            </div>
        </div>


        
        <div class="leave-count row">
            <div class="col-sm-6 g-2" style="background-color:rgba(224, 224, 224, 0.94);width:100vw"> 
               
                 <table  class="table">
                <tr>
                    <th>Type</th>
                    <th>Remaining Count</th>
                 </tr>
                 <tr>
                    <td>Vacation</td>
                    <td style="color: red;">4</td>
                 </tr>
                 <tr>
                    <td>Casual</td>
                    <td style="color: red;">14</td>
                 </tr>
                 <tr>
                    <td>Other</td>
                    <td style="color: red;">6</td>
                 </tr>

                   </table>
                 
             </div>
        </div>


    </div>





   
    <div class="container-fluid ">
        <div class="row">
          <div class="col gy-5 ">
            <div class="footer p-5 fw-bold">
                
              <div class=""></div>
              <div> Zonal Education Office <br> Mulatiyana</div>  <br>


              <div class="footernav"> <a href="UserDashboard.php">  Home </a> <br>
               
               <a href="LeaveForm.php">  Leaves </a> <br>
               <a href="noticepage.php">  Notice </a>
 
            
            
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