<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Home extends Controller
{
    public function store(Request $req){
        'DB'::table('records')->insert([
            'name'=>$req->name,
            'contact'=>$req->contact,
            'city'=>$req->city,
        ]);
        return redirect()->back();
        
        }
        public function views(Request $req){
            $data='DB'::table('records')->get();
            return view('home',['data' =>$data]);

    }
    public function delete(Request $req,$id){
        'DB'::table('records')->delete($id);
        return redirect()->back();
    }
}
