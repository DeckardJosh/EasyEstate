<div class="buy_homes_wrapper">
    <div class="buy_filters">
        <div class="buy_dropdowns">
            <div class="dropdown dropdown_beds">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Beds
                </button>
                <ul class="dropdown-menu">
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="bedsSelectedValue" type="checkbox" value="1"/> One
                    </label>
                  </li>
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="bedsSelectedValue" type="checkbox" value="2"/> Two
                    </label>
                  </li>
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="bedsSelectedValue" type="checkbox" value="3"/> Three
                    </label>
                  </li>
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="bedsSelectedValue" type="checkbox" value="4"/> Four
                    </label>
                  </li>
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="bedsSelectedValue" type="checkbox" value="5"/> Five
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
                        <input wire:model.live="bathsSelectedValue" type="checkbox" value="1"/> One
                    </label>
                  </li>
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="bathsSelectedValue" type="checkbox" value="2"/> Two
                    </label>
                  </li>
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="bathsSelectedValue" type="checkbox" value="3"/> Three
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
                        <input wire:model.live="storiesSelectedValue" type="checkbox" value="1"/> One
                    </label>
                  </li>
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="storiesSelectedValue" type="checkbox" value="2"/> Two
                    </label>
                  </li>
                  <li class="dropdown_menu_item">
                    <label>
                        <input wire:model.live="storiesSelectedValue" type="checkbox" value="3"/> Three
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
        </div>
        <div class="buy_homes_search">
            <form method="POST" action="#">
                <div class="input-group mt-3">
                    <input type="text" class="form-control" placeholder="Search by State or City" aria-label="Search" aria-describedby="search">
                    <button type="button" class="btn btn-danger">
                        Search
                    </button>
                </div>
            </form>
        </div>
        {{-- <div class="test_value">
            Beds: {{var_export($bedsSelectedValue)}}
            Baths: {{var_export($bathsSelectedValue)}}
            Stories: {{var_export($storiesSelectedValue)}}
            Utilities: {{var_export($utilitiesSelectedValue)}}
        </div> --}}
    </div>
    {{-- <div class="btn btn-secondary filter_dropdown_button">Filters
        <div class="filter_dropdown">
            <form method="GET" action="/buy" class="buy_homes_filters">
                <div class="buy_homes_check_section">
                    <h5 class="buy_homes_check_section_header">Beds</h5>
                    <label>
                        <input wire:model="bedsSelectedValue" type="checkbox" value="one"/> One
                    </label>
                    <label>
                        <input wire:model="bedsSelectedValue" type="checkbox" value="two"/> Two
                    </label>
                    <label>
                        <input wire:model="bedsSelectedValue" type="checkbox" value="three"/> Three
                    </label>
                    <label>
                        <input wire:model="bedsSelectedValue" type="checkbox" value="four"/> Four
                    </label>
                    <label>
                        <input wire:model="bedsSelectedValue" type="checkbox" value="five"/> Five
                    </label>
        
                </div>
                <div class="buy_homes_check_section">
                    <h5 class="buy_homes_check_section_header">Baths</h5>
                    <label>
                        <input wire:model="bathsSelectedValue" type="checkbox" value="one"/> One
                    </label>
                    <label>
                        <input wire:model="bathsSelectedValue" type="checkbox" value="two"/> Two
                    </label>
                    <label>
                        <input wire:model="bathsSelectedValue" type="checkbox" value="three"/> Three
                    </label>
                </div>
                <div class="buy_homes_check_section">
                    <h5 class="buy_homes_check_section_header">Stories</h5>
                    <label>
                        <input wire:model="storiesSelectedValue" type="checkbox" value="one"/> One
                    </label>
                    <label>
                        <input wire:model="storiesSelectedValue" type="checkbox" value="two"/> Two
                    </label>
                    <label>
                        <input wire:model="storiesSelectedValue" type="checkbox" value="three"/> Three
                    </label>
                </div>
                <div class="buy_homes_check_section">
                    <h5 class="buy_homes_check_section_header">Utilities</h5>
                    <label>
                        <input wire:model="utilitiesSelectedValue" type="checkbox" value="dishwasher"/> Dishwasher
                    </label>
                    <label>
                        <input wire:model="utilitiesSelectedValue" type="checkbox" value="disposal"/> Disposal
                    </label>
                    <label>
                        <input wire:model="utilitiesSelectedValue" type="checkbox" value="washer"/> Washer
                    </label>
                    <label>
                        <input wire:model="utilitiesSelectedValue" type="checkbox" value="dryer"/> Dryer
                    </label>
                    <label>
                        <input wire:model="utilitiesSelectedValue" type="checkbox" value="fridge"/> Fridge
                    </label>
                    <label>
                        <input wire:model="utilitiesSelectedValue" type="checkbox" value="garage"/> Garage
                    </label>
                    <label>
                        <input wire:model="utilitiesSelectedValue" type="checkbox" value="heat-cooling"/> Heat/Cooling
                    </label>
                </div>
                <div class="buy_homes_check_section">
                <input type="submit" class="btn btn-danger" value="Update Filters"/>
                </div>
            </form>
        </div>
    </div> --}}

    <div class="buy_homes_cards">
        @if(!empty($houses))
                @foreach ($houses as $house)
                <?php
                    $loremId = rand(1, 100)
                ?>
                <div class="buy_home_single_card">
                    <a class="buy_home_link_wrapper" href="#">
                        <div class="buy_home_card_image">
                            <img src="https://picsum.photos/id/{{$loremId}}/600/400" class="card-img-top" alt="LoremPicsum placeholder photo for house">
                        </div>
                        <div class="buy_home_card_data">
                            <h5 class="buy_home_card_price">${{number_format($house->price)}}</h5>
                            <p class="buy_home_card_body"><i class="fa fa-solid fa-bed fa-xs"></i> {{$house->bed}} bed <i class="fa fa-solid fa-bath fa-xs"></i> {{$house->bath}} bath, <i class="fa fa-solid fa-caret-up"></i> {{$house->sqft}} sqft</p>
                            <p class="buy_home_card_address">{{$house->street_address}}</p>
                            <p class="buy_home_card_state"> {{$house->street_city}}, {{$house->street_state}}</p>
                        </div>
                    </a>
                </div>
                @endforeach
                <div class="buy_homes_cards_pagination">
                    {{$houses->links() }}
                </div>
            @endif
    </div>
</div>

                {{-- <input wire:model="bedsSelectedValue" type="checkbox" value="one"/> One
                <input wire:model="bedsSelectedValue" type="checkbox" value="two"/> Two
                <input wire:model="bedsSelectedValue" type="checkbox" value="three"/> Three
                <input wire:model="bedsSelectedValue" type="checkbox" value="four"/> Four
                <input wire:model="bedsSelectedValue" type="checkbox" value="five"/> Five --}}