<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 75)->unique();
            $table->string('first_name', 75)->nullable();
            $table->string('middle_name', 75)->nullable();
            $table->string('last_name', 75)->nullable();
            $table->string('phone', 36)->nullable();
            $table->string('country', 75)->nullable();
            $table->string('city', 75)->nullable();
            $table->string('state', 75)->nullable();
            $table->string('zip', 32)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
