<?php

use App\Http\Controllers\Shop\Product\ProductAddController;
use App\Http\Controllers\Shop\Product\ProductController;
use App\Http\Controllers\Shop\Product\ProductEditController;
use App\Samin\Account\Enums\Currency;
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
            'description' => 'దుకాణం యొక్క ఉత్పత్తుల జాబితాను పొందండి.',
            'url' => 'దుకాణాలు/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'అందుబాటులో ఉన్న ఉత్పత్తులను మాత్రమే చూపు. నిజం లేదా అబద్ధం కావచ్చు.', 'type' => 'బూలియన్', 'default' => false],
                'with_parent' => ['title' => 'మాతృ వర్గం సోపానక్రమాన్ని పొందండి. నిజం లేదా అబద్ధం కావచ్చు.', 'type' => 'బూలియన్', 'default' => false],
                'offset' => ['title' => 'ఉత్పత్తి జాబితా ఆఫ్‌సెట్ (పేజినేషన్ కోసం).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'జాబితాలోని ఉత్పత్తుల సంఖ్య (పేజినేషన్ కోసం).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'జాబితా క్రమబద్ధీకరణ రకం', 'type' => 'enum', 'default' => null, 'values' => [null, 'సంబంధించిన', 'ఎక్కువగా_ సందర్శించినవి', 'అత్యంత_ప్రసిద్ధమైనది', 'సరికొత్త', 'అత్యధికంగా అమ్ముడవుతోంది', 'చౌకైనది', 'అత్యంత_ఖరీదైన', 'యాదృచ్ఛికంగా', 'సంబంధించిన', 'ఇష్టమైన', 'యాదృచ్ఛికంగా']],
                'product_id' => ['title' => 'ఉత్పత్తి ID సంబంధిత ఉత్పత్తులను తిరిగి ఇవ్వడానికి ఉపయోగించబడుతుంది (క్రమం = సంబంధిత).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'ఉత్పత్తి డేటా సెట్. శూన్యం లేదా స్పెక్ కావచ్చు (శూన్య: డిఫాల్ట్, స్పెక్: స్పెసిఫికేషన్‌లను తిరిగి పొందడం కోసం ఆప్టిమైజ్ చేయబడింది).', 'type' => 'enum', 'default' => null, 'values' => [null, 'స్పెక్']],
                'search' => ['title' => 'వచనాన్ని శోధించండి', 'type' => 'స్ట్రింగ్', 'default' => null],
                'search_type' => ['title' => 'శోధన రకం. శూన్యం లేదా వర్గం కావచ్చు.', 'type' => 'enum', 'default' => null, 'values' => [null, 'వర్గం']],
                'dir' => ['title' => 'వర్గం ID లేదా పేరు. సెట్ చేసినప్పుడు ఈ వర్గంలోని ఉత్పత్తులను పొందుతుంది.', 'type' => 'ఏదైనా', 'default' => null],
                'products_only' => ['title' => 'ఉత్పత్తులను మాత్రమే పొందండి (కేటగిరీలు చేర్చబడలేదు).', 'type' => 'బూలియన్', 'default' => false],
                'categories_only' => ['title' => 'వర్గాలను మాత్రమే పొందండి (ఉత్పత్తులు చేర్చబడలేదు).', 'type' => 'బూలియన్', 'default' => false],
                'need_full_variants' => ['title' => 'పూర్తి వేరియంట్ సమాచారాన్ని పొందండి.', 'type' => 'బూలియన్', 'default' => false],
                'optimized' => ['title' => '(అడ్మిన్‌గా ఉత్పత్తులను పొందినప్పుడు మాత్రమే) ధర, రేటు లేదా గణాంకాలు లేకుండా ఉత్పత్తి జాబితాను పొందండి.', 'type' => 'బూలియన్', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'శ్రేణి',
                    '_object' => 'ఉత్పత్తి',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'శ్రేణి',
                    '_object' => 'వర్గం',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'వస్తువు',
                    '_object' => 'వర్గం',
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
            'description' => 'ఉత్పత్తి సమాచారం మరియు గణాంకాలను పొందండి.',
            'url' => 'దుకాణాలు/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'వస్తువు',
                    '_object' => 'ఉత్పత్తి',
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
                    '_type' => 'శ్రేణి',
                    '_object' => 'ఉత్పత్తి-డేటా',
                    'title' => 'గత 30 రోజుల డేటా',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'సమాచారం కోసం ఆర్డర్లు.',
                    'type' => 'వర్చువల్: కౌంట్ (పూర్ణాంకం)|భౌతిక: [కౌంట్, డెలివరీ_స్టేట్] (శ్రేణి)'
                ],

                'new_comments_count' => [
                    'title' => 'కొత్త వ్యాఖ్యలు గణన.',
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
            'description' => 'దుకాణానికి కొత్త ఉత్పత్తిని జోడించండి.',
            'url' => 'దుకాణాలు/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'ఉత్పత్తి / సేవ యొక్క రకాన్ని సెట్ చేయండి.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'ఉత్పత్తి ధర.', 'type' => 'తేలుతుంది', 'require' => true],
                'commission' => ['title' => 'ధరకు కమీషన్ జోడించండి.', 'type' => 'తేలుతుంది', 'default' => 0],
                'discount' => ['title' => 'డిఫాల్ట్ ఉత్పత్తి ధర తగ్గింపు.', 'type' => 'తేలుతుంది', 'default' => 0],
                'dis_start' => ['title' => 'UTC టైమ్ జోన్‌లో తగ్గింపు ప్రారంభ సమయం (ఫార్మాట్: YYYY-MM-DD HH:mm:ss).', 'type' => 'తేదీ', 'default' => null],
                'dis_end' => ['title' => 'UTC టైమ్ జోన్‌లో తగ్గింపు ముగింపు సమయం (ఫార్మాట్: YYYY-MM-DD HH:mm:ss).', 'type' => 'తేదీ', 'default' => null],
                'currency' => ['title' => 'కరెన్సీ,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "ఉత్పత్తి శీర్షిక.", 'type' => 'స్ట్రింగ్', 'require' => true],
                'title_en' => ['title' => 'ఉత్పత్తి యొక్క ఆంగ్ల శీర్షిక (లేదా ఉప శీర్షిక)', 'type' => 'స్ట్రింగ్', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'స్ట్రింగ్', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'స్ట్రింగ్', 'default' => null],
                'gtin' => ['title' => "ఉత్పత్తి యొక్క గ్లోబల్ ట్రేడ్ ఐటెమ్ నంబర్.", 'type' => 'స్ట్రింగ్', 'default' => null],
                'gpc' => ['title' => 'Google ఉత్పత్తి వర్గం కోడ్.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "మీ స్టోర్‌లో వస్తువు యొక్క ప్రస్తుత పరిస్థితి.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'ఇన్‌పుట్ ఫీల్డ్‌లు ఉన్నట్లయితే (వర్చువల్ ఉత్పత్తుల కోసం ఉపయోగించబడుతుంది) వినియోగదారుకు సందేశాన్ని చూపుతుంది.', 'type' => 'స్ట్రింగ్', 'default' => null],
                'inputs' => ['title' => 'ఐచ్ఛిక ఇన్‌పుట్ ఫీల్డ్‌లు (వర్చువల్ ఉత్పత్తుల కోసం ఉపయోగించబడుతుంది).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'ఐచ్ఛిక అవుట్‌పుట్ ఫీల్డ్‌లు (వర్చువల్ ఉత్పత్తుల కోసం ఉపయోగించబడుతుంది).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'ఐచ్ఛిక బ్లాగ్ లేదా వెబ్‌సైట్ url.', 'type' => 'స్ట్రింగ్', 'default' => false],
                'status' => ['title' => 'ఉత్పత్తి స్థితి తెరువు / మూసివేయి, డిఫాల్ట్ ఓపెన్.', 'type' => 'enum', 'default' => 'తెరవండి', 'values' => ['తెరవండి', 'మూసివేయి']],
                'category_id' => ['title' => 'వర్గం id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'ప్రధాన సమయం గంటలలో..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'ఉత్పత్తి శైలి (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'ఉత్పత్తి బ్రాండ్..', 'type' => 'స్ట్రింగ్', 'default' => null],
                'warranty' => ['title' => 'వారంటీ వివరణ..', 'type' => 'స్ట్రింగ్', 'default' => null],
                'original' => ['title' => 'ఈ ఉత్పత్తి అసలైనదా?', 'type' => 'బూలియన్', 'default' => false],
                'return_warranty' => ['title' => 'రోజుల వారీ వారంటీని తిరిగి ఇవ్వండి.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'వస్తువు',
                    '_object' => 'ఉత్పత్తి',
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
            'description' => 'దుకాణానికి కొత్త ఉత్పత్తిని జోడించండి.',
            'url' => 'దుకాణాలు/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'ఉత్పత్తి / సేవ యొక్క రకాన్ని సెట్ చేయండి.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'ఉత్పత్తి ధర.', 'type' => 'తేలుతుంది', 'require' => true],
                'commission' => ['title' => 'ధరకు కమీషన్ జోడించండి.', 'type' => 'తేలుతుంది', 'default' => 0],
                'discount' => ['title' => 'డిఫాల్ట్ ఉత్పత్తి ధర తగ్గింపు.', 'type' => 'తేలుతుంది', 'default' => 0],
                'dis_start' => ['title' => 'UTC టైమ్ జోన్‌లో తగ్గింపు ప్రారంభ సమయం (ఫార్మాట్: YYYY-MM-DD HH:mm:ss).', 'type' => 'తేదీ', 'default' => null],
                'dis_end' => ['title' => 'UTC టైమ్ జోన్‌లో తగ్గింపు ముగింపు సమయం (ఫార్మాట్: YYYY-MM-DD HH:mm:ss).', 'type' => 'తేదీ', 'default' => null],
                'currency' => ['title' => 'కరెన్సీ,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "ఉత్పత్తి శీర్షిక.", 'type' => 'స్ట్రింగ్', 'require' => true],
                'title_en' => ['title' => 'ఉత్పత్తి యొక్క ఆంగ్ల శీర్షిక (లేదా ఉప శీర్షిక)', 'type' => 'స్ట్రింగ్', 'default' => null],
                'message' => ['title' => 'ఇన్‌పుట్ ఫీల్డ్‌లు ఉన్నట్లయితే (వర్చువల్ ఉత్పత్తుల కోసం ఉపయోగించబడుతుంది) వినియోగదారుకు సందేశాన్ని చూపుతుంది.', 'type' => 'స్ట్రింగ్', 'default' => null],
                'inputs' => ['title' => 'ఐచ్ఛిక ఇన్‌పుట్ ఫీల్డ్‌లు (వర్చువల్ ఉత్పత్తుల కోసం ఉపయోగించబడుతుంది).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'ఐచ్ఛిక అవుట్‌పుట్ ఫీల్డ్‌లు (వర్చువల్ ఉత్పత్తుల కోసం ఉపయోగించబడుతుంది).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'ఐచ్ఛిక బ్లాగ్ లేదా వెబ్‌సైట్ url.', 'type' => 'స్ట్రింగ్', 'default' => false],
                'status' => ['title' => 'ఉత్పత్తి స్థితి తెరువు / మూసివేయి, డిఫాల్ట్ ఓపెన్.', 'type' => 'enum', 'default' => 'తెరవండి', 'values' => ['తెరవండి', 'మూసివేయి']],
                'category_id' => ['title' => 'వర్గం id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'ప్రధాన సమయం గంటలలో..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'ఉత్పత్తి శైలి (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'ఉత్పత్తి బ్రాండ్..', 'type' => 'స్ట్రింగ్', 'default' => null],
                'warranty' => ['title' => 'వారంటీ వివరణ..', 'type' => 'స్ట్రింగ్', 'default' => null],
                'original' => ['title' => 'ఈ ఉత్పత్తి అసలైనదా?', 'type' => 'బూలియన్', 'default' => false],
                'return_warranty' => ['title' => 'రోజుల వారీ వారంటీని తిరిగి ఇవ్వండి.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'వస్తువు',
                    '_object' => 'ఉత్పత్తి',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'విజయవంతంగా నవీకరించబడిన ఉత్పత్తి స్థితి.', 'type' => 'బూలియన్'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'దుకాణానికి sku ద్వారా రిపోజిటరీ నుండి కొత్త ఉత్పత్తిని జోడించండి.',
            'url' => 'దుకాణాలు/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'స్ట్రింగ్', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'ఆటో సెట్ వర్గం', 'type' => 'బూలియన్', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'షాప్‌లోని కేటగిరీ ఐడి ద్వారా ఈ వర్గానికి ఉత్పత్తిని జోడించండి.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'ఉత్పత్తి ధర.', 'type' => 'తేలుతుంది', 'require' => true],
                'currency' => ['title' => 'కరెన్సీ,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'పరిమాణం', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'వస్తువు',
                    '_object' => 'ఉత్పత్తి',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'విజయవంతంగా నవీకరించబడిన ఉత్పత్తి స్థితి.', 'type' => 'బూలియన్'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
