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
                        <h4 class="mb-sm-0"><?= $langdata->general_settings ?></h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);"><?= $langdata->system_settings ?></a></li>
                                <li class="breadcrumb-item active"><?= $langdata->general_settings ?></li>
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
                            <h4 class="card-title mb-0 flex-grow-1"><?= $langdata->general_settings ?></h4>

                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <form id="general-settings" onsubmit="formSubmit('general-settings','#general_submit','general_settings')">
                                        <?php CSRF::csrf(); ?>
                                        <div class="col-xxl-12 col-md-6">
                                            <div>
                                                <label for="basiInput" class="form-label"><?= $langdata->website_title ?></label>
                                                <input type="text" class="form-control" name="title" value="<?= $values->websiteTitle ?>">
                                            </div>
                                        </div>

                                        <div class="col-xxl-12 col-md-6 pt-2">
                                            <div>
                                                <label for="basiInput" class="form-label"><?= $langdata->website_description ?></label>
                                                <input type="text" name="description" class="form-control" value="<?= $values->websiteDescription ?>">
                                            </div>
                                        </div>

                                        <div class="col-xxl-12 col-md-6 pt-2">
                                            <label for="exampleFormControlTextarea5" class="form-label"><?= $langdata->website_keywords ?></label>
                                            <textarea class="form-control" name="keywords" id="exampleFormControlTextarea5" rows="3"><?= $values->websiteKeywords ?></textarea>
                                        </div>

                                        <div class="d-grid gap-2 pt-2">
                                            <button class="btn btn-primary" type="submit" id="general_submit"><i class="fa-solid fa-floppy-disk"></i> <?= $langdata->save_button ?></button>

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