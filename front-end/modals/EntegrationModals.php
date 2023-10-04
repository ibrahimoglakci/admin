<!-- Trendyol modals -->

<div class="modal fade" id="trendyolModals" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <img src="<?= IMG ?>svg/trendyol.svg" class="img-fluid mb-4" style="margin-right: 10px;" alt="Trendyol" height="50" width="80">
                <h5 class="modal-title mb-3" id="exampleModalgridLabel">
                    Account Settings
                </h5>
                <button type="button" class="btn-close mb-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0);">
                    <div class="row g-3">


                        <div class="col-xxl-6">
                            <div>
                                <label for="userName" class="form-label">UserName</label>
                                <input type="text" class="form-control" id="userName" name="username" placeholder="Enter Username" autocomplete="off">
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-6">
                            <div>
                                <label for="passwordInput" class="form-label">Password</label>
                                <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Enter Password" autocomplete="off">
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-6">
                            <div>
                                <label for="shopName" class="form-label">Shop Name</label>
                                <input type="text" class="form-control" id="shopName" name="shopname" placeholder="Enter ShopName">
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-6">
                            <div>
                                <label for="supplierid" class="form-label">Supplier ID</label>
                                <input type="number" class="form-control" id="supplierid" name="supplierid" placeholder="Supplier ID">
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-6">
                            <div>
                                <label for="shopUrl" class="form-label">Shop URL</label>
                                <input type="text" class="form-control" id="shopUrl" name="shopurl" placeholder="Enter Shop URL">
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-6">
                            <div>
                                <label for="brand" class="form-label">Brand</label>
                                <input type="number" class="form-control" id="brand" name="brand" placeholder="Enter Brand Name">
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-12">
                            <div>
                                <label for="cargoCompany" class="form-label">Cargo Company</label>
                                <select class="form-select rounded-pill mb-3" aria-label="Default select example" name="cargocompany" id="cargoCompany">
                                    <option selected>Select Cargo Company</option>
                                    <option value="ptt">PTT</option>
                                    <option value="surat">Sürat</option>
                                    <option value="mng">MNG</option>
                                    <option value="aras">Aras</option>
                                    <option value="yurtici">Yurtiçi</option>
                                    <option value="vatan">Vatan</option>
                                    <option value="ups">UPS</option>
                                </select>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-12">
                            <div>
                                <label for="orderState" class="form-label">Order State</label>
                                <select class="form-select rounded-pill mb-3" aria-label="" name="orderstate" id="orderState">
                                    <option selected>Select Order State</option>
                                    <option value="waiting">Waiting for approval</option>
                                    <option value="approved">Approved</option>
                                    <option value="invoiced">Invoiced</option>
                                    <option value="shipped">Shipped</option>
                                    <option value="canceled">Canceled</option>
                                    <option value="delivered">Delivered</option>
                                    <option value="returned">Returned</option>
                                    <option value="not_delivered">Not delivered</option>
                                </select>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-6">

                            <div>
                                <label for="critstock" class="form-label">Critical Stock Quantity</label>
                                <input type="number" class="form-control" id="critstock" name="critstock" placeholder="Enter Critical Stock Quantity">

                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-3 pt-4">

                            <div>
                                <div class="form-check form-switch form-switch-success">
                                    <input class="form-check-input" type="checkbox" role="switch" name="isactive" id="isActive" checked>
                                    <label for="isActive" class="form-label">Active?</label>
                                </div>

                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-3 pt-4">

                            <div>
                                <div class="form-check form-switch form-switch-success">
                                    <input class="form-check-input" type="checkbox" role="switch" name="autoprice" id="autoprice" checked>
                                    <label for="autoprice" class="form-label">Auto Price?</label>
                                </div>

                            </div>
                        </div><!--end col-->


                        <div class="col-lg-12">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </form>
            </div>
        </div>
    </div>
</div>

<!-- HepsiBurada modals -->

