<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalkReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'talk_reservations', 
            function(Blueprint $table){
                $table->increments('id');                       // id
                $table->string('file_name',200)->nullable();    // ファイル名
                $table->string('sentence',500)->nullable();     // 発話文章
                $table->datetime('execution_time')->nullable(); // 実行時間
                $table->integer('expiration_flg')->default(1);  // 有効フラグ
                $table->timestamps();                           // 登録日と更新日
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
        Schema::dropIfExists('talk_reservations');  // テーブル削除
    }
}
