<?php declare(strict_types=1);

namespace Kazzo\ProductCustomField\Core\Content\ProductCustomField\SalesChannel;

use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\System\SalesChannel\SalesChannelContext;

abstract class AbstractProductCustomFieldRoute 
{
    
    abstract public function getDecorated(): AbstractProductCustomFieldRoute;
    
    abstract public function load(Criteria $criteria, SalesChannelContext $context): ProductCustomFieldRouteResponse;
 
}