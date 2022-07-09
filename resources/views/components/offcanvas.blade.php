<!--offcanvas------------>
<div
      class="offcanvas offcanvas-start"
      tabindex="-1"
      id="offcanvasExample"
      aria-labelledby="offcanvasExampleLabel"
    >
      <div class="offcanvas-header">
        <h5 class="offcanvas-title font fs-1" id="offcanvasExampleLabel">
          Name
        </h5>

        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
      </div>

      <div class="offcanvas-body">
        <div class="border-top border-bottom border-secondary p-3">
          <button
            class="history btn border-0 text-start font"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#multiCollapseExample2"
            aria-expanded="false"
            aria-controls="multiCollapseExample2"
          >
            History
          </button>
        </div>
        <div class="row">
          <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
              <div class="mt-1 p-2 border-bottom border-secondary font">
                Purchase item name
              </div>
            </div>
          </div>
        </div>

        <div class="border-bottom border-secondary p-3">
          <form action="/logout" method="POST">
            @csrf
            <button class="history btn border-0 text-start font" type="submit">
            Log out
          </button>
          </form>
         
        </div>
      </div>
    </div>