<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Leave Form</title>
    <link rel="stylesheet" href="stylel.css">
</head>
<body>
    <header>
        <div class="header-container">
          <div class="left-side">
            <img src="images/logo.png" width="100px" height="100px">
            <p class="para"><b>Zonal Education Office <br><span class="mulatiyana">Mulatiyana</span></b></p>
            <h1>Leave Form</h1>
          </div>
          <div class="right-side">
            <ul> 
              <li><a href="UserDashboard.php">Dashboard</a></li>
              <li><a href="LeaveForm.php">Leave form</a></li>
              <form action="backend/adminLogout.php" method="POST">

<button class="btn btn-primary " type="submit" name="adminout"> logout</button>

</form>
            </ul>
          </div>
        </div>
      </header>
    <div class="container">
        <div class="leave-form">
            <h2>Leave Form</h2>
            <form id="leaveForm"  method="post" action="">
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
                <center><button type="submit" name="leavesubmit">Submit</button></center>
            </form>
        </div>
        <div class="leave-count">
            <table >
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