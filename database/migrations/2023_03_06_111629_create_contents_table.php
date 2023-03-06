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
        Schema::create('contents', function (Blueprint $table) {
            $table->bigIncrements('content_id');
            $table->integer('page_id');
            $table->string('content_title');
            $table->string('content_subtitle')->nullable;
            $table->longText('content_details')->nullable;
            $table->string('content_image')->nullable;
            $table->integer('content_creator')->nullable;
            $table->integer('content_editor')->nullable;
            $table->string('content_slug')->unique;
            $table->integer('content_status')->default(1);
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
        Schema::dropIfExists('contents');
    }
};
