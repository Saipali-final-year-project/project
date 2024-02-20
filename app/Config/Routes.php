<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Blog');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);


/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Blog::index');
$routes->get('contactus', 'Blog::contactus');
$routes->get('/All_Categories', 'Blog::categories');
$routes->get('/All_View(:any)', 'Blog::view/$1');
$routes->get('/weather', 'Blog::weather');
$routes->get('/delivery', 'Blog::delivery');
$routes->get('//Category_list(:any)', 'Blog::category/$1');
$routes->get('/Main_categories', 'Main::categories');
    $routes->get('/Main_posts', 'Main::posts');
    $routes->get('/Main_users', 'Main::users');
    $routes->get('/category_add', 'Main::category_add');
    $routes->get('/post_add', 'Main::post_add');
    $routes->get('/user_add', 'Main::user_add');
    $routes->get('/page_found', 'Blog::PagenotFound');
    $routes->get('/Product(:any)', 'Blog::product/$1');
    $routes->get('/register/activate/(:any)', 'Users\RegisterController::activate/$1');
    

$routes->get('/register', 'Auth::register',['filter' => 'authenticated']);
$routes->get('/Auth', 'Auth::index',['filter' => 'authenticated']);
$routes->get('/update_user', 'Auth::update_user',['filter' => 'authenticate']);
$routes->match(['post'], '/update_user', 'Auth::update_user',['filter' => 'authenticate']);
$routes->get('/Auth/(:segment)', 'Auth::$1',['filter' => 'authenticated']);
$routes->match(['post'], '/register', 'Auth::register',['filter' => 'authenticated']);
$routes->match(['post'], '/login', 'Auth::index',['filter' => 'authenticated']);
$routes->get('/login', 'Auth::index',['filter' => 'authenticated']);
$routes->get('/logout', 'Auth::logout');
 

$routes->group('Main', ['filter'=>'authenticate'], static function($routes){
    $routes->get('', 'Main::index');
    $routes->get('(:segment)', 'Main::$1');
    $routes->get('(:segment)/(:any)', 'Main::$1/$2');
    $routes->match(['post'], 'user_add', 'Main::user_add');
    $routes->match(['post'], 'user_edit/(:num)', 'Main::user_edit/$1');
    $routes->match(['post'], 'category_edit/(:num)', 'Main::category_edit/$1');
    $routes->match(['post'], 'category_add', 'Main::category_add/$1');
    $routes->match(['post'], 'post_edit/(:num)', 'Main::post_edit/$1');
    $routes->match(['post'], 'post_add', 'Main::post_add/$1');
    
});
$routes->get('/category_edit(:any)', 'Main::category_edit/$1');
    $routes->get('/category_delete(:any)', 'Main::category_delete/$1');
$routes->group('Blog', static function($routes){
    $routes->get('', 'Blog::index');
    $routes->get('(:segment)', 'Blog::$1');
    $routes->get('(:segment)/(:any)', 'Blog::$1/$2');
});
  

//sell
$routes->get('/register2', 'Users\RegisterController::index', ['filter' => 'guestFilter']);
$routes->post('/register2', 'Users\RegisterController::register', ['filter' => 'guestFilter']);
//Logins
$routes->get('/login2', 'Users\LoginController::index', ['filter' => 'guestFilter']);
$routes->post('/login2', 'Users\LoginController::authenticate', ['filter' => 'guestFilter']);
$routes->get('/login2/proccess', 'Users\LoginController::google', ['filter' => 'guestFilter']);

$routes->get('/login1', 'Users\LoginController::index1', ['filter' => 'guestFilter']);
$routes->post('/login1', 'Users\LoginController::authenticate1', ['filter' => 'guestFilter']);
$routes->get('/login1/proccess', 'Users\LoginController::google', ['filter' => 'guestFilter']);

$routes->get('/login3', 'Users\LoginController::index3', ['filter' => 'guestFilter']);
$routes->post('/login3', 'Users\LoginController::authenticate3', ['filter' => 'guestFilter']);
$routes->get('/login3/proccess', 'Users\LoginController::google', ['filter' => 'guestFilter']);

$routes->get('/login4', 'Users\LoginController::index4', ['filter' => 'guestFilter']);
$routes->post('/login4', 'Users\LoginController::authenticate4', ['filter' => 'guestFilter']);
$routes->get('/login4/proccess', 'Users\LoginController::google', ['filter' => 'guestFilter']);

$routes->get('/logout2', 'Users\LoginController::logout', ['filter' => 'authFilter']);
$routes->get('/dashboard', 'Users\DashboardController::index', ['filter' => 'authFilter']);
$routes->get('/dashboard', 'Users\DashboardController::index', ['filter' => 'authFilter']);
$routes->post('/dashboard', 'Sell\SellController::sell',['filter' => 'authFilter']);


