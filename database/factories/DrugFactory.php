<?php

namespace Database\Factories;

use App\Models\Drug;
use Illuminate\Database\Eloquent\Factories\Factory;

class DrugFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Drug::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'article_translation_id' => 1,
            'name' => $this->faker->word,
            'childa_category' => 1,
            'childa_text' => 'Text modifiée',
            'childb_category' => 1,
            'childb_text' => null,
            'childc_category' => 1,
            'childc_text' => null,
            'absorption' => $this->faker->text,
            'distribution' => $this->faker->text,
            'metabolisme' => $this->faker->text,
            'elimination' => $this->faker->text,
            'official' => $this->faker->text,
            'litterature' => $this->faker->text,
            'active' => 1
        ];
    }
}
