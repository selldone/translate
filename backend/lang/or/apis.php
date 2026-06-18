<?php

use App\Http\Controllers\Shop\Product\ProductAddController;
use App\Http\Controllers\Shop\Product\ProductController;
use App\Http\Controllers\Shop\Product\ProductEditController;
use App\Backoffice\Account\Enums\Currency;
use App\Shop\Category\ShopCategory;
use App\Shop\Products\Enums\ProductCondition;
use App\Shop\Products\Product;
use App\Shop\Products\ProductImages;
use App\Shop\Products\ProductVariant;
use App\Shop\Rating\ShopRating;
use App\Shop\Shop;
use App\Shop\Statistic\ProductData;
use App\Social\Article;
const StandardJsonHeaders=['Accept' => 'application/json', 'Content-Type' => 'application/json'];

return [

    /*
    |--------------------------------------------------------------------------
    | APIs repository (For playground / help)
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */


    'Product' => [

        /**
         * @see ProductController::api_getMyProductsAll()
         */

        'Get products list' => [
            'auth' => true,
            'scope' => ProductController::GET_MY_PRODUCTS_SCOPE,
            'permissions' => ProductController::GET_MY_PRODUCTS_PERMISSION,
            'description' => 'ଦୋକାନର ଉତ୍ପାଦ ତାଲିକା ପାଆନ୍ତୁ |',
            'url' => 'ଦୋକାନଗୁଡିକ / {shop_id} / ଉତ୍ପାଦଗୁଡିକ / ସମସ୍ତ-ଆଡମିନି |',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'କେବଳ ଉପଲବ୍ଧ ଉତ୍ପାଦଗୁଡିକ ଦେଖାନ୍ତୁ | ସତ କିମ୍ବା ମିଥ୍ୟା ହୋଇପାରେ |', 'type' => 'ବୁଲିଅନ୍', 'default' => false],
                'with_parent' => ['title' => 'ପ୍ୟାରେଣ୍ଟ୍ ବର୍ଗ ହାଇରାର୍କି ପ୍ରାପ୍ତ କରନ୍ତୁ | ସତ କିମ୍ବା ମିଥ୍ୟା ହୋଇପାରେ |', 'type' => 'ବୁଲିଅନ୍', 'default' => false],
                'offset' => ['title' => 'ଉତ୍ପାଦ ତାଲିକାର ଅଫସେଟ୍ (ପୃଷ୍ଠା ପାଇଁ) |', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'ତାଲିକାରେ ଉତ୍ପାଦ ସଂଖ୍ୟା (ପୃଷ୍ଠା ପାଇଁ) |', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'ସର୍ଟ ପ୍ରକାର ତାଲିକା କର |', 'type' => 'enum', 'default' => null, 'values' => [null, 'ସମ୍ବନ୍ଧୀୟ', 'most_visited', 'ଅଧିକାଂଶ_ପପୁଲାର୍ |', 'ନୂତନ', 'ବିକ୍ରୟ', 'ଶସ୍ତା', 'ଅଧିକାଂଶ_ ବ୍ୟୟବହୁଳ |', 'ଅନିୟମିତ |', 'ସମ୍ବନ୍ଧୀୟ', 'ପ୍ରିୟ', 'ଅନିୟମିତ |']],
                'product_id' => ['title' => 'ଉତ୍ପାଦ ID ସମ୍ବନ୍ଧୀୟ ଉତ୍ପାଦଗୁଡିକ (ସର୍ଟ = ସମ୍ବନ୍ଧୀୟ) ଫେରାଇବା ପାଇଁ ବ୍ୟବହୃତ ହୁଏ |', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'ଉତ୍ପାଦ ତଥ୍ୟ ସେଟ୍ | ନଲ୍ କିମ୍ବା ସ୍ପେକ୍ ହୋଇପାରେ (ନଲ୍: ଡିଫଲ୍ଟ, ସ୍ପେକ୍: ନିର୍ଦ୍ଦିଷ୍ଟକରଣ ପୁନରୁଦ୍ଧାର ପାଇଁ ଅପ୍ଟିମାଇଜ୍) |', 'type' => 'enum', 'default' => null, 'values' => [null, 'ନିର୍ଦ୍ଦିଷ୍ଟ']],
                'search' => ['title' => 'ପାଠ ଖୋଜ |', 'type' => 'ଷ୍ଟ୍ରିଙ୍ଗ୍', 'default' => null],
                'search_type' => ['title' => 'ସନ୍ଧାନ ପ୍ରକାର | ଶୂନ୍ୟ କିମ୍ବା ବର୍ଗ ହୋଇପାରେ |', 'type' => 'enum', 'default' => null, 'values' => [null, 'ବର୍ଗ']],
                'dir' => ['title' => 'ବର୍ଗ ID କିମ୍ବା ନାମ | ସେଟ୍ ହେବାବେଳେ ଏହି ବର୍ଗରେ ଉତ୍ପାଦ ପାଇଥାଏ |', 'type' => 'ଯେକ any ଣସି', 'default' => null],
                'products_only' => ['title' => 'କେବଳ ଉତ୍ପାଦଗୁଡିକ ପ୍ରାପ୍ତ କରନ୍ତୁ (ବର୍ଗଗୁଡିକ ଅନ୍ତର୍ଭୂକ୍ତ ନୁହେଁ) |', 'type' => 'ବୁଲିଅନ୍', 'default' => false],
                'categories_only' => ['title' => 'କେବଳ ବର୍ଗଗୁଡିକ ପ୍ରାପ୍ତ କରନ୍ତୁ (ଉତ୍ପାଦଗୁଡିକ ଅନ୍ତର୍ଭୂକ୍ତ ନୁହେଁ) |', 'type' => 'ବୁଲିଅନ୍', 'default' => false],
                'need_full_variants' => ['title' => 'ପୂର୍ଣ୍ଣ ପ୍ରକାର ସୂଚନା ପ୍ରାପ୍ତ କରନ୍ତୁ |', 'type' => 'ବୁଲିଅନ୍', 'default' => false],
                'optimized' => ['title' => '(କେବଳ ଆଡମିନି ଭାବରେ ଉତ୍ପାଦ ପାଇବା ସମୟରେ) ମୂଲ୍ୟ, ହାର, କିମ୍ବା ପରିସଂଖ୍ୟାନ ବିନା ଉତ୍ପାଦ ତାଲିକା ପାଆନ୍ତୁ |', 'type' => 'ବୁଲିଅନ୍', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'ଆରେ',
                    '_object' => 'ଉତ୍ପାଦ',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'ଆରେ',
                    '_object' => 'ବର୍ଗ',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'ବସ୍ତୁ',
                    '_object' => 'ବର୍ଗ',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,parent_id,filters')
                ],


            ]
        ],

        /**
         * @see ProductController::api_getMyProduct()
         */
        'Get product info' => [
            'auth' => true,
            'scope' => ProductController::GET_MY_PRODUCTS_SCOPE,
            'permissions' => ProductController::GET_MY_PRODUCTS_PERMISSION,
            'description' => 'ଉତ୍ପାଦ ସୂଚନା ଏବଂ ପରିସଂଖ୍ୟାନ ପ୍ରାପ୍ତ କରନ୍ତୁ |',
            'url' => 'ଦୋକାନଗୁଡିକ / {shop_id} / ଉତ୍ପାଦଗୁଡିକ / {ଉତ୍ପାଦ_ିଡ୍} / ଆଡମିନି |',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'ବସ୍ତୁ',
                    '_object' => 'ଉତ୍ପାଦ',
                    'structure' => array_merge(Product::STRUCTURE, [
                        'category' => [
                            '_type' => 'object',
                            '_object' => 'Category',
                            'structure' => ShopCategory::STRUCTURE
                        ],
                        'images' => [
                            '_type' => 'array',
                            '_object' => 'Product-Image',
                            'structure' => ProductImages::CustomStructure('id,path,variant_id')
                        ],
                        'product_variants' => [
                            '_type' => 'array',
                            '_object' => 'Variant',
                            'structure' => ProductVariant::STRUCTURE
                        ],

                        'shop' => [
                            '_type' => 'object',
                            '_object' => 'Shop',
                            'structure' => Shop::CustomStructure('id,name')
                        ],
                        'article' => [
                            '_type' => 'object',
                            '_object' => 'Article',
                            'structure' => Article::STRUCTURE
                        ],


                        'ratings' => [
                            '_type' => 'array',
                            '_object' => 'Rating',
                            'structure' => ShopRating::CustomStructure('id,name,value,count')
                        ],

                    ]),
                ],
                'data' => [
                    '_type' => 'ଆରେ',
                    '_object' => 'ଉତ୍ପାଦ-ତଥ୍ୟ |',
                    'title' => 'ଗତ 30 ଦିନର ତଥ୍ୟ |',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'ଅର୍ଡର ସୂଚନା',
                    'type' => 'ଭର୍ଚୁଆଲ୍: ଗଣନା (int)|ଶାରୀରିକ: [ଗଣନା, ବିତରଣ_ଷ୍ଟେଟ୍] (ଆରେ)'
                ],

                'new_comments_count' => [
                    'title' => 'ନୂତନ ମନ୍ତବ୍ୟ ଗଣନା |',
                    'type' => 'int'
                ],

            ]

            ],

        /**
         * @see ProductAddController::api_addProduct()
         */
        'Add new product' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'ଦୋକାନରେ ନୂତନ ଉତ୍ପାଦ ଯୋଡନ୍ତୁ |',
            'url' => 'ଦୋକାନ / {shop_id} / ଉତ୍ପାଦ / ଯୋଗ |',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'ଉତ୍ପାଦ / ସେବା ପ୍ରକାର ସେଟ୍ କରନ୍ତୁ |', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'ଉତ୍ପାଦର ମୂଲ୍ୟ', 'type' => 'ଭାସମାନ |', 'require' => true],
                'commission' => ['title' => 'ମୂଲ୍ୟରେ କମିଶନ ଯୋଡନ୍ତୁ |', 'type' => 'ଭାସମାନ |', 'default' => 0],
                'discount' => ['title' => 'ଡିଫଲ୍ଟ ଉତ୍ପାଦ ମୂଲ୍ୟ ରିହାତି |', 'type' => 'ଭାସମାନ |', 'default' => 0],
                'dis_start' => ['title' => 'UTC ସମୟ ମଣ୍ଡଳରେ ରିହାତି ଆରମ୍ଭ ସମୟ (ଫର୍ମାଟ୍: YYYY-MM-DD HH:mm:ss) |', 'type' => 'ତାରିଖ', 'default' => null],
                'dis_end' => ['title' => 'UTC ସମୟ ମଣ୍ଡଳରେ ରିହାତି ଶେଷ ସମୟ (ଫର୍ମାଟ୍: YYYY-MM-DD HH:mm:ss) |', 'type' => 'ତାରିଖ', 'default' => null],
                'currency' => ['title' => 'ମୁଦ୍ରା,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "ଉତ୍ପାଦର ଆଖ୍ୟା |", 'type' => 'ଷ୍ଟ୍ରିଙ୍ଗ୍', 'require' => true],
                'title_en' => ['title' => 'ଉତ୍ପାଦର ଇଂରାଜୀ ଆଖ୍ୟା (କିମ୍ବା ଉପ ଆଖ୍ୟା)', 'type' => 'ଷ୍ଟ୍ରିଙ୍ଗ୍', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'ଷ୍ଟ୍ରିଙ୍ଗ୍', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'ଷ୍ଟ୍ରିଙ୍ଗ୍', 'default' => null],
                'gtin' => ['title' => "ଉତ୍ପାଦର ଗ୍ଲୋବାଲ୍ ବାଣିଜ୍ୟ ଆଇଟମ୍ ସଂଖ୍ୟା |", 'type' => 'ଷ୍ଟ୍ରିଙ୍ଗ୍', 'default' => null],
                'gpc' => ['title' => 'ଗୁଗୁଲ୍ ଉତ୍ପାଦ ବର୍ଗ କୋଡ୍ |', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "ଆପଣଙ୍କ ଷ୍ଟୋରରେ ଆଇଟମ୍ ର ସାମ୍ପ୍ରତିକ ଅବସ୍ଥା |", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'ଯଦି ଇନପୁଟ୍ ଫିଲ୍ଡ ବିଦ୍ୟମାନ ଅଛି (ଭର୍ଚୁଆଲ୍ ଉତ୍ପାଦ ପାଇଁ ବ୍ୟବହୃତ) ଉପଭୋକ୍ତାଙ୍କୁ ବାର୍ତ୍ତା ପ୍ରଦର୍ଶନ |', 'type' => 'ଷ୍ଟ୍ରିଙ୍ଗ୍', 'default' => null],
                'inputs' => ['title' => 'ବ tion କଳ୍ପିକ ଇନପୁଟ୍ କ୍ଷେତ୍ର (ଭର୍ଚୁଆଲ୍ ଉତ୍ପାଦ ପାଇଁ ବ୍ୟବହୃତ) |', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'ବ output କଳ୍ପିକ ଆଉଟପୁଟ୍ ଫିଲ୍ଡ (ଭର୍ଚୁଆଲ୍ ଉତ୍ପାଦ ପାଇଁ ବ୍ୟବହୃତ) |', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'ଇଚ୍ଛାଧୀନ ବ୍ଲଗ୍ କିମ୍ବା ୱେବସାଇଟ୍ url |', 'type' => 'ଷ୍ଟ୍ରିଙ୍ଗ୍', 'default' => false],
                'status' => ['title' => 'ଉତ୍ପାଦ ସ୍ଥିତି ଖୋଲା / ବନ୍ଦ, ଡିଫଲ୍ଟ ଖୋଲା ଅଛି |', 'type' => 'enum', 'default' => 'ଖୋଲନ୍ତୁ |', 'values' => ['ଖୋଲନ୍ତୁ |', 'ବନ୍ଦ']],
                'category_id' => ['title' => 'ବର୍ଗ id', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'ଘଣ୍ଟା ମଧ୍ୟରେ ଲିଡ୍ ସମୟ ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'ଉତ୍ପାଦର ଶ Style ଳୀ (Json) |', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'ଉତ୍ପାଦର ବ୍ରାଣ୍ଡ ..', 'type' => 'ଷ୍ଟ୍ରିଙ୍ଗ୍', 'default' => null],
                'warranty' => ['title' => 'ୱାରେଣ୍ଟି ବର୍ଣ୍ଣନା ..', 'type' => 'ଷ୍ଟ୍ରିଙ୍ଗ୍', 'default' => null],
                'original' => ['title' => 'ଏହି ଉତ୍ପାଦଟି ମୂଳ ଅଟେ?', 'type' => 'ବୁଲିଅନ୍', 'default' => false],
                'return_warranty' => ['title' => 'ଦିନ ଅନୁଯାୟୀ ୱାରେଣ୍ଟି ଫେରସ୍ତ କରନ୍ତୁ |', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ବସ୍ତୁ',
                    '_object' => 'ଉତ୍ପାଦ',
                    'structure' => Product::STRUCTURE
                ],
            ]
        ],



        /**
         * @see ProductEditController::api_editProduct()
         */
        'Edit product' => [
            'auth' => true,
            'scope' => ProductEditController::EDIT_PRODUCT_SCOPE,
            'permissions' => ProductEditController::EDIT_PERMISSION,
            'description' => 'ଦୋକାନରେ ନୂତନ ଉତ୍ପାଦ ଯୋଡନ୍ତୁ |',
            'url' => 'ଦୋକାନଗୁଡିକ / {shop_id} / ଉତ୍ପାଦଗୁଡିକ / {ଉତ୍ପାଦ_ିଡ୍} / ସମ୍ପାଦନା |',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'ଉତ୍ପାଦ / ସେବା ପ୍ରକାର ସେଟ୍ କରନ୍ତୁ |', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'ଉତ୍ପାଦର ମୂଲ୍ୟ', 'type' => 'ଭାସମାନ |', 'require' => true],
                'commission' => ['title' => 'ମୂଲ୍ୟରେ କମିଶନ ଯୋଡନ୍ତୁ |', 'type' => 'ଭାସମାନ |', 'default' => 0],
                'discount' => ['title' => 'ଡିଫଲ୍ଟ ଉତ୍ପାଦ ମୂଲ୍ୟ ରିହାତି |', 'type' => 'ଭାସମାନ |', 'default' => 0],
                'dis_start' => ['title' => 'UTC ସମୟ ମଣ୍ଡଳରେ ରିହାତି ଆରମ୍ଭ ସମୟ (ଫର୍ମାଟ୍: YYYY-MM-DD HH:mm:ss) |', 'type' => 'ତାରିଖ', 'default' => null],
                'dis_end' => ['title' => 'UTC ସମୟ ମଣ୍ଡଳରେ ରିହାତି ଶେଷ ସମୟ (ଫର୍ମାଟ୍: YYYY-MM-DD HH:mm:ss) |', 'type' => 'ତାରିଖ', 'default' => null],
                'currency' => ['title' => 'ମୁଦ୍ରା,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "ଉତ୍ପାଦର ଆଖ୍ୟା |", 'type' => 'ଷ୍ଟ୍ରିଙ୍ଗ୍', 'require' => true],
                'title_en' => ['title' => 'ଉତ୍ପାଦର ଇଂରାଜୀ ଆଖ୍ୟା (କିମ୍ବା ଉପ ଆଖ୍ୟା)', 'type' => 'ଷ୍ଟ୍ରିଙ୍ଗ୍', 'default' => null],
                'message' => ['title' => 'ଯଦି ଇନପୁଟ୍ ଫିଲ୍ଡ ବିଦ୍ୟମାନ ଅଛି (ଭର୍ଚୁଆଲ୍ ଉତ୍ପାଦ ପାଇଁ ବ୍ୟବହୃତ) ଉପଭୋକ୍ତାଙ୍କୁ ବାର୍ତ୍ତା ପ୍ରଦର୍ଶନ |', 'type' => 'ଷ୍ଟ୍ରିଙ୍ଗ୍', 'default' => null],
                'inputs' => ['title' => 'ବ tion କଳ୍ପିକ ଇନପୁଟ୍ କ୍ଷେତ୍ର (ଭର୍ଚୁଆଲ୍ ଉତ୍ପାଦ ପାଇଁ ବ୍ୟବହୃତ) |', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'ବ output କଳ୍ପିକ ଆଉଟପୁଟ୍ ଫିଲ୍ଡ (ଭର୍ଚୁଆଲ୍ ଉତ୍ପାଦ ପାଇଁ ବ୍ୟବହୃତ) |', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'ଇଚ୍ଛାଧୀନ ବ୍ଲଗ୍ କିମ୍ବା ୱେବସାଇଟ୍ url |', 'type' => 'ଷ୍ଟ୍ରିଙ୍ଗ୍', 'default' => false],
                'status' => ['title' => 'ଉତ୍ପାଦ ସ୍ଥିତି ଖୋଲା / ବନ୍ଦ, ଡିଫଲ୍ଟ ଖୋଲା ଅଛି |', 'type' => 'enum', 'default' => 'ଖୋଲନ୍ତୁ |', 'values' => ['ଖୋଲନ୍ତୁ |', 'ବନ୍ଦ']],
                'category_id' => ['title' => 'ବର୍ଗ id', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'ଘଣ୍ଟା ମଧ୍ୟରେ ଲିଡ୍ ସମୟ ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'ଉତ୍ପାଦର ଶ Style ଳୀ (Json) |', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'ଉତ୍ପାଦର ବ୍ରାଣ୍ଡ ..', 'type' => 'ଷ୍ଟ୍ରିଙ୍ଗ୍', 'default' => null],
                'warranty' => ['title' => 'ୱାରେଣ୍ଟି ବର୍ଣ୍ଣନା ..', 'type' => 'ଷ୍ଟ୍ରିଙ୍ଗ୍', 'default' => null],
                'original' => ['title' => 'ଏହି ଉତ୍ପାଦଟି ମୂଳ ଅଟେ?', 'type' => 'ବୁଲିଅନ୍', 'default' => false],
                'return_warranty' => ['title' => 'ଦିନ ଅନୁଯାୟୀ ୱାରେଣ୍ଟି ଫେରସ୍ତ କରନ୍ତୁ |', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ବସ୍ତୁ',
                    '_object' => 'ଉତ୍ପାଦ',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'ସଫଳତା ଉତ୍ପାଦ ସ୍ଥିତି ଅପଡେଟ୍ |', 'type' => 'ବୁଲିଅନ୍'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'ଦୋକାନରେ ସ୍କୁ ଦ୍ୱାରା ରେପୋଜିଟୋରୀରୁ ନୂତନ ଉତ୍ପାଦ ଯୋଡନ୍ତୁ |',
            'url' => 'ଦୋକାନଗୁଡିକ / {shop_id} / ଉତ୍ପାଦ-ସଂଗ୍ରହାଳୟ / ଆଡ୍-ସ୍କୁ |',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'ଷ୍ଟ୍ରିଙ୍ଗ୍', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'ଅଟୋ ସେଟ୍ ବର୍ଗ |', 'type' => 'ବୁଲିଅନ୍', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'ଦୋକାନରେ ବର୍ଗ id ଦ୍ୱାରା ଉତ୍ପାଦ ଏହି ବର୍ଗରେ ଯୋଗ କରନ୍ତୁ |', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'ଉତ୍ପାଦର ମୂଲ୍ୟ', 'type' => 'ଭାସମାନ |', 'require' => true],
                'currency' => ['title' => 'ମୁଦ୍ରା,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'ପରିମାଣ', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'ବସ୍ତୁ',
                    '_object' => 'ଉତ୍ପାଦ',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'ସଫଳତା ଉତ୍ପାଦ ସ୍ଥିତି ଅପଡେଟ୍ |', 'type' => 'ବୁଲିଅନ୍'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
