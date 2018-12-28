var keypointsTop;

var keypointsHeight;

var minimaKeypts;
var maximaKeypts;

var maximaTimeline;
var minimaTimeline;

var wHeight;
var wWidth;
var wScroll;

var curScrollTop;


var iconFirstTop;
var iconLastTop;

var lineHeight;


/*****     coming-soon     *****/

var startDate;
var comingSoon;
var timeLeft;
var _1day;

var now;
var millisecDiff;
var secDiff;

var days;
var hrs;
var mins;
var secs;

function initialise() {
    wResize();
    startDate = new Date(2018, 11, 14).getTime();
    _1day = 3600 * 24;
}

function wResize() {
    iconFirstTop = $("#icon-first").offset().top;
    iconLastTop = $("#icon-last").offset().top;

    lineHeight = iconLastTop - iconFirstTop;

    $("#line").css("height", lineHeight + "px");

    keypointsTop = $("#conf-content-fluid").offset().top;
    keypointsHeight = $("#conf-content-fluid").height();

    wHeight = $(window).height();
    wWidth = $(window).width();

    curScrollTop = $(this).scrollTop();

    minimaKeypts = curScrollTop + wHeight;
    maximaKeypts = keypointsTop + keypointsHeight;

    if(minimaKeypts > keypointsTop && curScrollTop < maximaKeypts && wWidth > 991) {
        wScroll = keypointsTop - curScrollTop;

        $("#conf-content-fluid").css('background-position', 'center ' + wScroll/2 + 'px');
    }
    else {
        $("#conf-content-fluid").css('background-position', 'center');
    }
}

$(document).ready(function() {

    comingSoon = $(".coming-soon");
    timeLeft = $("#time-left");

    var countDown = setInterval(function() {
        now = new Date().getTime();
        millisecDiff = startDate - now;
        secDiff = millisecDiff / 1000;
        if(secDiff > 0) {
            days = Math.floor(secDiff / _1day);
            hrs = Math.floor((secDiff % _1day) / 3600);
            mins = Math.floor((secDiff % 3600) / 60);
            secs = Math.floor(secDiff % 60);
            $("#days").html(days);
            $("#hrs").html(hrs);
            $("#mins").html(mins);
            $("#secs").html(secs);
        }
        else {
            clearInterval(countDown);
            $("#days").html("00");
            $("#hrs").html("00");
            $("#mins").html("00");
            $("#secs").html("00");
        }
    }, 1000);

    initialise();

    $(window).resize(function() {
        wResize();
    });

    $(".carousel").carousel({
        interval: 3000,
        keyboard: true
        // pause: false
    });
    curScrollTop =  $(document).scrollTop();

    $(document).scroll(function() {
        curScrollTop = $(this).scrollTop();

        minimaKeypts = curScrollTop + wHeight;
        maximaKeypts = keypointsTop + keypointsHeight;

        if(minimaKeypts > keypointsTop && curScrollTop < maximaKeypts && wWidth > 991) {
            wScroll = keypointsTop - curScrollTop;

            $("#conf-content-fluid").css('background-position', 'center ' + wScroll/2 + 'px');
        }
        else {
            $("#conf-content-fluid").css('background-position', 'center');
        }

    });

});
