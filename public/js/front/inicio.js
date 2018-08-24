/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


lsjQuery(document).ready(function () {


    var alto = (lsjQuery(window).height() - 130) + 'px';

    if (typeof lsjQuery.fn.layerSlider == "undefined") {
        lsShowNotice('layerslider_5', 'jquery');
    }
    else if (typeof lsjQuery.transit == "undefined" || typeof lsjQuery.transit.modifiedForLayerSlider == "undefined") {
        lsShowNotice('layerslider_5', 'transit');
    }
    else {
        lsjQuery("#layerslider_5").layerSlider({
            width: '100%',
            height: alto,
            responsive: true,
            responsiveUnder: 1100,
            sublayerContainer: 1100,
            autoStart: true,
            pauseOnHover: false,
            firstLayer: 1,
            animateFirstLayer: true,
            randomSlideshow: false,
            twoWaySlideshow: true,
            loops: 0,
            forceLoopNum: true,
            autoPlayVideos: true,
            autoPauseSlideshow: 'auto',
            youtubePreview: 'maxresdefault.jpg',
            keybNav: true,
            touchNav: true,
            skin: 'preview',
            skinsPath: 'http://demo.qodeinteractive.com/simplicity/wp-content/plugins/LayerSlider/skins/',
            globalBGColor: 'transparent',
            navPrevNext: true,
            navStartStop: false,
            navButtons: true,
            hoverPrevNext: true,
            hoverBottomNav: true,
            showBarTimer: false,
            showCircleTimer: false,
            thumbnailNavigation: 'hover',
            tnWidth: 100,
            tnHeight: 60,
            tnContainerWidth: '60%',
            tnActiveOpacity: 35,
            tnInactiveOpacity: 100,
            imgPreload: true,
            yourLogo: false,
            yourLogoStyle: 'left: 10px; top: 10px;',
            yourLogoLink: false,
            yourLogoTarget: '_self',
            cbInit: function (element) {
            },
            cbStart: function (data) {
            },
            cbStop: function (data) {
            },
            cbPause: function (data) {
            },
            cbAnimStart: function (data) {
            },
            cbAnimStop: function (data) {
            },
            cbPrev: function (data) {
            },
            cbNext: function (data) {
            }
        });
    }
});
