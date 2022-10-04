{{-- @dd($comments->count()) --}}
<x-layout>
    <x-nav/>
        <x-categoryFilter :categories="$categories"/>


    </div>

<div class="container-fluid py-3 bg2 border">
  <div class="row ">
  
  <!----------------photos-->
    <div class="col col-lg-4 bg2 photos  mt-2">
      <img src="{{asset("storage/$product->photo_1")}}" width="100%" height="400px" class="responsive-fluid border border-1">
      <div class="d-flex justify-content-center">
        <img src="{{asset("storage/$product->photo_2")}}" width="50%" height="250px"class="responsive-fluid border border-1">
        <img src="{{asset("storage/$product->photo_3")}}" width="50%" height="250px" class="responsive-fluid border border-1">
      </div>
    </div>

<!--sale infos-------------->
    <div class="col col-lg-8 col-md-12 bg2 ">
          <div class="row" style="height: 100%">
              <div class="col col-12 col-lg-7">
                 <div class="d-flex flex-column justify-content-between" style="height: 100%" >
                    <div class="border-bottom border-secondary">
                       <h2 class="text-center my-3 p-4 font text-dark fs-3">{{$product->name}}</h2>
                    </div>
                    <div class="my-3 p-3">
                       <h1 class="text-start ms-4 mt-5  text-dark fs-1">{{$product->price}}</h1>
                    </div>
                    <div class="d-flex justify-content-start ">
                       <button class="btn btn-secondary p-3 font  fs-4 m-2" type="submit" style="width: 400px"><a href="/buy" class="text-decoration-none text-white">Buy</a></button>
                       <button class="btn btn-secondary p-3 font  fs-4 m-2" type="submit" style="width: 400px"> Add Cart<i class="fas fa-shopping-cart text-white ms-2"></i></button>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-lg-5 bg bg-light" >

              <div class="m-3  border-bottom">
                     <h5>Specification</h5>
                          <p><strong>Brand: </strong>Lorem ipsum dolor sit amet.</p>
                           <p><strong>Model: </strong>Lorem ipsum dolor sit amet.</p>
                           <p><strong>Colour: </strong>Lorem ipsum dolor sit amet.</p>
                          
              </div>

              <div class="m-3  border-bottom">
                     <h5>Delivey</h5>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, at veritatis. Reprehenderit?</p>
              </div>

              <div class="m-3  border-bottom">
                     <h5>Services</h5>
                     <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde repudiandae repellendus eos.</p>

              </div>

                <div class="m-3  border-bottom">
                     <h5>In Stock</h5>
                     <p><strong>12</strong></p>

              </div>

              <div class="m-3">
                    <div class="form-group" style="width: 50%">
                      <label class="my-2"><h5>Quantity</h5></label>
                      <div class="input-group">
                          <div class="input-group-btn border">
                              <button id="down" class="btn btn-default " onclick=" down('0')"><span class="glyphicon glyphicon-minus">-</span></button>
                          </div>
                          <input type="text" id="myNumber" class="form-control input-number" value="1" />
                          <div class="input-group-btn border">
                              <button id="up" class="btn btn-default " onclick="up('10')"><span class="glyphicon glyphicon-plus">+</span></button>
                          </div>
                      </div>
                </div>
            </div>

      
              
            </div>
        </div>
    </div>
  </div>
</div>



      
<!--Comment=======================-->
 

<div class="container-fluid py-3 bg2 mb-5 ">
<div class="row">
        <div class="col col-12 col-lg-8">
    <div class="form-floating py-3 mb-3 bg bg-dark ">
        <h4 class="font2 ms-3 text-white">Please leave your opinion and advice for our Product.</h4>
        <div class="d-flex justify-content-around">
          <form action="/show/{{$product->id}}/comments" method="POST" class="py-2 comment d-flex justify-content-around">
            @csrf
            <textarea class="form-control" placeholder="" id="floatingTextarea" name="body"></textarea>
            <button class="btn btn-secondary font fs-6  ms-3" type="submit">Submit</button>
          </form>
        </div>
    </div>
         <h1 class="font2 fs-1 text-center">All your advices here!</h1>
         <div class=" mt-5">
          <div class="card border-bottom-0" >
            @foreach ($comments as $comment)
            <div class="card-body border-bottom">
              <h5 class="card-title">{{$comment->customer->name}}</h5>
              <p class="card-text">{{$comment->body}}</p>
            </div>
            @endforeach
          </div>
         </div>
  </div>

  <div class="col col-12 col-lg-4 bg bg-danger">
    
  </div>
</div>
  

       
       
</div>

<x-footer/>
</x-layout>