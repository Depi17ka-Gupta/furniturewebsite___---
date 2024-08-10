<?php
include('header1.php');
?>
<!-- sign-up-section -->
<div class="container-fluid sign-up-section d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-2 fs-2 fw-bold">
                
                    Sign
                
            </div>
            <div class="col-auto">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0 m-0">
                        <li class="breadcrumb-item"><a href="javascript"><i class="fa fa-home text-black"
                                    aria-hidden="true"></i></a></li>
                        <li class="breadcrumb-item active fw-bold" aria-current="page">Sign in</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- login-form-section -->
<div class="container-fluid login-form-section">
    <div class="container">
        <div class="row justify-content-around align-items-center">
            <div class="col-lg-6">
                <div>
                    <img src="img/login-image.jpg" class="img-fluid" alt="img">
                </div>
            </div>
            <div class="col-lg-5 py-5 login-form">
                <div class="row border p-5 w-100 login-infor">

                    <div class="col-lg-12 fs-5 fw-bold">
                        Welcome To Rubix
                    </div>
                    <div class="col-lg-12 fs-5 pb-3">Create New Account</div>
                    <div class="col-lg-12 mb-3">

                        <input type="email" class="form-control p-2" id="exampleFormControlInput1"
                            placeholder="Full Name">
                    </div>
                    <div class="col-lg-12 mb-3">

                        <input type="email" class="form-control p-2" id="exampleFormControlInput1"
                            placeholder="Email Address">
                    </div>
                    <div class="col-lg-12 mb-3">

                        <input type="email" class="form-control p-2" id="exampleFormControlInput1"
                            placeholder="Password">
                    </div>
                    <div class="col-lg-12 ">
                        <input type="checkbox">
                        <span>I agree with Terms and Privacy</span>
                    </div>
                    <div class="col-lg-12 py-3">
                        <a href="javascript" class="w-100 p-2 btn text-white fw-bold">Sign Up</a>
                    </div>


                    <div class="col-lg-12 border-bottom py-py-xxl-lg-2">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="javascript" class="w-100 p-2 btn text-black fw-bold bg-white"><i
                                        class="fa fa-google text-warning me-1" aria-hidden="true"></i>Sign up with
                                    Google</a>
                            </div>
                            <div class="col-lg-6">
                                <a href="javascript" class="w-100 p-2 btn text-black fw-bold bg-white"><i
                                        class="fa fa-facebook text-primary me-1" aria-hidden="true"></i>Sign up with
                                    Facebook</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center pt-4 fs-6">
                        Already have an account?
                    </div>
                    <div class="col-lg-12 text-center text-warning fs-6">
                        Log In
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>