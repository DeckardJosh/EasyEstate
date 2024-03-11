<div class="house_preview_wrapper">
    {{-- @if(!empty($houses))
        @foreach ($houses as $house)
            {{$house->id}}
        @endforeach
    @endif --}}
    {{-- <h1>{{ $house->title }}</h1> --}}

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
                <h1 class="main_house_content_header">1111 East 11th Ave.</h1>
                <h4 class="main_house_content_subheader">Seattle Wa</h4>
                <p class="main_house_content_owner">by Easy Estate</p>
                <i class="fa fa-solid fa-bed fa-xs"></i> 2 bed <i class="fa fa-solid fa-bath fa-xs"></i> 2 bath, <i class="fa fa-solid fa-caret-up"></i> 1100 sqft</p>
            </div>
            <div class="main_house_content_right">
                <h3 class="main_house_content_price">99.999+</h3>
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
                    <textarea class="form-control contact_textarea" id="exampleFormControlTextarea1" rows="3">I am interested in 1111 East 11th Ave.</textarea>
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
                    <span>Parking:</span>&nbsp;<span>Garage</span>
                </div>
                <div class="home_highlights_row">
                    <span>Outdoor:</span>&nbsp;<span>No Info</span>
                </div>
                <div class="home_highlights_row">
                    <span>A/C:</span>&nbsp;<span>Heat & Cooling</span>
                </div>
            </div>
            <div class="home_highlights_column">
                <div class="home_highlights_row">
                    <span>HOA:</span>&nbsp;<span>None</span>
                </div>
                <div class="home_highlights_row">
                    <span>Listed:</span>&nbsp;<span>10 days ago</span>
                </div>
            </div>
        </div>
    </div>
</div>
