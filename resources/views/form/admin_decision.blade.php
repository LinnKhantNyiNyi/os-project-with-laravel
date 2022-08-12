<x-layout> 

<!--------------form-->
     <div class="container  form border border-top-0 mt-5">
        <div class="row">
            <div class=" col-md-5 mx-auto">
                <div class="card p-4 my-3 bg2">
                    <form action="/applications/{{$application->id}}" method="POST">
                    @csrf
                        <div class="mb-3">
                          <label for="email" class="form-label font text-dark">Email address</label>
                          <input type="email" 
                          class="form-control" 
                          id="email" 
                          aria-describedby="emailHelp"
                          name="email" 
                          value="{{$application->email}}"
                          required>
                          @error("email")
                              <p class="text-danger">{{$message}}</p>
                          @enderror
                        
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label font text-dark">Name</label>
                            <input 
                            type="text" 
                            class="form-control" 
                            id="name" 
                            name="name" 
                            value="{{$application->name}}"
                            required>
                            @error("name")
                              <p class="text-danger">{{$message}}</p>
                          @enderror
                          </div>

                           <div class="mb-3">
                            <label for="shopname" class="form-label font text-dark">Shop Name</label>
                            <input 
                            type="text" 
                            class="form-control" 
                            id="shopname" 
                            name="shopname" 
                            value="{{$application->shopname}}"
                            required>
                            @error("shopname")
                              <p class="text-danger">{{$message}}</p>
                          @enderror
                          </div>

                        <div class="mb-3">
                            <label for="name" class="form-label font text-dark">Phone Number</label>
                            <input 
                            type="text" 
                            class="form-control" 
                            id="name" 
                            name="ph_number" 
                            value="{{$application->ph_num}}"
                            required>
                         @error("ph_number")
                              <p class="text-danger">{{$message}}</p>
                          @enderror
                          </div>

                          <div class="mb-3">
                            <label for="name" class="form-label font text-dark">Address</label>
                            <input 
                            type="text" 
                            class="form-control" 
                            id="name" 
                            name="address" 
                            value="{{$application->address}}"
                            required>
                         @error("address")
                              <p class="text-danger">{{$message}}</p>
                          @enderror
                          </div>

                          <div class="mb-3">
                            <label for="password" class="form-label font text-dark">Password</label>
                            <input 
                            type="password" 
                            class="form-control" 
                            id="password" 
                            name="password"
                            required>
                         @error("password")
                              <p class="text-danger">{{$message}}</p>
                          @enderror
                          </div>


                 <div class="form-check my-3">
                 <input class="form-check-input" type="radio" name="is_admin" id="flexRadioDefault1" [(ngModel)]="is_admin" value="true">
                <label class="form-check-label" for="flexRadioDefault1">
                  Accept as Admin
                </label>
                 </div>
                       

                        <button type="submit" class="btn btn-outline-secondary font text-dark">Submit</button>
                      </form>
                </div>
            </div>
        </div>
     </div>








    <x-footer/>
</x-layout>