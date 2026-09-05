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
            'description' => 'Obtener la lista de productos de la tienda.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Mostrar solo productos disponibles. Puede ser true o false.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Obtener la jerarquía de la categoría superior. Puede ser true o false.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'Desplazamiento de la lista de productos (para paginación).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Número de productos en la lista (para paginación).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Tipo de ordenación de la lista', 'type' => 'enum', 'default' => null, 'values' => [null, 'related', 'most_visited', 'most_popular', 'newest', 'bestselling', 'cheapest', 'most_expensive', 'random', 'related', 'favorite', 'random']],
                'product_id' => ['title' => 'ID del producto utilizado para devolver productos relacionados (sort = related).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Conjunto de datos del producto. Puede ser null o spec (null: predeterminado, spec: optimizado para obtener especificaciones).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Texto de búsqueda', 'type' => 'string', 'default' => null],
                'search_type' => ['title' => 'Tipo de búsqueda. Puede ser null o category.', 'type' => 'enum', 'default' => null, 'values' => [null, 'category']],
                'dir' => ['title' => 'ID o nombre de la categoría. Si se establece, obtiene los productos de esta categoría.', 'type' => 'any', 'default' => null],
                'products_only' => ['title' => 'Obtener solo productos (sin incluir categorías).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Obtener solo categorías (sin incluir productos).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Obtener la información completa de las variantes.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(Solo al obtener productos como administrador) Obtener la lista de productos sin precio, valoración ni estadísticas.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'array',
                    '_object' => 'Product',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'array',
                    '_object' => 'Category',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'object',
                    '_object' => 'Category',
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
            'description' => 'Obtener la información y las estadísticas del producto.',
            'url' => 'shops/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'object',
                    '_object' => 'Product',
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
                    '_type' => 'array',
                    '_object' => 'Product-Data',
                    'title' => 'Datos de los últimos 30 días',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Información de la cola de pedidos.',
                    'type' => 'Virtual: count (int) | Physical: [count, delivery_state] (array)'
                ],

                'new_comments_count' => [
                    'title' => 'Número de comentarios nuevos.',
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
            'description' => 'Añadir nuevo producto a la tienda.',
            'url' => 'shops/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Establecer el tipo de producto / servicio.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Precio del producto.', 'type' => 'float', 'require' => true],
                'commission' => ['title' => 'Añadir comisión al precio.', 'type' => 'float', 'default' => 0],
                'discount' => ['title' => 'Descuento predeterminado sobre el precio del producto.', 'type' => 'float', 'default' => 0],
                'dis_start' => ['title' => 'Hora de inicio del descuento en la zona horaria UTC (formato: YYYY-MM-DD HH:mm:ss).', 'type' => 'date', 'default' => null],
                'dis_end' => ['title' => 'Hora de finalización del descuento en la zona horaria UTC (formato: YYYY-MM-DD HH:mm:ss).', 'type' => 'date', 'default' => null],
                'currency' => ['title' => 'Moneda', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Título del producto.", 'type' => 'string', 'require' => true],
                'title_en' => ['title' => 'Título en inglés del producto (o subtítulo)', 'type' => 'string', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'string', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'string', 'default' => null],
                'gtin' => ['title' => "Número global de artículo comercial (GTIN) del producto.", 'type' => 'string', 'default' => null],
                'gpc' => ['title' => 'Código de categoría de producto de Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Estado actual del artículo en tu tienda.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Mensaje que se muestra al usuario si existen campos de entrada (se usa en productos virtuales).', 'type' => 'string', 'default' => null],
                'inputs' => ['title' => 'Campos de entrada opcionales (se usan en productos virtuales).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Campos de salida opcionales (se usan en productos virtuales).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'URL opcional del blog o del sitio web.', 'type' => 'string', 'default' => false],
                'status' => ['title' => 'Estado del producto: Open / Close. El valor predeterminado es Open.', 'type' => 'enum', 'default' => 'Open', 'values' => ['Open', 'Close']],
                'category_id' => ['title' => 'ID de la categoría.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Tiempo de preparación en horas.', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Estilo del producto (JSON).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marca del producto.', 'type' => 'string', 'default' => null],
                'warranty' => ['title' => 'Descripción de la garantía.', 'type' => 'string', 'default' => null],
                'original' => ['title' => '¿Es original este producto?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Garantía de devolución en días.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'object',
                    '_object' => 'Product',
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
            'description' => 'Añadir nuevo producto a la tienda.',
            'url' => 'shops/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Establecer el tipo de producto / servicio.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Precio del producto.', 'type' => 'float', 'require' => true],
                'commission' => ['title' => 'Añadir comisión al precio.', 'type' => 'float', 'default' => 0],
                'discount' => ['title' => 'Descuento predeterminado sobre el precio del producto.', 'type' => 'float', 'default' => 0],
                'dis_start' => ['title' => 'Hora de inicio del descuento en la zona horaria UTC (formato: YYYY-MM-DD HH:mm:ss).', 'type' => 'date', 'default' => null],
                'dis_end' => ['title' => 'Hora de finalización del descuento en la zona horaria UTC (formato: YYYY-MM-DD HH:mm:ss).', 'type' => 'date', 'default' => null],
                'currency' => ['title' => 'Moneda', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Título del producto.", 'type' => 'string', 'require' => true],
                'title_en' => ['title' => 'Título en inglés del producto (o subtítulo)', 'type' => 'string', 'default' => null],
                'message' => ['title' => 'Mensaje que se muestra al usuario si existen campos de entrada (se usa en productos virtuales).', 'type' => 'string', 'default' => null],
                'inputs' => ['title' => 'Campos de entrada opcionales (se usan en productos virtuales).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Campos de salida opcionales (se usan en productos virtuales).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'URL opcional del blog o del sitio web.', 'type' => 'string', 'default' => false],
                'status' => ['title' => 'Estado del producto: Open / Close. El valor predeterminado es Open.', 'type' => 'enum', 'default' => 'Open', 'values' => ['Open', 'Close']],
                'category_id' => ['title' => 'ID de la categoría.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Tiempo de preparación en horas.', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Estilo del producto (JSON).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marca del producto.', 'type' => 'string', 'default' => null],
                'warranty' => ['title' => 'Descripción de la garantía.', 'type' => 'string', 'default' => null],
                'original' => ['title' => '¿Es original este producto?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Garantía de devolución en días.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'object',
                    '_object' => 'Product',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Estado del producto actualizado correctamente.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Añadir a la tienda un nuevo producto del repositorio mediante SKU.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'string', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Establecer la categoría automáticamente', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Añadir el producto a esta categoría de la tienda mediante el ID de la categoría.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Precio del producto.', 'type' => 'float', 'require' => true],
                'currency' => ['title' => 'Moneda', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Cantidad', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'object',
                    '_object' => 'Product',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Estado del producto actualizado correctamente.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
