<?php

$values = DB::table("settings")->whereRaw("ID=?", [1])->first();
if ($values) {
?>

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0"><?= $langdata->mail_hosting_settings ?></h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);"><?= $langdata->system_settings ?></a></li>
                                <li class="breadcrumb-item active"><?= $langdata->mail_hosting_settings ?></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1"><?= $langdata->mail_hosting_settings ?></h4>

                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="error">
                                        
                                    </div>
                                    <form id="hosting-settings" onsubmit="formSubmit('hosting-settings','#hosting_submit','hosting_settings')">
                                        <?php CSRF::csrf(); ?>
                                        <div class="col-xxl-12 col-md-12">
                                            <div>
                                                <label for="basiInput" class="form-label"><?= $langdata->hosting_mail ?></label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="ri-mail-line"></i></span>
                                                    <input type="text" name="email" class="form-control" value="<?= $values->websiteEmail ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-12 col-md-12 pt-2">
                                            <div>
                                                <label for="basiInput" class="form-label"><?= $langdata->hosting_password ?></label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="ri-key-fill"></i></span>
                                                    <input type="text" name="password" class="form-control" value="<?= $values->websitePassword ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 pt-2">
                                            <div>

                                                <label for="basiInput" class="form-label"><?= $langdata->hosting_host ?></label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="ri-server-fill"></i></span>
                                                    <input type="text" name="host" class="form-control" value="<?= $values->websiteMailHost ?>">
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 pt-2">
                                            <div>
                                                <label for="basiInput" class="form-label"><?= $langdata->hosting_port ?></label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="ri-lock-password-line"></i></span>
                                                    <input type="text" name="port" class="form-control" value="<?= $values->websiteMailPort ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="d-grid gap-2 pt-2">
                                            <button class="btn btn-primary" type="submit" id="hosting_submit"><i class="fa-solid fa-floppy-disk"></i> <?= $langdata->save_button ?></button>

                                        </div>
                                    </form>



                                </div>
                                <!--end row-->
                            </div>

                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->



        </div> <!-- container-fluid -->
    </div><!-- End Page-content -->

<?php
}
?>