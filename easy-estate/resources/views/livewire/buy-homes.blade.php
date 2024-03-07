<div class="buy_homes_wrapper">
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
    <div class="buy_homes_filters">
        <div class="buy_filter">
            1
        </div>
        <div class="buy_filter">
            1
        </div>
        <div class="buy_filter">
            1
        </div>
        <div class="buy_filter">
            1
        </div>
        <div class="buy_filter">
            1
        </div>
        <div class="buy_filter">
            1
        </div>
    </div>
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

    <div class="check_test">
        <div class="buy_homes_check_section">
            <h5 class="buy_homes_check_section_header">Beds</h5>
            {{-- <label>
                <input type="checkbox" value="one" wire:model="bedsSelectedValue"/>
                One
            </label>
            <label>
                <input type="checkbox" value="two" wire:model="bedsSelectedValue"/>
                Two
            </label>
            <label>
                <input type="checkbox" value="three" wire:model="bedsSelectedValue"/>
                Three
            </label>
            <label>
                <input type="checkbox" value="four" wire:model="bedsSelectedValue"/>
                Four
            </label>
            <label>
                <input type="checkbox" value="five" wire:model="bedsSelectedValue"/>
                Five
            </label> --}}

            <input type="checkbox" value="one" wire:model="bedsSelectedValue"/> One
            <input type="checkbox" value="two" wire:model="bedsSelectedValue"/> Two
            <input type="checkbox" value="three" wire:model="bedsSelectedValue"/> Three
            <input type="checkbox" value="four" wire:model="bedsSelectedValue"/> Four
            <input type="checkbox" value="five" wire:model="bedsSelectedValue"/> Five

            @foreach ($bedsSelectedValue as $value)
                <p>{{$value}}</p>
            @endforeach
            {{-- <div class="form-check">
                <input wire:model="bedsCheck" class="form-check-input" type="checkbox" value="1" id="bedsCheckOne">
                <label class="form-check-label" for="bedsCheckOne">
                    1
                </label>
              </div>
              <div class="form-check">
                <input wire:model="bedsCheck" class="form-check-input" type="checkbox" value="2" id="bedsCheckTwo">
                <label class="form-check-label" for="bedsCheckTwo">
                    2
                </label>
              </div>
              <div class="form-check">
                <input wire:model="bedsCheck" class="form-check-input" type="checkbox" value="3" id="bedsCheckThree">
                <label class="form-check-label" for="bedsCheckThree">
                    3
                </label>
              </div>
              <div class="form-check">
                <input wire:model="bedsCheck" class="form-check-input" type="checkbox" value="4" id="bedsCheckFour">
                <label class="form-check-label" for="bedsCheckFour">
                    4
                </label>
              </div>
              <div class="form-check">
                <input wire:model="bedsCheck" class="form-check-input" type="checkbox" value="5" id="bedsCheckFive">
                <label class="form-check-label" for="bedsCheckFive">
                    5
                </label>
              </div> --}}
        </div>

        {{-- checks: {{var_export($bedsCheck)}} --}}


        {{-- <div class="buy_homes_radio_section">
            <h5 class="buy_homes_radio_section_header">Beds</h5>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    1
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                <label class="form-check-label" for="defaultCheck2">
                    2
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                <label class="form-check-label" for="defaultCheck2">
                    3
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                <label class="form-check-label" for="defaultCheck2">
                    4
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                <label class="form-check-label" for="defaultCheck2">
                    5
                </label>
              </div>
        </div> --}}
    </div>
</div>
