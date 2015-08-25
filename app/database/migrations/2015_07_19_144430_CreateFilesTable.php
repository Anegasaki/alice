<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'files',
            function(Blueprint $table){
                $table->increments('id');                         // id
                $table->string('file_name', 50)->nullable();      // ファイル名
                $table->integer('file_category_id')->unsigned();  // ファイルカテゴリー
                $table->string('file_path', 200)->nullable();     // ファイルパス
                $table->timestamps();                             // 登録日と更新日
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
        Schema::dropIfExists('files');
    }
}
