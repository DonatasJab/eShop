$('.registeris').on('submit', function(e)
{
    var $form = $(this);
    e.preventDefault();
    var url = $form.attr('action');
    var formData = {};
    $form.find('input', 'select').each(function()
    {
        formData[ $(this).attr('name') ] = $(this).val();
    });
    $.post(url, formData, function(jqXhr)
    {
        $errors = jqXhr.responseJSON;
        if($('#ModalSignup').is(':visible')) {
            $('#ModalSignup').modal('toggle');
        }
        $('#ModalLogin').modal('toggle');
        $('.modal-header').after('<div class="alert alert-success">Sėkmingai užsiregistravot! Dabar galit prisijungti!</div>');
        $('.alert-success').delay(3000).fadeOut(1000);
    }).fail(function(jqXhr) {
        if( jqXhr.status === 422 ) {
            $errors = jqXhr.responseJSON;
            $('.form-group').removeClass('has-error');
            $('span.help-block').remove();
            $.each($errors, function( key, value ) {
                if('form-group reg-' + key == $('.reg-' + key).attr('class')) {
                    $('.reg-' + key).addClass('has-error');
                    $('.reg-' + key).append('<span class="help-block">' + value[0] + '</span>')
                }
            });
        }
    });
});