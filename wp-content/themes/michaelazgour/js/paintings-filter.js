$(function(){

// years = [];
// $('.years-tags').find('a').on('click touchstart', function(e){
//     e.preventDefault();
//     $form = $('.inquiry-contact');
//     if($(this).hasClass('pushed')){
//         return false;
//     } else {
//         years = [];
//         years.push($(this).attr('title'));
//         $('.years-tags').find('a').removeClass('pushed');
//         $(this).addClass('pushed');
//         $form.slideUp(100);
//         $form.removeClass('showed');
//         $form.insertBefore('footer');
//         filterProject();
//     }
//     return false;
// });

function imgPaintings()
{
    $('.the-painting').find('> img').each(function(){
        $(this).height('auto');
        if($(this).height() > $(window).height()-$('nav.main-navigation').height()-$('.sorting').height()-30){
            $(this).height($(window).height()-$('nav.main-navigation').height()-$('.sorting').height()-30);
        } else {
            $(this).height('auto');
        }
    });
}

function seriesSeparator()
{
    $('.row[data-series]').each(function(){
        if($(this).next().attr('data-series') && $(this).next().attr('data-series') !== $(this).attr('data-series')){
            $(this).append('<hr class="separator">');
            console.log('cosS');
        }
    });
}

function seriesName()
{
    if($(window).width() > 992){
        $('.row[data-series]').each(function(){
            var visible = $(this).visible( true ); 
            if(visible === true){
                $('.series-name').text($(this).attr("data-series"));
            }
        });
    } else {
        $('.row[data-series]').each(function(){
            if($(this).prev().attr('data-series') !== $(this).attr('data-series') && $(this).find('.series-name-mobile').length === 0){
                $(this).prepend('<div class="col-xs-16 series-name-mobile"><h2>'+$(this).attr('data-series')+'</h2></div>');
            }
        });
    }
}

function filterProject(){
    var $content = $('.paintings'); 
    var jsonYears = JSON.stringify(years);
    
    $.ajax({
        beforeSend: function() {
            // $content.height($content.height());
            $('.the-painting').each(function(){
                $(this).animate({
                    opacity: 0
                }, 500);
            });
        },
        type : 'POST',
        url : paintingsFilterAjax.ajaxurl,
        data : {
            action : 'filter_paintings_by_tax',
            jsonY : jsonYears, 
        },
        success : function( response ) {
            $content.html( response );
        },
        complete: function() {
            // $content.animate({
            //     height: ''+$content.height()+''
            // }, 500);
            $('html, body').animate({
                scrollTop: 0
            }, 500);
            setTimeout(function(){
                seriesName();
                seriesSeparator();
                imgPaintings();
                $content.find('.the-painting').each(function(){
                    $(this).animate({
                        opacity: 1
                    }, 1000);
                });
            }, 1000);
        }
    });
    return false;
};

});