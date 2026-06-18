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
            'description' => 'Obtenga la lista de productos de la tienda.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Mostrar sólo productos disponibles. Puede ser verdadero o falso.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Obtenga la jerarquía de categorías principales. Puede ser verdadero o falso.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'Desplazamiento de la lista de productos (para paginación).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Número de productos en la lista (para paginación).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Tipo de clasificación de lista', 'type' => 'enum', 'default' => null, 'values' => [null, 'related', 'most_visited', 'most_popular', 'newest', 'bestselling', 'cheapest', 'most_expensive', 'random', 'related', 'favorite', 'random']],
                'product_id' => ['title' => 'ID de producto utilizado para devolver productos relacionados (clasificar = relacionado).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Conjunto de datos del producto. Puede ser nulo o especificación (nulo: predeterminado, especificación: optimizado para recuperar especificaciones).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Buscar texto', 'type' => 'string', 'default' => null],
                'search_type' => ['title' => 'Tipo de búsqueda. Puede ser nulo o categoría.', 'type' => 'enum', 'default' => null, 'values' => [null, 'category']],
                'dir' => ['title' => 'ID o nombre de categoría. Obtiene productos en esta categoría cuando se establece.', 'type' => 'any', 'default' => null],
                'products_only' => ['title' => 'Obtenga solo productos (categorías no incluidas).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Obtenga solo categorías (productos no incluidos).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Obtenga información completa sobre las variantes.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(Solo al obtener productos como administrador) Obtenga la lista de productos sin precio, tarifa ni estadísticas.', 'type' => 'boolean', 'default' => false],

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
            'description' => 'Obtenga información y estadísticas del producto.',
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
                    'title' => 'datos de los últimos 30 días',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Pedidos que info.',
                    'type' => 'Virtual: count (int) | Physical: [count, delivery_state] (array)'
                ],

                'new_comments_count' => [
                    'title' => 'Los nuevos comentarios cuentan.',
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

                'type' => ['title' => 'Set type of the product / service.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Precio del producto.', 'type' => 'float', 'require' => true],
                'commission' => ['title' => 'Añade comisión al precio.', 'type' => 'float', 'default' => 0],
                'discount' => ['title' => 'Descuento en el precio del producto predeterminado.', 'type' => 'float', 'default' => 0],
                'dis_start' => ['title' => 'Hora de inicio del descuento en la zona horaria UTC (formato: AAAA-MM-DD HH:mm:ss).', 'type' => 'date', 'default' => null],
                'dis_end' => ['title' => 'Hora de finalización del descuento en la zona horaria UTC (formato: AAAA-MM-DD HH:mm:ss).', 'type' => 'date', 'default' => null],
                'currency' => ['title' => 'moneda,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Título del producto.", 'type' => 'string', 'require' => true],
                'title_en' => ['title' => 'Título en inglés del producto (o subtítulo)', 'type' => 'string', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'string', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'string', 'default' => null],
                'gtin' => ['title' => "Número de artículo comercial global del producto.", 'type' => 'string', 'default' => null],
                'gpc' => ['title' => 'Código de categoría de producto de Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Estado actual del artículo en su tienda.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'El mensaje se muestra al usuario si existen campos de entrada (utilizados para productos virtuales).', 'type' => 'string', 'default' => null],
                'inputs' => ['title' => 'Campos de entrada opcionales (utilizados para productos virtuales).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Campos de salida opcionales (utilizados para productos virtuales).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'URL opcional del blog o del sitio web.', 'type' => 'string', 'default' => false],
                'status' => ['title' => 'Estado del producto Abierto/Cerrado, el valor predeterminado es Abierto.', 'type' => 'enum', 'default' => 'Open', 'values' => ['Open', 'Close']],
                'category_id' => ['title' => 'identificación de categoría.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Plazo de entrega en horas..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Estilo del producto (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marca del producto..', 'type' => 'string', 'default' => null],
                'warranty' => ['title' => 'descripción de la garantía..', 'type' => 'string', 'default' => null],
                'original' => ['title' => '¿Este producto es original?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Garantía de devolución por días.', 'type' => 'int', 'default' => 0],


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

                'type' => ['title' => 'Set type of the product / service.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Precio del producto.', 'type' => 'float', 'require' => true],
                'commission' => ['title' => 'Añade comisión al precio.', 'type' => 'float', 'default' => 0],
                'discount' => ['title' => 'Descuento en el precio del producto predeterminado.', 'type' => 'float', 'default' => 0],
                'dis_start' => ['title' => 'Hora de inicio del descuento en la zona horaria UTC (formato: AAAA-MM-DD HH:mm:ss).', 'type' => 'date', 'default' => null],
                'dis_end' => ['title' => 'Hora de finalización del descuento en la zona horaria UTC (formato: AAAA-MM-DD HH:mm:ss).', 'type' => 'date', 'default' => null],
                'currency' => ['title' => 'moneda,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Título del producto.", 'type' => 'string', 'require' => true],
                'title_en' => ['title' => 'Título en inglés del producto (o subtítulo)', 'type' => 'string', 'default' => null],
                'message' => ['title' => 'El mensaje se muestra al usuario si existen campos de entrada (utilizados para productos virtuales).', 'type' => 'string', 'default' => null],
                'inputs' => ['title' => 'Campos de entrada opcionales (utilizados para productos virtuales).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Campos de salida opcionales (utilizados para productos virtuales).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'URL opcional del blog o del sitio web.', 'type' => 'string', 'default' => false],
                'status' => ['title' => 'Estado del producto Abierto/Cerrado, el valor predeterminado es Abierto.', 'type' => 'enum', 'default' => 'Open', 'values' => ['Open', 'Close']],
                'category_id' => ['title' => 'identificación de categoría.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Plazo de entrega en horas..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Estilo del producto (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marca del producto..', 'type' => 'string', 'default' => null],
                'warranty' => ['title' => 'descripción de la garantía..', 'type' => 'string', 'default' => null],
                'original' => ['title' => '¿Este producto es original?', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Garantía de devolución por días.', 'type' => 'int', 'default' => 0],


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
            'description' => 'Agregue un nuevo producto desde el repositorio por sku a la tienda.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'string', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Categoría de configuración automática', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Agregar producto a esta categoría por identificación de categoría en la tienda.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Precio del producto.', 'type' => 'float', 'require' => true],
                'currency' => ['title' => 'moneda,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

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
