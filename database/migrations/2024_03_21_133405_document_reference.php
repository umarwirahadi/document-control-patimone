<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DocumentReference extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("document_reference", function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("letter_id")->index();
            $table->string("letter_id_reference")->index();
            $table->string("reference_number")->index();
            $table->text("subject")->nullable()->nullable();
            $table->char('package_id',40)->nullable();
            $table->string('document_type')->nullable();
            $table->string("source")->nullable();
            $table->text("tags")->nullable()->nullable();
            $table->text("description")->nullable()->nullable();
            $table->string("status")->default("1");
            $table->string("created_by");
            $table->string("updated_by")->nullable();
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
        Schema::dropIfExists('document_reference');
    }
}
