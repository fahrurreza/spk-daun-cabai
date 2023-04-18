<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyakit;
use Illuminate\Support\Facades\DB;

class PenyakitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $penyakit = Penyakit::all();
        $halaman = 'Penyakit';
        $code   = count($penyakit);
        return view('penyakit.index', compact('penyakit', 'halaman', 'code'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'penyakit' => ['required']
        ]);

        $penyakit = Penyakit::all();
        $code   = 'A'.count($penyakit)+1;

        $insert = DB::table('penyakit')->insert([
            'kode' => $code,
            'penyakit' => $request->penyakit
        ]);

        if(!$insert)
        {
            return redirect('penyakit')->with('status_error', 'Data gagal di tambahkan!');
        }
        else
        {
            return redirect('penyakit')->with('status', 'Data telah di tambahkan!');
        }
    }

    public function update(Request $request, $id)
    {
        $update = Penyakit::where('id', $id)
                    ->update([
                        'penyakit'  => $request->penyakit
                    ]);
                
        if($update)
        {
            return redirect('/penyakit')->with('status', 'data telah diubah');
        }
        else
        {
            return redirect('/penyakit')->with('status_error', 'data gagal diubah');
        }
    }

    public function destroy($id)
    {
        $delete = Penyakit::destroy($id);
        
        if(!$delete)
        {
            return redirect('penyakit')->with('status_error', 'Data gagal di hapus!');
        }
        else
        {
            return redirect('penyakit')->with('status', 'Data telah di hapus!');
        }
    }
}
