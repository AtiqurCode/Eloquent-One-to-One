<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::pluck('id')->toArray();
        return [
            'user_id' => $this->faker->unique()->randomElement($users),
            'mobile_number' => $this->faker->phoneNumber(),
            'website' => $this->faker->url(),
            'twitter' => $this->faker->url(),
            'linked_in' => $this->faker->url(),
            'github' => $this->faker->url(),
        ];
    }
}
