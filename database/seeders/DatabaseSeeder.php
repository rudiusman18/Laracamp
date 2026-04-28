<?php

namespace Database\Seeders;

use App\Models\Camp;
use App\Models\CampBenefit;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // eeder untuk user
        User::create([
            'name'=> 'Admin',
            'email'=> 'admin@laracamp.com',
            'password'=>password_hash('1234', PASSWORD_BCRYPT),
            'is_admin'=>true,
        ]);

        User::factory(10)->create();

        // seeder untuk camp table
        $camp1 = Camp::create([
            'title' => 'Gila Belajar',
            'slug' => Str::slug('Gila Belajar'),
            'price' => 280000,
        ]);

        $camp2 = Camp::create([
            'title' => 'Baru Mulai',
            'slug' => Str::slug('Baru Mulai'),
            'price' => 140000,
        ]);


        // Seeder untuk camp benefits
        $camp1->campBenefits()->saveMany(
            CampBenefit::factory(20)->create()
        );

        $camp2->campBenefits()->saveMany(
            CampBenefit::factory(10)->create()
        );
    }
}
