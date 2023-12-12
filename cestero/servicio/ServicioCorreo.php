<?php

use PHPMailer\PHPMailer\PHPMailer;
require "vendor/autoload.php";

class ServicioCorreos {
    private $asunto;
    private $descripcion;
    private $destinatario;
    private $pdf;

    public function __construct($destinatario = null, $asunto = "asunto", $descripcion = "descripción", $pdf = null) {
        $this->asunto = $asunto;
        $this->descripcion = $descripcion;
        $this->destinatario = $destinatario;
        $this->pdf = $pdf;
    }

    public function enviar() {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug  = 2;
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = "tls";
        $mail->Host       = "smtp.gmail.com";
        $mail->Port       = 587;
        $mail->Username   = "zambranogeffrey@gmail.com";
        $mail->Password   = "boej glbp kgzj fudo";
        $mail->SetFrom('zambranogeffrey@gmail.com', 'Examen');
        $mail->Subject    = $this->asunto;
        $mail->addAttachment("pdfs/mipdf.pdf");
        $mail->MsgHTML($this->descripcion);
        $address = $this->destinatario;
        $mail->AddAddress($address, "Yo");

        $result = $mail->Send();

        if(!$result) {
            echo "Error" . $mail->ErrorInfo;
        } else {
            echo "Enviado<br>";
        }
    }
}

?>