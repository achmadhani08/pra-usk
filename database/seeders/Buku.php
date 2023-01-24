<?php

namespace Database\Seeders;

use App\Models\Buku as ModelsBuku;
use Illuminate\Database\Seeder;

class Buku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsBuku::create([
            'judul' => 'Restless',
            'kategori_id' => 5,
            'penerbit_id' => 2,
            'tahun_terbit' => '2019',
            'isbn' => '9786026193032',
            'photo' => 'restless.png',
            'pengarang' => 'Ahmad Mahdi',
            'j_buku_baik' => 8,
            'j_buku_buruk' => 2
        ]);

        ModelsBuku::create([
            'judul' => 'Bahasa Inggris',
            'kategori_id' => 3,
            'penerbit_id' => 1,
            'tahun_terbit' => '2006',
            'isbn' => '9786012313032',
            'photo' => 'bhs-inggris.png',
            'pengarang' => 'Penulis',
            'j_buku_baik' => 28,
            'j_buku_buruk' => 2
        ]);
    }
}
