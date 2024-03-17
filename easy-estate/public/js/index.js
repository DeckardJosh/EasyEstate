
document.addEventListener("DOMContentLoaded", function () {
    if (window.location.pathname === '/') {
        const buttonRight = document.getElementById("slideRight");
        const buttonLeft = document.getElementById("slideLeft");

        buttonRight.onclick = function () {
            document.getElementById("recent_houses_container_id").scrollLeft += 400;
        };
        buttonLeft.onclick = function () {
            document.getElementById("recent_houses_container_id").scrollLeft -= 400;
        };
    }
});

document.addEventListener('DOMContentLoaded', function() {
    var currentUrl = window.location.pathname; // Get the current URL path
    // Select all navigation links
    var navLinks = document.querySelectorAll('.nav_link_item');
    // Loop through each navigation link
    navLinks.forEach(function(navLink) {
        // Get the href attribute of the link
        var href = navLink.getAttribute('href');
        // Check if the current URL matches the href attribute
        if (currentUrl === href) {
            // Add the active class to the parent element of the navigation item
            navLink.classList.add('active');
        }
    });
});

function popupDisabled(){
alert("This feature is currently disabled.");
}
document.addEventListener('livewire:load', function () {
    Livewire.on('redirect-to-search', ({ search }) => {
        window.location.href = '/search?search=' + encodeURIComponent(search);
    });
});