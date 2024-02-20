<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Auth;
use App\Models\Categories;
use App\Models\Posts;
use App\Models\SellModel;
use App\Models\ImageModel;

class Blog extends BaseController
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
        $menu_cat = $this->category_model->select("id, name")->orderBy('name','asc')->limit(3)->find();
        $this->data = ['session' => $this->session,'request'=>$this->request, 'menu_cat' => $menu_cat];

    }

    public function index()
    {
        return view('index', $this->data);
    }
    public function contactus()
    {
        return view('contact', $this->data);
    }
    
    
    public function categories()
    {
        $this->data['page_title'] = "Categories";
        $this->data['Total'] = $this->total(); 
        $this->data['items'] = $this->item();
        $this->data['page'] =  !empty($this->request->getVar('page')) ? $this->request->getVar('page') : 1;
        $this->data['perPage'] =  3;
        $this->data['total'] =  $this->category_model->orderBy('abs((name)) asc')
                                ->countAllResults();
        $this->data['categories'] = $this->category_model->orderBy('abs((name)) asc')
                                ->paginate($this->data['perPage']);
        $this->data['total_res'] = is_array($this->data['categories'])? count($this->data['categories']) : 0;
        $this->data['pager'] = $this->category_model->pager;
        
        return view('pages/public/categories', $this->data);
    }
    
    public function category($id="")
    {
        if(empty($id))
        return redirect()->to(base_url('/page_found'));
        
        $category = $this->category_model->where('id',$id)->first();
        if(!isset($category['id']))
            return redirect()->to(base_url('/page_found'));
            
        $this->data['page_title'] = $category['name'];
        $this->data['Total'] = $this->total(); 
        $this->data['items'] = $this->item();
        $this->data['category'] = $category;
        $this->data['page'] =  !empty($this->request->getVar('page')) ? $this->request->getVar('page') : 1;
        $this->data['perPage'] =  3;
        $this->data['total'] =  $this->post_model
                                ->where('status', 1)
                                ->where('category_id', $id)
                                ->orderBy('abs(unix_timestamp(created_at)) DESC')
                                ->countAllResults();
        $this->data['posts'] = $this->post_model
                                ->where('status', 1)
                                ->where('category_id', $id)
                                ->orderBy('abs(unix_timestamp(created_at)) DESC')
                                ->paginate($this->data['perPage']);
        $this->data['total_res'] = is_array($this->data['posts'])? count($this->data['posts']) : 0;
        $this->data['pager'] = $this->post_model->pager;
        return view('pages/public/category', $this->data);
    }
    
    public function view($id = ''){
        if(empty($id))
        return redirect()->to(base_url('/page_found'));
        $post = $this->post_model
                     ->select("posts.*,users.name as author_name, users.email as author_email, concat(users.name, ' - ', users.email) as author_full, categories.name as category")
                     ->where("posts.id = '{$id}'")
                     ->join('users',"posts.user_id = users.id", "inner")
                     ->join('categories',"posts.user_id = categories.id", "inner")
                     ->first();
        if(!isset($post['id']))
        return redirect()->to(base_url('/page_found'));
        $this->data['page_title'] = $post['title'];
        $this->data['Total'] = $this->total(); 
        $this->data['items'] = $this->item();
        $this->data['post'] = $post;
        $this->data['page'] =  !empty($this->request->getVar('page')) ? $this->request->getVar('page') : 1;
        $this->data['perPage'] = 3;
        $this->data['total'] =  $this->post_model->where('status', 1)
                                ->orderBy('abs(unix_timestamp(created_at)) DESC')
                                ->countAllResults();
          $this->data['total2'] =  $this->post_model->where('status', 1)
                                ->orderBy('abs(unix_timestamp(created_at)) DESC')
                                ->countAllResults();
        $this->data['posts'] = $this->post_model->where('status', 1)
                                ->orderBy('abs(unix_timestamp(created_at)) DESC')
                                ->paginate($this->data['perPage']);
        $this->data['total_res'] = is_array($this->data['posts'])? count($this->data['posts']) : 0;
        $this->data['pager'] = $this->post_model->pager;
        return view('pages/public/post', $this->data);
    }

    public function product($id = ''){
        if(empty($id))
        return redirect()->to(base_url('/page_found'));
        $post = $this->sell_model
                     ->select("tblsell.*,categories as categories,ctype as ctype, description as description, image as image, price as price, qty as qty, concat(username, ' - ', email) as author_full, district as district, region as region, brand as brand, color as color, material as material,")
                     ->where("tblsell.id = '{$id}'")
                     ->first(); 

        if(!isset($post['id']))
        return redirect()->to(base_url('/page_found'));
        $this->data['page_title'] = $post['categories'];
        $this->data['Total'] = $this->total(); 
        $this->data['items'] = $this->item();
        $this->data['post'] = $post;
        $this->data['page'] =  !empty($this->request->getVar('page')) ? $this->request->getVar('page') : 1;
        $this->data['perPage'] = 8;
        $this->data['perPages'] = 8;
        $this->data['total'] =  $this->sell_model->where('status', 1)
                                ->orderBy('abs(unix_timestamp(created_at)) DESC')
                                ->countAllResults();

        $this->data['photos'] = $this->image_model->where('uid', $post['image'])
                                ->orderBy('abs(unix_timestamp(created_at)) DESC')
                                ->paginate($this->data['perPages']);
        $this->data['total_res'] = is_array($this->data['photos'])? count($this->data['photos']) : 0;
        $this->data['pager'] = $this->image_model->pager;

        $this->data['sell'] = $this->sell_model->where('categories', $post['categories'])
                                ->orderBy('abs(unix_timestamp(created_at)) DESC')
                                ->paginate($this->data['perPage']);
        $this->data['total_res'] = is_array($this->data['sell'])? count($this->data['sell']) : 0;
        $this->data['pager'] = $this->sell_model->pager;
        $this->data['total2'] =  $this->sell_model->where('categories', $post['categories'])
                                ->orderBy('abs(unix_timestamp(created_at)) DESC')
                                ->countAllResults();

        return view('pages/public/product', $this->data);
    
    }
    

    public function weather(){
        $this->data['page_title'] = "Weather";
        $this->data['Total'] = $this->total(); 
        $this->data['items'] = $this->item();
        return view('pages/public/weather', $this->data);
    }
    public function delivery(){
        $this->data['page_title'] = "Delivery";
        $this->data['Total'] = $this->total(); 
        $this->data['items'] = $this->item();
        return view('pages/public/delivery', $this->data);
    }

     public function contact()
    {
        $this->data['page_title'] = "contact";
        $this->data['Total'] = $this->total();
        $this->data['items'] = $this->item(); 
        
        
        
        return view('pages/public/contact_us', $this->data);
    }

    public function PagenotFound(){
        $this->data['page_title'] = "Page Not Found";
        return view('pages/public/page_not_found', $this->data);
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
        if (session('cart')==0){
            return $p;
        }
        else
        {
            $p = array_values(session('cart'));
        } 
        return $p;
        } 
    
}
