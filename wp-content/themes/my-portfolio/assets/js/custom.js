$(function(){
    $('#js-close-menu').on('click', function(){
        $('#menu-glavnoe-menyu').slideToggle();
    });
});

function clearText(field)
{
  if (field.defaultValue == field.value) field.value = '';
  else if (field.value == '') field.value = field.defaultValue;
}
