<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        // $user = new User();
        // $user->name = 'pendaftaran-pasienn';
        // $user->email = 'admin@gmail.com';
        // $user->password = Hash::make('12345678');
        // $user->save();

        // $user = new User();
        // $user->name = 'ike';
        // $user->email = 'ike@gmail.com';
        // $user->password = Hash::make('12345678');
        // $user->save();

        // $user = new User();
        // $user->name = 'vadila';
        // $user->email = 'vadila@gmail.com';
        // $user->password = Hash::make('12345678');
        // $user->save();

        // $user = new User();
        // $user->name = 'ikevadila';
        // $user->email = 'ikevadila@gmail.com';
        // $user->password = Hash::make('12345678');
        // $user->save();

        // $user = new User();
        // $user->name = 'vadilaike';
        // $user->email = 'vadilaike@gmail.com';
        // $user->password = Hash::make('12345678');
        // $user->save();

        $admin = Role::create([
        'name' => 'admin',
        'display_name' => 'User Administrator'
    ]);

        $pengguna = Role::create([
            'name' => 'pengguna',
            'display_name' => 'User Biasa'
        ]);

        $user = new User();
        $user->name = 'ike vadila';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make(12345678);
        $user->save();

        $pengunjung = new User();
        $pengunjung->name = 'pengunjung';
        $pengunjung->email = 'pengunjung@gmail.com';
        $pengunjung->password = Hash::make(12345678);
        $pengunjung->save();

        $user->attachRole($admin);
        $pengunjung->attachRole($pengguna);
    }
}
