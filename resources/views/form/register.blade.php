<x-layout>
    <x-nav/>


      <!--------------form-->
     <div class="container my-4 form">
        <div class="row">
            <div class=" col-md-5 mx-auto">
                <div class="card p-4 my-3 bg2">
                    <form>
        
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label font text-dark">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label font text-dark">Name</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label font text-dark">Phone Number</label>
                            <input type="text" class="form-control" id="exampleInputPassword1">
                          </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label font text-dark">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-outline-secondary font text-dark">Signup</button>
                      </form>
                </div>
            </div>
        </div>
     </div>

     <x-footer/>
</x-layout>