<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('metaDescription');
            $table->string('urlImageFacebook');
            $table->string('urlImageTwitter');
            $table->string('urlFavicon');
            $table->text('keywords');
            $table->text('apiGoogleMaps');
            $table->text('apiGoogleAnalytics');
            $table->text('scripts');
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
        Schema::dropIfExists('settings');
    }
}
