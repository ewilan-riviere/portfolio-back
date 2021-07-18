<?php

namespace App\Models\Enums;

use Spatie\Enum\Laravel\Enum;
use Illuminate\Support\Facades\App;

/**
 * @method static self BACK()
 * @method static self FRONT()
 * @method static self FRONT_BACK()
 * @method static self APP_ANDROID()
 * @method static self APP_IOS()
 */
final class ProjectLinkType extends Enum
{
    public static function getTranslation(string $lang, string $enum): string
    {
        App::setLocale($lang);

        return (string) __("enum.project_link_type.{$enum}");
    }
}
