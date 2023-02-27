<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create("productions", function (Blueprint $table) {
            $table->id();
            $table->string("title", 30);
            $table->string("slug");
            $table->string("image")->nullable();
            $table->string("introduction", 250)->nullable();
            $table->json("content")->nullable();
            $table->timestamp("published_at")->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("productions");
    }
}
