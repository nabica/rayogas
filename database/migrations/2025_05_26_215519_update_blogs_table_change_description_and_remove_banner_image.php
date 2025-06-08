<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class UpdateBlogsTableChangeDescriptionAndRemoveBannerImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('banner_image');
            $table->longText('body_blog')->nullable();
        });

        // Copia los datos de description a body_blog si es necesario
        DB::statement('UPDATE blogs SET body_blog = description');

        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->text('description')->nullable();
        });

        // Copia los datos de body_blog a description si es necesario
        DB::statement('UPDATE blogs SET description = body_blog');

        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('body_blog');
            $table->string('banner_image')->nullable();
        });
    }
}
