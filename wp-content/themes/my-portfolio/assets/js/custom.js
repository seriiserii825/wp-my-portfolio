$(function(){
    $('#js-close-menu').on('click', function(){
        $('#menu-glavnoe-menyu').slideToggle();
    });

    $('#gallery a.box').lightBox();
});

function clearText(field)
{
  if (field.defaultValue == field.value) field.value = '';
  else if (field.value == '') field.value = field.defaultValue;
}
