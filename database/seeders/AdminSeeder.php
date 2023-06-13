<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		// \App\Models\User::factory(10)->create();

		 \App\Models\Admin::create([
		     'email' => 'admin@academy.com',
		     'password' => Hash::make('akgunsalih01')
		 ]);
    }
}
