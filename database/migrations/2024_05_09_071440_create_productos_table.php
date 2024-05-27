<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration {
    public function up()
{
    Schema::create('productos', function (Blueprint $table) {
        $table->id();
        $table->string('descripcion');
        $table->decimal('pvp', 8, 2);
        $table->integer('stock');
        $table->string('imagen')->nullable(); // Nuevo campo para la imagen
        $table->timestamps();
    });
}


    public function down() {
        Schema::dropIfExists('productos');
    }
}
