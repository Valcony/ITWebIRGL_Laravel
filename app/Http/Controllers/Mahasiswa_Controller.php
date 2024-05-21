<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class Mahasiswa_Controller extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::get();
        return view('mahasiswa.index')->with('mahasiswa', $mahasiswa);
    }

    public function input($id = null){
        $data = Mahasiswa::find($id) ?? new Mahasiswa;
        return view('mahasiswa.input')->with('data', $data);
    }

    public function simpan(Request $r){
        // $validatedData = $r->validate([
        //     'name' => 'required|string|max:255',
        //     'NRP' => 'required|string|max:255',
        //     'GPA' => 'required|numeric|min:0|max:4',
        //     'semester' => 'required|integer|min:1|max:14',
        // ]);

        // if(isset($r->id)) {
        //     $mahasiswa = Mahasiswa::find($r->id);
        //     $route = 'mahasiswa';
        // } else {
        //     $mahasiswa = new Mahasiswa;
        //     $route = 'mahasiswa.input';
        // }

        if(isset($r->id))
        {
            $mahasiswa = Mahasiswa::find($r->id);
            $route = 'mahasiswa';
        }
        else
        {
            $mahasiswa = new Mahasiswa;
            $route = 'mahasiswa.input';
        }
        $mahasiswa->name = $r->name;
        $mahasiswa->NRP = $r->NRP;
        $mahasiswa->GPA = $r->GPA;
        $mahasiswa->semester = $r->semester;
        $mahasiswa->save();

        return redirect()->route($route);
    }

    public function view(Request $r)
    {
        $data = Mahasiswa::where('id', $r->id)->first() ?? new Mahasiswa;
        return view('mahasiswa.view')->with('data', $data);
    }
    public function remove(Request $r)
    {
        $data = Mahasiswa::where('id', $r->id)->first();
        $data->delete();
        return redirect()->route('mahasiswa.index');
    }
    
}
