<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone alabojuto dopin.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Ihamọ oludokoowo wiwọle.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Ka awọn alaye profaili olumulo.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Ka nọmba foonu.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Ka ati imudojuiwọn awọn adirẹsi ti o fipamọ.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Ṣe imudojuiwọn profaili olumulo.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Gbe awọn ibere.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Wo itan ibere.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Wọle si awọn kaadi ẹbun.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Ṣatunkọ awọn nkan.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Ṣakoso awọn iwifunni.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Wo akojọ itaja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Ṣatunkọ awọn alaye itaja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Fi titun itaja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Pa ile itaja rẹ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Ṣakoso awọn tikẹti atilẹyin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Ṣakoso awọn kaadi ẹbun.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Wo awọn kaadi ẹbun.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Ṣakoso awọn FAQs.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Wo FAQs.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Ṣakoso awọn ẹka.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Wo awọn ẹka.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Ṣakoso awọn ọja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Wo awọn ọja.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Wo awọn ijabọ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Ṣakoso awọn iroyin owo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Wo awọn akọọlẹ owo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Ṣatunkọ awọn oju-iwe itaja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Wo awọn oju-iwe itaja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Ṣakoso awọn ile ise.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Wo ile ise.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Ṣakoso awọn wiwọle osise.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Wo wiwọle osise.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Wo awọn ibere.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Ṣakoso awọn ibere.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Ṣakoso profaili iṣowo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Wo profaili iṣowo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Ṣakoso awọn koodu eni.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Wo awọn koodu ẹdinwo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Ṣakoso awọn kuponu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Wo awọn kuponu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Ṣakoso awọn ipese.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Wo awọn ipese.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Ṣakoso awọn cashbacks.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Wo cashbacks.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Ṣakoso awọn lotteries.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Wo awọn lotiri.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Ṣakoso agbegbe.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Wo agbegbe.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Ṣakoso awọn onibara.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Wo awọn onibara.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Ṣakoso awọn ṣiṣe alabapin.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Wo awọn ṣiṣe alabapin.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Wo awọn aṣẹ ataja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Ṣakoso awọn ibere ataja ati awọn sisanwo.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Ṣakoso awọn olupese asopọ.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Wo awọn olupese asopọ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Ṣiṣe awọn aṣẹ AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Wo AI alaye.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Ṣakoso awọn sisanwo ataja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Wo awọn sisanwo ataja.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Wo profaili iṣowo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Ṣakoso profaili iṣowo.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Wo alaye ibẹwẹ.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Ṣakoso awọn alaye ibẹwẹ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Wo awọn akọsilẹ itaja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Ṣakoso awọn akọsilẹ itaja.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Wo awọn ohun-ini idagbasoke.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Ṣakoso awọn ohun-ini idagbasoke.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Wọle si alaye ti ara ẹni ati awọn eto akọọlẹ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Ṣakoso apamọwọ ati awọn iṣowo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Wo awọn iṣowo apamọwọ.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Wo awọn ami OAuth ati awọn alabara.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Ṣakoso awọn ami OAuth ati awọn alabara.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Ṣakoso awọn eto aabo.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Ṣakoso awọn alafaramo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Wo awọn alafaramo.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Ṣakoso awọn awoṣe titẹ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Wo awọn awoṣe titẹ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Ṣakoso awọn agbeyewo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Wo agbeyewo.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Wo alaye owo.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Ṣakoso awọn alaye owo.',



    'profile' => 'Ka alaye profaili pẹlu orukọ, adirẹsi imeeli, aworan ati ipo ijẹrisi.',
    'phone' => 'Wiwọle nọmba olubasọrọ',
    'address' => 'Ka ati ṣatunkọ adirẹsi lati iwe adirẹsi ti o fipamọ',
    'buy' => 'Bere fun & Itaja Bere fun.',
    'order-history' => 'Ka itan ibere.',
    'my-gift-cards' => 'Wiwọle si awọn kaadi ẹbun mi.',
    'articles' => 'Ṣatunkọ Ìwé.',
    'notifications' => 'Firanṣẹ ati gba awọn iwifunni.',
    'read-shops' => 'Ka Akojọ itaja.',
    'shop-edit' => 'Itaja ṣiṣatunkọ wiwọle.',
    'shop-contacts' => 'Gba ati ṣatunkọ awọn fọọmu olubasọrọ.',
    'shop-gift-cards' => 'Ṣiṣẹda, Ṣatunkọ, ati Ṣiṣakoso Awọn kaadi.',
    'shop-faqs' => 'Ṣẹda, ṣatunkọ, ati ṣakoso awọn ibeere ti a beere nigbagbogbo.',
    'shop-categories' => 'Ṣiṣẹda, Ṣatunkọ, ati Ṣiṣakoso Awọn ẹka.',
    'backoffice-write-products' => 'Fun laṣẹ ẹda, ṣiṣatunṣe, ati iṣakoso awọn ọja ni ọfiisi ẹhin.',
    'backoffice-read-products' => 'Fun laṣẹ wiwọle lati wo atokọ awọn ọja ati alaye ọja ni ẹhin ọfiisi.',
    'shop-read-reports' => 'Ka alaye ati awọn iroyin.',
    'shop-socials' => 'Ṣatunkọ itaja awujo nẹtiwọki.',
    'shop-accounts' => 'Ṣatunkọ ati paarẹ awọn akọọlẹ inawo ti o sopọ mọ ile itaja.',
    'shop-menus' => 'Ṣatunkọ awọn akojọ aṣayan itaja.',
    'shop-pages' => 'Ṣatunkọ awọn oju-iwe itaja.',
    'shop-warehouse' => 'Ṣatunkọ itaja ile ise',
    'shop-permissions' => 'Wo ati ṣatunkọ iraye si ile itaja.',
    'shop-process-center' => 'Ṣakoso awọn ti a gba bibere.',
    'shop-profile' => 'Ṣakoso awọn profaili itaja.',
    'shop-discount-code' => 'Ṣakoso awọn koodu eni.',
    'shop-coupon' => 'Ṣakoso awọn kuponu.',
    'shop-offer' => 'Ṣakoso awọn ipese.',
    'shop-cashback' => 'Ṣakoso awọn cashbacks.',
    'shop-lottery' => 'Ṣakoso awọn lotteries.',
    'shop-community' => 'Ṣakoso agbegbe.',
    'shop-customers' => 'Ṣakoso awọn onibara.',
    'shop-ribbon' => 'Ṣakoso awọn ṣiṣe alabapin Ribbon.',
    'community-read' => 'Ka Selldone awujo.',
    'community-write' => 'Kọ salesdone awujo.',
    'profile-write' => 'Kọ alaye profaili olumulo.',
    'vendor-read' => 'Wiwọle si awọn iṣe imuse ti awọn aṣẹ ataja.',
    'vendor-write' => 'Yi awọn ibere pada, sisanwo ati alaye miiran ti olutaja.',
    'connect-providers' => 'Ṣafikun, ka ati kọ awọn olupese asopọ.',
    'personal-identification' => 'Ka alaye ti ara ẹni, awọn iraye si, ati atunto akọọlẹ.',
    'accounts' => 'Wiwọle si awọn apamọwọ, ka awọn iṣowo ati awọn itan-oke-oke.',
    'shop-add' => 'Fi titun itaja.',
    'shop-delete' => 'Yọ ile itaja kan kuro.',
    'shop-ai-write' => 'Gba olumulo laaye lati ṣiṣẹ awọn aṣẹ AI.',
    'shop-ai-read' => 'Gba olumulo laaye lati wọle si alaye AI laisi ṣiṣe awọn aṣẹ.',
    'vendor-payment' => 'Gba olumulo laaye lati ṣafikun awọn igbasilẹ sisanwo fun awọn olutaja tabi gbe awọn owo lọ nipasẹ awọn akọọlẹ ti o sopọ bi Stripe Connect.',
    'company-read' => 'Gba laaye lati ka alaye profaili iṣowo.',
    'company-write' => 'Gba laaye lati ka ati kọ alaye profaili iṣowo.',
    'agency-read' => 'Faye gba lati ka alaye ibẹwẹ.',
    'agency-write' => 'Faye gba lati ka ati kọ alaye ibẹwẹ.',
    'note-read' => 'Laaye lati ka awọn akọsilẹ itaja.',
    'note-write' => 'Gba laaye lati ka ati kọ awọn akọsilẹ itaja.',
    'developer-read' => 'Laaye lati ka awọn ohun-ini awọn olupilẹṣẹ.',
    'developer-write' => 'Gba laaye lati ka ati kọ awọn ohun-ini idagbasoke.',
    'tokens-read' => 'Ka Oauth àmi ati ibara.',
    'tokens-write' => 'Kọ Oauth àmi ati ibara.',
];
