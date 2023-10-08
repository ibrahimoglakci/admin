<title><?= $langdata->logo_settings ?> | <?=$webTitle?></title>
<?php
$value = DB::table("settings")->where("ID", 1)->first();
if ($value) {
    ?>

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">
                            <?= $langdata->logo_settings ?>
                        </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">
                                        <?= $langdata->system_settings ?>
                                    </a></li>
                                <li class="breadcrumb-item active">
                                    <?= $langdata->logo_settings ?>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row mt-2">
                <div class="col-lg-12">


                    <div class="row">

                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="card previewContainer" style="background-color: #212529;">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0"><?= $langdata->logo_dark ?></h4>
                                        </div>
                                        <img class="card-img-top img-fluid"
                                            src="<?= IMG ?>logo/<?= $value->websiteLogo_dark_wm ?>" alt="" id="wm-dark"
                                            style="width: 483px;height: 210px;object-fit: contain;">
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-warning btn-label" type="button"
                                                onclick="downloadImage('<?= ADMIN . IMG ?>','<?= $value->websiteLogo_dark_wm ?>');"><i
                                                    class="fa-solid fa-cloud-arrow-down"></i>
                                                <?= $langdata->download_button ?>
                                            </button>
                                        </div>
                                    </div><!-- end card -->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="card previewContainer" style="background-color: #fff;">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0"><?= $langdata->logo_light ?></h4>
                                        </div>
                                        <img class="card-img-top img-fluid"
                                            src="<?= IMG ?>logo/<?= $value->websiteLogo_light_wm ?>" alt="" id="wm-light"
                                            style="width: 483px;height: 210px;object-fit: contain;">
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-warning btn-label" type="button"
                                                onclick="downloadImage('<?= ADMIN . IMG ?>','<?= $value->websiteLogo_light_wm ?>');"><i
                                                    class="fa-solid fa-cloud-arrow-down"></i>
                                                <?= $langdata->download_button ?>
                                            </button>
                                        </div>
                                    </div><!-- end card -->
                                </div>
                            </div>
                            <div class="row">


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="card previewContainer" style="background-color: #212529;">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0"><?= $langdata->logo_dark_sm ?></h4>
                                        </div>
                                        <img class="card-img-top img-fluid"
                                            src="<?= IMG ?>logo/<?= $value->websiteLogo_dark_sm ?>" alt="" id="sm-dark"
                                            style="width: 483px;height: 210px;object-fit: contain;">
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-warning btn-label" type="button"
                                                onclick="downloadImage('<?= ADMIN . IMG ?>','<?= $value->websiteLogo_dark_sm ?>');"><i
                                                    class="fa-solid fa-cloud-arrow-down"></i>
                                                <?= $langdata->download_button ?>
                                            </button>
                                        </div>
                                    </div><!-- end card -->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="card previewContainer" style="background-color: #fff;">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0"><?= $langdata->logo_light_sm ?></h4>
                                        </div>
                                        <img class="card-img-top img-fluid"
                                            src="<?= IMG ?>logo/<?= $value->websiteLogo_light_sm ?>" alt="" id="sm-light"
                                            style="width: 483px;height: 210px;object-fit: contain;">
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-warning btn-label" type="button"
                                                onclick="downloadImage('<?= ADMIN . IMG ?>','<?= $value->websiteLogo_light_sm ?>');"><i
                                                    class="fa-solid fa-cloud-arrow-down"></i>
                                                <?= $langdata->download_button ?>
                                            </button>
                                        </div>
                                    </div><!-- end card -->
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0"><?= $langdata->logo ?></h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="text-center prev-rounded">
                                    </div>
                                    <form id="logo-form" onsubmit="formSubmit('logo-form','#logo_submit','logo_settings')">
                                        <label for="logoInput" class="drop-container">
                                            <span class="drop-title">
                                                <?= $langdata->drop_file ?>
                                            </span>

                                            <input type="file" id="logoInput" name="logo"
                                                accept="image/jpeg,image/png,image/gif,image/svg+xml">
                                            <!-- onchange="document.getElementById('imgPreview').src = window.URL.createObjectURL(this.files[0])" -->

                                        </label>
                                        <label for="menu-type" style="margin-right: 15px;">
                                            <select class="form-select rounded-pill mb-3 mt-3" id="menu-type"
                                                name="menu_type">
                                                <option selected value="" id="empty_type">Select Menu Type</option>
                                                <option value="sm">Small Menu</option>
                                                <option value="wm">Wide Menu</option>

                                            </select>
                                        </label>
                                        <label for="menu-mode" style="float: right;">
                                            <select class="form-select rounded-pill mb-3 mt-3" id="menu-mode"
                                                name="menu_mode">
                                                <option selected value="" id="empty_mode">Select Menu Mode</option>
                                                <option value="dark">Dark Mode</option>
                                                <option value="light">Light Mode</option>
                                            </select>
                                        </label>
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary btn-label" type="submit" id="logo_submit"><i
                                                    class="fa-solid fa-floppy-disk"></i>
                                                <?= $langdata->save_button ?>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div> <!-- end col -->

                    </div>


                </div>
                <!-- end col -->
            </div>
            <!-- end row -->



        </div> <!-- container-fluid -->
    </div>

    <?php
}
?>