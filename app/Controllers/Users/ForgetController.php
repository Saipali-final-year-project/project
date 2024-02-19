<?php

namespace App\Controllers\Users;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel;

class ForgetController extends ResourceController {
    /**
    * Return an array of resource objects, themselves in array format
    *
    * @return mixed
    */
    public $email;

    public function __construct() {
        helper( [ 'form', 'url', 'file', 'date' ] );
        $this->UserModel = new UserModel();
        $this->security =  \Config\Services::security();
        $this->email = \Config\Services::email();
    }

    public function index() {
        $data = [];
        return view( 'forget-password', $data );
    }

 

    public function register() {
        $rules = [
            'firstname' => 'required|min_length[3]',
            'lastname' => 'required|min_length[3]',
            'email' => [ 'rules' => 'required|min_length[4]|max_length[255]|valid_email|is_unique[tblusers.email]' ],
            'mobile'=> 'required|max_length[10]|min_length[10]',
            'password' => [ 'rules' => 'required|min_length[8]|max_length[255]' ],
            'confirm_password'  => [ 'label' => 'confirm password', 'rules' => 'matches[password]' ]
        ];

        if ( $this->validate( $rules ) ) {
            $model = new UserModel();
            $data[ 'token' ] = csrf_hash();
            $uniid = md5( str_shuffle( 'abcdefghijklmnopqrstuvwxyz'.time() ) );
            $data = [
                'firstname' => $this->request->getVar( 'firstname' ),
                'lastname' => $this->request->getVar( 'lastname' ),
                'email'    => $this->request->getVar( 'email' ),
                'mobile'   =>$this->request->getVar( 'mobile' ),
                'password' => password_hash( $this->request->getVar( 'password' ), PASSWORD_DEFAULT ),
                'uniid'   =>$uniid,
            ];
            if ( $model->save( $data ) ) {
                $to = $this-> request->getVar( 'email' );
                $subject = 'Account Activation link - ORGNIC';
                $message = 'Hi ' .$this->request->getVar( 'firstname' ).'<br><br>Thanks Your account created '
                .'successfully. please click the below link to activate your account <br><br>'
                ."<a href='".base_url("/register/activate/").$uniid."' target='_blank'> Activate Now</a> <br><br> Thanks <br> ORGNIC";

                $this->email->setTo( $to );
                $this->email->setFrom( 'alexkkimera@gmail.com', 'Info' );
                $this->email->setSubject( $subject );
                $this->email->setMessage( $message );
                $filepath = 'assets/img/logo.png';
                $this->email->attach( $filepath );

                
                if ( $this->email->send() ) {
                    session()->setFlashdata( 'success', 'Account Created Successfully. Please activate your account', 100 );
                    return redirect() -> to ( base_url( '/register2' ) )-> withInput()->with( 'success', 'Account Created Successfully. Please activate your account', 100 );
                } else {
                    // $data = $email->printDebugger( [ 'header' ] );
                    // print_r( $data );
                    session()->setFlashdata( 'error', 'Account Created Successfully. Sorry! Unable to Create to send Activation link.  Contact Admin', 100 );
                    return redirect() -> to ( base_url( '/register2' ) )-> withInput()->with( 'error', 'Account Created Successfully. Sorry! Unable to Create to send Activation link.  Contact Admin', 100 );
                }

                // session()->setFlashdata( 'success', 'Success! registration completed.' );
                // return redirect() -> to ( base_url( '/register2' ) )-> withInput()->with( 'success', 'Success! registration completed.' );
            } else {
                session()->setFlashdata( 'error', 'Sorry! Unable to create an account, Try again', 100 );
                return redirect() -> to ( base_url( '/register2' ) );
            }

        } else {
            $data[ 'validation' ] = $this->validator;
            return view( 'register', $data );
        }
    }

    public function uniid_exists( $id ) {
        $db = \Config\Database::connect();
        $builder = $db->table( 'tblusers' );
        $builder->select('activation_date,uniid,status');
        $builder->where( 'uniid', $id );
        $result = $builder->get();
        if ( $builder->countAll() == 1 ) {
            return $result->getRow();
        } else {
            return FALSE;
        }
    }


    public function activate($uniid=null){
        $this->model = new UserModel();
      $data=[];
      if(!empty($uniid))
      {
      
       $userdata = $this->model->where('uniid', $uniid)->first();

       

       if($userdata)
       {
        $currTime = now();
        $pasTime =strtotime($userdata['activation_date']);
        $diffTime = (int)$currTime - (int)$pasTime;
        if(-6800 >= $diffTime){
            $id = $userdata['id'];
          if ($userdata['status'] == 'inactive') {
            $data=['status'=>'active'];
           $this->model->update($id,$data);
           $data['success']='Your account is successfully activated'; 
          }
          else {
            # code...
            $data['success']='Your account is already activated'; 
          }
        }
        else{
            $data['error']='Sorry! Activation link was expired!';    
        }
       }
       else{
        $data['error']='Sorry! We are unable to find your acount';
       }

      }
      else{
        $data['error']='Sorry! Unable to process your request';
      }
      return view('login',$data);
    }
  

}
