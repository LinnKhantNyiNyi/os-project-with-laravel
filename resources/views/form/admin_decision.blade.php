<x-layout>

    <!--------------form-->
    <div class="container  form b mt-5">
        <div class="row">
            <div class=" col col-12 col-md-5">
                <div class="card p-4 my-3 bg2">
                    <form action="/applications/{{$application->id}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label  text-dark">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                name="email" value="{{$application->email}}" required>
                            @error("email")
                            <p class="text-danger">{{$message}}</p>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label  text-dark">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$application->name}}"
                                required>
                            @error("name")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>



                        <div class="mb-3">
                            <label for="name" class="form-label text-dark">Phone Number</label>
                            <input type="text" class="form-control" id="name" name="ph_number"
                                value="{{$application->ph_num}}" required>
                            @error("ph_number")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>



                        <div class="mb-3">
                            <label for="password" class="form-label  text-dark">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                            @error("password")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>


                        <div class="form-check my-3">
                            <input class="form-check-input" type="hidden" name="is_admin" id="flexRadioDefault1"
                                [(ngModel)]="is_admin" value="true">

                        </div>


                        <button type="submit" class="btn btn-primary text-white">Accept</button>
                        <a class="btn btn-danger ms-4" href="/applications/destory/{{$application->id}}">Decline</a>
                    </form>
                </div>
            </div>
            <div class="col col-12 col-md-7 p-4 my-3 border">
                <div class="mb-3">
                    <p>Shop Address : <br> {{$application->shopaddress}}</p>
                </div>
                <div class="mb-3">
                    <p>Shop name : <br> {{$application->shopname}}</p>
                </div>
                <div class="mb-3">
                    <p>Shop detail : <br> {{$application->detail}}</p>
                </div>
            </div>
        </div>
    </div>







    <x-footer />
</x-layout>