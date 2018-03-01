import $ from 'jquery'
import '../modules/fancybox'

function fancyboxAlert(mensagem)
{
    $.fancybox(
        '<div id="mensagem_fancybox"><h1>'+mensagem+'</h1></div>',
        {
            'autoDimensions'    : false,
            'width'             : 300,
            'height'            : 50,
            'transitionIn'      : 'none',
            'transitionOut'     : 'none',
            'centerOnScroll'    : true,
        }
    );
}

$('#form-contact').on('submit', function(event) {
    event.preventDefault();
    fancyboxAlert('AGUARDE...');
    $.ajax({
        type: 'POST',
        url: base_url + '/forms/',
        data: $(this).serialize(),
        dataType: 'json',
        success: function(json){
            $('#form-contact')[0].reset();
            fancyboxAlert(json.mensagem);
        },
        error: function(){
            fancyboxAlert('Aconteceu um erro. Tente novamente.');   
        }
    });
});