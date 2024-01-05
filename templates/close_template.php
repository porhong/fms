<script>
    var current_title = $(document).attr('title').toLowerCase();

    function UI(wd) {
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
            $("#nav_mobile").addClass("d-none");
            $("#top_bar ul").removeClass("pt-2");
            $("#top_bar").addClass("bg-light border-bottom shadow");
            $("#content").addClass("top_margin_content");
            $("#content").removeClass("top_margin_content_mobile");
            $("#nav_mobile_back").addClass("d-none");
            $("#top_bar").addClass("top_bar");
            $("#top_bar").removeClass("top_bar_mobile");

        } else if (wd < 900) {
            $("#side_bar").addClass("d-none");
            $("#side_bar_small").addClass("d-none");
            $("#nav_title").addClass("d-none");
            $("#nav_title_mobile").addClass("d-none");
            $("#top_nav").css("height", "6rem");
            $("#top_bar").removeClass("bg-light border-bottom shadow");
            $("#tab_bar").removeClass("d-none");
            $("#content").removeClass("left_margin_content left_margin_content_small");
            $("#top_bar ul").addClass("pt-2");
            $("#content").removeClass("top_margin_content");
            $("#content").addClass("top_margin_content_mobile");
            $("#top_bar").removeClass("top_bar");
            $("#top_bar").addClass("top_bar_mobile");
            if (current_title != "home") {
                $("#nav_profile").addClass("d-none");
                $("#nav_mobile").addClass("d-none");
                $("#nav_mobile_back").removeClass("d-none");

            } else {
                $("#nav_profile").removeClass("d-none");
                $("#nav_mobile").removeClass("d-none");
            }
            if (current_title == "report" || current_title == "create" || current_title == "budget" || current_title == "more") {
                $("#nav_mobile_back i").addClass("d-none");
                $("#nav_mobile_back h2").addClass("ms-3");

            } else {
                $("#nav_mobile_back i").removeClass("d-none");
                $("#nav_mobile_back h2").removeClass("ms-3");
            }
        } else {
            $("#side_bar").removeClass("d-none");
            $("#nav_title").removeClass("d-none");
            $("#nav_title_mobile").addClass("d-none");
            $("#top_nav").css("height", "3rem");
            $("#nav_profile").addClass("d-none");
            $("#tab_bar").addClass("d-none");
            $("#content").removeClass("left_margin_content_small");
            $("#content").addClass("left_margin_content");
            $("#profile_use_name").removeClass("d-none");
            $("#nav_mobile").addClass("d-none");
            $("#top_bar ul").removeClass("pt-2");
            $("#top_bar").addClass("bg-light border-bottom shadow");
            $("#content").addClass("top_margin_content");
            $("#content").removeClass("top_margin_content_mobile");
            $("#nav_mobile_back").addClass("d-none");
            $("#top_bar").addClass("top_bar");
            $("#top_bar").removeClass("top_bar_mobile");

        }
    }

    // UI Controler
    var wd = $(window).width();
    UI(wd);

    $(window).resize(function() {
        var wd = $(window).width();
        UI(wd);
    });

    // side bar menu active
    $(`#sidebar_${current_title}`).addClass("active_bg_sidebar");
    $(`#sidebar_${current_title} i`).removeClass("icon_none_active");
    $(`#side_bar div ul li a span`).addClass("icon_none_active");
    $(`#sidebar_${current_title} i`).addClass("active_text_sidebar");
    $(`#sidebar_${current_title} span`).addClass("active_text_sidebar");
    // sm_sidebar
    $(`#sm_sidebar_${current_title} i`).removeClass("icon_none_active");
    $(`#sm_sidebar_${current_title}`).addClass("active_bg_sm_sidebar");
    $(`#sm_sidebar_${current_title}`).addClass("active_text_sm_sidebar");
    //mobile_tabbar
    $(`#tab_${current_title}`).addClass("p-2 d-flex justify-content-center align-items-center tabbar_mobile w-50");
    $(`#tab_${current_title} i`).removeClass("icon_none_active");

    //loding screen
    $(window).ready(function() {
        $(".loader").fadeOut("fast");
    });

    $(window).ready(function() {
        $("body").fadeIn("slow");
    });
    //Lazy loading Images
    $('img').attr('loading', 'lazy');
    //Back to previous page
    $("#nav_mobile_back i").click(function() {
        window.history.back();
    });
</script>
<script src="../controlers/JS/create_JS_Controler.js"></script>

</body>

</html>