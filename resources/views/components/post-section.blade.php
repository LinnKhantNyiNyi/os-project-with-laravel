  <div class="bg2 container-fluid p-5 pt-0 ">

    

    
      <!-----------Post section----------->
      <div class="row g-1 product mt-2">
         @foreach ($products as $product)
        <div class="col col-12 col-lg-2 col-md-4">
          <a href="/show/{{$product->id}}" class="text-decoration-none text-dark">
            <div class="card p-2">
             
              <img
                src="{{asset("storage/$product->photo_1") }}"
                class="card-img-top p-1  border-bottom"
                height="250px"
                width="250px"
              />
              <div class="card-body ">
                <h5 class="card-title font text-dark fs-2">
                  {{$product->name}}
                </h5>

                <p class="font text-dark fs-3">{{$product->price}}</p>
              </div>
            </div>
          </a>
        </div>
      @endforeach
       
      </div>
    </div>