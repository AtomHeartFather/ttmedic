<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignesKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles_tags', function (Blueprint $table) {
            $table->foreign('article_id')->references('id')->on('article');
            $table->foreign('tag_id')->references('id')->on('tags');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles_tags', function (Blueprint $table) {
            $table->dropForeign('article_id_foreign');
            $table->dropForeign('tags_id_foreign');
        });
    }
}
