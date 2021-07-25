<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data = Students::all();
        return view('dashboard',['students'=>$data]);
    }
}
