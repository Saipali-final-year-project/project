<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EmailController extends BaseController
 {

    public function sendMail() {

       
        $rules= [
            'email' => 'required|valid_email',
            'subject' => 'required|min_length[5]',
            'message' => 'required|min_length[10]'
        ];

        if ($this->validate( $rules ) ) {
         
        }
        else {
            $data[ 'validation' ] = $this->validator;
            return view( 'contact', $data );
        }

    //     $to = $this->request->getVar( 'email' );
    //     $subject = $this->request->getVar( 'subject' );
    //     $message = $this->request->getVar( 'message' );

    //     $email = \Config\Services::email();

    //     $email->setTo( $to );
    //     $email->setFrom( 'admin@programmingfields.com', 'Contact Email' );
    //     $email->setSubject( $subject );
    //     $email->setMessage( $message );

    //     if ( $email->send() ) {
    //         $response = 'Email successfully sent';
    //     } else {
    //         $data = $email->printDebugger( [ 'headers' ] );
    //         $response = 'Email send failed';
    //     }
    //     return redirect()->to( base_url( 'email' ) )->with( 'message', $response );
    }
}
