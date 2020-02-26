<?php

namespace App\Console\Commands;

use App\Article;
use Illuminate\Console\Command;

class UpdateArticlesSlugs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update-slugs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update slugs to all articles';

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
        $articles = Article::all();

        foreach($articles as $article) {
            $article->slug = str_slug($article->title);
            $article->save();
        }
    }
}
