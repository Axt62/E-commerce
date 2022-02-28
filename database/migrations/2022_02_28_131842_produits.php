<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

$connection = 'Projet_Eval';

return new class extends Migration

{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('description');
            $table->decimal('prix');
            $table->string('slug');
            $table->timestamp('created_at');
            $table->string('img');
            $table->decimal('promotion');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
