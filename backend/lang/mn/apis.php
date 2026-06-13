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
            'description' => 'Дэлгүүрийн бүтээгдэхүүний жагсаалтыг аваарай.',
            'url' => 'дэлгүүрүүд/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Зөвхөн бэлэн бүтээгдэхүүнийг харуулах. Үнэн эсвэл худал байж болно.', 'type' => 'логик', 'default' => false],
                'with_parent' => ['title' => 'Эцэг эхийн ангиллын шатлалыг аваарай. Үнэн эсвэл худал байж болно.', 'type' => 'логик', 'default' => false],
                'offset' => ['title' => 'Бүтээгдэхүүний жагсаалтын офсет (хуудасжилтын хувьд).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'Жагсаалтад байгаа бүтээгдэхүүний тоо (хуудасжилтын хувьд).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'Жагсаалтын төрөл', 'type' => 'тоо', 'default' => null, 'values' => [null, 'холбоотой', 'хамгийн их зочилсон', 'хамгийн_алдартай', 'хамгийн шинэ', 'шилдэг борлуулалттай', 'хамгийн хямд', 'хамгийн_үнэтэй', 'санамсаргүй', 'холбоотой', 'дуртай', 'санамсаргүй']],
                'product_id' => ['title' => 'ID бүтээгдэхүүн холбогдох бүтээгдэхүүнийг буцаахад ашигладаг (ангилах = холбоотой).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'Бүтээгдэхүүний өгөгдлийн багц. null эсвэл spec байж болно (null: өгөгдмөл, spec: техникийн үзүүлэлтүүдийг сэргээхэд оновчтой).', 'type' => 'тоо', 'default' => null, 'values' => [null, 'техникийн үзүүлэлт']],
                'search' => ['title' => 'Текст хайх', 'type' => 'мөр', 'default' => null],
                'search_type' => ['title' => 'Хайлтын төрөл. null эсвэл ангилал байж болно.', 'type' => 'тоо', 'default' => null, 'values' => [null, 'ангилал']],
                'dir' => ['title' => 'Ангилал ID эсвэл нэр. Тохируулах үед энэ ангилалд багтсан бүтээгдэхүүнийг авна.', 'type' => 'ямар ч', 'default' => null],
                'products_only' => ['title' => 'Зөвхөн бүтээгдэхүүн авах (ангилуудыг оруулаагүй болно).', 'type' => 'логик', 'default' => false],
                'categories_only' => ['title' => 'Зөвхөн ангиллыг аваарай (бүтээгдэхүүн ороогүй болно).', 'type' => 'логик', 'default' => false],
                'need_full_variants' => ['title' => 'Бүрэн хувилбарын мэдээллийг аваарай.', 'type' => 'логик', 'default' => false],
                'optimized' => ['title' => '(Зөвхөн админаар бүтээгдэхүүн авах үед) Бүтээгдэхүүний жагсаалтыг үнэ, үнэ, статистикгүйгээр аваарай.', 'type' => 'логик', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'массив',
                    '_object' => 'Бүтээгдэхүүн',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'массив',
                    '_object' => 'Ангилал',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'объект',
                    '_object' => 'Ангилал',
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
            'description' => 'Бүтээгдэхүүний мэдээлэл, статистик мэдээллийг аваарай.',
            'url' => 'дэлгүүрүүд/{shop_id}/products/{product_id}/админ',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'объект',
                    '_object' => 'Бүтээгдэхүүн',
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
                    '_type' => 'массив',
                    '_object' => 'Бүтээгдэхүүн-Өгөгдөл',
                    'title' => 'сүүлийн 30 хоногийн өгөгдөл',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Захиалгын мэдээлэл.',
                    'type' => 'Виртуал: тоо (int)|Физик: [тоо, хүргэлтийн_төлөв] (массив)'
                ],

                'new_comments_count' => [
                    'title' => 'Шинэ сэтгэгдлийг тоолно.',
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
            'description' => 'Дэлгүүрт шинэ бүтээгдэхүүн нэмнэ үү.',
            'url' => 'дэлгүүрүүд/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Бүтээгдэхүүн / үйлчилгээний төрлийг тохируулах.', 'type' => 'тоо', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Бүтээгдэхүүний үнэ.', 'type' => 'хөвөх', 'require' => true],
                'commission' => ['title' => 'Үнэ дээр комисс нэмнэ.', 'type' => 'хөвөх', 'default' => 0],
                'discount' => ['title' => 'Үндсэн бүтээгдэхүүний үнийн хөнгөлөлт.', 'type' => 'хөвөх', 'default' => 0],
                'dis_start' => ['title' => 'UTC цагийн бүс дэх хөнгөлөлт эхлэх цаг (формат: YYYY-MM-DD HH:mm:ss).', 'type' => 'огноо', 'default' => null],
                'dis_end' => ['title' => 'UTC цагийн бүс дэх хөнгөлөлт дуусах хугацаа (формат: YYYY-MM-DD HH:mm:ss).', 'type' => 'огноо', 'default' => null],
                'currency' => ['title' => 'валют,', 'type' => 'тоо', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Бүтээгдэхүүний гарчиг.", 'type' => 'мөр', 'require' => true],
                'title_en' => ['title' => 'Бүтээгдэхүүний англи гарчиг (эсвэл дэд гарчиг)', 'type' => 'мөр', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'мөр', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'мөр', 'default' => null],
                'gtin' => ['title' => "Бүтээгдэхүүний дэлхийн худалдааны барааны дугаар.", 'type' => 'мөр', 'default' => null],
                'gpc' => ['title' => 'Google бүтээгдэхүүний ангиллын код.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "Таны дэлгүүрт байгаа барааны одоогийн байдал.", 'type' => 'тоо', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Оролтын талбар байгаа бол (виртуал бүтээгдэхүүнд ашигладаг) мессежийг хэрэглэгчдэд харуулна.', 'type' => 'мөр', 'default' => null],
                'inputs' => ['title' => 'Нэмэлт оруулах талбарууд (виртуал бүтээгдэхүүнд ашиглагддаг).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Нэмэлт гаралтын талбарууд (виртуал бүтээгдэхүүнд ашиглагддаг).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Нэмэлт блог эсвэл вэбсайтын url.', 'type' => 'мөр', 'default' => false],
                'status' => ['title' => 'бүтээгдэхүүний төлөв Нээлттэй / Хаах, Өгөгдмөл нь Нээлттэй байна.', 'type' => 'тоо', 'default' => 'Нээлттэй', 'values' => ['Нээлттэй', 'Хаах']],
                'category_id' => ['title' => 'ангиллын id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Хүргэлтийн хугацаа хэдэн цагаар ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Бүтээгдэхүүний хэв маяг (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Бүтээгдэхүүний брэнд..', 'type' => 'мөр', 'default' => null],
                'warranty' => ['title' => 'баталгааны тодорхойлолт..', 'type' => 'мөр', 'default' => null],
                'original' => ['title' => 'Энэ бүтээгдэхүүн оригинал уу?', 'type' => 'логик', 'default' => false],
                'return_warranty' => ['title' => 'Баталгаат хугацааг хоногоор буцаана.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'объект',
                    '_object' => 'Бүтээгдэхүүн',
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
            'description' => 'Дэлгүүрт шинэ бүтээгдэхүүн нэмнэ үү.',
            'url' => 'дэлгүүрүүд/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Бүтээгдэхүүн / үйлчилгээний төрлийг тохируулах.', 'type' => 'тоо', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Бүтээгдэхүүний үнэ.', 'type' => 'хөвөх', 'require' => true],
                'commission' => ['title' => 'Үнэ дээр комисс нэмнэ.', 'type' => 'хөвөх', 'default' => 0],
                'discount' => ['title' => 'Үндсэн бүтээгдэхүүний үнийн хөнгөлөлт.', 'type' => 'хөвөх', 'default' => 0],
                'dis_start' => ['title' => 'UTC цагийн бүс дэх хөнгөлөлт эхлэх цаг (формат: YYYY-MM-DD HH:mm:ss).', 'type' => 'огноо', 'default' => null],
                'dis_end' => ['title' => 'UTC цагийн бүс дэх хөнгөлөлт дуусах хугацаа (формат: YYYY-MM-DD HH:mm:ss).', 'type' => 'огноо', 'default' => null],
                'currency' => ['title' => 'валют,', 'type' => 'тоо', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Бүтээгдэхүүний гарчиг.", 'type' => 'мөр', 'require' => true],
                'title_en' => ['title' => 'Бүтээгдэхүүний англи гарчиг (эсвэл дэд гарчиг)', 'type' => 'мөр', 'default' => null],
                'message' => ['title' => 'Оролтын талбар байгаа бол (виртуал бүтээгдэхүүнд ашигладаг) мессежийг хэрэглэгчдэд харуулна.', 'type' => 'мөр', 'default' => null],
                'inputs' => ['title' => 'Нэмэлт оруулах талбарууд (виртуал бүтээгдэхүүнд ашиглагддаг).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Нэмэлт гаралтын талбарууд (виртуал бүтээгдэхүүнд ашиглагддаг).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Нэмэлт блог эсвэл вэбсайтын url.', 'type' => 'мөр', 'default' => false],
                'status' => ['title' => 'бүтээгдэхүүний төлөв Нээлттэй / Хаах, Өгөгдмөл нь Нээлттэй байна.', 'type' => 'тоо', 'default' => 'Нээлттэй', 'values' => ['Нээлттэй', 'Хаах']],
                'category_id' => ['title' => 'ангиллын id.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'Хүргэлтийн хугацаа хэдэн цагаар ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'Бүтээгдэхүүний хэв маяг (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Бүтээгдэхүүний брэнд..', 'type' => 'мөр', 'default' => null],
                'warranty' => ['title' => 'баталгааны тодорхойлолт..', 'type' => 'мөр', 'default' => null],
                'original' => ['title' => 'Энэ бүтээгдэхүүн оригинал уу?', 'type' => 'логик', 'default' => false],
                'return_warranty' => ['title' => 'Баталгаат хугацааг хоногоор буцаана.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'объект',
                    '_object' => 'Бүтээгдэхүүн',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Амжилтын шинэчилсэн бүтээгдэхүүний төлөв.', 'type' => 'логик'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Дэлгүүрт sku-ийн агуулахаас шинэ бүтээгдэхүүн нэмнэ үү.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'мөр', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Ангилалыг автоматаар тохируулах', 'type' => 'логик', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Дэлгүүрт байгаа категорийн дугаараар бүтээгдэхүүнийг энэ ангилалд нэмнэ үү.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'Бүтээгдэхүүний үнэ.', 'type' => 'хөвөх', 'require' => true],
                'currency' => ['title' => 'валют,', 'type' => 'тоо', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Тоо хэмжээ', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'объект',
                    '_object' => 'Бүтээгдэхүүн',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Амжилтын шинэчилсэн бүтээгдэхүүний төлөв.', 'type' => 'логик'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
