$(document).ready(function(){


    $('.notices').delay( 2000 ).fadeOut( 300 );

    // Conversation page
    /////////////////////////////////////////////////


    $('.description .edit-button').on('click' , function(){

        $('.conversation-edit').fadeIn(300);

        return false;

    });

    $('.conversation-edit .cancel-button').on('click' , function(){

        $('.conversation-edit').hide();

        return false;

    });

});