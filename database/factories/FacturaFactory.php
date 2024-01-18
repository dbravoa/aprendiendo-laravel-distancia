<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Factura>
 */
class FacturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'cliente' => $this->faker->sentence(),
            'empresa_facturadora' => $this->faker->sentence(),
            'monto_total' => $this->faker->randomFloat(1, 20, 30),
            'igv' => $this->faker->randomFloat()
        ];
    }
}
