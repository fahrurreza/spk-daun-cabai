<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Solusipenyakit, Penyakit};
use Illuminate\Support\Facades\DB;

class SolusipenyakitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $solusipenyakit    = Solusipenyakit::all();
        $halaman    = 'Solusi Penyakit';
        $penyakit   = Penyakit::all();
        
        return view('solusi.index', compact('solusipenyakit', 'penyakit', 'halaman'));
    }

    public function store(Request $request)
    {

        if(!$request->penyakit_id | !$request->solusi)
        {
            return redirect('solusi')->with('status_error', 'Gagal input, masih ada form yang kosong!');
        }

        $insert = DB::table('solusi_penyakit')->insert([
            'penyakit_id'   => $request->penyakit_id,
            'solusi'        => $request->solusi
        ]);

        if(!$insert)
        {
            return redirect('solusi')->with('status_error', 'Data gagal di tambahkan!');
        }
        else
        {
            return redirect('solusi')->with('status', 'Data telah di tambahkan!');
        }
    }

    public function edit(Request $request)
    {
        $query = Solusipenyakit::where('id', $request->penyakit_id)->get();


        foreach ($query as $list) 
        {
            $update = Solusipenyakit::where('id', $request->input('id'.$list->id))
            ->update([
                'solusi'          => $request->input('solusi'.$list->id)
            ]);
        }

        return redirect('solusi')->with('status', 'Data telah di edit!'); 
    }
}
