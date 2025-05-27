<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home.index');
    }

    public function eja() {
        return view('eja.index');
    }

    public function whatsapp() {
        $url = 'https://wa.me/5511916069198?text=Ol%C3%A1,%20vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20maiores%20informa%C3%A7%C3%B5es%20sobre%20o%20supletivo.';
        
        return redirect()->away($url);
    }

    public function dashboard() {
        return view('dashboard.index');
    }
}
