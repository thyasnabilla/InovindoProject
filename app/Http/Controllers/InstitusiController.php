<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstitusiController extends Controller
{
    public function dashboard()
    {
        return view('SidebarInstitusi/dashboard');
    }
}
