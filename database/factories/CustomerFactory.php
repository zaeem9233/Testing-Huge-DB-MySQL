<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Testing\Fakes\Fake;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CustomerFactory extends Factory
{
    public function definition(): array
    {
        $currentDate = Carbon::now();
        $minDate = $currentDate->copy()->subYears(80);
        $maxDate = $currentDate->copy()->subYears(18);
        $randomDate = Carbon::createFromTimestamp(rand($minDate->timestamp, $maxDate->timestamp));
        $dob = $randomDate->toDateString();

        $gender = ['male', 'female', 'other'];

        return [
            'first_name' => $this->faker->firstname(),
            'last_name' => $this->faker->lastName(),
            'gender' => $gender[rand(0, 2)],
            'phone_number' => $this->faker->phoneNumber(),
            'fax_number' => $this->faker->phoneNumber(),
            'date_of_birth' => $dob,
            'address' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'country' => $this->faker->country(),
            'zip_code' => $this->faker->postcode()
        ];
    }
}
