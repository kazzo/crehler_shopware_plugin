<?php declare(strict_types=1);

namespace Kazzo\ProductCustomField\Service;

use Shopware\Core\Framework\DataAbstractionLayer\EntityRepository;

class WritingData
{
    private EntityRepository $productRepository;

    //private EntityRepository $taxRepository;

    public function __construct(EntityRepository $productRepository, EntityRepository $taxRepository)
    {
        $this->productRepository = $productRepository;
        //$this->taxRepository = $taxRepository;
    }
    
}
