$(document).ready(function() {
    
    $('.first').click(function() {
        
        $('html,body').animate({scrollTop: $('#first').offset().top},'slow')
    
    }) 
    $('.second').click(function() {
        
        $('html,body').animate({scrollTop: $('#second').offset().top},'slow')
    
    })  
    $('.third').click(function() {
        
        $('html,body').animate({scrollTop: $('#third').offset().top},'slow')
    
    })  

   
    
})


