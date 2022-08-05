<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('keywords')->nullable();
            $table->timestamps();
        });

        Schema::table('article_translations', function (Blueprint $table) {
            $table->integer('article_id')->after('id')->default(0);
            $table->char('locale', 2)->after('article_id')->default('fr');
        });

        Schema::table('drugs', function (Blueprint $table) {
            $table->renameColumn('article_id', 'article_translation_id');
        });

        // Obtenir les ArticleTranslations (anciennement appelé Articles)
        $translations = DB::table('article_translations')->get();

        // On rempli le champ `keywords` des nouveaux Articles
        foreach ($translations as $translation) {
            $articleId = DB::table('articles')->insertGetId([
                'name' => $translation->title,
                'keywords' => $translation->keywords,
                'created_at' => $translation->created_at,
                'updated_at' => $translation->updated_at
            ]);

            DB::table('article_translations')
            ->where('id', $translation->id)
            ->update([
                'article_id' => $articleId,
                'locale' => 'fr'
            ]);
        }

        // On supprime le champ keywords des ArticleTranslations
        Schema::table('article_translations', function (Blueprint $table) {
          $table->dropColumn('keywords');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drugs', function (Blueprint $table) {
            $table->renameColumn('article_translation_id', 'article_id');
        });

        Schema::table('article_translations', function (Blueprint $table) {
            $table->text('keywords')->nullable()->after('active');
            $table->dropColumn(['article_id']);
            $table->dropColumn(['locale']);
        });

        Schema::dropIfExists('articles');
    }
}
