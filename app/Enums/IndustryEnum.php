<?php declare(strict_types=1);

namespace App\Enums;

use App\Enums\Lib\FormOption;
use BenSampo\Enum\Attributes\Description;
use BenSampo\Enum\Enum;

/**
 * @method static static SERVICE()
 * @method static static CONSTRUCTION()
 * @method static static BUSINESS()
 */
final class IndustryEnum extends Enum
{
    use FormOption;
    #[Description('服务类')]
    const SERVICE = 1;
    #[Description('建筑类')]
    const CONSTRUCTION = 2;
    #[Description('商贸类')]
    const BUSINESS = 3;
}
