// content.js
console.log("Hello from your Chrome extension!");

var offset;
var x;
var y;

if ($('#fit-sizes').length) {
    $.get(chrome.extension.getURL('../inline.html'), function(data) {
        //$(data).appendTo('body');
        // Or if you're using jQuery 1.8+:
         $($.parseHTML(data)).appendTo('body');

        offset = $('#fit-sizes').offset();
        x = offset.left + $('#fit-sizes').width() - $('sizeup-card').width();
        y = offset.top;

        console.log(x, ", ", y);
        $('sizeup-card').css('left', x).css('top', y+44);
    });
} else {
    console.log("not a product page");
}

$('#sizeup-card-dismiss').on('click', function() {
    $('sizeup-card').hide();
});