<div class="modal fade" id="hepsiburadaModals" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <img src="<?= IMG ?>svg/hepsiburada.svg" class="img-fluid mb-3" style="margin-right: 10px;" alt="HepsiBurada" height="10" width="50">
                <h5 class="modal-title mb-3" id="exampleModalgridLabel">
                    Account Settings
                </h5>
                <button type="button" class="btn-close mb-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0);">
                    <div class="row g-3">


                        <div class="col-xxl-6">
                            <div>
                                <label for="userName" class="form-label">UserName</label>
                                <input type="text" class="form-control" id="userName" name="username" placeholder="Enter Username">
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-6">
                            <div>
                                <label for="passwordInput" class="form-label">Password</label>
                                <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Enter Password">
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-6">
                            <div>
                                <label for="shopName" class="form-label">Shop Name</label>
                                <input type="text" class="form-control" id="shopName" name="shopname" placeholder="Enter ShopName">
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-6">
                            <div>
                                <label for="supplierid" class="form-label">Supplier ID</label>
                                <input type="number" class="form-control" id="supplierid" name="supplierid" placeholder="Supplier ID">
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-6">
                            <div>
                                <label for="shopUrl" class="form-label">Shop URL</label>
                                <input type="text" class="form-control" id="shopUrl" name="shopurl" placeholder="Enter Shop URL">
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-6">
                            <div>
                                <label for="brand" class="form-label">Brand</label>
                                <input type="number" class="form-control" id="brand" name="brand" placeholder="Enter Brand Name">
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-12">
                            <div>
                                <label for="cargoCompany" class="form-label">Cargo Company</label>
                                <select class="form-select rounded-pill mb-3" aria-label="Default select example" name="cargocompany" id="cargoCompany">
                                    <option selected>Select Cargo Company</option>
                                    <option value="ptt">PTT</option>
                                    <option value="surat">Sürat</option>
                                    <option value="mng">MNG</option>
                                    <option value="aras">Aras</option>
                                    <option value="yurtici">Yurtiçi</option>
                                    <option value="vatan">Vatan</option>
                                    <option value="ups">UPS</option>
                                </select>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-12">
                            <div>
                                <label for="orderState" class="form-label">Order State</label>
                                <select class="form-select rounded-pill mb-3" aria-label="" name="orderstate" id="orderState">
                                    <option selected>Select Order State</option>
                                    <option value="waiting">Waiting for approval</option>
                                    <option value="approved">Approved</option>
                                    <option value="invoiced">Invoiced</option>
                                    <option value="shipped">Shipped</option>
                                    <option value="canceled">Canceled</option>
                                    <option value="delivered">Delivered</option>
                                    <option value="returned">Returned</option>
                                    <option value="not_delivered">Not delivered</option>
                                </select>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-6">

                            <div>
                                <label for="critstock" class="form-label">Critical Stock Quantity</label>
                                <input type="number" class="form-control" id="critstock" name="critstock" placeholder="Enter Critical Stock Quantity">

                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-3 pt-4">

                            <div>
                                <div class="form-check form-switch form-switch-success">
                                    <input class="form-check-input" type="checkbox" role="switch" name="isactive" id="isActive" checked>
                                    <label for="isActive" class="form-label">Active?</label>
                                </div>

                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-3 pt-4">

                            <div>
                                <div class="form-check form-switch form-switch-success">
                                    <input class="form-check-input" type="checkbox" role="switch" name="autoprice" id="autoprice" checked>
                                    <label for="autoprice" class="form-label">Auto Price?</label>
                                </div>

                            </div>
                        </div><!--end col-->


                        <div class="col-lg-12">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </form>
            </div>
        </div>
    </div>
</div>

<!-- N11 modals -->

