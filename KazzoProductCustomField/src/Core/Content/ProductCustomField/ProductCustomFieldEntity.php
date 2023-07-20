<?php declare(strict_types=1);

namespace Kazzo\ProductCustomField\Core\Content\ProductCustomField;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;

class ProductCustomFieldEntity extends Entity
{
 
    use EntityIdTrait;
    
    protected ?string $value;
       
    public function getValue(): ?string
    {
        return $this->value;
    }
    
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }    
    
}