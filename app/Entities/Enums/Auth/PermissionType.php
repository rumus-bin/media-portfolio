<?php

namespace App\Entities\Enums\Auth;

enum PermissionType: int
{
    case READ = 1;
    case CREATE = 2;
    case UPDATE = 3;
    case DELETE = 4;
}