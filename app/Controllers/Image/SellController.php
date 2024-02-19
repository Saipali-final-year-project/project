<?php

namespace App\Controllers\Sell;

use CodeIgniter\RESTful\ResourceController;
use App\Models\SellModel;
use App\Models\ImageModel;

class SellController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */

    public function __construct()
    {
        helper(['form', 'url','file','date']);
        $this->SellModel = new SellModel();
        $this->ImageModel = new ImageModel();
        $this->security =  \Config\Services::security();
    }
 
    public function index()
    {
        $data = [];
        return view('register', $data);
    }

    
    
    public function sell()
    {

       $categories = $this->request->getVar('categories');
       $region = $this->request->getVar('region');
       $ctype = $this->request->getVar('ctype1');
       $ctype .= $this->request->getVar('ctype2');
       $ctype .= $this->request->getVar('ctype3');
       $district = $this->request->getVar('district1');
       $district .= $this->request->getVar('district2');
       $district .= $this->request->getVar('district3');
       $district .= $this->request->getVar('district4');
       $brand = $this->request->getVar('brand');
       $description = $this->request->getVar('description');
       $color = $this->request->getVar('color');
       $material = $this->request->getVar('material');


       

       if ($categories =='' || $region == '' ){
        session()->setFlashdata('failed', 'Category or Region  is Empty!.');
        return redirect() -> to(base_url('/dashboard'));
       }else if ($ctype == '' || $district == '') {
        # code...
        session()->setFlashdata('failed', 'Catergory Type or District is Empty!.');
        return redirect() -> to(base_url('/dashboard'));
       }else{
        
        $this->SellModel->save(["categories"=>$categories,"region"=>$region,"ctype"=>$ctype,"district"=>$district,"brand"=>$brand,"description"=>$description,"color"=>$color,"material"=>$material,]);
        session()->setFlashdata('success', 'Successfully!.'); 
       return redirect() -> to(base_url('/dashboard'));
       }
       
    }
    

  
}

