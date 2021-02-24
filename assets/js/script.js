jQuery(function () {

    jQuery('.question').click(function () {

        //クリックされた.accordion1の中のp要素に隣接するul要素が開いたり閉じたりする。
        jQuery(this).next('p').slideToggle();
        jQuery(this).toggleClass('question-close')

    });

    jQuery('a[href^="#"]').click(function () {
        var speed = 500;
        var href = jQuery(this).attr("href");
        var target = jQuery(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        jQuery("html, body").animate({ scrollTop: position }, speed, "swing");
        return false;
    });
});