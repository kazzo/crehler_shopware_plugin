// Import all necessary Storefront plugins
import ProductCustomFieldPlugin from './product-custom-field-plugin/product-custom-field.plugin';

// Register your plugin via the existing PluginManager
const PluginManager = window.PluginManager;
PluginManager.register('ProductCustomFieldPlugin', ProductCustomFieldPlugin, '[data-product-detail-plugin]');