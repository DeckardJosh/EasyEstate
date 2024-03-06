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
                    <div class="buy_home_card_image">
                        <img src="https://picsum.photos/id/{{$loremId}}/600/400" class="card-img-top" alt="LoremPicsum placeholder photo for house">
                    </div>
                    <div class="buy_home_card_data">
                        <h5 class="buy_home_card_price">${{number_format($house->price)}}</h5>
                        <p class="buy_home_card_body"><i class="fa fa-solid fa-bed fa-xs"></i> {{$house->bed}} bed <i class="fa fa-solid fa-bath fa-xs"></i> {{$house->bath}} bath, <i class="fa fa-solid fa-caret-up"></i> {{$house->sqft}} sqft</p>
                        <p class="buy_home_card_address">{{$house->street_address}}</p>
                        <p class="buy_home_card_state"> {{$house->street_city}}, {{$house->street_state}}</p>
                    </div>
                </div>
                @endforeach
                <div class="buy_homes_cards_pagination">
                    {{$houses->links() }}
                </div>
            @endif
    </div>
</div>
