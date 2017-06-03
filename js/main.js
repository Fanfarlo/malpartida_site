/*
 * Open the drawer when the menu ison is clicked.
 */
var displayMenu = function() {

    var buttonActive = $('form h1').text();

    $('.ham-btn, .close-btn').click(function() {
        $('.drawer').toggleClass('open')
        $('.lines').toggleClass('move-lines')
        $('.lines-close').toggleClass('move-lines-close')
    })

    // $('.ham-btn').ready(function() {
    //     if (buttonActive === "Cotización") {
    //         $('.drawer li').eq(2).toggleClass('btn-active')
    //     }
    // })
};

// var removeActive = function() {
//     $('.drawer li').hover(function() {
//         $('.drawer li').eq(2).toggleClass('btn-active')
//     })
// };

displayMenu();
// removeActive();


var mouseEvents = function(){
  $("ul li").on("touchenter mouseover", function() {
    $('ul div').toggleClass('nav-btns')
}).on("touchleave mouseleave", function() {
    // do hover end code
});
}
mouseEvents();
