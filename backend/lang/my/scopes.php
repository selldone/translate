<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone စီမံခန့်ခွဲသူနယ်ပယ်။',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'ရင်းနှီးမြှုပ်နှံသူ ဝင်ရောက်ခွင့်ကို ကန့်သတ်ထားသည်။',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'အသုံးပြုသူပရိုဖိုင်အသေးစိတ်ကိုဖတ်ပါ။',
    AuthServiceProvider::SCOPE_USER_PHONE => 'ဖုန်းနံပါတ်ကိုဖတ်ပါ။',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'သိမ်းဆည်းထားသောလိပ်စာများကို ဖတ်ပြီး အပ်ဒိတ်လုပ်ပါ။',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'အသုံးပြုသူပရိုဖိုင်ကို အပ်ဒိတ်လုပ်ပါ။',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'အော်ဒါတင်ပါ။',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'မှာယူမှုမှတ်တမ်းကို ကြည့်ရှုပါ။',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'လက်ဆောင်ကတ်များကို အသုံးပြုပါ။',

    AuthServiceProvider::SCOPE_ARTICLES => 'ဆောင်းပါးများကို တည်းဖြတ်ပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'အသိပေးချက်များကို စီမံပါ။',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'ဆိုင်စာရင်းကိုကြည့်ပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'ဆိုင်အသေးစိတ်ကို တည်းဖြတ်ပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'ဆိုင်အသစ်ထည့်ပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'ဆိုင်ကိုဖျက်ပါ။',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'ပံ့ပိုးမှုလက်မှတ်များကို စီမံပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'လက်ဆောင်ကတ်များကို စီမံပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'လက်ဆောင်ကတ်များကို ကြည့်ပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'FAQs များကို စီမံပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'FAQs များကို ကြည့်ရှုပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'အမျိုးအစားများကို စီမံပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'အမျိုးအစားများကို ကြည့်ရှုပါ။',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'ထုတ်ကုန်များကိုစီမံခန့်ခွဲ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'ထုတ်ကုန်များကိုကြည့်ရှုပါ။',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'အစီရင်ခံစာများကိုကြည့်ရှုပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'ငွေကြေးအကောင့်များကို စီမံခန့်ခွဲပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'ငွေကြေးအကောင့်များကိုကြည့်ရှုပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'စတိုးဆိုင်စာမျက်နှာများကို တည်းဖြတ်ပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'စတိုးဆိုင်စာမျက်နှာများကိုကြည့်ရှုပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'ဂိုဒေါင်ကို စီမံခန့်ခွဲပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'ဂိုဒေါင်ကို ကြည့်ပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'ဝန်ထမ်းဝင်ရောက်ခွင့်ကို စီမံပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'ဝန်ထမ်းများဝင်ရောက်ကြည့်ရှုပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'အော်ဒါများကိုကြည့်ပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'အမိန့်များကို စီမံပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'လုပ်ငန်းပရိုဖိုင်ကို စီမံပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'လုပ်ငန်းပရိုဖိုင်ကို ကြည့်ရှုပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'လျှော့စျေးကုဒ်များကို စီမံပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'လျှော့စျေးကုဒ်များကိုကြည့်ပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'ကူပွန်များကို စီမံပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'ကူပွန်များကို ကြည့်ပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'ကမ်းလှမ်းမှုများကို စီမံပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'ကမ်းလှမ်းမှုများကို ကြည့်ရှုပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'ငွေသားကို စီမံခန့်ခွဲပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'cashbacks ကိုကြည့်ပါ။',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'ထီများကို စီမံပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'ကံစမ်းမဲများကို ကြည့်ရှုပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'အသိုင်းအဝိုင်းကို စီမံခန့်ခွဲပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'အသိုင်းအဝိုင်းကိုကြည့်ပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'ဖောက်သည်များကို စီမံခန့်ခွဲပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'ဖောက်သည်များကိုကြည့်ပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'စာရင်းသွင်းမှုများကို စီမံပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'စာရင်းသွင်းမှုများကို ကြည့်ရှုပါ။',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'ရောင်းချသူ မှာယူမှုများကို ကြည့်ရှုပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'စျေးရောင်းချသူ မှာယူမှုများနှင့် ငွေပေးချေမှုများကို စီမံပါ။',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'ချိတ်ဆက်ပံ့ပိုးပေးသူများကို စီမံပါ။',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'ချိတ်ဆက်ပေးသူများကို ကြည့်ရှုပါ။',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'AI အမိန့်များကို လုပ်ဆောင်ပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'AI အချက်အလက်ကို ကြည့်ပါ။',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'ရောင်းချသူ ငွေပေးချေမှုများကို စီမံပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'ရောင်းချသူငွေပေးချေမှုများကိုကြည့်ပါ။',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'လုပ်ငန်းပရိုဖိုင်ကို ကြည့်ရှုပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'လုပ်ငန်းပရိုဖိုင်ကို စီမံပါ။',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'အေဂျင်စီအချက်အလက်ကို ကြည့်ပါ။',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'အေဂျင်စီအချက်အလက်ကို စီမံခန့်ခွဲပါ။',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'ဆိုင်မှတ်စုများကို ကြည့်ပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'ဆိုင်မှတ်စုများကို စီမံပါ။',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'developer ပိုင်ဆိုင်မှုများကိုကြည့်ပါ။',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'developer ပိုင်ဆိုင်မှုများကို စီမံခန့်ခွဲပါ။',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'ကိုယ်ရေးကိုယ်တာအချက်အလက်နှင့် အကောင့်ဆက်တင်များကို ဝင်ရောက်ကြည့်ရှုပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'ပိုက်ဆံအိတ်နှင့် ငွေလွှဲမှုများကို စီမံပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'ပိုက်ဆံအိတ်အရောင်းအ၀ယ်များကိုကြည့်ရှုပါ။',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth တိုကင်များနှင့် ဖောက်သည်များကို ကြည့်ပါ။',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth တိုကင်များနှင့် ဖောက်သည်များကို စီမံခန့်ခွဲပါ။',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'လုံခြုံရေးဆက်တင်များကို စီမံပါ။',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'ဆက်နွယ်မှုများကို စီမံခန့်ခွဲပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'ဆက်စပ်မှုများကို ကြည့်ရှုပါ။',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'ပရင့် နမူနာများကို စီမံပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'ပုံနှိပ်ပုံစံများကို ကြည့်ပါ။',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'သုံးသပ်ချက်များကို စီမံပါ။',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'သုံးသပ်ချက်များကို ကြည့်ပါ။',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'ငွေရှာခြင်း အချက်အလက်ကို ကြည့်ပါ။',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'ငွေရှာခြင်း အချက်အလက်ကို စီမံပါ။',



    'profile' => 'အမည်၊ အီးမေးလ်လိပ်စာ၊ ရုပ်ပုံနှင့် အထောက်အထားစိစစ်ခြင်း အခြေအနေအပါအဝင် ပရိုဖိုင်အချက်အလက်ကို ဖတ်ပါ။',
    'phone' => 'ဆက်သွယ်ရန်ဖုန်းနံပါတ်',
    'address' => 'သိမ်းဆည်းထားသော လိပ်စာစာအုပ်မှ လိပ်စာကို ဖတ်ပြီး တည်းဖြတ်ပါ။',
    'buy' => 'Order & Shop Order များ။',
    'order-history' => 'အော်ဒါမှတ်တမ်းကို ဖတ်ပါ။',
    'my-gift-cards' => 'ကျွန်ုပ်၏ လက်ဆောင်ကတ်များကို အသုံးပြုခွင့်။',
    'articles' => 'ဆောင်းပါးများကို တည်းဖြတ်ပါ။',
    'notifications' => 'အကြောင်းကြားချက်များကို ပေးပို့ပြီး လက်ခံရယူပါ။',
    'read-shops' => 'Store List ကိုဖတ်ပါ။',
    'shop-edit' => 'တည်းဖြတ်ခွင့်ကို သိမ်းဆည်းပါ။',
    'shop-contacts' => 'အဆက်အသွယ်ပုံစံများကို လက်ခံပြီး တည်းဖြတ်ပါ။',
    'shop-gift-cards' => 'ကတ်များကို ဖန်တီးခြင်း၊ တည်းဖြတ်ခြင်းနှင့် စီမံခန့်ခွဲခြင်း။',
    'shop-faqs' => 'မကြာခဏမေးလေ့ရှိသောမေးခွန်းများကို ဖန်တီး၊ တည်းဖြတ်ပြီး စီမံခန့်ခွဲပါ။',
    'shop-categories' => 'အမျိုးအစားများကို ဖန်တီးခြင်း၊ တည်းဖြတ်ခြင်းနှင့် စီမံခန့်ခွဲခြင်း။',
    'backoffice-write-products' => 'နောက်ရုံးရှိ ထုတ်ကုန်များ၏ ဖန်တီးမှု၊ တည်းဖြတ်မှုနှင့် စီမံခန့်ခွဲမှုတို့ကို လုပ်ပိုင်ခွင့်ပေးပါ။',
    'backoffice-read-products' => 'ထုတ်ကုန်စာရင်းနှင့် ကုန်ပစ္စည်းအသေးစိတ်အချက်အလက်များကို နောက်ဖေးရုံးတွင် ကြည့်ရှုရန် ဝင်ရောက်ခွင့်ပြုပါ။',
    'shop-read-reports' => 'သတင်းအချက်အလက်နှင့်အစီရင်ခံစာများကိုဖတ်ပါ။',
    'shop-socials' => 'စတိုးဆိုင် လူမှုကွန်ရက်များကို တည်းဖြတ်ပါ။',
    'shop-accounts' => 'စတိုးဆိုင်ချိတ်ဆက်ထားသော ငွေကြေးအကောင့်များကို တည်းဖြတ်ပြီး ဖျက်ပါ။',
    'shop-menus' => 'စတိုးဆိုင်မီနူးများကိုတည်းဖြတ်ပါ။',
    'shop-pages' => 'စတိုးဆိုင်စာမျက်နှာများကို တည်းဖြတ်ပါ။',
    'shop-warehouse' => 'စတိုး ဂိုဒေါင်ကို တည်းဖြတ်ပါ။',
    'shop-permissions' => 'စတိုးဆိုင်အသုံးပြုခွင့်ကို ကြည့်ရှုပြီး တည်းဖြတ်ပါ။',
    'shop-process-center' => 'လက်ခံရရှိသောအမိန့်များကိုစီမံပါ။',
    'shop-profile' => 'စတိုးဆိုင်ပရိုဖိုင်များကို စီမံပါ။',
    'shop-discount-code' => 'လျှော့စျေးကုဒ်များကို စီမံပါ။',
    'shop-coupon' => 'ကူပွန်များကို စီမံပါ။',
    'shop-offer' => 'ကမ်းလှမ်းမှုများကို စီမံပါ။',
    'shop-cashback' => 'ငွေသားကို စီမံခန့်ခွဲပါ။',
    'shop-lottery' => 'ထီများကို စီမံပါ။',
    'shop-community' => 'အသိုင်းအဝိုင်းကို စီမံခန့်ခွဲပါ။',
    'shop-customers' => 'ဖောက်သည်များကို စီမံခန့်ခွဲပါ။',
    'shop-ribbon' => 'Ribbon စာရင်းသွင်းမှုများကို စီမံပါ။',
    'community-read' => 'Selldone အသိုင်းအဝိုင်းကိုဖတ်ပါ။',
    'community-write' => 'ရောင်းပြီးလားတော့ မသိဘူး။',
    'profile-write' => 'အသုံးပြုသူပရိုဖိုင်အချက်အလက်ကိုရေးပါ။',
    'vendor-read' => 'ရောင်းသူအမိန့်စာများ၏ ပြည့်စုံသောလုပ်ဆောင်ချက်များကို ရရှိရေး။',
    'vendor-write' => 'မှာယူမှု၊ ငွေပေးချေမှုနှင့် ရောင်းချသူ၏ အခြားအချက်အလက်များကို ပြောင်းလဲပါ။',
    'connect-providers' => 'ချိတ်ဆက်ပံ့ပိုးပေးသူများကို ထည့်၊ ဖတ်၊ ရေးပါ။',
    'personal-identification' => 'ကိုယ်ရေးကိုယ်တာအချက်အလက်၊ ဝင်ရောက်ခွင့်နှင့် အကောင့်ဖွဲ့စည်းပုံတို့ကို ဖတ်ပါ။',
    'accounts' => 'ပိုက်ဆံအိတ်များသို့ ဝင်ရောက်ခြင်း၊ ငွေပေးငွေယူများနှင့် ငွေဖြည့်မှတ်တမ်းများကို ဖတ်ပါ။',
    'shop-add' => 'ဆိုင်အသစ်ထည့်ပါ။',
    'shop-delete' => 'ဆိုင်ကို ဖယ်ရှားပါ။',
    'shop-ai-write' => 'အသုံးပြုသူကို AI ညွှန်ကြားချက်များကို လုပ်ဆောင်ရန် ခွင့်ပြုသည်။',
    'shop-ai-read' => 'ညွှန်ကြားချက်များကို မလုပ်ဆောင်ဘဲ အသုံးပြုသူအား AI အချက်အလက်များကို ဝင်ရောက်ကြည့်ရှုခွင့်ပေးသည်။',
    'vendor-payment' => 'သုံးစွဲသူအား ရောင်းချသူများအတွက် ငွေပေးချေမှုမှတ်တမ်းများ ထည့်ရန် သို့မဟုတ် Stripe Connect ကဲ့သို့ ၎င်းတို့၏ ချိတ်ဆက်ထားသော အကောင့်များမှတစ်ဆင့် ငွေလွှဲခွင့်ပြုသည်။',
    'company-read' => 'လုပ်ငန်းပရိုဖိုင်အချက်အလက်ကို ဖတ်ခွင့်ပြုသည်။',
    'company-write' => 'လုပ်ငန်းပရိုဖိုင်အချက်အလက်ကို ဖတ်ပြီးရေးခွင့်ပြုသည်။',
    'agency-read' => 'အေဂျင်စီအချက်အလက်ကို ဖတ်ခွင့်ပြုသည်။',
    'agency-write' => 'အေဂျင်စီအချက်အလက်ကို ဖတ်ရှုနိုင်၊ ရေးသားခွင့် ပြုသည်။',
    'note-read' => 'ဆိုင်မှတ်စုများကို ဖတ်ခွင့်ပြုပါ။',
    'note-write' => 'ဆိုင်မှတ်စုများကို ဖတ်ရှုနိုင်စေပါသည်။',
    'developer-read' => 'ဆော့ဖ်ဝဲရေးသားသူ ပိုင်ဆိုင်မှုများကို ဖတ်ခွင့်ပြုသည်။',
    'developer-write' => 'ဆော့ဖ်ဝဲရေးသားသူအား ဖတ်ရှုနိုင်စေရန် ခွင့်ပြုပေးပါသည်။',
    'tokens-read' => 'Oauth တိုကင်များနှင့် ဖောက်သည်များကို ဖတ်ပါ။',
    'tokens-write' => 'Oauth တိုကင်များနှင့် clients များကိုရေးပါ။',
];
