$(document).ready(function(){
    // Show hide popover
    $(".icon").click(function(){
        $("#links").slideToggle("fast");
    });
});
$(document).on("click", function(event){
    var $trigger = $(".icon");
    if($(document).width()<=900 && $trigger !== event.target && !$trigger.has(event.target).length){
        $("#links").slideUp("fast");
    }
});
$(window).resize( function() {
    if($(document).width()>900) {
        $("#links").show();
    }
    else {
        $("#links").hide();
    }
});
