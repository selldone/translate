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
            'description' => 'Obtenez la liste des produits de la boutique.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Afficher uniquement les produits disponibles. Peut être vrai ou faux.', 'type' => 'booléen', 'default' => false],
                'with_parent' => ['title' => 'Obtenez la hiérarchie des catégories parent. Peut être vrai ou faux.', 'type' => 'booléen', 'default' => false],
                'offset' => ['title' => 'Décalage de la liste des produits (pour la pagination).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Nombre de produits dans la liste (pour la pagination).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Type de tri de liste', 'type' => 'énumération', 'default' => null, 'values' => [null, 'en rapport', 'les plus_visités', 'le plus_populaire', 'le plus récent', 'plus vendu', 'le moins cher', 'le plus cher', 'aléatoire', 'en rapport', 'préféré', 'aléatoire']],
                'product_id' => ['title' => 'Produit ID utilisé pour renvoyer les produits associés (tri = associé).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Ensemble de données produit. Peut être null ou spec (null : par défaut, spec : optimisé pour récupérer les spécifications).', 'type' => 'énumération', 'default' => null, 'values' => [null, 'spécification']],
                'search' => ['title' => 'Rechercher du texte', 'type' => 'chaîne', 'default' => null],
                'search_type' => ['title' => 'Type de recherche. Peut être nul ou catégorie.', 'type' => 'énumération', 'default' => null, 'values' => [null, 'catégorie']],
                'dir' => ['title' => 'Catégorie ID ou nom. Obtient les produits de cette catégorie une fois défini.', 'type' => 'n\'importe lequel', 'default' => null],
                'products_only' => ['title' => 'Obtenez uniquement des produits (catégories non incluses).', 'type' => 'booléen', 'default' => false],
                'categories_only' => ['title' => 'Obtenez uniquement les catégories (produits non inclus).', 'type' => 'booléen', 'default' => false],
                'need_full_variants' => ['title' => 'Obtenez des informations complètes sur les variantes.', 'type' => 'booléen', 'default' => false],
                'optimized' => ['title' => '(Uniquement lors de l\'obtention de produits en tant qu\'administrateur) Obtenez la liste des produits sans prix, taux ou statistiques.', 'type' => 'booléen', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'tableau',
                    '_object' => 'Produit',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'tableau',
                    '_object' => 'Catégorie',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'objet',
                    '_object' => 'Catégorie',
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
            'description' => 'Obtenez des informations et des statistiques sur les produits.',
            'url' => 'shops/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'objet',
                    '_object' => 'Produit',
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
                    '_type' => 'tableau',
                    '_object' => 'Données produit',
                    'title' => 'données des 30 derniers jours',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Commandes que info.',
                    'type' => 'Virtuel : compte (int)|Physique : [count, delivery_state] (tableau)'
                ],

                'new_comments_count' => [
                    'title' => 'Les nouveaux commentaires comptent.',
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
            'description' => 'Ajoutez un nouveau produit à la boutique.',
            'url' => 'boutiques/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Définir le type du produit/service.', 'type' => 'énumération', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Prix ​​du produit.', 'type' => 'flotter', 'require' => true],
                'commission' => ['title' => 'Ajoutez une commission au prix.', 'type' => 'flotter', 'default' => 0],
                'discount' => ['title' => 'Remise sur le prix du produit par défaut.', 'type' => 'flotter', 'default' => 0],
                'dis_start' => ['title' => 'Heure de début de la remise dans le fuseau horaire UTC (format : AAAA-MM-JJ HH:mm:ss).', 'type' => 'date', 'default' => null],
                'dis_end' => ['title' => 'Heure de fin de la remise dans le fuseau horaire UTC (format : AAAA-MM-JJ HH:mm:ss).', 'type' => 'date', 'default' => null],
                'currency' => ['title' => 'Devise,', 'type' => 'énumération', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Titre du produit.", 'type' => 'chaîne', 'require' => true],
                'title_en' => ['title' => 'Titre anglais du produit (ou sous-titre)', 'type' => 'chaîne', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'chaîne', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'chaîne', 'default' => null],
                'gtin' => ['title' => "Numéro d'article commercial mondial du produit.", 'type' => 'chaîne', 'default' => null],
                'gpc' => ['title' => 'Code de catégorie de produit Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "État actuel de l'article dans votre magasin.", 'type' => 'énumération', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Message affiché à l\'utilisateur si des champs de saisie existent (utilisés pour les produits virtuels).', 'type' => 'chaîne', 'default' => null],
                'inputs' => ['title' => 'Champs de saisie facultatifs (utilisés pour les produits virtuels).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Champs de sortie facultatifs (utilisés pour les produits virtuels).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'URL facultative du blog ou du site Web.', 'type' => 'chaîne', 'default' => false],
                'status' => ['title' => 'État du produit Ouvert/Fermé, la valeur par défaut est Ouverte.', 'type' => 'énumération', 'default' => 'Ouvrir', 'values' => ['Ouvrir', 'Fermer']],
                'category_id' => ['title' => 'identifiant de catégorie.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Délai en heures..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Style du produit (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marque du produit..', 'type' => 'chaîne', 'default' => null],
                'warranty' => ['title' => 'description de la garantie..', 'type' => 'chaîne', 'default' => null],
                'original' => ['title' => 'Ce produit est original ?', 'type' => 'booléen', 'default' => false],
                'return_warranty' => ['title' => 'Garantie de retour par jours.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objet',
                    '_object' => 'Produit',
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
            'description' => 'Ajoutez un nouveau produit à la boutique.',
            'url' => 'shops/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Définir le type du produit/service.', 'type' => 'énumération', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Prix ​​du produit.', 'type' => 'flotter', 'require' => true],
                'commission' => ['title' => 'Ajoutez une commission au prix.', 'type' => 'flotter', 'default' => 0],
                'discount' => ['title' => 'Remise sur le prix du produit par défaut.', 'type' => 'flotter', 'default' => 0],
                'dis_start' => ['title' => 'Heure de début de la remise dans le fuseau horaire UTC (format : AAAA-MM-JJ HH:mm:ss).', 'type' => 'date', 'default' => null],
                'dis_end' => ['title' => 'Heure de fin de la remise dans le fuseau horaire UTC (format : AAAA-MM-JJ HH:mm:ss).', 'type' => 'date', 'default' => null],
                'currency' => ['title' => 'Devise,', 'type' => 'énumération', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Titre du produit.", 'type' => 'chaîne', 'require' => true],
                'title_en' => ['title' => 'Titre anglais du produit (ou sous-titre)', 'type' => 'chaîne', 'default' => null],
                'message' => ['title' => 'Message affiché à l\'utilisateur si des champs de saisie existent (utilisés pour les produits virtuels).', 'type' => 'chaîne', 'default' => null],
                'inputs' => ['title' => 'Champs de saisie facultatifs (utilisés pour les produits virtuels).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Champs de sortie facultatifs (utilisés pour les produits virtuels).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'URL facultative du blog ou du site Web.', 'type' => 'chaîne', 'default' => false],
                'status' => ['title' => 'État du produit Ouvert/Fermé, la valeur par défaut est Ouverte.', 'type' => 'énumération', 'default' => 'Ouvrir', 'values' => ['Ouvrir', 'Fermer']],
                'category_id' => ['title' => 'identifiant de catégorie.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Délai en heures..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Style du produit (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marque du produit..', 'type' => 'chaîne', 'default' => null],
                'warranty' => ['title' => 'description de la garantie..', 'type' => 'chaîne', 'default' => null],
                'original' => ['title' => 'Ce produit est original ?', 'type' => 'booléen', 'default' => false],
                'return_warranty' => ['title' => 'Garantie de retour par jours.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'objet',
                    '_object' => 'Produit',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'État du produit mis à jour avec succès.', 'type' => 'booléen'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Ajoutez un nouveau produit du référentiel par sku à la boutique.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'chaîne', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Catégorie définie automatiquement', 'type' => 'booléen', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Produit ajouté à cette catégorie par identifiant de catégorie dans la boutique.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Prix ​​du produit.', 'type' => 'flotter', 'require' => true],
                'currency' => ['title' => 'Devise,', 'type' => 'énumération', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Quantité', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'objet',
                    '_object' => 'Produit',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'État du produit mis à jour avec succès.', 'type' => 'booléen'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
