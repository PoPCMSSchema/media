<?php
namespace PoP\Media\TypeResolvers;

use PoP\ComponentModel\TypeResolvers\AbstractTypeResolver;
use PoP\Media\TypeDataResolvers\MediaTypeDataResolver;

class MediaTypeResolver extends AbstractTypeResolver
{
    public const TYPE_COLLECTION_NAME = 'media';

    public function getTypeCollectionName(): string
    {
        return self::TYPE_COLLECTION_NAME;
    }

    public function getId($resultItem)
    {
        $cmsmediaresolver = \PoP\Media\ObjectPropertyResolverFactory::getInstance();
        $media = $resultItem;
        return $cmsmediaresolver->getMediaId($media);
    }

    public function getIdFieldTypeDataResolverClass(): string
    {
        return MediaTypeDataResolver::class;
    }
}

