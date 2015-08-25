<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'calendar',
            function(Blueprint $table){
                $table->increments('id');                   // id
                $table->datetime('datetime')->nullable();   // 予定日
                $table->string('title')->nullable();        // タイトル
                $table->string('detail')->nullable();       // 詳細
                $table->integer('person_id')->unsigned();   // 同行者
                $table->integer('others')->unsigned();      // 合計人数
                $table->integer('importance')->unsigned();  // 重要度
                $table->timestamps();                       // 登録日と更新日
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calendar');
    }
}
