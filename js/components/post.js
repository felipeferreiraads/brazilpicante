$('#dicas-do-chefe .items a').on('click', function(event) {
    event.preventDefault()
    $.ajax({
        type: 'GET',
        url: $(this).attr('href'),
        dataType: 'html',
        success: function(html){
            $.fancybox(
                html,
                {
                    'autoDimensions'    : true,
                    'transitionIn'      : 'none',
                    'transitionOut'     : 'none',
                    'centerOnScroll'    : true,
                }
            );
        },
        error: function(){
            fancyboxAlert('Aconteceu um erro. Tente novamente.')
        }
    })
})