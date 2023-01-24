<?php

namespace Database\Seeders;

use App\Models\Penerbit as ModelsPenerbit;
use Illuminate\Database\Seeder;

class Penerbit extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsPenerbit::create([
            'kode' => 'erl',
            'nama' => 'Erlangga'
        ]);
        
        ModelsPenerbit::create([
            'kode' => 'fst',
            'nama' => 'Fantasteen'
        ]);
    }
}
