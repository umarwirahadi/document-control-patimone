<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEngineersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engineers', function (Blueprint $table) {
            $table->id();
            $table->string('eng_code',50);
            $table->string('eng_first_name',100);
            $table->string('eng_last_name',100);
            $table->string('eng_phone',50)->nullable();
            $table->string('eng_email',100);
            $table->string('eng_emil_alternate',100)->nullable();
            $table->string('eng_status',1)->default(1);
            $table->text('description')->nullable();
            $table->softDeletes();
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by')->nullable();
            $table->timestamps();
            $table->index(['id','eng_code','eng_first_name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('engineers');
    }
}