$routes->get('/sell', 'Sell\SellController::index', ['filter' => 'authFilter']);
$routes->post('/sell', 'Sell\SellController::sell',['filter' => 'authFilter']);
//Cart
$routes->get('cart/buy/(:any)', 'Cart::buy/$1', ['filter' => 'authFilter']);
$routes->get('cart/index', 'Cart::index', ['filter' => 'authFilter']);
$routes->post('cart/index', 'Cart::index', ['filter' => 'authFilter']);
$routes->get('cart/remove/(:any)', 'Cart::remove/$1', ['filter' => 'authFilter']);
$routes->get('cart/update', 'Cart::update', ['filter' => 'authFilter']);
$routes->post('cart/update', 'Cart::update', ['filter' => 'authFilter']);
$routes->get('cart/checkout', 'Cart::checkout', ['filter' => 'authFilter']);
$routes->get('cart/invoice', 'Cart::invoice', ['filter' => 'authFilter']);

//order
$routes->get('/order', 'Cart::order'); 
$routes->post('/order', 'Cart::order');
$routes->get('/orders', 'Admin\DeliveryController::orders',['filter' => 'authFilter']);
$routes->get('/add_orders', 'Admin\DeliveryController::add_orders',['filter' => 'authFilter']);
$routes->get('/orders/edit(:any)', 'Admin\DeliveryController::edit_order/$1',['filter' => 'authFilter']);
$routes->get('/orders/deliver(:any)', 'Admin\DeliveryController::edit_deliver/$1',['filter' => 'authFilter']);
$routes->post('/orders/deliver(:any)', 'Admin\DeliveryController::edit_deliver/$1',['filter' => 'authFilter']);
$routes->get('/orders/show(:any)', 'Admin\DeliveryController::view_orders/$1',['filter' => 'authFilter']);
$routes->get('/orders/update(:any)', 'Admin\DeliveryController::update_order/$1',['filter' => 'authFilter']);
$routes->get('/orders/delete(:any)', 'Admin\DeliveryController::delete_order/$1',['filter' => 'authFilter']);


//Forget-password
$routes->get('/forget-password', 'Users\ForgetController::index',['filter' => 'authenticated']);

$routes->post('/ajax-store', 'Users\RegisterController::create');
$routes->match(['get', 'put'], 'user/checkemail', 'Users\RegisterController::register_email_exists');


//////CONTACT
$routes->get('email', 'ContactController::index');
$routes->post('create', 'ContactController::create');



// -----Admin ------//
$routes->get('/admins', 'Admin\DeliveryController::admins',['filter' => 'authFilter']);
$routes->get('/add_admin', 'Admin\DeliveryController::add_admin',['filter' => 'authFilter']);
$routes->post('/add_admin', 'Admin\DeliveryController::add_admin',['filter' => 'authFilter']);
$routes->get('/admins/show(:any)', 'Admin\DeliveryController::view_admin/$1',['filter' => 'authFilter']);
$routes->get('/admins/edit(:any)', 'Admin\DeliveryController::edit_admin/$1',['filter' => 'authFilter']);
$routes->get('/updateimage4(:any)', 'Admin\DeliveryController::editadminimage/$1',['filter' => 'authFilter']);
$routes->post('/updateimage4(:any)', 'Admin\DeliveryController::updatadminimage/$1',['filter' => 'authFilter']);
$routes->get('/admins/update(:any)', 'Admin\DeliveryController::update_admin/$1',['filter' => 'authFilter']);
$routes->get('/admins/delete(:any)', 'Admin\DeliveryController::delete_admin/$1',['filter' => 'authFilter']);
$routes->get('/admins/change_pwd(:any)', 'Admin\DeliveryController::change_pwd/$1',['filter' => 'authFilter']);

// -----Branch ------// 
$routes->get('/add_branch', 'Admin\DeliveryController::add_branch',['filter' => 'authFilter']);
$routes->get('/add_branch', 'Admin\DeliveryController::add_branch',['filter' => 'authFilter']);
$routes->post('/add_branch', 'Admin\DeliveryController::add_branch',['filter' => 'authFilter']);
$routes->get('/branch/show(:any)', 'Admin\DeliveryController::view_branch/$1',['filter' => 'authFilter']);
$routes->get('/branch/edit(:any)', 'Admin\DeliveryController::edit_branch/$1',['filter' => 'authFilter']);
$routes->get('/branch/update(:any)', 'Admin\DeliveryController::update_branch/$1',['filter' => 'authFilter']);
$routes->get('/branch/delete(:any)', 'Admin\DeliveryController::delete_branch/$1',['filter' => 'authFilter']);
$routes->get('/edit-profile', 'Admin\DeliveryController::edit_profile',['filter' => 'authFilter']);

