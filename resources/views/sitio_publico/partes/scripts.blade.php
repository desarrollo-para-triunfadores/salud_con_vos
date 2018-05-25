<script type="text/javascript">var lsjQuery = jQuery;</script>
<script type="text/javascript" src="{{ asset('plantillas/simplicity/wp-content/plugins/LayerSlider/js/layerslider.kreaturamedia.jquery89df.js?ver=4.6.0') }}"></script>
<script type="text/javascript" src="{{ asset('plantillas/simplicity/wp-content/plugins/LayerSlider/js/jquery-easing-1.36f3e.js?ver=1.3.0') }}"></script>
<script type="text/javascript" src="{{ asset('plantillas/simplicity/wp-content/plugins/LayerSlider/js/jquerytransite2dc.js?ver=0.9.9') }}"></script>
<script type="text/javascript">
    lsjQuery(document).ready(function () {
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
</script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var qodeLike = {"ajaxurl": "http:\/\/demo.qodeinteractive.com\/simplicity\/wp-admin\/admin-ajax.php"};
    /* ]]> */
</script>






<script type='text/javascript' src="{{ asset('plantillas/simplicity/wp-content/themes/simplicity/js/qode-like5152.js?ver=1.0') }}"></script>
<script type='text/javascript' src="{{ asset('plantillas/simplicity/wp-content/themes/simplicity/js/plugins039c.js?ver=3.6') }}"></script>
<script type='text/javascript' src="{{ asset('plantillas/simplicity/https://maps.googleapis.com/maps/api/js?sensor=false&amp;ver=3.6') }}"></script>
<script type='text/javascript' src="{{ asset('plantillas/simplicity/wp-content/themes/simplicity/js/default_dynamic039c.php?ver=3.6') }}"></script>
<script type='text/javascript' src="{{ asset('plantillas/simplicity/wp-content/themes/simplicity/js/default.min039c.js?ver=3.6') }}"></script>
<script type='text/javascript' src="{{ asset('plantillas/simplicity/wp-content/themes/simplicity/js/custom_js039c.php?ver=3.6') }}"></script>
<script type='text/javascript' src="{{ asset('plantillas/simplicity/wp-includes/js/comment-reply.min039c.js?ver=3.6') }}"></script>
<script type='text/javascript' src="{{ asset('plantillas/simplicity/wp-content/themes/simplicity/js/ajax.min039c.js?ver=3.6') }}"></script>
<script type='text/javascript' src="{{ asset('plantillas/simplicity/wp-content/themes/simplicity/js/toolbar039c.js?ver=3.6') }}"></script>
<script type='text/javascript' src="{{ asset('plantillas/simplicity/wp-content/themes/simplicity/js/jquery.stylish-select.min039c.js?ver=3.6') }}"></script>