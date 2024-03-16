// document.addEventListener("DOMContentLoaded", function () {
//     var scrollRightBtn = document.getElementById("scrollRightButton");
//     var scrollLeftBtn = document.getElementById("scrollLeftButton")
//     var scrollableContainer = document.getElementById(
//         "recent_houses_container_id"
//     );

//     if (scrollRightBtn && scrollLeftBtn && scrollableContainer) {
//         function scrollContainer(scrollableContainer, direction, amount) {
//             var container = document.getElementById(scrollableContainer);
//             var newScrollLeft;
//             if (direction === 'left') {
//                 newScrollLeft = container.scrollLeft - amount;
//             } else {
//                 newScrollLeft = container.scrollLeft + amount;
//             }
//             container.scrollLeft = newScrollLeft;
//         }
//     };
// });

document.addEventListener("DOMContentLoaded", function () {
    const buttonRight = document.getElementById("slideRight");
    const buttonLeft = document.getElementById("slideLeft");

    buttonRight.onclick = function () {
        document.getElementById("recent_houses_container_id").scrollLeft += 400;
    };
    buttonLeft.onclick = function () {
        document.getElementById("recent_houses_container_id").scrollLeft -= 400;
    };
});

// (function () {
//     var current = location.pathname.split('/')[1];
//     if (current === "") return;
//     var menuItems = document.querySelectorAll('.menu-item a');
//     for (var i = 0, len = menuItems.length; i < len; i++) {
//         if (menuItems[i].getAttribute("href").indexOf(current) !== -1) {
//             menuItems[i].className += "is-active";
//         }
//     }
// })();

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