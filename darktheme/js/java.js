$(document).ready(function(){
    $('#dark').click(function(){
    $('body').css('background-color','black');
    $('body').css('color','white');
    })
    $('#light').click(function(){
        $('body').css('background-color','white');
        $('body').css('color','black');
    })
    $('#themeDark').mouseenter(function(){
    $(this).css('border-color','red');
    })
    $('#themeDark').mouseleave(function(){
    $(this).css('border-color','black');
    })
    $('#themeLight').mouseenter(function(){
    $(this).css('border-color','red');
    })
    $('#themeLight').mouseleave(function(){
        $(this).css('border-color','black');
        })

        $('#hide').click(function() {
            $('p').hide('slow');
        })
        $('#show').click(function() {
            $('p').show('slow');
        })
        $('#toggle').click(function() {
            $('p').toggle('slow');
        })
        $('#fadeIn').click(function() {
            $('p').fadeIn('slow');
        })
        $('#fadeOut').click(function() {
            $('p').fadeOut('slow');
        })
        $('#fadeToggle').click(function() {
            $('p').fadeToggle('slow');
        })
  
        $('#fadeTo').click(function() {
            $('p').fadeTo('slow', 0.3);
        })
  
        $('#slideDown').click(function() {
            $('p').slideDown('slow');
        })
        $('#slideUp').click(function() {
            $('p').slideUp('slow');
        })
        $('#slideToggle').click(function() {
            $('p').slideToggle('slow');
        })
  
       
  
    })

