<?php

namespace App\Enums;

use phpDocumentor\Reflection\Types\Self_;
use phpDocumentor\Reflection\Types\Static_;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self EMPLOYER();
 * @method Static Self USER();
 **/

final class UserType extends Enum
{
    const EMPLOYER  = 'Employer';
    const USER      = 'User';
}
