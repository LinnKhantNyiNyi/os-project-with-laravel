<x-layout>
    <x-nav/>
    <x-categoryFilter :categories="$categories"/>
      <!--------------form-->
     <div class="container border form">
        <div class="row">
            <div class=" col-md-5 mx-auto">
                <div class="card p-4 my-3 bg2">
                    <form action="/login" method="POST" >
                      @csrf
        
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" 
                          class="form-control" 
                          id="exampleInputEmail1"
                          aria-describedby="emailHelp" 
                          name="email"
                          value="{{old('email')}}">
                        @error('email')
                           <p class="text-danger">{{$message}}</p> 
                        @enderror
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword" name="password">
                        </div>
                        <button type="submit" class="btn btn-secondary">Login</button>
                      </form>
                       <a href="/register" class="mt-3 text-secondary">Create new account</a>
                </div>
            </div>
        </div>
     </div>
    <x-footer/>
</x-layout>