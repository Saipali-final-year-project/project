<?php

namespace App\Controllers\Admin;

use CodeIgniter\RESTful\ResourceController;
use App\Models\BranchModel;
use App\Models\UserModel;
use App\Models\StaffModel;
use App\Models\DonorModel;
use App\Models\AdminModel;
use App\Models\DriverModel;
use App\Models\CargoModel;
use App\Models\AvailableBloodModel;
use App\Models\OrderModel;
use App\Models\CarImagesModel;
use App\Models\SeekerModel;
use App\Models\DeliverModel;

class DeliveryController extends ResourceController {
    /**
    * Return an array of resource objects, themselves in array format
    *
    * @return mixed
    */
    public function __construct() {
        helper( [ 'form', 'url', 'file', 'date' ] );
        $this->AdminModel = new AdminModel();
        $this->StaffModel = new StaffModel();
        $this->UserModel = new UserModel();
        $this->DonorModel = new DonorModel();
        $this->BranchModel = new BranchModel();
        $this->DriverModel = new DriverModel();
        $this->CargoModel = new CargoModel();
        $this->AvailableBloodModel = new AvailableBloodModel();
        $this->OrderModel = new OrderModel();
        $this->CarImagesModel = new CarImagesModel();
        $this->SeekerModel = new SeekerModel();
        $this->DeliverModel = new DeliverModel();
        $this->security =  \Config\Services::security();
    }
 
    #############  ADMINS ##############
    public function admins() {
        $data['page_title'] = "Admins";
        $data['branch'] =  $this->AdminModel->where('type','1')->findAll();
        return view( 'admin/admins', $data );
    }
    public function add_admin() {
        $dat['page_title'] = "Admins";
        if($this->request->getMethod()==='post'){
            $file=$this->request->getFile('photo');
            $name = $file->getRandomName();
            $file->move('assets/upload/',$name);
            $model = new AdminModel;
            $data = [
                'photo' => $name,
                'firstname' => $this->request->getVar( 'firstname' ),
                'lastname' => $this->request->getVar( 'lastname' ),
                'email' => $this->request->getVar( 'email' ),
                'mobile' => $this->request->getVar( 'mobile' ),
                'NIN' => $this->request->getVar( 'NIN' ),
                'password' => password_hash( $this->request->getVar( 'password' ), PASSWORD_DEFAULT ),
                'type'  => 1,
            ];
            $insertedId = $model->insert($data);
            $carimages = new CarImagesModel();
            $images = $this->request->getFiles();
            return redirect()->to(base_url('/admins'));
            // return view( 'admin/branch', $data );
        }
        session()->setFlashdata( 'success', 'Successfully!.' );
    }
    
    public function view_admin($id = null)
    {
        $data['page_title'] = "View Admins";
        $data['branch'] = $this->AdminModel->where('id',$id)->first();
        return view('admin/view_admins',$data);
    }
    public function editadminimage($id=null)
    {
        $data['branch'] = $this->AdminModel->where('id', $id)->first();
        return view('admin/editadminimage', $data);
    }

    public function updateadminimage($id = null)
    {
        $model = new AdminModel;
        $image = $model->find($id);
        $file = $this->request->getFile('photo');
        if ($file->isValid() && !$file->hasMoved()) {
            $old_img_name = $image['photo'];
            if (file_exists("uploads/" . $old_img_name)) {
                unlink("assets/upload/" . $old_img_name);
            }
            $imageName = $file->getRandomName();
            $file->move("assets/upload/", $imageName);
            // }
        } else {
            $old_img_name = $image['photo'];
            $imageName = $old_img_name;
        }
        $data = [
            'photo' => $imageName
        ];
        $model->update($id, $data);
        return redirect()->to(site_url('/admins'));
    }
    public function edit_admin($id = null)
    {
        $data['page_title'] = "Edit Admin";
        $data['branch'] = $this->AdminModel->where('id',$id)->first();
        return view('admin/edit_admins',$data);
    }
    public function update_admin($id = null) {
        $data['page_title'] = "Admins";
        $id = trim($this->request->getVar('id'));
        $dat = [

            'firstname' => $this->request->getVar( 'firstname' ),
            'lastname' => $this->request->getVar( 'lastname' ),
            'email' => $this->request->getVar( 'email' ),
            'mobile' => $this->request->getVar( 'mobile' ),
            'NIN' => $this->request->getVar( 'NIN' ),
            'status' => $this->request->getVar( 'status' ),
        ];
        $this->AdminModel->update($id,$dat);
        session()->setFlashdata( 'success', 'Successfully!.' );
        return redirect()->to(base_url('/admins'));
        // return view( 'admin/branch', $data );
    }
    public function delete_admin($id = null)
    {
      
        $this->AdminModel->where('id',$id)->delete($id);
        return redirect()->to(base_url('/admins'));
    }
    ############# PASSWORD #############
    public function change_pwd($id = null)
    {
        $data['page_title'] = "Edit Password";
        $data['branch'] = $this->AdminModel->where('id',$id)->first();
        return view('admin/change_pwd',$data);
    }
    public function update_pwd($id = null) {
        $data['page_title'] = "Password";
        $id = trim($this->request->getVar('id'));
        $query=mysqli_query($con,"select ID from tbladmin where ID='$adminid' and   Password='$cpassword'");
        $dat = [

            'firstname' => $this->request->getVar( 'firstname' ),
            'lastname' => $this->request->getVar( 'lastname' ),
            'email' => $this->request->getVar( 'email' ),
            'mobile' => $this->request->getVar( 'mobile' ),
            'NIN' => $this->request->getVar( 'NIN' ),
            'status' => $this->request->getVar( 'status' ),
            'password' => password_hash( $this->request->getVar( 'password' ), PASSWORD_DEFAULT ),
        ];
        $this->AdminModel->update($id,$dat);
        session()->setFlashdata( 'success', 'Successfully!.' );
        return redirect()->to(base_url('/dashboard'));
        // return view( 'admin/branch', $data );

        if(isset($_POST['submit'])){
            $adminid=$_SESSION['aid'];
            $cpassword=md5($_POST['currentpassword']);
            $newpassword=md5($_POST['newpassword']);
            $query=mysqli_query($con,"select ID from tbladmin where ID='$adminid' and   Password='$cpassword'");
            $row=mysqli_fetch_array($query);
            if($row>0){
                $ret=mysqli_query($con,"update tbladmin set Password='$newpassword' where ID='$adminid'");
                echo "<script>alert('Password changed successfully.');</script>";   
                echo "<script>window.location.href='change-password.php'</script>";
            } else {
                echo "<script>alert('Your current password is wrong');</script>";   
                echo "<script>window.location.href='change-password.php'</script>";
            }
        }
    }

