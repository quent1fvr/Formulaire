<?php
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['apellido']) ){


    

    $name = $_POST['name'];
    $apellido= $_POST['apellido'];
    $email = $_POST['email'];
    $teléfono=$_POST['teléfono'];
    $subject = $_POST['subject'];
    $checkbox = $_POST['checkbox'];
    
 

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();
    //smtp settings
    $mail->isSMTP();
    $mail->Host = "";
    $mail->SMTPAuth = true;
    $mail->Username = "sdsqgqs0dsfq@gmail.com";
    $mail->Password = 'vflgsyqkfbmuhrgg';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";
    $mail->SetLanguage(“es”, “opcional/ruta/al/directorio/language/”);
    $mail->CharSet = 'UTF-8';

    //email settings
    $mail->isHTML(true);
    $mail->setFrom($email);
	$mail->addAddress("quentidfqfazfzaqner@icloudsdsdfqdzfazdf.com");
    $mail->Subject = " Hola X, has recibido una solicitud de contacto a través de la web sqdfqsd.";
    $mail->Body =
    "Aquí están sus coordenadas : <br>
    
    Nombre:$name <br>
    Apellido: $apellido <br>
    Teléfono: $teléfono <br>
    Correo electrónico: $email <br> <br>
    lo que le interesa : $subject <br>
    ¿Cómo nos ha encontrado? $checkbox internet";

    if($mail->send()){
        $status = "success";
        $response = "Mensaje enviado con éxito";
    }
    else
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}

?>