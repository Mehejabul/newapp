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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('postcate_id');
            $table->string('post_title',100);
            $table->string('post_subtitle',100)->nullable();
            $table->longtext('post_details')->nullable();
            $table->integer('post_feature')->default(0);
            $table->string('post_feature_image')->nullable();
            $table->string('post_url',200)->unique();
            $table->integer('post_creator')->nullable();
            $table->integer('post_editor')->nullable();
            $table->string('post_slug',200)->unique();
            $table->integer('post_status')->default(1);
            $table->timestamps();
        });

        Schema::create('post_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained('posts');
            $table->foreignId('tag_id')->constrained('tags');
            $table->unique(['post_id', 'tag_id']);
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
        Schema::dropIfExists('posts');
        Schema::dropIfExists('post_tag');
    }
};
