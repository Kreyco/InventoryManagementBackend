<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'        => $this->faker->unique()->numerify('Order ##'),
            'code'        => $this->faker->unique()->numerify('Code##'),
            'priority'  => $this->faker->randomElement(array_keys(Order::PRIORITY)),
            'delivery_date'  => $this->faker->dateTimeBetween('+1 week', '+1 month')
        ];
    }
}
