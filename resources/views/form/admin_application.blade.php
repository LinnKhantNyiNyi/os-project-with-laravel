<x-layout>

  <!--------------form-->
  <div class="container  form border border-top-0 mt-5">
    <div class="row">
      <div class=" col-md-5 mx-auto">
        <div class="card p-4 my-3 bg2">
          <form action="/application" method="POST">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label  text-dark">Email address</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email"
                value="{{old('email')}}" required>
              @error("email")
              <p class="text-danger">{{$message}}</p>
              @enderror

            </div>
            <div class="mb-3">
              <label for="name" class="form-label  text-dark">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required>
              @error("name")
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="mb-3">
              <label for="shopname" class="form-label  text-dark">Shop Name</label>
              <input type="text" class="form-control" id="shopname" name="shopname" value="{{old('shopname')}}"
                required>
              @error("shopname")
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="mb-3">
              <label for="name" class="form-label  text-dark">Address</label>
              <input type="text" class="form-control" id="name" name="shopaddress" value="{{old('shopaddress')}}"
                required>
              @error("shopaddress")
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="mb-3">
              <label for="name" class="form-label  text-dark">Phone Number</label>
              <input type="text" class="form-control" id="name" name="ph_num" value="{{old('ph_num')}}" required>
              @error("phonenumber")
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="mb-3">
              <label for="name" class="form-label  text-dark">General selling products of your shop.</label>
              <input type="text" class="form-control" id="name" name="sellingproducts"
                value="{{old('sellingproducts')}}" required>
              @error("sellingproducts")
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="mb-3">
              <label for="name" class="form-label  text-dark">Please describe some details of your business.</label>
              <input type="text" class="form-control" id="name" name="detail" value="{{old('detail')}}" required>
              @error("detail")
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>








            <button type="submit" class="btn btn-outline-secondary  text-dark">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>








  <x-footer />
</x-layout>