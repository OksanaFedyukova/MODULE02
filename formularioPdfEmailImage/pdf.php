<?php
require './vendor/autoload.php';

use Dompdf\Dompdf;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido1 = htmlspecialchars($_POST['apellido1']);
    $apellido2 = htmlspecialchars($_POST['apellido2']);
    $actividades = $_POST['actividades'];
    $actitud = htmlspecialchars($_POST['actitud']);
    $idiomas = isset($_POST['idiomas']) ? $_POST['idiomas'] : [];

    $html = "<h1>Expediente de alumno</h1>";
    $html .= "<p><strong>Nombre:</strong> $nombre $apellido1 $apellido2</p>";
    $html .= "<table border='1' style='width:100%; border-collapse: collapse;'>";
    $html .= "<tr>
                <th>Ejercicio</th>
                <th>Nota</th>
                <th>Comentario</th>
              </tr>";

    foreach ($actividades as $actividad) {
        $nombreEjercicio = htmlspecialchars($actividad['nombre']);
        $nota = htmlspecialchars($actividad['nota']);
        $comentario = htmlspecialchars($actividad['comentario']);
        $html .= "<tr>
                    <td>$nombreEjercicio</td>
                    <td>$nota</td>
                    <td>$comentario</td>
                  </tr>";
    }

    $html .= "</table>";
    $html .= "<p><strong>Actitud:</strong> $actitud</p>";
    $html .= "<p><strong>Idiomas:</strong> " . (count($idiomas) > 0 ? implode(', ', $idiomas) : 'Ninguno') . "</p>";

    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    $pdfOutput = $dompdf->output();
    $pdfFilePath = sys_get_temp_dir() . '/expediente_' . preg_replace('/[^a-zA-Z0-9_-]/', '_', $apellido1) . '.pdf';
    file_put_contents($pdfFilePath, $pdfOutput);

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'oksana.fedyukova.cecot@gmail.com'; 
        $mail->Password = 'cpgw ajba kzoc hddq'; 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Port = 465;

        $mail->setFrom('oksana.fedyukova.cecot@gmail.com', 'Oksana');
        $mail->addAddress('avseiya22n@gmail.com', 'MI DESTINARIO'); 

        $mail->isHTML(true);
        $mail->Subject = 'Expediente de alumno';
        $mail->Body = 'Adjunto encontrarás el expediente del alumno.';

        $mail->addAttachment($pdfFilePath);

        $mail->send();
        echo 'Correo enviado correctamente';
    } catch (Exception $e) {
        echo "No se pudo enviar el correo. Error: {$mail->ErrorInfo}";
    } finally {
        unlink($pdfFilePath);
    }
}
?>