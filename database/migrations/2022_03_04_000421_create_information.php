<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->timestamps();
        });

        Schema::create('subcategorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->timestamps();
        });


        Schema::create('informacions', function (Blueprint $table) {
            $table->id();
            $table->string('empresa_nombre')->nullable();
            $table->string('telefono')->nullable();
            $table->string('telefono2')->nullable();
            $table->string('whatapp')->nullable();
            $table->string('empresa_descripcion')->nullable();
            $table->string('email')->nullable();
            $table->string('email2')->nullable();
            $table->string('logo')->nullable();
            $table->timestamps();
        });

        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('producto_nombre')->nullable();
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->foreignId('subcategoria_id')->constrained('subcategorias');
            $table->string('descripcion')->nullable();
            $table->string('precio')->nullable();
            $table->string('imagen')->nullable();
            $table->timestamps();
        });


        Schema::create('headertrons', function (Blueprint $table) {
            $table->id();
            $table->string('imagen')->nullable();
            $table->string('title')->nullable();
            $table->string('descripcion', 5000)->nullable();
            $table->string('link_to')->nullable();
            $table->timestamps();
        });

        Schema::create('testimonios', function (Blueprint $table) {
            $table->id();
            $table->string('imagen')->nullable();
            $table->string('title')->nullable();
            $table->string('descripcion', 5000)->nullable();
            $table->timestamps();
        });

        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('imagen')->nullable();
            $table->string('title')->nullable();
            $table->string('descripcion', 5000)->nullable();
            $table->timestamps();
        });


        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->string('dia')->nullable();
            $table->string('apertura')->nullable();
            $table->string('cierre', 5000)->nullable();
            $table->timestamps();
        });

        Schema::create('redes_socials', function (Blueprint $table) {
            $table->id();
            $table->string('imagen')->nullable();
            $table->string('nombre')->nullable();
            $table->string('url', 5000)->nullable();
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('subcategorias');
        Schema::dropIfExists('informacions');
        Schema::dropIfExists('productos');
        Schema::dropIfExists('headertrons');
        Schema::dropIfExists('testimonios');
        Schema::dropIfExists('clientes');
        Schema::dropIfExists('horarios');
        Schema::dropIfExists('redes_socials');
    }
}
