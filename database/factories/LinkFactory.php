<?php

use Faker\Generator as Faker;

$factory->define(App\Link::class, function (Faker $faker) {
    return [
        //
        'title'       => '数据库测试 | 《Laravel 5.6 中文文档》 | PHP / Laravel 社区文档',
        'url'         => 'https://laravel-china.org/docs/laravel/5.6/database-testing#writing-factories',
        'icon'        => 'https://lccdn.phphub.org/uploads/sites/KDiyAbV0hj1ytHpRTOlVpucbLebonxeX.png',
        'description' => '数据库测试 简介 生成模型工厂 每次测试后重置数据库 创建模型工厂 工厂状态 在测试中使用模型工厂 创建模型 持久化模型 模型关联 可用的断言方法 简介 Laravel提供了各种有用的工具，以便更容易地测试数据库驱动的...',
        'user_id'     => 1,
    ];
});
