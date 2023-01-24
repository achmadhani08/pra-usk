<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            User::class,
            Kategori::class,
            Penerbit::class,
            Buku::class,
            Peminjaman::class,
            Pemberitahuan::class,
            Pesan::class,
            Identitas::class
        ]);
    }
}
