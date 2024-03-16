<?php
    //probbaly going to need to grab value from search box for routing and query
?>

<div class="hero_wrapper">
    <div class="hero_content">
        <h1 class="hero_header">Discover a place you'll love to live</h1>
        <div class="hero_buttons">
            <a href="/buy" type="button" class="btn-secondary">Buy</a>
            <a href="/rent" type="button" class="btn-secondary">Rent</a>
        </div>
        <div class="hero_search">
            <form>
                <div class="input-group mt-2">
                    <input type="text" id="search" name="search" class="form-control" placeholder="Search by City" aria-label="Search" aria-describedby="search" wire:model.live="search" wire:keydown.enter.prevent="$refresh">
                    <a href="/search?search={{$search}}" class="btn btn-danger" role="button">Search</a>
                </div>
            </form>
        </div>
    </div>
</div>
