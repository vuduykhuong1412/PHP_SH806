<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Illuminate\Http\Request;

class TrangCaNhanController extends Controller
{
    public function index(){
        $KHS = KhachHang::all();

        return view('TrangCaNhan',compact('KHS'));
    }
}
