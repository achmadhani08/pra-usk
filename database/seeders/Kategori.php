<?php

namespace Database\Seeders;

use App\Models\Kategori as ModelsKategori;
use Illuminate\Database\Seeder;

class Kategori extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsKategori::create([
            'kode' => 'SJ',
            'nama' => 'Sejarah'
        ]);

        ModelsKategori::create([
            'kode' => 'HRR',
            'nama' => 'Horor'
        ]);

        ModelsKategori::create([
            'kode' => 'PD',
            'nama' => 'Pendidikan'
        ]);

        ModelsKategori::create([
            'kode' => 'CP',
            'nama' => 'Cerpen'
        ]);

        ModelsKategori::create([
            'kode' => 'NV',
            'nama' => 'Novel'
        ]);
    }
}
