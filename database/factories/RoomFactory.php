<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => $this->faker->unique()->numerify('Room ###'),
            'type' => $this->faker->randomElement(['Single', 'Double', 'Suite']),
            'size' => $this->faker->randomElement(['Small', 'Medium', 'Large']),
            'amenities' => json_encode($this->faker->words(5)),
            'pictures' => json_encode([$this->faker->imageUrl(640, 480, 'rooms'), $this->faker->imageUrl(640, 480, 'rooms')]),
            'main_picture' => $this->faker->imageUrl(640, 480, 'rooms'),
            'capacity' => json_encode(['adults' => $this->faker->numberBetween(1, 4), 'children' => $this->faker->numberBetween(0, 2)]),
            'status' => $this->faker->randomElement(['available', 'occupied', 'maintenance']),
            'price' => $this->faker->randomFloat(2, 50, 500),
        ];
    }
}
