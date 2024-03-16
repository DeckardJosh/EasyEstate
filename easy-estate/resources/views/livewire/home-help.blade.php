<div class="help_wrapper">
    <h1 class="help_header">See how Easy Estate can help</h1>
    <div class="help_container">
        <div class="help_item">
            <div class="help_item_image_wrapper">
                <image src="/images/buy.png" class="help_item_image" alt="..."/>
            </div>
            <h3 class="help_item_header">Buy a home</h3>
            <p class="help_item_body">With over 200 home for sale available on the website, Easy Estate can match you with a house you will want to call home.</p>
            <div class="help_item_button_wrapper">
                <a href="/buy" type="button" class="btn btn-success help_item_button">Find a home</a>
            </div>
        </div>
        <div class="help_item">
            <div class="help_item_image_wrapper">
                <image src="/images/rent.png" class="help_item_image" alt="..."/>
            </div>
            <h3 class="help_item_header">Rent a home</h3>
            <p class="help_item_body">With filters and a vast variety, Easy Estate can help you easily find a home or apartment for rent that you'll love.</p>
            <div class="help_item_button_wrapper">
                <a href="/rent" type="button" class="btn btn-success help_item_button">Find a rental</a>
            </div>
        </div>
        <div class="help_item">
            <div class="help_item_image_wrapper">
                <image src="/images/about.png" class="help_item_image" alt="..."/>
            </div>
            <h3 class="help_item_header">About Us</h3>
            <p class="help_item_body">Learn more about us as a business! We are here to help you, and sometimes it takes getting to know us to put your mind at ease!</p>
            <div class="help_item_button_wrapper">
                <a href="/about" type="button" class="btn btn-success help_item_button">Learn more</a>
            </div>
        </div>
    </div>
    <div class="help_search">
        <h4>Check out some houses!</h4>
        <form>
            <div class="input-group mt-2">
                <input type="text" id="search" name="search" class="form-control" placeholder="Search by City" aria-label="Search" aria-describedby="search" wire:model.live="search" wire:keydown.enter.prevent="$refresh">
                <a href="/search?search={{$search}}" class="btn btn-danger" role="button">Search</a>
            </div>
        </form>
    </div>
</div>
