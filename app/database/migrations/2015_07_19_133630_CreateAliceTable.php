<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAliceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'alice',
            function(Blueprint $table){
                $table->increments('id');                     // id
                $table->string('name', 100)->nullable();      // 名前
                $table->string('name_yomi', 200)->nullable(); // 名前読み
                $table->integer('owner_id')->unsigned();      // オーナーID
                $table->text('introduce', 500)->nullable();   // 自己紹介文
                $table->timestamps();                         // 登録日と更新日
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
        Schema::dropIfExists('alice');//
    }
}
