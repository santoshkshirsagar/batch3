<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('recipes', function (Blueprint $table) {
            $table->string('image')->nullable();
            $table->integer('prep_time')->nullable();
            $table->integer('cook_time')->nullable();
            $table->integer('serves')->nullable();
            $table->text('ingredients')->nullable();
            $table->text('preparation')->nullable();
            $table->string('video')->nullable();
            $table->timestamp('published_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('recipes', function (Blueprint $table) {
            $table->dropColumn(['image', 'prep_time', 'cook_time', 'total_time', 'serves', 'materials', 'preparation', 'video', 'published_at']);
        });
    }
}
