<?php

namespace App\Http\Controllers;

use App\Models\kasir;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    
    public function login(){
        return view('login');
    }

    public function ceklogin(Request $request){
        $s = new kasir;
        $s= $s->where ('username',$request->input('username'))->where('password',$request->input('password'));

        if($s->exists()){
            session([
                'username'=>$request->input('username'),
                'password'=>$request->input('password') 
            ]);
        return redirect('index');
    }
    }
    public function layout(){
        $s = new kasir;
        return view("index",['data'=>$s->all()]);
    }
    public function datakasir(){
        $k = kasir::all();
        return view("kasir.datakasir",['data'=>$k]);
    }
     public function tambah(){
        return view('Kasir.form');
     }
     public function tambahk(Request $request){
        // $validated = $request->validate([
        //     'nama' => 'required|max:100',
        //     'alamat' => 'required|max:100',
        //     'telepon' => 'required|max:13',
        //     'username' => 'required|max:100',
        //     'password' => 'required|max:100'
        // ]);
        $k = new kasir();
        $k->create($request->all());
        return redirect('datakasir');
     }
    
     
}
