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
            'description' => 'Obtenha a lista de produtos da loja.',
            'url' => 'lojas/{shop_id}/produtos/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Mostrar apenas produtos disponíveis. Pode ser verdadeiro ou falso.', 'type' => 'booleano', 'default' => false],
                'with_parent' => ['title' => 'Obtenha a hierarquia da categoria pai. Pode ser verdadeiro ou falso.', 'type' => 'booleano', 'default' => false],
                'offset' => ['title' => 'Offset da lista de produtos (para paginação).', 'type' => 'interno', 'default' => 0],
                'limit' => ['title' => 'Número de produtos na lista (para paginação).', 'type' => 'interno', 'default' => 20],
                'sort' => ['title' => 'Tipo de classificação de lista', 'type' => 'enumeração', 'default' => null, 'values' => [null, 'relacionado', 'mais_visitados', 'mais_popular', 'mais novo', 'mais vendido', 'mais barato', 'mais_caro', 'aleatório', 'relacionado', 'favorito', 'aleatório']],
                'product_id' => ['title' => 'Produto ID usado para devolver produtos relacionados (classificar = relacionado).', 'type' => 'interno', 'default' => null],
                'set' => ['title' => 'Conjunto de dados do produto. Pode ser nulo ou especificação (nulo: padrão, especificação: otimizado para recuperação de especificações).', 'type' => 'enumeração', 'default' => null, 'values' => [null, 'especificação']],
                'search' => ['title' => 'Texto de pesquisa', 'type' => 'corda', 'default' => null],
                'search_type' => ['title' => 'Tipo de pesquisa. Pode ser nulo ou categoria.', 'type' => 'enumeração', 'default' => null, 'values' => [null, 'categoria']],
                'dir' => ['title' => 'Categoria ID ou nome. Obtém produtos nesta categoria quando definido.', 'type' => 'qualquer', 'default' => null],
                'products_only' => ['title' => 'Obtenha apenas produtos (categorias não incluídas).', 'type' => 'booleano', 'default' => false],
                'categories_only' => ['title' => 'Obtenha apenas categorias (produtos não incluídos).', 'type' => 'booleano', 'default' => false],
                'need_full_variants' => ['title' => 'Obtenha informações completas sobre variantes.', 'type' => 'booleano', 'default' => false],
                'optimized' => ['title' => '(Somente ao obter produtos como administrador) Obtenha a lista de produtos sem preço, taxa ou estatísticas.', 'type' => 'booleano', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'matriz',
                    '_object' => 'Produto',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'matriz',
                    '_object' => 'Categoria',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'objeto',
                    '_object' => 'Categoria',
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
            'description' => 'Obtenha informações e estatísticas do produto.',
            'url' => 'lojas/{shop_id}/produtos/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'objeto',
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
                    '_object' => 'Dados do produto',
                    'title' => 'dados dos últimos 30 dias',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Pedidos que informações.',
                    'type' => 'Virtual: contagem (int)|Físico: [contagem, estado_de_entrega] (matriz)'
                ],

                'new_comments_count' => [
                    'title' => 'Contagem de novos comentários.',
                    'type' => 'interno'
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
            'description' => 'Adicione novo produto à loja.',
            'url' => 'lojas/{shop_id}/produto/adicionar',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Defina o tipo do produto/serviço.', 'type' => 'enumeração', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Preço do produto.', 'type' => 'flutuar', 'require' => true],
                'commission' => ['title' => 'Adicione comissão ao preço.', 'type' => 'flutuar', 'default' => 0],
                'discount' => ['title' => 'Desconto no preço do produto padrão.', 'type' => 'flutuar', 'default' => 0],
                'dis_start' => ['title' => 'Horário de início do desconto no fuso horário UTC (formato: AAAA-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'dis_end' => ['title' => 'Horário de término do desconto no fuso horário UTC (formato: AAAA-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'currency' => ['title' => 'Moeda,', 'type' => 'enumeração', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Título do produto.", 'type' => 'corda', 'require' => true],
                'title_en' => ['title' => 'Título em inglês do produto (ou subtítulo)', 'type' => 'corda', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'corda', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'corda', 'default' => null],
                'gtin' => ['title' => "Número global do item comercial do produto.", 'type' => 'corda', 'default' => null],
                'gpc' => ['title' => 'Código da categoria de produto do Google.', 'type' => 'interno', 'default' => null],
                'condition' => ['title' => "A condição atual do item em sua loja.", 'type' => 'enumeração', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Mensagem mostra ao usuário se existem campos de entrada (usados para produtos virtuais).', 'type' => 'corda', 'default' => null],
                'inputs' => ['title' => 'Campos de entrada opcionais (usados para produtos virtuais).', 'type' => 'JSON', 'default' => null],
                'outputs' => ['title' => 'Campos de saída opcionais (usados para produtos virtuais).', 'type' => 'JSON', 'default' => false],
                'blog' => ['title' => 'URL opcional do blog ou site.', 'type' => 'corda', 'default' => false],
                'status' => ['title' => 'status do produto Aberto/Fechado, o padrão é Aberto.', 'type' => 'enumeração', 'default' => 'Abrir', 'values' => ['Abrir', 'Fechar']],
                'category_id' => ['title' => 'identificação da categoria.', 'type' => 'interno', 'default' => null],
                'lead' => ['title' => 'Prazo de entrega em horas..', 'type' => 'interno', 'default' => null],
                'style' => ['title' => 'Estilo do produto (Json).', 'type' => 'JSON', 'default' => null],
                'brand' => ['title' => 'Marca do produto..', 'type' => 'corda', 'default' => null],
                'warranty' => ['title' => 'descrição da garantia..', 'type' => 'corda', 'default' => null],
                'original' => ['title' => 'Este produto é original?', 'type' => 'booleano', 'default' => false],
                'return_warranty' => ['title' => 'Garantia de devolução por dias.', 'type' => 'interno', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objeto',
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
            'description' => 'Adicione novo produto à loja.',
            'url' => 'lojas/{shop_id}/produtos/{product_id}/editar',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Defina o tipo do produto/serviço.', 'type' => 'enumeração', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Preço do produto.', 'type' => 'flutuar', 'require' => true],
                'commission' => ['title' => 'Adicione comissão ao preço.', 'type' => 'flutuar', 'default' => 0],
                'discount' => ['title' => 'Desconto no preço do produto padrão.', 'type' => 'flutuar', 'default' => 0],
                'dis_start' => ['title' => 'Horário de início do desconto no fuso horário UTC (formato: AAAA-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'dis_end' => ['title' => 'Horário de término do desconto no fuso horário UTC (formato: AAAA-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'currency' => ['title' => 'Moeda,', 'type' => 'enumeração', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Título do produto.", 'type' => 'corda', 'require' => true],
                'title_en' => ['title' => 'Título em inglês do produto (ou subtítulo)', 'type' => 'corda', 'default' => null],
                'message' => ['title' => 'Mensagem mostra ao usuário se existem campos de entrada (usados para produtos virtuais).', 'type' => 'corda', 'default' => null],
                'inputs' => ['title' => 'Campos de entrada opcionais (usados para produtos virtuais).', 'type' => 'JSON', 'default' => null],
                'outputs' => ['title' => 'Campos de saída opcionais (usados para produtos virtuais).', 'type' => 'JSON', 'default' => false],
                'blog' => ['title' => 'URL opcional do blog ou site.', 'type' => 'corda', 'default' => false],
                'status' => ['title' => 'status do produto Aberto/Fechado, o padrão é Aberto.', 'type' => 'enumeração', 'default' => 'Abrir', 'values' => ['Abrir', 'Fechar']],
                'category_id' => ['title' => 'identificação da categoria.', 'type' => 'interno', 'default' => null],
                'lead' => ['title' => 'Prazo de entrega em horas..', 'type' => 'interno', 'default' => null],
                'style' => ['title' => 'Estilo do produto (Json).', 'type' => 'JSON', 'default' => null],
                'brand' => ['title' => 'Marca do produto..', 'type' => 'corda', 'default' => null],
                'warranty' => ['title' => 'descrição da garantia..', 'type' => 'corda', 'default' => null],
                'original' => ['title' => 'Este produto é original?', 'type' => 'booleano', 'default' => false],
                'return_warranty' => ['title' => 'Garantia de devolução por dias.', 'type' => 'interno', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objeto',
                    '_object' => 'Produto',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Estado do produto atualizado com sucesso.', 'type' => 'booleano'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Adicione novo produto do repositório por sku à loja.',
            'url' => 'lojas/{shop_id}/repositório de produtos/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'corda', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Categoria de definição automática', 'type' => 'booleano', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Produto adicionado a esta categoria por ID de categoria na loja.', 'type' => 'interno', 'default' => null],

                'price' => ['title' => 'Preço do produto.', 'type' => 'flutuar', 'require' => true],
                'currency' => ['title' => 'Moeda,', 'type' => 'enumeração', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Quantidade', 'type' => 'interno', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'objeto',
                    '_object' => 'Produto',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Estado do produto atualizado com sucesso.', 'type' => 'booleano'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
