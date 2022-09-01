
<x-layout>
<x-nav/>
<x-table/>
<x-categoryFilter :categories="$categories"/>
<x-create_form :categories="$categories"/>

<div class="container-xxl mb-5">
    <div class="row">
        <div class="col col-12 col-md-5">
            <h3 class="text-center">Admin List</h3>
            <div class="scroll-bg border border-secondary">
                <div class="row scroll-obj">
                    <div class="col col-12">
                        @foreach ($admins as $admin)
                              <div class="card rounded-0 border-0 border-bottom">
                            <div class="card-body">
                                <h5 class="card-title">{{$admin->name}}</h5>
                                     <p class="card-text">{{$admin->shopname}}</p>
                                     <p class="card-text">{{$admin->email}}</p>
                                </div>
                        </div>
                        @endforeach
                
                    </div>
                </div>
            </div>
    </div>
       
    <div class="col col-12 col-md-7">
        <h3 class="text-center">Admin Applications</h3>

            <div class="scroll-bg border border-secondary">
                <div class="row">
                    <div class="col col-12">
                          @foreach ($applications as $application)
                             <div class="card rounded-0 border-0 border-bottom">
                            <a href="/applications/{{$application->id}}" class="text-decoration-none text-dark">
                                <div class="card-body">
                                    <h5 class="card-title">{{$application->name}}</h5>
                                         <p class="card-text mt-1 mb-0">{{$application->shopname}}</p>
                                         <p class="mt-4">{{$application->created_at}}</p>
                                 </div>
                            </a>
                        </div>
                         @endforeach
                
                    </div>
                </div>
            </div>
      </div>
</div>
</div>

<!--user-->
<div class="container-xxl mb-5">
  
       
            <h3 class="text-center">Users List</h3>
            <div class="scroll-bg border border-secondary">
                <div class="row scroll-obj">
                    <div class="col col-12">
                        @foreach ($users as $user)
                              <div class="card rounded-0 border-0 border-bottom">
                            <div class="card-body">
                                <h5 class="card-title">{{$user->name}}</h5>
                                     <p class="card-text">{{$user->email}}</p>
                                </div>
                        </div>
                        @endforeach
                
                    </div>
                </div>
            </div>
    </div>
</x-layout>