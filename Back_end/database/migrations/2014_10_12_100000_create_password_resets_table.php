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
        Schema::create('offre', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('book');
            $table->string('type');
            $table->string('descriptions');
            $table->string('image');
            $table->float('prix');
            $table->foreignId('utilisateur_id');
            $table-> foreign('utilisateur_id')->references('id')->on('utilisateur')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
};
