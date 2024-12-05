<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // পোস্টের শিরোনাম
            $table->text('content'); // পোস্টের বিষয়বস্তু
            $table->string('image')->nullable(); // ছবি (যদি থাকে)
            $table->timestamps(); // পোস্টের তৈরি ও আপডেট সময়
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
}
