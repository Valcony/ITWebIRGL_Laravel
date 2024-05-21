<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index(Request $o)
    {
        // Get the current subdirectory
        $subdirectory = request()->segment(1); // Get the first segment of the URL
        $title = "Jadwal";
        if ($subdirectory === 'jadwal') {
            $title = "Jadwal Kuliah";
        } elseif ($subdirectory === 'another_subdirectory') {
            $title = "Another Subdirectory Title";
        }

        // Pass the title to the view
        return view('jadwal', compact('title'));
    }
}
