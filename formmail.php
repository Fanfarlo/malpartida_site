<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<META HTTP-EQUIV="refresh" content="0;URL=gracias.html">
<title>Email Form</title>
</head>

<body>
<?php
  $nombre=addslashes($_POST['nombre']);
  $email=addslashes($_POST['email']);
  $phone=addslashes($_POST['phone']);
  $desar=addslashes($_POST['desar']);
  $mani=addslashes($_POST['mani']);
  $trans=addslashes($_POST['trans']);
  $cyd=addslashes($_POST['cyd']);
  $embje=addslashes($_POST['embje']);
  $fecha=addslashes($_POST['fecha']);
  $hora=addslashes($_POST['hora']);
  $art=addslashes($_POST['art']);
  $direcpartida=addslashes($_POST['direcpartida']);
  $pisopartida=addslashes($_POST['pisopartida']);
  $caracpartida=addslashes($_POST['caracpartida']);
  $direcllegada=addslashes($_POST['direcllegada']);
  $pisollegada=addslashes($_POST['pisollegada']);
  $caracllegada=addslashes($_POST['caracllegada']);



 // you can specify which email you want your contact form to be emailed to here

  $toemail = "presupuestos@transportesmalpartida.com";
  $subject = "Presupuesto";

  $headers = "MIME-Version: 1.0\n"
            ."From: \"".$nombre."\" <".$correo.">\n"
            ."Content-type: text/html; charset=iso-8859-1\n";

  $body =   "Nombre: ".$nombre."<br>\n"
            ."Email: ".$email."<br>\n"
            ."Telefono: ".$phone."<br>\n"
            ."Servicio: ".$desar." ".$mani." ".$trans." ".$cyd." ".$embje."<br>\n"
            ."Fecha: ".$fecha."<br>\n"
            ."Hora: ".$hora."<br>\n"
            ."Lista de articulos: ".$art."<br>\n"
            ."Dirección de Partida: ".$direcpartida."<br>\n"
            ."Piso de Partida: ".$pisopartida."<br>\n"
            ."Caracteristicas Partida: ".$caracpartida."<br>\n"
            ."Dirección de Llegada: ".$direcllegada."<br>\n"
            ."Piso de Llegada: ".$pisollegada."<br>\n"
            ."Caracteristicas Llegada: ".$caracllegada."<br>\n"


    mail($toemail, $subject, $body, $headers);
?>
</body>
</html>
