import $ from 'jquery'

var paged = 2;
$('.see-more').on('click', function(event) {
    event.preventDefault();
    $.ajax({
        url: base_url + 'ajax-posts/',
        type: 'POST',
        dataType: 'html',
        data: {paged: paged},
    })
    .done(function(html) {
        $('#dicas-do-chefe .items').append(html);
        paged++;
    })    
})