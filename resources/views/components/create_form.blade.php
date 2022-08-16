<!--Create Post---------------->
 <h2 class="text-center mt-5">Create Product posts here.</h2>
        <div class="container my-4 form">
          <div class="row">
              <div class=" col-md-8 mx-auto">
                  <div class="card p-4 my-3 bg2">
                      <form 
                      enctype="multipart/form-data"
                      action="/create" 
                      method="POST"
                      >
                      @csrf
          
                          <div class="mb-3">
                            <label for="name" class="form-label font text-dark">Product Name</label>
                            <input type="name" class="form-control" id="name" aria-describedby="email" name="name">
                              @error('name')
                           <p class="text-danger">{{$message}}</p> 
                        @enderror
                          </div>
                          <div class="mb-3">
                              <label for="`price" class="form-label font text-dark">Price</label>
                              <input type="text" class="form-control" id="price" name="price">
                               @error('price')
                           <p class="text-danger">{{$message}}</p> 
                        @enderror
                            </div>

              <!--------------file upload---------------------------------------------->
                            <div class="mb-3">
                             <label for="formFile" class="form-label font text-dark">Choose 3 photos here I will make it avaiable more in future:(</label>
                              <input class="form-control" type="file" id="formFile" name="photo_1">
                            </div>

                            <div class="mb-3">
                              <input class="form-control" type="file" id="formFile" name="photo_2">
                            </div>

                             <div class="mb-3">
                              <input class="form-control" type="file" id="formFile" name="photo_3">
                            </div>

                        
                    
                <!-----------------------------option--------------------------->

                  <div class="mb-3">
                    <label for="category" class="mb-2 mt-3">Choose Category of Your Product</label>
                             <select
                        name="category_id"
                        id="category"
                        class="form-control"
                    >
                        @foreach ($categories as $category)
                        <option {{$category->id==old('category_id') ? 'selected':''}}
                            value="{{$category->id}}">{{$category->name}}
                        </option>
                        @endforeach
                    </select>
                </div>
                            
                             
                
                          <button type="submit" class="btn btn-outline-secondary font text-dark">Post</button>
                        </form>
                  </div>
              </div>
          </div>
       </div>
      </div>