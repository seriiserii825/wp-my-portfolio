$(function(){
    $("html").easeScroll({
        frameRate: 60,
        animationTime: 1000,
        stepSize: 90,
        pulseAlgorithm: 1,
        pulseScale: 8,
        pulseNormalize: 1,
        accelerationDelta: 20,
        accelerationMax: 1,
        keyboardSupport: true,
        arrowScroll: 50,
        touchpadSupport: true,
        fixedBackground: true
    });

    $('#js-close-menu').on('click', function(){
        $('#menu-glavnoe-menyu').slideToggle();
    });
});

function clearText(field)
{
  if (field.defaultValue == field.value) field.value = '';
  else if (field.value == '') field.value = field.defaultValue;
}
