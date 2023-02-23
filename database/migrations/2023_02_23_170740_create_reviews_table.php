<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('reviewer_id');
            $table->string('reviewer_name',100)->unique();
            $table->text('reviewer_description')->nullable();
            $table->string('reviewer_image')->nullable();
            $table->string('reviewer_facebook',150)->nullable();
            $table->string('reviewer_twitter',150)->nullable();
            $table->string('reviewer_instagram',150)->nullable();
            $table->string('reviewer_youtube',150)->nullable();
            $table->string('reviewer_slug',100)->null();
            $table->integer('reviewer_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};
