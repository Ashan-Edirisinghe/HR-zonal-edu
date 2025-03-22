<?php include 'demo.php'?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Leave Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     
 



    <div class="container">
        <div class="leave-form row">
            <div class="col-sm g-2"> 
            <div style="background-color:rgba(224, 224, 224, 0.94);" class="p-5"> 
            <h2>Leave Form</h2>

            <form id="leaveForm"  method="POST" action="backend/leaveformcon.php">
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
            <div class="col-sm g-2"> 
                <div style="background-color:rgba(224, 224, 224, 0.94);" class="p-5"> 
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
    </div>





    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <p>Zonal Education Office<br>Mulatiyana</p>
                <p>
                    <i class='bx bx-phone'></i>   011 234 6558<br>
                    <i class='bx bx-map' ></i>   No 3, main road, mulatiyana<br>
                    <i class='bx bx-envelope' ></i>   mul@eduplt.wp.gov.lk
                </p>
            </div>
            <div class="footer-right">
                <ul>
                    <li><a href="#">Dashboard</a></li>
                 
                    <li><a href="#">Leave Form</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; Copyright(2024) DataDreamers</p>
        </div>
    </footer>
</body>
</html>