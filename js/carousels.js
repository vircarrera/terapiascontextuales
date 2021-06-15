// carousels

function carousel() {
    
    var carousel = $('.e-our-courses').flickity({
        cellAlign: 'left',
        cellSelector: '.b-card.--course',
        friction: 0.35,
        prevNextButtons: true,
        wrapAround: true,
        autoPlay: 8000,
        pageDots: true,
        freeScroll: true,
        groupCells: 3
    });


    if (screen.width <= 767 ) {  
        var carouselOpinion = $('.e-opinions').flickity({
            cellAlign: 'left',
            cellSelector: '.--opinion',
            friction: 0.35,
            prevNextButtons: true,
            wrapAround: true,
            autoPlay: 8000,
            pageDots: true,
            freeScroll: true,
            groupCells: 1,
            autoPlay: true,
            cellAlign: 'center',
            setGallerySize: true
        });
    };
    // var carouselSlider = $('.e-slider').flickity({
    //     cellAlign: 'left',
    //     cellSelector: '.e-slide',
    //     friction: 0.35,
    //     prevNextButtons: true,
    //     wrapAround: true,
    //     autoPlay: 8000,
    //     pageDots: true,
    //     freeScroll: true,
    //     groupCells: 1
    // });

}
