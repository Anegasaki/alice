<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'file_categories',
            function(Blueprint $table){
                $table->increments('id');                         // id
                $table->string('file_categor', 100)->nullable();  // ファイルカテゴリー名
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
        Schema::dropIfExists('file_categories');
    }
}
