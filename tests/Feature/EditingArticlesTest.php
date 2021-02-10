<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EditingArticlesTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAuthUserCanSeeEditPage()
    {
        $user = User::factory()->make();
        $article = Article::factory()->create();

        $response = $this->actingAs($user)->get('articles/'.$article->id.'/edit');

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGuestUserCannotSeeEditPage()
    {
        $article = Article::factory()->create();

        $response = $this->get('articles/'.$article->id.'/edit');

        $response->assertRedirect('/');
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAuthUserCanSeeCreatePage()
    {
        $user = User::factory()->make();

        $response = $this->actingAs($user)->get('articles/create');

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGuestUserCannotSeeCreatePage()
    {
        Article::factory()->create();

        $response = $this->get('articles/create');

        $response->assertRedirect('/');
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCannotCreateArticleWithSameTitle()
    {
        $user = User::factory()->make();
        $article = Article::factory()->create();

        $newArticle = Article::factory()->make([
            'title' => $article->title
        ]);

        $response = $this->actingAs($user)->post('/articles/store', $newArticle->toArray());

        $response->assertStatus(302);
        $response->assertSessionHasErrors('title');
    }

    // /**
    //  * A basic feature test example.
    //  *
    //  * @return void
    //  */
    // public function testArticleCanBeUpdated()
    // {
    //     $user = factory(User::class)->make();
    //     $article = factory(Article::class)->create();

    //     $article->summary = "edited";

    //     $response = $this->actingAs($user)
    //         ->put('/articles/'.$article->id, $article->toArray());

    //     $response->assertRedirect(route('articles.showSlug', $article));
    // }
}
