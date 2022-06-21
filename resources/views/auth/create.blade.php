<x-layout>
  <x-nav/>
       <!--posttable-->
    <div class="container-xxl">
      <h2 class="text-center my-3">All Product posts you've created are here.</h2>
     
        <table class="table mx-auto">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col"> Name</th>
              <th scope="col">Category</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td >Blue necklace</td>
              <td >Necklace</td>
              <td><form action=""><button class="btn btn-warning " type="submit">Edit</button></form></td>
              <td><form action=""><button class="btn btn-danger" type="submit">Delete</button></form></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td >Red necklace</td>
              <td >Necklace</td>
              <td><form action=""><button class="btn btn-warning " type="submit">Edit</button></form></td>
              <td><form action=""><button class="btn btn-danger" type="submit">Delete</button></form></td>
            </tr>
          </tbody>
        </table>
<!--Create Post---------------->

 <h2 class="text-center mt-5">Create Product posts here.</h2>
        <div class="container my-4 form">
          <div class="row">
              <div class=" col-md-8 mx-auto">
                  <div class="card p-4 my-3 bg2">
                      <form>
          
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label font text-dark">Product Name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          
                          </div>
                          <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label font text-dark">Price</label>
                              <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                             <label for="formFile" class="form-label font text-dark">Choose 3 photos here I will make it avaiable more in future:(</label>
                              <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="mb-3">
                              
                              <input class="form-control" type="file" >
                            </div>
                            <div class="mb-3">
                              <input class="form-control" type="file">
                            </div>
                            <div class=" mb-3">
                              <select class="form-select">
                                <option selected>Choose Category..</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                            </div>
                          <button type="submit" class="btn btn-outline-secondary font text-dark">Post</button>
                        </form>
                  </div>
              </div>
          </div>
       </div>
      </div>
     
  <x-footer/>
</x-layout>