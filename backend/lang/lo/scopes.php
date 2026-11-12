<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'ຂອບເຂດຜູ້ເບິ່ງແຍງລະບົບ Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'ຈໍາກັດການເຂົ້າເຖິງນັກລົງທຶນ.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'ອ່ານລາຍລະອຽດໂປຣໄຟລ໌ຜູ້ໃຊ້.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'ອ່ານເບີໂທລະສັບ.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'ອ່ານ ແລະອັບເດດທີ່ຢູ່ທີ່ບັນທຶກໄວ້.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'ອັບເດດໂປຣໄຟລ໌ຜູ້ໃຊ້.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'ວາງຄໍາສັ່ງ.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'ເບິ່ງປະຫວັດການສັ່ງຊື້.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'ເຂົ້າເຖິງບັດຂອງຂວັນ.',

    AuthServiceProvider::SCOPE_ARTICLES => 'ແກ້ໄຂບົດຄວາມ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'ຈັດການການແຈ້ງເຕືອນ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'ເບິ່ງລາຍຊື່ຮ້ານຄ້າ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'ແກ້ໄຂລາຍລະອຽດຮ້ານຄ້າ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'ເພີ່ມຮ້ານໃຫມ່.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'ລຶບຮ້ານຄ້າ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'ຈັດການປີ້ສະຫນັບສະຫນູນ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'ຈັດການບັດຂອງຂວັນ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'ເບິ່ງບັດຂອງຂວັນ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'ຈັດການ FAQs.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'ເບິ່ງ FAQs.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'ຈັດການປະເພດ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'ເບິ່ງປະເພດ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'ຄຸ້ມຄອງຜະລິດຕະພັນ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'ເບິ່ງຜະລິດຕະພັນ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'ເບິ່ງບົດລາຍງານ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'ຄຸ້ມຄອງບັນຊີການເງິນ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'ເບິ່ງບັນຊີການເງິນ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'ແກ້ໄຂໜ້າຮ້ານ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'ເບິ່ງໜ້າຮ້ານ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'ຄຸ້ມຄອງສາງ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'ເບິ່ງສາງ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'ຈັດການການເຂົ້າເຖິງພະນັກງານ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'ເບິ່ງການເຂົ້າເຖິງພະນັກງານ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'ເບິ່ງຄໍາສັ່ງ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'ຈັດການຄໍາສັ່ງ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'ຈັດການໂປຣໄຟລ໌ທຸລະກິດ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'ເບິ່ງໂປຣໄຟລ໌ທຸລະກິດ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'ຈັດການລະຫັດສ່ວນຫຼຸດ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'ເບິ່ງລະຫັດສ່ວນຫຼຸດ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'ຈັດການຄູປອງ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'ເບິ່ງຄູປ໋ອງ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'ຈັດການຂໍ້ສະເໜີ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'ເບິ່ງຂໍ້ສະເຫນີ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'ຈັດການເງິນຄືນ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'ເບິ່ງເງິນຄືນ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'ຈັດການຫວຍ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'ເບິ່ງຫວຍ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'ຄຸ້ມຄອງຊຸມຊົນ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'ເບິ່ງຊຸມຊົນ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'ຄຸ້ມຄອງລູກຄ້າ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'ເບິ່ງລູກຄ້າ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'ຈັດການການສະໝັກໃຊ້.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'ເບິ່ງການສະໝັກໃຊ້.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'ເບິ່ງຄໍາສັ່ງຂອງຜູ້ຂາຍ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'ຈັດການຄໍາສັ່ງຂອງຜູ້ຂາຍແລະການຈ່າຍເງິນ.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'ຈັດການຜູ້ໃຫ້ບໍລິການເຊື່ອມຕໍ່.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'ເບິ່ງການເຊື່ອມຕໍ່ຜູ້ໃຫ້ບໍລິການ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'ປະຕິບັດຄໍາສັ່ງ AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'ເບິ່ງຂໍ້ມູນ AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'ຈັດການການຈ່າຍເງິນຂອງຜູ້ຂາຍ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'ເບິ່ງການຈ່າຍເງິນຂອງຜູ້ຂາຍ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'ເບິ່ງໂປຣໄຟລ໌ທຸລະກິດ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'ຈັດການໂປຣໄຟລ໌ທຸລະກິດ.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'ເບິ່ງຂໍ້ມູນອົງການ.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'ຈັດການຂໍ້ມູນອົງການ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'ເບິ່ງບັນທຶກຮ້ານຄ້າ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'ຈັດການບັນທຶກຮ້ານຄ້າ.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'ເບິ່ງຊັບສິນຂອງຜູ້ພັດທະນາ.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'ຈັດການຊັບສິນຂອງຜູ້ພັດທະນາ.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'ເຂົ້າເຖິງຂໍ້ມູນສ່ວນຕົວ ແລະການຕັ້ງຄ່າບັນຊີ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'ຈັດການ wallet ແລະທຸລະກໍາ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'ເບິ່ງທຸລະກໍາ wallet.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'ເບິ່ງໂທເຄັນ OAuth ແລະລູກຄ້າ.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'ຈັດການ OAuth tokens ແລະລູກຄ້າ.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'ຈັດການການຕັ້ງຄ່າຄວາມປອດໄພ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'ຄຸ້ມຄອງສາຂາ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'ເບິ່ງສາຂາ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'ຈັດການແມ່ແບບການພິມ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'ເບິ່ງແມ່ແບບພິມ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'ຈັດການການທົບທວນຄືນ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'ເບິ່ງການທົບທວນຄືນ.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'ເບິ່ງຂໍ້ມູນການສ້າງລາຍໄດ້.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'ຈັດການຂໍ້ມູນການສ້າງລາຍໄດ້.',



    'profile' => 'ອ່ານຂໍ້ມູນໂປຣໄຟລ໌ລວມທັງຊື່, ທີ່ຢູ່ອີເມວ, ຮູບພາບ ແລະສະຖານະການກວດສອບ.',
    'phone' => 'ເບີໂທຕິດຕໍ່',
    'address' => 'ອ່ານ ແລະແກ້ໄຂທີ່ຢູ່ຈາກປຶ້ມທີ່ຢູ່ທີ່ບັນທຶກໄວ້',
    'buy' => 'ສັ່ງຊື້ ແລະສັ່ງຊື້ສິນຄ້າ.',
    'order-history' => 'ອ່ານປະຫວັດການສັ່ງຊື້.',
    'my-gift-cards' => 'ເຂົ້າເຖິງບັດຂອງຂວັນຂອງຂ້ອຍ.',
    'articles' => 'ແກ້ໄຂບົດຄວາມ.',
    'notifications' => 'ສົ່ງແລະຮັບການແຈ້ງເຕືອນ.',
    'read-shops' => 'ອ່ານລາຍການຮ້ານຄ້າ.',
    'shop-edit' => 'ການເຂົ້າເຖິງການແກ້ໄຂຮ້ານ.',
    'shop-contacts' => 'ຮັບ ແລະແກ້ໄຂແບບຟອມຕິດຕໍ່.',
    'shop-gift-cards' => 'ການສ້າງ, ດັດແກ້, ແລະການຄຸ້ມຄອງບັດ.',
    'shop-faqs' => 'ສ້າງ, ແກ້ໄຂ ແລະຈັດການຄຳຖາມທີ່ມັກຖາມເລື້ອຍໆ.',
    'shop-categories' => 'ການສ້າງ, ດັດແກ້, ແລະການຄຸ້ມຄອງຫມວດຫມູ່.',
    'backoffice-write-products' => 'ອະ​ນຸ​ຍາດ​ໃຫ້​ການ​ສ້າງ​, ການ​ແກ້​ໄຂ​, ແລະ​ການ​ຄຸ້ມ​ຄອງ​ຜະ​ລິດ​ຕະ​ພັນ​ໃນ​ຫ້ອງ​ການ​ຫຼັງ​.',
    'backoffice-read-products' => 'ອະນຸຍາດໃຫ້ເຂົ້າເຖິງເພື່ອເບິ່ງລາຍການຜະລິດຕະພັນແລະຂໍ້ມູນລາຍລະອຽດຂອງຜະລິດຕະພັນຢູ່ໃນຫ້ອງການຫລັງ.',
    'shop-read-reports' => 'ອ່ານ​ຂໍ້​ມູນ​ແລະ​ບົດ​ລາຍ​ງານ​.',
    'shop-socials' => 'ແກ້ໄຂເຄືອຂ່າຍສັງຄົມຂອງຮ້ານ.',
    'shop-accounts' => 'ແກ້ໄຂ ແລະລຶບບັນຊີການເງິນທີ່ເຊື່ອມໂຍງຮ້ານຄ້າ.',
    'shop-menus' => 'ແກ້ໄຂເມນູຮ້ານ.',
    'shop-pages' => 'ແກ້ໄຂໜ້າຮ້ານ.',
    'shop-warehouse' => 'ແກ້ໄຂສາງຮ້ານຄ້າ',
    'shop-permissions' => 'ເບິ່ງແລະແກ້ໄຂການເຂົ້າເຖິງຮ້ານ.',
    'shop-process-center' => 'ຈັດການຄໍາສັ່ງທີ່ໄດ້ຮັບ.',
    'shop-profile' => 'ຈັດການໂປຣໄຟລ໌ຮ້ານ.',
    'shop-discount-code' => 'ຈັດການລະຫັດສ່ວນຫຼຸດ.',
    'shop-coupon' => 'ຈັດການຄູປອງ.',
    'shop-offer' => 'ຈັດການຂໍ້ສະເໜີ.',
    'shop-cashback' => 'ຈັດການເງິນຄືນ.',
    'shop-lottery' => 'ຈັດການຫວຍ.',
    'shop-community' => 'ຄຸ້ມຄອງຊຸມຊົນ.',
    'shop-customers' => 'ຄຸ້ມຄອງລູກຄ້າ.',
    'shop-ribbon' => 'ຈັດການການຈອງ Ribbon.',
    'community-read' => 'ອ່ານຊຸມຊົນ Selldone.',
    'community-write' => 'ຂຽນຊຸມຊົນທີ່ຂາຍແລ້ວ.',
    'profile-write' => 'ຂຽນຂໍ້ມູນໂປຣໄຟລ໌ຜູ້ໃຊ້.',
    'vendor-read' => 'ການເຂົ້າເຖິງການປະຕິບັດການປະຕິບັດຕາມຄໍາສັ່ງຂອງຜູ້ຂາຍ.',
    'vendor-write' => 'ການປ່ຽນແປງຄໍາສັ່ງ, ການຈ່າຍເງິນແລະຂໍ້ມູນອື່ນໆຂອງຜູ້ຂາຍ.',
    'connect-providers' => 'ເພີ່ມ, ອ່ານ ແລະຂຽນເຊື່ອມຕໍ່ຜູ້ໃຫ້ບໍລິການ.',
    'personal-identification' => 'ອ່ານຂໍ້ມູນສ່ວນຕົວ, ການເຂົ້າເຖິງ, ແລະການຕັ້ງຄ່າບັນຊີ.',
    'accounts' => 'ເຂົ້າເຖິງກະເປົາເງິນ, ອ່ານທຸລະກຳ ແລະປະຫວັດການຕື່ມເງິນ.',
    'shop-add' => 'ເພີ່ມຮ້ານໃຫມ່.',
    'shop-delete' => 'ເອົາຮ້ານອອກ.',
    'shop-ai-write' => 'ອະນຸຍາດໃຫ້ຜູ້ໃຊ້ປະຕິບັດຄໍາສັ່ງ AI.',
    'shop-ai-read' => 'ອະນຸຍາດໃຫ້ຜູ້ໃຊ້ເຂົ້າເຖິງຂໍ້ມູນ AI ໂດຍບໍ່ມີການປະຕິບັດຄໍາສັ່ງ.',
    'vendor-payment' => 'ອະນຸຍາດໃຫ້ຜູ້ໃຊ້ສາມາດເພີ່ມບັນທຶກການຈ່າຍເງິນສໍາລັບຜູ້ຂາຍຫຼືໂອນເງິນຜ່ານບັນຊີທີ່ເຊື່ອມຕໍ່ຂອງເຂົາເຈົ້າເຊັ່ນ Stripe Connect.',
    'company-read' => 'ອະນຸຍາດໃຫ້ອ່ານຂໍ້ມູນໂປຣໄຟລ໌ທຸລະກິດ.',
    'company-write' => 'ອະນຸຍາດໃຫ້ອ່ານແລະຂຽນຂໍ້ມູນໂປຣໄຟລ໌ທຸລະກິດ.',
    'agency-read' => 'ອະນຸຍາດໃຫ້ອ່ານຂໍ້ມູນຕົວແທນ.',
    'agency-write' => 'ອະນຸຍາດໃຫ້ອ່ານ ແລະຂຽນຂໍ້ມູນອົງການ.',
    'note-read' => 'ອະນຸຍາດໃຫ້ອ່ານບັນທຶກຮ້ານຄ້າ.',
    'note-write' => 'ອະນຸຍາດໃຫ້ອ່ານແລະຂຽນບັນທຶກຮ້ານຄ້າ.',
    'developer-read' => 'ອະນຸຍາດໃຫ້ອ່ານຊັບສິນຂອງຜູ້ພັດທະນາ.',
    'developer-write' => 'ອະນຸຍາດໃຫ້ອ່ານ ແລະຂຽນຊັບສິນຂອງຜູ້ພັດທະນາ.',
    'tokens-read' => 'ອ່ານ Oauth tokens ແລະລູກຄ້າ.',
    'tokens-write' => 'ຂຽນ Oauth tokens ແລະລູກຄ້າ.',
];
