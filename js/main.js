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
  $('a.taphover').on("touchstart", function (e) {
      "use strict"; //satisfy the code inspectors
      var link = $(this); //preselect the link
      if (link.hasClass('hover')) {
          return true;
      } else {
          link.addClass("hover");
          $('a.taphover').not(this).removeClass("hover");
          e.preventDefault();
          return false; //extra, and to make sure the function has consistent return points
      }
  });
}
mouseEvents();
