<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();  // Auto-incrementing primary key
            $table->string('name');  // Admin's name
            $table->string('title');  // Admin's title or position
            $table->text('description');  // Short description of the admin
            $table->longText('details_description');  // Detailed description or bio of the admin
            $table->string('image')->nullable();  // Path to the admin's image (nullable)
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
        Schema::dropIfExists('admins');
    }
}
