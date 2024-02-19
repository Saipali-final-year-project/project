<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UsersModel;

class LogiinController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        return view('admin');
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
    public function new()
    {
        //
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
    public function authenticate()
    {
        $session = session();
        $userModel = new UsersModel();
        $inputs = $this->validate([
            'email_err' => 'required|valid_email',
            'password_err' => 'required|min_length[5]'
        ]);

        if (!$inputs) {
            return view('admin', [
                'validation' => $this->validator
            ]);
        }

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');



        $user = $userModel->where('email', $email)->first();


        if (is_null($user)) {
            session()->setFlashdata('failed', 'Failed! incorrect email');
            return redirect()->back()->withInput()->with('error', 'Invalid email or password.');
        }

        $pwd_verify = password_verify($password, $user['password']);

        //         if ($pwd_verify) {
        //             echo 'Hello';
        //         } else {
        //             echo 'Not Working';
        //         }
        // exit();
        if (!$pwd_verify) {
            session()->setFlashdata('failed', 'Failed! incorrect password');
            return redirect()->back()->withInput()->with('error', 'Invalid email or password.');
        }

        $ses_data = [
            'id' => $user['id'],
            'firstname' => $user['firstname'],
            'lastname' => $user['lastname'],
            'email' => $user['email'],
            'isLoggedIn' => true
        ];

        $session->set($ses_data);
        return redirect()->to(base_url('/admin_index'));

    }
    public function logout()
    {
        $session = session();
        session_destroy();
        return redirect()->to(base_url('admin'));
    }
}