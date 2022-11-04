$(document).ready(function() {
    $('.out').hide()
    $('.out1').hide()
    $('.out2').hide()
    $('.out3').hide()

    $('#fadeToggle1').click(function() {
        
        $('.out').fadeToggle('slow');
        $('.out1').hide()
        $('.out2').hide()
        $('.out3').hide()
    })
    $('#fadeToggle2').click(function() {
        
        $('.out1').fadeToggle('slow');
        $('.out').hide();
        $('.out2').hide();
        $('.out3').hide()
    })
    $('#fadeToggle3').click(function() {
        
        $('.out2').fadeToggle('slow');
        $('.out').hide()
    $('.out1').hide()
    })   
    $('#fadeToggle4').click(function() {
        
        $('.out3').slideToggle('slow');
        $('.out').hide()
    $('.out1').hide()
    $('.out2').hide();
    })   
    
    $(document).on('click',function(event) {
        if (!$(event.target).closest("#fadeToggle4").length) {
            if ($('.out3').is(":visible"))
                $('.out3').slideUp();
        }
    });
    
}
)