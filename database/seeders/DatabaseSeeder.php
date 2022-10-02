<?php

namespace Database\Seeders;
use Illuminate\support\facades\DB;//veriatabanı bağlantısını çekiyoruz
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('konular')->insert([
            'title'=>'Php',
            'contents'=>'Deneme123'
        ]);
    }
}
