<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Zakres administratora Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Ograniczony dostęp dla inwestorów.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Przeczytaj szczegóły profilu użytkownika.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Przeczytaj numer telefonu.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Czytaj i aktualizuj zapisane adresy.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Zaktualizuj profil użytkownika.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Składaj zamówienia.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Zobacz historię zamówień.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Uzyskaj dostęp do kart podarunkowych.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Edytuj artykuły.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Zarządzaj powiadomieniami.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Zobacz listę sklepów.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Edytuj szczegóły sklepu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Dodaj nowy sklep.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Usuń sklep.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Zarządzaj zgłoszeniami pomocy technicznej.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Zarządzaj kartami podarunkowymi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Zobacz karty podarunkowe.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Zarządzaj często zadawanymi pytaniami.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Zobacz często zadawane pytania.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Zarządzaj kategoriami.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Zobacz kategorie.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Zarządzaj produktami.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Zobacz produkty.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Zobacz raporty.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Zarządzaj kontami finansowymi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Zobacz rachunki finansowe.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Edytuj strony sklepu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Zobacz strony sklepu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Zarządzaj magazynem.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Zobacz magazyn.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Zarządzaj dostępem personelu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Zobacz dostęp personelu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Zobacz zamówienia.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Zarządzaj zamówieniami.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Zarządzaj profilem firmy.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Wyświetl profil firmy.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Zarządzaj kodami rabatowymi.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Zobacz kody rabatowe.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Zarządzaj kuponami.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Zobacz kupony.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Zarządzaj ofertami.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Zobacz oferty.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Zarządzaj zwrotami gotówki.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Zobacz zwroty gotówki.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Zarządzaj loteriami.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Zobacz loterie.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Zarządzaj społecznością.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Zobacz społeczność.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Zarządzaj klientami.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Zobacz klientów.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Zarządzaj subskrypcjami.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Wyświetl subskrypcje.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Wyświetl zamówienia dostawców.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Zarządzaj zamówieniami dostawców i płatnościami.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Zarządzaj dostawcami połączeń.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Wyświetl dostawców usług Connect.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Wykonuj polecenia AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Wyświetl informacje o sztucznej inteligencji.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Zarządzaj płatnościami dostawców.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Wyświetl płatności dostawców.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Wyświetl profil firmy.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Zarządzaj profilem firmy.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Zobacz informacje o agencji.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Zarządzaj informacjami o agencji.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Zobacz notatki sklepu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Zarządzaj notatkami sklepu.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Wyświetl zasoby programisty.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Zarządzaj zasobami programistów.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Uzyskaj dostęp do danych osobowych i ustawień konta.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Zarządzaj portfelem i transakcjami.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Wyświetl transakcje portfela.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Wyświetl tokeny i klientów OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Zarządzaj tokenami i klientami OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Zarządzaj ustawieniami zabezpieczeń.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Zarządzaj oddziałami.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Zobacz podmioty stowarzyszone.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Zarządzaj szablonami wydruków.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Zobacz szablony wydruków.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Zarządzaj recenzjami.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Zobacz recenzje.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Wyświetl informacje o zarabianiu.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Zarządzaj informacjami o zarabianiu.',



    'profile' => 'Przeczytaj informacje o profilu, w tym imię i nazwisko, adres e-mail, obraz i stan uwierzytelniania.',
    'phone' => 'Dostęp do numeru kontaktowego',
    'address' => 'Czytaj i edytuj adres z zapisanej książki adresowej',
    'buy' => 'Zamówienie i zamówienie sklepu.',
    'order-history' => 'Przeczytaj historię zamówień.',
    'my-gift-cards' => 'Dostęp do moich kart podarunkowych.',
    'articles' => 'Edytuj artykuły.',
    'notifications' => 'Wysyłaj i odbieraj powiadomienia.',
    'read-shops' => 'Przeczytaj listę sklepów.',
    'shop-edit' => 'Dostęp do edycji sklepu.',
    'shop-contacts' => 'Odbieraj i edytuj formularze kontaktowe.',
    'shop-gift-cards' => 'Tworzenie, edytowanie i zarządzanie kartami.',
    'shop-faqs' => 'Twórz, edytuj i zarządzaj często zadawanymi pytaniami.',
    'shop-categories' => 'Tworzenie, edytowanie i zarządzanie kategoriami.',
    'backoffice-write-products' => 'Autoryzuj tworzenie, edycję i zarządzanie produktami w zapleczu.',
    'backoffice-read-products' => 'Uprawnienia dostępu umożliwiające przeglądanie listy produktów i szczegółowych informacji o produktach w zapleczu.',
    'shop-read-reports' => 'Przeczytaj informacje i raporty.',
    'shop-socials' => 'Edytuj sieci społecznościowe sklepu.',
    'shop-accounts' => 'Edytuj i usuwaj konta finansowe powiązane ze sklepem.',
    'shop-menus' => 'Edytuj menu sklepu.',
    'shop-pages' => 'Edytuj strony sklepu.',
    'shop-warehouse' => 'Edytuj magazyn sklepu',
    'shop-permissions' => 'Przeglądaj i edytuj dostęp do sklepu.',
    'shop-process-center' => 'Zarządzaj otrzymanymi zamówieniami.',
    'shop-profile' => 'Zarządzaj profilami sklepów.',
    'shop-discount-code' => 'Zarządzaj kodami rabatowymi.',
    'shop-coupon' => 'Zarządzaj kuponami.',
    'shop-offer' => 'Zarządzaj ofertami.',
    'shop-cashback' => 'Zarządzaj zwrotami gotówki.',
    'shop-lottery' => 'Zarządzaj loteriami.',
    'shop-community' => 'Zarządzaj społecznością.',
    'shop-customers' => 'Zarządzaj klientami.',
    'shop-ribbon' => 'Zarządzaj subskrypcjami Ribbon.',
    'community-read' => 'Przeczytaj społeczność Selldone.',
    'community-write' => 'Napisz do społeczności selldone.',
    'profile-write' => 'Wpisz informacje o profilu użytkownika.',
    'vendor-read' => 'Dostęp do działań związanych z realizacją zamówień dostawców.',
    'vendor-write' => 'Zmień zamówienia, płatności i inne informacje o sprzedawcy.',
    'connect-providers' => 'Dodawaj, odczytuj i zapisuj dostawców połączeń.',
    'personal-identification' => 'Odczyt informacji osobistych, dostępów i konfiguracji konta.',
    'accounts' => 'Dostęp do portfeli, odczyt transakcji i historii doładowań.',
    'shop-add' => 'Dodaj nowy sklep.',
    'shop-delete' => 'Usuń sklep.',
    'shop-ai-write' => 'Umożliwia użytkownikowi wykonywanie poleceń AI.',
    'shop-ai-read' => 'Umożliwia użytkownikowi dostęp do informacji o sztucznej inteligencji bez konieczności wykonywania poleceń.',
    'vendor-payment' => 'Umożliwia użytkownikowi dodawanie rekordów płatności dla dostawców lub przesyłanie środków za pośrednictwem połączonych kont, np. Stripe Connect.',
    'company-read' => 'Umożliwia odczytanie informacji o profilu biznesowym.',
    'company-write' => 'Umożliwia odczyt i zapis informacji w profilu biznesowym.',
    'agency-read' => 'Umożliwia odczytanie informacji o agencji.',
    'agency-write' => 'Umożliwia odczyt i zapis informacji o agencji.',
    'note-read' => 'Pozwala na odczyt notatek sklepowych.',
    'note-write' => 'Umożliwia odczytywanie i zapisywanie notatek sklepowych.',
    'developer-read' => 'Pozwala na odczyt zasobów deweloperów.',
    'developer-write' => 'Umożliwia odczyt i zapis zasobów programistów.',
    'tokens-read' => 'Odczyt tokenów i klientów OAuth.',
    'tokens-write' => 'Napisz tokeny i klientów OAuth.',
];
