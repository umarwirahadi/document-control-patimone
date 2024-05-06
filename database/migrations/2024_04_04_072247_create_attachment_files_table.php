<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttachmentFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachment_files', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->char('letter_id',40)->index();
            $table->text('file_name');
            $table->text('file_link')->nullable();
            $table->string('type',100)->nullable();
            $table->string("description")->nullable()->nullable();
            $table->string("tags")->nullable()->nullable();
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
        Schema::dropIfExists('attachment_files');
    }
}
