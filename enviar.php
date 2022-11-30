<?php
if(isset($_POST['enviar'])){
    if(!empty($_POST['nombre']) && !empty($_POST['mail']) && !empty($_POST['mensaje'])){
        $nombre = $_POST['nombre'];
        $mail = $_POST['mail'];
        $mensaje = $_POST['mensaje'];
    }
    else{
        echo "<h4>COMPLETE TODOS LOS CAMPOS POR FAVOR</h4>";
    }
}

$header = 'From: ' . "$nombre" . " \r\n";
$header = 'Reply-To: ' . "$mail" . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";

$mensaje = "Este mensaje fue enviado por: " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "El día: " . date('dd/mm/yy', time()) . " \r\n";
$mensaje .= "Mensaje: " . $mensaje;


$para = 'fedebinia1997@gmail.com';
$asunto = 'Mensaje de: ' . $nombre . 'EN LA WEB FEDERICO BINIA';

$mail = mail($para, $asunto, $mensaje, $header);

if($mail){
echo "<h4>Mensaje enviado correctamente!</h4>";
}

header("location:inicio.php");

?>
