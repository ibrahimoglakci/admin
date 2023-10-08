<title><?= $langdata->contact_settings ?> | <?=$webTitle?></title>
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
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">
                                        <?= $langdata->system_settings ?>
                                    </a></li>
                                <li class="breadcrumb-item active">
                                    <?= $langdata->contact_settings ?>
                                </li>
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
                            <h4 class="card-title mb-0 flex-grow-1">
                                <?= $langdata->contact_settings ?>
                            </h4>


                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <form id="contact-settings"
                                    onsubmit="formSubmit('contact-settings','#contact_submit','contact_settings')">
                                    <?php CSRF::csrf(); ?>
                                    <div class="row gy-4">

                                        <div class="col-xxl-6 col-md-12">
                                            <div>
                                                <label for="iconInput" class="form-label"><?= $langdata->email_adress ?> <span
                                                        style="font-size: 12px;color: #635F83;">(<?= $langdata->reach_email_adress ?>)</span></label>
                                                <div class="form-icon">
                                                    <input type="email" class="form-control form-control-icon"
                                                        id="iconInput" placeholder="info@domain.com" name="email"
                                                        value="<?= $values->websiteMail ?>">
                                                    <i class="ri-mail-unread-line"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-md-12">
                                            <div>
                                                <label for="iconInput" class="form-label"><?= $langdata->phone_number ?></label>
                                                <div class="form-icon">
                                                    <input type="text" class="form-control form-control-icon" id="iconInput"
                                                        placeholder="+90 111 111 11 11" name="phone"
                                                        value="<?= $values->websitePhone ?>">
                                                    <i class="ri-phone-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-12">
                                            <div>
                                                <label for="iconInput" class="form-label">Trendyol</label>
                                                <div class="form-icon">
                                                    <input type="text" class="form-control form-control-icon"
                                                        placeholder="Link" id="shop-input" name="trendyol"
                                                        value="<?= $values->trendyol ?>">
                                                    <img src="<?= IMG ?>svg/trendyol.svg" class="shopsvg">
                                                    <a href="<?= $values->trendyol ?>" target="_blank" class="show-links" style="position: absolute; right:5px;top:7px;"><?=$langdata->go_to_page?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-12">
                                            <div>
                                                <label for="iconInput" class="form-label">HepsiBurada</label>
                                                <div class="form-icon">
                                                    <input type="text" class="form-control form-control-icon"
                                                        placeholder="Link" id="shop-input" name="hepsiburada"
                                                        value="<?= $values->hepsiburada ?>">
                                                    <img src="<?= IMG ?>svg/hepsiburada.svg" class="shopsvg">
                                                    <a href="<?= $values->hepsiburada ?>" target="_blank" class="show-links" style="position: absolute; right:5px;top:7px;"><?=$langdata->go_to_page?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-12">
                                            <div>
                                                <label for="iconInput" class="form-label">N11</label>
                                                <div class="form-icon">
                                                    <input type="text" class="form-control form-control-icon"
                                                        placeholder="Link" id="shop-input" name="n11"
                                                        value="<?= $values->n11 ?>">
                                                    <img src="<?= IMG ?>svg/n11.svg" class="shopsvg">
                                                    <a href="<?= $values->n11 ?>" target="_blank" class="show-links" style="position: absolute; right:5px;top:7px;"><?=$langdata->go_to_page?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-12">
                                            <div>
                                                <label for="iconInput" class="form-label">Çiçek Sepeti</label>
                                                <div class="form-icon">
                                                    <input type="text" class="form-control form-control-icon"
                                                        placeholder="Link" id="shop-input" name="ciceksepeti"
                                                        value="<?= $values->ciceksepeti ?>">
                                                    <img src="<?= IMG ?>svg/ciceksepeti.svg" class="shopsvg">
                                                    <a href="<?= $values->ciceksepeti ?>" target="_blank" class="show-links" style="position: absolute; right:5px;top:7px;"><?=$langdata->go_to_page?></a>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-12">
                                            <div>
                                                <label for="iconInput" class="form-label">Sahibinden</label>
                                                <div class="form-icon">
                                                    <input type="text" class="form-control form-control-icon"
                                                        placeholder="Link" id="shop-input" name="sahibinden"
                                                        value="<?= $values->sahibinden ?>">
                                                    <img src="<?= IMG ?>svg/sahibinden.svg" class="shopsvg">
                                                    <a href="<?= $values->sahibinden ?>" target="_blank" class="show-links" style="position: absolute; right:5px;top:7px;"><?=$langdata->go_to_page?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-12">
                                            <div>
                                                <label for="iconInput" class="form-label">Amazon</label>
                                                <div class="form-icon">
                                                    <input type="text" class="form-control form-control-icon"
                                                        placeholder="Link" name="amazon" value="<?= $values->amazon ?>">

                                                    <i class="ri-amazon-fill"></i>
                                                    <a href="<?= $values->amazon ?>" target="_blank" class="show-links" style="position: absolute; right:5px;top:7px;"><?=$langdata->go_to_page?></a>
                                                </div>
                                            </div>
                                        </div>

                                        <style>
                                            .form-icon .shopsvg {
                                                position: absolute;
                                                top: 2.5px;
                                                bottom: 0;
                                                left: 8px;

                                                display: -webkit-box;
                                                display: -ms-flexbox;
                                                display: flex;
                                                -webkit-box-align: center;
                                                -ms-flex-align: center;
                                                align-items: center;
                                                width: 50px;
                                                height: 30px;
                                                object-fit: contain;
                                            }

                                            #shop-input {
                                                padding-left: 65px;

                                            }
                                        </style>
                                        <div class="col-xxl-6 col-md-12">
                                            <div>
                                                <label for="iconInput" class="form-label">Facebook</label>
                                                <div class="form-icon">
                                                    <input type="text" class="form-control form-control-icon" id="iconInput"
                                                        placeholder="Username" value="<?= $values->facebook ?>"
                                                        name="facebook">
                                                    <i class="ri-facebook-circle-fill"></i>
                                                    <a href="https://facebook.com/<?= $values->facebook ?>" target="_blank" class="show-links" style="position: absolute; right:5px;top:7px;"><?=$langdata->go_to_page?></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-md-12">
                                            <div>
                                                <label for="iconInput" class="form-label">İnstagram</label>
                                                <div class="form-icon">
                                                    <input type="text" class="form-control form-control-icon" id="iconInput"
                                                        placeholder="Username" value="<?= $values->instagram ?>"
                                                        name="instagram">
                                                    <i class=" ri-instagram-line"></i>
                                                    <a href="https://instagram.com/<?= $values->instagram ?>" target="_blank" class="show-links" style="position: absolute; right:5px;top:7px;"><?=$langdata->go_to_page?></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-md-12">
                                            <div>
                                                <label for="iconInput" class="form-label">Twitter</label>
                                                <div class="form-icon">
                                                    <input type="text" class="form-control form-control-icon" id="iconInput"
                                                        placeholder="Username" value="<?= $values->twitter ?>" name="twitter">
                                                    <i class="ri-twitter-fill"></i>
                                                    <a href="https://twitter.com/<?= $values->twitter ?>" target="_blank" class="show-links" style="position: absolute; right:5px;top:7px;"><?=$langdata->go_to_page?></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-md-12">
                                            <div>
                                                <label for="iconInput" class="form-label">Linked-in</label>
                                               
                                                    <div class="form-icon">
                                                        <input type="text" class="form-control form-control-icon"
                                                            id="iconInput" placeholder="Username"
                                                            value="<?= $values->linkedin ?>" name="linkedin">
                                                        <i class="ri-linkedin-box-fill"></i>
                                                        <a href="https://linkedin.com/in/<?= $values->linkedin ?>" target="_blank" class="show-links" style="position: absolute; right:5px;top:7px;"><?=$langdata->go_to_page?></a>
                                                    </div>
                                                
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-md-12">
                                            <div>
                                                <label for="iconInput" class="form-label">Youtube</label>
                                                <div class="form-icon">
                                                    <input type="text" class="form-control form-control-icon"
                                                        placeholder="Username" value="<?= $values->youtube ?>" name="youtube">
                                                    <i class="ri-youtube-fill"></i>
                                                    <a href="https://youtube.com/<?= $values->youtube ?>" target="_blank" class="show-links" style="position: absolute; right:5px;top:7px;"><?=$langdata->go_to_page?></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-md-12">
                                            <div>
                                                <label for="iconInput" class="form-label">Tiktok</label>
                                                <div class="form-icon">
                                                    <input type="text" class="form-control form-control-icon" id="iconInput"
                                                        placeholder="Username" value="<?= $values->tiktok ?>" name="tiktok">
                                                    <i class="fa-brands fa-tiktok tiktok-icon"></i>
                                                    <a href="https://tiktok.com/<?= $values->tiktok ?>" target="_blank" class="show-links" style="position: absolute; right:5px;top:7px;"><?=$langdata->go_to_page?></a>
                                                    <style>
                                                        .tiktok-icon {
                                                            position: absolute;
                                                            top: 10px;
                                                            bottom: 0;
                                                            left: 18px;
                                                            display: -webkit-box;
                                                            display: -ms-flexbox;
                                                            display: flex;
                                                            -webkit-box-align: center;
                                                            -ms-flex-align: center;
                                                            align-items: center
                                                        }
                                                    </style>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-12">
                                            <div>
                                                <label for="iconInput" class="form-label">Whatsapp</label>
                                                <div class="form-icon">
                                                    <input type="text" class="form-control form-control-icon"
                                                        placeholder="Link" value="<?= $values->whatsapp ?>" name="whatsapp">
                                                    <i class="ri-whatsapp-line"></i>
                                                    <a href="<?= $values->whatsapp ?>" target="_blank" class="show-links" style="position: absolute; right:5px;top:7px;"><?=$langdata->go_to_page?></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-md-12">
                                            <div>
                                                <label for="iconInput" class="form-label">Pinterest</label>
                                                <div class="form-icon">
                                                    <input type="text" class="form-control form-control-icon"
                                                        placeholder="Username" value="<?= $values->pinterest ?>"
                                                        name="pinterest">
                                                    <i class="ri-pinterest-fill"></i>
                                                    <a href="https://pinterest.com/<?= $values->pinterest ?>" target="_blank" class="show-links" style="position: absolute; right:5px;top:7px;"><?=$langdata->go_to_page?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-12">
                                            <div>
                                                <label for="iconInput" class="form-label">Tumblr</label>
                                                <div class="form-icon">
                                                    <input type="text" class="form-control form-control-icon"
                                                        placeholder="Username" value="<?= $values->tumblr ?>" name="tumblr">
                                                    <i class="ri-tumblr-fill"></i>
                                                    <a href="https://tumblr.com/<?= $values->tumblr ?>" target="_blank" class="show-links" style="position: absolute; right:5px;top:7px;"><?=$langdata->go_to_page?></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-6 col-md-12">
                                            <div>
                                                <label for="iconInput" class="form-label">Google</label>
                                                <div class="form-icon">
                                                    <input type="text" class="form-control form-control-icon"
                                                        placeholder="Link" value="<?= $values->google ?>" name="google">
                                                    <i class="ri-google-fill"></i>
                                                    <a href="<?= $values->google ?>" target="_blank" class="show-links" style="position: absolute; right:5px;top:7px;"><?=$langdata->go_to_page?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-xxl-12 col-md-12">
                                            <div>
                                                <label for="iconInput" class="form-label">Pornhub</label>
                                                <div class="form-icon">
                                                    <input type="text" class="form-control form-control-icon"
                                                        placeholder="Link" id="shop-input" name="trendyol"
                                                        value="<?= $values->trendyol ?>">
                                                    <img src="<?= IMG ?>svg/pornhub.svg" class="shopsvg">
                                                    <a href="https://pornhub.com/model/<?= $values->trendyol ?>" target="_blank" class="show-links" style="position: absolute; right:5px;top:7px;"><?=$langdata->go_to_page?></a>
                                                </div>
                                            </div>
                                        </div>           -->          




                                        <div class="col-xxl-12 col-md-12">
                                            <div>
                                                <div class="d-grid gap-2">
                                                    <button class="btn btn-primary btn-label" type="submit"
                                                        id="contact_submit"><i class="fa-solid fa-floppy-disk"></i>
                                                        <?= $langdata->save_button ?>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </form>
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