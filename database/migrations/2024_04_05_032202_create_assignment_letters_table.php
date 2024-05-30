<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment_letters', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->char('letter_id',40);
            $table->char('engineer_id',40);
            $table->string('name')->nullable();
            $table->string('action',40)->nullable();
            $table->integer('priority')->default(0);
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
        Schema::dropIfExists('assignment_letters');
    }
}
