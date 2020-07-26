<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ArticleTag;
use Faker\Generator as Faker;

$factory->define(ArticleTag::class, function (Faker $faker) {
    return [
        'article_id' => App\Article::inRandomOrder()->limit(1)->pluck('id')[0],
        'tag_id' => App\Tag::inRandomOrder()->limit(1)->pluck('id')[0]

    ];
});
