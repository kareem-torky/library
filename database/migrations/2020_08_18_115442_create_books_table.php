<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // columns (title, desc, img)
        // title --> varchar 100
        // desc --> text 
        // img --> varchar 100, nullable 

        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->text('desc');
            $table->string('img', 100)->nullable();
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
        Schema::dropIfExists('books');
    }
}
