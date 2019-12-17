<?php



ini_set("max_execution_time", 0);

//Criação do socket no inicio do arquivo, isso vai permitir que este seja reaproveitado inumeras vezes
error_reporting(~E_WARNING);
	 
$server = '192.168.63.200';
$port = 4376;
 
if(!($sock = socket_create(AF_INET, SOCK_DGRAM, 0)))
{
	$errorcode = socket_last_error();
	$errormsg = socket_strerror($errorcode);
	 
	die("Couldn't create socket: [$errorcode] $errormsg \n");
}

echo "Socket created \n";

//$t = tocar("Senha321:v");

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

/* Fechei por ja ter um fechar conexao no control_bd
function fecharConexao($link){
  mysqli_close($link);
}
*/


//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::


$GLOBALS ["horaControle"]= "00:00";

function verificarHora(){
    date_default_timezone_set("America/Recife");
    return date('H:i');
   // print date('H:i');
}

function verificarDia(){
    date_default_timezone_set("America/Recife");
    return date('N');
}


/*

function verificarIgualdade(){
    $hora = verificarHora();

   // $vetor_hora = array("11:48","11:49");
    

    if($hora == "15:43"){

        tocar("Senha321:p:1:1:1");
        $horaControle = "15:45";
    }
}
http://localhost/_drag.on/motor_toque.php


function verificarIgualdade(){
    
    $hora = verificarHora();
    print $GLOBALS["horaControle"];
    $vetor_hora = array("11:20","11:21");
    

    if($hora == $vetor_hora[0] && $GLOBALS["horaControle"] <> $vetor_hora[0]){
        
            tocar("Senha321:p:1:1:1");
            $GLOBALS["horaControle"] = $vetor_hora[0];

        
    }else  if($hora == $vetor_hora[1] && $GLOBALS["horaControle"] <> $vetor_hora[1]){  
        
            tocar("Senha321:p:1:1:1");
            $GLOBALS["horaControle"] = $vetor_hora[1];
          
        
    }
}
*/

function darPartida(){
    
    while (true) {
		$hora = verificarHora();
		// print $GLOBALS["horaControle"];
		$vetor_hora = array("07:00","07:45","08:30","08:50","09:35", "10:20", "10:30", "11:15", "12:00", "13:00", "13:45","14:30", "14:50","15:35", "16:20", "16:30", "17:15","18:00");

		if($hora == $vetor_hora[0]){  
				tocar("Senha321:p:8:1:1");// TOQUE ENTRADA
		}else  if($hora == $vetor_hora[1]){  
				tocar("Senha321:p:5:1:1");// TOQUE PEQUENO
		}else  if($hora == $vetor_hora[2]){  
				tocar("Senha321:p:8:1:1");// TOQUE NOVA UALA
		}else  if($hora == $vetor_hora[3]){  
				tocar("Senha321:p:8:1:1");// TOQUE PEQUENO
		}else  if($hora == $vetor_hora[4]){  
				tocar("Senha321:p:5:1:1");
		}else  if($hora == $vetor_hora[5]){  
				tocar("Senha321:p:8:1:1");
		}else  if($hora == $vetor_hora[6]){  
				tocar("Senha321:p:8:1:1");
		}else  if($hora == $vetor_hora[7]){  
				tocar("Senha321:p:5:1:1");
		}else  if($hora == $vetor_hora[8]){  
				tocar("Senha321:p:8:1:1");
		}else  if($hora == $vetor_hora[9]){  
				tocar("Senha321:p:8:1:1");
		}else  if($hora == $vetor_hora[10]){  
				tocar("Senha321:p:5:1:1");
		}else  if($hora == $vetor_hora[11]){  
				tocar("Senha321:p:8:1:1");
		}else  if($hora == $vetor_hora[12]){  
				tocar("Senha321:p:8:1:1");
		}else  if($hora == $vetor_hora[13]){  
				tocar("Senha321:p:5:1:1");
		}else  if($hora == $vetor_hora[14]){  
				tocar("Senha321:p:8:1:1");
		}else  if($hora == $vetor_hora[15]){  
				tocar("Senha321:p:8:1:1");
		}else  if($hora == $vetor_hora[16]){  
				tocar("Senha321:p:5:1:1");
		}else  if($hora == $vetor_hora[17]){  
				tocar("Senha321:p:8:1:1");
		}
		
		sleep(60);
	}
   
}


function tocar($string){
	
	global $sock, $server, $port;
	 
	//Communication loop

    //Take some input to send
    $input = $string;
    //Send the message to the server
    if( ! socket_sendto($sock, $input , strlen($input) , 0 , $server , $port))
    {
        $errorcode = socket_last_error();
        $errormsg = socket_strerror($errorcode);
         
        die("Could not send data: [$errorcode] $errormsg \n");
    }
         
    //Now receive reply from server and print it
    //if(socket_recv ( $sock , $reply , 2045 , MSG_WAITALL ) === FALSE)
	if(socket_recv ( $sock , $reply , 2045) === FALSE)
    {
        $errorcode = socket_last_error();
        $errormsg = socket_strerror($errorcode);
         
        die("Could not receive data: [$errorcode] $errormsg \n");
    }
     
    echo "Reply : $reply";

	
}

tocar("Senha321:p:1:1:1"); # Toque quando o serviço é iniciado

#Controle de toque
darPartida();



?>