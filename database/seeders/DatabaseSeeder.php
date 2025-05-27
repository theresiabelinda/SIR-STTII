<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test1@example.com',
            'password' => bcrypt('admin123'),
        ]);
        

        // DB::table('kategoris')->insert([
        //     'nama_kategori' => 'Skripsi'
        // ]);
    }
}
