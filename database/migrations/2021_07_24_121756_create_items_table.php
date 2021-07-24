<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();

            $table->string('guid');
            $table->text('title')->nullable();
            $table->text('link')->nullable();
            $table->longText('description')->nullable();
            $table->longText('content')->nullable();
            $table->text('author')->nullable();
            $table->date('date')->nullable();
            $table->date('date_updated')->nullable();
            $table->date('date_arrived')->nullable();
            $table->tinyInteger('read')->default(0);
            $table->text('image')->default(0);

            $table->bigInteger('feed_id')->unsigned();
            $table->timestamps();
            $table->foreign('feed_id')->references('id')->on('feeds')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
