<?php
namespace PoP\Media\Facades;

use PoP\Media\TypeAPIs\MediaTypeAPIInterface;
use PoP\Root\Container\ContainerBuilderFactory;

class MediaTypeAPIFacade
{
    public static function getInstance(): MediaTypeAPIInterface
    {
        return ContainerBuilderFactory::getInstance()->get('media_type_api');
    }
}
