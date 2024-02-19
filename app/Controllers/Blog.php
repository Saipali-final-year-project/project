<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Auth;
use App\Models\Categories;
use App\Models\Posts;
use App\Models\SellModel;
use App\Models\ImageModel;
use App\Models\SeekerModel; 
use App\Models\BranchModel; 

class Blog extends BaseController
{
    public function __construct()
    {
        $this->request = \Config\Services::request();
        $this->db = db_connect();
        $this->SeekerModel = new SeekerModel();
        $this->BranchModel = new BranchModel();

    }

    public function index()
    {
        $data['seekers'] =  $this->SeekerModel->findAll();
        $data['branches'] =  $this->BranchModel->findAll();
        return view('index', $data);
        
    }

    public function request(){
        $data['seekers'] =  $this->SeekerModel->findAll();
        $data['branches'] =  $this->BranchModel->findAll();
        if ($this->request->getMethod() === 'post') {
            $model = new SeekerModel;
            $data['seekers'] =  $this->SeekerModel->findAll();
            $data['branches'] =  $this->BranchModel->findAll();
            $data1 = [
                'firstname' => $this->request->getVar('firstname'),
                'lastname' => $this->request->getVar('lastname'),
                'email' => $this->request->getVar('email'),
                'mobile' => $this->request->getVar('mobile'),
                'NIN' => $this->request->getVar('NIN'),
                'region' => $this->request->getVar('region'),
                'district' => $this->request->getVar('district'),
                'town'  => $this->request->getVar('town'),
                'subcounty'  => $this->request->getVar('subcounty'),
                'collection'  => $this->request->getVar('collection'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'type'  => 0,
            ];
            $insertedId = $model->insert($data1);
            return redirect()->to('/');
        }
        // session()->setFlashdata('success', 'Successfully!.');
        return redirect()->to('/');
    }
       
  
    public function contactus()
    {
        return view('contact', $this->data);
    }
    
    
   
}
