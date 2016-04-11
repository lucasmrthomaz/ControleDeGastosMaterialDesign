<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author  Matheus Scarpato Fidelis
 * @email   matheus.fidelis@industriafox.com
 * @date    11/04/2016
 */
class email {

  var $smtpHost = "smtp.gmail.com"; // Endereço do servidor SMTP
  var $smtpAuth = true;
  var $smtpUsername = 'wildwingflashblade1@gmail.com'; // Usuário do servidor SMTP
  var $smtpPassword = 'SistemaFoda'; // Senha da caixa postal utilizada
  var $nameSender = 'Sistema de Controle de Gastos';
  var $emailTo = 'matheus.fidelis@industriafox.com';

  public function sendEmail($html) {
    $mail = new PHPMailer();
    $mail->IsSMTP(); // Define que a mensagem será SMTP
    $mail->Port = 587;
    $mail->Host = $this->smtpHost;
    $mail->SMTPAuth = $this->smtpAuth;
    $mail->Username = $this->smtpUsername;
    $mail->Password = $this->smtpPassword;

    $this->constructMail($mail, $html);
  }

  private function constructMail($mail, $html) {
    $mail->setFrom($this->smtpUsername, $this->nameSender);
    $mail->addAddress($this->emailTo, 'Joe User');
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = 'RELATÓRIO DE PEDIDO';
    $mail->Body = $html;
    
    $this->send($mail);
  }

  private function send($mail) {
    if (!$mail->send()) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
      header("Location: /relatorios.php");
    }
  }

}
