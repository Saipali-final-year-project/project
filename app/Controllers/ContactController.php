<?php

namespace App\Controllers;

use App\Controllers\BaseController;
class ContactController extends BaseController
{

    public function contactus()
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

        $email = \Config\Services::email();
        $email->setTo('stateokay@gmail.com');
        $email->setFrom('faithmercy563@gmail.com', 'Enquiry');

        $email->setSubject('Enquiry');
        $email->setMessage($userMsg);

        $email->send();
        // if ($email->send()) {
        //     echo 'Email successfully sent';
        // } else {
        //     $data = $email->printDebugger(['headers']);
        //     print_r($data);
        // }

        $data = [
            'success' => true,
            'data' => $save,
            'msg' => "Thanks for contacting us. We will get back to you"
        ];
        return $this->response->setJSON($data);
    }
    
}
