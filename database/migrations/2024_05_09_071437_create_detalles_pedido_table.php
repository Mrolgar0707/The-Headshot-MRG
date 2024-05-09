<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesPedidoTable extends Migration {
    public function up() {
        Schema::create('detalles_pedido', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->decimal('precio', 8, 2);
            $table->foreignId('producto_id')->constrained('productos');
            $table->foreignId('pedido_id')->constrained('pedidos');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('detalles_pedido');
    }
}
