<?php

namespace App\Entities\Enums\Auth;

enum ExcessType: int
{
    case ALL = 1;
    case AUTHOR = 2;
    case NON = 3;
}
