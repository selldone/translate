<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone વ્યવસ્થાપક અવકાશ.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'પ્રતિબંધિત રોકાણકારોની ઍક્સેસ.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'વપરાશકર્તા પ્રોફાઇલ વિગતો વાંચો.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'ફોન નંબર વાંચો.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'સાચવેલા સરનામા વાંચો અને અપડેટ કરો.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'વપરાશકર્તા પ્રોફાઇલ અપડેટ કરો.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'ઓર્ડર આપો.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'ઓર્ડર ઇતિહાસ જુઓ.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'ભેટ કાર્ડ્સ ઍક્સેસ કરો.',

    AuthServiceProvider::SCOPE_ARTICLES => 'લેખો સંપાદિત કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'સૂચનાઓનું સંચાલન કરો.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'દુકાન યાદી જુઓ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'દુકાન વિગતો સંપાદિત કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'નવી દુકાન ઉમેરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'દુકાન કાઢી નાખો.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'સપોર્ટ ટિકિટ મેનેજ કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'ભેટ કાર્ડ મેનેજ કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'ભેટ કાર્ડ જુઓ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'FAQ મેનેજ કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'FAQs જુઓ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'શ્રેણીઓ મેનેજ કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'શ્રેણીઓ જુઓ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'ઉત્પાદનોનું સંચાલન કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'ઉત્પાદનો જુઓ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'અહેવાલો જુઓ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'નાણાકીય ખાતાઓનું સંચાલન કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'નાણાકીય એકાઉન્ટ્સ જુઓ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'સ્ટોર પૃષ્ઠો સંપાદિત કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'સ્ટોર પૃષ્ઠો જુઓ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'વેરહાઉસ મેનેજ કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'વેરહાઉસ જુઓ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'સ્ટાફ ઍક્સેસ મેનેજ કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'સ્ટાફ ઍક્સેસ જુઓ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'ઓર્ડર જુઓ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'ઓર્ડર મેનેજ કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'વ્યવસાય પ્રોફાઇલ મેનેજ કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'વ્યવસાય પ્રોફાઇલ જુઓ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'ડિસ્કાઉન્ટ કોડ મેનેજ કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'ડિસ્કાઉન્ટ કોડ્સ જુઓ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'કૂપન્સ મેનેજ કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'કૂપન્સ જુઓ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'ઑફર્સ મેનેજ કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'ઑફર્સ જુઓ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'કેશબેક મેનેજ કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'કેશબેક જુઓ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'લોટરીઓનું સંચાલન કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'લોટરી જુઓ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'સમુદાયનું સંચાલન કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'સમુદાય જુઓ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'ગ્રાહકોનું સંચાલન કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'ગ્રાહકો જુઓ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'સબ્સ્ક્રિપ્શન્સ મેનેજ કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'સબ્સ્ક્રિપ્શન્સ જુઓ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'વિક્રેતા ઓર્ડર જુઓ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'વિક્રેતા ઓર્ડર્સ અને ચૂકવણીઓનું સંચાલન કરો.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'કનેક્ટ પ્રદાતાઓનું સંચાલન કરો.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'કનેક્ટ પ્રદાતાઓ જુઓ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'AI આદેશો ચલાવો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'AI માહિતી જુઓ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'વિક્રેતા ચુકવણીઓનું સંચાલન કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'વિક્રેતા ચૂકવણીઓ જુઓ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'વ્યવસાય પ્રોફાઇલ જુઓ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'વ્યવસાય પ્રોફાઇલ મેનેજ કરો.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'એજન્સીની માહિતી જુઓ.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'એજન્સી માહિતી મેનેજ કરો.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'દુકાન નોંધો જુઓ.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'દુકાન નોંધો મેનેજ કરો.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'વિકાસકર્તા સંપત્તિઓ જુઓ.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'વિકાસકર્તા સંપત્તિઓનું સંચાલન કરો.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'વ્યક્તિગત માહિતી અને એકાઉન્ટ સેટિંગ્સને ઍક્સેસ કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'વૉલેટ અને વ્યવહારો મેનેજ કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'વોલેટ વ્યવહારો જુઓ.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth ટોકન્સ અને ક્લાયંટ જુઓ.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth ટોકન્સ અને ક્લાયંટનું સંચાલન કરો.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'સુરક્ષા સેટિંગ્સ મેનેજ કરો.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'આનુષંગિકો મેનેજ કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'આનુષંગિકો જુઓ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'પ્રિન્ટ નમૂનાઓ મેનેજ કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'પ્રિન્ટ નમૂનાઓ જુઓ.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'સમીક્ષાઓનું સંચાલન કરો.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'સમીક્ષાઓ જુઓ.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'મુદ્રીકરણ માહિતી જુઓ.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'મુદ્રીકરણ માહિતી મેનેજ કરો.',



    'profile' => 'નામ, ઇમેઇલ સરનામું, છબી અને પ્રમાણીકરણ સ્થિતિ સહિત પ્રોફાઇલ માહિતી વાંચો.',
    'phone' => 'સંપર્ક નંબર ઍક્સેસ',
    'address' => 'સાચવેલી એડ્રેસ બુકમાંથી એડ્રેસ વાંચો અને એડિટ કરો',
    'buy' => 'ઓર્ડર અને શોપ ઓર્ડર.',
    'order-history' => 'ઓર્ડર ઇતિહાસ વાંચો.',
    'my-gift-cards' => 'મારા ગિફ્ટકાર્ડ્સની ઍક્સેસ.',
    'articles' => 'લેખો સંપાદિત કરો.',
    'notifications' => 'સૂચનાઓ મોકલો અને પ્રાપ્ત કરો.',
    'read-shops' => 'સ્ટોર લિસ્ટ વાંચો.',
    'shop-edit' => 'સ્ટોર સંપાદન ઍક્સેસ.',
    'shop-contacts' => 'સંપર્ક ફોર્મ મેળવો અને સંપાદિત કરો.',
    'shop-gift-cards' => 'કાર્ડ બનાવવું, સંપાદિત કરવું અને મેનેજ કરવું.',
    'shop-faqs' => 'વારંવાર પૂછાતા પ્રશ્નો બનાવો, સંપાદિત કરો અને મેનેજ કરો.',
    'shop-categories' => 'શ્રેણીઓનું નિર્માણ, સંપાદન અને સંચાલન.',
    'backoffice-write-products' => 'બેક ઓફિસમાં ઉત્પાદનોની રચના, સંપાદન અને સંચાલનને અધિકૃત કરો.',
    'backoffice-read-products' => 'બેક ઓફિસમાં ઉત્પાદનોની સૂચિ અને વિગતવાર ઉત્પાદન માહિતી જોવા માટે ઍક્સેસને અધિકૃત કરો.',
    'shop-read-reports' => 'માહિતી અને અહેવાલો વાંચો.',
    'shop-socials' => 'સ્ટોર સામાજિક નેટવર્ક્સ સંપાદિત કરો.',
    'shop-accounts' => 'સ્ટોર-લિંક્ડ નાણાકીય એકાઉન્ટ્સ સંપાદિત કરો અને કાઢી નાખો.',
    'shop-menus' => 'સ્ટોર મેનુ સંપાદિત કરો.',
    'shop-pages' => 'સ્ટોર પૃષ્ઠો સંપાદિત કરો.',
    'shop-warehouse' => 'સ્ટોર વેરહાઉસ સંપાદિત કરો',
    'shop-permissions' => 'સ્ટોર ઍક્સેસ જુઓ અને સંપાદિત કરો.',
    'shop-process-center' => 'પ્રાપ્ત ઓર્ડર મેનેજ કરો.',
    'shop-profile' => 'સ્ટોર પ્રોફાઇલ મેનેજ કરો.',
    'shop-discount-code' => 'ડિસ્કાઉન્ટ કોડ મેનેજ કરો.',
    'shop-coupon' => 'કૂપન્સ મેનેજ કરો.',
    'shop-offer' => 'ઑફર્સ મેનેજ કરો.',
    'shop-cashback' => 'કેશબેક મેનેજ કરો.',
    'shop-lottery' => 'લોટરીઓનું સંચાલન કરો.',
    'shop-community' => 'સમુદાયનું સંચાલન કરો.',
    'shop-customers' => 'ગ્રાહકોનું સંચાલન કરો.',
    'shop-ribbon' => 'રિબન સબ્સ્ક્રિપ્શન્સ મેનેજ કરો.',
    'community-read' => 'Selldone સમુદાય વાંચો.',
    'community-write' => 'વેચાયેલ સમુદાય લખો.',
    'profile-write' => 'વપરાશકર્તા પ્રોફાઇલ માહિતી લખો.',
    'vendor-read' => 'વિક્રેતા ઓર્ડરની પરિપૂર્ણતા ક્રિયાઓની ઍક્સેસ.',
    'vendor-write' => 'વિક્રેતાના ઓર્ડર, ચુકવણી અને અન્ય માહિતી બદલો.',
    'connect-providers' => 'કનેક્ટ પ્રદાતાઓ ઉમેરો, વાંચો અને લખો.',
    'personal-identification' => 'વ્યક્તિગત માહિતી, ઍક્સેસ અને એકાઉન્ટ રૂપરેખા વાંચો.',
    'accounts' => 'વૉલેટની ઍક્સેસ, વ્યવહારો અને ટોપ-અપ ઇતિહાસ વાંચો.',
    'shop-add' => 'નવી દુકાન ઉમેરો.',
    'shop-delete' => 'એક દુકાન દૂર કરો.',
    'shop-ai-write' => 'વપરાશકર્તાને AI આદેશો ચલાવવાની મંજૂરી આપે છે.',
    'shop-ai-read' => 'વપરાશકર્તાને આદેશો ચલાવ્યા વિના AI માહિતીને ઍક્સેસ કરવાની મંજૂરી આપે છે.',
    'vendor-payment' => 'વપરાશકર્તાને વિક્રેતાઓ માટે ચૂકવણીના રેકોર્ડ ઉમેરવા અથવા સ્ટ્રાઇપ કનેક્ટ જેવા તેમના કનેક્ટેડ એકાઉન્ટ્સ દ્વારા ફંડ ટ્રાન્સફર કરવાની મંજૂરી આપે છે.',
    'company-read' => 'બિઝનેસ પ્રોફાઇલ માહિતી વાંચવા માટે પરવાનગી આપે છે.',
    'company-write' => 'વ્યવસાય પ્રોફાઇલ માહિતી વાંચવા અને લખવાની મંજૂરી આપે છે.',
    'agency-read' => 'એજન્સી માહિતી વાંચવા માટે પરવાનગી આપે છે.',
    'agency-write' => 'એજન્સીની માહિતી વાંચવા અને લખવાની મંજૂરી આપે છે.',
    'note-read' => 'દુકાન નોંધો વાંચવા માટે પરવાનગી આપે છે.',
    'note-write' => 'દુકાનની નોંધો વાંચવા અને લખવાની મંજૂરી આપે છે.',
    'developer-read' => 'વિકાસકર્તાઓની સંપત્તિ વાંચવાની મંજૂરી આપે છે.',
    'developer-write' => 'વિકાસકર્તાઓની સંપત્તિ વાંચવા અને લખવાની મંજૂરી આપે છે.',
    'tokens-read' => 'Oauth ટોકન્સ અને ક્લાયન્ટ્સ વાંચો.',
    'tokens-write' => 'Oauth ટોકન્સ અને ક્લાયન્ટ્સ લખો.',
];
