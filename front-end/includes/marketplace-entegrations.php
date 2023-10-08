<title><?= $langdata->marketplace_entegration ?> | <?=$webTitle?></title>
<?php include_once("front-end/modals/EntegrationModals.php"); ?>



<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0"><?= $langdata->marketplace_entegration ?></h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);"><?= $langdata->entegration_settings ?></a></li>
                            <li class="breadcrumb-item active"><?= $langdata->marketplace_entegration ?></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h5 class="text-decoration-underline mb-3 mt-2 pb-3"><?= $langdata->marketplace_entegration ?></h5>
            </div>
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="alert border-0 rounded-top rounded-0 m-0 d-flex align-items-center" role="alert" style="background-color: #FF6720; color: #fff;">
                            <i data-feather="alert-triangle" class="text-black me-2 icon-sm"></i>
                            <div class="flex-grow-1">
                                Trendyol Entegration State <b>Off</b>
                            </div>
                            <div class="flex-shrink-0">
                                <!-- Switch sizes -->
                                <div class="form-check form-switch form-switch-md form-switch-success" dir="ltr">
                                    <input type="checkbox" class="form-check-input" id="customSwitchsizemd">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-end">
                            <div class="col-sm-8">
                                <div class="p-3">
                                    <p class="fs-16 lh-base">Change <span class="fw-semibold">Your Trendyol Account</span>,
                                        information <i class="mdi mdi-arrow-right"></i></p>
                                    <div class="mt-3">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#trendyolModals"><?=$langdata->settings?></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="px-3 pb-5 mb-2">
                                    <img src="<?= IMG ?>svg/trendyol.svg" class="img-fluid" alt="Trendyol">
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-body-->
                </div>
            </div> <!-- end col-->

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="alert border-0 rounded-top rounded-0 m-0 d-flex align-items-center" role="alert" style="background-color: #FF6000; color: #fff;">
                            <i data-feather="alert-triangle" class="text-black me-2 icon-sm"></i>
                            <div class="flex-grow-1">
                                HepsiBurada Entegration State <b>Off</b>
                            </div>
                            <div class="flex-shrink-0">
                                <!-- Switch sizes -->
                                <div class="form-check form-switch form-switch-md form-switch-success" dir="ltr">
                                    <input type="checkbox" class="form-check-input" id="customSwitchsizemd">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-end">
                            <div class="col-sm-8">
                                <div class="p-3">
                                    <p class="fs-16 lh-base">Change <span class="fw-semibold">Your HepsiBurada Account</span>,
                                        information <i class="mdi mdi-arrow-right"></i></p>
                                    <div class="mt-3">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#hepsiburadaModals"><?=$langdata->settings?></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="px-3 pb-3">
                                    <img src="<?= IMG ?>svg/hepsiburada.svg" class="img-fluid" alt="HepsiBurada">
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-body-->
                </div>
            </div> <!-- end col-->

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="alert border-0 rounded-top rounded-0 m-0 d-flex align-items-center" role="alert" style="background-color: #5d3ebc; color: #fff;">
                            <i data-feather="alert-triangle" class="text-black me-2 icon-sm"></i>
                            <div class="flex-grow-1">
                                N11 Entegration State <b>Off</b>
                            </div>
                            <div class="flex-shrink-0">
                                <!-- Switch sizes -->
                                <div class="form-check form-switch form-switch-md form-switch-success" dir="ltr">
                                    <input type="checkbox" class="form-check-input" id="customSwitchsizemd">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-end">
                            <div class="col-sm-8">
                                <div class="p-3">
                                    <p class="fs-16 lh-base">Change <span class="fw-semibold">Your N11 Account</span>,
                                        information <i class="mdi mdi-arrow-right"></i></p>
                                    <div class="mt-3">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#n11Modals"><?=$langdata->settings?></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="px-3 pb-5">
                                    <img src="<?= IMG ?>svg/n11.svg" class="img-fluid" alt="N11">
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-body-->
                </div>
            </div> <!-- end col-->

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="alert border-0 rounded-top rounded-0 m-0 d-flex align-items-center" role="alert" style="background-color: #51B549; color: #fff;">
                            <i data-feather="alert-triangle" class="text-black me-2 icon-sm"></i>
                            <div class="flex-grow-1">
                                Çiçek Sepeti Entegration State <b>Off</b>
                            </div>
                            <div class="flex-shrink-0">
                                <!-- Switch sizes -->
                                <div class="form-check form-switch form-switch-md form-switch-success" dir="ltr">
                                    <input type="checkbox" class="form-check-input" id="customSwitchsizemd">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-end">
                            <div class="col-sm-8">
                                <div class="p-3">
                                    <p class="fs-16 lh-base">Change <span class="fw-semibold">Your Çiçek Sepeti Account</span>,
                                        information <i class="mdi mdi-arrow-right"></i></p>
                                    <div class="mt-3">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cicekSepetiModals"><?=$langdata->settings?></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="px-3 pb-5">
                                    <img src="<?= IMG ?>svg/ciceksepeti.svg" class="img-fluid" alt="Çiçek Sepeti">
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-body-->
                </div>
            </div> <!-- end col-->

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="alert border-0 rounded-top rounded-0 m-0 d-flex align-items-center" role="alert" style="background-color: #e6a400; color: #fff;">
                            <i data-feather="alert-triangle" class="text-black me-2 icon-sm"></i>
                            <div class="flex-grow-1">
                                Amazon Entegration State <b>Off</b>
                            </div>
                            <div class="flex-shrink-0">
                                <!-- Switch sizes -->
                                <div class="form-check form-switch form-switch-md form-switch-success" dir="ltr">
                                    <input type="checkbox" class="form-check-input" id="customSwitchsizemd">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-end">
                            <div class="col-sm-8">
                                <div class="p-3">
                                    <p class="fs-16 lh-base">Change <span class="fw-semibold">Your Amazon Account</span>,
                                        information <i class="mdi mdi-arrow-right"></i></p>
                                    <div class="mt-3">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#amazonModals"><?=$langdata->settings?></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="px-3 pb-5 mb-3">
                                    <img src="<?= IMG ?>svg/amazon.svg" class="img-fluid" alt="Amazon">
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-body-->
                </div>
            </div> <!-- end col-->

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="alert border-0 rounded-top rounded-0 m-0 d-flex align-items-center" role="alert" style="background-color: #ffe800; color: #000;">
                            <i data-feather="alert-triangle" class="me-2 icon-sm text-black"></i>
                            <div class="flex-grow-1">
                                Sahibinden Entegration State <b>Off</b>
                            </div>
                            <div class="flex-shrink-0">
                                <!-- Switch sizes -->
                                <div class="form-check form-switch form-switch-md form-switch-success" dir="ltr">
                                    <input type="checkbox" class="form-check-input" id="customSwitchsizemd">
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-end">
                            <div class="col-sm-8">
                                <div class="p-3">
                                    <p class="fs-16 lh-base">Change <span class="fw-semibold">Your Sahibinden Account</span>,
                                        information <i class="mdi mdi-arrow-right"></i></p>
                                    <div class="mt-3">

                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sahibindenModals"><?=$langdata->settings?></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="px-3 pb-5">
                                    <img src="<?= IMG ?>svg/sahibinden.svg" class="img-fluid" alt="Sahibinden">
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-body-->
                </div>
            </div> <!-- end col-->

        </div> <!-- end row-->

    </div>
    <!-- container-fluid -->
</div>