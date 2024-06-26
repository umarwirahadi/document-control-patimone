<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorrespondenceTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correspondence_types', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('corres_type');
            $table->text('description')->nullable();
            $table->enum('type',['IN','OUT'])->default('IN');
            $table->char('letter_source_id',60);
            $table->string('package_id')->nullable();
            $table->string('to_attention')->nullable();
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
        Schema::dropIfExists('correspondence_types');
    }
}
