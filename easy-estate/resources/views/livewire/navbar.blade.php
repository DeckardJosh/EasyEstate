<?php
 function () { alert("Welcome"); } 

?> 

<div>
    <nav class="nav_wrapper">
        <div class="nav_left_selection">
            <a href="/" class="nav_link_logo">
                <img src="{{asset('images/easy-estate-logo.png')}}" class="nav_logo"/>
            </a>
            <a href="/buy" class="nav_link_item">
                <div class="nav_item">
                    Buy
                </div>
            </a>
            <a href="/rent" class="nav_link_item">
                <div class="nav_item">
                    Rent
                </div>
            </a>
            <a href="/about" class="nav_link_item">
                <div class="nav_item">
                    About
                </div>
            </a>
        </div>
        <div class="nav_right_selection">
            {{-- <a href="#" class="nav_link_item">
                <div class="nav_item">
                    Saved Homes
                </div>
            </a>
            <a href="#" class="nav_link_item">
                <div class="nav_item">
                    Saved Searches
                </div>
            </a> --}}
            <a onclick="popupDisabled()" href="#" class="nav_link_item">
                <div class="nav_item nav_login">
                    Sign up or Log in
                </div>
            </a>
            <a onclick="popupDisabled()" href="#" class="nav_link_item">
                <div class="navHam"><i class="fa fa-solid fa-bars"></i></div>
            </a>
        </div>
    </nav>
</div>
