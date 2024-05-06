<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRfisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_rfi', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->date('submitted_date');
            $table->time('submitted_time');
            $table->string('reference_no');
            $table->string('doc_number',30);
            $table->text('specification_std');
            $table->text('contractor_notes')->nullable();
            $table->string('contractor_pic')->nullable();
            $table->string('sub_contractor_pic')->nullable();
            $table->string('contractor_engineer')->nullable();
            $table->string('contractor_qa_qc')->nullable();
            $table->text('description')->nullable();
            $table->string('status',1)->default(0);
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->index('reference_no');
            $table->index('doc_number');
            $table->index('specification_std');
            // $table->foreignUuid('work_id')->nullable()->references('id')->on('works');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_rfi'); 
    }
}
