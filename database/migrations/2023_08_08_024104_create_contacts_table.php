<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('phone_1',30);
            $table->string('phone_2',30)->nullable();
            $table->string('primary_email');
            $table->string('secondary_email')->nullable();
            $table->string('position_id');
            $table->string('profile')->nullable();
            $table->enum('type',['contractor','subcontractor','engineer','employeer'])->default('contractor');
            $table->string('status',1)->default(1);
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->index(['first_name','phone_1','primary_email']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
