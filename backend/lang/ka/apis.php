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
            'description' => 'მიიღეთ მაღაზიის პროდუქტების სია.',
            'url' => 'მაღაზიები/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'მხოლოდ ხელმისაწვდომი პროდუქტების ჩვენება. შეიძლება იყოს მართალი ან მცდარი.', 'type' => 'ლოგიკური', 'default' => false],
                'with_parent' => ['title' => 'მიიღეთ მშობლის კატეგორიის იერარქია. შეიძლება იყოს მართალი ან მცდარი.', 'type' => 'ლოგიკური', 'default' => false],
                'offset' => ['title' => 'პროდუქციის სიის ოფსეტური (პაგინაციისთვის).', 'type' => 'ინტ', 'default' => 0],
                'limit' => ['title' => 'პროდუქციის რაოდენობა სიაში (პაგინაციისთვის).', 'type' => 'ინტ', 'default' => 20],
                'sort' => ['title' => 'სიის დახარისხების ტიპი', 'type' => 'აღრიცხვა', 'default' => null, 'values' => [null, 'დაკავშირებული', 'ყველაზე_მონახულებული', 'ყველაზე_პოპულარული', 'უახლესი', 'ბესტსელერი', 'ყველაზე იაფი', 'ყველაზე_ძვირი', 'შემთხვევითი', 'დაკავშირებული', 'საყვარელი', 'შემთხვევითი']],
                'product_id' => ['title' => 'პროდუქტი ID გამოიყენება დაკავშირებული პროდუქტების დასაბრუნებლად (დახარისხება = დაკავშირებული).', 'type' => 'ინტ', 'default' => null],
                'set' => ['title' => 'პროდუქტის მონაცემთა ნაკრები. შეიძლება იყოს null ან spec (null: default, spec: ოპტიმიზირებულია სპეციფიკაციების მოსაძიებლად).', 'type' => 'აღრიცხვა', 'default' => null, 'values' => [null, 'სპეც']],
                'search' => ['title' => 'ტექსტის ძიება', 'type' => 'სიმებიანი', 'default' => null],
                'search_type' => ['title' => 'ძებნის ტიპი. შეიძლება იყოს ნული ან კატეგორია.', 'type' => 'აღრიცხვა', 'default' => null, 'values' => [null, 'კატეგორია']],
                'dir' => ['title' => 'კატეგორია ID ან სახელი. დაყენებისას იღებს ამ კატეგორიის პროდუქტებს.', 'type' => 'ნებისმიერი', 'default' => null],
                'products_only' => ['title' => 'მიიღეთ მხოლოდ პროდუქტები (კატეგორიები არ შედის).', 'type' => 'ლოგიკური', 'default' => false],
                'categories_only' => ['title' => 'მიიღეთ მხოლოდ კატეგორიები (პროდუქტები არ შედის).', 'type' => 'ლოგიკური', 'default' => false],
                'need_full_variants' => ['title' => 'მიიღეთ სრული ვარიანტის ინფორმაცია.', 'type' => 'ლოგიკური', 'default' => false],
                'optimized' => ['title' => '(მხოლოდ პროდუქტების ადმინისტრატორად მიღებისას) მიიღეთ პროდუქტების სია ფასის, ტარიფის ან სტატისტიკის გარეშე.', 'type' => 'ლოგიკური', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'მასივი',
                    '_object' => 'პროდუქტი',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'მასივი',
                    '_object' => 'კატეგორია',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'ობიექტი',
                    '_object' => 'კატეგორია',
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
            'description' => 'მიიღეთ პროდუქტის ინფორმაცია და სტატისტიკა.',
            'url' => 'მაღაზიები/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'ობიექტი',
                    '_object' => 'პროდუქტი',
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
                    '_type' => 'მასივი',
                    '_object' => 'პროდუქტი-მონაცემები',
                    'title' => 'ბოლო 30 დღის მონაცემები',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'შეკვეთები თუ ინფორმაცია.',
                    'type' => 'ვირტუალური: დათვლა (ინტ)|ფიზიკური: [count, delivery_state] (მასივი)'
                ],

                'new_comments_count' => [
                    'title' => 'ახალი კომენტარები ითვლის.',
                    'type' => 'ინტ'
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
            'description' => 'დაამატეთ ახალი პროდუქტი მაღაზიაში.',
            'url' => 'მაღაზიები/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'დააყენეთ პროდუქტის/მომსახურების ტიპი.', 'type' => 'აღრიცხვა', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'პროდუქტის ფასი.', 'type' => 'ათწილადი', 'require' => true],
                'commission' => ['title' => 'დაამატეთ საკომისიო ფასს.', 'type' => 'ათწილადი', 'default' => 0],
                'discount' => ['title' => 'ნაგულისხმევი პროდუქტის ფასის ფასდაკლება.', 'type' => 'ათწილადი', 'default' => 0],
                'dis_start' => ['title' => 'ფასდაკლების დაწყების დრო UTC დროის ზონაში (ფორმატი: YYYY-MM-DD HH:mm:ss).', 'type' => 'თარიღი', 'default' => null],
                'dis_end' => ['title' => 'ფასდაკლების დასრულების დრო UTC დროის ზონაში (ფორმატი: YYYY-MM-DD HH:mm:ss).', 'type' => 'თარიღი', 'default' => null],
                'currency' => ['title' => 'ვალუტა,', 'type' => 'აღრიცხვა', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "პროდუქტის სათაური.", 'type' => 'სიმებიანი', 'require' => true],
                'title_en' => ['title' => 'პროდუქტის ინგლისური სათაური (ან ქვესათაური)', 'type' => 'სიმებიანი', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'სიმებიანი', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'სიმებიანი', 'default' => null],
                'gtin' => ['title' => "პროდუქტის გლობალური სავაჭრო პუნქტის ნომერი.", 'type' => 'სიმებიანი', 'default' => null],
                'gpc' => ['title' => 'Google პროდუქტის კატეგორიის კოდი.', 'type' => 'ინტ', 'default' => null],
                'condition' => ['title' => "ნივთის ამჟამინდელი მდგომარეობა თქვენს მაღაზიაში.", 'type' => 'აღრიცხვა', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'შეტყობინების ჩვენება მომხმარებლისთვის, თუ არსებობს შეყვანის ველები (გამოიყენება ვირტუალური პროდუქტებისთვის).', 'type' => 'სიმებიანი', 'default' => null],
                'inputs' => ['title' => 'არჩევითი შეყვანის ველები (გამოიყენება ვირტუალური პროდუქტებისთვის).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'არჩევითი გამომავალი ველები (გამოიყენება ვირტუალური პროდუქტებისთვის).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'სურვილისამებრ ბლოგის ან ვებსაიტის url.', 'type' => 'სიმებიანი', 'default' => false],
                'status' => ['title' => 'პროდუქტის სტატუსი გახსნა / დახურვა, ნაგულისხმევი არის ღია.', 'type' => 'აღრიცხვა', 'default' => 'გახსენით', 'values' => ['გახსენით', 'დახურვა']],
                'category_id' => ['title' => 'კატეგორიის ID.', 'type' => 'ინტ', 'default' => null],
                'lead' => ['title' => 'დრო საათებში..', 'type' => 'ინტ', 'default' => null],
                'style' => ['title' => 'პროდუქტის სტილი (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'პროდუქტის ბრენდი..', 'type' => 'სიმებიანი', 'default' => null],
                'warranty' => ['title' => 'გარანტიის აღწერა..', 'type' => 'სიმებიანი', 'default' => null],
                'original' => ['title' => 'ეს პროდუქტი ორიგინალია?', 'type' => 'ლოგიკური', 'default' => false],
                'return_warranty' => ['title' => 'დაბრუნების გარანტია დღეების მიხედვით.', 'type' => 'ინტ', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ობიექტი',
                    '_object' => 'პროდუქტი',
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
            'description' => 'დაამატეთ ახალი პროდუქტი მაღაზიაში.',
            'url' => 'მაღაზიები/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'დააყენეთ პროდუქტის/მომსახურების ტიპი.', 'type' => 'აღრიცხვა', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'პროდუქტის ფასი.', 'type' => 'ათწილადი', 'require' => true],
                'commission' => ['title' => 'დაამატეთ საკომისიო ფასს.', 'type' => 'ათწილადი', 'default' => 0],
                'discount' => ['title' => 'ნაგულისხმევი პროდუქტის ფასის ფასდაკლება.', 'type' => 'ათწილადი', 'default' => 0],
                'dis_start' => ['title' => 'ფასდაკლების დაწყების დრო UTC დროის ზონაში (ფორმატი: YYYY-MM-DD HH:mm:ss).', 'type' => 'თარიღი', 'default' => null],
                'dis_end' => ['title' => 'ფასდაკლების დასრულების დრო UTC დროის ზონაში (ფორმატი: YYYY-MM-DD HH:mm:ss).', 'type' => 'თარიღი', 'default' => null],
                'currency' => ['title' => 'ვალუტა,', 'type' => 'აღრიცხვა', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "პროდუქტის სათაური.", 'type' => 'სიმებიანი', 'require' => true],
                'title_en' => ['title' => 'პროდუქტის ინგლისური სათაური (ან ქვესათაური)', 'type' => 'სიმებიანი', 'default' => null],
                'message' => ['title' => 'შეტყობინების ჩვენება მომხმარებლისთვის, თუ არსებობს შეყვანის ველები (გამოიყენება ვირტუალური პროდუქტებისთვის).', 'type' => 'სიმებიანი', 'default' => null],
                'inputs' => ['title' => 'არჩევითი შეყვანის ველები (გამოიყენება ვირტუალური პროდუქტებისთვის).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'არჩევითი გამომავალი ველები (გამოიყენება ვირტუალური პროდუქტებისთვის).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'სურვილისამებრ ბლოგის ან ვებსაიტის url.', 'type' => 'სიმებიანი', 'default' => false],
                'status' => ['title' => 'პროდუქტის სტატუსი გახსნა / დახურვა, ნაგულისხმევი არის ღია.', 'type' => 'აღრიცხვა', 'default' => 'გახსენით', 'values' => ['გახსენით', 'დახურვა']],
                'category_id' => ['title' => 'კატეგორიის ID.', 'type' => 'ინტ', 'default' => null],
                'lead' => ['title' => 'დრო საათებში..', 'type' => 'ინტ', 'default' => null],
                'style' => ['title' => 'პროდუქტის სტილი (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'პროდუქტის ბრენდი..', 'type' => 'სიმებიანი', 'default' => null],
                'warranty' => ['title' => 'გარანტიის აღწერა..', 'type' => 'სიმებიანი', 'default' => null],
                'original' => ['title' => 'ეს პროდუქტი ორიგინალია?', 'type' => 'ლოგიკური', 'default' => false],
                'return_warranty' => ['title' => 'დაბრუნების გარანტია დღეების მიხედვით.', 'type' => 'ინტ', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ობიექტი',
                    '_object' => 'პროდუქტი',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'პროდუქტის მდგომარეობა წარმატებით განახლდა.', 'type' => 'ლოგიკური'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'დაამატეთ ახალი პროდუქტი საცავიდან sku-ით მაღაზიაში.',
            'url' => 'მაღაზიები/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'სიმებიანი', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'ავტომატური ნაკრების კატეგორია', 'type' => 'ლოგიკური', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'პროდუქტი დაამატეთ ამ კატეგორიას მაღაზიაში კატეგორიის ID-ით.', 'type' => 'ინტ', 'default' => null],

                'price' => ['title' => 'პროდუქტის ფასი.', 'type' => 'ათწილადი', 'require' => true],
                'currency' => ['title' => 'ვალუტა,', 'type' => 'აღრიცხვა', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'რაოდენობა', 'type' => 'ინტ', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'ობიექტი',
                    '_object' => 'პროდუქტი',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'პროდუქტის მდგომარეობა წარმატებით განახლდა.', 'type' => 'ლოგიკური'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
