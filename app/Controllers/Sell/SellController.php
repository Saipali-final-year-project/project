<?php

namespace App\Controllers\Sell;

use CodeIgniter\RESTful\ResourceController;
use App\Models\SellModel;
use App\Models\ImageModel;

class SellController extends ResourceController {
    /**
    * Return an array of resource objects, themselves in array format
    *
    * @return mixed
    */
 
    public function __construct() {
        helper( [ 'form', 'url', 'file', 'date' ] );
        $this->SellModel = new SellModel();
        $this->security =  \Config\Services::security();
    }

    public function index() {
        $data['page_title'] = "Sell";
        return view( '/sell', $data );
    }

    public function sell() {
        $data['page_title'] = "Sell";
        $data = [
            'categories' => $this->request->getVar( 'categories' ),
            'region' => $this->request->getVar( 'region' ),
            'ctype' => $this->request->getVar('ctype'),
            'brand' => $this->request->getVar( 'brand' ),
            'description' => $this->request->getVar( 'description' ),
        ];
        // $data[ 'ctype' ] = $this->request->getVar( 'ctype1' );
        // $data[ 'ctype' ] .= $this->request->getVar( 'ctype2' );
        // $data[ 'ctype' ] .= $this->request->getVar( 'ctype3' );
        $data[ 'district' ] = $this->request->getVar( 'district1' );
        $data[ 'district' ] .= $this->request->getVar( 'district2' );
        $data[ 'district' ] .= $this->request->getVar( 'district3' );
        $data[ 'district' ] .= $this->request->getVar( 'district4' );
        $data[ 'price' ] = $this->request->getVar( 'price' );
        $data[ 'qty' ] = $this->request->getVar( 'qty' );
        $data[ 'delivery' ] = $this->request->getVar( 'delivery' );
        $data[ 'username' ] = $this->request->getVar( 'username' );
        $data[ 'email' ] = $this->request->getVar( 'email' );
        $image = $this->request->getFiles( 'img' );
        $images = $image[ 'img' ][ '0' ];
        $data['status'] = 1;

        if ( $data[ 'categories' ] == '' || $data[ 'region' ] == '' ) {
            session()->setFlashdata( 'failed', 'Category or Region  is Empty!.' );
            return redirect() -> to( base_url( '/sell' )  );
        } else if ( $data[ 'ctype' ] == '' || $data[ 'district' ] == '' ) {
            # code...
            session()->setFlashdata( 'failed', 'Catergory Type or District is Empty!.' );
            return redirect() -> to( base_url( '/sell' )  );
        } else {
 
            if ( $this->request->getMethod() == 'post' ) {
                $rules = [ 'img' => 'uploaded[img.0]|max_size[img,8024]|is_image[img]', ];

                if ( $this->validate( $rules ) ) {
                    # code...

                    $data[ 'image' ] = $images->getClientName();
                    
                    // $images ->move( FCPATH. './assets/uploads', $data[ 'image' ] );

                    $this->SellModel->save( $data, [ 'image'=>$image[ 'img' ] ], );

                    foreach ( $image[ 'img' ] as $img ) {

                        if ( $img -> isValid() && !$img ->hasMoved() ) {
                            if ( $img->move( FCPATH.'assets/upload', $img->getClientName() ) ) {
                                helper( [ 'form', 'url', 'file', 'date' ] );
                                $this->ImageModel = new ImageModel();
                                $this->security =  \Config\Services::security();
                                $this->ImageModel->save( [ 'name' => $img->getClientName(),'uid'=> $data['image'], ] );
                            } else {

                                echo '<p>'.$img->getErrorString().'</p>';
                            }
                        } else {
                            session()->setFlashdata( 'failed', 'Images not uploaded.' );

                            return redirect() -> to( base_url( '/sell' )  );

                        }
                    }

                } else {

                    session()->setFlashdata( 'failed', '!Not image or Empty.' );

                    return redirect() -> to( base_url( '/sell' ));

                }

                // if ( $image -> isValid() && !$image ->hasMoved() ) {
                //     // $data[ 'img' ] ->store();
                //     $data[ 'image' ] = $image->getRandomName();
                //     $image ->move( './assets/upload', $data[ 'image' ] );
                //     //$this->SellModel->save( $data );
                // }
                // else {
                //     session()->setFlashdata( 'failed', 'Image Field is Empty.' );
                //     return redirect() -> to( base_url( '/sell' ),$data['page_title']  );
                // }

            }
            
            session()->setFlashdata( 'success', 'Successfully!.' );

            return redirect() -> to( base_url( '/sell' ) );
        }

    }

}

