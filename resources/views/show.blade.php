<x-layout>
    <x-nav/>


    </div>
<!----------------photos-->
<div class="container-xxl py-3 bg2 border">
  <div class="row ">
<!----------------photos-->
    <div class="col col-lg-4 bg2 photos  mt-2">
      <img src="img/blank-profile-picture-973460__340.webp" width="100%" class="responsive-fluid">
      <div class="d-flex justify-content-center">
        <img src="img/blank-profile-picture-973460__340.webp" width="50%" class="responsive-fluid">
        <img src="img/blank-profile-picture-973460__340.webp" width="50%" class="responsive-fluid">
      </div>
    </div>

    <div class="col col-lg-8 col-md-12 bg2 ">
      <div class="border-bottom border-secondary">
       <h2 class="text-center my-3 p-4 font text-dark fs-3">Product Name</h2>
     </div>
     
     <div class="my-3 p-3">
      <h1 class="text-start ms-4 mt-5 font text-dark fs-1">Price-K</h1>
     </div>
     
     <div class="d-flex justify-content-around mt-5 py-5">
      <button class="btn bg buy p-3 font text-white fs-4 m-2 shadow " type="submit">Buy</button>
      <button class="btn btn-secondary buy p-3 font fs-4 m-2 shadow " type="submit"> Add Cart<i class="fas fa-shopping-cart text-white ms-2"></i></button>
     </div>
     
     
   <!--comment form-->  
     <div class="form-floating py-3 my-3 bg shadow" >
      <h4 class="font2 ms-3 text-white">Please leave your opinion and advice for our Product.</h4>
      <div class="d-flex justify-content-around">
        <form action="" class="py-2 comment d-flex justify-content-around">
          <textarea class="form-control" placeholder="" id="floatingTextarea"></textarea>
          <button class="btn btn-secondary font fs-6  ms-3" type="submit">Submit</button>
        </form>
      </div>
      
      
    </div>
    </div>
  </div>
</din>
<!--Comment=======================-->

<div class="container-xxl py-3 bg2 mb-5 border ">
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