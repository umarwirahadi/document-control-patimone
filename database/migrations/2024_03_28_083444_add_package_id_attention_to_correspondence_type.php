<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPackageIdAttentionToCorrespondenceType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('correspondence_types', function (Blueprint $table) {
            $table->string('package_id')->after('type')->comment('refer to table package');
            $table->string('to_attention')->after('package_id')->nullable()->comment('for attention');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('correspondence_types', function (Blueprint $table) {
            //
        });
    }
}
