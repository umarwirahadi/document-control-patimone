<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letters', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->enum('type',['IN','OUT'])->index();
            $table->string('from');
            $table->string('correspondence_type');
            $table->string('document_no')->index();
            $table->string('letter_ref_no')->nullable();
            $table->date('letter_date');
            $table->date('received_date')->nullable();
            $table->string('attention_to');
            $table->text('subject')->nullable();
            $table->text('reference')->nullable();
            $table->text('pic_letter_out')->nullable();
            $table->text('attachment')->nullable();
            $table->string('attachment_type')->nullable();
            $table->string('cc_to_letter_out')->nullable();
            $table->date('delivery_date')->nullable();
            $table->date('document_control_date')->nullable();
            $table->string('assign_to');
            $table->string('for_reference')->nullable();
            $table->date('due_date');
            $table->string('engineer_ref_no')->nullable();
            $table->string('engineer_res_date')->nullable();
            $table->string('status');
            $table->text('description')->nullable();
            $table->string('created_by');
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
        Schema::dropIfExists('letters');
    }
}
