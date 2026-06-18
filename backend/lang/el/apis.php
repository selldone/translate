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
            'description' => 'Λάβετε τη λίστα προϊόντων του καταστήματος.',
            'url' => 'shops/{shop_id}/products/all-admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'parameters' => [
                'available' => ['title' => 'Εμφάνιση μόνο διαθέσιμων προϊόντων. Μπορεί να είναι αληθινό ή ψευδές.', 'type' => 'boolean', 'default' => false],
                'with_parent' => ['title' => 'Αποκτήστε την ιεραρχία της γονικής κατηγορίας. Μπορεί να είναι αληθινό ή ψευδές.', 'type' => 'boolean', 'default' => false],
                'offset' => ['title' => 'Μετατόπιση της λίστας προϊόντων (για σελιδοποίηση).', 'type' => 'ενθ', 'default' => 0],
                'limit' => ['title' => 'Αριθμός προϊόντων στη λίστα (για σελιδοποίηση).', 'type' => 'ενθ', 'default' => 20],
                'sort' => ['title' => 'Τύπος ταξινόμησης λίστας', 'type' => 'αρίθμηση', 'default' => null, 'values' => [null, 'σχετικές', 'most_visited', 'πιο_δημοφιλές', 'νεότερο', 'μπεστ σέλερ', 'φθηνότερο', 'πιο_ακριβό', 'τυχαία', 'σχετικές', 'αγαπημένο', 'τυχαία']],
                'product_id' => ['title' => 'Προϊόν ID που χρησιμοποιείται για την επιστροφή σχετικών προϊόντων (ταξινόμηση = σχετικά).', 'type' => 'ενθ', 'default' => null],
                'set' => ['title' => 'Σύνολο δεδομένων προϊόντος. Μπορεί να είναι null ή spec (null: προεπιλογή, spec: βελτιστοποιημένη για ανάκτηση προδιαγραφών).', 'type' => 'αρίθμηση', 'default' => null, 'values' => [null, 'spec']],
                'search' => ['title' => 'Αναζήτηση κειμένου', 'type' => 'χορδή', 'default' => null],
                'search_type' => ['title' => 'Τύπος αναζήτησης. Μπορεί να είναι null ή κατηγορίας.', 'type' => 'αρίθμηση', 'default' => null, 'values' => [null, 'κατηγορία']],
                'dir' => ['title' => 'Κατηγορία ID ή όνομα. Λαμβάνει προϊόντα σε αυτήν την κατηγορία όταν οριστεί.', 'type' => 'οποιαδήποτε', 'default' => null],
                'products_only' => ['title' => 'Λάβετε μόνο προϊόντα (δεν περιλαμβάνονται οι κατηγορίες).', 'type' => 'boolean', 'default' => false],
                'categories_only' => ['title' => 'Λάβετε μόνο κατηγορίες (τα προϊόντα δεν περιλαμβάνονται).', 'type' => 'boolean', 'default' => false],
                'need_full_variants' => ['title' => 'Λάβετε πλήρεις πληροφορίες παραλλαγής.', 'type' => 'boolean', 'default' => false],
                'optimized' => ['title' => '(Μόνο όταν λαμβάνετε προϊόντα ως διαχειριστής) Λάβετε τη λίστα προϊόντων χωρίς τιμή, τιμή ή στατιστικά στοιχεία.', 'type' => 'boolean', 'default' => false],

            ],

            'response' => [
                'products' => [
                    '_type' => 'συστοιχία',
                    '_object' => 'Προϊόν',
                    'structure' => Product::CustomStructure('id,shop_id,type,price,currency,commission,discount,dis_start,dis_end,title,title_en,sku,mpn,icon,quantity,visits,original,rate,rate_count,sells,status,variants')
                ],
                'folders' => [
                    '_type' => 'συστοιχία',
                    '_object' => 'Κατηγορία',
                    'structure' => ShopCategory::CustomStructure('id,icon,title,name,description,visits,products,categories')
                ],
                'parent' => [
                    '_type' => 'αντικείμενο',
                    '_object' => 'Κατηγορία',
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
            'description' => 'Λάβετε πληροφορίες και στατιστικά για το προϊόν.',
            'url' => 'shops/{shop_id}/products/{product_id}/admin',
            'method' => 'GET',
            'headers' => StandardJsonHeaders,
            'response' => [
                'product' => [
                    '_type' => 'αντικείμενο',
                    '_object' => 'Προϊόν',
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
                    '_type' => 'συστοιχία',
                    '_object' => 'Προϊόν-Δεδομένα',
                    'title' => 'δεδομένα των τελευταίων 30 ημερών',
                    'structure' => ProductData::STRUCTURE
                ],

                'orderQue' => [
                    'title' => 'Παραγγελίες για πληροφορίες.',
                    'type' => 'Εικονική: μέτρηση (int)|Φυσική: [count, delivery_state] (πίνακας)'
                ],

                'new_comments_count' => [
                    'title' => 'Τα νέα σχόλια μετράνε.',
                    'type' => 'ενθ'
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
            'description' => 'Προσθήκη νέου προϊόντος στο κατάστημα.',
            'url' => 'shops/{shop_id}/product/add',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Ορίστε τον τύπο του προϊόντος/υπηρεσίας.', 'type' => 'αρίθμηση', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Τιμή του προϊόντος.', 'type' => 'επιπλέουν', 'require' => true],
                'commission' => ['title' => 'Προσθέστε προμήθεια στην τιμή.', 'type' => 'επιπλέουν', 'default' => 0],
                'discount' => ['title' => 'Έκπτωση στην προεπιλεγμένη τιμή του προϊόντος.', 'type' => 'επιπλέουν', 'default' => 0],
                'dis_start' => ['title' => 'Ώρα έναρξης έκπτωσης στη ζώνη ώρας UTC (μορφή: ΕΕΕΕ-ΜΜ-ΗΗ HH:mm:ss).', 'type' => 'ημερομηνία', 'default' => null],
                'dis_end' => ['title' => 'Ώρα λήξης έκπτωσης στη ζώνη ώρας UTC (μορφή: ΕΕΕΕ-ΜΜ-ΗΗ HH:mm:ss).', 'type' => 'ημερομηνία', 'default' => null],
                'currency' => ['title' => 'Νόμισμα,', 'type' => 'αρίθμηση', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Τίτλος προϊόντος.", 'type' => 'χορδή', 'require' => true],
                'title_en' => ['title' => 'Αγγλικός τίτλος του προϊόντος (ή υπότιτλος)', 'type' => 'χορδή', 'default' => null],


                'sku' => ['title' => 'SKU', 'type' => 'χορδή', 'default' => null],
                'mpn' => ['title' => 'MPN', 'type' => 'χορδή', 'default' => null],
                'gtin' => ['title' => "Παγκόσμιος Αριθμός Εμπορίου Προϊόντος.", 'type' => 'χορδή', 'default' => null],
                'gpc' => ['title' => 'Κωδικός κατηγορίας προϊόντων Google.', 'type' => 'ενθ', 'default' => null],
                'condition' => ['title' => "Η τρέχουσα κατάσταση του προϊόντος στο κατάστημά σας.", 'type' => 'αρίθμηση', 'default' => ProductCondition::NEW, 'values' => ProductCondition::All],


                'message' => ['title' => 'Εμφάνιση μηνύματος στον χρήστη εάν υπάρχουν πεδία εισαγωγής (χρησιμοποιούνται για εικονικά προϊόντα).', 'type' => 'χορδή', 'default' => null],
                'inputs' => ['title' => 'Προαιρετικά πεδία εισαγωγής (χρησιμοποιούνται για εικονικά προϊόντα).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Προαιρετικά πεδία εξόδου (χρησιμοποιούνται για εικονικά προϊόντα).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Προαιρετικό url ιστολογίου ή ιστότοπου.', 'type' => 'χορδή', 'default' => false],
                'status' => ['title' => 'κατάσταση προϊόντος Άνοιγμα / Κλείσιμο, Η προεπιλογή είναι Ανοιχτό.', 'type' => 'αρίθμηση', 'default' => 'Ανοίξτε', 'values' => ['Ανοίξτε', 'Κλείσιμο']],
                'category_id' => ['title' => 'αναγνωριστικό κατηγορίας.', 'type' => 'ενθ', 'default' => null],
                'lead' => ['title' => 'Χρόνος παράδοσης σε ώρες..', 'type' => 'ενθ', 'default' => null],
                'style' => ['title' => 'Στυλ προϊόντος (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Μάρκα προϊόντος..', 'type' => 'χορδή', 'default' => null],
                'warranty' => ['title' => 'περιγραφή εγγύησης..', 'type' => 'χορδή', 'default' => null],
                'original' => ['title' => 'Αυτό το προϊόν είναι πρωτότυπο;', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Εγγύηση επιστροφής ανά ημέρες.', 'type' => 'ενθ', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'αντικείμενο',
                    '_object' => 'Προϊόν',
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
            'description' => 'Προσθήκη νέου προϊόντος στο κατάστημα.',
            'url' => 'shops/{shop_id}/products/{product_id}/edit',
            'method' => 'PUT',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'type' => ['title' => 'Ορίστε τον τύπο του προϊόντος/υπηρεσίας.', 'type' => 'αρίθμηση', 'require' => true, 'values' => ['VIRTUAL', 'PHYSICAL', 'SERVICE', 'FILE']],
                'price' => ['title' => 'Τιμή του προϊόντος.', 'type' => 'επιπλέουν', 'require' => true],
                'commission' => ['title' => 'Προσθέστε προμήθεια στην τιμή.', 'type' => 'επιπλέουν', 'default' => 0],
                'discount' => ['title' => 'Έκπτωση στην προεπιλεγμένη τιμή του προϊόντος.', 'type' => 'επιπλέουν', 'default' => 0],
                'dis_start' => ['title' => 'Ώρα έναρξης έκπτωσης στη ζώνη ώρας UTC (μορφή: ΕΕΕΕ-ΜΜ-ΗΗ HH:mm:ss).', 'type' => 'ημερομηνία', 'default' => null],
                'dis_end' => ['title' => 'Ώρα λήξης έκπτωσης στη ζώνη ώρας UTC (μορφή: ΕΕΕΕ-ΜΜ-ΗΗ HH:mm:ss).', 'type' => 'ημερομηνία', 'default' => null],
                'currency' => ['title' => 'Νόμισμα,', 'type' => 'αρίθμηση', 'require' => true, 'values' => Currency::GetCurrenciesList()],
                'title' => ['title' => "Τίτλος προϊόντος.", 'type' => 'χορδή', 'require' => true],
                'title_en' => ['title' => 'Αγγλικός τίτλος του προϊόντος (ή υπότιτλος)', 'type' => 'χορδή', 'default' => null],
                'message' => ['title' => 'Εμφάνιση μηνύματος στον χρήστη εάν υπάρχουν πεδία εισαγωγής (χρησιμοποιούνται για εικονικά προϊόντα).', 'type' => 'χορδή', 'default' => null],
                'inputs' => ['title' => 'Προαιρετικά πεδία εισαγωγής (χρησιμοποιούνται για εικονικά προϊόντα).', 'type' => 'json', 'default' => null],
                'outputs' => ['title' => 'Προαιρετικά πεδία εξόδου (χρησιμοποιούνται για εικονικά προϊόντα).', 'type' => 'json', 'default' => false],
                'blog' => ['title' => 'Προαιρετικό url ιστολογίου ή ιστότοπου.', 'type' => 'χορδή', 'default' => false],
                'status' => ['title' => 'κατάσταση προϊόντος Άνοιγμα / Κλείσιμο, Η προεπιλογή είναι Ανοιχτό.', 'type' => 'αρίθμηση', 'default' => 'Ανοίξτε', 'values' => ['Ανοίξτε', 'Κλείσιμο']],
                'category_id' => ['title' => 'αναγνωριστικό κατηγορίας.', 'type' => 'ενθ', 'default' => null],
                'lead' => ['title' => 'Χρόνος παράδοσης σε ώρες..', 'type' => 'ενθ', 'default' => null],
                'style' => ['title' => 'Στυλ προϊόντος (Json).', 'type' => 'json', 'default' => null],
                'brand' => ['title' => 'Μάρκα προϊόντος..', 'type' => 'χορδή', 'default' => null],
                'warranty' => ['title' => 'περιγραφή εγγύησης..', 'type' => 'χορδή', 'default' => null],
                'original' => ['title' => 'Αυτό το προϊόν είναι πρωτότυπο;', 'type' => 'boolean', 'default' => false],
                'return_warranty' => ['title' => 'Εγγύηση επιστροφής ανά ημέρες.', 'type' => 'ενθ', 'default' => 0],


            ],

            'response' => [
                'product' => [
                    '_type' => 'αντικείμενο',
                    '_object' => 'Προϊόν',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Η κατάσταση του προϊόντος ενημερώθηκε με επιτυχία.', 'type' => 'boolean'],
            ]
        ],



        /**
         * @see ProductRepositoryController::api_addProductBySku()
         */
        'Add new product from repository by SKU' => [
            'auth' => true,
            'scope' => ProductAddController::ADD_NEW_PRODUCT_SCOPE,
            'permissions' => ProductAddController::ADD_NEW_PRODUCT_PERMISSION,
            'description' => 'Προσθέστε νέο προϊόν από το αποθετήριο με sku στο κατάστημα.',
            'url' => 'shops/{shop_id}/product-repository/add-sku',
            'method' => 'POST',
            'headers' => StandardJsonHeaders,
            'parameters' => [

                'sku' => ['title' => 'SKU', 'type' => 'χορδή', 'require' => true, 'default' => null],

                'auto_category' => ['title' => 'Κατηγορία αυτόματης ρύθμισης', 'type' => 'boolean', 'require' => true, 'default' => true],
                'category_id' => ['title' => 'Προσθήκη προϊόντος σε αυτήν την κατηγορία ανά αναγνωριστικό κατηγορίας στο κατάστημα.', 'type' => 'ενθ', 'default' => null],

                'price' => ['title' => 'Τιμή του προϊόντος.', 'type' => 'επιπλέουν', 'require' => true],
                'currency' => ['title' => 'Νόμισμα,', 'type' => 'αρίθμηση', 'require' => true, 'values' => Currency::GetCurrenciesList()],

                'quantity' => ['title' => 'Ποσότητα', 'type' => 'ενθ', 'default' => 0],

            ],

            'response' => [
                'product' => [
                    '_type' => 'αντικείμενο',
                    '_object' => 'Προϊόν',
                    'structure' => Product::STRUCTURE
                ],
                'success' => ['title' => 'Η κατάσταση του προϊόντος ενημερώθηκε με επιτυχία.', 'type' => 'boolean'],
            ]
        ],


    ],







/*
    'Address Book' => [

    ],*/

];
