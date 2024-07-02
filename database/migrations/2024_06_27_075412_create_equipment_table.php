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
        Schema::create('eq_product_category', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('category_code',50);
            $table->string('category_name',50);
            $table->string('category_description',255)->nullable();
            $table->string('category_status',1)->default(1);
            $table->char('created_by',60)->nullable();
            $table->char('updated_by',60)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('eq_products', function (Blueprint $table) {
            $table->uuid('id');
            $table->char('eq_product_category_id',60);
            $table->string('code',50);
            $table->string('name',255)->nullable();
            $table->integer('qty')->default(0);
            $table->string('unit',100)->nullable();
            $table->string('brand_name',255)->nullable();
            $table->string('model_name',255)->nullable();
            $table->date('eq_date')->nullable();
            $table->string('warranty',255)->nullable();
            $table->date('warranty_expired')->nullable();
            $table->text('specification')->nullable();
            $table->text('remark')->nullable();
            $table->text('references')->nullable();
            $table->char('package_id')->nullable();
            $table->text('link1')->nullable();
            $table->text('link2')->nullable();
            $table->text('link3')->nullable();
            $table->char('created_by',60)->nullable();
            $table->char('updated_by',60)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('eq_product_images', function (Blueprint $table) {
            $table->uuid('id');
            $table->char('eq_product_id',60)->nullable();
            $table->string('type',50);
            $table->text('link1')->nullable();
            $table->text('link2')->nullable();
            $table->text('description')->nullable();
            $table->char('created_by',60)->nullable();
            $table->char('updated_by',60)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('eq_product_details', function (Blueprint $table) {
            $table->uuid('id');
            $table->char('eq_product_id',60)->nullable();
            $table->integer('product_number')->nullable();
            $table->string('part_number',200)->nullable();
            $table->string('serial_number',200)->nullable();
            $table->string('label',200)->nullable();
            $table->text('images')->nullable();
            $table->enum('status',['stock','in use','broken'])->default('stock');
            $table->text('description')->nullable();
            $table->char('created_by',60)->nullable();
            $table->char('updated_by',60)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('eq_do', function (Blueprint $table) {
            $table->uuid('id');
            $table->char('eq_product_id',60)->nullable();
            $table->string('do_no',100)->nullable();
            $table->date('do_date')->nullable();
            $table->string('send_from_company',255)->nullable();
            $table->string('send_from_name',255)->nullable();
            $table->date('send_date')->nullable();
            $table->date('receive_date')->nullable();
            $table->string('receive_by_company',255)->nullable();
            $table->string('receive_by_name',255)->nullable();
            $table->string('acknowledge',255)->nullable();
            $table->text('description')->nullable();
            $table->text('link')->nullable();
            $table->enum('do_type',['full','partial'])->default('full');
            $table->char('created_by',60)->nullable();
            $table->char('updated_by',60)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('eq_distributions', function (Blueprint $table) {
            $table->uuid('id');
            $table->char('eq_product_id',60)->nullable();
            $table->char('eq_product_details',60)->nullable();
            $table->integer('qty')->default(0);
            $table->char('user_id',60)->nullable();
            $table->string('full_name',200)->nullable();
            $table->string('email',200)->nullable();
            $table->string('phone',50)->nullable();
            $table->string('position',200)->nullable();
            $table->string('company_name',200)->nullable();
            $table->integer('product_number')->nullable();
            $table->date('distribution_date')->nullable();
            $table->text('handedover_by')->nullable();
            $table->date('handedover_date')->nullable();
            $table->text('acknowledge')->nullable();
            $table->date('acknowledge_date')->nullable();
            $table->text('remark')->nullable();
            $table->text('images')->nullable();
            $table->string('status',1)->default(1);
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
        Schema::dropIfExists('eq_product_category');
        Schema::dropIfExists('eq_products');
        Schema::dropIfExists('eq_product_images');
        Schema::dropIfExists('eq_product_details');
        Schema::dropIfExists('eq_do');
        Schema::dropIfExists('eq_distributions');
    }
}
