    <?php
include("control_toque.php");

include("control_bd.php");

print $p = tocar("Senha321:t");
$res = getEstado();
$estado = $res["estado"];
$dia = verificarDia();

if($dia <6){
    if($estado == 1){
        verificarIgualdade();

        date_default_timezone_set("America/Recife");
        $hora= date('H:i:s');
        $hora = $hora."\r\n";
      // $hora = $hora+" ";
        // Abre ou cria o arquivo bloco1.txt
        // "a" representa que o arquivo é aberto para ser escrito
        $fp = fopen("C:\Users\Administrador\Desktop\hora.txt", "a");
         
        // Escreve "exemplo de escrita" no bloco1.txt

        $escreve = fwrite($fp, $hora);
         
        // Fecha o arquivo
        fclose($fp); //-> OK
       

    }else{
       $fp = fopen("C:\Users\Administrador\Desktop\hora.txt", "a");
         
        // Escreve "exemplo de escrita" no bloco1.txt

       $texto = "entrou no else";

        $escreve = fwrite($fp, $texto);
         
        // Fecha o arquivo
        fclose($fp); //-> OK

    }
}    
    ?>