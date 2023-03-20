<?php declare(strict_types=1);

namespace App\Enums;

use App\Enums\Lib\FormOption;
use BenSampo\Enum\Attributes\Description;
use BenSampo\Enum\Enum;

/**
 * @method static static SMALL_TAXPAYER()
 * @method static static GENERAL_TAXPAYER()
 */
final class TaxTypeEnum extends Enum
{
    use FormOption;
    #[Description('小规模纳税人')]
    const SMALL_TAXPAYER = 1;
    #[Description('一般纳税人')]
    const GENERAL_TAXPAYER = 2;
}
