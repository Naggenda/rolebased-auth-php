<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'Joshua2@3';
$DATABASE_NAME = 'contentmgt';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$id = $fullname = $address = $gender = $contact = $dob = $maritalstatus = $email = $career = $nextofkinname = $nextofkincontact = $date = $formerchurch = $formerpastor = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $sql = "INSERT INTO prayreq (id, fullname, message, contact) VALUES (?,?,?,?);";

    if ($stmt = mysqli_prepare($con, $sql)) {

      $id = $_POST['id'];
        $fullname = $_POST['fullname'];
        $message = $_POST['message'];
        $contact = $_POST['contact'];
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, 'ssss', $id, $fullname, $message, $contact);
        
        if (mysqli_stmt_execute($stmt)) {
            // Records created successfully. Redirect to landing page
            header('Location: prayreq.php');
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    // Close statement
    mysqli_stmt_close($stmt);


    // Close connection
    mysqli_close($link);

}

include "./navigation.php";

?>

<html lang="en">

<body>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-2">
      <div class="row">
        <div class="col-lg-12 col-md-12 mx-auto">
          <div class="card mt-4">
            <div class="card-header p-3">
              <h5 class="mb-0">Add Prayer Requests</h5>
            </div>
            <form action="prayreq.php" method="post" class="row g-3 p-5">
              <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Member Name</label>
                <div class="input-group input-group-outline">
                  <input type="text" name="fullname" class="form-control input" id="inputPassword4">
                </div>
              </div>
              <div class="col-6">
                <label for="inputAddress" class="form-label">Contact</label>
                <div class="input-group input-group-outline">
                  <input type="tel" name="contact" class="form-control input" id="inputPassword4">
                </div>
              </div>
              <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Message</label>
                <div class="input-group input-group-outline">
                  <input type="text" name="message" class="form-control input" id="inputPassword4">
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Add Member</button>
              </div>
            </form>
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