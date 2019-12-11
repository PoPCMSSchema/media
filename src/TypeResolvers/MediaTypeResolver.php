<?php
namespace PoP\Media\TypeResolvers;

use PoP\ComponentModel\TypeResolvers\AbstractTypeResolver;
use PoP\Media\TypeDataLoaders\MediaTypeDataLoader;

class MediaTypeResolver extends AbstractTypeResolver
{
    public const NAME = 'Media';

    public function getTypeName(): string
    {
        return self::NAME;
    }

    public function getId($resultItem)
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

