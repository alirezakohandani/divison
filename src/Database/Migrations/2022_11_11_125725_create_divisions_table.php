<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divisions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->nullable()->index();
            $table->string("type")->index();
            $table->string('title_en')->nullable()->index();
            $table->string('title_fa')->nullable()->index();
            $table->unsignedInteger('continent_id')->default(0)->index();
            $table->unsignedInteger('country_id')->default(0)->index();
            $table->unsignedInteger('province_id')->default(0)->index();
            $table->unsignedInteger('city_id')->default(0)->index();
            $table->unsignedInteger('capital_id')->default(0)->index();
            $table->float('latitude')->nullable()->index();
            $table->float('longitude')->nullable()->index();
            $table->string('language', '3')->nullable()->index();
            $table->string('currency', '3')->nullable()->index();
            $table->string('country_code')->nullable();
            $table->string('timezone')->nullable()->index();

            $table->timestamps();
            $this->additionalMigrations($table);
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('divisions');
    }

}
