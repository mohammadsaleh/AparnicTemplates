/**
 * Created by mohammadsaleh on 6/27/2015.
 */
$(document).ready(function(){
    var resizeContentDom = function(){
        var headerHeight = $('header').outerHeight();
        var footerHeight = $('footer').outerHeight();
        $('#content').css('min-height', $(window).height() - (headerHeight + footerHeight));
    };
    resizeContentDom();
    $(window).resize(function(){
        resizeContentDom();
    });
});