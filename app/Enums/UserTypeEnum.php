<?php

namespace App\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self USER()
 * @method static self EMPLOYEE()
 */

final class UserTypeEnum extends Enum
{
    const USER      = 'User';
    const EMPLOYEE  = 'Employee';
}
