<?php declare(strict_types=1);

namespace Kazzo\ProductCustomField;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\InstallContext;
use Shopware\Core\Framework\Plugin\Context\UninstallContext;
use Shopware\Core\Framework\Plugin\Context\ActivateContext;

class KazzoProductCustomField extends Plugin
{
    public function install(InstallContext $installContext): void
    {
        // Do stuff such as creating a new payment method
    }
    
    public function activate(ActivateContext $activateContext): void
    {
        
    }
    
    public function uninstall(UninstallContext $uninstallContext): void
    {
        parent::uninstall($uninstallContext);
        
        if ($uninstallContext->keepUserData()) {
            return;
        }
        
        // Remove or deactivate the data created by the plugin
        $connection = $this->container->get(Connection::class);        
        $connection->executeUpdate('DROP TABLE IF EXISTS `kazzo_product_custom_field_extension`');
    }
}