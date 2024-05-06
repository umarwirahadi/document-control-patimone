<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToEngineers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('engineers', function (Blueprint $table) {
            // $table->string('initial',50)->nullable()->after('eng_last_name');
            $table->enum('type',['engineer','inspector','ss','other'])->default('engineer')->after('initial');
            $table->string('photo_profile')->nullable()->after('type');
            $table->text('dicipline')->after('photo_profile')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('engineers', function (Blueprint $table) {
            //
        });
    }
}
