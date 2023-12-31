<?php declare(strict_types=1);

namespace Kazzo\ProductCustomField\Extension\Content\Product;

use Shopware\Core\Content\Product\ProductDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityExtension;
use Shopware\Core\Framework\DataAbstractionLayer\Field\OneToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class ProductCustomFieldExtension extends EntityExtension
{
    
    public function extendFields(FieldCollection $collection): void
    {
        $collection->add(
            new OneToOneAssociationField('productCustomFieldExtension', 'id', 'product_id', ProductCustomFieldExtensionDefinition::class, true)
        );
    }

    public function getDefinitionClass(): string
    {
        return ProductDefinition::class;
    }
    
}