<script>
    var wd = $(window).width();
    if (wd < 1450 && wd > 900) {
        $("#profile_use_name").addClass("d-none");
        $("#tab_bar").addClass("d-none");
        $("#side_bar_small").removeClass("d-none");
        $("#side_bar").addClass("d-none");
        $("#top_nav").css("height", "4rem");
        $("#content").removeClass("left_margin_content");
        $("#content").addClass("left_margin_content_small");
        $("#nav_title").addClass("d-none");
        $("#nav_profile").addClass("d-none");
        $("#side_bar_small").css("width", "3vh");
        $("#nav_title_mobile").removeClass("d-none");


    } else if (wd < 900) {
        $("#side_bar").addClass("d-none");
        $("#side_bar_small").addClass("d-none");
        $("#nav_title").removeClass("d-none");
        $("#nav_title_mobile").addClass("d-none");
        $("#top_nav").css("height", "4rem");
        $("#nav_profile").removeClass("d-none");
        $("#tab_bar").removeClass("d-none");
        $("#content").removeClass("left_margin_content");
        $("#content").removeClass("left_margin_content_small");

    } else {
        $("#side_bar").removeClass("d-none");
        $("#nav_title").removeClass("d-none");
        $("#nav_title_mobile").addClass("d-none");
        $("#top_nav").css("height", "4rem");
        $("#nav_profile").addClass("d-none");
        $("#tab_bar").addClass("d-none");
        $("#content").removeClass("left_margin_content_small");
        $("#content").addClass("left_margin_content");
        $("#profile_use_name").removeClass("d-none");

    }
    $(window).resize(function() {
        var wd = $(window).width();
        if (wd < 1450 && wd > 900) {
            $("#profile_use_name").addClass("d-none");
            $("#tab_bar").addClass("d-none");
            $("#side_bar_small").removeClass("d-none");
            $("#side_bar").addClass("d-none");
            $("#top_nav").css("height", "4rem");
            $("#content").removeClass("left_margin_content");
            $("#content").addClass("left_margin_content_small");
            $("#nav_title").addClass("d-none");
            $("#nav_profile").addClass("d-none");
            $("#side_bar_small").css("width", "3vh");
            $("#nav_title_mobile").removeClass("d-none");


        } else if (wd < 900) {
            $("#side_bar").addClass("d-none");
            $("#side_bar_small").addClass("d-none");
            $("#nav_title").removeClass("d-none");
            $("#nav_title_mobile").addClass("d-none");
            $("#top_nav").css("height", "4rem");
            $("#nav_profile").removeClass("d-none");
            $("#tab_bar").removeClass("d-none");
            $("#content").removeClass("left_margin_content");
            $("#content").removeClass("left_margin_content_small");

        } else {
            $("#side_bar").removeClass("d-none");
            $("#nav_title").removeClass("d-none");
            $("#nav_title_mobile").addClass("d-none");
            $("#top_nav").css("height", "4rem");
            $("#nav_profile").addClass("d-none");
            $("#tab_bar").addClass("d-none");
            $("#content").removeClass("left_margin_content_small");
            $("#content").addClass("left_margin_content");
            $("#profile_use_name").removeClass("d-none");

        }
    });

    // side bar menu active
    var current_title = $(document).attr('title').toLowerCase();
    $(`#sidebar_${current_title}`).addClass("active_bg_sidebar");
    $(`#sidebar_${current_title} svg`).removeClass("icon_none_active");
    $(`#sidebar_${current_title} svg`).addClass("active_text_sidebar");
    $(`#sidebar_${current_title} span`).addClass("active_text_sidebar");
    // sm_sidebar
    $(`#sm_sidebar_${current_title} svg`).removeClass("icon_none_active");
    $(`#sm_sidebar_${current_title}`).addClass("active_bg_sm_sidebar");
    $(`#sm_sidebar_${current_title}`).addClass("active_text_sm_sidebar");
    //mobile_tabbar
    $(`#tab_${current_title}`).addClass("p-2 d-flex justify-content-center align-items-center tabbar_mobile");
    $(`#tab_${current_title} b`).removeClass("d-none");

    //loding screen
    $(window).ready(function() {
        $(".loader").fadeOut("fast");
    });
</script>
</body>

</html>