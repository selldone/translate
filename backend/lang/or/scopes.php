<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone ବ୍ୟବସ୍ଥାପକ ପରିସର |',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'ନିବେଶକଙ୍କ ପ୍ରବେଶ ଉପରେ ପ୍ରତିବନ୍ଧକ |',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'ବ୍ୟବହାରକାରୀ ପ୍ରୋଫାଇଲ୍ ବିବରଣୀ ପ Read ଼ନ୍ତୁ |',
    AuthServiceProvider::SCOPE_USER_PHONE => 'ଫୋନ୍ ନମ୍ବର ପ Read ନ୍ତୁ |',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'ସଞ୍ଚିତ ଠିକଣା ପ Read ନ୍ତୁ ଏବଂ ଅଦ୍ୟତନ କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'ଉପଭୋକ୍ତା ପ୍ରୋଫାଇଲ୍ ଅଦ୍ୟତନ କରନ୍ତୁ |',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'ଅର୍ଡର ରଖନ୍ତୁ |',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'କ୍ରମ ଇତିହାସ ଦେଖନ୍ତୁ |',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'ଉପହାର କାର୍ଡଗୁଡିକ ପ୍ରବେଶ କରନ୍ତୁ |',

    AuthServiceProvider::SCOPE_ARTICLES => 'ପ୍ରବନ୍ଧଗୁଡିକ ସଂପାଦନ କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'ବିଜ୍ଞପ୍ତିଗୁଡିକ ପରିଚାଳନା କରନ୍ତୁ |',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'ଦୋକାନ ତାଲିକା ଦେଖନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'ଦୋକାନର ବିବରଣୀ ସଂପାଦନ କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'ନୂତନ ଦୋକାନ ଯୋଡନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'ଦୋକାନ ବିଲୋପ କରନ୍ତୁ |',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'ସମର୍ଥନ ଟିକେଟ୍ ପରିଚାଳନା କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'ଉପହାର କାର୍ଡ ପରିଚାଳନା କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'ଉପହାର କାର୍ଡ ଦେଖନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'ପ୍ରଶ୍ନଗୁଡିକ ପରିଚାଳନା କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'FAQ ଗୁଡିକ ଦେଖନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'ବର୍ଗଗୁଡିକ ପରିଚାଳନା କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'ବର୍ଗଗୁଡିକ ଦେଖନ୍ତୁ |',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'ଉତ୍ପାଦଗୁଡିକ ପରିଚାଳନା କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'ଉତ୍ପାଦଗୁଡିକ ଦେଖନ୍ତୁ |',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'ରିପୋର୍ଟଗୁଡିକ ଦେଖନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'ଆର୍ଥିକ ଖାତା ପରିଚାଳନା କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'ଆର୍ଥିକ ଖାତା ଦେଖନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'ଷ୍ଟୋର ପୃଷ୍ଠାଗୁଡ଼ିକୁ ସଂପାଦନ କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'ଷ୍ଟୋର ପୃଷ୍ଠାଗୁଡ଼ିକୁ ଦେଖନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'ଗୋଦାମ ପରିଚାଳନା କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'ଗୋଦାମ ଘର ଦେଖନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'କର୍ମଚାରୀଙ୍କ ପ୍ରବେଶ ପରିଚାଳନା କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'କର୍ମଚାରୀଙ୍କ ପ୍ରବେଶ ଦର୍ଶନ କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'ନିର୍ଦ୍ଦେଶଗୁଡିକ ଦେଖନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'ନିର୍ଦ୍ଦେଶଗୁଡିକ ପରିଚାଳନା କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'ବ୍ୟବସାୟ ପ୍ରୋଫାଇଲ୍ ପରିଚାଳନା କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'ବ୍ୟବସାୟ ପ୍ରୋଫାଇଲ୍ ଦେଖନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'ରିହାତି କୋଡ୍ ପରିଚାଳନା କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'ରିହାତି କୋଡ୍ ଦେଖନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'କୁପନ୍ ପରିଚାଳନା କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'କୁପନ୍ ଦେଖନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'ଅଫର୍ ପରିଚାଳନା କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'ଅଫର୍ ଦର୍ଶନ କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'କ୍ୟାସବ୍ୟାକ୍ ପରିଚାଳନା କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'କ୍ୟାସବ୍ୟାକ୍ ଦେଖନ୍ତୁ |',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'ଲଟେରୀ ପରିଚାଳନା କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'ଲଟେରୀ ଦେଖନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'ସମ୍ପ୍ରଦାୟ ପରିଚାଳନା କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'ସମ୍ପ୍ରଦାୟ ଦେଖନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'ଗ୍ରାହକମାନଙ୍କୁ ପରିଚାଳନା କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'ଗ୍ରାହକମାନଙ୍କୁ ଦେଖନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'ସଦସ୍ୟତା ପରିଚାଳନା କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'ସଦସ୍ୟତା ଦେଖନ୍ତୁ |',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'ବିକ୍ରେତା ଅର୍ଡର ଦେଖନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'ବିକ୍ରେତା ଅର୍ଡର ଏବଂ ଦେୟ ପରିଚାଳନା କରନ୍ତୁ |',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'ସଂଯୋଗ ପ୍ରଦାନକାରୀଙ୍କୁ ପରିଚାଳନା କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'ସଂଯୋଗ ପ୍ରଦାନକାରୀଙ୍କୁ ଦେଖନ୍ତୁ |',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'AI ନିର୍ଦ୍ଦେଶଗୁଡ଼ିକୁ ଏକଜେକ୍ୟୁଟ୍ କର |',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'AI ସୂଚନା ଦେଖନ୍ତୁ |',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'ବିକ୍ରେତା ଦେୟ ପରିଚାଳନା କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'ବିକ୍ରେତା ଦେୟ ଦେଖନ୍ତୁ |',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'ବ୍ୟବସାୟ ପ୍ରୋଫାଇଲ୍ ଦେଖନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'ବ୍ୟବସାୟ ପ୍ରୋଫାଇଲ୍ ପରିଚାଳନା କରନ୍ତୁ |',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'ଏଜେନ୍ସି ସୂଚନା ଦେଖନ୍ତୁ |',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'ଏଜେନ୍ସି ସୂଚନା ପରିଚାଳନା କରନ୍ତୁ |',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'ଦୋକାନ ନୋଟଗୁଡିକ ଦେଖନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'ଦୋକାନ ନୋଟ୍ ପରିଚାଳନା କରନ୍ତୁ |',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'ବିକାଶକାରୀ ସମ୍ପତ୍ତିଗୁଡିକ ଦେଖନ୍ତୁ |',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'ବିକାଶକାରୀ ସମ୍ପତ୍ତି ପରିଚାଳନା କରନ୍ତୁ |',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'ବ୍ୟକ୍ତିଗତ ସୂଚନା ଏବଂ ଖାତା ସେଟିଂସମୂହକୁ ପ୍ରବେଶ କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'ୱାଲେଟ୍ ଏବଂ କାରବାର ପରିଚାଳନା କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'ୱାଲେଟ୍ କାରବାର ଦେଖନ୍ତୁ |',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth ଟୋକେନ୍ ଏବଂ କ୍ଲାଏଣ୍ଟ ଦେଖନ୍ତୁ |',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth ଟୋକେନ୍ ଏବଂ ଗ୍ରାହକମାନଙ୍କୁ ପରିଚାଳନା କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'ସୁରକ୍ଷା ସେଟିଂସମୂହ ପରିଚାଳନା କରନ୍ତୁ |',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'ସହଯୋଗୀ ପରିଚାଳନା କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'ଅନୁବନ୍ଧଗୁଡିକ ଦେଖନ୍ତୁ |',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'ମୁଦ୍ରଣ ଟେମ୍ପଲେଟଗୁଡିକ ପରିଚାଳନା କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'ମୁଦ୍ରଣ ଟେମ୍ପଲେଟ୍ ଦେଖନ୍ତୁ |',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'ସମୀକ୍ଷା ପରିଚାଳନା କରନ୍ତୁ |',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'ସମୀକ୍ଷା ଦେଖନ୍ତୁ |',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'ବିମୁଦ୍ରୀକରଣ ସୂଚନା ଦେଖନ୍ତୁ |',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'ବିମୁଦ୍ରୀକରଣ ସୂଚନା ପରିଚାଳନା କରନ୍ତୁ |',



    'profile' => 'ନାମ, ଇମେଲ୍ ଠିକଣା, ପ୍ରତିଛବି ଏବଂ ପ୍ରାମାଣିକିକରଣ ସ୍ଥିତି ସହିତ ପ୍ରୋଫାଇଲ୍ ସୂଚନା ପ Read ନ୍ତୁ |',
    'phone' => 'ଯୋଗାଯୋଗ ନମ୍ବର ପ୍ରବେଶ',
    'address' => 'ସଞ୍ଚିତ ଠିକଣା ପୁସ୍ତକରୁ ଠିକଣା ପ Read ଏବଂ ସଂପାଦନ କର |',
    'buy' => 'ଅର୍ଡର ଏବଂ ଦୋକାନ ଅର୍ଡର |',
    'order-history' => 'କ୍ରମ ଇତିହାସ ପ Read ଼ନ୍ତୁ |',
    'my-gift-cards' => 'ମୋ ଗିଫ୍ଟକାର୍ଡଗୁଡିକୁ ପ୍ରବେଶ',
    'articles' => 'ପ୍ରବନ୍ଧଗୁଡିକ ସଂପାଦନ କରନ୍ତୁ |',
    'notifications' => 'ବିଜ୍ଞପ୍ତି ପଠାନ୍ତୁ ଏବଂ ଗ୍ରହଣ କରନ୍ତୁ |',
    'read-shops' => 'ଷ୍ଟୋର ତାଲିକା ପ Read ଼ନ୍ତୁ |',
    'shop-edit' => 'ସମ୍ପାଦନା ପ୍ରବେଶ ସଂରକ୍ଷଣ କରନ୍ତୁ |',
    'shop-contacts' => 'ଯୋଗାଯୋଗ ଫର୍ମ ଗ୍ରହଣ ଏବଂ ସଂପାଦନ କରନ୍ତୁ |',
    'shop-gift-cards' => 'କାର୍ଡ ସୃଷ୍ଟି, ସମ୍ପାଦନା ଏବଂ ପରିଚାଳନା',
    'shop-faqs' => 'ବାରମ୍ବାର ପଚରାଯାଉଥିବା ପ୍ରଶ୍ନଗୁଡିକ ସୃଷ୍ଟି, ସଂପାଦନ ଏବଂ ପରିଚାଳନା କରନ୍ତୁ |',
    'shop-categories' => 'ବର୍ଗଗୁଡିକ ସୃଷ୍ଟି, ସମ୍ପାଦନା ଏବଂ ପରିଚାଳନା',
    'backoffice-write-products' => 'ପଛ କାର୍ଯ୍ୟାଳୟରେ ଉତ୍ପାଦଗୁଡିକର ସୃଷ୍ଟି, ସମ୍ପାଦନା ଏବଂ ପରିଚାଳନାକୁ ପ୍ରାଧିକୃତ କର |',
    'backoffice-read-products' => 'ବ୍ୟାକ ଅଫିସରେ ଉତ୍ପାଦ ତାଲିକା ଏବଂ ବିସ୍ତୃତ ଉତ୍ପାଦ ସୂଚନା ଦେଖିବାକୁ ପ୍ରବେଶ ଅନୁମତି ଦିଅନ୍ତୁ |',
    'shop-read-reports' => 'ସୂଚନା ଏବଂ ରିପୋର୍ଟ ପ Read ଼ନ୍ତୁ |',
    'shop-socials' => 'ସାମାଜିକ ନେଟୱାର୍କଗୁଡିକ ଷ୍ଟୋର୍ କରନ୍ତୁ |',
    'shop-accounts' => 'ଷ୍ଟୋର-ଲିଙ୍କ୍ ହୋଇଥିବା ଆର୍ଥିକ ଆକାଉଣ୍ଟଗୁଡିକ ସଂପାଦନ ଏବଂ ବିଲୋପ କରନ୍ତୁ |',
    'shop-menus' => 'ଷ୍ଟୋର ମେନୁଗୁଡିକ ସଂପାଦନ କରନ୍ତୁ |',
    'shop-pages' => 'ଷ୍ଟୋର ପୃଷ୍ଠାଗୁଡ଼ିକୁ ସଂପାଦନ କରନ୍ତୁ |',
    'shop-warehouse' => 'ଷ୍ଟୋର ଗୋଦାମ ସଂପାଦନ କରନ୍ତୁ |',
    'shop-permissions' => 'ଷ୍ଟୋର ଆକ୍ସେସ୍ ଦର୍ଶନ ଏବଂ ଏଡିଟ୍ କରନ୍ତୁ |',
    'shop-process-center' => 'ପ୍ରାପ୍ତ ନିର୍ଦ୍ଦେଶଗୁଡିକ ପରିଚାଳନା କରନ୍ତୁ |',
    'shop-profile' => 'ଷ୍ଟୋର ପ୍ରୋଫାଇଲ୍ ପରିଚାଳନା କରନ୍ତୁ |',
    'shop-discount-code' => 'ରିହାତି କୋଡ୍ ପରିଚାଳନା କରନ୍ତୁ |',
    'shop-coupon' => 'କୁପନ୍ ପରିଚାଳନା କରନ୍ତୁ |',
    'shop-offer' => 'ଅଫର୍ ପରିଚାଳନା କରନ୍ତୁ |',
    'shop-cashback' => 'କ୍ୟାସବ୍ୟାକ୍ ପରିଚାଳନା କରନ୍ତୁ |',
    'shop-lottery' => 'ଲଟେରୀ ପରିଚାଳନା କରନ୍ତୁ |',
    'shop-community' => 'ସମ୍ପ୍ରଦାୟ ପରିଚାଳନା କରନ୍ତୁ |',
    'shop-customers' => 'ଗ୍ରାହକମାନଙ୍କୁ ପରିଚାଳନା କରନ୍ତୁ |',
    'shop-ribbon' => 'ରିବନ୍ ସଦସ୍ୟତା ପରିଚାଳନା କରନ୍ତୁ |',
    'community-read' => 'ସେଲଡୋନ୍ ସମ୍ପ୍ରଦାୟ ପ Read ନ୍ତୁ |',
    'community-write' => 'ସେଲଡୋନ୍ ସମ୍ପ୍ରଦାୟ ଲେଖନ୍ତୁ |',
    'profile-write' => 'ଉପଭୋକ୍ତା ପ୍ରୋଫାଇଲ୍ ସୂଚନା ଲେଖନ୍ତୁ |',
    'vendor-read' => 'ବିକ୍ରେତା ଅର୍ଡରଗୁଡିକର କାର୍ଯ୍ୟଗୁଡ଼ିକ ପାଇଁ ଅଭିଗମ୍ୟତା |',
    'vendor-write' => 'ବିକ୍ରେତାଙ୍କ ଅର୍ଡର, ଦେୟ ଏବଂ ଅନ୍ୟାନ୍ୟ ସୂଚନା ପରିବର୍ତ୍ତନ କରନ୍ତୁ |',
    'connect-providers' => 'ସଂଯୋଗ ପ୍ରଦାନକାରୀଙ୍କୁ ଯୋଡନ୍ତୁ, ପ read ନ୍ତୁ ଏବଂ ଲେଖନ୍ତୁ |',
    'personal-identification' => 'ବ୍ୟକ୍ତିଗତ ସୂଚନା, ଆକ୍ସେସ୍, ଏବଂ ଆକାଉଣ୍ଟ୍ ବିନ୍ୟାସ ପ Read ନ୍ତୁ |',
    'accounts' => 'ୱାଲେଟଗୁଡିକୁ ପ୍ରବେଶ, କାରବାର ଏବଂ ଟପ୍-ଅପ୍ ଇତିହାସ ପ read ଼ନ୍ତୁ |',
    'shop-add' => 'ନୂତନ ଦୋକାନ ଯୋଡନ୍ତୁ |',
    'shop-delete' => 'ଏକ ଦୋକାନ ହଟାନ୍ତୁ |',
    'shop-ai-write' => 'ଉପଭୋକ୍ତାଙ୍କୁ AI ନିର୍ଦ୍ଦେଶଗୁଡ଼ିକୁ ଏକଜେକ୍ୟୁଟ୍ କରିବାକୁ ଅନୁମତି ଦିଏ |',
    'shop-ai-read' => 'ଉପଯୋଗକର୍ତ୍ତାଙ୍କୁ ନିର୍ଦ୍ଦେଶଗୁଡ଼ିକୁ କାର୍ଯ୍ୟକାରୀ ନକରି AI ସୂଚନାକୁ ପ୍ରବେଶ କରିବାକୁ ଅନୁମତି ଦିଏ |',
    'vendor-payment' => 'ଉପଭୋକ୍ତାଙ୍କୁ ବିକ୍ରେତାଙ୍କ ପାଇଁ ଦେୟ ରେକର୍ଡ ଯୋଡିବାକୁ କିମ୍ବା ଷ୍ଟ୍ରାଇପ୍ କନେକ୍ଟ ପରି ସେମାନଙ୍କ ସଂଯୁକ୍ତ ଆକାଉଣ୍ଟ ମାଧ୍ୟମରେ ପାଣ୍ଠି ସ୍ଥାନାନ୍ତର କରିବାକୁ ଅନୁମତି ଦିଏ |',
    'company-read' => 'ବ୍ୟବସାୟ ପ୍ରୋଫାଇଲ୍ ସୂଚନା ପ read ିବାକୁ ଅନୁମତି ଦିଏ |',
    'company-write' => 'ବ୍ୟବସାୟ ପ୍ରୋଫାଇଲ୍ ସୂଚନା ପ read ିବା ଏବଂ ଲେଖିବାକୁ ଅନୁମତି ଦିଏ |',
    'agency-read' => 'ଏଜେନ୍ସି ସୂଚନା ପ read ିବାକୁ ଅନୁମତି ଦିଏ |',
    'agency-write' => 'ଏଜେନ୍ସି ସୂଚନା ପ read ିବାକୁ ଏବଂ ଲେଖିବାକୁ ଅନୁମତି ଦିଏ |',
    'note-read' => 'ଦୋକାନ ନୋଟ୍ ପ read ିବାକୁ ଅନୁମତି ଦିଏ |',
    'note-write' => 'ଦୋକାନ ନୋଟ୍ ପ read ିବା ଏବଂ ଲେଖିବାକୁ ଅନୁମତି ଦିଏ |',
    'developer-read' => 'ବିକାଶକାରୀଙ୍କ ସମ୍ପତ୍ତି ପ read ିବାକୁ ଅନୁମତି ଦିଏ |',
    'developer-write' => 'ବିକାଶକାରୀଙ୍କ ସମ୍ପତ୍ତି ପ read ିବା ଏବଂ ଲେଖିବାକୁ ଅନୁମତି ଦିଏ |',
    'tokens-read' => 'Oauth ଟୋକେନ୍ ଏବଂ କ୍ଲାଏଣ୍ଟ ପ Read ନ୍ତୁ |',
    'tokens-write' => 'Oauth ଟୋକେନ୍ ଏବଂ କ୍ଲାଏଣ୍ଟ ଲେଖନ୍ତୁ |',
];
