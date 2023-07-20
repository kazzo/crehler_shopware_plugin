import Plugin from 'src/plugin-system/plugin.class';
import HttpClient from 'src/service/http-client.service';

export default class ProductCustomFieldPlugin extends Plugin {
    init() {
        this._client = new HttpClient();
    }
    
    requestCustomRoute() {
        this._client.post('/product-custom-field', { limit: 10, offset: 0}, (response) => {
            console.log(response);
        });
    }
}