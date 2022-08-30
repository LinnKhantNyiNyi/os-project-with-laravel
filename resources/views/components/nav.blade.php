  <!---------------------------NavBar---------------------------------->
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand text-dark ms-3" href="/"
          >Best Sales</a>

        <button
          class="navbar-toggler bg-light"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="link">
            <ul class="navbar-nav mb-2 mb-lg-0">

               <li class="nav-item">
                <a class="nav-link active mt-2 text-dark" 
                 data-bs-toggle="offcanvas" 
                 href="#category" 
                 role="button" 
                 aria-controls="offcanvasExample"
                >Category</a>
              </li>

              @if(auth()->user() && auth()->user()->is_admin)

                   <li class="nav-item">
                  <a
                  class="nav-link active mt-2 text-dark"
                  aria-current="page"
                  href="/create"
                  >Posts</a
                >
              </li>
              @endif
                 
              @if(auth()->user() && auth()->user()->is_owner)
                    <li class="nav-item">
                <a
                  class="nav-link active mt-2 text-dark"
                  aria-current="page"
                  href="/owner"
                  >Crontrol pannel</a
                >
              </li>
                  
              @endif
               
            @guest
                  
              <li class="nav-item">
                <a class="nav-link active mt-2 text-dark" href="/register"
                  >Register</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active mt-2 text-dark" href="/login"
                  >Login</a
                >
              </li>
                 @endguest
           
              @auth
              <li class="nav-item">
                <a
                  class="nav-link mt-1 active text-dark"
                  data-bs-toggle="offcanvas"
                  href="#offcanvasExample"
                  role="button"
                  aria-controls="offcanvasExample"
                >
                  {{auth()->user()->name}}<img
                    src="/img/blank-profile-picture-973460__340.webp"
                    class="rounded-circle ms-3 mb-1"
                    height="40px"
                    width="40px"
                  />
                </a>
              </li>
              @endauth
               
            </ul>
          </div>
        </div>
      </nav>
    </div>
    
    <x-offcanvas/>
    
