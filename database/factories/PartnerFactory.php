<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Partner;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partner>
 */
class PartnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Partner::class;
    public function definition()
    {
        
        $imageURL = $this->faker->imageUrl(100, 100);

        return [
            'slide_url' => $imageURL,
            'url'=> $this->faker->url(),
        ];
    }
}
