<!--category-->
  



<div
      class="offcanvas offcanvas-start"
      tabindex="-1"
      id="category"
      aria-labelledby="offcanvasExampleLabel"
    >
      <div class="offcanvas-header">
        <h5 class="offcanvas-title font fs-1" id="offcanvasExampleLabel">
          Categories
        </h5>
</div>

    
@foreach ($categories as $category)
<a href="/?category={{$category->name}}" class="text-decoration-none text-dark">
     <div class="border-bottom border-secondary p-3 font">
          {{$category->name}}
         </div>
</a>
@endforeach
        


      </div>
    </div>