<?php

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
                    <form class="row g-3 p-5">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <div class="input-group input-group-outline">
                                <input type="email" class="form-control input" id="inputPassword4">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <div class="input-group input-group-outline">
                                <input type="password" class="form-control input" id="inputPassword4">
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <div class="input-group input-group-outline">
                                <input type="text" class="form-control input" id="inputPassword4">
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Address 2</label>
                            <div class="input-group input-group-outline">
                                <input type="text" class="form-control input" id="inputPassword4">
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="inputCity" class="form-label">City</label>
                            <div class="input-group input-group-outline">
                                <input type="text" class="form-control input" id="inputPassword4">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
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