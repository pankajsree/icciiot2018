$(document).ready(function() {
    $("#honorary-chairs").show();
    $(".committee-tabs").eq(0).addClass("active");

    var active = 0;

    $(".committee-tabs").click(function() {
        var temp = $(this).attr("data-count");

        $(".committee-tabs-content").eq(active).hide();
        $(".committee-tabs").eq(active).removeClass("active");

        active = temp;

        $(".committee-tabs-content").eq(active).show();
        $(".committee-tabs").eq(active).addClass("active");
    });
});
