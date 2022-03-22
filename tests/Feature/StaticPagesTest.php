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
        $response = $this->get('/');

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
            ->get('/');

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
        // Child-Pugh
        $response = $this->fr()->get('/child-pugh');
        $response->assertStatus(200);

        // Cirrhose
        $response = $this->fr()->get('/cirrhose');
        $response->assertStatus(200);

        // FAQ
        $response = $this->fr()->get('/faq');
        $response->assertStatus(200);

        // Qui Sommes-nous?
        $response = $this->fr()->get('/qui-sommes-nous');
        $response->assertStatus(200);
    }
}
