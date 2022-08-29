
<x-layout>
    <x-nav/>


    </div>
<!----------------photos-->
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

    <div class="col col-lg-8 col-md-12 bg2 ">
      <div class="border-bottom border-secondary">
       <h2 class="text-center my-3 p-4 font text-dark fs-3">{{$product->name}}</h2>
     </div>
     
     <div class="my-3 p-3">
      <h1 class="text-start ms-4 mt-5 font text-dark fs-1">{{$product->price}}</h1>
     </div>
     
     <div class="d-flex justify-content-around mt-5 py-5">
      <button class="btn bg-secondary  buy p-3 font  fs-4 m-2 shadow " type="submit"><a href="/buy" class="text-decoration-none text-white">Buy</a></button>
      <button class="btn btn-secondary buy p-3 font fs-4 m-2 shadow " type="submit"> Add Cart<i class="fas fa-shopping-cart text-white ms-2"></i></button>
     </div>
     
     
   <!--comment form-->  
     <div class="form-floating py-3 my-3 bg shadow" >
      <h4 class="font2 ms-3 text-white">Please leave your opinion and advice for our Product.</h4>
      <div class="d-flex justify-content-around">
        <form action="/show/{{$product->id}}" method="POST" class="py-2 comment d-flex justify-content-around">
          @csrf
          <textarea class="form-control" placeholder="" id="floatingTextarea" name="comment"></textarea>
          <button class="btn btn-secondary font fs-6  ms-3" type="submit">Submit</button>
        </form>
      </div>
      
      
    </div>
    </div>
  </div>
</din>
<!--Comment=======================-->

<div class="container-fluid py-3 bg2 mb-5 ">
       <h1 class="text-center font2 fs-1">All your advices here!</h1>
       <div class="d-flex justify-content-center mt-5">
        <div class="card" style="width: 58rem;">
          <div class="card-body">
            <h5 class="card-title">Name</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
       </div>
       
</div>

<x-footer/>
</x-layout>