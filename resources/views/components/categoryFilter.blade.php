<!--category-->
      <div class="d-flex justify-content-center mx-auto">
        <div class="border border-secondary mt-3">
          <button
            class="history btn border-white text-center font text-dark px-5"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#multiCollapseExample"
            aria-expanded="false"
            aria-controls="multiCollapseExample2"
          >
            Category
          </button>
          @foreach($products as $product)
           <div class="row">
            <div class="col">
              <div class="collapse multi-collapse" id="multiCollapseExample">
                <div
                  class="mt-1 p-2 border-bottom border-secondary font text-dark text-center item"
                >
                 {{$product->category->name}}
                </div>
              </div>
            </div>
          </div>
          @endforeach
         
        </div>
      </div>