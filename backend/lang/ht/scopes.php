<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone administratè dimansyon.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Aksè envestisè restriksyon.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Li detay pwofil itilizatè.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Li nimewo telefòn.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Li epi mete ajou adrès ki sove yo.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Mete ajou pwofil itilizatè.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Mete lòd.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Gade istwa lòd.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Aksè kat kado.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Edit atik yo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Jere notifikasyon.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Gade lis boutik la.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Edit detay boutik.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Ajoute nouvo boutik.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Efase boutik.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Jere tikè sipò.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Jere kat kado.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Gade kat kado.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Jere FAQ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Gade FAQ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Jere kategori.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Gade kategori yo.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Jere pwodwi yo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Gade pwodwi yo.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Gade rapò yo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Jere kont finansye yo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Gade kont finansye yo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Edite paj magazen yo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Gade paj magazen yo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Jere depo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Gade depo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Jere aksè anplwaye yo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Gade aksè anplwaye yo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Gade lòd.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Jere lòd.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Jere pwofil biznis.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Gade pwofil biznis la.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Jere kòd rabè.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Gade kòd rabè.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Jere koupon.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Gade koupon yo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Jere òf yo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Gade òf yo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Jere kachbak.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Gade kachbak.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Jere lotri.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Gade lotri.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Jere kominote a.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Gade kominote a.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Jere kliyan yo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Gade kliyan yo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Jere abònman.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Gade abònman yo.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Gade lòd vandè yo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Jere lòd vandè ak peman yo.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Jere konekte founisè yo.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Gade founisè konekte yo.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Egzekite kòmandman AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Gade enfòmasyon AI.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Jere peman vandè yo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Gade peman machann yo.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Gade pwofil biznis la.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Jere pwofil biznis.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Gade enfòmasyon ajans lan.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Jere enfòmasyon ajans yo.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Gade nòt boutik yo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Jere nòt boutik.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Gade byen pwomotè yo.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Jere byen pwomotè.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Aksede enfòmasyon pèsonèl ak paramèt kont.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Jere bous ak tranzaksyon yo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Gade tranzaksyon bous yo.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Wè OAuth tokens ak kliyan.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Jere OAuth marqueur ak kliyan.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Jere anviwònman sekirite.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Jere afilye yo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Gade afilye yo.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Jere modèl enprime.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Gade modèl enprime.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Jere revizyon.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Gade revizyon.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Gade enfòmasyon monetizasyon.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Jere enfòmasyon monetizasyon.',



    'profile' => 'Li enfòmasyon pwofil ki gen ladan non, adrès imel, imaj ak estati otantifikasyon.',
    'phone' => 'Aksè nimewo kontak',
    'address' => 'Li epi modifye adrès ki soti nan liv adrès ki sove',
    'buy' => 'Lòd & Boutik Lòd.',
    'order-history' => 'Li istwa lòd.',
    'my-gift-cards' => 'Aksè nan kat kado mwen yo.',
    'articles' => 'Edit atik yo.',
    'notifications' => 'Voye epi resevwa notifikasyon.',
    'read-shops' => 'Li Lis Magazen.',
    'shop-edit' => 'Magazen aksè koreksyon.',
    'shop-contacts' => 'Resevwa epi modifye fòm kontak yo.',
    'shop-gift-cards' => 'Kreye, koreksyon, ak jere kat.',
    'shop-faqs' => 'Kreye, modifye, ak jere kesyon yo poze souvan.',
    'shop-categories' => 'Kreye, koreksyon, ak jere kategori.',
    'backoffice-write-products' => 'Otorize kreyasyon, koreksyon, ak jesyon pwodwi nan biwo a.',
    'backoffice-read-products' => 'Otorize aksè pou wè lis pwodwi yo ak enfòmasyon detaye sou pwodwi nan biwo a.',
    'shop-read-reports' => 'Li enfòmasyon ak rapò.',
    'shop-socials' => 'Edit magazen rezo sosyal yo.',
    'shop-accounts' => 'Edite ak efase kont finansye ki lye ak magazen yo.',
    'shop-menus' => 'Edite meni magazen yo.',
    'shop-pages' => 'Edite paj magazen yo.',
    'shop-warehouse' => 'Edit magazen Depo',
    'shop-permissions' => 'Gade ak modifye aksè nan magazen an.',
    'shop-process-center' => 'Jere lòd resevwa yo.',
    'shop-profile' => 'Jere pwofil magazen yo.',
    'shop-discount-code' => 'Jere kòd rabè.',
    'shop-coupon' => 'Jere koupon.',
    'shop-offer' => 'Jere òf yo.',
    'shop-cashback' => 'Jere kachbak.',
    'shop-lottery' => 'Jere lotri.',
    'shop-community' => 'Jere kominote a.',
    'shop-customers' => 'Jere kliyan yo.',
    'shop-ribbon' => 'Jere abònman Ribbon.',
    'community-read' => 'Li kominote Selldone.',
    'community-write' => 'Ekri selldone kominote.',
    'profile-write' => 'Ekri enfòmasyon pwofil itilizatè.',
    'vendor-read' => 'Aksè nan aksyon pwogrè nan lòd vandè.',
    'vendor-write' => 'Chanje lòd, peman ak lòt enfòmasyon vandè a.',
    'connect-providers' => 'Ajoute, li epi ekri konekte founisè yo.',
    'personal-identification' => 'Li enfòmasyon pèsonèl, aksè, ak konfigirasyon kont.',
    'accounts' => 'Aksè nan bous, tranzaksyon li ak istwa top-up.',
    'shop-add' => 'Ajoute nouvo boutik.',
    'shop-delete' => 'Retire yon boutik.',
    'shop-ai-write' => 'Pèmèt itilizatè a egzekite kòmand AI.',
    'shop-ai-read' => 'Pèmèt itilizatè a jwenn aksè nan enfòmasyon AI san yo pa egzekite kòmandman.',
    'vendor-payment' => 'Pèmèt itilizatè a ajoute dosye peman pou vandè oswa transfè lajan atravè kont konekte yo tankou Stripe Connect.',
    'company-read' => 'Pèmèt li enfòmasyon pwofil biznis.',
    'company-write' => 'Pèmèt li ak ekri enfòmasyon pwofil biznis.',
    'agency-read' => 'Pèmèt li enfòmasyon ajans lan.',
    'agency-write' => 'Pèmèt li ak ekri enfòmasyon ajans lan.',
    'note-read' => 'Pèmèt li nòt boutik.',
    'note-write' => 'Pèmèt li ak ekri nòt boutik.',
    'developer-read' => 'Pèmèt li byen devlopè yo.',
    'developer-write' => 'Pèmèt li ak ekri byen devlopè yo.',
    'tokens-read' => 'Li siy Oauth ak kliyan yo.',
    'tokens-write' => 'Ekri siy Oauth ak kliyan.',
];
