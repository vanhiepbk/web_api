<?php

namespace Database\Seeders;

use App\Entities\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Gonzalo',
            'email' => 'gonzah@helloworld.com',
            'password' => bcrypt('123456'),
            'active' => 1,
            'remember_token' => Str::random(10),
        ]);
    }
}
