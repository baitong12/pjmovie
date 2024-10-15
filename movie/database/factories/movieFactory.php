<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Movie; // อย่าลืมใส่ Model ของ Movie

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class movieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3), // สร้างชื่อภาพยนตร์จำลอง
            'director' => $this->faker->name(), // สร้างชื่อผู้กำกับจำลอง
            'release_year' => $this->faker->year(), // สร้างปีที่ออกฉายจำลอง
            'genre' => $this->faker->word(), // สร้างประเภทของภาพยนตร์จำลอง
            'synopsis' => $this->faker->paragraph(), // สร้างเรื่องย่อจำลอง
        ];
    }
}
