<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class barangsController extends Controller
{
    public function index()
    {
$barangs = 'Aqua 400ML';
return view('barangs/index',compact('barangs'));
}

{
return 'Mengakses Fungsi di Controller menggunakan route';
}
}
