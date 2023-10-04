<?php include_once("front-end/modals/BankAccountsModal.php"); ?>

<!-- start page title -->
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0"><?= $langdata->bank_accounts ?></h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);"><?= $langdata->extra_settings ?></a></li>
                            <li class="breadcrumb-item active"><?= $langdata->bank_accounts ?></li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="card">
            <div class="card-header border-0 rounded">
                <div class="row g-2">

                    <!--end col-->

                    <!--end col-->
                    <div class="col-lg-12">
                        <div class="hstack gap-2" style="float: right;">
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addSeller"><i class="ri-add-fill me-1 align-bottom"></i> Add Seller</button>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
        </div>

        <div class="row mt-4">
            <?php
            $banks = BankAccounts::all();
            foreach ($banks as $bank) {


            ?>
                <div class="col-xl-3 col-lg-6">
                    <div class="card ribbon-box right overflow-hidden">
                        <div class="card-body text-center p-4">
                            <img src="<?= IMG ?>banks/<?= $bank->logo ?>" alt="" height="45">
                            <h5 class="mb-1 mt-4"><a href="javascript:void(0);" class="link-primary"><?= $bank->Name ?></a></h5>
                            <div class="d-inline-flex gap-2 pt-3">
                                <i id="copy-icon-<?=$bank->ID?>" class="fa-solid fa-copy" onclick="copyText('iban', <?=$bank->ID?>);"></i>
                                <p class="text-muted mb-4 iban"><?= $bank->iban ?></p>
                            </div>


                            <div class="mt-2">
                                <a href="javascript:void(0);" class="btn btn-danger w-100">Delete Account</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            <?php
            }
            ?>
        </div>
        <!--end row-->



    </div>
</div>
<!--end modal-->