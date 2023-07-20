<?php declare(strict_types=1);

namespace Kazzo\ProductCustomField\Storefront\Controller;

use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Controller\StorefrontController;
use Kazzo\ProductCustomField\Core\Content\ProductCustomField\SalesChannel\AbstractProductCustomFieldRoute;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(defaults={"_routeScope"={"storefront"}})
 */
class ProductCustomFieldController extends StorefrontController
{
    private AbstractProductCustomFieldRoute $route;

    public function __construct(AbstractProductCustomFieldRoute $route)
    {
        $this->route = $route;
    }

    /**
     * @Route("/product-custom-field", name="frontend.product-custom-field.search", methods={"GET", "POST"}, defaults={"XmlHttpRequest"=true})
     */
    public function load(Criteria $criteria, SalesChannelContext $context): Response
    {
        return $this->route->load($criteria, $context);
    }
    
}