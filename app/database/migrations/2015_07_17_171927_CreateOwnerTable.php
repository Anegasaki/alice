<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'owner', 
            function(Blueprint $table){
                $table->increments('id');                           // id
                $table->string('first_name', 100)->nullable();      // 名前
                $table->string('last_name', 100)->nullable();       // 名前（読み）
                $table->string('first_name_yomi', 100)->nullable(); // 苗字
                $table->string('last_name_yomi', 100)->nullable();  // 苗字（読み）
                $table->datetime('birthday')->nullable();           // 誕生日
                $table->integer('years')->nullable();               // 年齢
                $table->string('email',  320)->nullable();          // メールアドレス
                $table->timestamps();                               // 登録日
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
        Schema::dropIfExists('owner');//
    }
}
