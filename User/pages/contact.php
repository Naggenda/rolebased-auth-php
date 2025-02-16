<?php

include "./navigation.php";

?>

<html lang="en">

<body>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-2">
      <form action="#" method="post" class="row g-3 p-5">
        <div class="col-md-6">
          <label for="inputState" class="form-label">Select Who to Contact</label>
          <select id="inputState" name="maritalstatus" class="form-select">
            <option selected>Choose...</option>
            <option>Notify Secretary</option>
            <option>Contact Pastors</option>
          </select>
        </div>
        <div class="col-6">
          <label for="inputAddress2" class="form-label">Enter Reason</label>
          <div class="input-group input-group-outline">
            <input type="text" name="dob" class="form-control input" id="inputPassword4" name="reson">
          </div>
        </div>
        <div class="col-md-12 form-group">
          <label for="inputCity" class="form-label">Enter Message</label>
          <div class="input-group input-group-outline">
            <textarea type="text" name="message" class="form-control" id="message"></textarea>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Add Member</button>
        </div>
      </form>
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