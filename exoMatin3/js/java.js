$(document).ready(function() {
    // $('.cube').load('http://www.omdbapi.com/?i=tt3896198&apikey=71d31dad')

    $.ajax({
        type:'GET',
        dataType:"JSON",
        url: 'http://www.omdbapi.com/?i=tt3896198&apikey=71d31dad',
        success: function(data) {
            console.log(data);
            $('.cube').html("<h1>" + data.Title + '</h1>' );
            $('.cube').after(data.Runtime);

        }
    })
})