    ############# BRANCH ###############

    public function branch() {
        
        $data['page_title'] = "Branch";
        $data['branch'] = $this->BranchModel->orderBy('id','DESC')->findAll();
        return view( 'admin/branch', $data );
    }
    public function add_branch() {
        $data['page_title'] = "Branch";
        $dat = [
            'Bname' => $this->request->getVar( 'name' ),
            'building' => $this->request->getVar( 'building' ),
            'city' => $this->request->getVar( 'city' ),
            'division' => $this->request->getVar( 'division' ),
            'contact' => $this->request->getVar( 'contact' ),
        ];
        $this->BranchModel->save($dat);
        session()->setFlashdata( 'success', 'Successfully!.' );
        return redirect()->to(base_url('/branch'));
        // return view( 'admin/branch', $data );
    }
    public function view_branch($id = null)
    {
        $data['page_title'] = "View Branch";
        $data['branch'] = $this->BranchModel->where('id',$id)->first();
        return view('admin/view_branch',$data);
    }
    public function edit_branch($id = null)
    {
        $data['page_title'] = "Edit Branch";
        $data['branch'] = $this->BranchModel->where('id',$id)->first();
        return view('admin/edit_branch',$data);
    }
    public function update_branch($id = null) {
        $data['page_title'] = "Branch";
        $id = trim($this->request->getVar('id'));
        $dat = [
            'Bname' => $this->request->getVar( 'name' ),
            'building' => $this->request->getVar( 'building' ),
            'city' => $this->request->getVar( 'city' ),
            'division' => $this->request->getVar( 'division' ),
            'contact' => $this->request->getVar( 'contact' ),
        ];
        $this->BranchModel->update($id,$dat);
        session()->setFlashdata( 'success', 'Successfully!.' );
        return redirect()->to(base_url('/branch'));
        // return view( 'admin/branch', $data );
    }
    public function delete_branch($id = null)
    {
      
        $this->BranchModel->where('id',$id)->delete($id);
        return redirect()->to(base_url('/branch'));
    }
    public function arrived_at() {
        $data['page_title'] = "Arrived at Cargo";
        $data['cargo'] = $this->CargoModel->where('status','arrived at')->findAll();
        return view( 'admin/arrived_at', $data );
    }
    
    public function collected() {
        $data['page_title'] = "Collected Cargo";
        $data['cargo'] = $this->CargoModel->where('status','collected')->findAll();
        return view( 'admin/collected', $data );
    }
    
    public function delivered() {
        $data['page_title'] = "Delivered Cargo";
        $data['cargo'] = $this->CargoModel->where('status','Delivered')->findAll();
        return view( 'admin/delivered', $data );
    }
    
    public function items_accepted() {
        $data['page_title'] = "Items Accepted";
        $data['cargo'] = $this->CargoModel->where('status','items accepted')->findAll();
        return view( 'admin/items_accepted', $data );
    }
    
    public function out_for_delivery() {
        $data['page_title'] = "Out For Delivery";
        $data['cargo'] = $this->CargoModel->where('status','in transit')->findAll();
        return view( 'admin/out_for_delivery', $data );
    }
    
