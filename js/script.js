$(function(){
    $(".nav_trigger").click(function() {
        $("body").toggleClass("show_sidebar");
        $(".nav_trigger .fa").toggleClass("fa-navicon fa-times"); // toggle 2 classes in Jquery: http://goo.gl/3uQAFJ - http://goo.gl/t6BQ9Q
    });
});

