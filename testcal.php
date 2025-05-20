<?php  
 $departments = array("Administration", "Accounts", "Development", "Planing" );
  $present = array(20, 15, 30, 25, 10); // Example data for present employees
  $absent = array(5, 10, 2, 8, 3); // Example data for absent employees
  ?>
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
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Include Chart.js -->


   



</head>


<body>  


<div class="col-sm-12 g-2 w-5>
          <div class=" p-5 d-grid gap-2 text-center" style="background-color: rgba(215, 208, 208, 0.94)">
 
          <canvas id="attendanceChart" width="100" height="50" class=""></canvas>

          </div>

           

          
    </div>
    <script>
        // Get data from PHP
        const departments = <?php echo json_encode($departments); ?>;
        const present = <?php echo json_encode($present); ?>;
        const absent = <?php echo json_encode($absent); ?>;

        // Create the chart
        const ctx = document.getElementById('attendanceChart').getContext('2d');
        const attendanceChart = new Chart(ctx, {
            type: 'bar', // Bar chart
            data: {
                labels: departments, // X-axis labels (departments)
                datasets: [
                    {
                        label: 'Present',
                        data: present,
                        backgroundColor: 'rgba(75, 192, 192, 0.6)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Absent',
                        data: absent,
                        backgroundColor: 'rgba(255, 99, 132, 0.6)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Attendance by Department'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    </body>
    </html>