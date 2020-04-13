<?php
namespace PoP\Media\TypeDataLoaders;

use PoP\ComponentModel\TypeDataLoaders\AbstractTypeQueryableDataLoader;

class MediaTypeDataLoader extends AbstractTypeQueryableDataLoader
{
    public function getObjects(array $ids): array
    {
        $cmsmediaapi = \PoP\Media\FunctionAPIFactory::getInstance();
        $query = array(
            'include' => $ids,
        );
        return $cmsmediaapi->getMediaElements($query);
    }

    public function getDataFromIdsQuery(array $ids): array
    {
        $query = array();
        $query['include'] = $ids;
        // $query['post-status'] = [
        //     POP_POSTSTATUS_PUBLISHED,
        // ];
        $query['post-types'] = 'attachment';

        return $query;
    }

    public function executeQuery($query, array $options = [])
    {
        $cmsmediaapi = \PoP\Media\FunctionAPIFactory::getInstance();
        return $cmsmediaapi->getMediaElements($query, $options);
    }

    public function executeQueryIds($query): array
    {
        $options = [
            'return-type' => POP_RETURNTYPE_IDS,
        ];
        return (array)$this->executeQuery($query, $options);
    }
}
