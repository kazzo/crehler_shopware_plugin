<?php declare(strict_types=1);

namespace Kazzo\ProductCustomField\Core\Content\ProductCustomField\SalesChannel;

use Shopware\Core\Framework\DataAbstractionLayer\Search\EntitySearchResult;
use Shopware\Core\System\SalesChannel\StoreApiResponse;
use Kazzo\ProductCustomField\Core\Content\ProductCustomField\ProductCustomFieldEntityCollection;

/**
 * Class ProductCustomFieldRouteResponse
 * @property EntitySearchResult $object
 */
class ProductCustomFieldRouteResponse extends StoreApiResponse
{
    /*
    public function __construct(EntitySearchResult $object)
    {
        parent::__construct($object);
    }
    */
    
    public function getProductCustomField(): ProductCustomFieldEntityCollection
    {
        /** @var ProductCustomFieldEntityCollection $collection */
        $collection = $this->object->getEntities();

        return $collection;
    }

}