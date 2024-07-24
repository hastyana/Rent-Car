<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'username'=>'admin',
                'nama'=>'AkunAdmin',    
                'email'=>'admin@gmail.com',
                'alamat'=>'Denpasar, Bali',
                'no_telp'=>'08130305872',
                'sim'=>'Sim A',
                'no_sim'=>'1101101101',
                'level'=>'admin',
                'password'=>Hash::make('Lump14sby')
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
