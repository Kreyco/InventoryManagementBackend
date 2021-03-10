<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'        => $this->faker->unique()->numerify('Product ##'),
            'code'        => $this->faker->unique()->numerify('Code##'),
            'sell_price'  => $this->faker->randomFloat(3, 0, 200),
            'buy_price'   => $this->faker->randomFloat(3, 0, 200),
            'unit'        => $this->faker->randomElement(Product::UNITS),
            'notes'       => $this->faker->text(100),
            'supplier_id' => $this->faker->numberBetween(1, 10),
            'state'       => 1,
            'created_by'  => $this->faker->numberBetween(1, 10),
            'updated_by'  => $this->faker->numberBetween(1, 10),
            'created_at'  => now(),
            'updated_at'  => now(),
        ];
    }
}
