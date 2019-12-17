<?php


$host ="192.168.63.12";
$comunidade="public";


//1.3.6.1.2.1.43.8.2.1.14.1.1	prtInputVendorName	RICOH	
$fabricante = snmpget($host, $comunidade, "1.3.6.1.2.1.43.8.2.1.14.1.1");

//1.3.6.1.2.1.43.5.1.1.16.1	prtGeneralPrinterName "Aficio MP 201"	
$modelo = snmpget($host, $comunidade, "1.3.6.1.2.1.43.5.1.1.16.1");

//1.3.6.1.2.1.43.5.1.1.17.1	prtGeneralSerialNumber	W3058600473	
$numero_de_serie = snmpget($host, $comunidade, "1.3.6.1.2.1.43.5.1.1.17.1");

	
//1.3.6.1.2.1.43.10.2.1.4.1.1	prtMarkerLifeCount	COUNTER	8260	

$contador_geral = snmpget($host, $comunidade, "1.3.6.1.2.1.43.10.2.1.4.1.1");
//prtMarkerSuppliesLevel,1.3.6.1.2.1.43.11.1.1.9,Printer-MIB,OBJECT

//nivel de suprimento final 9.1.X onde o x vai de 1 a 4	
//1.3.6.1.2.1.43.11.1.1.9.1.1	prtMarkerSuppliesLevel	INTEGER	-3	
$nivel_de_suprimento_1_bruto = snmpget($host, $comunidade, "1.3.6.1.2.1.43.11.1.1.9.1.1");
$nivel_de_suprimento_2_bruto = snmpget($host, $comunidade, "1.3.6.1.2.1.43.11.1.1.9.1.2");
$nivel_de_suprimento_3_bruto = snmpget($host, $comunidade, "1.3.6.1.2.1.43.11.1.1.9.1.3");
$nivel_de_suprimento_4_bruto = snmpget($host, $comunidade, "1.3.6.1.2.1.43.11.1.1.9.1.4");

//TRATANDO A STRING PARA PEGAR SOMENTE O VALOR DE INTERESSE
$nivel_de_suprimento_1 =  substr($nivel_de_suprimento_1_bruto,9);
$nivel_de_suprimento_2 =  substr($nivel_de_suprimento_2_bruto,9);
$nivel_de_suprimento_3 =  substr($nivel_de_suprimento_3_bruto,9);
$nivel_de_suprimento_4 =  substr($nivel_de_suprimento_4_bruto,9);

//descrição do suprimento final 6.1.X Onde o x pode ser de 1 a 4
//1.3.6.1.2.1.43.11.1.1.6.1.1	prtMarkerSuppliesDescription	OCTET-STRING	"Toner preto"	
$descricao_de_suprimento_1_bruto = snmpget($host, $comunidade, "1.3.6.1.2.1.43.11.1.1.6.1.1");
$descricao_de_suprimento_2_bruto = snmpget($host, $comunidade, "1.3.6.1.2.1.43.11.1.1.6.1.2");
$descricao_de_suprimento_3_bruto = snmpget($host, $comunidade, "1.3.6.1.2.1.43.11.1.1.6.1.3");
$descricao_de_suprimento_4_bruto = snmpget($host, $comunidade, "1.3.6.1.2.1.43.11.1.1.6.1.4");


//TRATANDO A STRING PARA PEGAR SOMENTE O VALOR DE INTERESSE
$descricao_de_suprimento_1 = substr($descricao_de_suprimento_1_bruto,9,strlen($descricao_de_suprimento_1_bruto)-10);
$descricao_de_suprimento_2 = substr($descricao_de_suprimento_2_bruto,9,strlen($descricao_de_suprimento_2_bruto)-10);
$descricao_de_suprimento_3 = substr($descricao_de_suprimento_3_bruto,9,strlen($descricao_de_suprimento_3_bruto)-10);
$descricao_de_suprimento_4 = substr($descricao_de_suprimento_4_bruto,9,strlen($descricao_de_suprimento_4_bruto)-10);


$teste4 = snmpget($host, $comunidade, "1.3.6.1.2.1.43.11.1.1.6.1.1");

//TESTE



print "Fabricante:".$fabricante."<br>";
print "Modelo:".$modelo."<br>";
print "Número de Série:".$numero_de_serie."<br>";
print "Contador Geral:".$contador_geral."<br>";
print "descricao_de_suprimento1:".$descricao_de_suprimento_1." Nível de Suprimento:".$nivel_de_suprimento_1."%<br>";
print "descricao_de_suprimento2:".$descricao_de_suprimento_2." Nível de Suprimento:".$nivel_de_suprimento_2."%<br>";
print "descricao_de_suprimento3:".$descricao_de_suprimento_3." Nível de Suprimento:".$nivel_de_suprimento_3."%<br>";
print "descricao_de_suprimento4:".$descricao_de_suprimento_4." Nível de Suprimento:".$nivel_de_suprimento_4."%<br>";




?>