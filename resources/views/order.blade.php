<x-layout>
  <x-nav/>

    <div class="container border form">
        <div class="row">
            <div class=" col-md-5 mx-auto">
                <div class="card p-4 my-3 bg2">
                    <form>
        
                        <div class="mb-3">
                          <label for="address" class="form-label">Address</label>
                          <input type="text" class="form-control" id="address" aria-describedby="address">
                          <div id="emailHelp" class="form-text">Please enter your delivery address correctly.</div>
                        </div>
                        <select class="form-select mb-3" aria-label="Payment">
                             <option selected>Please select payment method </option>
                             <option value="">Cash on Delivery</option>
                             <option value="">Kpay</option>
                             <option value="">Wavepay</option>
                             <option value="">Visa,master</option>
                        </select>
                        <button type="submit" class="btn btn-secondary">submit</button>
                      </form>
                </div>
            </div>
        </div>
     </div>


<x-footer/>
</x-layout>