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
    $sql = "INSERT INTO member (id, fullname, address, gender, contact, dob, maritalstatus, email, career, nextofkinname, nextofkincontact, date, formerchurch, formerpastor) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?);";

    if ($stmt = mysqli_prepare($con, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, 'ssssssssssssss', $id, $fullname, $address, $gender, $contact, $dob, $maritalstatus, $email, $career, $nextofkincontact, $nextofkincontact, $date, $formerchurch, $formerpastor);

        $id = $_POST['id'];
        $fullname = $_POST['fullname'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $contact = $_POST['contact'];
        $dob = $_POST['dob'];
        $maritalstatus = $_POST['maritalstatus'];
        $email = $_POST['email'];
        $career = $_POST['career'];
        $nextofkinname = $_POST['nextofkinname'];
        $nextofkincontact = $_POST['nextofkincontact'];
        $date = $_POST['date'];
        $formerpastor = $_POST['formerpastor'];
        $formerchurch = $_POST['formerchurch'];

        if (mysqli_stmt_execute($stmt)) {
            // Records created successfully. Redirect to landing page
            echo "success";
            exit();
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
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex">
                            <h6 class="text-white text-capitalize ps-3">New Member</h6>
                        </div>
                    </div>
                    <form action="new.php" method="post" class="row g-3 p-5">
                        <h6>Personal Details</h6>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Member Name</label>
                            <div class="input-group input-group-outline">
                                <input type="text" name="fullname" class="form-control input" id="inputPassword4">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Contact</label>
                            <div class="input-group input-group-outline">
                                <input type="tel" name="contact" class="form-control input" id="inputPassword4">
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="inputAddress" class="form-label">Address</label>
                            <div class="input-group input-group-outline">
                                <input type="text" name="address" class="form-control input" id="inputPassword4">
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="inputAddress2" class="form-label">Date Of Birth</label>
                            <div class="input-group input-group-outline">
                                <input type="date" name="dob" class="form-control input" id="inputPassword4" name="dob">
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="inputCity" class="form-label">Email</label>
                            <div class="input-group input-group-outline">
                                <input type="email" name="email" class="form-control input" id="inputPassword4">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label for="inputState" class="form-label">Gender</label>
                            <select id="inputState" name="gender" class="form-select">
                                <option selected>Choose...</option>
                                <option>M</option>
                                <option>F</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Marital Status</label>
                            <select id="inputState" name="maritalstatus" class="form-select">
                                <option selected>Choose...</option>
                                <option>Single</option>
                                <option>Married</option>
                                <option>Single Parent</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="inputCity" class="form-label">Career</label>
                            <div class="input-group input-group-outline">
                                <input type="text" name="career" class="form-control input" id="inputPassword4">
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="inputCity" class="form-label">Date Of Joining</label>
                            <div class="input-group input-group-outline">
                                <input type="date" name="date" class="form-control input" id="inputPassword4">
                            </div>
                        </div>
                        <h6>Next Of Kin</h6>
                        <div class="col-md-6 form-group">
                            <label for="inputCity" class="form-label">Name</label>
                            <div class="input-group input-group-outline">
                                <input type="text" name="nextofkinname" class="form-control input" id="inputPassword4">
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="inputCity" class="form-label">Contact</label>
                            <div class="input-group input-group-outline">
                                <input type="tel" name="nextofkincontact" class="form-control input" id="inputPassword4">
                            </div>
                        </div>
                        <h6>Former Church Details</h6>
                        <div class="col-md-6 form-group">
                            <label for="inputCity" class="form-label">Church Name</label>
                            <div class="input-group input-group-outline">
                                <input type="text" name="formerchurch" class="form-control input" id="inputPassword4">
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="inputCity" class="form-label">Pastors Name</label>
                            <div class="input-group input-group-outline">
                                <input type="text" name="formerpastor" class="form-control input" id="inputPassword4">
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
</body>

</html>