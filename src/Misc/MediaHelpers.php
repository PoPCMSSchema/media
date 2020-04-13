<?php

declare(strict_types=1);

namespace PoP\Media\Misc;

class MediaHelpers
{
    public static function getAttachmentImageProperties($imageid, $size = null)
    {
        $cmsmediaapi = \PoP\Media\FunctionAPIFactory::getInstance();
        $img = $cmsmediaapi->getMediaSrc($imageid, $size);
        return array(
            'src' => $img[0],
            'width' => $img[1],
            'height' => $img[2]
        );
    }
}
