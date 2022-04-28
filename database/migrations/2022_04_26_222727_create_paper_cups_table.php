<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaperCupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paper_cups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('width',5,2);
            $table->decimal('length',5,2);
            $table->decimal('height',5,2);
            $table->integer('quantity_per_item');
            $table->string('material_type');
            $table->string('material_colors');
            $table->string('finger_print_color');
            $table->string('uom');
            $table->integer('capacity');
            $table->string('effects');
            $table->decimal('thickness',5,2);
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
        Schema::dropIfExists('paper_cups');
    }
}
