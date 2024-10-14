<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\Models\Conversion::class, function (Faker $faker) {
    return [
        'advertiser_id' => $this->faker->numberBetween(1, 1000),
        'claim_id' => $this->faker->numberBetween(1, 1000),
        'promotion_id' => $this->faker->numberBetween(1, 1000),
        'publisher_id' => $this->faker->numberBetween(1, 1000),
        'media_id' => $this->faker->numberBetween(1, 1000),
        'manuscript_id' => $this->faker->numberBetween(1, 1000),
        'goods_link_id' => $this->faker->numberBetween(1, 1000),
        'conversion_click_id' => $this->faker->uuid,
        'pback_param' => $this->faker->uuid,
        'status' => $this->faker->numberBetween(0, 5),
        'judged_at' => $this->faker->dateTime,
        'clicked_at' => $this->faker->dateTime,
        'converted_at' => $this->faker->dateTime,
        'ip_address' => $this->faker->ipv4,
        'user_agent' => $this->faker->userAgent,
        'os' => $this->faker->numberBetween(1, 10),
        'device' => $this->faker->numberBetween(0, 3),
        'click_referer' => $this->faker->url,
        'click_url_query_string' => $this->faker->url,
        'conversion_referer' => $this->faker->url,
        'url_query_string' => $this->faker->url,
        'user' => $this->faker->name,
        'item_no' => $this->faker->uuid,
        'items' => $this->faker->numberBetween(1, 10),
        'sales' => $this->faker->numberBetween(1000, 100000),
        'sales_currency_code' => $this->faker->currencyCode,
        'sales_currency_amount' => $this->faker->numberBetween(1000, 100000),
        'net' => $this->faker->numberBetween(1000, 50000),
        'net_currency_code' => 'USD',
        'net_currency_amount' => $this->faker->numberBetween(1000, 50000),
        'gross' => $this->faker->numberBetween(1000, 50000),
        'gross_currency_code' => 'USD',
        'gross_currency_amount' => $this->faker->numberBetween(1000, 50000),
        'profit' => $this->faker->numberBetween(1000, 50000),
        'profit_currency_amount' => $this->faker->numberBetween(1000, 50000),
        'tracking' => $this->faker->numberBetween(0, 99),
        'rank_type' => $this->faker->numberBetween(0, 5),
        'rank_position' => $this->faker->numberBetween(0, 100),
        'is_test' => $this->faker->boolean,
        'is_aggregation_processed' => $this->faker->boolean,
        'created_at' => now(),
        'updated_at' => now(),
        'operated_user_type' => $this->faker->numberBetween(1, 5),
        'operated_user_id' => $this->faker->numberBetween(1, 1000),
    ];
});
