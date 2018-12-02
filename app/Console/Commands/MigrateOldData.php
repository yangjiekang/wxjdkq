<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class MigrateOldData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:old_data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'migration old database';

    protected $oldDatabase;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
//        $this->info('连接老数据库');
        $this->oldDatabase = DB::connection('mysql_old');
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
//        $this->products();
//
//        $this->cases();
//
//        $this->news();
//
//        $this->articles();
//
//        $this->pages();

        $this->users();
    }

    public function products()
    {
        $this->info('开始迁移产品表数据');
        $oldProducts = $this->oldDatabase->select("select * from product");
        $products = [];
        foreach ($oldProducts as $old) {
            $products[] = [
                "id" => $old->id,
                "title" => $old->title,
                "content" => $old->content,
                "review" => $old->views,
                "created_at" => Carbon::createFromTimestamp(strtotime($old->savedatetime)),
                "updated_at" => Carbon::createFromDate()
            ];
        }
        DB::table('products')->insert($products);
        $this->info('迁移产品表数据成功');
    }

    public function cases()
    {
        $this->info('开始迁移案例表数据');
        $oldCases = $this->oldDatabase->select("select * from cases");
        $cases = [];
        foreach ($oldCases as $old) {
            $cases[] = [
                "id" => $old->id,
                "title" => $old->title,
                "content" => $old->content,
                "review" => $old->views,
                "created_at" => Carbon::createFromTimestamp(strtotime($old->savedatetime)),
                "updated_at" => Carbon::createFromDate()
            ];
        }
        DB::table('cases')->insert($cases);
        $this->info('迁移案例表数据成功');
    }

    public function news()
    {
        $this->info('开始迁移新闻表数据');
        $oldNews = $this->oldDatabase->select("select * from news");
        $news = [];
        foreach ($oldNews as $old) {
            $news[] = [
                "id" => $old->id,
                "title" => $old->title,
                "content" => $old->content,
                "review" => $old->views,
                "created_at" => Carbon::createFromTimestamp(strtotime($old->new_date)),
                "updated_at" => Carbon::createFromDate()
            ];
        }
        DB::table('news')->insert($news);
        $this->info('迁移新闻数据成功');
    }

    public function articles()
    {
        $this->info('开始迁移文章表数据');
        $oldArticles = $this->oldDatabase->select("select * from articles");
        $articles = [];
        foreach ($oldArticles as $old) {
            $articles[] = [
                "id" => $old->id,
                "title" => $old->title,
                "product_id" => $old->product_id,
                "content" => $old->content,
                "review" => $old->views,
                "created_at" => Carbon::createFromTimestamp(strtotime($old->article_date)),
                "updated_at" => Carbon::createFromDate()
            ];
        }
        DB::table('articles')->insert($articles);
        $this->info('迁移文章数据成功');
    }

    public function pages()
    {
        $this->info('开始迁移页面表数据');
        $oldPages = $this->oldDatabase->select("select * from company");
        $pages = [];
        foreach ($oldPages as $old) {
            $pages[] = [
                "id" => $old->id,
                "title" => $old->name,
                "content" => $old->content,
                "created_at" => Carbon::createFromDate(),
                "updated_at" => Carbon::createFromDate()
            ];
        }
        DB::table('pages')->insert($pages);
        $this->info('迁移页面表数据成功');
    }

    public function users()
    {
        $this->info('开始迁移用户表数据');
        $oldUsers = $this->oldDatabase->select("select * from user");
        $users = [];
        foreach ($oldUsers as $old) {
            $users[] = [
                "name" => $old->username,
                "email" => $old->id.'@qq.com',
                "password" => encrypt('123456'),
                "realname" => $old->realname,
                "tel" => $old->tel,
                "address" => $old->address,
                "note" => $old->diagnosis,
                "created_at" => Carbon::createFromDate(),
                "updated_at" => Carbon::createFromDate()
            ];
        }
        DB::table('users')->insert($users);
        $this->info('迁移用户数据成功');
    }
}
