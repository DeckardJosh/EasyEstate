{{--
    function responseCode($url){
    $headers = get_headers($url, 1);

    $responseCode = $headers[0]; // This will contain something like "HTTP/1.1 200 OK"

    // Extracting the response code from the string
    preg_match("/\d{3}/", $responseCode, $matches);
    $responseCode = $matches[0];
        if ($responseCode == '404'){
            return false;
        } else{
            return true;
        }
    }
--}}


<div class="rent_homes_wrapper">
    <div class="rent_filters mb-2">
        <div class="rent_dropdowns">
            <div class="dropdown dropdown_beds">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Beds
                </button>
                <ul class="dropdown-menu">
                    <li class="dropdown_menu_item">
                        <label>
                            <input wire:model.live="bedsSelectedValue" type="radio" value="any"/> Any
                        </label>
                    </li>
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="bedsSelectedValue" type="radio" value="1" /> One
                    </label>
                  </li>
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="bedsSelectedValue" type="radio" value="2" /> Two
                    </label>
                  </li>
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="bedsSelectedValue" type="radio" value="3" /> Three
                    </label>
                  </li>
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="bedsSelectedValue" type="radio" value="4" /> Four
                    </label>
                  </li>
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="bedsSelectedValue" type="radio" value="5" /> Five
                    </label>
                  </li>
                </ul>
            </div>
            <div class="dropdown dropdown_baths">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Baths
                </button>
                <ul class="dropdown-menu">
                    <li class="dropdown_menu_item">
                        <label>
                            <input wire:model.live="bathsSelectedValue" type="radio" value="any"/> Any
                        </label>
                    </li>
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="bathsSelectedValue" type="radio" value="1"/> One
                    </label>
                  </li>
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="bathsSelectedValue" type="radio" value="2"/> Two
                    </label>
                  </li>
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="bathsSelectedValue" type="radio" value="3"/> Three
                    </label>
                  </li>
                </ul>
            </div>
            <div class="dropdown dropdown_stories">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Stories
                </button>
                <ul class="dropdown-menu">
                    <li class="dropdown_menu_item">
                        <label>
                            <input wire:model.live="storiesSelectedValue" type="radio" value="any"/> Any
                        </label>
                      </li>
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="storiesSelectedValue" type="radio" value="1"/> One
                    </label>
                  </li>
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="storiesSelectedValue" type="radio" value="2"/> Two
                    </label>
                  </li>
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="storiesSelectedValue" type="radio" value="3"/> Three
                    </label>
                  </li>
                </ul>
            </div>
            <div class="dropdown dropdown_utilities">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Utilities
                </button>
                <ul class="dropdown-menu">
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="utilitiesSelectedValue" type="checkbox" value="dishwasher"/> Dishwasher
                    </label>
                  </li>
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="utilitiesSelectedValue" type="checkbox" value="disposal"/> Disposal
                    </label>
                  </li>
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="utilitiesSelectedValue" type="checkbox" value="washer"/> Washer
                    </label>
                  </li>
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="utilitiesSelectedValue" type="checkbox" value="dryer"/> Dryer
                    </label>
                  </li>
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="utilitiesSelectedValue" type="checkbox" value="fridge"/> Fridge
                    </label>
                  </li>
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="utilitiesSelectedValue" type="checkbox" value="garage"/> Garage
                    </label>
                  </li>
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="utilitiesSelectedValue" type="checkbox" value="heat_cooling"/> Heat/Cooling
                    </label>
                  </li>
                </ul>
            </div>
            <button wire:click.live="filterClear" class="btn btn-danger filter_clear">Clear</button>
        </div>
        <div class="rent_homes_search">
            <form method="POST" action="#">
                <div class="input-group mt-2">
                    <input type="text" class="form-control" placeholder="Search by State or City" aria-label="Search" aria-describedby="search">
                    <button type="button" class="btn btn-danger">
                        Search
                    </button>
                </div>
            </form>
        </div>
        {{-- <div class="test_value">
            Beds: {{($bedsSelectedValue)}}
            Baths: {{($bathsSelectedValue)}}
            Stories: {{($storiesSelectedValue)}}
            Utilities: {{var_export($utilitiesSelectedValue)}}
        </div> --}}
    </div>
    <div class="rent_homes_list_count">
        <p>Total houses: {{$totalHousesCount}}</p>
    </div>
    <div class="rent_homes_cards">
        @if(!empty($houses))
                @foreach ($houses as $house)
                <?php
                    $loremId = rand(1, 100);
                ?>
                
                <div class="rent_home_single_card">
                    <a class="rent_home_link_wrapper" href="#">
                        <div class="rent_home_card_image">
                            <img src="https://picsum.photos/id/{{$loremId}}/600/400" class="card-img-top" alt="LoremPicsum placeholder photo for house">
                        </div>
                        <div class="rent_home_card_data">
                            <h5 class="rent_home_card_price">${{number_format($house->price)}}</h5>
                            <p class="rent_home_card_body"><i class="fa fa-solid fa-bed fa-xs"></i> {{$house->bed}} bed <i class="fa fa-solid fa-bath fa-xs"></i> {{$house->bath}} bath, <i class="fa fa-solid fa-caret-up"></i> {{$house->sqft}} sqft</p>
                            <p class="rent_home_card_address">{{$house->street_address}}</p>
                            <p class="rent_home_card_state"> {{$house->street_city}}, {{$house->street_state}}</p>
                            {{-- <p>{{responseCode("https://picsum.photos/id/$loremId/600/400")}}</p> --}}
                            {{-- <p class="rent_home_card_state">rent:{{$house->for_purchase}}, dish:{{$house->dishwasher}}, dis:{{$house->disposal}}, wash:{{$house->washer}}, dryer:{{$house->dryer}}, fri:{{$house->fridge}}, heat:{{$house->heat_cooling}}, gar:{{$house->garage}} </p> --}}
                        </div>
                    </a>
                </div>
                @endforeach
            @endif
    </div>
    <div class="rent_homes_cards_pagination mb-4">
        {{$houses->links() }}
    </div>
</div>