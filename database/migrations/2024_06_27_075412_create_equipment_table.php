<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment_category', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('category_name',50);
            $table->string('category_description',255)->nullable();
            $table->string('category_status',1)->default(1);
            $table->char('created_by',60)->nullable();
            $table->char('updated_by',60)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('equipment', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('code',50);
            $table->string('name',255)->index();
            $table->integer('qty')->default(0);
            $table->string('unit',100)->nullable();
            $table->string('brand_name',255)->nullable();
            $table->string('model_name',255)->nullable();
            $table->string('warranty',255)->nullable();
            $table->date('warranty_expired')->nullable();
            $table->text('description')->nullable();
            $table->text('references')->nullable();
            $table->text('link')->nullable();
            $table->string('category_status',1)->default(1);
            $table->char('created_by',60)->nullable();
            $table->char('updated_by',60)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('equipment_do', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('equipment_id',50);
            $table->date('date')->nullable();
            $table->integer('qty')->default(0);
            $table->string('unit',100)->nullable();
            $table->string('brand_name',255)->nullable();
            $table->string('model_name',255)->nullable();
            $table->string('warranty',255)->nullable();
            $table->date('warranty_expired')->nullable();
            $table->text('description')->nullable();
            $table->text('link')->nullable();
            $table->string('category_status',1)->default(1);
            $table->char('created_by',60)->nullable();
            $table->char('updated_by',60)->nullable();
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
        Schema::dropIfExists('equipment');
    }
}
