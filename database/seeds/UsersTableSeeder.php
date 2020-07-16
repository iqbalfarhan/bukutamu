<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrator',
            'username' => "admin",
            'email' => "iqbalfarhan1996@gmail.com",
            'password' => Hash::make('adminoke'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        factory(Tamu::class(), 10)->create();
    }
}
