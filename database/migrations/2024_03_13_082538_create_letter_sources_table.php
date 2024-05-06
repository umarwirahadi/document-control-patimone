<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLetterSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_sources', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('source_name');
            $table->string('unit')->nullable();
            $table->text('description')->nullable();
            $table->char('package_id',40)->nullable();
            $table->string('status',1)->default('1');
            $table->string('created_by')->nullable();
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
        Schema::dropIfExists('letter_sources');
    }
}
