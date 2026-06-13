<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone ադմինիստրատորի շրջանակը:',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Ներդրողների մուտքի սահմանափակում:',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Կարդացեք օգտվողի պրոֆիլի մանրամասները:',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Կարդացեք հեռախոսահամարը:',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Կարդացեք և թարմացրեք պահված հասցեները:',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Թարմացրեք օգտվողի պրոֆիլը:',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Տեղադրեք պատվերներ.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Դիտեք պատվերի պատմությունը:',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Մուտք գործեք նվեր քարտեր:',

    AuthServiceProvider::SCOPE_ARTICLES => 'Խմբագրել հոդվածները.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Կառավարեք ծանուցումները:',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Դիտեք խանութների ցուցակը:',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Խմբագրել խանութի մանրամասները:',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Ավելացնել նոր խանութ:',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Ջնջել խանութը։',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Կառավարեք աջակցության տոմսերը:',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Կառավարեք նվեր քարտերը:',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Դիտեք նվեր քարտերը:',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Կառավարեք ՀՏՀ-ները:',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Դիտեք ՀՏՀ-ները:',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Կառավարեք կատեգորիաները:',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Դիտել կատեգորիաները:',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Կառավարեք ապրանքները:',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Դիտեք ապրանքները:',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Դիտեք հաշվետվությունները:',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Կառավարեք ֆինանսական հաշիվները:',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Դիտեք ֆինանսական հաշիվները:',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Խմբագրել խանութի էջերը:',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Դիտեք խանութի էջերը:',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Կառավարեք պահեստը:',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Դիտել պահեստը:',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Կառավարեք անձնակազմի հասանելիությունը:',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Դիտեք անձնակազմի մուտքը:',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Դիտեք պատվերները:',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Կառավարեք պատվերները:',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Կառավարեք բիզնեսի պրոֆիլը:',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Դիտեք բիզնեսի պրոֆիլը:',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Կառավարեք զեղչի կոդերը:',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Դիտեք զեղչի կոդերը:',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Կառավարեք կտրոնները:',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Դիտեք կտրոնները:',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Կառավարեք առաջարկները:',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Դիտեք առաջարկները:',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Կառավարեք cashbacks.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Դիտեք քեշբեքները:',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Կառավարեք վիճակախաղերը:',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Դիտեք վիճակախաղերը:',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Կառավարեք համայնքը:',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Դիտել համայնքը:',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Կառավարեք հաճախորդներին:',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Դիտել հաճախորդներին:',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Կառավարեք բաժանորդագրությունները:',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Դիտեք բաժանորդագրությունները:',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Դիտեք վաճառողի պատվերները:',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Կառավարեք վաճառողի պատվերներն ու վճարումները:',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Կառավարեք կապի մատակարարներին:',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Դիտեք կապի մատակարարները:',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Կատարեք AI հրամաններ:',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Դիտեք AI տեղեկատվությունը:',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Կառավարեք վաճառողի վճարումները:',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Դիտեք վաճառողի վճարումները:',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Դիտեք բիզնեսի պրոֆիլը:',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Կառավարեք բիզնեսի պրոֆիլը:',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Դիտեք գործակալության տեղեկատվությունը:',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Կառավարեք գործակալության տեղեկատվությունը:',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Դիտեք խանութի նշումները:',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Կառավարեք խանութի նշումները:',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Դիտեք մշակողի ակտիվները:',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Կառավարեք մշակողի ակտիվները:',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Մուտք գործեք անձնական տեղեկություններ և հաշվի կարգավորումներ:',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Կառավարեք դրամապանակը և գործարքները:',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Դիտեք դրամապանակի գործարքները:',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Դիտեք OAuth նշանները և հաճախորդները:',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Կառավարեք OAuth նշանները և հաճախորդները:',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Կառավարեք անվտանգության կարգավորումները:',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Կառավարեք մասնաճյուղերը:',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Դիտեք մասնաճյուղերը:',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Կառավարեք տպագիր ձևանմուշները:',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Դիտեք տպագիր ձևանմուշները:',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Կառավարեք ակնարկները:',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Դիտել ակնարկներ.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Դիտեք դրամայնացման մասին տեղեկությունները:',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Կառավարեք դրամայնացման տեղեկատվությունը:',



    'profile' => 'Կարդացեք պրոֆիլի տեղեկատվությունը, ներառյալ անունը, էլփոստի հասցեն, պատկերը և նույնականացման կարգավիճակը:',
    'phone' => 'Կոնտակտային համարի մուտք',
    'address' => 'Կարդացեք և խմբագրեք հասցեն պահպանված հասցեագրքից',
    'buy' => 'Պատվիրեք և գնումներ կատարեք:',
    'order-history' => 'Կարդացեք պատվերի պատմությունը:',
    'my-gift-cards' => 'Մուտք դեպի իմ նվեր քարտերը:',
    'articles' => 'Խմբագրել հոդվածները.',
    'notifications' => 'Ուղարկեք և ստացեք ծանուցումներ:',
    'read-shops' => 'Կարդացեք խանութների ցուցակը:',
    'shop-edit' => 'Խմբագրման հասանելիություն:',
    'shop-contacts' => 'Ստացեք և խմբագրեք կոնտակտային ձևերը:',
    'shop-gift-cards' => 'Քարտերի ստեղծում, խմբագրում և կառավարում:',
    'shop-faqs' => 'Ստեղծեք, խմբագրեք և կառավարեք հաճախակի տրվող հարցերը:',
    'shop-categories' => 'Կատեգորիաների ստեղծում, խմբագրում և կառավարում:',
    'backoffice-write-products' => 'Թույլատրել արտադրանքի ստեղծումը, խմբագրումը և կառավարումը հետին գրասենյակում:',
    'backoffice-read-products' => 'Թույլատրել մուտքը՝ դիտելու ապրանքների ցանկը և արտադրանքի մանրամասն տեղեկությունները հետին գրասենյակում:',
    'shop-read-reports' => 'Կարդացեք տեղեկատվություն և հաշվետվություններ:',
    'shop-socials' => 'Խմբագրել խանութի սոցիալական ցանցերը:',
    'shop-accounts' => 'Խմբագրել և ջնջել խանութի հետ կապված ֆինանսական հաշիվները:',
    'shop-menus' => 'Խմբագրել խանութի ընտրացանկերը:',
    'shop-pages' => 'Խմբագրել խանութի էջերը:',
    'shop-warehouse' => 'Խմբագրել խանութի պահեստը',
    'shop-permissions' => 'Դիտեք և խմբագրեք խանութի հասանելիությունը:',
    'shop-process-center' => 'Կառավարեք ստացված պատվերները:',
    'shop-profile' => 'Կառավարեք խանութի պրոֆիլները:',
    'shop-discount-code' => 'Կառավարեք զեղչի կոդերը:',
    'shop-coupon' => 'Կառավարեք կտրոնները:',
    'shop-offer' => 'Կառավարեք առաջարկները:',
    'shop-cashback' => 'Կառավարեք cashbacks.',
    'shop-lottery' => 'Կառավարեք վիճակախաղերը:',
    'shop-community' => 'Կառավարեք համայնքը:',
    'shop-customers' => 'Կառավարեք հաճախորդներին:',
    'shop-ribbon' => 'Կառավարեք Ribbon-ի բաժանորդագրությունները:',
    'community-read' => 'Կարդացեք Selldone համայնքը:',
    'community-write' => 'Գրեք վաճառված համայնք:',
    'profile-write' => 'Գրեք օգտվողի պրոֆիլի տվյալները:',
    'vendor-read' => 'Մատչելիություն վաճառողի պատվերների կատարման գործողություններին:',
    'vendor-write' => 'Փոխել վաճառողի պատվերները, վճարումները և այլ տեղեկությունները:',
    'connect-providers' => 'Ավելացնել, կարդալ և գրել միացնել մատակարարներին:',
    'personal-identification' => 'Կարդացեք անձնական տվյալները, մուտքերը և հաշվի կարգավորումները:',
    'accounts' => 'Մուտք գործել դրամապանակներ, կարդալ գործարքներ և լիցքավորման պատմություններ:',
    'shop-add' => 'Ավելացնել նոր խանութ:',
    'shop-delete' => 'Հեռացրեք խանութը:',
    'shop-ai-write' => 'Թույլ է տալիս օգտվողին կատարել AI հրամաններ:',
    'shop-ai-read' => 'Թույլ է տալիս օգտվողին մուտք գործել AI տեղեկատվություն առանց հրամանների կատարման:',
    'vendor-payment' => 'Թույլ է տալիս օգտվողին ավելացնել վճարումների գրառումներ վաճառողների համար կամ փոխանցել միջոցներ իրենց միացված հաշիվների միջոցով, օրինակ՝ Stripe Connect:',
    'company-read' => 'Թույլ է տալիս կարդալ բիզնեսի պրոֆիլի տեղեկատվությունը:',
    'company-write' => 'Թույլ է տալիս կարդալ և գրել բիզնեսի պրոֆիլի տեղեկությունները:',
    'agency-read' => 'Թույլ է տալիս կարդալ գործակալության տեղեկատվությունը:',
    'agency-write' => 'Թույլ է տալիս կարդալ և գրել գործակալության տեղեկատվությունը:',
    'note-read' => 'Թույլ է տալիս կարդալ խանութի նշումները:',
    'note-write' => 'Թույլ է տալիս կարդալ և գրել խանութի գրառումները:',
    'developer-read' => 'Թույլ է տալիս կարդալ մշակողների ակտիվները:',
    'developer-write' => 'Թույլ է տալիս կարդալ և գրել մշակողների ակտիվները:',
    'tokens-read' => 'Կարդացեք Oauth նշանները և հաճախորդները:',
    'tokens-write' => 'Գրեք Oauth նշաններ և հաճախորդներ:',
];
