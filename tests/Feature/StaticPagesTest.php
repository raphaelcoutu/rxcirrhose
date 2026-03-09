<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Drug;
use App\Models\Article;
use App\Models\ArticleTranslation;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StaticPagesTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHomePageReturns200()
    {
        $response = $this->get('/?hl=fr');

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHomePageDisplaysArticleAndDrugCount()
    {
        Article::factory(2)
            ->has(ArticleTranslation::factory()->has(Drug::factory(2)), 'translations')
            ->create();

        $response = $this->fr()
            ->get('/?hl=fr');

        $response->assertSeeText('2 fiches médicamenteuses');
        $response->assertSeeText('4 molécules analysées');
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testStaticPagesReturn200()
    {
        // FAQ
        $response = $this->get('/faq?hl=fr');
        $response->assertStatus(200);

        // Qui Sommes-nous?
        $response = $this->get('/qui-sommes-nous?hl=fr');
        $response->assertStatus(200);
    }

    public function testClinicalArticlesIndexReturns200()
    {
        $response = $this->get('/infos-cliniques?hl=fr');

        $response->assertStatus(200);
        $response->assertSeeText('Cirrhose');
        $response->assertSeeText('La classification Child-Pugh');
        $response->assertDontSeeText('Foire aux questions');
    }

    public function testClinicalArticleReturns200()
    {
        $response = $this->get('/clinical/fr/cirrhosis?hl=fr');

        $response->assertStatus(200);
        $response->assertSeeText('Cirrhose');
        $response->assertSeeText('Etiologies');
    }

    public function testLegacyClinicalRoutesRedirectToCanonicalUrls()
    {
        $this->get('/cirrhose?hl=fr')
            ->assertRedirect('/clinical/fr/cirrhosis?hl=fr');

        $this->get('/cirrhosis?hl=en')
            ->assertRedirect('/clinical/en/cirrhosis?hl=en');

        $this->get('/child-pugh?hl=fr')
            ->assertRedirect('/clinical/fr/child-pugh?hl=fr');
    }
}
