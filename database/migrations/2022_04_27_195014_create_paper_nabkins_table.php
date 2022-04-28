<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaperNabkinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paper_nabkins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('width',5,2);
            $table->decimal('height',5,2);
            $table->string('metrial_color');
            $table->string('paper_color');
            $table->integer('layer_number');
            $table->decimal('paper_thickness',5,2);
            $table->integer('quantity_per_item');
            $table->integer('sheets_per_packet');
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
        Schema::dropIfExists('paper_nabkins');
    }
}
