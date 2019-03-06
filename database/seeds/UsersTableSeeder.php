<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name' => 'Public',
            'email' => 'public@public.com',
            'password' => bcrypt('Public27M'),
            'admin' => 0
        ]);
        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 0,
            'about' => 'Apapun Oke Asal Jalan.',
            'facebook' => 0,
            'youtube' => 0
        ]);
        
        $userA = App\User::create([
            'name' => 'Syarifuddin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'admin' => 1
        ]);
        App\Profile::create([
            'user_id' => $userA->id,
            'avatar' => 'uploads/avatars/1.jpg',
            'about' => 'Apapun Oke Asal Jalan.',
            'facebook' => 'http://www.facebook.com/syarifuddin27',
            'youtube' => 'http://www.youtube.com'
        ]);
    }
}
