
<x-layout>
<x-nav/>
<x-table/>
<x-create_form/>

<div class="container-xxl mb-5">
    <div class="row">
        <div class="col col-12 col-md-5">
            <h3 class="text-center">Admin List</h3>
            <div class="row">
                <div class="col col-12">
                    @foreach ($admins as $admin)
                          <div class="card mb-2">
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
       
    <div class="col col-12 col-md-7">
            <div class="row">
                <div class="col col-12">
                     <h3 class="text-center">Admin Applications</h3>
                     @foreach ($applications as $application)
                         <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title">{{$application->name}}</h5>
                                 <p class="card-text mt-1 mb-0">{{$application->shopname}}</p>
                                 <p class="mt-4">{{$application->created_at}}</p>
                         </div>
                    </div>
                     @endforeach
                    
                </div>
       </div>
</div>
</x-layout>