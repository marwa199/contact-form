$(function() {

    'use strict';
    $('.form-control').blur(function(){
        if($(this).val() === ''){
            $(this).parent().find('.astricx').fadeIn(100);
        }
        else{
            $(this).parent().find('.astricx').fadeOut(100);
        }

    });

});