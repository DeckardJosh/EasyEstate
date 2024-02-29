<?php
    //Going to need to loop though a set number of homes here
?>

<div class="recent_house_wrapper">
    <h1 class="recent_house_header">Newly listed homes</h1>

    <div class="recent_houses">
    {{-- Looping through recent database records, sorted by ID desc --}}
            @if(!empty($houses))
                @foreach ($houses as $house)
                <?php
                    $loremId = rand(1, 100)
                ?>

                    <div class="card recent_houses_card" style="width: 16rem;">
                        <a class="card_link_wrapper" href="#">
                            <img src="https://picsum.photos/id/{{$loremId}}/150/100" class="card-img-top" alt="LoremPicsum placeholder photo for house">
                            <div class="card-body">
                                <h5 class="card-title recent_house_card_header">${{number_format($house->price)}}</h5>
                                <p class="card-text recent_house_body">{{$house->bed}} bed {{$house->bath}} bath, {{$house->sqft}} sqft,<br>{{$house->street_address}}<br> {{$house->street_city}}, {{$house->street_state}}</p>
                            </div>
                        </a>
                    </div>

                @endforeach
            @endif

            <div class="card recent_houses_card" style="width: 16rem;">
                <a href="#">
                    <img src="/images/view-more.jpg" class="card-img-top" alt="View More">
                </a>
            </div>
    </div>

    {{-- <ul>
        @foreach ($houses as $house)
        <li>{{$house->street_address}}</li>
        @endforeach
    </ul> --}}
</div>
