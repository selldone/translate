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
            'description' => 'Pobierz listę produktów sklepu.',
            'url' => 'sklepy/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Pokaż tylko dostępne produkty. Może być prawdą lub fałszem.', 'type' => 'wartość logiczna', 'default' => false],
                'with_parent' => ['title' => 'Pobierz hierarchię kategorii nadrzędnych. Może być prawdą lub fałszem.', 'type' => 'wartość logiczna', 'default' => false],
                'offset' => ['title' => 'Przesunięcie listy produktów (dla paginacji).', 'type' => 'wew', 'default' => 0],
                'limit' => ['title' => 'Liczba produktów na liście (dla paginacji).', 'type' => 'wew', 'default' => 20],
                'sort' => ['title' => 'Typ sortowania listy', 'type' => 'wyliczenie', 'default' => null, 'values' => [null, 'powiązane', 'najczęściej_odwiedzane', 'najbardziej_popularny', 'najnowszy', 'bestseller', 'najtańsze', 'najbardziej_droższy', 'losowe', 'powiązane', 'ulubiony', 'losowe']],
                'product_id' => ['title' => 'Produkt ID używany do zwracania powiązanych produktów (sortowanie = powiązane).', 'type' => 'wew', 'default' => null],
                'set' => ['title' => 'Zestaw danych produktu. Może mieć wartość null lub spec (null: wartość domyślna, specyfikacja: zoptymalizowana pod kątem pobierania specyfikacji).', 'type' => 'wyliczenie', 'default' => null, 'values' => [null, 'specyfikacja']],
                'search' => ['title' => 'Wyszukaj tekst', 'type' => 'ciąg', 'default' => null],
                'search_type' => ['title' => 'Typ wyszukiwania. Może mieć wartość null lub kategorię.', 'type' => 'wyliczenie', 'default' => null, 'values' => [null, 'kategoria']],
                'dir' => ['title' => 'Kategoria ID lub nazwa. Po ustawieniu pobiera produkty w tej kategorii.', 'type' => 'dowolny', 'default' => null],
                'products_only' => ['title' => 'Otrzymuj tylko produkty (kategorie nie są uwzględnione).', 'type' => 'wartość logiczna', 'default' => false],
                'categories_only' => ['title' => 'Uzyskaj tylko kategorie (produkty nie są uwzględnione).', 'type' => 'wartość logiczna', 'default' => false],
                'need_full_variants' => ['title' => 'Uzyskaj pełne informacje o wariancie.', 'type' => 'wartość logiczna', 'default' => false],
                'optimized' => ['title' => '(Tylko w przypadku pobierania produktów jako administrator) Uzyskaj listę produktów bez ceny, stawki i statystyk.', 'type' => 'wartość logiczna', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'tablica',
                    '_object' => 'Produkt',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'tablica',
                    '_object' => 'Kategoria',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'obiekt',
                    '_object' => 'Kategoria',
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
            'description' => 'Uzyskaj informacje o produkcie i statystyki.',
            'url' => 'sklepy/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'obiekt',
                    '_object' => 'Produkt',
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
                    '_type' => 'tablica',
                    '_object' => 'Dane produktu',
                    'title' => 'dane z ostatnich 30 dni',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Zamówienia oczekują informacji.',
                    'type' => 'Wirtualne: liczba (int)|Fizyczne: [liczba, stan_dostawy] (tablica)'
                ],

                'new_comments_count' => [
                    'title' => 'Liczą się nowe komentarze.',
                    'type' => 'wew'
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
            'description' => 'Dodaj nowy produkt do sklepu.',
            'url' => 'sklepy/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Ustaw typ produktu/usługi.', 'type' => 'wyliczenie', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Cena produktu.', 'type' => 'pływać', 'require' => true],
                'commission' => ['title' => 'Do ceny dolicz prowizję.', 'type' => 'pływać', 'default' => 0],
                'discount' => ['title' => 'Domyślny rabat cenowy produktu.', 'type' => 'pływać', 'default' => 0],
                'dis_start' => ['title' => 'Czas rozpoczęcia rabatu w strefie czasowej UTC (format: RRRR-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'dis_end' => ['title' => 'Czas zakończenia rabatu w strefie czasowej UTC (format: RRRR-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'currency' => ['title' => 'Waluta,', 'type' => 'wyliczenie', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Tytuł produktu.", 'type' => 'ciąg', 'require' => true],
                'title_en' => ['title' => 'Angielski tytuł produktu (lub podtytuł)', 'type' => 'ciąg', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'ciąg', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'ciąg', 'default' => null],
                'gtin' => ['title' => "Globalny numer jednostki handlowej produktu.", 'type' => 'ciąg', 'default' => null],
                'gpc' => ['title' => 'Kod kategorii produktów Google.', 'type' => 'wew', 'default' => null],
                'condition' => ['title' => "Aktualny stan przedmiotu w Twoim sklepie.", 'type' => 'wyliczenie', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Komunikat pokazuje użytkownikowi, czy istnieją pola wejściowe (używane w przypadku produktów wirtualnych).', 'type' => 'ciąg', 'default' => null],
                'inputs' => ['title' => 'Opcjonalne pola wejściowe (wykorzystywane w przypadku produktów wirtualnych).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Opcjonalne pola wyjściowe (używane w przypadku produktów wirtualnych).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Opcjonalny adres URL bloga lub witryny internetowej.', 'type' => 'ciąg', 'default' => false],
                'status' => ['title' => 'status produktu Otwórz/Zamknij, domyślnie jest otwarty.', 'type' => 'wyliczenie', 'default' => 'Otwórz', 'values' => ['Otwórz', 'Zamknij']],
                'category_id' => ['title' => 'identyfikator kategorii.', 'type' => 'wew', 'default' => null],
                'lead' => ['title' => 'Czas realizacji w godzinach..', 'type' => 'wew', 'default' => null],
                'style' => ['title' => 'Styl produktu (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marka produktu..', 'type' => 'ciąg', 'default' => null],
                'warranty' => ['title' => 'opis gwarancji..', 'type' => 'ciąg', 'default' => null],
                'original' => ['title' => 'Ten produkt jest oryginalny?', 'type' => 'wartość logiczna', 'default' => false],
                'return_warranty' => ['title' => 'Gwarancja zwrotu w ciągu kilku dni.', 'type' => 'wew', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'obiekt',
                    '_object' => 'Produkt',
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
            'description' => 'Dodaj nowy produkt do sklepu.',
            'url' => 'sklepy/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Ustaw typ produktu/usługi.', 'type' => 'wyliczenie', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Cena produktu.', 'type' => 'pływać', 'require' => true],
                'commission' => ['title' => 'Do ceny dolicz prowizję.', 'type' => 'pływać', 'default' => 0],
                'discount' => ['title' => 'Domyślny rabat cenowy produktu.', 'type' => 'pływać', 'default' => 0],
                'dis_start' => ['title' => 'Czas rozpoczęcia rabatu w strefie czasowej UTC (format: RRRR-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'dis_end' => ['title' => 'Czas zakończenia rabatu w strefie czasowej UTC (format: RRRR-MM-DD HH:mm:ss).', 'type' => 'data', 'default' => null],
                'currency' => ['title' => 'Waluta,', 'type' => 'wyliczenie', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Tytuł produktu.", 'type' => 'ciąg', 'require' => true],
                'title_en' => ['title' => 'Angielski tytuł produktu (lub podtytuł)', 'type' => 'ciąg', 'default' => null],
                'message' => ['title' => 'Komunikat pokazuje użytkownikowi, czy istnieją pola wejściowe (używane w przypadku produktów wirtualnych).', 'type' => 'ciąg', 'default' => null],
                'inputs' => ['title' => 'Opcjonalne pola wejściowe (wykorzystywane w przypadku produktów wirtualnych).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Opcjonalne pola wyjściowe (używane w przypadku produktów wirtualnych).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Opcjonalny adres URL bloga lub witryny internetowej.', 'type' => 'ciąg', 'default' => false],
                'status' => ['title' => 'status produktu Otwórz/Zamknij, domyślnie jest otwarty.', 'type' => 'wyliczenie', 'default' => 'Otwórz', 'values' => ['Otwórz', 'Zamknij']],
                'category_id' => ['title' => 'identyfikator kategorii.', 'type' => 'wew', 'default' => null],
                'lead' => ['title' => 'Czas realizacji w godzinach..', 'type' => 'wew', 'default' => null],
                'style' => ['title' => 'Styl produktu (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Marka produktu..', 'type' => 'ciąg', 'default' => null],
                'warranty' => ['title' => 'opis gwarancji..', 'type' => 'ciąg', 'default' => null],
                'original' => ['title' => 'Ten produkt jest oryginalny?', 'type' => 'wartość logiczna', 'default' => false],
                'return_warranty' => ['title' => 'Gwarancja zwrotu w ciągu kilku dni.', 'type' => 'wew', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'obiekt',
                    '_object' => 'Produkt',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Pomyślnie zaktualizowano stan produktu.', 'type' => 'wartość logiczna'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Dodaj nowy produkt z repozytorium przez sku do sklepu.',
            'url' => 'sklepy/{shop_id}/repository-produktów/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'ciąg', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Kategoria ustawiana automatycznie', 'type' => 'wartość logiczna', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Dodaj produkt do tej kategorii według identyfikatora kategorii w sklepie.', 'type' => 'wew', 'default' => null],

                'price' => ['title' => 'Cena produktu.', 'type' => 'pływać', 'require' => true],
                'currency' => ['title' => 'Waluta,', 'type' => 'wyliczenie', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Ilość', 'type' => 'wew', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'obiekt',
                    '_object' => 'Produkt',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Pomyślnie zaktualizowano stan produktu.', 'type' => 'wartość logiczna'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
