<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\CropUploadModel;

class StaffdashController extends BaseController
{
    public function index()
    {
        return view('dashboards/staff/staff_index');
    }
    public function upload()   
    {
        $database = \Config\Database::connect();
        $table = 'crop_upload';

        $query = $database->getFieldData($table);

        $headers = array();
        foreach ($query as $field) {
            $headers[] = $field->name;
        }
        return view('dashboards/staff/upload', ['headers' => $headers]);
    }
    public function create(){
        $cropuploadmodel = new CropUploadModel();
        $file = $this->request->getFile('cimage');
        if ($file->isValid() && !$file->hasMoved()){
            $imageName =$file->getRandomName();
            $file->move('public/', $imageName);
        }
        $data = [
            'Name' => $this->request->getPost('cname'),
            'picture' => $imageName,
            'Price' => $this->request->getPost('cprice'),
            'Description' => $this->request->getPost('cdescription'),
            'Pickup_Date' => $this->request->getPost('cdate'),

        ];
        $cropuploadmodel->save($data);
        return redirect()->to('dashboards/staff/upload')->with('status','Uploaded successffuuly');
    }
    public function add_farmers(){
        return view('dashboards/staff/add_farmers');
    }
    public function add_drivers(){
        return view('dashboards/staff/add_drivers');
    }

}