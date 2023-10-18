// Effect
$('.input-group-effect .form-control').focus(function(event) {
    $(this).parent().addClass('focus');
}).blur(function(event) {
    if($(this).val() === '') $(this).parent().removeClass('focus');
});