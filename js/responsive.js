
jQuery(document).ready(function($) {
// Change iFrame on a Button Click Event
    $(".rspcbutton").click(function(event){
        $("iframe").attr('src', $( '#rspcurl' ).val());
    });
});
function dragme(candrag = true)
{
    if(candrag = true)
    {
jQuery(document).ready(function($) {
    var a = 3;
    $('.desktop,.laptop,.tablet,.mobile').draggable({
   start: function(event, ui) { $(this).css("z-index", a++); }
});
    $('.display div').click(function() {
        $(this).addClass('top').removeClass('bottom');
        $(this).siblings().removeClass('top').addClass('bottom');
        $(this).css("z-index", a++);

    });
});
    }
    
}
