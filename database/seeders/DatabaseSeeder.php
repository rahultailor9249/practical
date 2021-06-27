<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
//use Psy\Util\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => str::random(10),
            'email' => Str::random(10) . '@gmail.com',
            'password' => Str::random(15),
            'is_admin'=>1
        ]);
    }
}
