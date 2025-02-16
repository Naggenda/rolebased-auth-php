<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'Joshua2@3';
$DATABASE_NAME = 'contentmgt';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$id = $fullname = $department = $gender = $contact = $age = $profession = $email = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $sql = "INSERT INTO minister (id, fullname, department, gender, contact, age, profession, email) VALUES (?,?,?,?,?,?,?,?);";

    if ($stmt = mysqli_prepare($con, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, 'ssssssss', $id, $fullname, $department, $gender, $contact, $age, $profession, $email);

        $id = $_POST['id'];
        $fullname = $_POST['fullname'];
        $department = $_POST['department'];
        $gender = $_POST['gender'];
        $contact = $_POST['contact'];
        $age = $_POST['age'];
        $profession = $_POST['profession'];
        $email = $_POST['email'];

        if (mysqli_stmt_execute($stmt)) {
            // Records created successfully. Redirect to landing page
            header('Location: ministers.php');
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
                            <h6 class="text-white text-capitalize ps-3">New Minister</h6>
                        </div>
                    </div>
                    <form action="newminister.php" method="post" class="row g-3 p-5">
                        <h6>Personal Details</h6>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Full Name</label>
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
                            <label for="inputAddress2" class="form-label">Department</label>
                            <div class="input-group input-group-outline">
                                <input type="text" name="department" class="form-control input" id="inputPassword4"
                                    name="dob">
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="inputCity" class="form-label">Email</label>
                            <div class="input-group input-group-outline">
                                <input type="email" name="email" class="form-control input" id="inputPassword4">
                            </div>
                        </div>



                        <div class="col-md-6 form-group">
                            <label for="inputCity" class="form-label">Career</label>
                            <div class="input-group input-group-outline">
                                <input type="text" name="profession" class="form-control input" id="inputPassword4">
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="inputCity" class="form-label">Age</label>
                            <div class="input-group input-group-outline">
                                <input type="text" name="age" class="form-control input" id="inputPassword4">
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
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Add Minister</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>