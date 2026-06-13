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
            'description' => 'Obter a lista de produtos da tenda.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Mostra só produtos dispoñibles. Pode ser verdadeiro ou falso.', 'type' => 'booleano', 'default' => false],
                'with_parent' => ['title' => 'Obter a xerarquía de categorías principais. Pode ser verdadeiro ou falso.', 'type' => 'booleano', 'default' => false],
                'offset' => ['title' => 'Offset da lista de produtos (para paxinación).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Número de produtos da lista (para paxinación).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Tipo de ordenación da lista', 'type' => 'enumeración', 'default' => null, 'values' => [null, 'relacionados', 'máis_visitados', 'máis_populares', 'máis recente', 'superventas', 'máis barato', 'máis_caros', 'aleatoria', 'relacionados', 'favorito', 'aleatoria']],
                'product_id' => ['title' => 'Produto ID usado para devolver produtos relacionados (ordenar = relacionados).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Conxunto de datos do produto. Pode ser nulo ou especificado (nulo: predeterminado, especificación: optimizado para recuperar especificacións).', 'type' => 'enumeración', 'default' => null, 'values' => [null, 'especificación']],
                'search' => ['title' => 'Busca texto', 'type' => 'corda', 'default' => null],
                'search_type' => ['title' => 'Tipo de busca. Pode ser nulo ou categoría.', 'type' => 'enumeración', 'default' => null, 'values' => [null, 'categoría']],
                'dir' => ['title' => 'Categoría ID ou nome. Obtén produtos desta categoría cando se configura.', 'type' => 'calquera', 'default' => null],
                'products_only' => ['title' => 'Obtén só produtos (categorías non incluídas).', 'type' => 'booleano', 'default' => false],
                'categories_only' => ['title' => 'Obtén só categorías (produtos non incluídos).', 'type' => 'booleano', 'default' => false],
                'need_full_variants' => ['title' => 'Obtén información completa das variantes.', 'type' => 'booleano', 'default' => false],
                'optimized' => ['title' => '(Só ao conseguir produtos como administrador) Obtén a lista de produtos sen prezo, tarifa ou estatísticas.', 'type' => 'booleano', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'matriz',
                    '_object' => 'Produto',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'matriz',
                    '_object' => 'Categoría',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'obxecto',
                    '_object' => 'Categoría',
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
            'description' => 'Obtén información e estatísticas do produto.',
            'url' => 'tendas/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'obxecto',
                    '_object' => 'Produto',
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
                    '_type' => 'matriz',
                    '_object' => 'Produto-Datos',
                    'title' => 'datos dos últimos 30 días',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Pedidos que información.',
                    'type' => 'Virtual: count (int)|Físico: [count, delivery_state] (matriz)'
                ],

                'new_comments_count' => [
                    'title' => 'Os novos comentarios contan.',
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
            'description' => 'Engade un produto novo á tenda.',
            'url' => 'tendas/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Establecer o tipo de produto/servizo.', 'type' => 'enumeración', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Prezo do produto.', 'type' => 'flotar', 'require' => true],
                'commission' => ['title' => 'Engadir comisión ao prezo.', 'type' => 'flotar', 'default' => 0],
                'discount' => ['title' => 'Desconto do prezo do produto predeterminado.', 'type' => 'flotar', 'default' => 0],
                'dis_start' => ['title' => 'Hora de inicio do desconto na zona horaria UTC (formato: YYYY-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'dis_end' => ['title' => 'Hora de finalización do desconto na zona horaria UTC (formato: AAAA-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'currency' => ['title' => 'moeda,', 'type' => 'enumeración', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Título do produto.", 'type' => 'corda', 'require' => true],
                'title_en' => ['title' => 'Título en inglés do produto (ou subtítulo)', 'type' => 'corda', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'corda', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'corda', 'default' => null],
                'gtin' => ['title' => "Número de artigo comercial global do produto.", 'type' => 'corda', 'default' => null],
                'gpc' => ['title' => 'Código de categoría de produtos de Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Estado actual do artigo na túa tenda.", 'type' => 'enumeración', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Mensaxe móstrase ao usuario se existen campos de entrada (usado para produtos virtuais).', 'type' => 'corda', 'default' => null],
                'inputs' => ['title' => 'Campos de entrada opcionais (utilizados para produtos virtuais).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Campos de saída opcionais (utilizados para produtos virtuais).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'URL opcional do blog ou do sitio web.', 'type' => 'corda', 'default' => false],
                'status' => ['title' => 'estado do produto Abrir/Pechar, o predeterminado é Aberto.', 'type' => 'enumeración', 'default' => 'Aberto', 'values' => ['Aberto', 'Pechar']],
                'category_id' => ['title' => 'ID de categoría.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Prazo de entrega en horas..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Estilo de produto (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marca do produto..', 'type' => 'corda', 'default' => null],
                'warranty' => ['title' => 'descrición da garantía..', 'type' => 'corda', 'default' => null],
                'original' => ['title' => 'Este produto é orixinal?', 'type' => 'booleano', 'default' => false],
                'return_warranty' => ['title' => 'Garantía de devolución por días.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'obxecto',
                    '_object' => 'Produto',
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
            'description' => 'Engade un produto novo á tenda.',
            'url' => 'tendas/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Establecer o tipo de produto/servizo.', 'type' => 'enumeración', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Prezo do produto.', 'type' => 'flotar', 'require' => true],
                'commission' => ['title' => 'Engadir comisión ao prezo.', 'type' => 'flotar', 'default' => 0],
                'discount' => ['title' => 'Desconto do prezo do produto predeterminado.', 'type' => 'flotar', 'default' => 0],
                'dis_start' => ['title' => 'Hora de inicio do desconto na zona horaria UTC (formato: YYYY-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'dis_end' => ['title' => 'Hora de finalización do desconto na zona horaria UTC (formato: AAAA-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'currency' => ['title' => 'moeda,', 'type' => 'enumeración', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Título do produto.", 'type' => 'corda', 'require' => true],
                'title_en' => ['title' => 'Título en inglés do produto (ou subtítulo)', 'type' => 'corda', 'default' => null],
                'message' => ['title' => 'Mensaxe móstrase ao usuario se existen campos de entrada (usado para produtos virtuais).', 'type' => 'corda', 'default' => null],
                'inputs' => ['title' => 'Campos de entrada opcionais (utilizados para produtos virtuais).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Campos de saída opcionais (utilizados para produtos virtuais).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'URL opcional do blog ou do sitio web.', 'type' => 'corda', 'default' => false],
                'status' => ['title' => 'estado do produto Abrir/Pechar, o predeterminado é Aberto.', 'type' => 'enumeración', 'default' => 'Aberto', 'values' => ['Aberto', 'Pechar']],
                'category_id' => ['title' => 'ID de categoría.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Prazo de entrega en horas..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Estilo de produto (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marca do produto..', 'type' => 'corda', 'default' => null],
                'warranty' => ['title' => 'descrición da garantía..', 'type' => 'corda', 'default' => null],
                'original' => ['title' => 'Este produto é orixinal?', 'type' => 'booleano', 'default' => false],
                'return_warranty' => ['title' => 'Garantía de devolución por días.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'obxecto',
                    '_object' => 'Produto',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Estado do produto actualizado correctamente.', 'type' => 'booleano'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Engade un produto novo desde o repositorio por sku á tenda.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'corda', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Categoría de configuración automática', 'type' => 'booleano', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Produto engádese a esta categoría por ID de categoría na tenda.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Prezo do produto.', 'type' => 'flotar', 'require' => true],
                'currency' => ['title' => 'moeda,', 'type' => 'enumeración', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Cantidade', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'obxecto',
                    '_object' => 'Produto',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Estado do produto actualizado correctamente.', 'type' => 'booleano'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
