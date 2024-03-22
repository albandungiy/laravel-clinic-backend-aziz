<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $table->string('nik');
        //     // kk
        //     $table->string('kk');
        //     // name
        //     $table->string('name');
        //     // phone
        //     $table->string('phone');
        //     // email
        //     $table->string('email')->nullable();
        //     // gender
        //     $table->string('gender');
        //     // $table->enum ('gender', ['male', 'female']);
        //     // birth_place
        //     $table->string('birth_place');
        //     // birth_date
        //     $table->date('birth_date');
        //     // is_deceased
        //     $table->boolean('is_deceased')->default(false);
        //     // address line
        //     $table->string('address_line');
        //     // city
        //     $table->string('city');
        //     // city code
        //     $table->string('city_code');
        //     // province
        //     $table->string('province');
        //     // province code
        //     $table->string('province_code');
        //     // district
        //     $table->string('district');
        //     // district code
        //     $table->string('district_code');
        //     // village
        //     $table->string('village');
        //     // village code
        //     $table->string('village_code');
        //     // rt
        //     $table->string('rt');
        //     // rw
        //     $table->string('rw');
        //     // postal code
        //     $table->string('postal_code');
        //     // marital status
        //     $table->string('marital_status');
        //     // relationship name
        //     $table->string('relationship_name')->nullable();
        //     // relationship phone
        //     $table->string('relationship_phone')->nullable();

        return [
            'nik' => $this->faker->numberBetween(1, 100),
            'kk' => $this->faker->numberBetween(1, 100),
            'name' => $this->faker->word,
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'gender' => $this->faker->word,
            'birth_place' => $this->faker->word,
            'birth_date' => $this->faker->date(),
            'is_deceased' => false,
            'address_line' => $this->faker->text,
            'city' => $this->faker->word,
            'city_code' => $this->faker->numberBetween(1, 100),
            'province' => $this->faker->word,
            'province_code' => $this->faker->numberBetween(1, 100),
            'district' => $this->faker->word,
            'district_code' => $this->faker->numberBetween(1, 100),
            'village' => $this->faker->word,
            'village_code' => $this->faker->numberBetween(1, 100),
            'rt' => $this->faker->numberBetween(1, 100),
            'rw' => $this->faker->numberBetween(1, 100),
            'postal_code' => $this->faker->numberBetween(1, 100),
            'marital_status' => $this->faker->word,
            'relationship_name' => $this->faker->word,
            'relationship_phone' => $this->faker->phoneNumber(),
            
        ];
    }
}
