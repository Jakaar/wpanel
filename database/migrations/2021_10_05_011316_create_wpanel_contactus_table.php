<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWpanelContactusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wpanel_contactus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('email');
            $table->string('phone');
            $table->text('short_content');
            $table->text('address');
            $table->string('facebook');
            $table->string('youtube');
            $table->string('twitter');
            $table->string('linkedin');
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
        Schema::dropIfExists('wpanel_contactus');
    }
}
