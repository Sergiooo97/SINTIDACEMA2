<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $user = new User();
        $user->id ='000001';
        $user->name = 'Rafael';
        $user->apellidos = 'Eb Gallegos';
        $user->telefono = '9911074558';

        $user->email = 'sergio@admin.com';
        $user->password = Hash::make('12345678');
        $user->img = 'img_avatar.png';

        $user->save();
    }
}
