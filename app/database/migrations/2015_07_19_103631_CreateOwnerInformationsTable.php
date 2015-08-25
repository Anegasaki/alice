<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnerInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'owner_informations',
            function(Blueprint $table){
                $table->increments('id');                        // id
                $table->integer('owner_id')->unsigned();         // owner_id
                $table->string('jobs', 200)->nullable();         // 仕事
                $table->string('jobs_yomi', 200)->nullable();    // 仕事読み
                $table->string('address',200)->nullable();       // 住所
                $table->string('address_yomi', 200)->nullable(); // 住所読み
                $table->timestamps();                            // 登録日と更新日
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
        Schema::dropIfExists('owner_informations');
    }
}
