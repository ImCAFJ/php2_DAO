<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);//FILTER_VALIDATE_EMAIL= FILTRO PARA VALIDAR E-MAIL

if($name && $email) {

   if($usuarioDao->findByEmail($email) === false) {
       $novoUsuario = new Usuario();
       $novoUsuario->setNome($name);
       $novoUsuario->setEmail($email);

       $usuarioDao->add( $novoUsuario );
   
        header("Location: index.php");// Após concluir a inserção de dados, volto para o meu index
        exit;

    } else {
        header("Location: index.php");
        exit;
    }
}else {
    header("Location: adicionar.php");
    exit;
}