<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">\
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<title>Zonal Education Office Notice</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="header-container">
      <div class="left-side">
        <img src="images/logo.png" width="100px" height="100px">
        <p class="para"><b>Zonal Education Office <br><span class="mulatiyana">Mulatiyana</span></b></p>
        <h1>Notice</h1>
      </div>
      <div class="right-side">
        <ul>
          <li><a href="adminDash.php">Home</a></li>
          <li><a href="files.php">Files</a></li>
          <li><a href="leavemanage.php">Leaves</a></li>
          <li><a href="Notice.php">Notice</a></li>
          <form action="backend/adminLogout.php" method="POST">

              <button class="btn btn-primary " type="submit" name="adminout"> logout</button>

             </form>
        </ul>
      </div>
    </div>
  </header>
<main>
    <center><h2>Notice</h2>
    <div class="main-container">
    <form action="/submit_notice" method="post">
      <div class="form-group">
        <label for="end-date">End Date:</label>
        <input type="date" id="end-date" name="end-date">
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message"></textarea>
      </div>
      <div class="submit">
        <button type="submit">Send</button>
      </div>
    </form>
  </div></center>
</main>
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
                <li><a href="#">Manage Files</a></li>
                <li><a href="#">Leaves</a></li>
                <li><a href="#">Notices</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; Copyright(2024) DataDreamers</p>
    </div>
</footer>
</body>
</html>