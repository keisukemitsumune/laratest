<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('advertiser_id')->index(); // int unsigned + index
            $table->unsignedInteger('claim_id'); // int unsigned
            $table->unsignedInteger('promotion_id')->index(); // int unsigned + index
            $table->unsignedInteger('publisher_id'); // int unsigned
            $table->unsignedInteger('media_id'); // int unsigned
            $table->unsignedInteger('manuscript_id'); // int unsigned
            $table->unsignedInteger('goods_link_id'); // int unsigned
            $table->string('conversion_click_id', 500); // varchar(500)
            $table->string('pback_param', 500); // varchar(500)
            $table->unsignedTinyInteger('status')->default(0); // tinyint unsigned + default 0
            $table->dateTime('judged_at')->nullable(); // datetime nullable
            $table->dateTime('clicked_at'); // datetime
            $table->dateTime('converted_at'); // datetime (primary key in MySQL)
            $table->string('ip_address', 15); // varchar(15)
            $table->string('user_agent', 255); // varchar(255)
            $table->unsignedTinyInteger('os'); // tinyint unsigned
            $table->unsignedTinyInteger('device')->default(0); // tinyint unsigned + default 0
            $table->string('click_referer', 500); // varchar(500)
            $table->string('click_url_query_string', 500)->default(''); // varchar(500) + default ''
            $table->string('conversion_referer', 500); // varchar(500)
            $table->string('url_query_string', 500); // varchar(500)
            $table->string('user', 500); // varchar(500)
            $table->string('item_no', 500); // varchar(500)
            $table->unsignedInteger('items'); // int unsigned
            $table->unsignedBigInteger('sales'); // bigint unsigned
            $table->string('sales_currency_code', 3)->nullable(); // varchar(3) nullable
            $table->unsignedBigInteger('sales_currency_amount')->nullable(); // bigint unsigned nullable
            $table->bigInteger('net'); // bigint
            $table->string('net_currency_code', 3)->default('USD'); // varchar(3) + default 'USD'
            $table->bigInteger('net_currency_amount')->nullable(); // bigint nullable
            $table->bigInteger('gross'); // bigint
            $table->string('gross_currency_code', 3)->default('USD'); // varchar(3) + default 'USD'
            $table->bigInteger('gross_currency_amount')->nullable(); // bigint nullable
            $table->bigInteger('profit')->nullable(); // bigint nullable
            $table->bigInteger('profit_currency_amount')->nullable(); // bigint nullable
            $table->unsignedTinyInteger('tracking')->default(99); // tinyint unsigned + default 99
            $table->unsignedTinyInteger('rank_type')->default(0); // tinyint unsigned + default 0
            $table->unsignedInteger('rank_position')->default(0); // int unsigned + default 0
            $table->unsignedTinyInteger('is_test')->nullable()->default(0); // tinyint(1) + nullable + default 0
            $table->unsignedTinyInteger('is_aggregation_processed')->nullable()->default(0); // tinyint(1) + nullable + default 0
            $table->timestamps(0); // timestamp + default CURRENT_TIMESTAMP
            $table->unsignedTinyInteger('operated_user_type'); // tinyint unsigned
            $table->unsignedInteger('operated_user_id'); // int unsigned
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conversions');
    }
}
