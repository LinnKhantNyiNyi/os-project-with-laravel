  <div class="bg2 container-xxl p-5 pt-0 border">

    <x-categoryFilter :products="$products"/>

    
      <!-----------Post section----------->
      <div class="row g-5 product mt-2">
         @foreach ($products as $product)
        <div class="col col-12 col-lg-4">
          <a href="/show/{{$product->id}}" class="text-decoration-none text-dark">
            <div class="card shadow p-2">
             
              <img
                src="img/nl.jpg"
                class="card-img-top p-1"
                height="250px"
                width="250px"
              />
              <div class="card-body border border-2">
                <h5 class="card-title font text-dark fs-2 text-center">
                  {{$product->name}}
                </h5>

                <p class="font text-dark fs-3 text-center">{{$product->price}}</p>
              </div>
            </div>
          </a>
        </div>
      @endforeach
       
      </div>
    </div>