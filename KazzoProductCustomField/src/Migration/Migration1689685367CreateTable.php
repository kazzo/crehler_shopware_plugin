<?php declare(strict_types=1);

namespace Kazzo\ProductCustomField\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1689685367CreateTable extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1689685367;
    }

    public function update(Connection $connection): void
    {
        $sql = <<<SQL
CREATE TABLE IF NOT EXISTS `kazzo_product_custom_field_extension` (
 `id` BINARY(16) NOT NULL,
 `product_id` BINARY(16) NULL,
 `value` VARCHAR(255) NULL,
 `created_at` DATETIME(3) NOT NULL,
 `updated_at` DATETIME(3) NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
SQL;
        $connection->executeStatement($sql);
    }

    public function updateDestructive(Connection $connection): void
    {
        // implement update destructive
    }
}
