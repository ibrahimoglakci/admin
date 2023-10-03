<?php
include_once("back-end/init.php");

?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="sm-hover"
    data-sidebar-image="none" data-preloader="enable">

<?php include_once(DATA . "head.php"); ?>


<!-- Mirrored from themesbrand.com/velzon/html/modern/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Feb 2023 22:16:09 GMT -->


<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
    


        <?php include_once(DATA . "header.php"); ?>

        <?php include_once(DATA . "modal-notification.php"); ?>

        <!-- ========== App Menu ========== -->
        <?php include_once(DATA . "menu.php"); ?>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">



            <?php
            if ($_GET && !empty($_GET["page"])) {
                $page = $_GET["page"] . ".php";
                if (file_exists(PAGE . $page)) {
                    include_once(PAGE . $page);

                } else {
                    include_once(PAGE . "main.php");

                }
            } else {
                include_once(PAGE . "main.php");

            }

            ?>




            <?php include_once(DATA . "footer.php"); ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <?php include_once(DATA . "backtotop.php"); ?>

    <!--end back-to-top-->

    <!--preloader-->
    <?php include_once(DATA . "backtotop.php"); ?>


    <?php include_once(DATA . "theme-settings.php"); ?>


    <!-- JAVASCRIPT -->
    <?php include_once(DATA . "linkscripts.php"); ?>


    
</body>


</html>