<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sessaoController
 *
 * @author matheus
 */
class sessao {

    /**
     * Grava os dados do usuário na sessão
     * @param type $dados
     */
    function gravaSessao($dados = null) {
        $_SESSION['user']['email'] = $dados['email'];
        $_SESSION['user']['nome'] = $dados['nome'];
    }

    function validaSessao() {
        if (!isset($_SESSION['user']['email']) && !isset($_SESSION['user']['nome'])) {
            unset($_SESSION);
            $this->frontpage();
        }
    }

    public function frontpage() {
        header("Location: login.php");
    }
    
    
    

}
