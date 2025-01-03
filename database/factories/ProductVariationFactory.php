<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Smknstd\FakerPicsumImages\FakerPicsumImagesProvider;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductVariation>
 */
class ProductVariationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $this->faker->addProvider(new FakerPicsumImagesProvider($this->faker));
        $randomSeed = $this->faker->words(1);
        return [
            'name' => $this->faker->safeColorName(), // Random color name
            'sku' => strtoupper($this->faker->unique()->lexify('VAR-???-????')), // Unique SKU
            'price' => $this->faker->randomFloat(2, 5, 100), // Random price between $5 and $100
            'image' => "https://picsum.photos/seed/$randomSeed[0]/800/800",
        ];
    }
}
