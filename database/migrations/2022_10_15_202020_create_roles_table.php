<?php

use App\Entities\Authorization\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create(Role::TABLE_NAME, static function (Blueprint $table) {
            $table->id();
            $table->string(Role::ROLE_NAME);
            $table->timestamps();
        });
    }
};
