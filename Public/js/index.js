(function ($) {
    $(function () {

        $('.button-collapse').sideNav();
        //初始化轮播图
        $('.carousel').carousel();
        $('.carousel').carousel('next', 2); // Move next n times.


        // $('.card-content p').text.substring(0,6);
        //限制字符个数
        $(".index-card-content p").each(function () {
            var maxwidth = 40;
            if ($(this).text().length > maxwidth) {
                $(this).text($(this).text().substring(0, maxwidth));
                $(this).html($(this).html() + '...');
            }
        });

    }); // end of document ready
})(jQuery); // end of jQuery name space