$(document).ready(function(){
    $('.narocila tr').each(function() {
        var placano = $(this).find(".placano").html();
        if (placano == "Ne") {
            $(this).css('background-color', '#e88b8b');
        } else if (placano == "Ja"){
            $(this).css('background-color', '#caffc7');
        }
    });
});