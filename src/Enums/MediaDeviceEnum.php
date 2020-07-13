<?php

declare(strict_types=1);

namespace PoP\Media\Enums;

use PoP\ComponentModel\Enums\AbstractEnum;

class MediaDeviceEnum extends AbstractEnum
{
    public const NAME = 'MediaDevice';

    public const MOBILE = 'mobile';
    public const DESKTOP = 'desktop';
    public const AUTOMATIC = 'automatic';

    protected function getEnumName(): string
    {
        return self::NAME;
    }
    public function getValues(): array
    {
        return [
            self::MOBILE,
            self::DESKTOP,
            self::AUTOMATIC,
        ];
    }
}
