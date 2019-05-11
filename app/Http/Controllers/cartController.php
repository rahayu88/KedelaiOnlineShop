<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cartModel as Cart;
use DB;
use Session;
class cartController extends Controller
{
    public function cart(){
    	$data['cart'] = Cart::where('id_pembeli', session('id_pembeli'))->get();
         $id_pembeli = session('id_pembeli');
        $data['nama'] = DB::table('pembeli')
                ->select('nama_pembeli')
                ->where('id_pembeli', $id_pembeli)
                ->value('nama_pembeli');

    	return view('front_setelah_login.cart', $data);
    }
    public function add_cart($id_product){
        if (session('id_pembeli')!=Null) {
             $cart=['id_pembeli'=>Session::get('id_pembeli'),
                    'product_id'=>$id_product,
                    'qty'=>1
              ];
        $create = Cart::create($cart);
        if($create){return redirect('/keranjang');}
        }else{
            return redirect ('/loginn');

        }
    	//$cart=['id_pembeli'=>session('id_pembeli'),
    	//		'product_id'=>$id_product
    	//		];
    	//$create = Cart::create($cart);    
    }
}
