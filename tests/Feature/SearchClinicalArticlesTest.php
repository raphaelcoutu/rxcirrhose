<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\ArticleTranslation;
use App\Models\Drug;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SearchClinicalArticlesTest extends TestCase
{
    use RefreshDatabase;

    public function testSearchReturnsDrugAndClinicalArticles()
    {
        $article = Article::factory()->create([
            'keywords' => 'spironolactone ascites diuretic',
        ]);

        $translation = ArticleTranslation::factory()->create([
            'article_id' => $article->id,
            'locale' => 'fr',
            'title' => 'Spironolactone',
            'slug' => 'spironolactone',
        ]);

        Drug::factory()->create([
            'article_translation_id' => $translation->id,
            'name' => 'Aldactone',
        ]);

        $response = $this->getJson('/search?q=ascite&hl=fr');

        $response->assertOk();
        $response->assertJsonFragment([
            'type' => 'drug_article',
            'title' => 'Spironolactone',
            'label' => 'Fiche medicamenteuse',
            'url' => route('article-translations.showBySlug', [
                'locale' => 'fr',
                'slug' => 'spironolactone',
                'hl' => 'fr',
            ]),
        ]);
        $response->assertJsonFragment([
            'type' => 'clinical_article',
            'title' => 'Cirrhose',
            'label' => 'Info clinique',
            'url' => route('clinical-articles.show', [
                'locale' => 'fr',
                'slug' => 'cirrhosis',
                'hl' => 'fr',
            ]),
        ]);
    }

    public function testFaqIsNotReturnedByClinicalSearchLayer()
    {
        $response = $this->getJson('/search?q=foire&hl=fr');

        $response->assertOk();
        $response->assertJsonMissing([
            'title' => 'Foire aux questions',
        ]);
    }
}
