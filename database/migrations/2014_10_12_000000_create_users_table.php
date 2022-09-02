<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',20)->nullable();
            $table->string('username')->unique();
//            $table->string('surname',50)->nullable();
            $table->string('mobile');
//            $table->string('email',100)->nullable();
            $table->string('password',60)->nullable();
//            $table->boolean('status')->default('0');
//            $table->boolean('is_new')->default(true);
//            $table->rememberToken();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
