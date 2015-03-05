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

});