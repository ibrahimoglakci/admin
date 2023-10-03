<?php
@session_start();
ob_start();
if (!empty($_SESSION["ID"])) {
    header("http://localhost/admin/");
}


include_once("../../../back-end/class/up.php");
include_once("../../../back-end/class/DB.php");
include_once("../../../back-end/class/Users.php");
include_once("../../../back-end/actions/security.php");

    $langdata = file_get_contents('../../../back-end/lang/lang_en.json');
    $langdata = json_decode($langdata);
    setcookie("lang","en");
   

$settings = DB::table("settings")->where("ID", 1)->first();

define("ADMIN", $settings->adminUrl);


?>


<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/modern/auth-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Feb 2023 22:19:02 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Sign In | Amazort</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="front-end/assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="front-end/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="front-end/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="front-end/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="front-end/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="front-end/assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- Sweet Alert css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">


</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>
        <?php
        if (empty($_COOKIE["u_t"])) {

        ?>
            <!-- auth page content -->
            <div class="auth-page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                        </div>
                    </div>
                    <!-- end row -->
                    <?php include_once("../../../back-end/class/CSRF.php");
                    ?>

                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card mt-4">

                                <div class="card-body p-4">
                                    <div class="text-center mt-2">
                                        <h5 class="text-primary wel"><?= $langdata->welcome ?> !</h5>
                                        <p class="text-muted"><?= $langdata->sign_in_panel ?></p>
                                    </div>
                                    <div class="p-2 mt-4">
                                        <form id="login-form">
                                            <?php CSRF::csrf(); ?>
                                            <div class="mb-3">
                                                <label for="username" class="form-label"><?= $langdata->user_or_email ?></label>
                                                <input type="text" class="form-control" id="username" name="username" placeholder="example@example.com">
                                            </div>

                                            <div class="mb-3">
                                                <div class="float-end">
                                                    <a href="<?=ADMIN?>forgot-password" class="text-muted"><?= $langdata->forgot_password ?></a>
                                                </div>
                                                <label class="form-label" for="password-input"><?= $langdata->password ?></label>
                                                <div class="position-relative auth-pass-inputgroup mb-3">
                                                    <input type="password" class="form-control pe-5 password-input" placeholder="********" name="password" id="password-input">
                                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                </div>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="auth-remember-check">
                                                <label class="form-check-label" for="auth-remember-check"><?= $langdata->remember_me ?></label>
                                            </div>

                                            <div class="mt-4">
                                                <button class="btn btn-warning w-100 btn-load" type="submit" id="login-submit"><?= $langdata->sign_in ?></button>
                                            </div>
                                            <div class="error">

                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->


                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end auth page content -->



        <?php

        } else {
            $user = Users::getUser($_COOKIE["u_t"]);

        ?>

            <!-- auth page content -->
            <div class="auth-page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card mt-4">

                                <div class="card-body p-4">
                                    <div class="text-center mt-2">
                                        <h5 class="text-primary"><?= $langdata->welcome ?></h5>
                                        <p class="text-muted"><?= $langdata->enter_your_password_lock_screen ?></p>
                                    </div>
                                    <div class="user-thumb text-center">
                                        <img src="front-end/assets/images/users/<?= $user->userImage ?>" class="rounded-circle img-thumbnail avatar-lg" alt="thumbnail">
                                        <h5 class="font-size-15 mt-3"><?= $user->fullName ?></h5>
                                    </div>
                                    <div class="p-2 mt-4">
                                        <form id="lock-screen-form" onsubmit="submitLockForm()">
                                            <div class="mb-3">
                                                <label class="form-label" for="userpassword"><?= $langdata->password ?></label>
                                                <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password" required>
                                            </div>
                                            <div class="mb-2 mt-4">
                                                <button class="btn btn-success w-100" type="submit" id="lock-submit"><?= $langdata->unlock ?></button>
                                            </div>
                                            <div class="mb-2 mt-4">
                                                <button class="btn btn-danger w-100" type="button" onclick="signOut();"><?= $langdata->sign_out ?></button>
                                            </div>

                                            <script>
                                                function signOut() {
                                                    const Toast = Swal.mixin({
                                                        toast: true,
                                                        position: 'top-end',
                                                        showConfirmButton: false,
                                                        timer: 2000,
                                                        timerProgressBar: true,
                                                        didOpen: (toast) => {
                                                            toast.addEventListener('mouseenter', Swal.stopTimer)
                                                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                                                        }
                                                    })

                                                    Swal.fire({
                                                        title: '<?= $langdata->are_you_sure ?>',
                                                        text: "<?= $langdata->logout_warning_message ?>",
                                                        icon: 'warning',
                                                        showCancelButton: true,
                                                        confirmButtonColor: '#3085d6',
                                                        cancelButtonColor: '#d33',
                                                        confirmButtonText: '<?= $langdata->yes ?>'
                                                    }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            $.ajax({
                                                                url: "front-end/auth/back-end/signout.php",
                                                                type: "POST",
                                                                success: function(response) {
                                                                    Toast.fire({
                                                                        icon: 'success',
                                                                        title: '<?= $langdata->success_signout ?>'
                                                                    })
                                                                    setTimeout(function() { //Burayı Düzenle
                                                                        window.location.href = "/admin/login";

                                                                    }, 2000);
                                                                },
                                                                error: function() {
                                                                    Toast.fire({
                                                                        icon: 'error',
                                                                        title: 'Bilinmeyen bir hata ile karşılaşıldı'
                                                                    })
                                                                }
                                                            });
                                                        }
                                                    })

                                                }
                                            </script>
                                        </form><!-- end form -->

                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->


                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end auth page content -->
        <?php } ?>

        <!-- footer -->
        <footer class="footer start-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->


    <!-- JAVASCRIPT -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="front-end/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>
    <script src="front-end/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="front-end/assets/libs/node-waves/waves.min.js"></script>
    <script src="front-end/assets/libs/feather-icons/feather.min.js"></script>
    <script src="front-end/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="front-end/assets/js/plugins.js"></script>
    <script src="front-end/auth/back-end/ajax.js"></script>

    <!-- particles js -->
    <script src="front-end/assets/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="front-end/assets/js/pages/particles.app.js"></script>
    <!-- password-addon init -->
    <script src="front-end/assets/js/pages/password-addon.init.js"></script>
    <!-- Sweet Alerts js -->
   

    <!-- Sweet alert init js-->
    <script src="front-end/assets/js/pages/sweetalerts.init.js"></script>
    
    <script>
        $(document).ready(function(e) {
            localStorage.setItem('lang', 'en');

        })
    </script>
  

</body>


<!-- Mirrored from themesbrand.com/velzon/html/modern/auth-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Feb 2023 22:19:02 GMT -->

</html>