<?php

namespace Tests\Feature;

use App\Drug;
use App\Article;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
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
    public function testHomePageDisplaysArticleCount()
    {
        factory(Article::class, 2)->create();

        $response = $this->get('/');

        $response->assertSeeText('2 fiches médicamenteuse');
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHomePageDisplaysDrugCount()
    {
        factory(Article::class, 2)
            ->create()
            ->each(function ($article) {
                $article->drugs()->saveMany(factory(Drug::class, 2)->make());
            });

        $response = $this->get('/');

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
        $response = $this->get('/child-pugh');
        $response->assertStatus(200);

        // Cirrhose
        $response = $this->get('/cirrhose');
        $response->assertStatus(200);

        // FAQ
        $response = $this->get('/faq');
        $response->assertStatus(200);

        // Qui Sommes-nous?
        $response = $this->get('/qui-sommes-nous');
        $response->assertStatus(200);
    }
}
