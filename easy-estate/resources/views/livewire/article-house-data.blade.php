<?php
    //Going to need to loop though a set number of homes here
?>

<div class="recent_house_wrapper">
    <h1 class="recent_house_header">Newly listed Homes</h1>

    <button type="button" class="left_button" id="slideLeft"> <i class="fa fa-angle-left"></i></button>
    <button type="button" class="right_button" id="slideRight"><i class="fa fa-angle-right"></i></button>
    <div class="recent_houses" id="recent_houses_container_id">
    {{-- Looping through recent database records, sorted by ID desc --}}
            @if(!empty($houses))
                @foreach ($houses as $house)
                <?php
                    $loremId = rand(1, 100)
                ?>
                    <div class="card recent_houses_card" style="width: 16rem;">
                        <a class="card_link_wrapper" href="/house?id={{$house->id}}">
                            <img src="https://picsum.photos/id/{{$loremId}}/150/100" class="card-img-top" alt="LoremPicsum placeholder photo for house" onerror="this.src='/images/house-4.jpg';this.onerror=null;">
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
</div>
