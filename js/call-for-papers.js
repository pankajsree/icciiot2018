var iconFirstTop;
var iconLastTop;

var lineHeight;

function initialise() {
    iconFirstTop = $("#icon-first").offset().top;
    iconLastTop = $("#icon-last").offset().top;
    lineHeight = iconLastTop - iconFirstTop;
    $("#line").css("height", lineHeight + "px");
}

$(document).ready(function() {
    initialise();
    $(window).resize(function() {
        initialise();
    });
});
