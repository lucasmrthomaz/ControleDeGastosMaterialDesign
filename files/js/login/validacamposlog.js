/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {

    $("#submit").click(function () {

        /*
         * Verifica se o campo de e-mail é nulo
         */
        if ($("#inputEmail").val() == "") {
            alert("Preencha o campo E-mail");
        }
        
        /*
         * Verifica se a senha é nula
         */
        if ($("#pass").val() == "") {
            alert("Preencha o campo Senha");
        }

    });


})