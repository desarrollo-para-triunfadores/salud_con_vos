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
    ajustar_elementos();
});


$j(window).resize(function () {
    ajustar_elementos();
});


function ajustar_elementos() {
    var ancho = $j(window).width();
    if (ancho < 800) {
        $j(".post_info").hide();
        $j("#fecha-movil").show();
        $j(".post_content_holder").css("width", "auto");
        $j(".quote").css("margin-top", "6%");
    } else {
        $j(".post_info").show();
        $j("#fecha-movil").hide();
        $j(".post_content_holder").css("width", "92%");
        $j(".quote").css("margin-top", "0px");
    }
}
