/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {

    $("#enviar").click(function () {

        if ($("#mes1").val() == "def") {
            alert("Preencha o mês inicial");
        }
        
        if ($("#mes2").val() == "") {
            alert("Preencha o mês final");
        }

    });

});


