<?php

namespace Database\Seeders;

use App\Models\Identitas as ModelsIdentitas;
use Illuminate\Database\Seeder;

class Identitas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsIdentitas::create([
            'nama_app' => 'Learn LSP Perpus',
            'photo' => '',
            'alamat_app' => 'Jl. SMEA 6',
            'email_app' => 'smea6@gmail.com',
            'nomor_hp' => '098012313'
        ]);
    }
}
