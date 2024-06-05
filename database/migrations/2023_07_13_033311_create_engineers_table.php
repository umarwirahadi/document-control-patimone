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
            $table->uuid('id')->primary();
            $table->string('code',50);
            $table->string('full_name',100);
            $table->string('nickname',70);
            $table->string('initial',100);
            $table->string('sex',100)->nullable();
            $table->string('phone1',50)->nullable();
            $table->string('phone2',100)->nullable();
            $table->string('status',1)->default(1);
            $table->text('description')->nullable();
            $table->softDeletes();
            $table->string('created_by');
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->index(['id','code','nickname']);
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
