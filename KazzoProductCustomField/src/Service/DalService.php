<?php declare(strict_types=1);

namespace Kazzo\ProductCustomField\Service;

use Shopware\Core\Framework\DataAbstractionLayer\EntityRepository;

class DalService
{
    protected $productRepository;
    
    public function __construct (EntityRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }
}