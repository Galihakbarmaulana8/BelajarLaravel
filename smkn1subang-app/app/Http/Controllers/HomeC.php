<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataguruS;
use App\Models\datakelasS;
use App\Models\produksmkS;
use App\Models\programceren;


class HomeC extends Controller
{
    public function index(){
        return view('pages.home');
    }
    
    public function dataguru (){
        $data = dataguruS::all();
        return view('pages.dataguruS', ['data' => $data]);
    }
    public function datakelas (){
        $data = datakelasS::all();
        return view('pages.datakelasS', ['data' => $data]);
    }
    public function produksmk (){
        $data = produksmkS::all();
        return view('pages.produksmkS', ['data' => $data]);
    }
    public function programceren(){
        return view('pages.programcerenS');
    }
    
}
