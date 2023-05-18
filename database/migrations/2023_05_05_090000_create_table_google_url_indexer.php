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
        Schema::create('google_url_indexer', function (Blueprint $table) {
            $table->id();

            $table->string('url')->unique();
            $table->nullableUuidMorphs('indexable');
            $table->enum('action', [
                'index',
                'unindex',
                'none',
            ])->default('none');
            $table->unsignedTinyInteger('priority')->default(0);

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
        Schema::dropIfExists('google_url_indexer');
    }
};
