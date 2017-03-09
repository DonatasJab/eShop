$('.loginas').on('submit', function(e)
{
    e.preventDefault();
    var $form = $(this);
    var url = $form.attr('action');
    var formData = {};
    $form.find('input', 'select').each(function()
    {
        formData[ $(this).attr('name') ] = $(this).val();
    });
    $.post(url, formData, function(response)
    {
        location.reload();
    }).fail(function(jqXhr) {
        if( jqXhr.status === 422 ) {
            $('.alert-warning').remove();
            $('.alert.alert-danger').remove();
            $errors = jqXhr.responseJSON;
            if($('#errors')) {
                $('#errors').after('<div class="alert alert-danger">' + $errors['error'] + '</div>');
            } 
            if($('.modal-header')) {
                $('.modal-header').after('<div class="alert alert-danger">' + $errors['error'] + '</div>');
            }
            $('.form-group').removeClass('has-error');
            $('span.help-block').remove();
            $.each($errors, function( key, value ) {
                if('form-group ' + key == $('.' + key).attr('class')) {
                    $('.' + key).addClass('has-error');
                    $('.' + key).append('<span class="help-block">' + value[0] + '</span>')
                }
            });
        }
    });
});