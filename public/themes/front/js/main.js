$(document).ready(function(){
    $('#mobile-menu-btn').click(function(){
        $('#mobile-menu-box').toggleClass('is-active');
        $('#mobile-menu-btn').toggleClass('is-active');
    });

    $('#mobile-menu-box .settings-dropdown').click(function(){
        $('#mobile-menu-box .navbar-dropdown').toggle();
    });
    $('.dropdown .button').click(function(){
        $(this).closest('.dropdown').toggleClass('is-active');
    })
});