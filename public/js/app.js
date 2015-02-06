// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

$(document).ready(function(){
    if($('#new_outline').val())
    window.open( $('#new_outline').val(), '_blank');
});