// $routes->get('/edit-profile(:any)', 'Admin\DeliveryController::edit_profile/$1',['filter' => 'authFilter']);
// -----staff ------//
$routes->get('/staff', 'Admin\DeliveryController::staff',['filter' => 'authFilter']);
$routes->get('/add_staff', 'Admin\DeliveryController::add_staff',['filter' => 'authFilter']);
// $routes->post('/add_staff', 'Admin\DeliveryController::add_staff',['filter' => 'authFilter']);
$routes->get('/updateimage1(:any)', 'Admin\DeliveryController::editstaffimage/$1',['filter' => 'authFilter']);
$routes->post('/updateimage1(:any)', 'Admin\DeliveryController::updatestaffimage/$1',['filter' => 'authFilter']);
$routes->get('/staff/show(:any)', 'Admin\DeliveryController::view_staff/$1',['filter' => 'authFilter']);
$routes->get('/staff/edit(:any)', 'Admin\DeliveryController::edit_staff/$1',['filter' => 'authFilter']);
$routes->get('/staff/update(:any)', 'Admin\DeliveryController::update_staff/$1',['filter' => 'authFilter']);
$routes->get('/staff/delete(:any)', 'Admin\DeliveryController::delete_staff/$1',['filter' => 'authFilter']);
// -----seeker ------//
$routes->get('/seekers', 'Admin\DeliveryController::seekers',['filter' => 'authFilter']);
$routes->get('/add_seekers', 'Admin\DeliveryController::add_seekers',['filter' => 'authFilter']);
$routes->post('/add_seekers', 'Admin\DeliveryController::add_seekers',['filter' => 'authFilter']);
$routes->get('/seekers/show(:any)', 'Admin\DeliveryController::view_seekers/$1',['filter' => 'authFilter']);
$routes->get('/seekers/edit(:any)', 'Admin\DeliveryController::edit_seekers/$1',['filter' => 'authFilter']);
$routes->get('/seekers/update(:any)', 'Admin\DeliveryController::update_seekers/$1',['filter' => 'authFilter']);
$routes->get('/seekers/delete(:any)', 'Admin\DeliveryController::delete_seekers/$1',['filter' => 'authFilter']);

