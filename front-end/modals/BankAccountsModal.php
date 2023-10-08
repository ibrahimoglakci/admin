 <?php include_once("back-end/init.php");?>
 <!-- Modal -->
 <?php
    $banks = Values::values("bank_accounts");
    for ($i = 0; $i < count($banks); $i++) {
    ?>
     <div class="modal fade zoomIn" id="bank-<?= $banks[$i]->ID ?>" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-lg">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">
                         <?= $banks[$i]->Name . " - Settings" ?>
                     </h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                 </div>
                 <div class="modal-body">
                     <div id="bankDetails">
                         <form action="#">
                             <div class="row">
                                 <div class="col-lg-6">
                                     <div class="mb-3">
                                         <label for="banknameInput" class="form-label">Bank Name</label>
                                         <input type="text" class="form-control" id="banknameInput" placeholder="Enter your bank name" value="<?=$banks[$i]->Name?>">
                                     </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-lg-6">
                                     <div class="mb-3">
                                         <label for="branchInput" class="form-label">Branch</label>
                                         <input type="text" class="form-control" id="branchInput" placeholder="Branch">
                                     </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-lg-12">
                                     <div class="mb-3">
                                         <label for="accountnameInput" class="form-label">Account Holder Name</label>
                                         <input type="text" class="form-control" id="accountnameInput" placeholder="Enter account holder name">
                                     </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-lg-6">
                                     <div class="mb-3">
                                         <label for="accountnumberInput" class="form-label">Account Number</label>
                                         <input type="number" class="form-control" id="accountnumberInput" placeholder="Enter account number">
                                     </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-lg-6">
                                     <div class="mb-3">
                                         <div class="input-group">
                                             <span class="input-group-text" id="ibanInput">TR</span>
                                             <input type="number" class="form-control" maxlength="24" oninput="formatIBAN(this);" placeholder="Iban" aria-label="Iban" aria-describedby="ibanInput" id="ibanInput">
                                         </div>
                                     </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-lg-12">
                                     <div class="hstack gap-2 justify-content-end">
                                         <button type="submit" class="btn btn-primary"><i class="ri-save-3-line align-bottom me-1"></i> Save</button>
                                     </div>
                                 </div>
                                 <!--end col-->
                             </div>
                             <!--end row-->
                         </form>
                     </div>



                 </div>
             </div>
         </div>
     </div>

    
 <?php
    }
    ?>