<div class="modal fade" id="n11Modals" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
            <img src="<?= IMG ?>svg/n11.svg" class="img-fluid mb-2" style="margin-right: 10px;" alt="N11" height="60" width="100">
                <h5 class="modal-title mb-1" id="exampleModalgridLabel">
                     Account Settings
                    </h5>
                <button type="button" class="btn-close mb-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0);">
                    <div class="row g-3">


                        <div class="col-xxl-6">
                            <div>
                                <label for="userName" class="form-label">UserName</label>
                                <input type="text" class="form-control" id="userName" name="username" placeholder="Enter Username">
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-6">
                            <div>
                                <label for="passwordInput" class="form-label">Password</label>
                                <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Enter Password">
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-6">
                            <div>
                                <label for="shopName" class="form-label">Shop Name</label>
                                <input type="text" class="form-control" id="shopName" name="shopname" placeholder="Enter ShopName">
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-6">
                            <div>
                                <label for="supplierid" class="form-label">Supplier ID</label>
                                <input type="number" class="form-control" id="supplierid" name="supplierid" placeholder="Supplier ID">
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-6">
                            <div>
                                <label for="shopUrl" class="form-label">Shop URL</label>
                                <input type="text" class="form-control" id="shopUrl" name="shopurl" placeholder="Enter Shop URL">
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-6">
                            <div>
                                <label for="brand" class="form-label">Brand</label>
                                <input type="number" class="form-control" id="brand" name="brand" placeholder="Enter Brand Name">
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-12">
                            <div>
                                <label for="cargoCompany" class="form-label">Cargo Company</label>
                                <select class="form-select rounded-pill mb-3" aria-label="Default select example" name="cargocompany" id="cargoCompany">
                                    <option selected>Select Cargo Company</option>
                                    <option value="ptt">PTT</option>
                                    <option value="surat">Sürat</option>
                                    <option value="mng">MNG</option>
                                    <option value="aras">Aras</option>
                                    <option value="yurtici">Yurtiçi</option>
                                    <option value="vatan">Vatan</option>
                                    <option value="ups">UPS</option>
                                </select>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-12">
                            <div>
                                <label for="orderState" class="form-label">Order State</label>
                                <select class="form-select rounded-pill mb-3" aria-label="" name="orderstate" id="orderState">
                                    <option selected>Select Order State</option>
                                    <option value="waiting">Waiting for approval</option>
                                    <option value="approved">Approved</option>
                                    <option value="invoiced">Invoiced</option>
                                    <option value="shipped">Shipped</option>
                                    <option value="canceled">Canceled</option>
                                    <option value="delivered">Delivered</option>
                                    <option value="returned">Returned</option>
                                    <option value="not_delivered">Not delivered</option>
                                </select>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-6">

                            <div>
                                <label for="critstock" class="form-label">Critical Stock Quantity</label>
                                <input type="number" class="form-control" id="critstock" name="critstock" placeholder="Enter Critical Stock Quantity">

                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-3 pt-4">

                            <div>
                                <div class="form-check form-switch form-switch-success">
                                    <input class="form-check-input" type="checkbox" role="switch" name="isactive" id="isActive" checked>
                                    <label for="isActive" class="form-label">Active?</label>
                                </div>

                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-3 pt-4">

                            <div>
                                <div class="form-check form-switch form-switch-success">
                                    <input class="form-check-input" type="checkbox" role="switch" name="autoprice" id="autoprice" checked>
                                    <label for="autoprice" class="form-label">Auto Price?</label>
                                </div>

                            </div>
                        </div><!--end col-->


                        <div class="col-lg-12">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ÇiçekSepeti modals -->

<div class="modal fade" id="cicekSepetiModals" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
            <img src="<?= IMG ?>svg/ciceksepeti.svg" class="img-fluid mb-2" style="margin-right: 10px;" alt="ÇiçekSepeti" height="60" width="100">
                <h5 class="modal-title mb-2" id="exampleModalgridLabel">
                     Account Settings
                    </h5>
                <button type="button" class="btn-close mb-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0);">
                    <div class="row g-3">


                        <div class="col-xxl-6">
                            <div>
                                <label for="userName" class="form-label">UserName</label>
                                <input type="text" class="form-control" id="userName" name="username" placeholder="Enter Username">
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-6">
                            <div>
                                <label for="passwordInput" class="form-label">Password</label>
                                <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Enter Password">
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-6">
                            <div>
                                <label for="shopName" class="form-label">Shop Name</label>
                                <input type="text" class="form-control" id="shopName" name="shopname" placeholder="Enter ShopName">
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-6">
                            <div>
                                <label for="supplierid" class="form-label">Supplier ID</label>
                                <input type="number" class="form-control" id="supplierid" name="supplierid" placeholder="Supplier ID">
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-6">
                            <div>
                                <label for="shopUrl" class="form-label">Shop URL</label>
                                <input type="text" class="form-control" id="shopUrl" name="shopurl" placeholder="Enter Shop URL">
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-6">
                            <div>
                                <label for="brand" class="form-label">Brand</label>
                                <input type="number" class="form-control" id="brand" name="brand" placeholder="Enter Brand Name">
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-12">
                            <div>
                                <label for="cargoCompany" class="form-label">Cargo Company</label>
                                <select class="form-select rounded-pill mb-3" aria-label="Default select example" name="cargocompany" id="cargoCompany">
                                    <option selected>Select Cargo Company</option>
                                    <option value="ptt">PTT</option>
                                    <option value="surat">Sürat</option>
                                    <option value="mng">MNG</option>
                                    <option value="aras">Aras</option>
                                    <option value="yurtici">Yurtiçi</option>
                                    <option value="vatan">Vatan</option>
                                    <option value="ups">UPS</option>
                                </select>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-12">
                            <div>
                                <label for="orderState" class="form-label">Order State</label>
                                <select class="form-select rounded-pill mb-3" aria-label="" name="orderstate" id="orderState">
                                    <option selected>Select Order State</option>
                                    <option value="waiting">Waiting for approval</option>
                                    <option value="approved">Approved</option>
                                    <option value="invoiced">Invoiced</option>
                                    <option value="shipped">Shipped</option>
                                    <option value="canceled">Canceled</option>
                                    <option value="delivered">Delivered</option>
                                    <option value="returned">Returned</option>
                                    <option value="not_delivered">Not delivered</option>
                                </select>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-6">

                            <div>
                                <label for="critstock" class="form-label">Critical Stock Quantity</label>
                                <input type="number" class="form-control" id="critstock" name="critstock" placeholder="Enter Critical Stock Quantity">

                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-3 pt-4">

                            <div>
                                <div class="form-check form-switch form-switch-success">
                                    <input class="form-check-input" type="checkbox" role="switch" name="isactive" id="isActive" checked>
                                    <label for="isActive" class="form-label">Active?</label>
                                </div>

                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-3 pt-4">

                            <div>
                                <div class="form-check form-switch form-switch-success">
                                    <input class="form-check-input" type="checkbox" role="switch" name="autoprice" id="autoprice" checked>
                                    <label for="autoprice" class="form-label">Auto Price?</label>
                                </div>

                            </div>
                        </div><!--end col-->


                        <div class="col-lg-12">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Amazon modals -->

