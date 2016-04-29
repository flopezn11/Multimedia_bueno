<?php 
if(isset($_POST['submit'])){
    $to = $_POST['nombre']; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['nombre'];
    $last_name = $_POST['apellido'];
    $subject = "Form submission";
    $subject2 = "Postal de Valencia";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['mensaje'];
    $message2 = "Mensaje de " . $first_name . "\n\n" . $_POST['mensaje'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); 
    
    header('Location: Enviado.html');
    }
?>