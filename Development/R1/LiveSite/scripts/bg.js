var sparkles = "+'*^-,.@**o";
var randint, randintx, randinty, randdepth;
var strength = 5;

$(document).ready( function() {
    $('.bg p').each( function() {
        randint = Math.floor(Math.random()*sparkles.length);
        $(this).text(sparkles[randint]);
        
        randintx = Math.floor(Math.random()*100);
        randinty = Math.floor(Math.random()*100);
        $(this).css('left', randintx+"vw").css('top', randinty+'vh');
        
        randdepth = (Math.random()*0.8)+0.4;
        $(this).attr('depth', randdepth);
    });
    //flourish();
});

$(window).on('mousemove', function(e) {
    $('p').each( function() {
        deptheffect(e, $(this));
    });
});
    
function deptheffect(e, target) {
    var posxadjusted = e.pageX - (window.innerWidth / 2);
    var posyadjusted = e.pageY - (window.innerHeight / 2);
    var depth = $(target).attr('depth');
    
    $(target).css('transform','translate(' + (depth * posxadjusted) / strength + 'px, ' + (depth * posyadjusted) / strength + 'px)');
}

$('#register').click(function() {
    $('.landing').fadeOut(300);
    $('form').delay(300).fadeIn(300);
});