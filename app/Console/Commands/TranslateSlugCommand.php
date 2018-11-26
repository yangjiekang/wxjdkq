<?php

namespace App\Console\Commands;

use App\Models\Article;
use Illuminate\Console\Command;

class TranslateSlugCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'translate-slug';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Translate slug';

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
        //这里只转换Article的slug
        $articles = Article::where('slug', null)->get();
        $this->info('共有 '.count($articles). '条数据需要转换');
        foreach ($articles as $article){
            $article->save();
        }
        $this->info('转换完成');
    }
}
