<?php

use App\Article;
use App\Interfaces\TS;

class ArticleSeeder extends TS
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Article::create(['theatre_id' => TS::id(1), 'name' => 'Article 1', 'desc_s' => trans('global.lorem'), 'desc' => trans('global.lorem-long')]);
        Article::create(['theatre_id' => TS::id(1), 'name' => 'Article 2', 'desc_s' => trans('global.lorem'), 'desc' => trans('global.lorem-long')]);
        Article::create(['theatre_id' => TS::id(0), 'name' => 'Article 3', 'desc_s' => trans('global.lorem'), 'desc' => trans('global.lorem-long')]);
        Article::create(['theatre_id' => TS::id(2), 'name' => 'Article 4', 'desc_s' => trans('global.lorem'), 'desc' => trans('global.lorem-long')]);
        Article::create(['theatre_id' => TS::id(2), 'name' => 'Article 5', 'desc_s' => trans('global.lorem'), 'desc' => trans('global.lorem-long')]);
    }
}
