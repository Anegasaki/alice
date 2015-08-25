<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        SChema::create(
            'words',
            function(Blueprint $table){
                $table->increments('id');                      // id
                $table->string('words', 200)->nullable();      // 単語
                $table->string('words_yomi', 200)->nullable(); // 単語読み
                $table->timestamps();                          // 登録日と更新日
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
        Schema::dropIfExists('words');
    }
}
