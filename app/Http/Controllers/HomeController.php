<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\{Ciri, Penyakit,Solusipenyakit};

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $halaman = 'Home';
        $ciri = Ciri::all();
        return view('home.index', compact('halaman', 'ciri'));
    }

    public function store(Request $request)
    {
        $halaman = 'Hasil';
        // return $request; die;
        //Rule 1
        if ($request->C3 AND $request->C8 AND $request->C21)
        {
             $rule     = 'rule1';
        }

        //Rule 2
        else if ($request->C3 AND $request->C8)
        {
             $rule     = 'rule2';
        }

        //Rule 3
        else if ($request->C3 AND $request->C21)
        {
             $rule     = 'rule3';
        }

        //Rule 4
        else if ($request->C8 AND $request->C21)
        {
             $rule     = 'rule4';
        }

        //Rule 5
        else if ($request->C3 AND $request->C1 AND $request->C17 AND $request->C10 AND $request->C09)
        {
             $rule     = 'rule5';
        }

        //Rule 6
        else if ($request->C3 AND $request->C1 AND $request->C17 AND $request->C10)
        {
             $rule     = 'rule6';
        }

        //Rule 7
        else if ($request->C3 AND $request->C1 AND $request->C17)
        {
             $rule     = 'rule7';
        }

        //Rule 8
        else if ($request->C3 AND $request->C1)
        {
             $rule     = 'rule8';
        }

        //Rule 9
        else if ($request->C5 AND $request->C15 AND $request->C10 AND $request->C11 AND $request->C09 AND $request->C04 AND $request->C19)
        {
             $rule     = 'rule9';
        }

        //Rule 10
        else if ($request->C5 AND $request->C15 AND $request->C10 AND $request->C11 AND $request->C09 AND $request->C04)
        {
            $rule     = 'rule10';
        }

        //Rule 11
        else if ($request->C5 AND $request->C15 AND $request->C10 AND $request->C11 AND $request->C09)
        {
            $rule     = 'rule11';
        }

        //Rule 12
        else if ($request->C5 AND $request->C15 AND $request->C10 AND $request->C11)
        {
            $rule     = 'rule12';
        }

        //Rule 13
        else if ($request->C5 AND $request->C15 AND $request->C10)
        {
            $rule     = 'rule13';
        }

        //Rule 14
        else if ($request->C5 AND $request->C15)
        {
            $rule     = 'rule14';
        }

        //Rule 15
        else if ($request->C1 AND $request->C2 AND $request->C18 AND $request->C216 AND $request->C20 AND $request->C13)
        {
            $rule     = 'rule15';
        }

        //Rule 16
        else if ($request->C1 AND $request->C2 AND $request->C18 AND $request->C216 AND $request->C20)
        {
            $rule     = 'rule16';
        }

        //Rule 17
        else if ($request->C1 AND $request->C2 AND $request->C18 AND $request->C216)
        {
            $rule     = 'rule17';
        }

        //Rule 18
        else if ($request->C1 AND $request->C2 AND $request->C18)
        {
            $rule     = 'rule18';
        }

        //Rule 19
        else if ($request->C1 AND $request->C2)
        {
            $rule     = 'rule19';
        }

        //Rule 20
        else if ($request->C12 AND $request->C6 AND $request->C14 AND $request->C07)
        {
            $rule     = 'rule20';
        }

        //Rule 21
        else if ($request->C12 AND $request->C6 AND $request->C14)
        {
            $rule     = 'rule21';
        }

        //Rule 22
        else if ($request->C12 AND $request->C6)
        {
            $rule     = 'rule22';
        }

        //Rule 23
        else  
        {
            $rule = 0;
        }
        
        if($rule === 'rule1')
        {
            $data = [
                        "code"     => "A1",
                        "penyakit" => "Penyakit layu fusarium",
                        "cf"       => 1
                    ];
        }
        else if($rule === 'rule2')
        {
            $data = [
                "code"     => "A1",
                "penyakit" => "Penyakit layu fusarium",
                "cf"       => 0.75
            ];
        }
        else if($rule === 'rule3')
        {
            $data = [
                "code"     => "A1",
                "penyakit" => "Penyakit layu fusarium",
                "cf"       => 0.75
            ];
        }
        else if($rule === 'rule4')
        {
            $data = [
                "code"     => "A1",
                "penyakit" => "Penyakit layu fusarium",
                "cf"       => 0.75
            ];
        }
        else if($rule === 'rule5')
        {
            $data = [
                "code"     => "A2",
                "penyakit" => "Penyakit layu ralstonia",
                "cf"       => 1
            ];
        }
        else if($rule === 'rule6')
        {
            $data = [
                "code"     => "A2",
                "penyakit" => "Penyakit layu ralstonia",
                "cf"       => 0.75
            ];
        }
        else if($rule === 'rule7')
        {
            $data = [
                "code"     => "A2",
                "penyakit" => "Penyakit layu ralstonia",
                "cf"       => 0.5
            ];
        }
        else if($rule === 'rule8')
        {
            $data = [
                "code"     => "A2",
                "penyakit" => "Penyakit layu ralstonia",
                "cf"       => 0.25
            ];
        }
        else if($rule === 'rule9')
        {
            $data = [
                "code"     => "A3",
                "penyakit" => "Penyakit busuk buah australia",
                "cf"       => 1
            ];
        }
        else if($rule === 'rule10')
        {
            $data = [
                "code"     => "A3",
                "penyakit" => "Penyakit busuk buah australia",
                "cf"       => 0.8
            ];
        }
        else if($rule === 'rule11')
        {
            $data = [
                "code"     => "A3",
                "penyakit" => "Penyakit busuk buah australia",
                "cf"       => 0.7
            ];
        }
        else if($rule === 'rule12')
        {
            $data = [
                "code"     => "A3",
                "penyakit" => "Penyakit busuk buah australia",
                "cf"       => 0.6
            ];
        }
        else if($rule === 'rule13')
        {
            $data = [
                "code"     => "A3",
                "penyakit" => "Penyakit busuk buah australia",
                "cf"       => 0.5
            ];
        }
        else if($rule === 'rule14')
        {
            $data = [
                "code"     => "A3",
                "penyakit" => "Penyakit busuk buah australia",
                "cf"       => 0.25
            ];
        }
        else if($rule === 'rule15')
        {
            $data = [
                "code"     => "A4",
                "penyakit" => "Penyakit virus kuning",
                "cf"       => 1
            ];
        }
        else if($rule === 'rule16')
        {
            $data = [
                "code"     => "A4",
                "penyakit" => "Penyakit virus kuning",
                "cf"       => 0.8
            ];
        }
        else if($rule === 'rule17')
        {
            $data = [
                "code"     => "A4",
                "penyakit" => "Penyakit virus kuning",
                "cf"       => 0.7
            ];
        }
        else if($rule === 'rule18')
        {
            $data = [
                "code"     => "A4",
                "penyakit" => "Penyakit virus kuning",
                "cf"       => 0.6
            ];
        }
        else if($rule === 'rule19')
        {
            $data = [
                "code"     => "A4",
                "penyakit" => "Penyakit virus kuning",
                "cf"       => 0.5
            ];
        }
        else if($rule === 'rule20')
        {
            $data = [
                "code"     => "A5",
                "penyakit" => "Penyakit bercak daun",
                "cf"       => 1
            ];
        }
        else if($rule === 'rule21')
        {
            $data = [
                "code"     => "A5",
                "penyakit" => "Penyakit bercak daun",
                "cf"       => 0.8
            ];
        }
        else if($rule === 'rule22')
        {
            $data = [
                "code"     => "A5",
                "penyakit" => "Penyakit bercak daun",
                "cf"       => 0.7
            ];
        }
        else
        {
            $data = 0;
        }

        if($data != 0)
        {
            $kode = $data['code'];
            $penyakit = Penyakit::where('kode', $kode)->first();
            $solusi = Solusipenyakit::where('penyakit_id', $penyakit->id)->get();
            return view('home.hasil', compact('data', 'halaman', 'penyakit', 'solusi'));
        }
        else
        {
            return view('home.hasil', compact('data','halaman'));
        }
    }
}
