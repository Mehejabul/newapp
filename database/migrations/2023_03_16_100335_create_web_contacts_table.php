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
        Schema::create('web_contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('email',100);
            $table->string('subject',200);
            $table->string('phone',20)->null();
            $table->longText('message');
            $table->string('slug',20)->uniqid();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('web_contacts');
    }
};
