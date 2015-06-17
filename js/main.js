function show_map() {
    var mapCanvas = document.getElementById('map');
    var mapOptions = {
        center: new google.maps.LatLng(55.740897, 37.609714),
        zoom: 16,
        zoomControl: false,
        zoomControlOptions: {
              position: google.maps.ControlPosition.RIGHT_CENTER
        },
        disableDefaultUI: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var contentString = '<div style="line-height:1.2;overflow:hidden;white-space:nowrap;padding-top: 5px; padding-bottom: 5px;">'+
        '<p style="margin: 0 0 10px;"><strong>CityMetrix</strong></p>'+
        'г.Москва, Берсеневская набережная, д.6, с.3, 2 этаж'+
        '</div>';
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var myLatlng = new google.maps.LatLng(55.740897, 37.609714);
    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    // To add the marker to the map, use the 'map' property
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'CityMetrix',
        icon: '/images/map-marker.png'
    });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
    });
}

$(function() {
    if ( $('#map').length > 0 ) {
        show_map();
    }

    if ( $('.b-more-articles').length > 0) {
        $('.b-more-articles .item').each(function(index, el) {
            var item = $(this);
            item.css('height', item.outerWidth());
        });   
    }

    if ( $('.lightbox-image').length > 0 ) {
        $('.lightbox-image').fancybox({
            theme : 'light',
            helpers:  {
                title:  'outside',
                overlay: {
                  locked: false
                }
            }
        });
    }


    // Field Upload
    $('.field-upload .button').click(function(e) {
        e.preventDefault();

        var input =  $(this).closest('.field-upload').find('input');
        input.click();
    });

    $('.field-upload input[type="file"]').change(function () {
        var field = $(this).closest('.field');
        var button = field.find('.button');
        var input = $(this);
        var filename = input.val().split('\\').pop();
        var clear_btn = field.find('.clear');
        var placeholder = 'Прикрепить реквизиты компании';

        if (filename == '') {
            field.removeClass('added');
            button.text(placeholder);
            field.find('.clear').remove();
        } else {
            field.addClass('added');
            button.text(filename);
        }

        clear_btn.on("click", function () {
            input.replaceWith(input.val('').clone(true));
            button.text(placeholder);
            field.removeClass('added');
        });
    });


    $('.page-inner').css('min-height', $('.aside').outerHeight());


    // Подрузка записей на главной
    $('.home-grid-wrapper').css( 'height', $('.b-home-grid-events .home-grid').height() );

    $('[data-action="show-more-events"]').click(function(event) {
        var grid_part = $('.b-home-grid-events .home-grid');
        $('.home-grid-wrapper').css( 'height', (grid_part.height())*grid_part.length );
        console.log( grid_part.length );
    });



    // Комментарии
    $('[data-action="comment_reply"]').one('click', function(event) {
        event.preventDefault();

        var comment = $(this).closest('.comment');
        var id = { id: $(this).attr('data-comment-id') };

        $.get('/js/templates/comment.html', function(template) {
            comment.after($.tmpl(template, id));
        });

        setTimeout(function() {
            $('.comment-form').removeClass('comment-form--hidden');
        }, 100);
    });
    
});





