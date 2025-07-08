<!-- Modal -->
<div class="modal fade" id="withdrawModal" tabindex="-1" aria-labelledby="withdrawModalLabel" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg ">
        <div class="modal-content withdraw-modal">

            <!-- Modal Header -->
            <div class="modal-header border-0">
                <div class="withdraw-header-text-wrapper m-auto text-center w-100">
                    <h3 class="mb-3" id="planModalLabel">Withdrawal</h3>

                    <div class="alert alert-warning text-center w-100 mb-2 p-2" role="alert">
                        ⚠️ <strong>Important:</strong> Please ensure that all bank details you provide are accurate. We
                        <strong>will not be held responsible</strong> for any losses or issues caused by incorrect or
                        incomplete information.
                        For assistance, please <a class="text-decoration-underline" href="#">contact customer
                            support</a>
                    </div>

                </div>
                <div class="modal-header-close-icon-box position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class='bx bx-x fs-3'></i>
                </div>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">

                <div class="w">

                    <div class="form-wrapper mb-4 ">

                        <div class="input-wrapper">
                            <label for="name">Account holder's name</label>
                            <input type="text" id="name" class="form-input modal-input w-100 p-2 rounded-1"
                                placeholder="Account holder's name">
                        </div>
                        <div class="input-wrapper mt-3">
                            <label for="account-name">Bank account number</label>
                            <input type="text" id="account-name" class="form-input modal-input w-100 p-2 rounded-1"
                                placeholder="Bank account number">
                        </div>
                        <div class="input-wrapper mt-3">
                            <label for="bank-name">Bank name</label>
                            <input type="text" id="bank-name" class="form-input modal-input w-100 p-2 rounded-1"
                                placeholder="Bank name">
                        </div>

                        <select class=" w-100 mt-3 rounded-1 form-input form-select-input"
                            aria-label="Default select example">
                            <option selected>Account type</option>
                            <option value="1">Savings</option>
                            <option value="2">Current</option>
                        </select>

                        <div class="input-wrapper mt-3">
                            <label for="bank-name">Amount to withdraw</label>
                            <input type="text" id="bank-name" class="form-input modal-input w-100 p-2 rounded-1"
                                placeholder="Amount to withdraw">

                            <div class="withdraw-available-bal-text-wrapper d-flex">
                                <p class="mb-0">Current balance: &#8358;</p>
                                <span>100,000</span>
                            </div>
                        </div>

                        <button type="button" class="withdraw-btn p-2 mt-4 w-100 rounded-2">Withdraw</button>
                    </div>


                </div>

            </div>

        </div>
    </div>
</div>

<!-- Optional Script -->
<script>
    document.getElementById('sub').addEventListener('click', () => {
        alert('WOW');
    });
</script>

<style>
    /* Fade from bottom */
</style>
