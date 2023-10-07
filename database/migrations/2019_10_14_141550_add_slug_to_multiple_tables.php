<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugToMultipleTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('slug', 191)->unique(); // Specify a custom index length (191 bytes)
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->string('slug', 191)->unique(); // Specify a custom index length (191 bytes)
        });
        Schema::table('tags', function (Blueprint $table) {
            $table->string('slug', 191)->unique(); // Specify a custom index length (191 bytes)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropUnique('articles_slug_unique');
            $table->dropColumn('slug');
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->dropUnique('categories_slug_unique');
            $table->dropColumn('slug');
        });
        Schema::table('tags', function (Blueprint $table) {
            $table->dropUnique('tags_slug_unique');
            $table->dropColumn('slug');
        });
    }
}



?>
