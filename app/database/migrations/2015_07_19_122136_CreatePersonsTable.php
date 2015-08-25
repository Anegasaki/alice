<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'persons',
            function(Blueprint $table){
                $table->increments('id');                       // id
                $table->string('name', 200)->nullable();        // 名前
                $table->string('name_yomi', 200)->nullable();   // 読み
                $table->integer('category_1')->unsigned();      // 関係1
                $table->integer('category_2')->nusigned();      // 関係2
                $table->string('hobbies')->nullable();          // 趣味
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
        Schema::dropIfExists('persons');
    }
}
