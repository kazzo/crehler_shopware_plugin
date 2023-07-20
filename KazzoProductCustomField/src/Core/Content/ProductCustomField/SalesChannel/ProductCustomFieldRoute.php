<?php declare(strict_types=1);

namespace Kazzo\ProductCustomField\Core\Content\ProductCustomField\SalesChannel;

use OpenApi\Annotations as OA;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepository;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\Plugin\Exception\DecorationPatternException;
use Shopware\Core\Framework\Routing\Annotation\Entity;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Symfony\Component\Routing\Annotation\Route; 

/**
 * @Route(defaults={"_routeScope"={"store-api"}})
 */
class ProductCustomFieldRoute extends AbstractProductCustomFieldRoute
{ 
    /**
     * * @var EntityRepositoryInterface
    */
    
    protected EntityRepository $productRepository;

    public function __construct(EntityRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getDecorated(): AbstractProductCustomFieldRoute
    {
        throw new DecorationPatternException(self::class);
    }
   
    /**
     * @Entity("kazzo_product-custom-field")
     * @Route("/store-api/product-custom-field", name="store-api.product-custom-field.search", methods={"GET", "POST"})
     */
    public function load(Criteria $criteria, SalesChannelContext $context): ProductCustomFieldRouteResponse
    {
        return new ProductCustomFieldRouteResponse($this->exampleRepository->search($criteria, $context->getContext()));
    }
}