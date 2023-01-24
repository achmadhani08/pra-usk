<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsUser::create([
            'kode' => 'USR5b5ahd2a5698b4a6e',
            'nis' => '341434432',
            'fullname' => 'Achmad Dhani Syahputra',
            'username' => 'Dnsy',
            'password' => Hash::make('password'),
            'kelas' => '12 RPL',
            'alamat' => '',
            'photo' => '',
            'verif' => 'verified',
            'role' => 'user',
            'join_date' => '2023-01-06'
        ]);

        ModelsUser::create([
            'kode' => 'ADMdfha0368gc6bal1d6',
            'nis' => '',
            'fullname' => 'Bambang',
            'username' => 'Bmb',
            'password' => Hash::make('password'),
            'kelas' => '',
            'alamat' => '',
            'photo' => '',
            'verif' => 'verified',
            'role' => 'admin',
            'join_date' => '2023-01-06'
        ]);
    }
}
