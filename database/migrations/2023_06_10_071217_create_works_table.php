<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('item_no',100);
            $table->text('pay_item');
            $table->string('unit',100);
            $table->text('description')->nullable();
            $table->string('status',1)->default(1);
            $table->softDeletes();
            $table->string('created_by');
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->index(['id','item_no']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works');
    }
}
