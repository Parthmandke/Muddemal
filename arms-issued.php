<?php $useDataTables = true; include 'muddemal_header.php'; ?>
   <?php include 'muddemal_sidebar.php'; ?>
   
   <div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            
           <!-- Header bar -->
            <div class="arm-heading-bar d-flex justify-content-between align-items-center">
                <h5 class="arm-heading-title mb-0">पोलिसांना दिलेली शस्त्रे</h5>
                <a href="arms-issued-form.php" class="btn btn-sm btn-primary">
                    <i class="ri-add-line align-middle"></i> नवीन जोडा
                </a>
            </div>

            <!-- List card -->
            <div class="card arm-card">
                <div class="card-header arm-card-header">
                    <h5 class="arm-card-title">शस्त्र वितरण नोंदवही</h5>
                </div>

                    <div class="card-body">
                    <div class="table-responsive">
                        <table id="buttons-datatables" class="display table table-bordered align-middle arm-table" style="width:100%">
                            <thead class="text-center">
                                <tr>
                                    <th>अनुक्रमांक</th>
                                    <th>दिनांक</th>
                                    <th>पद</th>
                                    <th>नाव</th>
                                    <th>बक्कल क्र.</th>
                                    <th>मोबाईल  नं.</th>
                                    <th>शस्त्र प्रकार</th>
                                    <th>फोटो</th>
                                    <th>वितरणाचा उद्देश</th>
                                    <th>शेरा</th>
                                    <th>संपादन | हटवा</th>
                                    <th>परत</th>
                                </tr>
                            </thead>
                            <tbody id="issuedBody">
                                <!-- rows from backend go here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div> <!-- page-content -->
</div> <!-- main-content -->


<div class="modal fade" id="revertModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">शस्त्र परत घ्या</h5>
                <button class="btn-close" data-bs-dismiss="modal" type="button"></button>
            </div>
            <div class="modal-body">
                <p class="mb-3">
                    <strong id="revertName"></strong> यांचे
                    <strong id="revertWeapon"></strong> परत घ्यायचे आहे का?
                </p>
                <div class="mb-3">
                    <label class="form-label" for="returnedDate">परत मिळाल्याचा दिनांक <span class="req">*</span></label>
                    <input type="date" class="form-control" id="returnedDate" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="returnReason">कारण</label>
                    <textarea class="form-control" id="returnReason" rows="2"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-light" data-bs-dismiss="modal" type="button">रद्द करा</button>
                <button class="btn btn-primary" id="confirmRevert" type="button">परत घ्या</button>
            </div>
        </div>
    </div>
</div>

<?php include 'muddemal_footer.php'; ?>
<script src="../assets/js/local-store.js" onerror="alert('local-store.js लोड झाली नाही: '+this.src)"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    new DataTable("#buttons-datatables", {
        dom: "Bfrtip",
        buttons: ["copy", "csv", "excel", "print", "pdf"]
    });
});
</script>