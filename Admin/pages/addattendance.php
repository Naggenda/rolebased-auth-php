<?php

include 'navigation.php'

    ?>

<html lang="en">

<body>
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex">
                            <h6 class="text-white text-capitalize ps-3">Church Attendance</h6>
                        </div>
                    </div>
                    <form action="insert.php" method="post" class="row g-3 p-5">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Full Name</label>
                            <div class="input-group input-group-outline">
                                <input type="text" name="fullname" class="form-control input" id="inputPassword4">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Contact</label>
                            <div class="input-group input-group-outline">
                                <input type="tel" name="telnumber" class="form-control input" id="inputPassword4">
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="inputAddress" class="form-label">Address</label>
                            <div class="input-group input-group-outline">
                                <input type="text" name="residence" class="form-control input" id="inputPassword4">
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
                        <div class="col-md-6 form-group">
                            <label for="inputCity" class="form-label">Date</label>
                            <div class="input-group input-group-outline">
                                <input type="date" name="date" class="form-control input" id="inputPassword4">
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Add Member</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>