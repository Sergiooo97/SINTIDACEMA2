<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
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
        $user->name = 'Rafael Eb Gallegos';
        $user->email = 'sergio@admin.com';
        $user->password = Hash::make('12345678');;
        $user->save();
       
    }
}
