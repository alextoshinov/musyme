$(document).ready(function() {

    var headerHeight = $('header').height();
    //var galWidth = $(window).width();   // returns width of browser viewport
    var galHeight = ($(window).height()) - headerHeight - 60;
    $('#main-content').css("height", galHeight);
    $('#main-content').css("width", $(window).width());
});


var myScroll;
function loaded() {
    myScroll = new iScroll('main-content', {scrollbarClass: 'myScrollbar'});
}

document.addEventListener('touchmove', function(e) {
    e.preventDefault();
}, false);

document.addEventListener('DOMContentLoaded', loaded, false);