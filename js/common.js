var collabWidth;
var navFlag;

var docInnerHeight;

var winHeight;

var curScrollTopC;

var wWidth;

function init() {
    wResizeCommon();
    navFlag = false;
}

function wResizeCommon() {
    wWidth = $(window).width();
    winHeight = $(window).height();

    curScrollTopC = $(this).scrollTop();

    docInnerHeight = $(document).innerHeight();

    collabWidth = $("#collab").width();
    $("#gm-img").width(collabWidth + 20);
}

$(document).ready(function() {

    init();

    if(curScrollTopC > 1500) {
        $("#anchor-top").show();
    }
    else {
        $("#anchor-top").hide();
    }

    if(curScrollTopC < docInnerHeight - 1500) {
        $("#anchor-bottom").show();
    }
    else {
        $("#anchor-bottom").hide();
    }

    $(document).scroll(function() {
        curScrollTopC = $(this).scrollTop();
        if(curScrollTopC > 1500) {
            $("#anchor-top").show();
        }
        else {
            $("#anchor-top").hide();
        }

        if(curScrollTopC < docInnerHeight - 1500) {
            $("#anchor-bottom").show();
        }
        else {
            $("#anchor-bottom").hide();
        }
    });

    $("#anchor-bottom").click(function() {
        $(document).scrollTop(docInnerHeight - winHeight);
    });

    $("#anchor-top").click(function() {
        $(document).scrollTop(0);
    });

    $("#btn-collapse").click(function() {
        if(navFlag == false) {
            navFlag = true;
            $(".navbar-toggler-icon").hide();
            $(".cross").show();
        }
        else {
            navFlag = false;
            $(".navbar-toggler-icon").show();
            $(".cross").hide();
        }
    });

    $(window).resize(function() {
        wResizeCommon();
    });

});
