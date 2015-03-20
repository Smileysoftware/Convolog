$(document).ready(function(){

    //Sexy notification shower / hider
    $('.notices').delay( 2000 ).fadeOut( 300 );

    // Conversation page
    $('.description .edit-button').on('click' , function(){

        $('.conversation-edit').fadeIn(300);

        return false;

    });

    $('.conversation-edit .cancel-button').on('click' , function(){

        $('.conversation-edit').hide();

        return false;

    });

    $('input[name=title]').change( function(){

        $('.duplicateTitleField').hide()

        var form = $(this).closest('form');

        $(form).find('input[type=submit]').attr("disabled", false);

        var request = $.ajax({
            url: '/api/conversation/slug',
            type: form[0].method,
            data: form.serialize(),
            dataType: 'json'
        });



        request.done(function( response ) {
            var count = response ;

            $(this).addClass( 'duplicatedRecord' );

            if ( count == parseInt( 1 ) ){

                $('.duplicateTitleField').html('You already have a conversation with that title').show()

                $(form).find('input[type=submit]').attr("disabled", true);

            }

        });


    });


    $('.add_comment').on('click', function(){

        $('.black').show();
        $('.comment_modal').fadeIn();

    });


    $('.comment_modal a.cancel-button').on('click', function(){
        $('.black').hide();
        $('.comment_modal').hide();
    });
    $('.black').on('click', function(){
        $('.black').hide();
        $('.comment_modal').hide();
    });

    var form = $('.comment_modal').find('form');

    $(form).on('submit', function(){

        var person = $(form).find('input[name=person]').val().length;
        var comment = $(form).find('textarea[name=comment]').val().length;

        var error = 0;
        var msg = '';

        if ( person < 1 ){
            error = 1;
            msg += "<p>Who did you speak to?</p>"
        }

        if ( comment < 1 ){
            error = 1;
            msg += "<p>Please supply a comment</p>"
        }

        if ( error == 1 ){

            $(form).find('.form-errors').html( msg ).fadeIn();

            return false;

        }


    });



    $('a#account-link').click(function(){
       $('div#account-nav').toggle( '400' );

        return false;
    });




});