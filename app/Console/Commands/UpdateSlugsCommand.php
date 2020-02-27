<?php

namespace App\Console\Commands;

use App\Article;
use Illuminate\Support\Str;
use Illuminate\Console\Command;

class UpdateSlugsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'slugs:update';

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
            $article->slug = Str::slug($article->title);
            $article->save();
        }
    }
}
