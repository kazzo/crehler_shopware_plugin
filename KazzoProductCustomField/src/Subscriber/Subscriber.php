<?php declare(strict_types=1);

namespace Kazzo\ProductCustomField\Subscriber;

use Shopware\Core\Framework\DataAbstractionLayer\Event\EntityLoadedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Shopware\Core\Content\Product\ProductEvents;
use Shopware\Core\System\SystemConfig\SystemConfigService;

class Subscriber implements EventSubscriberInterface
{
    private SystemConfigService $systemConfigService;
    
    public function __construct(SystemConfigService $systemConfigService)
    {
        $this->systemConfigService = $systemConfigService;
    }
    
    public static function getSubscribedEvents(): array
    {
        // Return the events to listen to as array like this: <event to listen to> => <method to execute>
        return [
            ProductEvents::PRODUCT_LOADED_EVENT => 'onProductsLoaded'
        ];
    }
    
    public function onProductsLoaded(EntityLoadedEvent $event)
    {
        $configLength = $this->systemConfigService->get('KazzoProductCustomField.config.length', null /*$salesChannelId*/);
        
        /*
        //$productData = $event->getPage()->getProduct();
        $productData = $event->getEntities()[0];
        $product_id = $productData->id;
        $product_customfield_text = $productData->extensions['productCustomFieldExtension']->value;
        $productData->ProductCustomField = substr($product_customfield_text, 0, $configLength);
        */
        
        foreach ($event->getEntities() as $productEntity) {
            //$product_id = $productEntity->id;
            $product_customfield_text = (isset($productEntity->extensions['productCustomFieldExtension'])) ? $productEntity->extensions['productCustomFieldExtension']->value : '';
            //$product_customfield_text = $productEntity->extensions['productCustomFieldExtension']->value;
            $productEntity->ProductCustomField = substr($product_customfield_text, 0, $configLength);
            //addExtension('custom_string', new ArrayEntity(['foo' => 'bar']));
        }
        //$event->getPage()->setProduct($productData);
        // Do something $event->getEntities()
        // E.g. work with the loaded entities: $event->getEntities()
        //var_dump($event->getEntities());
        //echo '<pre>'; print_r($event->getEntities()); echo '</pre>';
    }
    
}
