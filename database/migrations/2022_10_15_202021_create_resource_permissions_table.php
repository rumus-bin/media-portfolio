<?php

use App\Entities\Authorization\ResourcePermission;
use App\Entities\Authorization\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create(ResourcePermission::TABLE_NAME, static function (Blueprint $table) {
            $table->id();
            $table->string(ResourcePermission::RESOURCE_NAME);
            $table->integer(ResourcePermission::PERMISSION_TYPE);
            $table->integer(ResourcePermission::EXCESS_TYPE);
            $table->timestamps();

            $table->foreignId(ResourcePermission::ROLE_ID)
                ->references(Role::ID)
                ->on(Role::TABLE_NAME);
        });
    }
};
