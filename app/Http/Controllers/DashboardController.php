<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\{Ciri, Penyakit,Solusipenyakit};

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $halaman = 'Home';
        $ciri = Ciri::all();
        return view('home.index', compact('halaman', 'ciri'));
    }
}
