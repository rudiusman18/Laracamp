<?php

namespace Database\Factories;

use App\Models\Camp;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CampBenefit>
 */
class CampBenefitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $allBenefits = [
            'Pro Techstack Kit',
            'IMac Pro 2021 & Display',
            '1-1 Monitorting Program',
            'Final Project Certificate',
            'Offline Course Videos',
            'Future Job Opportunity',
            'Premium Design Kit',
            'Website Builder',
        ];


        return [
            'camp_id'=>Camp::inRandomOrder()->first(),
            'name'=>Arr::random($allBenefits),
        ];
    }
}
