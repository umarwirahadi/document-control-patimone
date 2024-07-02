<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomingLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
    * @return void
     */
    public function up()
    {
        Schema::create('incoming_letters', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedInteger('package_id');
            $table->string('incoming_ref_no');
            $table->string('incoming_letter_type')->comment('letter, transmittal, other');
            $table->date('date_of_letter');
            $table->time('time_of_letter')->nullable();
            $table->date('date_of_receive');
            $table->time('time_of_receive')->nullable();
            $table->date('due_date');
            $table->string('type_of_receive')->default('by email')->comment('[by email,hard copy, other]');
            $table->text('subject');
            $table->json('references')->nullable();
            $table->string('type_of_action');
            $table->dateTime('date_delivered_pm')->nullable();
            $table->string('engineer_assigned')->comment('list of engineers');
            $table->string('assigned_by')->comment('who has assign this letter tl or pm');
            $table->date('date_distribute')->nullable();
            $table->time('time_distribute')->nullable();
            $table->string('status')->default(0)->comment('0:receive,1distributed, 2:responded,3:outstanding');
            $table->text('notes')->nullable();
            $table->text('description')->nullable();
            $table->softDeletes();
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by')->nullable();
            $table->timestamps();
            $table->index('id');
            $table->index('incoming_ref_no');
            $table->index('subject');
            $table->index('references');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incoming_letters');
    }
}
