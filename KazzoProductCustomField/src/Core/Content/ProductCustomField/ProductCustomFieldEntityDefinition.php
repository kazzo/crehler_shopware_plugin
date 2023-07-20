<?php declare(strict_types=1);

namespace Kazzo\ProductCustomField\Core\Content\ProductCustomField;

use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
//use Shopware\Core\Framework\DataAbstractionLayer\Field\BoolField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;

class ProductCustomFieldEntityDefinition extends EntityDefinition
{
 
    public const ENTITY_NAME = 'kazzo_productcustomfield';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    protected function defineFields(): FieldCollection
    {        
        return new FieldCollection([
            (new IdField('product_id', 'product_id'))->addFlags(new Required(), new PrimaryKey()),
            (new StringField('value', 'value')),
        ]);
    }
    
    public function getEntityClass(): string
    {
        return ProductCustomFieldEntity::class;
    }
    
    public function getCollectionClass(): string
    {
        return ProductCustomFieldEntityCollection::class;
    }
}