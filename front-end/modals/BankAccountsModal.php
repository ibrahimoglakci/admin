 <!-- Modal -->
 <div class="modal fade zoomIn" id="addSeller" tabindex="-1" aria-labelledby="addSellerLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="addSellerLabel">Add Seller</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-content border-0 mt-3">
                 <ul class="nav nav-tabs nav-tabs-custom nav-success p-2 pb-0 bg-light" role="tablist">
                     <li class="nav-item">
                         <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab" aria-selected="true">
                             Personal Details
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" data-bs-toggle="tab" href="#businessDetails" role="tab" aria-selected="false">
                             Business Details
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" data-bs-toggle="tab" href="#bankDetails" role="tab" aria-selected="false">
                             Bank Details
                         </a>
                     </li>
                 </ul>
             </div>
             <div class="modal-body">
                 <div class="tab-content">
                     <div class="tab-pane active" id="personalDetails" role="tabpanel">
                         <form action="#">
                             <div class="row">
                                 <div class="col-lg-6">
                                     <div class="mb-3">
                                         <label for="firstnameInput" class="form-label">First Name</label>
                                         <input type="text" class="form-control" id="firstnameInput" placeholder="Enter your firstname">
                                     </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-lg-6">
                                     <div class="mb-3">
                                         <label for="lastnameInput" class="form-label">Last Name</label>
                                         <input type="text" class="form-control" id="lastnameInput" placeholder="Enter your lastname">
                                     </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-lg-6">
                                     <div class="mb-3">
                                         <label for="contactnumberInput" class="form-label">Contact Number</label>
                                         <input type="number" class="form-control" id="contactnumberInput" placeholder="Enter your number">
                                     </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-lg-6">
                                     <div class="mb-3">
                                         <label for="phonenumberInput" class="form-label">Phone Number</label>
                                         <input type="number" class="form-control" id="phonenumberInput" placeholder="Enter your number">
                                     </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-lg-6">
                                     <div class="mb-3">
                                         <label for="emailidInput" class="form-label">Email</label>
                                         <input type="email" class="form-control" id="emailidInput" placeholder="Enter your email">
                                     </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-lg-6">
                                     <div class="mb-3">
                                         <label for="birthdayidInput" class="form-label">Date of Birth</label>
                                         <input type="text" id="birthdayidInput" class="form-control" data-provider="flatpickr" placeholder="Enter your date of birth">
                                     </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-lg-4">
                                     <div class="mb-3">
                                         <label for="cityidInput" class="form-label">City</label>
                                         <input type="text" class="form-control" id="cityidInput" placeholder="Enter your city">
                                     </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-lg-4">
                                     <div class="mb-3">
                                         <label for="countryidInput" class="form-label">Country</label>
                                         <input type="text" class="form-control" id="countryidInput" placeholder="Enter your country">
                                     </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-lg-4">
                                     <div class="mb-3">
                                         <label for="zipcodeidInput" class="form-label">Zip Code</label>
                                         <input type="text" class="form-control" id="zipcodeidInput" placeholder="Enter your zipcode">
                                     </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-lg-12">
                                     <div class="mb-3">
                                         <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                         <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter description"></textarea>
                                     </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-lg-12">
                                     <div class="hstack gap-2 justify-content-end">
                                         <button class="btn btn-link link-success text-decoration-none fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                                         <button type="submit" class="btn btn-primary"><i class="ri-save-3-line align-bottom me-1"></i> Save</button>
                                     </div>
                                 </div>
                                 <!--end col-->
                             </div>
                             <!--end row-->
                         </form>
                     </div>
                     <div class="tab-pane" id="businessDetails" role="tabpanel">
                         <form action="#">
                             <div class="row">
                                 <div class="col-lg-12">
                                     <div class="mb-3">
                                         <label for="companynameInput" class="form-label">Company Name</label>
                                         <input type="text" class="form-control" id="companynameInput" placeholder="Enter your company name">
                                     </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-lg-6">
                                     <div class="mb-3">
                                         <label for="choices-single-default" class="form-label">Company Type</label>
                                         <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default">
                                             <option value="">Select type</option>
                                             <option value="All" selected>All</option>
                                             <option value="Merchandising">Merchandising</option>
                                             <option value="Manufacturing">Manufacturing</option>
                                             <option value="Partnership">Partnership</option>
                                             <option value="Corporation">Corporation</option>
                                         </select>
                                     </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-lg-6">
                                     <div class="mb-3">
                                         <label for="pancardInput" class="form-label">Pan Card Number</label>
                                         <input type="text" class="form-control" id="pancardInput" placeholder="Enter your pan-card number">
                                     </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-lg-4">
                                     <div class="mb-3">
                                         <label for="websiteInput" class="form-label">Website</label>
                                         <input type="url" class="form-control" id="websiteInput" placeholder="Enter your URL">
                                     </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-lg-4">
                                     <div class="mb-3">
                                         <label for="faxInput" class="form-label">Fax</label>
                                         <input type="text" class="form-control" id="faxInput" placeholder="Enter your fax">
                                     </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-lg-4">
                                     <div class="mb-3">
                                         <label for="companyemailInput" class="form-label">Email</label>
                                         <input type="email" class="form-control" id="companyemailInput" placeholder="Enter your email">
                                     </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-lg-6">
                                     <div class="mb-3">
                                         <label for="worknumberInput" class="form-label">Number</label>
                                         <input type="number" class="form-control" id="worknumberInput" placeholder="Enter your number">
                                     </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-lg-6">
                                     <div class="mb-3">
                                         <label for="companylogoInput" class="form-label">Company Logo</label>
                                         <input type="file" class="form-control" id="companylogoInput">
                                     </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-lg-12">
                                     <div class="hstack gap-2 justify-content-end">
                                         <button class="btn btn-link link-success text-decoration-none fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                                         <button type="submit" class="btn btn-primary"><i class="ri-save-3-line align-bottom me-1"></i> Save</button>
                                     </div>
                                 </div>
                                 <!--end col-->
                             </div>
                             <!--end row-->
                         </form>
                     </div>
                     <div class="tab-pane" id="bankDetails" role="tabpanel">
                         <form action="#">
                             <div class="row">
                                 <div class="col-lg-6">
                                     <div class="mb-3">
                                         <label for="banknameInput" class="form-label">Bank Name</label>
                                         <input type="text" class="form-control" id="banknameInput" placeholder="Enter your bank name">
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
                                         <label for="ifscInput" class="form-label">IFSC</label>
                                         <input type="number" class="form-control" id="ifscInput" placeholder="IFSC">
                                     </div>
                                 </div>
                                 <!--end col-->
                                 <div class="col-lg-12">
                                     <div class="hstack gap-2 justify-content-end">
                                         <button class="btn btn-link link-success text-decoration-none fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
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
 </div>