<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciri;
use Illuminate\Support\Facades\DB;

class CiriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $halaman = 'Ciri Penyakit';
        $ciri = Ciri::all();
        $code   = count($ciri);
        return view('ciri.index', compact('ciri', 'halaman', 'code'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ciri' => ['required']
        ]);

        $ciri = Ciri::all();
        $code   = 'C'.count($ciri)+1;

        $insert = DB::table('ciri')->insert([
            'kode' => $code,
            'ciri' => $request->ciri
        ]);

        if(!$insert)
        {
            return redirect('ciri')->with('status_error', 'Data gagal di tambahkan!');
        }
        else
        {
            return redirect('ciri')->with('status', 'Data telah di tambahkan!');
        }
    }

    

    public function update(Request $request, $id)
    {
        $update = Ciri::where('id', $id)
                    ->update([
                        'ciri'  => $request->ciri
                    ]);
                
        if($update)
        {
            return redirect('/ciri')->with('status', 'data telah diubah');
        }
        else
        {
            return redirect('/ciri')->with('status_error', 'data gagal diubah');
        }
    }

    public function destroy($id)
    {
        $delete = Ciri::destroy($id);
        
        if(!$delete)
        {
            return redirect('ciri')->with('status_error', 'Data gagal di hapus!');
        }
        else
        {
            return redirect('ciri')->with('status', 'Data telah di hapus!');
        }
    }
}
