<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BrandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Brand::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'admin_id' => function(){
                return Admin::all()->random();
            },
            'brand_name' => $this->faker->name,
            'brand_image' => $this->faker->image(public_path('images'), 640, 480,null, false)
        ];
    }
}
