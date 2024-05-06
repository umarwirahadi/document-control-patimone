<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLetterFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_files', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('number')->index();
            $table->longText('subject')->index();
            $table->date('date')->index();
            $table->enum('type',['IN','OUT','OTHER'])->default('IN');
            $table->string('category')->nullable();
            $table->string('status',10)->nullable();
            $table->longText('links')->nullable();
            $table->string('created_by');
            $table->string('updated_by')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('letter_files');
    }
}
