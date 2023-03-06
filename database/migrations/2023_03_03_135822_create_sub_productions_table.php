<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("sub_productions", function (Blueprint $table) {
            $table->id();
            $table->string("title", 30);
            $table->string("slug");
            $table->string("image")->nullable();
            $table->string("introduction", 250)->nullable();
            $table->json("content")->nullable();
            $table->timestamp("published_at")->nullable();
            $table->timestamps();
            $table->unsignedBigInteger("production_id")->nullable();
            $table
                ->foreign("production_id")
                ->references("id")
                ->on("productions");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("sub_productions");
    }
};