$routes->get('/personal', 'Admin\DeliveryController::personal',['filter' => 'authFilter']);
// $routes->get('/update_user', 'Admin\DeliveryController::update_user',['filter' => 'authenticate']);
// -----donors ------//
$routes->get('/donors', 'Admin\DeliveryController::donor',['filter' => 'authFilter']);
$routes->get('/expired', 'Admin\DeliveryController::expired',['filter' => 'authFilter']);
$routes->get('/add_donors', 'Admin\DeliveryController::add_donor',['filter' => 'authFilter']);
$routes->post('/add_donors', 'Admin\DeliveryController::add_donor',['filter' => 'authFilter']);
$routes->get('/donors/show(:any)', 'Admin\DeliveryController::view_donor/$1',['filter' => 'authFilter']);
$routes->get('/donors/edit(:any)', 'Admin\DeliveryController::edit_donor/$1',['filter' => 'authFilter']);
$routes->get('/donors/updateimage(:any)', 'Admin\DeliveryController::editdonorimage/$1',['filter' => 'authFilter']);
$routes->post('/donors/updateimage(:any)', 'Admin\DeliveryController::updatedonorimage/$1',['filter' => 'authFilter']);
$routes->get('/donors/update(:any)', 'Admin\DeliveryController::update_donor/$1',['filter' => 'authFilter']);
$routes->get('/donors/delete(:any)', 'Admin\DeliveryController::delete_donor/$1',['filter' => 'authFilter']);
// -----availableblood ------//
$routes->get('/availableblood', 'Admin\DeliveryController::availableblood',['filter' => 'authFilter']);
$routes->get('/add_product', 'Admin\DeliveryController::add_product',['filter' => 'authFilter']);
$routes->post('/add_product', 'Admin\DeliveryController::add_product',['filter' => 'authFilter']);
$routes->get('/availableblood/show(:any)', 'Admin\DeliveryController::view_availableblood/$1',['filter' => 'authFilter']);
$routes->get('/availableblood/edit(:any)', 'Admin\DeliveryController::edit_product/$1',['filter' => 'authFilter']);
$routes->get('/availableblood/update(:any)', 'Admin\DeliveryController::update_product/$1',['filter' => 'authFilter']);
$routes->get('/availableblood/delete(:any)', 'Admin\DeliveryController::delete_product/$1',['filter' => 'authFilter']);
// -----Drivers------//
$routes->get('/Drivers', 'Admin\DeliveryController::drivers',['filter' => 'authFilter']);
$routes->get('/add_Drivers', 'Admin\DeliveryController::add_drivers',['filter' => 'authFilter']);
$routes->post('/add_Drivers', 'Admin\DeliveryController::add_drivers',['filter' => 'authFilter']);
$routes->get('/Drivers/show(:any)', 'Admin\DeliveryController::view_drivers/$1',['filter' => 'authFilter']);
$routes->get('/Drivers/edit(:any)', 'Admin\DeliveryController::edit_drivers/$1',['filter' => 'authFilter']);
$routes->get('/Drivers/updateimage(:any)', 'Admin\DeliveryController::editdriverimage/$1',['filter' => 'authFilter']);
$routes->post('/Drivers/updateimage(:any)', 'Admin\DeliveryController::updatedriverimage/$1',['filter' => 'authFilter']);
$routes->get('/Drivers/update(:any)', 'Admin\DeliveryController::update_drivers/$1',['filter' => 'authFilter']);
$routes->get('/Drivers/delete(:any)', 'Admin\DeliveryController::delete_drivers/$1',['filter' => 'authFilter']);
// -----Admin ------//
$routes->get('/parcel', 'Admin\DeliveryController::parcel',['filter' => 'authFilter']);
$routes->get('/add_parcel(:any)', 'Admin\DeliveryController::add_parcel/$1',['filter' => 'authFilter']);
$routes->post('/add_parcel(:any)', 'Admin\DeliveryController::add_parcel/$1',['filter' => 'authFilter']);
$routes->get('/parcel/show(:any)', 'Admin\DeliveryController::view_parcel/$1',['filter' => 'authFilter']);
$routes->get('/parcel/edit(:any)', 'Admin\DeliveryController::edit_parcel/$1',['filter' => 'authFilter']);
$routes->get('/parcel/update(:any)', 'Admin\DeliveryController::update_parcel/$1',['filter' => 'authFilter']);
$routes->post('/parcel/update(:any)', 'Admin\DeliveryController::update_parcel/$1',['filter' => 'authFilter']);
$routes->get('/parcel/delete(:any)', 'Admin\DeliveryController::delete_parcel/$1',['filter' => 'authFilter']);
// -----Admin ------//
$routes->get('/items_accepted', 'Admin\DeliveryController::items_accepted',['filter' => 'authFilter']);
// -----Admin ------//
$routes->get('/collected', 'Admin\DeliveryController::collected',['filter' => 'authFilter']);
// -----Admin ------//
$routes->get('/shipped', 'Admin\DeliveryController::shipped',['filter' => 'authFilter']);
// -----Admin ------//
$routes->get('/transit', 'Admin\DeliveryController::transit',['filter' => 'authFilter']);
$routes->get('/transit/show(:any)', 'Admin\DeliveryController::view_transit/$1',['filter' => 'authFilter']);
$routes->get('/transit/edit(:any)', 'Admin\DeliveryController::edit_transit/$1',['filter' => 'authFilter']);
$routes->get('/transit/update(:any)', 'Admin\DeliveryController::update_transit/$1',['filter' => 'authFilter']);
$routes->post('/transit/update(:any)', 'Admin\DeliveryController::update_transit/$1',['filter' => 'authFilter']);
$routes->get('/transit/delete(:any)', 'Admin\DeliveryController::delete_parcel/$1',['filter' => 'authFilter']);
// -----Admin ------//
$routes->get('/arrived_at', 'Admin\DeliveryController::arrived_at',['filter' => 'authFilter']);
// -----Admin ------//
$routes->get('/out_for_delivery', 'Admin\DeliveryController::out_for_delivery',['filter' => 'authFilter']);
// -----Admin ------//
$routes->get('/ready_to_pickup', 'Admin\DeliveryController::ready_to_pickup',['filter' => 'authFilter']);
// -----Admin ------//
$routes->get('/delivered', 'Admin\DeliveryController::delivered',['filter' => 'authFilter']);
// -----Admin ------//
$routes->get('/picked-up', 'Admin\DeliveryController::pickedup',['filter' => 'authFilter']);
// -----Admin ------//
$routes->get('/unsuccessful_delivery', 'Admin\DeliveryController::unsuccessful_delivery',['filter' => 'authFilter']);
$routes->get('/track_parcel', 'Admin\DeliveryController::track_parcel',['filter' => 'authFilter']);
$routes->get('/branch', 'Admin\DeliveryController::branch',['filter' => 'authFilter']);
$routes->get('/branch', 'Admin\DeliveryController::branch',['filter' => 'authFilter']);


// -----Pages ------//
$routes->get('/contact', 'Admin\DeliveryController::contact',['filter' => 'authFilter']);
$routes->get('/updatecart', 'Admin\DeliveryController::updatecart',['filter' => 'authFilter']);
$routes->post('/updatecart', 'Admin\DeliveryController::updatecart',['filter' => 'authFilter']);


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
