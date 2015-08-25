<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'mail_reservations',
            function(Blueprint $table){
                $table->increments('id');                   // id
                $table->string('to')->nullable();           // 宛先
                $table->string('title', 100)->nullable();   // メールタイトル
                $table->text('text')->nullable();           // メール本文
                $table->integer('send_flg')->default(1);    // 送信フラグ
                $table->datetime('send_time')->nullable();  // 送信予定時間
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
        Schema::dropIfExists('mail_reservations');
    }
}
