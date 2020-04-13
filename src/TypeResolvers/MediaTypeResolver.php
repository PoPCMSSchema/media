<?php

declare(strict_types=1);

namespace PoP\Media\TypeResolvers;

use PoP\Translation\Facades\TranslationAPIFacade;
use PoP\Media\TypeDataLoaders\MediaTypeDataLoader;
use PoP\ComponentModel\TypeResolvers\AbstractTypeResolver;

class MediaTypeResolver extends AbstractTypeResolver
{
    public const NAME = 'Media';

    public function getTypeName(): string
    {
        return self::NAME;
    }

    public function getSchemaTypeDescription(): ?string
    {
        $translationAPI = TranslationAPIFacade::getInstance();
        return $translationAPI->__('Media elements (such as images, videos, etc), attached to a post or independent', 'media');
    }

    public function getID($resultItem)
    {
        $cmsmediaresolver = \PoP\Media\ObjectPropertyResolverFactory::getInstance();
        $media = $resultItem;
        return $cmsmediaresolver->getMediaId($media);
    }

    public function getTypeDataLoaderClass(): string
    {
        return MediaTypeDataLoader::class;
    }
}
