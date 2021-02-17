<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
    	return "Selamat Datang";
    }
    public function about(){
    	return "941720228 - Thalita Saniyya A.P";
    }
        
    public function articles($id) {
        return "Halaman Artikel Dengan ID ".$id;
    }
    
}
