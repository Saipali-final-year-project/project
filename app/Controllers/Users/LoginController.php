<?php

namespace App\Controllers\Users;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel;
use App\Models\AdminModel;
use App\Models\SeekerModel;
use App\Models\StaffModel;
use App\Models\DriverModel;
use App\Models\Google;


class LoginController extends ResourceController
{
   
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
    */

    public function __construct() {
        helper( [ 'form', 'url', 'file', 'date' ] );
        $this->adminModel = new AdminModel();
        $this->staffModel = new StaffModel();
        $this->userModel = new UserModel();
        $this->driverModel = new DriverModel();
        $this->SeekerModel = new SeekerModel();
        $this->security =  \Config\Services::security();
    }

    public function index()
    {
        $data = [];
        require_once APPPATH."Libraries/vendor/autoload.php";
        $googleClient = new \Google_Client();

        $googleClient->setClientId('719181008376-qdpsn271p19n2pcdlghujq0ltsuno2ck.apps.googleusercontent.com');
        $googleClient->setClientSecret('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');
        $googleClient->setRedirectUri('http://localhost/Myproject/login2/proccess');
        $googleClient->addScope('email');
        $googleClient->addScope('profile');
 
       
       
            $data['loginButton'] = $googleClient->createAuthUrl();
            return view('login',$data);
        
    }
    public function index4()
    {
        $data = [];
        require_once APPPATH."Libraries/vendor/autoload.php";
        $googleClient = new \Google_Client();

        $googleClient->setClientId('719181008376-qdpsn271p19n2pcdlghujq0ltsuno2ck.apps.googleusercontent.com');
        $googleClient->setClientSecret('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');
        $googleClient->setRedirectUri('http://localhost/Myproject/login4/proccess');
        $googleClient->addScope('email');
        $googleClient->addScope('profile');
 
       
       
            $data['loginButton'] = $googleClient->createAuthUrl();
            return view('loginnnn',$data);
        
    }
    public function index1()
    {
        $data = [];
        require_once APPPATH."Libraries/vendor/autoload.php";
        $googleClient = new \Google_Client();

        $googleClient->setClientId('719181008376-qdpsn271p19n2pcdlghujq0ltsuno2ck.apps.googleusercontent.com');
        $googleClient->setClientSecret('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');
        $googleClient->setRedirectUri('http://localhost/Myproject/login1/proccess');
        $googleClient->addScope('email');
        $googleClient->addScope('profile');
 
       
       
            $data['loginButton'] = $googleClient->createAuthUrl();
            return view('loginn',$data);
        
    }
    public function index3()
    {
        $data = [];
        require_once APPPATH."Libraries/vendor/autoload.php";
        $googleClient = new \Google_Client();

        $googleClient->setClientId('719181008376-qdpsn271p19n2pcdlghujq0ltsuno2ck.apps.googleusercontent.com');
        $googleClient->setClientSecret('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');
        $googleClient->setRedirectUri('http://localhost/Myproject/login3/proccess');
        $googleClient->addScope('email');
        $googleClient->addScope('profile');
 
       
       
            $data['loginButton'] = $googleClient->createAuthUrl();
            return view('loginnn',$data);
        
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function google()
    {
        $google = new Google();
        $session = session();
        require_once APPPATH."Libraries/vendor/autoload.php";
        $googleClient = new \Google_Client();

        $googleClient->setClientId('719181008376-qdpsn271p19n2pcdlghujq0ltsuno2ck.apps.googleusercontent.com');
        $googleClient->setClientSecret('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');
        $googleClient->setRedirectUri('http://localhost/Myproject/login2/proccess');
        $googleClient->addScope('email');
        $googleClient->addScope('profile');

        $token = $googleClient->fetchAccessTokenWithAuthCode($this->request->getVar('code'));
        if (!isset($token['error']))
        {
            $googleClient->setAccessToken($token['access_token']);
            $googleService = new \Google_Service_Oauth2($googleClient);
            $data = $googleService->userinfo->get();
        }
        $userdata=[
            'oauth_id'=> $data['id'],
            'firstname' =>$data['given_name'],
            'lastname' =>$data['family_name'],
            'username'=>$data['name'],
            'email' => $data['email'],
            'profile' => $data['picture'],
            'isLoggedIn' => true
 
            
        ];
        $guser =  $google->where('email', $userdata['email'])->first();
        if($userdata['email']==isset($guser['email']))
        {
            $id=$guser['id'];
            $google->update($id,$userdata);
        
            $session->set($userdata);
            return redirect()->to(base_url('/dashboard'));
            
        }
        else{
            $google->save($userdata);
            
            $session->set($userdata);
            return redirect()->to(base_url('/dashboard'));
        }
 

    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }

/// CUSTOMER/////////////////////////////////////
////////////////////////////////////////////////
    public function authenticate()
    {
        $session = session();
        $inputs = $this->validate([
            'email' => 'required|valid_email',
            'password' => 'required|min_length[5]'
        ]);
        if (!$inputs) {
            return view('login', [
                'validation' => $this->validator
            ]);
        }
        
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $this->SeekerModel->where('email', $email)->first();

        if (is_null($user)) {
            session()->setFlashdata('failed', 'Failed! incorrect email');
            return redirect()-> to(base_url('/login2')) -> withInput()->with('error', 'Invalid email .');
        }
        $pwd_verify = password_verify($password, $user['password']);

        if (!$pwd_verify) {
            session()->setFlashdata('failed', 'Failed! incorrect password');
            return redirect()->to(base_url('/login2')) ->withInput()->with('error', 'Invalid  password.');
        }
        if ($user['type']=='0') {
            $ses_data = [
                'id' => $user['id'],
                'firstname' => $user['firstname'],
                'lastname' => $user['lastname'],
                'email' => $user['email'],
                'mobile' => $user['mobile'],
                'photo' => $user['photo'],
                'district' => $user['district'],
                'town' => $user['town'],
                'subcounty' => $user['subcounty'],
                'type' => $user['type'],
                'isLoggedIn' => true
            ];
            $session->set($ses_data);
            return redirect()->to(base_url('/'));
         }else{
            session()->setFlashdata('failed', 'Failed! incorrect password');
            return redirect()->to(base_url('/login2')) ->withInput()->with('error', 'Your account is inactive.');
         }
    }

/// ADMIN/////////////////////////////////////
////////////////////////////////////////////////
public function authenticate1()
{
    $session = session();
    $inputs = $this->validate([
        'email' => 'required|valid_email',
        'password' => 'required|min_length[5]'
    ]);
    if (!$inputs) {
        return view('loginn', [
            'validation' => $this->validator
        ]);
    }
    
    $email = $this->request->getVar('email');
    $password = $this->request->getVar('password');

    $user = $this->adminModel->where('email', $email)->first();

    if (is_null($user)) {
        session()->setFlashdata('failed', 'Failed! incorrect email');
        return redirect()-> to(base_url('/login1')) -> withInput()->with('error', 'Invalid email .');
    }
    $pwd_verify = password_verify($password, $user['password']);

    if (!$pwd_verify) {
        session()->setFlashdata('failed', 'Failed! incorrect password');
        return redirect()->to(base_url('/login1')) ->withInput()->with('error', 'Invalid  password.');
    }
    if ($user['type']=='1') {
        $ses_data = [
            'id' => $user['id'],
            'firstname' => $user['firstname'],
            'lastname' => $user['lastname'],
            'email' => $user['email'],
            'mobile' => $user['mobile'],
            'photo' => $user['photo'],
            'type' => $user['type'],
            'isLoggedIn' => true
        ];
        $session->set($ses_data);
        return redirect()->to(base_url('/dashboard'));
     }else{
        session()->setFlashdata('failed', 'Failed! incorrect password');
        return redirect()->to(base_url('/login1')) ->withInput()->with('error', 'Your account is inactive.');
     }
}

/// STAFF/////////////////////////////////////
////////////////////////////////////////////////
public function authenticate3()
{
    $session = session();
    $inputs = $this->validate([
        'email' => 'required|valid_email',
        'password' => 'required|min_length[5]'
    ]);
    if (!$inputs) {
        return view('loginnn', [
            'validation' => $this->validator
        ]);
    }
    
    $email = $this->request->getVar('email');
    $password = $this->request->getVar('password');

    $user = $this->staffModel->where('email', $email)->first();

    if (is_null($user)) {
        session()->setFlashdata('failed', 'Failed! incorrect email');
        return redirect()-> to(base_url('/login3')) -> withInput()->with('error', 'Invalid email .');
    }
    $pwd_verify = password_verify($password, $user['password']);

    if (!$pwd_verify) {
        session()->setFlashdata('failed', 'Failed! incorrect password');
        return redirect()->to(base_url('/login3')) ->withInput()->with('error', 'Invalid  password.');
    }
    if ($user['type']=='2') {
        $ses_data = [
            'id' => $user['id'],
            'firstname' => $user['firstname'],
            'lastname' => $user['lastname'],
            'email' => $user['email'],
            'mobile' => $user['mobile'],
            'photo' => $user['photo'],
            'type' => $user['type'],
            'isLoggedIn' => true
        ];
        $session->set($ses_data);
        return redirect()->to(base_url('/dashboard'));
     }else{
        session()->setFlashdata('failed', 'Failed! incorrect password');
        return redirect()->to(base_url('/login3')) ->withInput()->with('error', 'Your account is inactive.');
     }
}

/// DRIVER/////////////////////////////////////
////////////////////////////////////////////////
public function authenticate4()
{
    $session = session();
    $inputs = $this->validate([
        'email' => 'required|valid_email',
        'password' => 'required|min_length[5]'
    ]);
    if (!$inputs) {
        return view('loginnnn', [
            'validation' => $this->validator
        ]);
    }
    
    $email = $this->request->getVar('email');
    $password = $this->request->getVar('password');

    $user = $this->driverModel->where('email', $email)->first();

    if (is_null($user)) {
        session()->setFlashdata('failed', 'Failed! incorrect email');
        return redirect()-> to(base_url('/login4')) -> withInput()->with('error', 'Invalid email .');
    }
    $pwd_verify = password_verify($password, $user['password']);

    if (!$pwd_verify) {
        session()->setFlashdata('failed', 'Failed! incorrect password');
        return redirect()->to(base_url('/login4')) ->withInput()->with('error', 'Invalid  password.');
    }
    if ($user['type']=='3'){
        $ses_data = [
            'id' => $user['id'],
            'firstname' => $user['firstname'],
            'lastname' => $user['lastname'],
            'email' => $user['email'],
            'mobile' => $user['mobile'],
            'photo' => $user['photo'],
            'type' => $user['type'],
            'isLoggedIn' => true
        ];
        $session->set($ses_data);
        return redirect()->to(base_url('/dashboard'));
     }
    //  elseif ($user['type']=='0') {
    //     $ses_data = [
    //         'id' => $user['id'],
    //         'firstname' => $user['firstname'],
    //         'lastname' => $user['lastname'],
    //         'email' => $user['email'],
    //         'mobile' => $user['mobile'],
    //         'type' => $user['type'],
    //         'isLoggedIn' => true
    //     ];
    //     $session->set($ses_data);
    //     return redirect()->to(base_url('/'));}
     else{
        session()->setFlashdata('failed', 'Failed! incorrect password');
        return redirect()->to(base_url('/login4')) ->withInput()->with('error', 'Your account is inactive.');
     }
}


////////////////////////////////////////////////
////////////////////////////////////////////////
    public function logout()
    {
        $session = session();
        session_destroy();
        return redirect()->to(base_url('/login2'));
    }
}
