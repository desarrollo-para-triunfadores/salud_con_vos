/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$j(window).load(function () {
    setTimeout(function () {
        $j("#panel").animate({marginLeft: "0px"});
        $j("a.open").addClass('opened');
        $j("#panel").addClass('opened-panel');
    }, 1000);
});



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
            height: '570px',
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
            globalBGColor: 'transparent',
            navPrevNext: false,
            navStartStop: false,
            navButtons: false,
            hoverPrevNext: true,
            hoverBottomNav: true,
            showBarTimer: false,
            showCircleTimer: false,
            thumbnailNavigation: 'hover',
            tnWidth: 50,
            tnHeight: 60,
            tnContainerWidth: '60%',
            tnActiveOpacity: 35,
            tnInactiveOpacity: 50,
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
