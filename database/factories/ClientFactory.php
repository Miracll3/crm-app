<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $birthDate = $this->faker->dateTimeBetween('-99 years', 'now');
        $uid = strtoupper(substr($this->faker->lastName, 0, 3)) . $birthDate->format('Ymd') ;
        $telephone = '+27' . $this->faker->numerify('#########');
        // Generate a South African ID number
        $yearOfBirth = Carbon::parse($birthDate)->format('y');
        $monthOfBirth = Carbon::parse($birthDate)->format('m');
        $dayOfBirth = Carbon::parse($birthDate)->format('d');
        $sequenceNumber = str_pad($this->faker->unique()->numberBetween(0, 999), 3, '0', STR_PAD_LEFT);
        $citizenship = $this->faker->randomElement(['0', '1']); // '0' for South African citizens, '1' for permanent residents
        $controlDigit = $this->faker->numberBetween(0, 9);

        $idNumber = $yearOfBirth . $monthOfBirth . $dayOfBirth . $sequenceNumber . $citizenship . $controlDigit;


        return [
            'uuid' => $uid,
            'id_number' => $idNumber,
            'date_of_birth' => $birthDate,
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'telephone' => $telephone,
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
