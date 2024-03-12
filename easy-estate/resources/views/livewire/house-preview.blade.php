<div class="house_preview_wrapper">
    <div class="house_image_wrapper">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner carousel_wrapper">
              <div class="carousel-item active">
                <img src="/images/house-1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/images/house-2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/images/house-3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>

    <div class="main_house_content_full">
        <div class="main_house_content">
            <div class="main_house_content_left">
                <h1 class="main_house_content_header">{{$house->street_address}}</h1>
                <h4 class="main_house_content_subheader">{{$house->street_city}}, {{$house->street_state}}</h4>
                <p class="main_house_content_owner">by Easy Estate</p>
                <i class="fa fa-solid fa-bed fa-xs"></i> {{$house->bed}} bed <i class="fa fa-solid fa-bath fa-xs"></i> {{$house->bath}} bath, <i class="fa fa-solid fa-caret-up"></i> {{$house->sqft}} sqft</p>
            </div>
            <div class="main_house_content_right">
                <h3 class="main_house_content_price">{{$house->price}}+</h3>
            </div>
            <div class="main_house_content_description">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid aut eaque eligendi sit! Incidunt culpa accusantium labore ipsam reprehenderit? Facilis ab fugiat delectus quaerat minima eveniet excepturi vel laudantium quasi?</p>
            </div>
        </div>
        <div class="contact">
            <form action="#">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control contact_textarea" id="exampleFormControlTextarea1" rows="3">I am interested in {{$house->street_address}}.</textarea>
                  </div>
                <button class="btn btn-primary">Request Information</button>
            </form>
        </div>
    </div>

    <div class="highlights_wrapper">
        <h3>Home Highlights</h3>
        <div class="home_highlights">
            <div class="home_highlights_column">
                <div class="home_highlights_row">
                    {{-- NEED TO FORMAT THIS --}}
                    <span>Parking:</span>&nbsp;<span>{{$house->garage}}</span>
                </div>
                <div class="home_highlights_row">
                    {{-- NEED TO CHANGE THIS --}}
                    <span>Outdoor:</span>&nbsp;<span>No Info.</span>
                </div>
                <div class="home_highlights_row">
                    {{-- NEED TO FORMAT THIS --}}
                    <span>A/C:</span>&nbsp;<span>{{$house->heat_cooling}}</span>
                </div>
            </div>
            <div class="home_highlights_column">
                <div class="home_highlights_row">
                    {{-- NEED TO CHANGE THIS --}}
                    <span>HOA:</span>&nbsp;<span>None.</span>
                </div>
                <div class="home_highlights_row">
                    {{-- NEED TO FORMAT THIS --}}
                    <span>Listed:</span>&nbsp;<span>{{$house->created_at}}</span>
                </div>
            </div>
        </div>
    </div>
</div>
