<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        $post['berita']  = berita::all();
        return view('index')->with($post);
    }
}
