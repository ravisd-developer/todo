$(document).ready(function(){
    console.log("loaded")
    // nav active link add colors
    $('.side-nav-link a').on('click', function(){
        $('.side-nav-link a').removeClass("active");
        $(this).addClass("active");
    })
})