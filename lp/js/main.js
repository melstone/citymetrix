function section_heights() {
    $('.section').each(function(index, el) {
        var section = $(this);

        section.css('height', $(window).height());
    });
}

$(function() {
    section_heights();

    $(window).resize(function() {
        section_heights();
    });


    $('.sections').pagepiling({
        anchors: ['section1', 'section2', 'section3', 'section4', 'section5'],
        navigation: {
            'position': false,
            'tooltips': ['Page 1', 'Page 2', 'Page 3', 'Page 4']
        }
    });


});





