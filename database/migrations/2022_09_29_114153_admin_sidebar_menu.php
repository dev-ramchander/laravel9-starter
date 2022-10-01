<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_sidebar_menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->integer('status')->comment("0=>tempory inactive, 1=>active, 2=>inactive untill downtime")->default(0);
            $table->integer('parent_menu_id')->default(0);
            $table->integer('is_dropdown_menu')->default(0);
            $table->string('permission_value');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_sidebar_menus');
    }
};