<div class="modal fade" id="amazonModals" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
            <img src="<?= IMG ?>svg/amazon.svg" class="img-fluid mb-1" style="margin-right: 10px;" alt="N11" height="60" width="80">
                <h5 class="modal-title mb-2" id="exampleModalgridLabel">
                     Account Settings
                    </h5>
                <button type="button" class="btn-close mb-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0);">
                    <div class="row g-3">


                        <div class="col-xxl-6">
                            <div>
                                <label for="userName" class="form-label">UserName</label>
                                <input type="text" class="form-control" id="userName" name="username" placeholder="Enter Username">
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-6">
                            <div>
                                <label for="passwordInput" class="form-label">Password</label>
                                <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Enter Password">
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-6">
                            <div>
                                <label for="shopName" class="form-label">Shop Name</label>
                                <input type="text" class="form-control" id="shopName" name="shopname" placeholder="Enter ShopName">
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-6">
                            <div>
                                <label for="supplierid" class="form-label">Supplier ID</label>
                                <input type="number" class="form-control" id="supplierid" name="supplierid" placeholder="Supplier ID">
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-6">
                            <div>
                                <label for="shopUrl" class="form-label">Shop URL</label>
                                <input type="text" class="form-control" id="shopUrl" name="shopurl" placeholder="Enter Shop URL">
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-6">
                            <div>
                                <label for="brand" class="form-label">Brand</label>
                                <input type="number" class="form-control" id="brand" name="brand" placeholder="Enter Brand Name">
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-12">
                            <div>
                                <label for="cargoCompany" class="form-label">Cargo Company</label>
                                <select class="form-select rounded-pill mb-3" aria-label="Default select example" name="cargocompany" id="cargoCompany">
                                    <option selected>Select Cargo Company</option>
                                    <option value="ptt">PTT</option>
                                    <option value="surat">Sürat</option>
                                    <option value="mng">MNG</option>
                                    <option value="aras">Aras</option>
                                    <option value="yurtici">Yurtiçi</option>
                                    <option value="vatan">Vatan</option>
                                    <option value="ups">UPS</option>
                                </select>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-12">
                            <div>
                                <label for="orderState" class="form-label">Order State</label>
                                <select class="form-select rounded-pill mb-3" aria-label="" name="orderstate" id="orderState">
                                    <option selected>Select Order State</option>
                                    <option value="waiting">Waiting for approval</option>
                                    <option value="approved">Approved</option>
                                    <option value="invoiced">Invoiced</option>
                                    <option value="shipped">Shipped</option>
                                    <option value="canceled">Canceled</option>
                                    <option value="delivered">Delivered</option>
                                    <option value="returned">Returned</option>
                                    <option value="not_delivered">Not delivered</option>
                                </select>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-6">

                            <div>
                                <label for="critstock" class="form-label">Critical Stock Quantity</label>
                                <input type="number" class="form-control" id="critstock" name="critstock" placeholder="Enter Critical Stock Quantity">

                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-3 pt-4">

                            <div>
                                <div class="form-check form-switch form-switch-success">
                                    <input class="form-check-input" type="checkbox" role="switch" name="isactive" id="isActive" checked>
                                    <label for="isActive" class="form-label">Active?</label>
                                </div>

                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-3 pt-4">

                            <div>
                                <div class="form-check form-switch form-switch-success">
                                    <input class="form-check-input" type="checkbox" role="switch" name="autoprice" id="autoprice" checked>
                                    <label for="autoprice" class="form-label">Auto Price?</label>
                                </div>

                            </div>
                        </div><!--end col-->


                        <div class="col-lg-12">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Sahibinden modals -->

