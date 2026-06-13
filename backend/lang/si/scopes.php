<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone පරිපාලක විෂය පථය.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'ආයෝජක ප්‍රවේශය සීමා කිරීම.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'පරිශීලක පැතිකඩ විස්තර කියවන්න.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'දුරකථන අංකය කියවන්න.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'සුරකින ලද ලිපින කියවා යාවත්කාලීන කරන්න.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'පරිශීලක පැතිකඩ යාවත්කාලීන කරන්න.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'ඇණවුම් කරන්න.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'ඇණවුම් ඉතිහාසය බලන්න.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'තෑගි කාඩ්පත් වෙත පිවිසෙන්න.',

    AuthServiceProvider::SCOPE_ARTICLES => 'ලිපි සංස්කරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'දැනුම්දීම් කළමනාකරණය කරන්න.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'සාප්පු ලැයිස්තුව බලන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'සාප්පු විස්තර සංස්කරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'නව සාප්පුවක් එකතු කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'සාප්පුව මකන්න.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'ආධාරක ටිකට්පත් කළමනාකරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'තෑගි කාඩ්පත් කළමනාකරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'තෑගි කාඩ්පත් බලන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'නිතර අසන පැන කළමනාකරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'නිතර අසන පැන බලන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'කාණ්ඩ කළමනාකරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'ප්රවර්ග බලන්න.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'නිෂ්පාදන කළමනාකරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'නිෂ්පාදන බලන්න.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'වාර්තා බලන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'මූල්ය ගිණුම් කළමනාකරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'මූල්ය ගිණුම් බලන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'ගබඩා පිටු සංස්කරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'ගබඩා පිටු බලන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'ගබඩාව කළමනාකරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'ගබඩාව බලන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'කාර්ය මණ්ඩල ප්රවේශය කළමනාකරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'කාර්ය මණ්ඩල ප්රවේශය බලන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'ඇණවුම් බලන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'ඇණවුම් කළමනාකරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'ව්‍යාපාර පැතිකඩ කළමනාකරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'ව්‍යාපාර පැතිකඩ බලන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'වට්ටම් කේත කළමනාකරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'වට්ටම් කේත බලන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'කූපන් පත් කළමනාකරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'කූපන් පත් බලන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'දීමනා කළමනාකරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'දීමනා බලන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'මුදල් ආපසු ගැනීම කළමනාකරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'මුදල් ආපසු ගැනීම බලන්න.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'ලොතරැයි කළමනාකරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'ලොතරැයි බලන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'ප්රජාව කළමනාකරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'ප්රජාව බලන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'ගනුදෙනුකරුවන් කළමනාකරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'පාරිභෝගිකයන් බලන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'දායකත්ව කළමනාකරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'දායකත්ව බලන්න.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'විකුණුම්කරුවන්ගේ ඇණවුම් බලන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'විකුණුම්කරුවන්ගේ ඇණවුම් සහ ගෙවීම් කළමනාකරණය කරන්න.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'සම්බන්ධක සපයන්නන් කළමනාකරණය කරන්න.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'සම්බන්ධක සපයන්නන් බලන්න.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'AI විධාන ක්‍රියාත්මක කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'AI තොරතුරු බලන්න.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'විකුණුම්කරුවන්ගේ ගෙවීම් කළමනාකරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'විකුණුම්කරුගේ ගෙවීම් බලන්න.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'ව්‍යාපාර පැතිකඩ බලන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'ව්‍යාපාර පැතිකඩ කළමනාකරණය කරන්න.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'නියෝජිතායතන තොරතුරු බලන්න.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'නියෝජිතායතන තොරතුරු කළමනාකරණය කරන්න.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'සාප්පු සටහන් බලන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'සාප්පු සටහන් කළමනාකරණය කරන්න.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'සංවර්ධක වත්කම් බලන්න.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'සංවර්ධක වත්කම් කළමනාකරණය කරන්න.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'පුද්ගලික තොරතුරු සහ ගිණුම් සැකසීම් වෙත පිවිසෙන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'මුදල් පසුම්බිය සහ ගනුදෙනු කළමනාකරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'මුදල් පසුම්බි ගනුදෙනු බලන්න.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth ටෝකන සහ සේවාලාභීන් බලන්න.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth ටෝකන සහ සේවාලාභීන් කළමනාකරණය කරන්න.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'ආරක්ෂක සැකසුම් කළමනාකරණය කරන්න.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'අනුබද්ධ ආයතන කළමනාකරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'අනුබද්ධ බලන්න.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'මුද්‍රණ සැකිලි කළමනාකරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'මුද්‍රණ සැකිලි බලන්න.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'සමාලෝචන කළමනාකරණය කරන්න.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'සමාලෝචන බලන්න.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'මුදල් ඉපැයීමේ තොරතුරු බලන්න.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'මුදල් ඉපැයීමේ තොරතුරු කළමනාකරණය කරන්න.',



    'profile' => 'නම, ඊමේල් ලිපිනය, රූපය සහ සත්‍යාපන තත්ත්වය ඇතුළු පැතිකඩ තොරතුරු කියවන්න.',
    'phone' => 'සම්බන්ධතා අංකයට ප්‍රවේශය',
    'address' => 'සුරැකි ලිපින පොතෙන් ලිපිනය කියවා සංස්කරණය කරන්න',
    'buy' => 'ඇණවුම සහ සාප්පු ඇණවුම.',
    'order-history' => 'ඇණවුම් ඉතිහාසය කියවන්න.',
    'my-gift-cards' => 'මගේ තෑගි කාඩ්පත් වෙත ප්‍රවේශය.',
    'articles' => 'ලිපි සංස්කරණය කරන්න.',
    'notifications' => 'දැනුම්දීම් යැවීම සහ ලබා ගැනීම.',
    'read-shops' => 'ගබඩා ලැයිස්තුව කියවන්න.',
    'shop-edit' => 'ගබඩා සංස්කරණ ප්‍රවේශය.',
    'shop-contacts' => 'සම්බන්ධතා පෝරම ලබා ගැනීම සහ සංස්කරණය කිරීම.',
    'shop-gift-cards' => 'කාඩ්පත් නිර්මාණය කිරීම, සංස්කරණය කිරීම සහ කළමනාකරණය කිරීම.',
    'shop-faqs' => 'නිතර අසන ප්‍රශ්න සාදන්න, සංස්කරණය කරන්න සහ කළමනාකරණය කරන්න.',
    'shop-categories' => 'කාණ්ඩ නිර්මාණය කිරීම, සංස්කරණය කිරීම සහ කළමනාකරණය කිරීම.',
    'backoffice-write-products' => 'පසු කාර්යාලයේ නිෂ්පාදන නිර්මාණය කිරීම, සංස්කරණය කිරීම සහ කළමනාකරණය කිරීම සඳහා අවසර දෙන්න.',
    'backoffice-read-products' => 'නිෂ්පාදන ලැයිස්තුව සහ පසු කාර්යාලයේ සවිස්තරාත්මක නිෂ්පාදන තොරතුරු බැලීම සඳහා ප්‍රවේශයට අවසර දෙන්න.',
    'shop-read-reports' => 'තොරතුරු සහ වාර්තා කියවන්න.',
    'shop-socials' => 'ගබඩා සමාජ ජාල සංස්කරණය කරන්න.',
    'shop-accounts' => 'ගබඩා සම්බන්ධ මූල්‍ය ගිණුම් සංස්කරණය කර මකන්න.',
    'shop-menus' => 'ගබඩා මෙනු සංස්කරණය කරන්න.',
    'shop-pages' => 'ගබඩා පිටු සංස්කරණය කරන්න.',
    'shop-warehouse' => 'ගබඩා ගබඩාව සංස්කරණය කරන්න',
    'shop-permissions' => 'ගබඩා ප්‍රවේශය බලන්න සහ සංස්කරණය කරන්න.',
    'shop-process-center' => 'ලැබුණු ඇණවුම් කළමනාකරණය කරන්න.',
    'shop-profile' => 'ගබඩා පැතිකඩ කළමනාකරණය කරන්න.',
    'shop-discount-code' => 'වට්ටම් කේත කළමනාකරණය කරන්න.',
    'shop-coupon' => 'කූපන් පත් කළමනාකරණය කරන්න.',
    'shop-offer' => 'දීමනා කළමනාකරණය කරන්න.',
    'shop-cashback' => 'මුදල් ආපසු ගැනීම කළමනාකරණය කරන්න.',
    'shop-lottery' => 'ලොතරැයි කළමනාකරණය කරන්න.',
    'shop-community' => 'ප්රජාව කළමනාකරණය කරන්න.',
    'shop-customers' => 'ගනුදෙනුකරුවන් කළමනාකරණය කරන්න.',
    'shop-ribbon' => 'රිබන් දායකත්වයන් කළමනාකරණය කරන්න.',
    'community-read' => 'Selldone ප්‍රජාව කියවන්න.',
    'community-write' => 'විකුණන ලද ප්‍රජාව ලියන්න.',
    'profile-write' => 'පරිශීලක පැතිකඩ තොරතුරු ලියන්න.',
    'vendor-read' => 'වෙළෙන්දා ඇණවුම් ඉටු කිරීමේ ක්‍රියාවන් සඳහා ප්‍රවේශය.',
    'vendor-write' => 'විකුණුම්කරුගේ ඇණවුම්, ගෙවීම් සහ අනෙකුත් තොරතුරු වෙනස් කරන්න.',
    'connect-providers' => 'සම්බන්ධක සපයන්නන් එකතු කරන්න, කියවන්න සහ ලියන්න.',
    'personal-identification' => 'පුද්ගලික තොරතුරු, ප්‍රවේශයන් සහ ගිණුම් වින්‍යාසය කියවන්න.',
    'accounts' => 'මුදල් පසුම්බි වෙත ප්‍රවේශය, ගනුදෙනු කියවීම සහ ඉහළ ඉතිහාස කියවීම.',
    'shop-add' => 'නව සාප්පුවක් එකතු කරන්න.',
    'shop-delete' => 'කඩයක් ඉවත් කරන්න.',
    'shop-ai-write' => 'AI විධාන ක්‍රියාත්මක කිරීමට පරිශීලකයාට අවසර දෙන්න.',
    'shop-ai-read' => 'විධාන ක්‍රියාත්මක නොකර AI තොරතුරු වෙත ප්‍රවේශ වීමට පරිශීලකයාට අවසර දෙන්න.',
    'vendor-payment' => 'විකුණුම්කරුවන් සඳහා ගෙවීම් වාර්තා එක් කිරීමට හෝ Stripe Connect වැනි ඔවුන්ගේ සම්බන්ධිත ගිණුම් හරහා අරමුදල් මාරු කිරීමට පරිශීලකයාට අවසර දෙන්න.',
    'company-read' => 'ව්‍යාපාර පැතිකඩ තොරතුරු කියවීමට ඉඩ දෙයි.',
    'company-write' => 'ව්‍යාපාර පැතිකඩ තොරතුරු කියවීමට සහ ලිවීමට ඉඩ දෙයි.',
    'agency-read' => 'නියෝජිතායතන තොරතුරු කියවීමට ඉඩ දෙයි.',
    'agency-write' => 'නියෝජිතායතන තොරතුරු කියවීමට සහ ලිවීමට ඉඩ සලසයි.',
    'note-read' => 'සාප්පු සටහන් කියවීමට ඉඩ සලසයි.',
    'note-write' => 'සාප්පු සටහන් කියවීමට සහ ලිවීමට ඉඩ සලසයි.',
    'developer-read' => 'සංවර්ධක වත්කම් කියවීමට ඉඩ දෙයි.',
    'developer-write' => 'සංවර්ධකයන්ගේ වත්කම් කියවීමට සහ ලිවීමට ඉඩ දෙයි.',
    'tokens-read' => 'Oauth ටෝකන සහ සේවාලාභීන් කියවන්න.',
    'tokens-write' => 'Oauth ටෝකන සහ සේවාලාභීන් ලියන්න.',
];
