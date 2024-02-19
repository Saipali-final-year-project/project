<?php

namespace App\Controllers;
use App\Models\Auth;
use App\Models\Categories;
use App\Models\Posts;
use App\Models\SellModel;
use App\Models\ImageModel;
use App\Models\OrderModel;

class Cart extends BaseController
{
    public function __construct()
    {
        $this->request = \Config\Services::request();
        $this->session = session();
        $this->db = db_connect();
        $this->auth_model = new Auth;
        $this->category_model = new Categories;
        $this->post_model = new Posts;
        $this->sell_model = new SellModel;
        $this->image_model = new ImageModel;
        $this->order_model = new OrderModel;
        $menu_cat = $this->category_model->select("id, name")->orderBy('name','asc')->limit(3)->find();
        $this->data = ['session' => $this->session,'request'=>$this->request, 'menu_cat' => $menu_cat];

    }

    public function index()
    {
        $this->data['page_title'] = "Shopping Cart";
        $this->data['items'] = $this->item(); 
        $this->data['Total'] = $this->total(); 
       return view('pages/public/cart', $this->data);
    }
    public function buy($id)
    {
        $mobile = $this->sell_model->find($id);
        $items=[];
        $item = array(
            'id' => $mobile['id'],
            'name' => $mobile['ctype'],
            'photo' => $mobile['image'],
            'price' => $mobile['price'],
            'quantity' => 1
        );
        $session = session();
        if($session-> has('cart')){
            $index = $this->exist($id);
            $cart = array_values(session('cart'));
            if ($index == -1){
                array_push($cart, $item);
            }else{
                $cart[$index]['quantity']++;
            }
            $session->set('cart',$cart);
            
        }else{
            $cart=array($item);
            $session ->set('cart',$cart);
        }
       return $this->response->redirect(base_url('/')); 
    }
    public function remove($id)
    {
        $index = $this->exist($id);
        $cart = array_values(session('cart')); 
        unset($cart[$index]);
        $session =session();
        $session->set('cart',$cart);
        return $this->response->redirect(base_url('cart/index'));
    }
    public function update()
    {  
        $cart = array_values(session('cart'));
        for ($i=0; $i < count($cart) ; $i++) { 
            # code...
            $cart[$i]['cart'] = $_POST['cart'][$i];
        }
        $session =session();
        $session->set('cart',$cart);
        return $this->response->redirect(base_url('cart/index'));

    }


    Private function exist($id){
        $items = array_values(session('cart')); 
        for ($i=0; $i < count($items); $i++) { 
            # code...
            if ($items [$i]['id'] == $id) {
                # code...
                return $i;
            }  
        }
        return -1;
    }
    Private function total(){
        $s=0;

        if (session('cart')==0){
            return $s;
        }
        else
        {
            $items = array_values(session('cart'));
        foreach ($items as $item) {
            # code...
            $s += $item['price'] * $item['quantity']; 
        } 
        return $s;
        }
        
         
    }

   
    Private function item(){
        $p=0;
        if (session('cart')==  0){
            return $p;
        }
        else
        {
            $p = array_values(session('cart'));
        } 
        return $p;
        } 

    //checkout  
    public function checkout()
    {   
        $this->data['page_title'] = "Checkout";
        $this->data['items'] = array_values(session('cart')); 
        $this->data['Total'] = $this->total(); 
       return view('pages/public/checkout', $this->data);
    }
    public function invoice()
    {
        $this->data['page_title'] = "My Invoice";
        $this->data['items'] = array_values(session('cart')); 
        $this->data['Total'] = $this->total(); 
       return view('pages/public/invoice', $this->data);
    }

    public function order()
    {
        $data = []; 
        $this->data['page_title'] = "Checkout";
        $this->data['items'] = array_values(session('cart')); 
        $this->data['Total'] = $this->total(); 
        $rules=[
            'firstname' => 'required|min_length[3]',
            'lastname' => 'required|min_length[3]',
            'address' => 'required|min_length[3]',
            'postcode' => 'required|min_length[3]',
            'phone' => 'required|max_length[10]|min_length[10]|numeric',
            'email' => 'required|min_length[4]|max_length[255]|valid_email|',
        ];
        if($this->request->getMethod() == 'post')
        {   
            if ($this->validate( $rules ) ) { 
                # code...
                $data = [
                    'image' => $this->request->getVar( 'image' ),
                    'firstname' => $this->request->getVar( 'firstname' ),
                    'lastname' => $this->request->getVar( 'lastname' ),
                    'address'   => $this->request->getVar( 'address' ),
                    'postcode'   => $this->request->getVar( 'postcode' ),
                    'district' => $this->request->getVar( 'district' ),
                    'town'   => $this->request->getVar( 'town' ),
                    'subcounty'   =>$this->request->getVar( 'subcounty' ),
                    'email'    => $this->request->getVar( 'email' ),
                    'phone'   =>$this->request->getVar( 'phone' ),
                    'price'    => $this->request->getVar( 'price' ),
                    'item'    => $this->request->getVar( 'item' ),
                    'qty'    => $this->request->getVar( 'qty' ),
                    'items' => array_values(session('cart')),
                    'Total' => $this->total(),

                    'notes'    => $this->request->getVar( 'notes' ),
                    'payment' => $this->request->getVar('payment'),
                    'type' => '5',
                ];
                    $this->order_model->save($data);
                    // $images = $this->request->getFiles();
                    session()->setFlashdata( 'success', 'Order made Successfully!.' );
                // return redirect()->to(base_url('/availableblood'));
                if(session('payment')=='Wallet'){
                    return view('pages/public/checkinvoice',$data);
                }else{
                    return view('pages/public/invoice',$data);
                } 

            }
            else
            {
                $data['validation'] = $this ->validator;
                return view('pages/public/checkout',$data);
            }
            // return view('pages/public/checkinvoice',$data);
        }
    }
   
}
