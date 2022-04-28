<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaperBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paper_boxes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->string('material_type');
            $table->string('material_colors');
            $table->decimal('paper_thickness',5,2);
            $table->string('model');
            $table->string('print_type');
            $table->integer('quantity_per_item');
            $table->string('single_board_item');
            $table->decimal('single_board_height',5,2);
            $table->decimal('single_board_width',5,2);
            $table->decimal('single_board_length',5,2);
            $table->string('solovan_layer');
            $table->string('uv_layer');
            $table->string('coverage');
            $table->string('uom');
            $table->string('effects');
            $table->string('glue_points_number');
            $table->string('window_shape');
            $table->decimal('window_width',5,2);
            $table->decimal('window_height',5,2);
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
        Schema::dropIfExists('paper_boxes');
    }
}
