$(document).ready(function() {
    var scrollorama = $.scrollorama({
        blocks:'.scrollblock'
    });
    
    scrollorama.animate('.tora',{duration:400, property:'zoom'});
});
