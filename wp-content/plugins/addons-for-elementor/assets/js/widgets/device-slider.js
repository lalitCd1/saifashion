( function ( $ ) {

    var WidgetLAEDeviceSliderHandler = function ( $scope, $ ) {

        var slider_elem = $scope.find( '.lae-device-slider' ).eq( 0 );

        if (slider_elem.length > 0) {

            var rtl = slider_elem.attr( 'dir' ) === 'rtl';

            var settings = slider_elem.data( 'settings' );

            var sliderId = settings['slider_id'];

            var arrows = settings['arrows'];

            var dots = settings['dots'];

            var autoplay = settings['autoplay'];

            var autoplay_speed = parseInt( settings['autoplay_speed'] ) || 3000;

            var animation_speed = parseInt( settings['animation_speed'] ) || 300;

            var fade = settings['slide_animation'] === 'fade';

            var pause_on_hover = settings['pause_on_hover'];

            var pause_on_action = settings['pause_on_action'];

            slider_elem.find('.lae-device-slides').slick( {
                arrows: arrows,
                dots: dots,
                infinite: true,
                autoplay: autoplay,
                autoplaySpeed: autoplay_speed,
                speed: animation_speed,
                fade: fade,
                pauseOnHover: pause_on_hover,
                pauseOnAction: pause_on_action,
                slidesToShow: 1,
                slidesToScroll: 1,
                rtl: rtl,
            } );

        }

    };

    // Make sure you run this code under Elementor..
    $( window ).on( 'elementor/frontend/init', function () {

        elementorFrontend.hooks.addAction( 'frontend/element_ready/lae-device-slider.default', WidgetLAEDeviceSliderHandler );

    } );

} )( jQuery );