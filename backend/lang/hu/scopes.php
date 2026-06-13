<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone rendszergazdai hatókör.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Korlátozott befektetői hozzáférés.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Olvassa el a felhasználói profil részleteit.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Telefonszám olvasása.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Elmentett címek olvasása és frissítése.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Felhasználói profil frissítése.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Rendeléseket leadni.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Rendelési előzmények megtekintése.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Hozzáférés az ajándékkártyákhoz.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Cikkek szerkesztése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Értesítések kezelése.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Bolti lista megtekintése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Szerkessze az üzlet adatait.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Új üzlet hozzáadása.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Bolt törlése.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Támogatási jegyek kezelése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Ajándékkártyák kezelése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Tekintse meg az ajándékkártyákat.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'A GYIK kezelése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'A GYIK megtekintése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Kategóriák kezelése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Kategóriák megtekintése.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Termékek kezelése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Termékek megtekintése.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Jelentések megtekintése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Pénzügyi számlák kezelése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Pénzügyi számlák megtekintése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Szerkessze az üzlet oldalait.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Az üzlet oldalainak megtekintése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Raktár kezelése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Raktár megtekintése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'A személyzet hozzáférésének kezelése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'A személyzet hozzáférésének megtekintése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Megrendelések megtekintése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Megrendelések kezelése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Üzleti profil kezelése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Üzleti profil megtekintése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Kedvezménykódok kezelése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Tekintse meg a kedvezmény kódokat.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Kuponok kezelése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'kuponok megtekintése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Ajánlatok kezelése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Ajánlatok megtekintése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Pénzvisszafizetések kezelése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Pénzvisszatérítések megtekintése.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Sorsolások kezelése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Lottó megtekintése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Közösség kezelése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Közösség megtekintése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Ügyfelek kezelése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Ügyfelek megtekintése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Előfizetések kezelése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Előfizetések megtekintése.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Szállítói rendelések megtekintése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Szállítói rendelések és fizetések kezelése.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Csatlakozási szolgáltatók kezelése.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Csatlakozási szolgáltatók megtekintése.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'AI parancsok végrehajtása.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Tekintse meg az AI-információkat.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Szállítói fizetések kezelése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Szállítói fizetések megtekintése.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Üzleti profil megtekintése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Üzleti profil kezelése.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Ügynökségi információk megtekintése.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Ügynökségi információk kezelése.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Bolti jegyzetek megtekintése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Üzleti jegyzetek kezelése.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Fejlesztői eszközök megtekintése.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Fejlesztői eszközök kezelése.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Személyes adatok és fiókbeállítások elérése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Pénztárca és tranzakciók kezelése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Pénztárca-tranzakciók megtekintése.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Tekintse meg a OAuth tokeneket és ügyfeleket.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'OAuth tokenek és ügyfelek kezelése.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Biztonsági beállítások kezelése.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Leányvállalatok kezelése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Leányvállalatok megtekintése.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Nyomtatási sablonok kezelése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Nyomtatási sablonok megtekintése.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Vélemények kezelése.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Vélemények megtekintése.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Bevételszerzési információk megtekintése.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'A bevételszerzési információk kezelése.',



    'profile' => 'Olvassa el a profilinformációkat, beleértve a nevet, e-mail címet, képet és a hitelesítési állapotot.',
    'phone' => 'Elérhetőség a telefonszámon',
    'address' => 'Cím olvasása és szerkesztése a mentett címjegyzékből',
    'buy' => 'Rendelés és bolti rendelés.',
    'order-history' => 'Olvassa el a rendelési előzményeket.',
    'my-gift-cards' => 'Hozzáférés az ajándékkártyáimhoz.',
    'articles' => 'Cikkek szerkesztése.',
    'notifications' => 'Értesítések küldése és fogadása.',
    'read-shops' => 'Olvassa el az Áruház listát.',
    'shop-edit' => 'Bolti szerkesztési hozzáférés.',
    'shop-contacts' => 'Kapcsolatfelvételi űrlapok fogadása és szerkesztése.',
    'shop-gift-cards' => 'Kártyák létrehozása, szerkesztése és kezelése.',
    'shop-faqs' => 'Gyakran ismételt kérdések létrehozása, szerkesztése és kezelése.',
    'shop-categories' => 'Kategóriák létrehozása, szerkesztése és kezelése.',
    'backoffice-write-products' => 'Engedélyezze a termékek létrehozását, szerkesztését és kezelését a háttérirodában.',
    'backoffice-read-products' => 'Engedélyezze a hozzáférést a terméklista és a részletes termékinformációk megtekintéséhez a háttérirodában.',
    'shop-read-reports' => 'Olvasson információkat és jelentéseket.',
    'shop-socials' => 'Szerkessze az áruház közösségi hálózatait.',
    'shop-accounts' => 'Szerkessze és törölje az üzlethez kapcsolódó pénzügyi számlákat.',
    'shop-menus' => 'Szerkessze az üzlet menüit.',
    'shop-pages' => 'Szerkessze az üzlet oldalait.',
    'shop-warehouse' => 'Store Warehouse szerkesztése',
    'shop-permissions' => 'Az áruházi hozzáférés megtekintése és szerkesztése.',
    'shop-process-center' => 'Beérkezett rendelések kezelése.',
    'shop-profile' => 'Üzleti profilok kezelése.',
    'shop-discount-code' => 'Kedvezménykódok kezelése.',
    'shop-coupon' => 'Kuponok kezelése.',
    'shop-offer' => 'Ajánlatok kezelése.',
    'shop-cashback' => 'Pénzvisszafizetések kezelése.',
    'shop-lottery' => 'Sorsolások kezelése.',
    'shop-community' => 'Közösség kezelése.',
    'shop-customers' => 'Ügyfelek kezelése.',
    'shop-ribbon' => 'Szalag-előfizetések kezelése.',
    'community-read' => 'Olvassa el a Selldone közösséget.',
    'community-write' => 'Írj eladott közösséget.',
    'profile-write' => 'Írja be a felhasználói profil adatait.',
    'vendor-read' => 'Hozzáférés a szállítói rendelések teljesítési műveleteihez.',
    'vendor-write' => 'Megrendelések, fizetési és egyéb szállítói információk módosítása.',
    'connect-providers' => 'Csatlakozási szolgáltatók hozzáadása, olvasása és írása.',
    'personal-identification' => 'Olvassa el a személyes adatokat, hozzáféréseket és fiókkonfigurációkat.',
    'accounts' => 'Hozzáférés a pénztárcákhoz, a tranzakciók és a feltöltési előzmények elolvasása.',
    'shop-add' => 'Új üzlet hozzáadása.',
    'shop-delete' => 'Távolítson el egy boltot.',
    'shop-ai-write' => 'Lehetővé teszi a felhasználó számára AI-parancsok végrehajtását.',
    'shop-ai-read' => 'Lehetővé teszi a felhasználó számára, hogy parancsok végrehajtása nélkül hozzáférjen az AI-információkhoz.',
    'vendor-payment' => 'Lehetővé teszi a felhasználó számára, hogy fizetési rekordokat adjon hozzá a szállítókhoz, vagy pénzeszközöket utaljon át kapcsolódó számláikon, például a Stripe Connecten keresztül.',
    'company-read' => 'Lehetővé teszi az üzleti profil információinak olvasását.',
    'company-write' => 'Lehetővé teszi az üzleti profiladatok olvasását és írását.',
    'agency-read' => 'Lehetővé teszi az ügynökségi információk olvasását.',
    'agency-write' => 'Lehetővé teszi ügynökségi információk olvasását és írását.',
    'note-read' => 'Lehetővé teszi a bolti jegyzetek olvasását.',
    'note-write' => 'Lehetővé teszi bolti jegyzetek olvasását és írását.',
    'developer-read' => 'Lehetővé teszi a fejlesztők eszközeinek olvasását.',
    'developer-write' => 'Lehetővé teszi a fejlesztők eszközeinek olvasását és írását.',
    'tokens-read' => 'Olvassa el az Oauth-tokeneket és az ügyfeleket.',
    'tokens-write' => 'Írjon Oauth tokeneket és klienseket.',
];
