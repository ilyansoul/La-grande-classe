$(document).ready(function() {
 $.ajax({
    type: 'GET',
    dataType: 'JSON',
    url: 'https://jsonplaceholder.typicode.com/todos',
    success: function(data) {
       let i = 0;
        console.log(data[0]);
        for(let i = 0; i < 200; i ++) {
            $('#input').after(  data[i].title + data[i].completed  + '<br>' + '<button id="ajouter">' + 'add' + '</button >' + '<button id="supprimer">' + 'remove' + '</button>' )
            $('button').click(function() {
                confirm('Confirm : YES or NO?')
                if (confirm == true) {
                    $('#input').remove()
                }
            })
            
        }
            
        
    }
 })

   
})