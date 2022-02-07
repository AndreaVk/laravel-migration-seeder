<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packets', function (Blueprint $table) {
            $table->id();
            $table->string("name", 150);
            $table->string("country", 150);
            $table->string("city", 150);
            $table->text("description")->nullable();
            $table->tinyInteger("people");
            $table->boolean("fly_included")->default(true);
            $table->float("price", 8, 2);
            $table->float("discount", 8, 2);
            $table->date('arrival');
            $table->date('departure');
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
        Schema::dropIfExists('packets');
    }
}
