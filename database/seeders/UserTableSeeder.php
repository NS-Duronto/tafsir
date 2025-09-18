<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lead      = User::create([
            'name'              => 'Nazmus Saadat',
            'email'             => 'sps@saralrekha.com.bd',
            'phone'             => '01716477600',
            'email_verified_at' => now(),
            'password'          => bcrypt('01716477600'),
        ]);
    }
}