    ############# PARCEL ###############
    public function parcel() {
        $data['page_title'] = "All Parcel";
        $data['cargo'] = $this->CargoModel->orderBy('id','DESC')->findAll();
        return view( 'admin/parcel', $data );
    }
    public function add_parcel() {
        $data['page_title'] = "Add Delivery"; 
        $data['branch'] = $this->BranchModel->orderBy('id','DESC')->findAll();
        $data['driver'] =  $this->DriverModel->where('status','active')->findAll();
        // $data['branch'] = $this->OrderModel->where('id',$id)->first();
        if ($this->request->getMethod() === 'post') {
            $model = new StaffModel;
            $dat = [
                'vechile_plate' => $this->request->getVar( 'vechile_plate' ),
                'driver_name' => $this->request->getVar( 'driver_name' ),
                'driver_mobile' => $this->request->getVar( 'driver_mobile' ),
                'invoice_no' => $this->request->getVar( 'invoice_no' ),
                'product_name' => $this->request->getVar( 'product_name' ),
                'price' => $this->request->getVar( 'price' ),
                'qty' => $this->request->getVar( 'qty' ),
                'booking_mode' => $this->request->getVar( 'booking_mode' ),
                'mode' => $this->request->getVar( 'mode' ),
                'dept_time' => $this->request->getVar( 'dept_name' ),
                'status' => $this->request->getVar( 'status' ),
                'sender_name' => $this->request->getVar( 'sender_name' ),
                'sender_mobile' => $this->request->getVar( 'sender_mobile' ),
                'sender_branch' => $this->request->getVar( 'sender_branch' ),
                'rev_name' => $this->request->getVar( 'rev_name' ),
                'rev_mobile' => $this->request->getVar( 'rev_mobile' ),
                'rev_branch' => $this->request->getVar( 'rev_branch' ),
                'comment' => $this->request->getVar( 'comment' ),
               
            ];
            $this->CargoModel->update($dat);
            session()->setFlashdata( 'success', 'Successfully!.' );
        }
        // session()->setFlashdata( 'success', 'Successfully!.' );

        return view('admin/add_parcel',$data);
    }
    public function view_parcel($id = null)
    {
        $data['page_title'] = "View Parcel";
        $data['cargo'] = $this->CargoModel->where('id',$id)->first();
        return view('admin/view_parcel',$data);
    }
    public function edit_parcel($id = null)
    {
        $data['page_title'] = "Edit Parcel";
        $data['branch'] = $this->BranchModel->orderBy('id','DESC')->findAll();
        $data['driver'] =  $this->UserModel->where('type','3')->where('status','active')->findAll();
        $data['cargo'] = $this->CargoModel->where('id',$id)->first();
        return view('admin/edit_parcel',$data);
    }
    public function update_parcel($id = null) {
        $data['page_title'] = "parcel";
        $id = trim($this->request->getVar('id'));
        $rules=[
            'vechile_plate' => 'required|min_length[3]',
            'driver_name' => 'required|min_length[3]',
            'driver_mobile' => 'required|min_length[3]',
            'invoice_no' => 'required|min_length[3]',
            'product_name' => 'required|min_length[3]',
            'price' => 'required|min_length[3]',
            'qty' => 'required|min_length[3]',
            'booking_mode' => 'required|min_length[3]',
            'mode' => 'required|min_length[3]',
            'dept_name' => 'required|min_length[3]',
            'status' => 'required|min_length[3]',
            'sender_branch' => 'required|min_length[3]',
            
        ];
        if($this->request->getMethod() == 'post')
        {
            if ($this->validate( $rules ) ) {
                $dat = [
                    'vechile_plate' => $this->request->getVar( 'vechile_plate' ),
                    'driver_name' => $this->request->getVar( 'driver_name' ),
                    'driver_mobile' => $this->request->getVar( 'driver_mobile' ),
                    'invoice_no' => $this->request->getVar( 'invoice_no' ),
                    'product_name' => $this->request->getVar( 'product_name' ),
                    'price' => $this->request->getVar( 'price' ),
                    'qty' => $this->request->getVar( 'qty' ),
                    'booking_mode' => $this->request->getVar( 'booking_mode' ),
                    'mode' => $this->request->getVar( 'mode' ),
                    'dept_time' => $this->request->getVar( 'dept_name' ),
                    'status' => $this->request->getVar( 'status' ),
                    'sender_name' => $this->request->getVar( 'sender_name' ),
                    'sender_mobile' => $this->request->getVar( 'sender_mobile' ),
                    'sender_branch' => $this->request->getVar( 'sender_branch' ),
                    'rev_name' => $this->request->getVar( 'rev_name' ),
                    'rev_mobile' => $this->request->getVar( 'rev_mobile' ),
                    'rev_branch' => $this->request->getVar( 'rev_branch' ),
                    'comment' => $this->request->getVar( 'comment' ),
                   
                ];
                $this->CargoModel->update($id,$dat);
                session()->setFlashdata( 'success', 'Successfully!.' );
                
            }
            else
            {
                session()->setFlashdata( 'failed', 'Sorry! Something is Wrong.' );
                return redirect()->to(base_url('/parcel'));
            }
            return redirect()->to(base_url('/parcel'));
        }
        
        // return view( 'admin/parcel', $data );
    }
    public function delete_parcel($id = null)
    {
      
        $this->CargoModel->where('id',$id)->delete($id);
        return redirect()->to(base_url('/parcel'));
    }
    public function pickedup() {
        $data['page_title'] = "Pickedup";
        $data['cargo'] = $this->CargoModel->where('status','picked')->findAll();
        return view( 'admin/picked-up', $data );
    }
    
    public function ready_to_pickup() {
        $data['page_title'] = "Ready To Pickup";
        $data['cargo'] = $this->CargoModel->where('status','Ready')->findAll();
        return view( 'admin/ready_to_pickup', $data );
    }
    
    public function shipped() {
        $data['page_title'] = "Shipped";
        $data['cargo'] = $this->CargoModel->where('status','shipped')->findAll();
        return view( 'admin/shipped', $data );
    }

