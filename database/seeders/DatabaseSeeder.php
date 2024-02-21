<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Company;
use App\Models\CompanyUser;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $company = Company::factory()->count(10)->hasUsers(20)->create();
//        dd($company->pluck('id'));
        User::factory()->create([
            'email' => 'mark@kevin.com',
            'password' => 'password'
        ])->companies()->attach($company->pluck('id'));
    }
}