<div class="modal fade" id="sahibindenModals" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
            <img src="<?= IMG ?>svg/sahibinden.svg" class="img-fluid mb-2" style="margin-right: 10px;" alt="N11" height="60" width="100">
                <h5 class="modal-title mb-2" id="exampleModalgridLabel">
                     Account Settings
                    </h5>
                <button type="button" class="btn-close mb-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0);">
                    <div class="row g-3">


                        <div class="col-xxl-6">
                            <div>
                                <label for="userName" class="form-label">UserName</label>
                                <input type="text" class="form-control" id="userName" name="username" placeholder="Enter Username">
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-6">
                            <div>
                                <label for="passwordInput" class="form-label">Password</label>
                                <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Enter Password">
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-6">
                            <div>
                                <label for="shopName" class="form-label">Shop Name</label>
                                <input type="text" class="form-control" id="shopName" name="shopname" placeholder="Enter ShopName">
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-6">
                            <div>
                                <label for="supplierid" class="form-label">Supplier ID</label>
                                <input type="number" class="form-control" id="supplierid" name="supplierid" placeholder="Supplier ID">
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-6">
                            <div>
                                <label for="shopUrl" class="form-label">Shop URL</label>
                                <input type="text" class="form-control" id="shopUrl" name="shopurl" placeholder="Enter Shop URL">
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-6">
                            <div>
                                <label for="brand" class="form-label">Brand</label>
                                <input type="number" class="form-control" id="brand" name="brand" placeholder="Enter Brand Name">
                            </div>
                        </div><!--end col-->

                        <div class="col-xxl-12">
                            <div>
                                <label for="cargoCompany" class="form-label">Cargo Company</label>
                                <select class="form-select rounded-pill mb-3" aria-label="Default select example" name="cargocompany" id="cargoCompany">
                                    <option selected>Select Cargo Company</option>
                                    <option value="ptt">PTT</option>
                                    <option value="surat">Sürat</option>
                                    <option value="mng">MNG</option>
                                    <option value="aras">Aras</option>
                                    <option value="yurtici">Yurtiçi</option>
                                    <option value="vatan">Vatan</option>
                                    <option value="ups">UPS</option>
                                </select>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-12">
                            <div>
                                <label for="orderState" class="form-label">Order State</label>
                                <select class="form-select rounded-pill mb-3" aria-label="" name="orderstate" id="orderState">
                                    <option selected>Select Order State</option>
                                    <option value="waiting">Waiting for approval</option>
                                    <option value="approved">Approved</option>
                                    <option value="invoiced">Invoiced</option>
                                    <option value="shipped">Shipped</option>
                                    <option value="canceled">Canceled</option>
                                    <option value="delivered">Delivered</option>
                                    <option value="returned">Returned</option>
                                    <option value="not_delivered">Not delivered</option>
                                </select>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-6">

                            <div>
                                <label for="critstock" class="form-label">Critical Stock Quantity</label>
                                <input type="number" class="form-control" id="critstock" name="critstock" placeholder="Enter Critical Stock Quantity">

                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-3 pt-4">

                            <div>
                                <div class="form-check form-switch form-switch-success">
                                    <input class="form-check-input" type="checkbox" role="switch" name="isactive" id="isActive" checked>
                                    <label for="isActive" class="form-label">Active?</label>
                                </div>

                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-3 pt-4">

                            <div>
                                <div class="form-check form-switch form-switch-success">
                                    <input class="form-check-input" type="checkbox" role="switch" name="autoprice" id="autoprice" checked>
                                    <label for="autoprice" class="form-label">Auto Price?</label>
                                </div>

                            </div>
                        </div><!--end col-->


                        <div class="col-lg-12">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </form>
            </div>
        </div>
    </div>
</div>