<?php

namespace App\Console\Commands;

use App\Models\ArticleTranslation;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Console\Command;

class GenerateSitemapCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $sitemap = Sitemap::create()
            ->add(Url::create('/'))
            ->add(Url::create('cirrhose'))
            ->add(Url::create('cirrhosis'))
            ->add(Url::create('faq'))
            ->add(Url::create('qui-sommes-nous'))
            ->add(Url::create('about-us'))
            ->add(Url::create('conditions-generales-utilisation'))
            ->add(Url::create('terms-of-use'));

        $articles = ArticleTranslation::where('active', 1)->get();

        foreach($articles as $article) {
            $sitemap->add(Url::create("articles/{$article->locale}/{$article->slug}"));
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
