<?php

include './header.php';
// include './connection.php';

?>

<body>

    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="./Admin/assets/img/logo.png" class="img-fluid" alt="Sideview image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form name="f1" action="auth.php" onsubmit="return validation()" method="post">
                        <div class="d-flex flex-row align-items-center justify-content-center">
                            <p class="lead fw-normal mb-0 me-3 pb-3">Sign in</p>
                        </div>

                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4 d-flex flex-column-reverse">
                            <input type="email" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" id ="user" name  = "user"  />
                            <label class="form-label" for="user">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-3 d-flex flex-column-reverse">
                            <input type="password" class="form-control form-control-lg"
                                placeholder="Enter password" id ="pass" name  = "pass" />
                            <label class="form-label" for="pass">Password</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <input type="submit" value="Login">
                            <!-- <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button> -->
                            <!-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                                    class="link-danger">Register</a></p> -->
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>


    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("Email cannot be empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field can't be empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>

</html>