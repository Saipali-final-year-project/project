<?php
// USING PHPMAILER
namespace App\Controllers;

use App\Controllers\BaseController;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require 'vendor/autoload.php';
class ContactController extends BaseController
{

    public function index()
    {
        return view('contact');
    }
    public function create()
    {
        helper(['form', 'url']);
        $userMsg = $this->request->getVar('message');
        $email = $this->request->getVar('email');
        $db      = \Config\Database::connect();
        $builder = $db->table('contacts');

        $data = [

            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'message'  => $this->request->getVar('message')
        ];

        $save = $builder->insert($data);
        $mail = new PHPMailer(true);

        // try {
        //Server settings
        $mail->SMTPDebug = 0; //SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'rickrambo29@@gmail.com';                     //SMTP username
        $mail->Password   = 'phgtqljdlwsukzsx';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($email, 'Enquiry');
        $mail->addAddress('sisali7@gmail.com', 'Admin User');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Enquiry';
        $mail->Body    = $userMsg;
        'This is the HTML message body <b>in bold!</b>';
        // $mail->AltBody = $message; //'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        $data = [
            'success' => true,
            'data' => $save,
            'msg' => "Thanks for contact us. We get back to you"
        ];
        return $this->response->setJSON($data);
    }
}
