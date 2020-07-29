<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //crear nuevos usuarios con seeders
        $user = User::create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'url' => 'http://admin.com',
        ]);

        $user2 = User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => Hash::make('user'),
            'url' => 'http://user.com',
        ]);
        
    }
}
