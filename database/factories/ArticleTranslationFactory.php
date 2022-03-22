<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\ArticleTranslation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleTranslationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ArticleTranslation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->words(3, true);

        return [
            'article_id' => 1,
            'locale' => 'fr',
            'title' => $title,
            'slug' => Str::slug($title),
            'summary' => $this->faker->text,
            'pharmacodynamics' => $this->faker->text,
            'references' => $this->faker->text,
            'active' => 1,
        ];
    }
}
