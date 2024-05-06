<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmailEngineers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("emails", function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("engineer_id");
            $table->string("email")->index()->nullable();
            $table->string("description")->nullable();
            $table->string("status",1)->default("1");
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
        Schema::dropIfExists("emails");
    }
}
