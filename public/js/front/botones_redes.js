/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//
//
//var visible = false;
//lsjQuery(document).ready(function () {
//    lsjQuery('body').on('click', 'span', function () {
//        if (lsjQuery(this).prop('class') === "social_share_holder") {
//            if (!visible) {
//                visible = true;
//                $j(".social_share_dropdown").css("visibility", "visible");
//                $j(".social_share_dropdown").css("overflow", "visible");
//                $j(".social_share_dropdown").css("display", "block");
//            } else {
//                visible = false;
//                $j(".social_share_dropdown").css("visibility", "hidden");
//                $j(".social_share_dropdown").css("overflow", "hidden");
//                $j(".social_share_dropdown").css("display", "none");
//            }
//        }
//    });
//});


function mostrar_botones(id) {
    var estado = $j("#" + id).attr("estado");
    if (estado === "cerrado") {
        $j("#" + id).attr("estado", "abierto");
        $j("#social_share_dropdown_" + id).css("visibility", "visible");
        $j("#social_share_dropdown_" + id).css("overflow", "visible");
        $j("#social_share_dropdown_" + id).css("display", "block");
    } else {
        $j("#" + id).attr("estado", "cerrado");
        $j("#social_share_dropdown_" + id).css("visibility", "hidden");
        $j("#social_share_dropdown_" + id).css("overflow", "hidden");
        $j("#social_share_dropdown_" + id).css("display", "none");
    }
}