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
            'description' => 'ເອົາລາຍການຜະລິດຕະພັນຂອງຮ້ານ.',
            'url' => 'ຮ້ານຄ້າ/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'ສະແດງສິນຄ້າທີ່ມີຢູ່ເທົ່ານັ້ນ. ສາມາດເປັນຄວາມຈິງຫຼືບໍ່ຖືກຕ້ອງ.', 'type' => 'ບູລີນ', 'default' => false],
                'with_parent' => ['title' => 'ເອົາການຈັດລໍາດັບຊັ້ນຂອງກຸ່ມແມ່. ສາມາດເປັນຄວາມຈິງຫຼືບໍ່ຖືກຕ້ອງ.', 'type' => 'ບູລີນ', 'default' => false],
                'offset' => ['title' => 'ຊົດເຊີຍຂອງບັນຊີລາຍຊື່ຜະລິດຕະພັນ (ສໍາລັບການ pagination).', 'type' => 'int', 'default' => 0],
                'limit' => ['title' => 'ຈໍານວນຜະລິດຕະພັນໃນບັນຊີລາຍຊື່ (ສໍາລັບການ pagination).', 'type' => 'int', 'default' => 20],
                'sort' => ['title' => 'ລາຍຊື່ປະເພດ', 'type' => 'enum', 'default' => null, 'values' => [null, 'ທີ່ກ່ຽວຂ້ອງ', 'ໄປຢ້ຽມຢາມຫຼາຍທີ່ສຸດ', 'ນິຍົມທີ່ສຸດ', 'ໃໝ່ສຸດ', 'ຂາຍດີທີ່ສຸດ', 'ລາຄາຖືກທີ່ສຸດ', 'ແພງທີ່ສຸດ', 'ສຸ່ມ', 'ທີ່ກ່ຽວຂ້ອງ', 'favorite', 'ສຸ່ມ']],
                'product_id' => ['title' => 'ຜະລິດຕະພັນ ID ໃຊ້ເພື່ອສົ່ງຄືນຜະລິດຕະພັນທີ່ກ່ຽວຂ້ອງ (sort = ທີ່ກ່ຽວຂ້ອງ).', 'type' => 'int', 'default' => null],
                'set' => ['title' => 'ຊຸດຂໍ້ມູນຜະລິດຕະພັນ. ສາມາດເປັນ null ຫຼື spec (null: default, spec: optimized for retrieving specifications).', 'type' => 'enum', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'ຊອກຫາຂໍ້ຄວາມ', 'type' => 'ສາຍ', 'default' => null],
                'search_type' => ['title' => 'ປະເພດການຄົ້ນຫາ. ສາມາດເປັນ null ຫຼືປະເພດ.', 'type' => 'enum', 'default' => null, 'values' => [null, 'ປະເພດ']],
                'dir' => ['title' => 'ປະເພດ ID ຫຼືຊື່. ໄດ້ຮັບຜະລິດຕະພັນໃນປະເພດນີ້ເມື່ອຕັ້ງ.', 'type' => 'ໃດ', 'default' => null],
                'products_only' => ['title' => 'ໄດ້ຮັບພຽງແຕ່ຜະລິດຕະພັນ (ປະເພດບໍ່ລວມ).', 'type' => 'ບູລີນ', 'default' => false],
                'categories_only' => ['title' => 'ເອົາແຕ່ປະເພດ (ຜະລິດຕະພັນບໍ່ລວມ).', 'type' => 'ບູລີນ', 'default' => false],
                'need_full_variants' => ['title' => 'ເອົາຂໍ້ມູນຕົວແປເຕັມ.', 'type' => 'ບູລີນ', 'default' => false],
                'optimized' => ['title' => '(ພຽງແຕ່ເມື່ອໄດ້ຮັບຜະລິດຕະພັນເປັນຜູ້ເບິ່ງແຍງ) ເອົາລາຍການຜະລິດຕະພັນໂດຍບໍ່ມີລາຄາ, ອັດຕາ, ຫຼືສະຖິຕິ.', 'type' => 'ບູລີນ', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'array',
                    '_object' => 'ຜະລິດຕະພັນ',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'array',
                    '_object' => 'ປະເພດ',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'ວັດຖຸ',
                    '_object' => 'ປະເພດ',
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
            'description' => 'ໄດ້ຮັບຂໍ້ມູນຜະລິດຕະພັນແລະສະຖິຕິ.',
            'url' => 'ຮ້ານຄ້າ/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'ວັດຖຸ',
                    '_object' => 'ຜະລິດຕະພັນ',
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
                    '_object' => 'ຂໍ້ມູນຜະລິດຕະພັນ',
                    'title' => 'ຂໍ້ມູນ 30 ມື້ທີ່ຜ່ານມາ',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'ຂໍ້ມູນການສັ່ງຊື້.',
                    'type' => 'Virtual: ນັບ (int)|ທາງກາຍະພາບ: [count, delivery_state] (array)'
                ],

                'new_comments_count' => [
                    'title' => 'ຄຳເຫັນໃໝ່ນັບ.',
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
            'description' => 'ເພີ່ມຜະລິດຕະພັນໃຫມ່ໃນຮ້ານ.',
            'url' => 'ຮ້ານຄ້າ/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'ກໍານົດປະເພດຂອງຜະລິດຕະພັນ / ບໍລິການ.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'ລາຄາສິນຄ້າ.', 'type' => 'ລອຍ', 'require' => true],
                'commission' => ['title' => 'ເພີ່ມຄ່ານາຍໜ້າໃຫ້ກັບລາຄາ.', 'type' => 'ລອຍ', 'default' => 0],
                'discount' => ['title' => 'ສ່ວນຫຼຸດລາຄາສິນຄ້າເລີ່ມຕົ້ນ.', 'type' => 'ລອຍ', 'default' => 0],
                'dis_start' => ['title' => 'ເວລາເລີ່ມຕົ້ນສ່ວນຫຼຸດໃນເຂດເວລາ UTC (ຮູບແບບ: YYYY-MM-DD HH:mm:ss).', 'type' => 'ວັນທີ', 'default' => null],
                'dis_end' => ['title' => 'ເວລາສິ້ນສຸດສ່ວນຫຼຸດໃນເຂດເວລາ UTC (ຮູບແບບ: YYYY-MM-DD HH:mm:ss).', 'type' => 'ວັນທີ', 'default' => null],
                'currency' => ['title' => 'ເງິນຕາ,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "ຊື່ຜະລິດຕະພັນ.", 'type' => 'ສາຍ', 'require' => true],
                'title_en' => ['title' => 'ຊື່ພາສາອັງກິດຂອງຜະລິດຕະພັນ (ຫຼືຫົວຂໍ້ຍ່ອຍ)', 'type' => 'ສາຍ', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'ສາຍ', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'ສາຍ', 'default' => null],
                'gtin' => ['title' => "ໝາຍເລກລາຍການການຄ້າທົ່ວໂລກຂອງຜະລິດຕະພັນ.", 'type' => 'ສາຍ', 'default' => null],
                'gpc' => ['title' => 'ລະຫັດປະເພດຜະລິດຕະພັນຂອງ Google.', 'type' => 'int', 'default' => null],
                'condition' => ['title' => "ສະພາບປັດຈຸບັນຂອງລາຍການຢູ່ໃນຮ້ານຂອງທ່ານ.", 'type' => 'enum', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'ຂໍ້ຄວາມສະແດງໃຫ້ຜູ້ໃຊ້ຖ້າມີຊ່ອງໃສ່ຂໍ້ມູນ (ໃຊ້ສໍາລັບຜະລິດຕະພັນສະເໝືອນ).', 'type' => 'ສາຍ', 'default' => null],
                'inputs' => ['title' => 'ຊ່ອງຂໍ້ມູນທາງເລືອກ (ໃຊ້ສໍາລັບຜະລິດຕະພັນສະເໝືອນ).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'ຊ່ອງຂໍ້ມູນທາງເລືອກ (ໃຊ້ສໍາລັບຜະລິດຕະພັນ virtual).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'ທາງເລືອກ blog ຫຼື url ເວັບໄຊທ໌.', 'type' => 'ສາຍ', 'default' => false],
                'status' => ['title' => 'ສະຖານະຜະລິດຕະພັນເປີດ / ປິດ, ຄ່າເລີ່ມຕົ້ນແມ່ນເປີດ.', 'type' => 'enum', 'default' => 'ເປີດ', 'values' => ['ເປີດ', 'ປິດ']],
                'category_id' => ['title' => 'ID ໝວດໝູ່.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'ເວລານຳເປັນຊົ່ວໂມງ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'ຮູບແບບຂອງຜະລິດຕະພັນ (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'ຍີ່​ຫໍ້​ຜະ​ລິດ​ຕະ​ພັນ..', 'type' => 'ສາຍ', 'default' => null],
                'warranty' => ['title' => 'ລາຍ​ລະ​ອຽດ​ການ​ຮັບ​ປະ​ກັນ ..', 'type' => 'ສາຍ', 'default' => null],
                'original' => ['title' => 'ຜະລິດຕະພັນນີ້ແມ່ນຕົ້ນສະບັບບໍ?', 'type' => 'ບູລີນ', 'default' => false],
                'return_warranty' => ['title' => 'ການຮັບປະກັນຄືນໂດຍມື້.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ວັດຖຸ',
                    '_object' => 'ຜະລິດຕະພັນ',
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
            'description' => 'ເພີ່ມຜະລິດຕະພັນໃຫມ່ໃນຮ້ານ.',
            'url' => 'shops/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'ກໍານົດປະເພດຂອງຜະລິດຕະພັນ / ບໍລິການ.', 'type' => 'enum', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'ລາຄາສິນຄ້າ.', 'type' => 'ລອຍ', 'require' => true],
                'commission' => ['title' => 'ເພີ່ມຄ່ານາຍໜ້າໃຫ້ກັບລາຄາ.', 'type' => 'ລອຍ', 'default' => 0],
                'discount' => ['title' => 'ສ່ວນຫຼຸດລາຄາສິນຄ້າເລີ່ມຕົ້ນ.', 'type' => 'ລອຍ', 'default' => 0],
                'dis_start' => ['title' => 'ເວລາເລີ່ມຕົ້ນສ່ວນຫຼຸດໃນເຂດເວລາ UTC (ຮູບແບບ: YYYY-MM-DD HH:mm:ss).', 'type' => 'ວັນທີ', 'default' => null],
                'dis_end' => ['title' => 'ເວລາສິ້ນສຸດສ່ວນຫຼຸດໃນເຂດເວລາ UTC (ຮູບແບບ: YYYY-MM-DD HH:mm:ss).', 'type' => 'ວັນທີ', 'default' => null],
                'currency' => ['title' => 'ເງິນຕາ,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "ຊື່ຜະລິດຕະພັນ.", 'type' => 'ສາຍ', 'require' => true],
                'title_en' => ['title' => 'ຊື່ພາສາອັງກິດຂອງຜະລິດຕະພັນ (ຫຼືຫົວຂໍ້ຍ່ອຍ)', 'type' => 'ສາຍ', 'default' => null],
                'message' => ['title' => 'ຂໍ້ຄວາມສະແດງໃຫ້ຜູ້ໃຊ້ຖ້າມີຊ່ອງໃສ່ຂໍ້ມູນ (ໃຊ້ສໍາລັບຜະລິດຕະພັນສະເໝືອນ).', 'type' => 'ສາຍ', 'default' => null],
                'inputs' => ['title' => 'ຊ່ອງຂໍ້ມູນທາງເລືອກ (ໃຊ້ສໍາລັບຜະລິດຕະພັນສະເໝືອນ).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'ຊ່ອງຂໍ້ມູນທາງເລືອກ (ໃຊ້ສໍາລັບຜະລິດຕະພັນ virtual).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'ທາງເລືອກ blog ຫຼື url ເວັບໄຊທ໌.', 'type' => 'ສາຍ', 'default' => false],
                'status' => ['title' => 'ສະຖານະຜະລິດຕະພັນເປີດ / ປິດ, ຄ່າເລີ່ມຕົ້ນແມ່ນເປີດ.', 'type' => 'enum', 'default' => 'ເປີດ', 'values' => ['ເປີດ', 'ປິດ']],
                'category_id' => ['title' => 'ID ໝວດໝູ່.', 'type' => 'int', 'default' => null],
                'lead' => ['title' => 'ເວລານຳເປັນຊົ່ວໂມງ..', 'type' => 'int', 'default' => null],
                'style' => ['title' => 'ຮູບແບບຂອງຜະລິດຕະພັນ (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'ຍີ່​ຫໍ້​ຜະ​ລິດ​ຕະ​ພັນ..', 'type' => 'ສາຍ', 'default' => null],
                'warranty' => ['title' => 'ລາຍ​ລະ​ອຽດ​ການ​ຮັບ​ປະ​ກັນ ..', 'type' => 'ສາຍ', 'default' => null],
                'original' => ['title' => 'ຜະລິດຕະພັນນີ້ແມ່ນຕົ້ນສະບັບບໍ?', 'type' => 'ບູລີນ', 'default' => false],
                'return_warranty' => ['title' => 'ການຮັບປະກັນຄືນໂດຍມື້.', 'type' => 'int', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'ວັດຖຸ',
                    '_object' => 'ຜະລິດຕະພັນ',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'ອັບເດດສະຖານະຜະລິດຕະພັນສຳເລັດແລ້ວ.', 'type' => 'ບູລີນ'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'ເພີ່ມຜະລິດຕະພັນໃຫມ່ຈາກ repository ໂດຍ sku ກັບຮ້ານ.',
            'url' => 'ຮ້ານຄ້າ/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'ສາຍ', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'ໝວດໝູ່ຕັ້ງອັດຕະໂນມັດ', 'type' => 'ບູລີນ', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'ເພີ່ມສິນຄ້າໃສ່ໝວດໝູ່ນີ້ຕາມໝວດໝູ່ໃນຮ້ານ.', 'type' => 'int', 'default' => null],

                'price' => ['title' => 'ລາຄາສິນຄ້າ.', 'type' => 'ລອຍ', 'require' => true],
                'currency' => ['title' => 'ເງິນຕາ,', 'type' => 'enum', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'ປະລິມານ', 'type' => 'int', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'ວັດຖຸ',
                    '_object' => 'ຜະລິດຕະພັນ',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'ອັບເດດສະຖານະຜະລິດຕະພັນສຳເລັດແລ້ວ.', 'type' => 'ບູລີນ'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
