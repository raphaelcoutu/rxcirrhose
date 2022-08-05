<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\ArticleTranslation;
use App\Models\Drug;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ListAndShowArticlesTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $this->articles = Article::factory(2)
            ->has(ArticleTranslation::factory()->has(Drug::factory(2)), 'translations')
            ->create();
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testListArticles()
    {
        $response = $this->fr()->get('/articles');

        $response->assertStatus(200);
        $response->assertSeeText($this->articles[0]->translations()->first()->title);
        $response->assertSeeText($this->articles[1]->translations()->first()->title);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetArticleByIdGetPermanentlyRedirected()
    {
        $response = $this->get('/articles/' . $this->articles[0]->id);

        $this->fr()->followingRedirects();

        $response->assertStatus(301);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetArticleBySlugReturns200()
    {
        $translation = $this->articles[0]->translations()->first();

        $response = $this->fr()->get('/articles/' . $translation->locale . '/' . $translation->slug);

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testNotExitingArticleReturns404()
    {
        $response = $this->fr()->followingRedirects()->get('/articles/100');
        $response->assertStatus(404);

        $response = $this->fr()->followingRedirects()->get('/articles/not-an-article');
        $response->assertStatus(404);
    }
}
