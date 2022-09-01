<x-layout>
    <x-nav/>


      <!--------------form-->
     <div class="container  form border border-top-0">
        <div class="row">
            <div class=" col-md-5 mx-auto">
                <div class="card p-4 my-3 bg2">
                    <form action="/register" method="POST">
                    @csrf
                        <div class="mb-3">
                          <label for="email" class="form-label text-dark">Email address</label>
                          <input type="email" 
                          class="form-control" 
                          id="email" 
                          aria-describedby="emailHelp"
                          name="email" 
                          value="{{old('email')}}"
                          required>
                          @error("email")
                              <p class="text-danger">{{$message}}</p>
                          @enderror
                        
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label  text-dark">Name</label>
                            <input 
                            type="text" 
                            class="form-control" 
                            id="name" 
                            name="name" 
                            value="{{old('name')}}"
                            required>
                            @error("name")
                              <p class="text-danger">{{$message}}</p>
                          @enderror
                          </div>
                          
                        <div class="mb-3">
                          <label for="password" class="form-label  text-dark">Password</label>
                          <input type="password" 
                          class="form-control" 
                          id="password"  
                          name="password" 
                          required>
                          @error("password")
                              <p class="text-danger">{{$message}}</p>
                          @enderror
                        </div>
                        <button type="submit" class="btn btn-outline-secondary  text-dark">Signup</button>
                      </form>
                </div>
            </div>
        </div>
     </div>

     <x-footer/>
</x-layout>