<script>
    var wd = $(window).width();
    console.log(wd);
    if (wd < 1200) {
        $("#side_bar").addClass("d-none");
        $("#nav_title").addClass("d-none");
        $("#nav_title_mobile").removeClass("d-none");
        $("#top_nav").css("height", "4rem");
        $("#nav_profile").removeClass("d-none");
        $("#tab_bar").removeClass("d-none");
        $("#content").removeClass("left_margin_content");
    } else if (wd < 768) {
        $("#side_bar").addClass("d-none");
        $("#nav_title").addClass("d-none");
        $("#nav_title_mobile").removeClass("d-none");
        $("#top_nav").css("height", "4rem");
        $("#nav_profile").removeClass("d-none");
        $("#tab_bar").removeClass("d-none");
        $("#content").removeClass("left_margin_content");

    } else {
        $("#side_bar").removeClass("d-none");
        $("#nav_title").removeClass("d-none");
        $("#nav_title_mobile").addClass("d-none");
        $("#top_nav").css("height", "3.5rem");
        $("#nav_profile").addClass("d-none");
        $("#tab_bar").addClass("d-none");
        $("#content").addClass("left_margin_content");
    }
    $(window).resize(function() {
        var wd = $(window).width();
        console.log(wd);
        if (wd < 1450 && wd > 768) {
            $("#profile_use_name").addClass("d-none");
            $("#tab_bar").addClass("d-none");
            $("#side_bar_small").removeClass("d-none");
            $("#side_bar").addClass("d-none");
            $("#nav_title").addClass("d-none");
            $("#top_nav").css("height", "4rem");
        } else if (wd < 768) {
            $("#side_bar").addClass("d-none");
            $("#side_bar_small").addClass("d-none");
            $("#nav_title").addClass("d-none");
            $("#nav_title_mobile").removeClass("d-none");
            $("#top_nav").css("height", "4rem");
            $("#nav_profile").removeClass("d-none");
            $("#tab_bar").removeClass("d-none");
            $("#content").removeClass("left_margin_content");

        } else {
            $("#side_bar").removeClass("d-none");
            $("#nav_title").removeClass("d-none");
            $("#nav_title_mobile").addClass("d-none");
            $("#top_nav").css("height", "3.5rem");
            $("#nav_profile").addClass("d-none");
            $("#tab_bar").addClass("d-none");
            $("#content").addClass("left_margin_content");
            $("#profile_use_name").removeClass("d-none");
        }
    });
</script>
</body>

</html>