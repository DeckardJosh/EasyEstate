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
