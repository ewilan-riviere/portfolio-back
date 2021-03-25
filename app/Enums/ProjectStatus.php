<?php

namespace App\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self PHASE1()
 * @method static self PHASE2()
 * @method static self PHASE3()
 * @method static self PHASE4()
 */
final class ProjectStatus extends Enum
{
    protected static function values(): array
    {
        return [
            'PHASE1' => 'Phase 1 : concepts & protoype',
            'PHASE2' => 'Phase 2 : développement',
            'PHASE3' => 'Phase 3 : finitions',
            'PHASE4' => 'Phase 4 : TMA',
        ];
    }
}
