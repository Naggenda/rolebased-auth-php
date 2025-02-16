<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'Joshua2@3';
$DATABASE_NAME = 'contentmgt';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
  exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$query = "SELECT * 
  FROM attendance WHERE date = DATE(NOW());";
$result = mysqli_query($con, $query);
include "./navigation.php";

?>

<html lang="en">

<body>
  <div class="container-fluid py-2">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-space-between">
              <h6 class="text-white text-capitalize ps-3">Attendance</h6>
              <a class="text-white text-capitalize ps-3" href="addattendance.php">Add</a>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Full Name</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tel Number</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                      Residence
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gender
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action
                    </th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                      <td>
                        <?php echo $row['fullname']; ?>
                      </td>
                      <td>
                        <?php echo $row['telnumber']; ?>
                      </td>
                      <td>
                        <?php echo $row['residence']; ?>
                      </td>
                      <td>
                        <?php echo $row['date']; ?>
                      </td>
                      <td>
                        <?php echo $row['gender']; ?>
                      </td>
                      <td>
                        <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;">
                          <img style="width: 20px;" src="../../assets/view.png" alt="">
                          
                        </a>
                        <a class="btn btn-link text-dark px-3 mb-0" href="editatt.php?id=<?php echo $row["id"]; ?>">
                          <i class="material-symbols-rounded text-sm me-2">edit</i>
                        </a>
                        <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="delatt.php?delete=<?php echo $row['id'];?>"><i
                            class="material-symbols-rounded text-sm me-2">delete</i>
                        </a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </main>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.2.0"></script>
</body>

</html>