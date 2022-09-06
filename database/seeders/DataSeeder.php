<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('information')->insert([
            'nama_projek' => 'contoh project3',
            'keterangan' => 'contoh keterangan3',
            'status' => 'contoh status3',
        ]);
    }
}
