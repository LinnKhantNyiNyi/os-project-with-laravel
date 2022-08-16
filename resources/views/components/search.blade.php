<!--Search Bar-------------->

    <div class="container-xxl bg filter">
      <div class="d-flex justify-content-center">
        <form class="d-flex search py-4 input-group" role="search">
          <input
            name="search"
            type="text"
            class="form-control me-2 font shadow"
            placeholder="Search"
            aria-label=" "
            aria-describedby="button-addon2"
            value="{{request('search')}}"
          />
          <button
            class="btn btn-secondary font shadow"
            type="submit"
            id="button-addon2"
          >
            Search
          </button>
        </form>
      </div>
    </div>