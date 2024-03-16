
<div class="search_homes_wrapper">
    <div class="search_filters mb-2">
        <div class="search_homes_search">
            <form>
                <div class="input-group mt-2">
                    <input type="text" id="search" name="search" class="form-control" placeholder="Search by City" aria-label="Search" aria-describedby="search" wire:model.defer="search" wire:keydown.enter.prevent="$refresh">
                    <button type="submit" class="btn btn-danger" wire:click="search">
                        Search
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="search_homes_list_count">
        <p>Total houses: {{$totalHousesCount}}</p>
    </div>
    <div class="search_homes_cards">
        @if(!empty($houses))
                @foreach ($houses as $house)
                <?php
                    $loremId = rand(1, 100);
                ?>
                
                <div class="search_home_single_card">
                    <a class="search_home_link_wrapper" href="/house?id={{$house->id}}">
                        <div class="search_home_card_image">
                            <img src="https://picsum.photos/id/{{$loremId}}/600/400" class="card-img-top" alt="LoremPicsum placeholder photo for house" onerror="this.src='/images/house-4.jpg';this.onerror=null;">
                        </div>
                        <div class="search_home_card_data">
                            <h5 class="search_home_card_price">${{number_format($house->price)}}</h5>
                            <p class="search_home_card_body"><i class="fa fa-solid fa-bed fa-xs"></i> {{$house->bed}} bed <i class="fa fa-solid fa-bath fa-xs"></i> {{$house->bath}} bath, <i class="fa fa-solid fa-caret-up"></i> {{$house->sqft}} sqft</p>
                            <p class="search_home_card_address">{{$house->street_address}}</p>
                            <p class="search_home_card_state"> {{$house->street_city}}, {{$house->street_state}}</p>
                            {{-- <p>{{responseCode("https://picsum.photos/id/$loremId/600/400")}}</p> --}}
                            {{-- <p class="search_home_card_state">search:{{$house->for_purchase}}, dish:{{$house->dishwasher}}, dis:{{$house->disposal}}, wash:{{$house->washer}}, dryer:{{$house->dryer}}, fri:{{$house->fridge}}, heat:{{$house->heat_cooling}}, gar:{{$house->garage}} </p> --}}
                        </div>
                    </a>
                </div>
                @endforeach
            @endif
    </div>
    <div class="search_homes_cards_pagination mb-4">
        {{$houses->links() }}
    </div>
</div>