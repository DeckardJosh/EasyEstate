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


<div class="buy_homes_wrapper">
    <div class="buy_filters mb-2">
        <div class="buy_dropdowns">
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
        <div class="buy_homes_search">
            <form>
                <div class="input-group mt-2">
                    <input type="text" id="search" name="search" class="form-control" placeholder="Search by City" aria-label="Search" aria-describedby="search" wire:model.live="search" wire:keydown.enter.prevent="$refresh">
                    <a href="/search?search={{$search}}" class="btn btn-danger" role="button">Search</a>
                </div>
            </form>
        </div>
    </div>
    <div class="buy_homes_list_count">
        <p>Total houses: {{$totalHousesCount}}</p>
    </div>
    <div class="buy_homes_cards">
        @if(!empty($houses))
                @foreach ($houses as $house)
                <?php
                    $loremId = rand(1, 100);
                ?>
                
                <div class="buy_home_single_card">
                    {{-- href="{{ route('house', $house->id) }}" --}}
                    <a class="buy_home_link_wrapper" href="/house?id={{$house->id}}">
                        <div class="buy_home_card_image">
                            <img src="https://picsum.photos/id/{{$loremId}}/600/400" class="card-img-top" alt="LoremPicsum placeholder photo for house" onerror="this.src='/images/house-4.jpg';this.onerror=null;">
                        </div>
                        <div class="buy_home_card_data">
                            <h5 class="buy_home_card_price">${{number_format($house->price)}}</h5>
                            <p class="buy_home_card_body"><i class="fa fa-solid fa-bed fa-xs"></i> {{$house->bed}} bed <i class="fa fa-solid fa-bath fa-xs"></i> {{$house->bath}} bath, <i class="fa fa-solid fa-caret-up"></i> {{$house->sqft}} sqft</p>
                            <p class="buy_home_card_address">{{$house->street_address}}</p>
                            <p class="buy_home_card_state"> {{$house->street_city}}, {{$house->street_state}}</p>
                            {{-- <p>{{responseCode("https://picsum.photos/id/$loremId/600/400")}}</p> --}}
                            {{-- <p class="buy_home_card_state"> dish:{{$house->dishwasher}}, dis:{{$house->disposal}}, wash:{{$house->washer}}, dryer:{{$house->dryer}}, fri:{{$house->fridge}}, heat:{{$house->heat_cooling}}, gar:{{$house->garage}} </p> --}}
                        </div>
                    </a>
                </div>
                @endforeach
            @endif
            @if(count($houses) < 1)
                <div class="no_house_error">
                    <h1>Were Sorry!</h1>
                    <p>We dont have any houses that match your search results. Please try again later, or update your filter preferences.</p>
                </div>
            @endif
    </div>
    <div class="buy_homes_cards_pagination mb-4">
        {{$houses->links() }}
    </div>
</div>