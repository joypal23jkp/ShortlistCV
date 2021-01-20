<?php

use App\Enums\UserType;
use App\Enums\UserStatusEnum;
use App\Enums\UserTypeEnum;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('users')){
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('password');
                $table->string('phone',15)->unique();
                $table->string('email',191)->unique();
                $table->string('present_address',191)->nullable();
                $table->enum('type',  UserTypeEnum::toArray())->default(UserTypeEnum::EMPLOYEE());
                $table->enum('status', UserStatusEnum::toArray())->default(UserStatusEnum::ACTIVE());
                $table->date('email_verified_at')->nullable();
                $table->rememberToken();
                $table->timestamps();
                $table->softDeletes();
            });
        }
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
