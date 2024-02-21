<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\User;
use Closure;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{

//    public function configure(): Factory
//    {
//        return $this->afterCreating(function (Company $company) {
//            User::factory()->count($this->faker->numberBetween(10, 20))
//                ->create()
//                ->each(function ($user) use ($company) {
//                    $company->users()->attach($user->id);
//                });
//        });
//    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->words(rand(3, 10), true);
        $slug = Str::replace(" ", "-", strtolower($name));
        return [
            'name' => $name,
            'slug' => $slug,
        ];
    }

    public function afterCreating(Closure $callback)
    {

    }
}
