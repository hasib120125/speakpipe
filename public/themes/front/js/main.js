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
    });

    $('.billed-annually-btn').click(function(){
        $('.billed-monthly-btn').removeClass('selected-box');
        $('.billed-annually-btn').addClass('selected-box');
        $('.price-billed-monthly').hide();
        $('.price-billed-annually').show();
        return false;
    });
    
    $('.billed-monthly-btn').click(function(){
        $('.billed-monthly-btn').addClass('selected-box');
        $('.billed-annually-btn').removeClass('selected-box');
        $('.price-billed-monthly').show();
        $('.price-billed-annually').hide();
        return false;
    });
});