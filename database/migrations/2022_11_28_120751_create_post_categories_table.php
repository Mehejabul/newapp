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
        Schema::create('post_categories', function (Blueprint $table) {
            $table->bigIncrements('postcate_id');
            $table->string('postcate_name',100)->unique();
            $table->string('postcate_remarks',200)->nullable();
            $table->string('postcate_url',200)->unique();
            $table->integer('postcate_creator')->nullable();
            $table->integer('postcate_editor')->nullable();
            $table->string('postcate_slug',50)->nullable();
            $table->integer('postcate_status')->default(1);
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
        Schema::dropIfExists('post_categories');
    }
};
