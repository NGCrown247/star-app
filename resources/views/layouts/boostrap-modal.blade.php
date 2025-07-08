




<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title m-auto" id="offcanvasBottomLabel">Withdraw</h5>
    <button type="button" class="btn-close bg m-0 p-0" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body small">

     <div class="form-wrapper mb-4 p-4">

                    <div class="input-wrapper">
                        <label for="name">Account holder's name</label>
                        <input type="text" id="name" class="form-input modal-input w-100 p-2 rounded-1"
                            placeholder="Account holder's name">
                    </div>
                    <div class="input-wrapper mt-3">
                        <label for="account-name">Account holder's name</label>
                        <input type="text" id="account-name" class="form-input modal-input w-100 p-2 rounded-1"
                            placeholder="Bank account number">
                    </div>
                    <div class="input-wrapper mt-3">
                        <label for="bank-name">Bank name</label>
                        <input type="text" id="bank-name" class="form-input modal-input w-100 p-2 rounded-1"
                            placeholder="Bank name">
                    </div>

                    <select class=" w-100 mt-3 rounded-1 form-select-input" aria-label="Default select example">
                        <option selected>Account type</option>
                        <option value="1">Savings</option>
                        <option value="2">Current</option>
                    </select>

                    <div class="input-wrapper mt-3">
                        <label for="bank-name">Amount to withdraw</label>
                        <input type="text" id="bank-name" class="form-input modal-input w-100 p-2 rounded-1"
                            placeholder="Amount to withdraw">

                        <div class="withdraw-available-bal-text-wrapper d-flex align-items-center m-0 p-0">
                            <p class="mb-0">Current balance: &#8358;</p>
                            <span>100,000</span>
                        </div>
                    </div>

                    <button type="button" class="add-account-btn p-2 mt-5 w-100 rounded-2">Withdraw</button>
                </div>

  </div>
</div>
