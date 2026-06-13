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
            'description' => 'รับรายการสินค้าของทางร้าน',
            'url' => 'ร้านค้า/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'แสดงเฉพาะสินค้าที่มีอยู่ สามารถเป็นจริงหรือเท็จ', 'type' => 'บูลีน', 'default' => false],
                'with_parent' => ['title' => 'รับลำดับชั้นประเภทหลัก สามารถเป็นจริงหรือเท็จ', 'type' => 'บูลีน', 'default' => false],
                'offset' => ['title' => 'ออฟเซ็ตของรายการผลิตภัณฑ์ (สำหรับการแบ่งหน้า)', 'type' => 'ภายใน', 'default' => 0],
                'limit' => ['title' => 'จำนวนผลิตภัณฑ์ในรายการ (สำหรับการแบ่งหน้า)', 'type' => 'ภายใน', 'default' => 20],
                'sort' => ['title' => 'ประเภทการเรียงลำดับรายการ', 'type' => 'แจกแจง', 'default' => null, 'values' => [null, 'ที่เกี่ยวข้อง', 'เยี่ยมชมมากที่สุด', 'มากที่สุด_เป็นที่นิยม', 'ใหม่ล่าสุด', 'ขายดีที่สุด', 'ถูกที่สุด', 'แพงที่สุด', 'สุ่ม', 'ที่เกี่ยวข้อง', 'ที่ชื่นชอบ', 'สุ่ม']],
                'product_id' => ['title' => 'สินค้า ID ใช้เพื่อส่งคืนสินค้าที่เกี่ยวข้อง (sort = ที่เกี่ยวข้อง)', 'type' => 'ภายใน', 'default' => null],
                'set' => ['title' => 'ชุดข้อมูลผลิตภัณฑ์ อาจเป็นโมฆะหรือข้อมูลจำเพาะได้ (null: ค่าเริ่มต้น, ข้อมูลจำเพาะ: ปรับให้เหมาะสมสำหรับการดึงข้อมูลข้อมูลจำเพาะ)', 'type' => 'แจกแจง', 'default' => null, 'values' => [null, 'ข้อมูลจำเพาะ']],
                'search' => ['title' => 'ค้นหาข้อความ', 'type' => 'เชือก', 'default' => null],
                'search_type' => ['title' => 'ประเภทการค้นหา สามารถเป็นค่าว่างหรือหมวดหมู่ได้', 'type' => 'แจกแจง', 'default' => null, 'values' => [null, 'หมวดหมู่']],
                'dir' => ['title' => 'หมวดหมู่ ID หรือชื่อ รับสินค้าในหมวดนี้เมื่อตั้งค่า', 'type' => 'ใด ๆ', 'default' => null],
                'products_only' => ['title' => 'รับเฉพาะสินค้า (ไม่รวมหมวดหมู่)', 'type' => 'บูลีน', 'default' => false],
                'categories_only' => ['title' => 'รับเฉพาะหมวดหมู่ (ไม่รวมสินค้า)', 'type' => 'บูลีน', 'default' => false],
                'need_full_variants' => ['title' => 'รับข้อมูลรุ่นเต็ม', 'type' => 'บูลีน', 'default' => false],
                'optimized' => ['title' => '(เมื่อรับสินค้าในฐานะแอดมินเท่านั้น) รับรายการสินค้าโดยไม่มีราคา อัตรา หรือสถิติ', 'type' => 'บูลีน', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'อาร์เรย์',
                    '_object' => 'สินค้า',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'อาร์เรย์',
                    '_object' => 'หมวดหมู่',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'วัตถุ',
                    '_object' => 'หมวดหมู่',
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
            'description' => 'รับข้อมูลผลิตภัณฑ์และสถิติ',
            'url' => 'ร้านค้า/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'วัตถุ',
                    '_object' => 'สินค้า',
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
                    '_type' => 'อาร์เรย์',
                    '_object' => 'ข้อมูลผลิตภัณฑ์',
                    'title' => 'ข้อมูล 30 วันล่าสุด',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'สั่งซื้อสอบถามข้อมูล',
                    'type' => 'เสมือน: นับ (int)|ทางกายภาพ: [นับ, สถานะการจัดส่ง] (อาร์เรย์)'
                ],

                'new_comments_count' => [
                    'title' => 'ความคิดเห็นใหม่นับ',
                    'type' => 'ภายใน'
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
            'description' => 'เพิ่มผลิตภัณฑ์ใหม่ให้กับร้านค้า',
            'url' => 'ร้านค้า/{shop_id}/ผลิตภัณฑ์/เพิ่ม',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'กำหนดประเภทของสินค้า/บริการ', 'type' => 'แจกแจง', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'ราคาสินค้า.', 'type' => 'ลอย', 'require' => true],
                'commission' => ['title' => 'เพิ่มค่าคอมมิชชั่นให้กับราคา', 'type' => 'ลอย', 'default' => 0],
                'discount' => ['title' => 'ส่วนลดราคาสินค้าเริ่มต้น', 'type' => 'ลอย', 'default' => 0],
                'dis_start' => ['title' => 'เวลาเริ่มต้นส่วนลดในเขตเวลา UTC (รูปแบบ: YYYY-MM-DD HH:mm:ss)', 'type' => 'วันที่', 'default' => null],
                'dis_end' => ['title' => 'เวลาสิ้นสุดส่วนลดในเขตเวลา UTC (รูปแบบ: YYYY-MM-DD HH:mm:ss)', 'type' => 'วันที่', 'default' => null],
                'currency' => ['title' => 'สกุลเงิน,', 'type' => 'แจกแจง', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "ชื่อผลิตภัณฑ์.", 'type' => 'เชือก', 'require' => true],
                'title_en' => ['title' => 'ชื่อภาษาอังกฤษของผลิตภัณฑ์ (หรือชื่อย่อย)', 'type' => 'เชือก', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'เชือก', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'เชือก', 'default' => null],
                'gtin' => ['title' => "หมายเลขสินค้าการค้าสากลของผลิตภัณฑ์", 'type' => 'เชือก', 'default' => null],
                'gpc' => ['title' => 'รหัสหมวดหมู่ผลิตภัณฑ์ Google', 'type' => 'ภายใน', 'default' => null],
                'condition' => ['title' => "สภาพปัจจุบันของรายการในร้านค้าของคุณ", 'type' => 'แจกแจง', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'ข้อความแสดงให้ผู้ใช้ทราบหากมีช่องใส่ข้อมูลอยู่ (ใช้สำหรับผลิตภัณฑ์เสมือน)', 'type' => 'เชือก', 'default' => null],
                'inputs' => ['title' => 'ช่องป้อนข้อมูลเสริม (ใช้สำหรับผลิตภัณฑ์เสมือน)', 'type' => 'json.json', 'default' => null],
                'outputs' => ['title' => 'ฟิลด์เอาต์พุตเสริม (ใช้สำหรับผลิตภัณฑ์เสมือน)', 'type' => 'json.json', 'default' => false],
                'blog' => ['title' => 'บล็อกหรือ URL เว็บไซต์ที่ไม่บังคับ', 'type' => 'เชือก', 'default' => false],
                'status' => ['title' => 'สถานะสินค้า เปิด/ปิด ค่าเริ่มต้นคือ เปิด', 'type' => 'แจกแจง', 'default' => 'เปิด', 'values' => ['เปิด', 'ปิด']],
                'category_id' => ['title' => 'รหัสหมวดหมู่', 'type' => 'ภายใน', 'default' => null],
                'lead' => ['title' => 'ระยะเวลาดำเนินการเป็นชั่วโมง..', 'type' => 'ภายใน', 'default' => null],
                'style' => ['title' => 'รูปแบบของผลิตภัณฑ์ (Json)', 'type' => 'json.json', 'default' => null],
                'brand' => ['title' => 'สินค้าแบรนด์..', 'type' => 'เชือก', 'default' => null],
                'warranty' => ['title' => 'รายละเอียดการรับประกัน..', 'type' => 'เชือก', 'default' => null],
                'original' => ['title' => 'สินค้านี้เป็นของแท้?', 'type' => 'บูลีน', 'default' => false],
                'return_warranty' => ['title' => 'รับประกันการคืนสินค้าภายในกี่วัน', 'type' => 'ภายใน', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'วัตถุ',
                    '_object' => 'สินค้า',
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
            'description' => 'เพิ่มผลิตภัณฑ์ใหม่ให้กับร้านค้า',
            'url' => 'ร้านค้า/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'กำหนดประเภทของสินค้า/บริการ', 'type' => 'แจกแจง', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'ราคาสินค้า.', 'type' => 'ลอย', 'require' => true],
                'commission' => ['title' => 'เพิ่มค่าคอมมิชชั่นให้กับราคา', 'type' => 'ลอย', 'default' => 0],
                'discount' => ['title' => 'ส่วนลดราคาสินค้าเริ่มต้น', 'type' => 'ลอย', 'default' => 0],
                'dis_start' => ['title' => 'เวลาเริ่มต้นส่วนลดในเขตเวลา UTC (รูปแบบ: YYYY-MM-DD HH:mm:ss)', 'type' => 'วันที่', 'default' => null],
                'dis_end' => ['title' => 'เวลาสิ้นสุดส่วนลดในเขตเวลา UTC (รูปแบบ: YYYY-MM-DD HH:mm:ss)', 'type' => 'วันที่', 'default' => null],
                'currency' => ['title' => 'สกุลเงิน,', 'type' => 'แจกแจง', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "ชื่อผลิตภัณฑ์.", 'type' => 'เชือก', 'require' => true],
                'title_en' => ['title' => 'ชื่อภาษาอังกฤษของผลิตภัณฑ์ (หรือชื่อย่อย)', 'type' => 'เชือก', 'default' => null],
                'message' => ['title' => 'ข้อความแสดงให้ผู้ใช้ทราบหากมีช่องใส่ข้อมูลอยู่ (ใช้สำหรับผลิตภัณฑ์เสมือน)', 'type' => 'เชือก', 'default' => null],
                'inputs' => ['title' => 'ช่องป้อนข้อมูลเสริม (ใช้สำหรับผลิตภัณฑ์เสมือน)', 'type' => 'json.json', 'default' => null],
                'outputs' => ['title' => 'ฟิลด์เอาต์พุตเสริม (ใช้สำหรับผลิตภัณฑ์เสมือน)', 'type' => 'json.json', 'default' => false],
                'blog' => ['title' => 'บล็อกหรือ URL เว็บไซต์ที่ไม่บังคับ', 'type' => 'เชือก', 'default' => false],
                'status' => ['title' => 'สถานะสินค้า เปิด/ปิด ค่าเริ่มต้นคือ เปิด', 'type' => 'แจกแจง', 'default' => 'เปิด', 'values' => ['เปิด', 'ปิด']],
                'category_id' => ['title' => 'รหัสหมวดหมู่', 'type' => 'ภายใน', 'default' => null],
                'lead' => ['title' => 'ระยะเวลาดำเนินการเป็นชั่วโมง..', 'type' => 'ภายใน', 'default' => null],
                'style' => ['title' => 'รูปแบบของผลิตภัณฑ์ (Json)', 'type' => 'json.json', 'default' => null],
                'brand' => ['title' => 'สินค้าแบรนด์..', 'type' => 'เชือก', 'default' => null],
                'warranty' => ['title' => 'รายละเอียดการรับประกัน..', 'type' => 'เชือก', 'default' => null],
                'original' => ['title' => 'สินค้านี้เป็นของแท้?', 'type' => 'บูลีน', 'default' => false],
                'return_warranty' => ['title' => 'รับประกันการคืนสินค้าภายในกี่วัน', 'type' => 'ภายใน', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'วัตถุ',
                    '_object' => 'สินค้า',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'อัปเดตสถานะผลิตภัณฑ์สำเร็จแล้ว', 'type' => 'บูลีน'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'เพิ่มผลิตภัณฑ์ใหม่จากพื้นที่เก็บข้อมูลโดย SKU ไปยังร้านค้า',
            'url' => 'ร้านค้า/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'เชือก', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'หมวดหมู่การตั้งค่าอัตโนมัติ', 'type' => 'บูลีน', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'สินค้าเพิ่มเข้าหมวดหมู่นี้ตามรหัสหมวดหมู่ในร้านค้า', 'type' => 'ภายใน', 'default' => null],

                'price' => ['title' => 'ราคาสินค้า.', 'type' => 'ลอย', 'require' => true],
                'currency' => ['title' => 'สกุลเงิน,', 'type' => 'แจกแจง', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'ปริมาณ', 'type' => 'ภายใน', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'วัตถุ',
                    '_object' => 'สินค้า',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'อัปเดตสถานะผลิตภัณฑ์สำเร็จแล้ว', 'type' => 'บูลีน'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
