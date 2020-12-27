<?php

namespace App\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self ACTIVE()
 * @method static self LOCKED()
 * @method static self BLOCKED()
 * @method static self INACTIVE()
 */

final class UserStatusEnum extends Enum
{
    const INACTIVE  =   0;
    const ACTIVE    =   1;
    const LOCKED    =   2;
    const BLOCKED   =   3;
}
