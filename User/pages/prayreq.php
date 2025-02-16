<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'Joshua2@3';
$DATABASE_NAME = 'contentmgt';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
  exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$query = "SELECT * FROM `prayreq`;";
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
            <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex">
              <h6 class="col-4 text-white text-capitalize ps-3">Prayer Requests Listing</h6>
              <div class="col-4">
                <form action="#" method="post" class="d-flex align-items-center">
                  <div class="input-group input-group-outline col-8">
                    <input type="text" name="address" class="form-control input" id="inputPassword4">
                  </div>
                  <button class="btn btn-primary col-4">Search</button>
                </form>
              </div>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Full Name</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Contact</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Message
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action
                    </th>

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
                        <?php echo $row['contact']; ?>
                      </td>
                      <td>
                        <?php echo $row['message'];
                        "<br/>" ?>
                      </td>
                      <td>
                        <button class="btn btn-success">Edit</button>
                        <button class="btn btn-secondary" >View</button>
                        <button class="btn btn-danger" >Delete</button>
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