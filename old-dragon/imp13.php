<?php

ini_set("max_execution_time", 3);
$host ="192.168.63.16";
$comunidade="public";

$teste = snmpget($host, $comunidade, ".1.3.6.1.2.1.25.1.1.0");
$teste2 = snmpget($host, $comunidade, ".1.3.6.1.2.1.1.1.0");


//1.3.6.1.2.1.43.8.2.1.14.1.1	prtInputVendorName	RICOH	
$fabricante = snmpget($host, $comunidade, "1.3.6.1.2.1.43.8.2.1.14.1.1");

//1.3.6.1.2.1.43.5.1.1.16.1	prtGeneralPrinterName "Aficio MP 201"	
$modelo = snmpget($host, $comunidade, "1.3.6.1.2.1.43.5.1.1.16.1");

//1.3.6.1.2.1.43.5.1.1.17.1	prtGeneralSerialNumber	W3058600473	
$numero_de_serie = snmpget($host, $comunidade, "1.3.6.1.2.1.43.5.1.1.17.1");

//1.3.6.1.2.1.43.10.2.1.4.1.1	prtMarkerLifeCount	
$contador_geral = snmpget($host, $comunidade, "1.3.6.1.4.1.367.3.2.1.2.19.1.0");

//1.3.6.1.2.1.43.11.1.1.9.1.1	prtMarkerSuppliesLevel	INTEGER	-3	
$nivel_de_suprimento = snmpget($host, $comunidade, "1.3.6.1.2.1.43.11.1.1.9.1.1");

//1.3.6.1.2.1.43.11.1.1.6.1.1	prtMarkerSuppliesDescription	OCTET-STRING	"Toner preto"	
$descricao_de_suprimento = snmpget($host, $comunidade, "1.3.6.1.2.1.43.11.1.1.6.1.1");


$teste4 = snmpget($host, $comunidade, "1.3.6.1.2.1.43.11.1.1.6.1.1");




print "Fabricante:".$fabricante."<br>";
print "Modelo:".$modelo."<br>";
print "Número de Série:".$numero_de_serie."<br>";
print "Contador Geral:".$contador_geral."<br>";
print "Nível de Suprimento:".$nivel_de_suprimento."<br>";




?>

