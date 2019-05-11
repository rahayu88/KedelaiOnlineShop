<?php

namespace App\Http\Controllers;

use App\produtcs_model;
use Illuminate\Http\Request;
use DB;
use App\Pembeli;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products=produtcs_model::all();
        return view('front.home', compact('products'));
    }

    public function shop()
    {
        $products=produtcs_model::all();
        return view('front.shop', compact('products'));
    }

    public function kedelai()
    {
        $products= DB::table('products')->where('category_id', 1)->get();
        return view('front.kedelai', compact('products'));
    }
    
    public function ragi()
    {
        $products= DB::table('products')->where('category_id', 2)->get();
        return view('front.ragi', compact('products'));
    }

    public function search(Request $request){
        $products = DB::table('products')
            ->where('nama_produk', 'like', '%'.$request->search.'%')
            ->orwhere('nama_merk', 'like', '%'.$request->search.'%')
            ->get();

        return view('front.shop', compact('products'));
    }

    //setelah login
    public function index_setelah_login(Request $request)
    {
        $id_pembeli = $request->session()->get('id_pembeli');
        $nama = DB::table('pembeli')
                ->select('nama_pembeli')
                ->where('id_pembeli', $id_pembeli)
                ->value('nama_pembeli');

        $products=produtcs_model::all();
        return view('front_setelah_login.home', compact('products', 'nama'));
    }

    public function shop_setelah_login(Request $request)
    {
        $id_pembeli = $request->session()->get('id_pembeli');
        $nama = DB::table('pembeli')
                ->select('nama_pembeli')
                ->where('id_pembeli', $id_pembeli)
                ->value('nama_pembeli');

        $products=produtcs_model::all();
        return view('front_setelah_login.shop', compact('products', 'nama'));
    }

    public function kedelai_setelah_login(Request $request)
   
    {
         $id_pembeli = $request->session()->get('id_pembeli');
        $nama = DB::table('pembeli')
                ->select('nama_pembeli')
                ->where('id_pembeli', $id_pembeli)
                ->value('nama_pembeli');
        $products= DB::table('products')->where('category_id', 1)->get();
        return view('front_setelah_login.kedelai', compact('products', 'nama'));
    }
    
    public function ragi_setelah_login(Request $request)
   
    {
         $id_pembeli = $request->session()->get('id_pembeli');
        $nama = DB::table('pembeli')
                ->select('nama_pembeli')
                ->where('id_pembeli', $id_pembeli)
                ->value('nama_pembeli');
        $products= DB::table('products')->where('category_id', 2)->get();
        return view('front_setelah_login.ragi', compact('products', 'nama'));
    }

    public function search_setelah_login(Request $request){
        $products = DB::table('products')
            ->where('nama_produk', 'like', '%'.$request->search.'%')
            ->orwhere('nama_merk', 'like', '%'.$request->search.'%')
            ->get();

        $id_pembeli = $request->session()->get('id_pembeli');
        $nama = DB::table('pembeli')
                ->select('nama_pembeli')
                ->where('id_pembeli', $id_pembeli)
                ->value('nama_pembeli');

        return view('front_setelah_login.shop', compact('products', 'nama'));
    }

      public function login()
    {
        return view('front.login');
    }

    public function logout(){
        \Session::forget('id_pembeli');
        return redirect()->route('home');
    }
    
    public function daftar()
    {
                return view('front.daftar');
    }
      public function doLogin(Request $request)
    {
        $cek= DB::table('pembeli')
        ->where('email_pembeli', $request->email)
        ->where('password_pembeli', $request->password)
        ->count();

        $pembeli = DB::table('pembeli')
        ->select('id_pembeli')
        ->where('email_pembeli', $request->email)
        ->where('password_pembeli', $request->password)
        ->get();

        if($cek==0){
            return redirect()->route('loginn');
        }else{
            $request->session()->put('id_pembeli' , $pembeli[0]->id_pembeli);
            return redirect()->route('dashboard');
        }
    }
    public function prosesDaftar(Request $request)
    {
        $data = Pembeli::create($request->all());
        if($data){
            return view('front.login');
        
        }else{
            return view('front.daftar');
        }

    }
    
}
