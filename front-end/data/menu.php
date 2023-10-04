<?php
$value = DB::table("settings")->where("ID", 1)->first();

?>

<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="<?= ADMIN ?>" class="logo logo-dark">
            <span class="logo-sm">
                <img src="<?= IMG ?>logo/<?= $value->websiteLogo_dark_sm ?>" alt="" style="width: 30px;">
            </span>
            <span class="logo-lg">
                <img src="<?= IMG ?>logo/<?= $value->websiteLogo_dark_wm ?>" alt="" style="width: 160px;">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="<?= ADMIN ?>" class="logo logo-light">
            <span class="logo-sm">
                <img src="<?= IMG ?>logo/<?= $value->websiteLogo_dark_sm ?>" alt="" style="width: 30px;">
            </span>
            <span class="logo-lg">
                <img src="<?= IMG ?>logo/<?= $value->websiteLogo_dark_wm ?>" alt="" style="width: 160px;">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">
                        <?= $langdata->system_settings ?>
                    </span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="fa-solid fa-cart-shopping"></i> <span data-key="t-widgets">
                            <?= $langdata->orders ?>
                        </span>
                    </a>
                    <!-- <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="<?= ADMIN ?>orders" class="nav-link" data-key="t-analytics"> Order List
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm"> Add Order </a>
                            </li>


                        </ul>
                    </div> -->
                </li> <!-- end Dashboard Menu -->


                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?= ADMIN ?>general-settings">
                        <i class="fa-solid fa-gear"></i> <span data-key="t-widgets">
                            <?= $langdata->general_settings ?>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?= ADMIN ?>contact-settings">
                        <i class="fa-solid fa-phone-volume"></i> <span data-key="t-widgets">
                            <?= $langdata->contact_settings ?>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?=ADMIN?>hosting-settings">
                        <i class="fa-solid fa-envelope"></i> <span data-key="t-widgets">
                            <?= $langdata->mail_hosting_settings ?>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?= ADMIN ?>logo-settings">
                        <i class="fa-solid fa-cloud-arrow-up"></i> <span data-key="t-widgets">
                            <?= $langdata->logo_settings ?>
                        </span>
                    </a>
                </li>



                <li class="menu-title"><span data-key="t-menu">-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-</span></li>


                <li class="menu-title"><span data-key="t-menu">
                        <?= $langdata->product_settings ?>
                    </span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="fa-solid fa-list"></i> <span data-key="t-widgets">
                            <?= $langdata->categories ?>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="fa-solid fa-basket-shopping"></i> <span data-key="t-widgets">
                            <?= $langdata->products ?>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="fa-solid fa-cash-register"></i> <span data-key="t-widgets">
                            <?= $langdata->tax_rates ?>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="fa-solid fa-truck-fast"></i> <span data-key="t-widgets">
                            <?= $langdata->cargo ?>
                        </span>
                    </a>
                </li>



                <li class="menu-title"><span data-key="t-menu">-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-</span></li>
                <li class="menu-title"><span data-key="t-menu">
                        <?= $langdata->extra_settings ?>
                    </span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="fa-solid fa-sliders"></i> <span data-key="t-widgets">
                            <?= $langdata->slider ?>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="fa-solid fa-bars"></i> <span data-key="t-widgets">
                            <?= $langdata->menu_menu ?>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="fa-solid fa-pager"></i> <span data-key="t-widgets">
                            <?= $langdata->banner ?>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?=ADMIN?>bank-accounts">
                        <i class="fa-solid fa-building-columns"></i> <span data-key="t-widgets">
                            <?= $langdata->bank_accounts ?>
                        </span>
                    </a>
                </li>


                <li class="menu-title"><span data-key="t-menu">-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-</span></li>
                <li class="menu-title"><span data-key="t-menu">
                        <?= $langdata->admin_settings ?>
                    </span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="fa-solid fa-address-card"></i> <span data-key="t-widgets">
                            <?= $langdata->customers ?>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="fa-solid fa-users"></i> <span data-key="t-widgets">
                            <?= $langdata->teammates ?>
                        </span>
                    </a>
                </li>

                <li class="menu-title"><span data-key="t-menu">-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-</span></li>


                <li class="menu-title"><span data-key="t-menu">
                        <?= $langdata->entegration_settings ?>
                    </span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?=ADMIN?>marketplace-entegrations">
                        <i class="ri-shopping-bag-2-line"></i> <span data-key="t-widgets">
                            <?= $langdata->marketplace_entegration ?>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="ri-bank-card-line"></i> <span data-key="t-widgets">
                            <?= $langdata->payment_entegration ?>
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="ri-shield-user-line"></i> <span data-key="t-widgets">
                            <?= $langdata->login_entegration ?>
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="ri-message-2-line"></i> <span data-key="t-widgets">
                            <?= $langdata->sms_entegration ?>
                        </span>
                    </a>
                </li>




                <li class="menu-title"><span data-key="t-menu">-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-</span></li>
                <li class="menu-title"><span data-key="t-menu">
                        <?= $langdata->personal_settings ?>
                    </span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="fa-solid fa-user"></i> <span data-key="t-widgets">
                            <?= $langdata->profile ?>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="fa-solid fa-user-pen"></i> <span data-key="t-widgets">
                            <?= $langdata->account_settings ?>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="fa-solid fa-right-from-bracket"></i> <span data-key="t-widgets">
                            <?= $langdata->logout ?>
                        </span>
                    </a>
                </li>





            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>