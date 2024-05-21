<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {   
        // data 1 record
        $data = new Mahasiswa();
        $data->name = 'Mahasiswa 1';
        $data->NRP = 'C14230230';
        $data->GPA = 3.8;
        $data->semester = 2;
        $data->save();
    }
}
