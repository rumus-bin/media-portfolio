<?php

use App\Entities\Authorization\Role;
use App\Entities\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('role_user', static function (Blueprint $table) {
            $table->foreignId('role_id')
                ->references(Role::ID)
                ->on(Role::TABLE_NAME);
            $table->foreignId('user_id')
                ->references(User::ID)
                ->on(User::TABLE_NAME);
        });
    }
};
