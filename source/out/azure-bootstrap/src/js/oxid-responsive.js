
// ---- Layout -----


// not working, because #sidebar id selector is more important than css classes, so "width" can't be override by
//$('#sidebar').addClass('col-lg-2 col-md-3 col-sm-4 col-xs-6');


// ---- AnythingSlider ----

// not working, width&height shout come from CSS

$('ul.anythingBase li.panel').removeAttr('style');

$('div.anythingSlider').removeAttr('style');


// ---- Promoboxes ----

$('.promoBoxes').removeClass('clear');