    ############# STAFF ###############
    
    public function staff() {
        $data['page_title'] = "Staff";
        $data['branch'] =  $this->StaffModel->where('type','2')->findAll();
        $data['branches'] =  $this->BranchModel->findAll();
        return view( 'admin/staff', $data );
    } 
    public function add_staff() {
        $dat['page_title'] = "Staff";
        if ($this->request->getMethod() === 'post') {
            $model = new StaffModel;
            $data = [
                'firstname' => $this->request->getVar( 'firstname' ),
                'lastname' => $this->request->getVar( 'lastname' ),
                'email' => $this->request->getVar( 'email' ),
                'mobile' => $this->request->getVar( 'mobile' ),
                'NIN' => $this->request->getVar( 'NIN' ),
                'password' => password_hash( $this->request->getVar( 'password' ), PASSWORD_DEFAULT ),
                'type'  => 2,
            ];
            $this->$model->save($dat);
            session()->setFlashdata( 'success', 'Successfully!.' );
            return redirect()->to(base_url('/staff'));
        }
        session()->setFlashdata( 'success', 'Successfully!.' );
        
    }
    
    public function view_staff($id = null)
    {
        $data['page_title'] = "View Staff";
        $data['branch'] = $this->StaffModel->where('id',$id)->first();
        return view('admin/view_staff',$data);
    }
    public function edit_staff($id = null)
    {
        $data['page_title'] = "Edit Staff";
        $data['branch'] = $this->StaffModel->where('id',$id)->first();
        $data['carimages'] = $this->CarImagesModel->where('driver_id', $id)->findAll();
        return view('admin/edit_staff',$data);
    }
    public function editstaffimage($id=null)
    {
        $data['branch'] = $this->StaffModel->where('id', $id)->first();
        return view('admin/editstaffimage', $data);
    }
    public function updatestaffimage($id = null)
    {
        $model = new StaffModel;
        $image = $model->find($id);
        $file = $this->request->getFile('photo');
        if ($file->isValid() && !$file->hasMoved()) {
            $old_img_name = $image['photo'];
            if (file_exists("assets/upload/" . $old_img_name)) {
                unlink("assets/upload/" . $old_img_name);
            }
            $imageName = $file->getRandomName();
            $file->move("assets/upload/", $imageName);
            // }
        } else {
            $old_img_name = $image['photo'];
            $imageName = $old_img_name;
        }
        $data = [
            'photo' => $imageName
        ];
        $model->update($id, $data);
        return redirect()->to(site_url('/staff'));
    }
    public function update_staff($id = null) {
        $data['page_title'] = "Staff";
        $id = trim($this->request->getVar('id'));
        $dat = [

            'firstname' => $this->request->getVar( 'firstname' ),
            'lastname' => $this->request->getVar( 'lastname' ),
            'email' => $this->request->getVar( 'email' ),
            'mobile' => $this->request->getVar( 'mobile' ),
            'NIN' => $this->request->getVar( 'NIN' ),
            'status' => $this->request->getVar( 'status' ),
        ];
        $this->StaffModel->update($id,$dat);
        session()->setFlashdata( 'success', 'Successfully!.' );
        return redirect()->to(base_url('/staff'));
        // return view( 'admin/branch', $data );
    }
    public function delete_staff($id = null)
    {
      
        $this->StaffModel->where('id',$id)->delete($id);
        return redirect()->to(base_url('/staff'));
    }
     ############# donorS ###############
    
     public function donor() {
        $data['page_title'] = "donors";
        $data['branch'] =  $this->DonorModel->where('type','4')->findAll();
        return view( 'admin/donors', $data );
    }
     public function expired() {
        $data['page_title'] = "donors";
        $data['branch'] =  $this->DonorModel->where('type','4')->findAll();
        return view( 'admin/expired', $data );
    }
    public function add_donor() {
        $dat['page_title'] = "donors";
        if ($this->request->getMethod() === 'post') {
            $model = new DonorModel;
            $data = [
                'firstname' => $this->request->getVar( 'firstname' ),
                'lastname' => $this->request->getVar( 'lastname' ),
                'email' => $this->request->getVar( 'email' ),
                'mobile' => $this->request->getVar( 'mobile' ),
                'NIN' => $this->request->getVar( 'NIN' ),
                'district' => $this->request->getVar('district'),
                'county' => $this->request->getVar('county'),
                'subcounty' => $this->request->getVar('subcounty'),
                'village' => $this->request->getVar('village'),
                'bg' => $this->request->getVar('bg'),
                'password' => password_hash( $this->request->getVar( 'password' ), PASSWORD_DEFAULT ),
                'type'  => 4,
            ];
            $insertedId = $model->insert($data);
            $carimages = new CarImagesModel();
            $images = $this->request->getFiles();
            return redirect()->to(base_url('/donors'));
        }
        session()->setFlashdata( 'success', 'Successfully!.' );
        // return view( 'admin/branch', $data );
    }
    
    public function view_donor($id = null)
    {
        $data['page_title'] = "View donors";
        $data['branch'] = $this->DonorModel->where('id',$id)->first();
        return view('admin/view_donors',$data);
    }
    public function editdonorimage($id=null)
    {
        $data['seeker'] = $this->DonorModel->where('id', $id)->first();
        return view('admin/editdonorimage', $data);
    }

