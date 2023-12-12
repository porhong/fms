<script>
    var wd = $(window).width();
    console.log(wd);
    if (wd < 768) {
        $("#side_bar").addClass("d-none");
        $("#nav_title").addClass("d-none");
        $("#nav_title_mobile").removeClass("d-none");
        $("#top_nav").css("height", "4rem");
        $("#nav_profile").removeClass("d-none");
        $("#tab_bar").removeClass("d-none");
    } else {
        $("#side_bar").removeClass("d-none");
        $("#nav_title").removeClass("d-none");
        $("#nav_title_mobile").addClass("d-none");
        $("#top_nav").css("height", "3.5rem");
        $("#nav_profile").addClass("d-none");
        $("#tab_bar").addClass("d-none");
    }
    $(window).resize(function() {
        var wd = $(window).width();
        console.log(wd);
        if (wd < 768) {
            $("#side_bar").addClass("d-none");
            $("#nav_title").addClass("d-none");
            $("#nav_title_mobile").removeClass("d-none");
            $("#top_nav").css("height", "4rem");
            $("#nav_profile").removeClass("d-none");
            $("#tab_bar").removeClass("d-none");
        } else {
            $("#side_bar").removeClass("d-none");
            $("#nav_title").removeClass("d-none");
            $("#nav_title_mobile").addClass("d-none");
            $("#top_nav").css("height", "3.5rem");
            $("#nav_profile").addClass("d-none");
            $("#tab_bar").addClass("d-none");
        }
    });
</script>
</body>

</html>