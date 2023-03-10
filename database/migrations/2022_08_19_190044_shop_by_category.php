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
        Schema::create('shop_by_category', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string("slug");
            $table->string("description");
            $table->string('image');
            $table->decimal("prix",8,2)->default(0);
            $table->decimal("old-prix",8,2)->default(0);
            $table->integer("quantité")->default(0);
            $table->string("type");
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
        //
    }
};
