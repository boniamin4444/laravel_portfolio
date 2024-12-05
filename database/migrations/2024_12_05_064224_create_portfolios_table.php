<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();  // Auto-incrementing primary key
            $table->string('title');  // Portfolio title
            $table->text('description');  // Portfolio description
            $table->string('image');  // Path to image (stored in storage/public/portfolio_images)
            $table->string('live_link');  // Live project URL
            $table->string('video_link')->nullable();  // Optional video link
            $table->timestamps();  // created_at and updated_at timestamps
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolios');
    }
}
