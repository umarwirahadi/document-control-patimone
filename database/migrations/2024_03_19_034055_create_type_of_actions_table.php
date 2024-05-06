<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeOfActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_of_action', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('type_of_action');
            $table->string('description');
            $table->string('package_id');
            $table->string('status')->default('1');
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
        Schema::dropIfExists('type_of_action');
    }
}