    public function updatedonorimage($id = null)
    {
        $model = new DonorModel;
        $image = $model->find($id);
        $file = $this->request->getFile('image');
        if ($file->isValid() && !$file->hasMoved()) {
            $old_img_name = $image['image'];
            if (file_exists("uploads/" . $old_img_name)) {
                unlink("assets/upload/" . $old_img_name);
            }
            $imageName = $file->getRandomName();
            $file->move("assets/upload/", $imageName);
            // }
        } else {
            $old_img_name = $image['image'];
            $imageName = $old_img_name;
        }
        $data = [
            'image' => $imageName
        ];
        $model->update($id, $data);
        return redirect()->to(site_url('/donors'));
    }
    public function edit_donor($id = null)
    {
        $data['page_title'] = "Edit donors";
        $data['branch'] = $this->DonorModel->where('id',$id)->first();
        return view('admin/edit_donors',$data);
    }
    public function update_donor($id = null) {
        $data['page_title'] = "donors";
        $id = trim($this->request->getVar('id'));
        $dat = [

            'firstname' => $this->request->getVar( 'firstname' ),
            'lastname' => $this->request->getVar( 'lastname' ),
            'email' => $this->request->getVar( 'email' ),
            'mobile' => $this->request->getVar( 'mobile' ),
            'NIN' => $this->request->getVar( 'NIN' ),
            'district' => $this->request->getVar('district'),
            'county' => $this->request->getVar('county'),
            'subcounty' => $this->request->getVar('subcounty'),
            'village' => $this->request->getVar('village'),
            'bg' => $this->request->getVar('bg'),
            'status' => $this->request->getVar( 'status' ),
        ];
        $this->DonorModel->update($id,$dat);
        session()->setFlashdata( 'success', 'Successfully!.' );
        return redirect()->to(base_url('/donors'));
        // return view( 'admin/branch', $data );
    }
    public function delete_donor($id = null)
    {
      
        $this->DonorModel->where('id',$id)->delete($id);
        return redirect()->to(base_url('/donors'));
    }
     ################ seekerS #################
     public function seekers()
     {
         $data['page_title'] = "seekers";
         $data['seekers'] =  $this->SeekerModel->findAll();
         $data['branches'] =  $this->BranchModel->findAll();
         return view('admin/seekers', $data);
     }
     public function add_seekers(){ 
         $dat['page_title'] = "seekers";
         if ($this->request->getMethod() === 'post') {
             $model = new SeekerModel;
 
             $data = [
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
             $insertedId = $model->insert($data);
             $carimages = new CarImagesModel();
             $images = $this->request->getFiles();
             return redirect()->to('/seekers');
         }
         session()->setFlashdata('success', 'Successfully!.');
     }
     public function personal(){
         $data['page_title'] = "seekers";
         $data['seekers'] =  $this->SeekerModel->findAll();
         return view('pages/public/personal', $data);
     }
     public function update_user(){
        $session = session();
        if($this->request->getMethod() == 'post'){
            extract($this->request->getPost());
            $verify_password = password_verify($current_password, $session->login_password);
            if($password != $cpassword){
                $session->setFlashdata('error',"Password does not match.");
            }elseif(!$verify_password){
                $session->setFlashdata('error',"Current Password is Incorrect.");
            }else{
                $udata= [];
                $udata['name'] = $name;
                $udata['email'] = $email;
                if(!empty($password))
                $udata['password'] = password_hash($password, PASSWORD_DEFAULT);
                $update = $this->auth_model->where('id',$session->login_id)->set($udata)->update();
                if($update){
                    $session->setFlashdata('success',"Your Account has been updated successfully.");
                    $user = $this->auth_model->where("id ='{$session->login_id}'")->first();
                    foreach($user as $k => $v){
                        $session->set('login_'.$k, $v);
                    }
                    return redirect()->to('update_user');
                }else{
                    $session->setFlashdata('error',"Your Account has failed to update.");
                }
            }
        }

        $this->data['session']=$session;
        $this->data['page_title']="Users";
        $this->data['user'] = $this->auth_model->where("id ='{$session->login_id}'")->first();
        return view('pages/users/update_account', $this->data);
    }
     public function view_seekers($id = null)
     {
         $data['page_title'] = "View seekers";
         $data['seeker'] = $this->SeekerModel->where('id', $id)->first();
         $data['carimages'] = $this->CarImagesModel->where('driver_id', $id)->findAll();
         return view('admin/view_seekers', $data);
     }
 
     public function editseekerimage($id=null)
     {
         $data['seeker1'] = $this->SeekerModel->where('id', $id)->first();
         return view('admin/editcusomerimage', $data);
     }
 
     public function updateseekerimage($id = null)
     {
         $model = new SeekerModel;
         $image = $model->find($id);
         $file = $this->request->getFile('photo');
         if ($file->isValid() && !$file->hasMoved()) {
             $old_img_name = $image['photo'];
             if (file_exists("uploads/" . $old_img_name)) {
                 unlink("assets/upload/" . $old_img_name);
             }
             $imageName = $file->getRandomName();
             $file->move("assets/upload/", $imageName);
             // }
         } else {
             $old_img_name = $image['photo'];
             $imageName = $old_img_name;
         }
         $data = [
             'photo' => $imageName
         ];
         $model->update($id, $data);
         return redirect()->to(site_url('/seekers'));
     }
     public function edit_seekers($id = null)
     {
         $data['page_title'] = "Edit Seeker";
         $data['seekers'] = $this->SeekerModel->where('id', $id)->first();
         $data['branches'] =  $this->BranchModel->findAll();
         return view('admin/edit_seekers', $data);
     }
     public function update_seekers($id = null)
     {
         $data['page_title'] = "seekers";
         $id = trim($this->request->getVar('id'));
         $dat = [
 
             'firstname' => $this->request->getVar('firstname'),
             'lastname' => $this->request->getVar('lastname'),
             'email' => $this->request->getVar('email'),
             'mobile' => $this->request->getVar('mobile'),
             'NIN' => $this->request->getVar('NIN'),
             'status' => $this->request->getVar('status'),
             'region' => $this->request->getVar('region'),
             'district' => $this->request->getVar('district'),
             'town' => $this->request->getVar('town'),
             'subcounty' => $this->request->getVar('subcounty'),
             'collection' => $this->request->getVar('collection'),
         ];
 
 
         $this->SeekerModel->update($id, $dat);
         session()->setFlashdata('success', 'Successfully!.');
         return redirect()->to(base_url('/seekers'));
     }
     public function delete_seekers($id = null)
     {
 
         $this->SeekerModel->where('id', $id)->delete($id);
         return redirect()->to(base_url('/seekers'));
     }
     ############# Seeker ###############
    public function drivers() {
        $data['page_title'] = "Drivers";
        $data['drivers'] =  $this->DriverModel->findAll();
        $data['branches'] =  $this->BranchModel->findAll();
        return view('admin/drivers', $data);
    }
    public function add_drivers() {
        $dat['page_title'] = "Drivers";
        if ($this->request->getMethod() === 'post') {
            $file = $this->request->getFile('photo');
            $name = $file->getRandomName();
            $file->move('assets/upload/', $name);
            $model = new DriverModel;

            // $carimages = new DriverModel();
            $images = $this->request->getFiles();
            foreach ($images['userfiles'] as $image) {
                if ($image->isValid() && !$image->hasMoved()) {
                    $newName = $image->getRandomName();
                    $image->move('assets/upload/', $newName);

                    // Insert image data into the images table
                    $imageData = [
                        'carimages' => $newName,
                    ];
                    // $carimages->insert($imageData);
                }
            }
            $data = [
                'carimages' =>$newName,
                'photo' => $name,
                'firstname' => $this->request->getVar('firstname'),
                'lastname' => $this->request->getVar('lastname'),
                'email' => $this->request->getVar('email'),
                'mobile' => $this->request->getVar('mobile'),
                'NIN' => $this->request->getVar('NIN'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'licenseNo' => $this->request->getVar('licenseNo'),
                'numberplate' => $this->request->getVar('numberplate'),
                'capacity'  => $this->request->getVar('capacity'),
                'location'  => $this->request->getVar('location'),
                'latitude'  => $this->request->getVar('latitude'),
                'longitude'  => $this->request->getVar('longitude'),
                'deliveryprice'  => $this->request->getVar('deliveryprice'),
                'collection'  => $this->request->getVar('collection'),
                'type' => 3,
            ];

            $insertedId = $model->insert($data);

            return redirect()->to('/Drivers');
        }

        session()->setFlashdata('success', 'Successfully!.');
    }
    
    public function view_drivers($id = null)
    {
        $data['page_title'] = "View Drivers";
        $data['drivers'] = $this->DriverModel->where('id', $id)->first();
        $data['carimages'] = $this->CarImagesModel->where('driver_id', $id)->findAll();
        return view('admin/view_drivers', $data);
    }
    
    public function editdriverimage($id=null)
    {
        $data['drivers'] = $this->DriverModel->where('id', $id)->first();
        return view('admin/editdriverimage', $data);
    }
    public function updatedriverimage($id = null)
    {
        $model = new DriverModel;
        $image = $model->find($id);
        $file = $this->request->getFile('photo');
        if ($file->isValid() && !$file->hasMoved()) {
            $old_img_name = $image['photo'];
            if (file_exists("assets/upload/" . $old_img_name)) {
                unlink("assets/upload/" . $old_img_name);
            }
            $imageName = $file->getRandomName();
            $file->move("assets/upload/", $imageName);
            // }
        } else {
            $old_img_name = $image['photo'];
            $imageName = $old_img_name;
        }
        $data = [
            'photo' => $imageName
        ];
        $model->update($id, $data);
        return redirect()->to(site_url('/Drivers'));
    }
    public function edit_drivers($id = null)
    {
        $data['page_title'] = "Edit Drivers";
        $data['drivers'] = $this->DriverModel->where('id', $id)->first();
        $data['branches'] =  $this->BranchModel->findAll();
        return view('admin/edit_drivers', $data);
    }
    public function update_drivers($id = null) {
        $data['page_title'] = "Drivers";
        $id = trim($this->request->getVar('id'));
        $dat = [

            'firstname' => $this->request->getVar('firstname'),
            'lastname' => $this->request->getVar('lastname'),
            'email' => $this->request->getVar('email'),
            'mobile' => $this->request->getVar('mobile'),
            'NIN' => $this->request->getVar('NIN'),
            'status' => $this->request->getVar('status'),
            'licenseNo' => $this->request->getVar('licenseNo'),
            'numberplate' => $this->request->getVar('numberplate'),
            'capacity' => $this->request->getVar('capacity'),
            'location' => $this->request->getVar('location'),
            'deliveryprice' => $this->request->getVar('deliveryprice'),
            'collection' => $this->request->getVar('collection'),
        ];
        $this->DriverModel->update($id,$dat);
        session()->setFlashdata( 'success', 'Successfully!.' );
        return redirect()->to(base_url('/Drivers'));
        // return view( 'admin/branch', $data );
    }
    public function delete_drivers($id = null)
    {
      
        $this->DriverModel->where('id',$id)->delete($id);
        return redirect()->to(base_url('/Drivers'));
    }
    ############### ORDERS   ##################
    public function orders() {
        $data['page_title'] = "Orders";
        $data['branch'] =  $this->OrderModel->where('type','5')->findAll();
        return view( 'admin/orders', $data );
    }
    public function delete_order($id = null)
    {
      
        $this->OrderModel->where('id',$id)->delete($id);
        return redirect()->to(base_url('/orders'));
    }
    public function add_orders() {
        $dat = [

            'firstname' => $this->request->getVar( 'firstname' ),
            'lastname' => $this->request->getVar( 'lastname' ),
            'email' => $this->request->getVar( 'email' ),
            'phone' => $this->request->getVar( 'phone' ),
            'bg' => $this->request->getVar( 'bg' ),
            'district' => $this->request->getVar('district'),
            'address' => $this->request->getVar( 'address'),
            'town' => $this->request->getVar('town'),
            'subcounty' => $this->request->getVar('subcounty'),
            'status' => $this->request->getVar( 'status' ),
            'qty' => $this->request->getVar('qty'),
            'type'  => 5,
        ];
        $this->OrderModel->save($dat);
        session()->setFlashdata( 'success', 'Successfully!.' );
        return redirect()->to(base_url('/orders'));
        // return view( 'admin/branch', $data );
    }
    public function edit_order($id = null)
    {
        $data['page_title'] = "Edit Orders";
        $data['branch'] = $this->OrderModel->where('id',$id)->first();
        return view('admin/edit_order',$data);
    }
    public function update_order($id = null) {
        $data['page_title'] = "Orders";
        $id = trim($this->request->getVar('id'));
        $dat = [
            'firstname' => $this->request->getVar( 'firstname' ),
            'lastname' => $this->request->getVar( 'lastname' ),
            'email' => $this->request->getVar( 'email' ),
            'phone' => $this->request->getVar( 'phone' ),
            'bg' => $this->request->getVar( 'bg' ),
            'district' => $this->request->getVar('district'),
            'address' => $this->request->getVar( 'address'),
            'town' => $this->request->getVar('town'),
            'subcounty' => $this->request->getVar('subcounty'),
            'status' => $this->request->getVar( 'status' ),
            'qty' => $this->request->getVar('qty'),
            'type'  => 5,
        ];
        $this->OrderModel->update($id,$dat);
        session()->setFlashdata( 'success', 'Successfully!.' );
        return redirect()->to(base_url('/orders'));
        // return view( 'admin/branch', $data );
    }
    public function view_orders($id = null)
    {
        $data['page_title'] = "View Orders";
        $data['branch'] = $this->OrderModel->where('id',$id)->first();
        return view('admin/view_orders',$data);
    }

    ############### availableblood ####################
    public function availableblood() {
        $data['page_title'] = "availableblood";
        $data['branch'] =  $this->AvailableBloodModel->where('status','1')->findAll();
        return view( 'admin/availableblood', $data );
    }
    public function add_product() {
        $data['page_title'] = "availableblood";
        $dat = [

            'categories' => $this->request->getVar( 'categories' ),
            'region' => $this->request->getVar( 'region' ),
            'ctype' => $this->request->getVar( 'ctype' ),
            'district' => $this->request->getVar( 'district' ),
            'brand' => $this->request->getVar( 'brand' ),
            'description' => $this->request->getVar('description'),
            'image' => $this->request->getVar( 'image'),
            'price' => $this->request->getVar('price'),
            'qty' => $this->request->getVar('qty'),
            'delivery' => $this->request->getVar('delivery'),
            'username' => $this->request->getVar( 'username' ),
            'email' => $this->request->getVar('email'),
            'image' => $this->request->getFiles( 'image' ),
            'Status'  => 1,
        ];
        $this->AvailableBloodModel->save($dat);
        session()->setFlashdata( 'success', 'Successfully!.' );
        return redirect()->to(base_url('/availableblood'));
        // return view( 'admin/branch', $data );
    }
     
    public function view_availableblood($id = null)
    {
        $data['page_title'] = "View availableblood";
        $data['branch'] = $this->AvailableBloodModel->where('id',$id)->first();
        return view('admin/view_availableblood',$data);
    }
    public function edit_product($id = null)
    {
        $data['page_title'] = "Edit availableblood";
        $data['branch'] = $this->AvailableBloodModel->where('id',$id)->first();
        return view('admin/edit_availableblood',$data);
    }
    public function update_product($id = null) {
        $data['page_title'] = "availableblood";
        $id = trim($this->request->getVar('id'));
        $dat = [

            'categories' => $this->request->getVar( 'categories' ),
            'region' => $this->request->getVar( 'region' ),
            'ctype' => $this->request->getVar( 'ctype' ),
            'district' => $this->request->getVar( 'district' ),
            'brand' => $this->request->getVar( 'brand' ),
            'description' => $this->request->getVar('description'),
            'image' => $this->request->getVar( 'image'),
            'price' => $this->request->getVar('price'),
            'qty' => $this->request->getVar('qty'),
            'delivery' => $this->request->getVar('delivery'),
            'username' => $this->request->getVar( 'username' ),
            'email' => $this->request->getVar('email'),
            'image' => $this->request->getFiles( 'image' ),
        ];
        $this->AvailableBloodModel->update($id,$dat);
        session()->setFlashdata( 'success', 'Successfully!.' );
        return redirect()->to(base_url('/availableblood'));
        // return view( 'admin/branch', $data );
    }
    public function delete_product($id = null)
    {
      
        $this->AvailableBloodModel->where('id',$id)->delete($id);
        return redirect()->to(base_url('/availableblood'));
    }
    
    ############### PARCEL ######################
    public function track_parcel() {
        $data['page_title'] = "Track Parcel";
        $data['cargo'] = $this->CargoModel->where('status','in transit')->findAll();
        return view( 'admin/track_parcel', $data );
    }
    
    public function transit() {
        $data['page_title'] = "Transit";
        $data['cargo'] = $this->CargoModel->where('status','in transit')->findAll();
        return view( 'admin/transit', $data );
    }
    public function view_transit($id = null)
    {
        $data['page_title'] = "View Transit";
        $data['cargo'] = $this->CargoModel->where('id',$id)->first();
        return view('admin/view_transit',$data);
    }
    public function edit_transit($id = null)
    {
        $data['page_title'] = "Edit Transit";
        $data['branch'] = $this->BranchModel->orderBy('id','DESC')->findAll();
        $data['driver'] =  $this->UserModel->where('type','3')->where('status','active')->findAll();
        $data['cargo'] = $this->CargoModel->where('id',$id)->first();
        return view('admin/edit_transit',$data);
    }
    public function update_transit($id = null) {
        $data['page_title'] = "Update Transit";
        $id = trim($this->request->getVar('id'));
        $rules=[
           
            'status' => 'required|min_length[3]',
           
            
        ];
        if($this->request->getMethod() == 'post')
        {
            if ($this->validate( $rules ) ) {
                $dat = [
                    'status' => $this->request->getVar( 'status' ),
                    'comment' => $this->request->getVar( 'comment' ),
                   
                ];
                $this->CargoModel->update($id,$dat);
                session()->setFlashdata( 'success', 'Successfully!.' );
                
            }
            else
            {
                session()->setFlashdata( 'failed', 'Sorry! Something is Wrong.' );
                return redirect()->to(base_url('/transit'));
            }
            return redirect()->to(base_url('/transit'));
        }
        
        // return view( 'admin/transit', $data );
    }
    public function delete_transit($id = null)
    {
        $this->CargoModel->where('id',$id)->delete($id);
        return redirect()->to(base_url('/transit'));
    }
    public function unsuccessful_delivery() {
        $data['page_title'] = "Unsuccessful Delivery";
        $data['cargo'] = $this->CargoModel->where('status','Unsuccessful')->findAll();
        return view( 'admin/unsuccessful_delivery', $data );
    }
    ################# PAGES ###################

    public function contact(){
        $data['page_title'] = "Contact";
        $data['seekers'] =  $this->SeekerModel->findAll();
        return view('pages/public/contact', $data);
    }

    public function contact_us(){
        $session = session();
        if($this->request->getMethod() == 'post'){
            extract($this->request->getPost());
            $verify_password = password_verify($current_password, $session->login_password);
            if($password != $cpassword){
                $session->setFlashdata('error',"Password does not match.");
            }elseif(!$verify_password){
                $session->setFlashdata('error',"Current Password is Incorrect.");
            }else{
                $udata= [];
                $udata['name'] = $name;
                $udata['email'] = $email;
                if(!empty($password))
                $udata['password'] = password_hash($password, PASSWORD_DEFAULT);
                $update = $this->auth_model->where('id',$session->login_id)->set($udata)->update();
                if($update){
                    $session->setFlashdata('success',"Your Account has been updated successfully.");
                    $user = $this->auth_model->where("id ='{$session->login_id}'")->first();
                    foreach($user as $k => $v){
                        $session->set('login_'.$k, $v);
                    }
                    return redirect()->to('update_user');
                }else{
                    $session->setFlashdata('error',"Your Account has failed to update.");
                }
            }
        }

        $this->data['session']=$session;
        $this->data['page_title']="Users";
        $this->data['user'] = $this->auth_model->where("id ='{$session->login_id}'")->first();
        return view('pages/users/update_account', $this->data);
    }
    public function updatecart(){
        if($this->request->getMethod()== 'post'){
        // ($_POST['submit'])){
            if(!empty($_SESSION['cart'])){
            foreach($_POST['quantity'] as $key => $val){
                if($val==0){
                    unset($_SESSION['cart'][$key]);
                }else{
                    $_SESSION['cart'][$key]['quantity']=$val;
    
                }
            }
            $session->setFlashdata('error',"Your Cart has been updated.");
            }
        }
        return view('pages/public/cart', $this->data);
    }
   

}