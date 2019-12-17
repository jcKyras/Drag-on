<?php

include ("classes/impressora.php");
include("control_bd.php");

//$logado = $_SESSION['usuario'];
session_start();




if(isset($_POST['loginbtn'])){
   print("entrouuuu2");
   //session_cache_expire(1);

  //session_start();
  // as variáveis login e senha recebem os dados digitados na página anterior
  //$login = $_POST['login'];
  //$senha = $_POST['senha'];

  $_SESSION['usuario'] = "qwe";
  $_SESSION['controle'] = "1";
  //setcookie('nomeUsuario', "qwe", time() + 30);
  //header('location:index2.php');
  print($_SESSION["usuario"]);
}



if(isset($_POST['sairbtn'])){
         
        session_destroy();

            header('location: index2.php');
        
    
}



/*
session_start();
if (isset($_SESSION["usuario"])) {
     if (isset($_COOKIE['nomeUsuario'])) {
               
                print("está logado");
                //carrega botao de deslogar
                //retira o botao de logar
                
                //verifica o codigo de controle

                //carrega os menus correpsondentes
                //carrega o codigo dos modulos correspondentes chamando arquivos exteriores

      }else{

                //encaminha para a pagina principal do ezperza
                //carrega botao de logar
              print("não esta logado 2");
               // header("location: ../login.php");
    
      }
    
 
}else{ 
print("não esta logado 1");
}







if(isset($_POST['loginbtn'])){
    $login = $_POST['login'];
    $senha = $_POST['senha'];


    // $row = verificarlogin($login, $senha);
////////////// FALTA IMPLEMFUNÇÃO /////////////////////////

    if($senha == "123"){
           session_start();
            $_SESSION['usuario'] = "qwe";
          setcookie('nomeUsuario', "qwe");
           setcookie('controleUsuario',"1", time() + 60);

           // header('location: index2.php');
            print("asdasdasdasdad");
            print($_SESSION['usuario']);
        }
      }

        /*

session_start();
if (isset($_SESSION["usuario"])) {
     setcookie('nomeUsuario', '');
    session_destroy();
    

}

if (isset($_POST["loginbtn"])) {



    $matricula = $_POST["matricula"];
    $senha = $_POST['senha'];
    //////////////////////////////////////////////////
    if ($matricula == 'admin') {

        $nomeDoCara = 'Administrador';

        if ($nomeDoCara) {
            session_start();
            $_SESSION['usuario'] = $nomeDoCara;
            $_SESSION['controle'] = $_COOKIE['controleUsuario'];

             setcookie('nomeUsuario', $nomeDoCara, time() + 60);
            
            header("location: index2.php");
        }
    } else {


        }

        // put your code here
    }

/*
session_start();
if(isset($_SESSION['usuario'])){

    if(isset($_COOKIE['nomeUsuario'])){
        $_SESSION['usuario'] = $_COOKIE['nomeUsuario'];
        $_SESSION['controle'] = $_COOKIE['controleUsuario'];

    }else{

    }
}


if(isset($_POST['loginbtn'])){
    $login = $_POST['login'];
    $senha = $_POST['senha'];


     $row = verificarlogin($login, $senha);
////////////// FALTA IMPLEMFUNÇÃO /////////////////////////

   if($senha == $row["senha"]){
            session_start();
            $_SESSION['usuario'] = $row["nome"];
            setcookie('nomeUsuario', $row["nome"]);
            setcookie('controleUsuario',$row["controle"]);

            header('location: index2.php');
        }

    */
/*
    if($login=='admin' && $senha='123'){
        

        session_start();
            $_SESSION['usuario'] = 'Administrador';
            setcookie('nomeUsuario', "Administrador");
            setcookie('controleUsuario',1);

            header('location: index2.php');
      


    }
      */





?>




<!DOCTYPE html>
<html>
    <head>
        
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">

        <link href="css/reset.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/npm.js"></script>
        <script src="js/bootstrap.js"></script>

        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/jquery.leanModal.min.js"></script>

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>


    	<div id="topo">
            <center><img src="img/dragon banner.png"></center>

           <?php 

           
            if(isset($_SESSION['usuario'])){
                print(' <span id="barra_Nome">Bem vindo, '.$_SESSION['usuario'].'</span> 
                    <form method="POST" action="index2.php">
                    <input type="submit" class="flatbtn" id="modaltrigger_sair" name="sairbtn" value="Sair">
                    </form>

                    ');
            }else{
                
                    print(' <a href="#loginmodal" class="flatbtn" id="modaltrigger">Logar</a>');
            }
            
            
           ?>
            



             <form method="POST" action="index2.php">
              <div id="loginmodal" style="display:none;">
                <h1>Login</h1>
                <form id="loginform" name="loginform" method="post" action="index.html">
                  <label for="username">Login:</label>
                  <input type="text" name="login" id="username" class="txtfield" tabindex="1">
                  
                  <label for="password">Senha:</label>
                  <input type="password" name="senha" id="password" class="txtfield" tabindex="2">
                  
                  <div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu hidemodal" value="Efetuar login" tabindex="3"></div>
                </form>
              </div>
            <script type="text/javascript">
            $(function(){
              $('#loginform').submit(function(e){
                return false;
              });
              
              $('#modaltrigger').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
            });
            </script>
            </form>






        </div>


    <div id="segMenu">
        <nav>
             <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#impressoras" aria-controls="home" role="tab" data-toggle="tab">Impressoras</a></li>
           <?php 
           
            if(isset($_SESSION['controle'])){
                //fazer uma fução aki depois
                if( $_SESSION['controle']==1){
                    print(' <li role="presentation"><a href="#pagina_medicao" aria-controls="profile" role="tab" data-toggle="tab">Medição</a></li>');
                }
            }
            
           ?>
           
           
          </ul>

        </nav>
    </div>    