<?php

namespace Database\Seeders;

use App\Models\Pemberitahuan as ModelsPemberitahuan;
use Illuminate\Database\Seeder;

class Pemberitahuan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsPemberitahuan::create([
            'isi' => 'Pesan satu',
            'level_user' => '',
            'status' => 'aktif'
        ]);

        ModelsPemberitahuan::create([
            'isi' => 'Pesan dua',
            'level_user' => '',
            'status' => 'nonaktif'
        ]);
    }
}
