<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class BlogPostRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("blog_posts", function (Blueprint $table) {
            $table->integer("user_id")->unsigned()->notNull();
            $table->foreign("user_id")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("blog_posts", function (Blueprint $table) {
            $table->dropForeign('blog_post_user_id_foreign');
        });
    }
}
