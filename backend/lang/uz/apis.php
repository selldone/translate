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
            'description' => 'Do\'konning mahsulotlar ro\'yxatini oling.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Faqat mavjud mahsulotlarni ko\'rsatish. Haqiqiy yoki yolg\'on bo\'lishi mumkin.', 'type' => 'mantiqiy', 'default' => false],
                'with_parent' => ['title' => 'Ota-toifa ierarxiyasini oling. Haqiqiy yoki yolg\'on bo\'lishi mumkin.', 'type' => 'mantiqiy', 'default' => false],
                'offset' => ['title' => 'Mahsulotlar ro\'yxatining ofseti (sahifalash uchun).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Ro\'yxatdagi mahsulotlar soni (sahifalash uchun).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Ro\'yxatni saralash turi', 'type' => 'enum', 'default' => null, 'values' => [null, 'bog\'liq', 'eng ko\'p tashrif buyurilgan', 'eng_mashhur', 'eng yangi', 'eng ko\'p sotilgan', 'eng arzon', 'eng_qimmat', 'tasodifiy', 'bog\'liq', 'sevimli', 'tasodifiy']],
                'product_id' => ['title' => 'ID mahsuloti tegishli mahsulotlarni qaytarish uchun ishlatiladi (sort = bog\'liq).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Mahsulot ma\'lumotlar to\'plami. Null yoki spesifik bo\'lishi mumkin (null: standart, spec: spetsifikatsiyalarni olish uchun optimallashtirilgan).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spetsifikatsiya']],
                'search' => ['title' => 'Matnni qidirish', 'type' => 'ip', 'default' => null],
                'search_type' => ['title' => 'Qidiruv turi. Null yoki kategoriya bo\'lishi mumkin.', 'type' => 'enum', 'default' => null, 'values' => [null, 'kategoriya']],
                'dir' => ['title' => 'ID toifasi yoki nomi. Belgilanganda ushbu turkumdagi mahsulotlarni oladi.', 'type' => 'har qanday', 'default' => null],
                'products_only' => ['title' => 'Faqat mahsulotlarni oling (toifalar kiritilmagan).', 'type' => 'mantiqiy', 'default' => false],
                'categories_only' => ['title' => 'Faqat toifalarni oling (mahsulotlar kiritilmagan).', 'type' => 'mantiqiy', 'default' => false],
                'need_full_variants' => ['title' => 'To\'liq variant haqida ma\'lumot oling.', 'type' => 'mantiqiy', 'default' => false],
                'optimized' => ['title' => '(Faqat administrator sifatida mahsulotlarni olganingizda) Narx, tarif yoki statistikasiz mahsulotlar roʻyxatini oling.', 'type' => 'mantiqiy', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'massiv',
                    '_object' => 'Mahsulot',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'massiv',
                    '_object' => 'Turkum',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'ob\'ekt',
                    '_object' => 'Turkum',
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
            'description' => 'Mahsulot haqida ma\'lumot va statistikani oling.',
            'url' => 'shops/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'ob\'ekt',
                    '_object' => 'Mahsulot',
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
                    '_type' => 'massiv',
                    '_object' => 'Mahsulot-ma\'lumotlar',
                    'title' => 'oxirgi 30 kunlik ma\'lumotlar',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Buyurtmalar que ma\'lumot.',
                    'type' => 'Virtual: count (int)|Jismoniy: [hisoblash, yetkazib berish_holati] (massiv)'
                ],

                'new_comments_count' => [
                    'title' => 'Yangi sharhlar hisobga olinadi.',
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
            'description' => 'Do\'konga yangi mahsulot qo\'shing.',
            'url' => 'do\'konlar/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Mahsulot/xizmat turini belgilang.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Mahsulot narxi.', 'type' => 'suzmoq', 'require' => true],
                'commission' => ['title' => 'Narxga komissiya qo\'shing.', 'type' => 'suzmoq', 'default' => 0],
                'discount' => ['title' => 'Standart mahsulot narxidagi chegirma.', 'type' => 'suzmoq', 'default' => 0],
                'dis_start' => ['title' => 'UTC vaqt zonasida chegirma boshlanish vaqti (format: YYYY-AA-DD HH:mm:ss).', 'type' => 'sana', 'default' => null],
                'dis_end' => ['title' => 'UTC vaqt zonasida chegirma tugash vaqti (format: YYYY-AA-KK HH:mm:ss).', 'type' => 'sana', 'default' => null],
                'currency' => ['title' => 'Valyuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "mahsulot nomi.", 'type' => 'ip', 'require' => true],
                'title_en' => ['title' => 'Mahsulotning inglizcha nomi (yoki pastki sarlavhasi)', 'type' => 'ip', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'ip', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'ip', 'default' => null],
                'gtin' => ['title' => "Mahsulotning global savdo elementi raqami.", 'type' => 'ip', 'default' => null],
                'gpc' => ['title' => 'Google mahsulot toifasi kodi.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Do'koningizdagi buyumning hozirgi holati.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Agar kirish maydonlari mavjud bo\'lsa, foydalanuvchiga xabar ko\'rsatiladi (virtual mahsulotlar uchun ishlatiladi).', 'type' => 'ip', 'default' => null],
                'inputs' => ['title' => 'Majburiy emas kiritish maydonlari (virtual mahsulotlar uchun ishlatiladi).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Ixtiyoriy chiqish maydonlari (virtual mahsulotlar uchun ishlatiladi).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Ixtiyoriy blog yoki veb-sayt url.', 'type' => 'ip', 'default' => false],
                'status' => ['title' => 'mahsulot holati Ochish / Yopish, Standart ochiq.', 'type' => 'enum', 'default' => 'Ochiq', 'values' => ['Ochiq', 'Yopish']],
                'category_id' => ['title' => 'kategoriya identifikatori.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Yetkazib berish vaqti soatlarda..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Mahsulot uslubi (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Mahsulot brendi..', 'type' => 'ip', 'default' => null],
                'warranty' => ['title' => 'kafolat tavsifi ..', 'type' => 'ip', 'default' => null],
                'original' => ['title' => 'Ushbu mahsulot originalmi?', 'type' => 'mantiqiy', 'default' => false],
                'return_warranty' => ['title' => 'Kafolatni kunlar bo\'yicha qaytarish.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ob\'ekt',
                    '_object' => 'Mahsulot',
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
            'description' => 'Do\'konga yangi mahsulot qo\'shing.',
            'url' => 'shops/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Mahsulot/xizmat turini belgilang.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Mahsulot narxi.', 'type' => 'suzmoq', 'require' => true],
                'commission' => ['title' => 'Narxga komissiya qo\'shing.', 'type' => 'suzmoq', 'default' => 0],
                'discount' => ['title' => 'Standart mahsulot narxidagi chegirma.', 'type' => 'suzmoq', 'default' => 0],
                'dis_start' => ['title' => 'UTC vaqt zonasida chegirma boshlanish vaqti (format: YYYY-AA-DD HH:mm:ss).', 'type' => 'sana', 'default' => null],
                'dis_end' => ['title' => 'UTC vaqt zonasida chegirma tugash vaqti (format: YYYY-AA-KK HH:mm:ss).', 'type' => 'sana', 'default' => null],
                'currency' => ['title' => 'Valyuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "mahsulot nomi.", 'type' => 'ip', 'require' => true],
                'title_en' => ['title' => 'Mahsulotning inglizcha nomi (yoki pastki sarlavhasi)', 'type' => 'ip', 'default' => null],
                'message' => ['title' => 'Agar kirish maydonlari mavjud bo\'lsa, foydalanuvchiga xabar ko\'rsatiladi (virtual mahsulotlar uchun ishlatiladi).', 'type' => 'ip', 'default' => null],
                'inputs' => ['title' => 'Majburiy emas kiritish maydonlari (virtual mahsulotlar uchun ishlatiladi).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Ixtiyoriy chiqish maydonlari (virtual mahsulotlar uchun ishlatiladi).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Ixtiyoriy blog yoki veb-sayt url.', 'type' => 'ip', 'default' => false],
                'status' => ['title' => 'mahsulot holati Ochish / Yopish, Standart ochiq.', 'type' => 'enum', 'default' => 'Ochiq', 'values' => ['Ochiq', 'Yopish']],
                'category_id' => ['title' => 'kategoriya identifikatori.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Yetkazib berish vaqti soatlarda..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Mahsulot uslubi (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Mahsulot brendi..', 'type' => 'ip', 'default' => null],
                'warranty' => ['title' => 'kafolat tavsifi ..', 'type' => 'ip', 'default' => null],
                'original' => ['title' => 'Ushbu mahsulot originalmi?', 'type' => 'mantiqiy', 'default' => false],
                'return_warranty' => ['title' => 'Kafolatni kunlar bo\'yicha qaytarish.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ob\'ekt',
                    '_object' => 'Mahsulot',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Muvaffaqiyatli mahsulot holati yangilandi.', 'type' => 'mantiqiy'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Do\'konga sku bo\'yicha ombordan yangi mahsulotni qo\'shing.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'ip', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Kategoriyani avtomatik sozlash', 'type' => 'mantiqiy', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Mahsulotni ushbu turkumga do\'kondagi toifa identifikatori bo\'yicha qo\'shing.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Mahsulot narxi.', 'type' => 'suzmoq', 'require' => true],
                'currency' => ['title' => 'Valyuta,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Miqdori', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'ob\'ekt',
                    '_object' => 'Mahsulot',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Muvaffaqiyatli mahsulot holati yangilandi.', 'type' => 'mantiqiy'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
