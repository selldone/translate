<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Ta wiadomość wita nowego kupującego w sklepie.',
        ShopMailTemplateCodes::OrderCheckout => 'Powiadomienie to jest wysyłane, gdy kupujący potwierdzi zamówienie.',
        ShopMailTemplateCodes::OrderPayment => 'To powiadomienie potwierdza pomyślną płatność dokonaną przez klienta.',
        ShopMailTemplateCodes::OrderUpdate => 'Ta wiadomość jest wysyłana, aby poinformować kupującego o statusie jego zamówienia.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Ta wiadomość jest wysyłana do sprzedawcy w celu powiadomienia go o potwierdzonym zamówieniu.',
        ShopMailTemplateCodes::PosCheckout => 'To powiadomienie jest wysyłane w celu potwierdzenia zamówienia kupującego w punkcie sprzedaży.',
        ShopMailTemplateCodes::PosPayment => 'To powiadomienie potwierdza dokonanie przez kupującego płatności w punkcie sprzedaży.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Ta wiadomość informuje sprzedawcę o zakupie dokonanym w jego punkcie sprzedaży.',
        ShopMailTemplateCodes::ShopContact => 'Powiadomienie to jest wysyłane po przesłaniu formularza kontaktowego.',
        ShopMailTemplateCodes::ShopGiftCard => 'To powiadomienie informuje użytkownika, że otrzymał kartę podarunkową.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Ta wiadomość wita nowego sprzedawcę w sklepie.',
        ShopMailTemplateCodes::ShopVendorInvite => "Ta wiadomość jest wysyłana w celu zaproszenia dostawcy do dołączenia do Twojego rynku.",
        ShopMailTemplateCodes::ShopVendorOrder => "Ta wiadomość jest wysyłana do dostawcy, gdy otrzymane zamówienie ma status „Opłacone” lub „Za pobraniem” (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Wysyłane codziennie, aby informować dostawców o stanie ich produktów.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Ta wiadomość została wysłana w celu zaproszenia dostawcy do dołączenia do Twojego rynku.",

        ShopMailTemplateCodes::UserLogin => "Ze względów bezpieczeństwa powiadom użytkownika o danych logowania, w tym o adresie, dacie i urządzeniu IP.",
        ShopMailTemplateCodes::LoginCode => "Wyślij jednorazowy kod hasła, aby użytkownicy mogli zalogować się do sklepu.",

        ShopMailTemplateCodes::EmailVerifyLink => "Wyślij link w celu weryfikacji adresu e-mail użytkownika. Ten e-mail jest wysyłany, gdy użytkownik zarejestruje się za pomocą SMS i wprowadzi swój adres e-mail. Nie jest wysyłany, gdy użytkownik rejestruje się bezpośrednio za pomocą loginu społecznościowego lub adresu e-mail.",

        ShopMailTemplateCodes::EmailBulkOrder => "Wyślij zbiorczo listę otrzymanych i opłaconych zamówień na konkretny dzień."


    ,

    ],


    'global' => [
        'greetings' => 'Cześć, :name!',
        'end-statement' => 'Grupa wsparcia',

        'receiver_name' => 'Cześć :user_name',
        'footer-help' => "Potrzebujesz pomocy? Zapytaj pod adresem [support@selldone.com](mailto:support@selldone.com) lub odwiedź nasze [centrum pomocy](https://selldone.com/community).",
        'selldone-team' => 'Zespół Selldone',
        'footer-shop' => "Jeśli potrzebujesz pomocy, napisz do nas e-mail: :shop_mail",
        'accept' => "Zaakceptować",
        'reject' => "Odrzucić",
        'verify' => "zweryfikować",
        'title' => "Tytuł",
        'value' => "Wartość",
        'description' => "Opis",
        'shop' => "Sklep",
        'shop-info' => "Informacje o sklepie",
        'user' => "użytkownik",
        'user-info' => "Informacje o koncie",
        'license' => "Licencja",
        'status' => "Status",
        'start' => "Początek",
        'end' => "Koniec",
        'renewal' => "Odnowienie",
        'view' => "Pogląd",

        'balance' => "Saldo",
        'card_number' => "Numer karty",
        'cvv' => "Cvv",
        'expire_date' => "Data ważności",

        'Dashboard' => "Pulpit nawigacyjny",
        'order' => "zamówienie",
        'view_order' => "Zobacz zamówienie",
        'pay_now' => "Pay now",

        'official_selldone' => "OFICJALNA SPRZEDAŻ",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Waluta",
        'free-balance' => "Darmowe saldo",
        'locked-balance' => "Zablokowane saldo",
        'bot' => "Nerw",
        'requests' => "Upraszanie",
        'baskets' => 'Wózki',
        'physical' => "Fizyczny",
        'virtual' => "Wirtualny",
        'file' => "Plik",
        'service' => "Usługa",
        'fulfillment' => "Spełnienie",
        'open' => "otwarty",
        'reserved' => "Skryty",
        'canceled' => "Odwołany",
        'payed' => "Płatny",
        'cod' => "COD",
        'orders-count' => 'Zamówienia',
        'payments-count' => 'Płatności',
        'confirms-count' => 'Potwierdza',
        'sends-count' => 'Wysyła',
        'delivers-count' => 'Dostarcza',
        'count' => 'Liczyć',
        'transactions-count' => 'Liczba transakcji',
        'success-transactions' => 'Transakcje sukcesu',
        'total-amount' => 'Całkowita kwota',
        'amount' => 'Ilość',
        'wage' => 'Płaca',
        'debug' => 'Odpluskwić',
        'pos' => 'POS',
        'live' => 'Na żywo',
        'CheckQueue' => 'Sprawdź kolejkę',
        'OrderConfirm' => 'Zamówienie potwierdzone',
        'PreparingOrder' => 'Przygotowanie zamówienia',
        'SentOrder' => 'Wysłano zamówienie',
        'ToCustomer' => 'Dostarczone do klienta',
        'Pending' => 'Aż do',
        'Accepted' => 'Przyjęty',
        'Rejected' => 'Odrzucony',
        'pc' => 'PC',
        'tablet' => 'Tablet',
        'phone' => 'Telefon',
        'total' => 'Całkowity',
        'view-detail' => 'Pokaż szczegóły',
        'empty' => 'Pusty',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Odpowiedź',
        'reactions' => 'Reakcje',
        'Comments' => 'Komentarze',
        'last-comment' => 'Ostatni komentarz',
        'response-to' => 'Odpowiedź na',
        'posts' => 'Posty',
        'post' => 'Poczta',

        'name' => 'Nazwać',
        'email' => 'E-mail',
        'type' => 'rodzaj',
        'device' => 'Urządzenie',
        'platform' => 'Platforma',
        'browser' => 'Przeglądarka',
        'time' => 'Czas',
        'Wallet' => 'Portfel',
        'date' => 'Data',

        'account' => 'Rachunek',
        'transaction' => 'Transakcja',
        'fee' => 'Opłata',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Rachunek',
        'category' => 'Kategoria',
        'password' => 'Hasło',
        'verify-login' => "Zweryfikuj i zaloguj się",
        'url' => 'URL',
        'avocado' => 'Awokado',
        'hyper' => 'Hiper',
        'buy-now' => "Kup Teraz",
        'add-domain' => "Add Domain",
        'views' => 'Wyświetlenia',


        'country' => 'Kraj',
        'address' => 'adres',
        'postal' => 'kod pocztowy',
        'building_no' => 'Budynek #',
        'building_unit' => 'Jednostka #',
        'message' => 'Wiadomość',


        'customer' => 'Klient',
        'cart-items' => 'Elementy koszyka',
        'payment' => 'Zapłata',
        'receiver' => 'Odbiorca',
        'virtual-items' => 'Przedmioty wirtualne',
        'no-payment' => 'Brak płatności!',

        'enable' => 'Włączyć',
        'access' => 'Dostęp',
        'bank' => 'Informacje bankowe',

        'vendor' => 'Sprzedawca',

        'view_content' => "Zobacz pełną treść",
        'files' => 'Akta',
        'download' => 'Pobierać',
        'file_name' => 'Nazwa pliku',
        'file_size' => 'Rozmiar',

        'subscription' => 'Subskrypcja',
        'products' => 'Produkty',
        'vendor_products' => 'Produkty dostawcy',

        'pickup' => 'Odbiór',

        'minutes' => 'Minuty',
        'hours' => 'Godziny',

        'refund' => 'Zwrot pieniędzy',
        'recipient_address' => 'Adres odbiorcy',
        'signature' => 'Podpis',
        'blockchain' => 'Blockchain',
        'details' => 'Szczegóły',


    

        'Shop' => 'Sklep',
        'dashboard' => 'panel',
        'comments' => 'uwagi',
        'wallet' => 'portfel',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Biznesowy system operacyjny Selldone",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Raport wydajności Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Raport sezonowy Selldone'
        ],
        'Onboarding' => [
            'id' => 'cześć',
            'name' => 'Sprzedawcy Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Wsparcie :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Selldone'
        ],
        'Welcome' => [
            'id' => 'cześć',
            'name' => 'Społeczność Selldone'
        ],
        'NewShop' => [
            'id' => 'kupcy',
            'name' => 'Sprzedawcy Selldone'
        ],
        'Approve' => [
            'id' => 'zatwierdzić',
            'name' => 'Sprzedawcy Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Zarządzanie zamówieniami :name'
        ],

        'Recovery' => [
            'id' => 'powrót do zdrowia',
            'name' => 'Zespół odzyskiwania Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Oczekujące ⌛',
        'PAYED' => 'Płatne ✅',
        'CANCELED' => 'Anulowano',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administrator',
            'OFFICER' => 'Oficer i Inspektor',
            'AUDITING' => 'Kierownik audytu',
            'EMPLOYEE' => 'Pracownik',
            'PRODUCT' => 'Menedżer produktów',
            'CONTENT' => 'Menedżer treści',
            'MARKETING' => 'Menadżer marketingu',
            'VIEWER' => 'Widz',

        ],
        'subject' => ":inviter zaprosił Cię jako :level| :shop",
        'category' => "Zaproszenie personelu",
        'title' => "Zostałeś zaproszony do <b>:shop_name</b> jako <b>:level</b> .",
        'message' => "Otrzymałeś zaproszenie do współpracy z zespołem <b>:shop_title</b> w biznesie. Masz możliwość zaakceptowania lub odrzucenia tej oferty. Jeśli zdecydujesz się na akceptację, zaloguj się do usługi Selldone, aby potwierdzić swoją decyzję. Po potwierdzeniu uzyskasz dostęp do sekcji zarządzania sklepem.",

    ],

    'welcome-email' => [
        'subject' => "👋 Witamy :name, zacznijmy od Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Witamy w Selldone",
        'message' => "Dziękujemy za wybranie Selldone! Jesteś teraz częścią tętniącej życiem społeczności, która łączy globalnych sprzedawców z klientami, lokalne firmy z przedsiębiorstwami i osoby prywatne z korporacjami. Wszystkie nasze narzędzia Master i Pro są dostępne **bezpłatnie** i **nieograniczona**. Jesteśmy po to, żeby Cię wspierać i otwierać drzwi do Twojego sukcesu.",

        'index' => "Krok :step.",

        'step-domain' => [
            'title' => 'Dodaj swoją domenę niestandardową',
            'message' => "Aby rozpocząć, dodaj bezpłatnie swoją domenę niestandardową w Panelu Sklepu w obszarze Ustawienia > Ustawienia domen.",
            'action' => 'Zarządzaj moimi domenami',
        ],
        'step-landing' => [
            'title' => 'Dostosuj swoją stronę główną',
            'message' => "Spersonalizuj swoją stronę główną, przechodząc do Panelu sterowania > Strony. Wybierz stronę docelową lub utwórz nową. Jest łatwy i intuicyjny i możesz od razu zacząć nad nim pracować.",
            'action' => 'Dostosuj moją stronę docelową',
        ],
        'step-payment' => [
            'title' => 'Skonfiguruj metody płatności',
            'message' => "Zacznij przyjmować płatności bezpośrednio na swoje konto bankowe. Aby połączyć się z dostawcami płatności, takimi jak Stripe, PayPal i nie tylko, przejdź do Panelu sterowania > Księgowość > Brama.",
            'action' => 'Dodaj metody płatności',
        ],
        'step-products' => [
            'title' => 'Dodaj swoje produkty',
            'message' => "Z łatwością dodawaj produkty i kategorie w Panelu > Produkty. To tak, jakby zarządzać plikami i folderami na komputerze – w pełni gotowe do przeciągania i upuszczania. Możesz także masowo importować produkty za pomocą programu Excel. Dostępny jest przykładowy szablon, który pomoże Ci rozpocząć.",
            'action' => 'Zarządzaj moimi produktami',
        ],
        'step-shipping' => [
            'title' => 'Skonfiguruj metody wysyłki',
            'message' => "Aby obciążyć klientów opłatami za wysyłkę, zdefiniuj metody wysyłki w Panelu > Logistyka > Wysyłka. Możesz ustawić różne ceny i wsparcie dla różnych lokalizacji. Nie zapomnij ustawić pochodzenia magazynu w Panelu > Logistyka > Magazyn.",
            'action' => 'Zarządzaj metodami wysyłki',
        ],
    

        'seller' => [
            'title' => 'Czy jesteś sprzedawcą?',
            'message' => 'Aby rozpocząć sprzedaż, wejdź do swojego pulpitu nawigacyjnego w Selldone za pomocą poniższego linku i utwórz swój pierwszy sklep całkowicie za darmo. Zajmie to kilka minut i będziesz mieć własny sklep i stronę internetową. Następnie poprowadzimy Cię do kolejnych kroków i uzyskamy bramkę płatności.',
            'action' => 'Zaloguj się do mojego pulpitu nawigacyjnego',
        ],
        'buyer' => [
            'title' => 'jestem kupującym',
            'message' => 'Gratulacje. Gdy zostaniesz członkiem Selldone, pozbędziesz się wszystkich problemów związanych z członkostwem i uwierzytelnianiem w sklepach internetowych. Aby skorzystać z dowolnego sklepu i witryny korzystającej z platformy Selldone, możesz zalogować się jednym kliknięciem i dokonać prostego, szybkiego i bezpiecznego zakupu.',
        ],
    ],


    'charge-account' => [
        'category' => 'Portfel > Konto > Obciążenie',
        'title' => "Opłata za sukces",
        'message' => "Twoje konto <b>:account_number</b> zostało pomyślnie <b>:amount</b> obciążone.",
        'account' => 'Rachunek',
        'charge' => 'Opłata',
        'balance' => 'Saldo',
        'footer' => "Spraw, by biznes był łatwy, osiągalny i dostępny dla każdego na całym świecie."
    ],

    'verify-email' => [
        'subject' => "🙌 Dokończ rejestrację w Selldone! Zweryfikuj link.",
        'category' => "JESTEŚ O KROK DANYCH",
        'title' => "Zweryfikuj swój adres email",
        'message' => "Cześć :name,<br><br>Dziękujemy za wybranie Selldone!<br><br>Aby potwierdzić, że <b>:email</b> to Twój poprawny adres e-mail, kliknij przycisk poniżej lub skorzystaj z podanego linku. Masz 48 godzin na zakończenie tej weryfikacji.",
        'footer' => "Jeśli masz problem z kliknięciem przycisku Zweryfikuj, skopiuj poniższy adres URL i wklej go w przeglądarce internetowej: :activation_url",
        'next-step' => "Następnie wyślemy Ci przydatne materiały i przewodnik krok po kroku, który ułatwi Ci dodanie domeny niestandardowej, skonfigurowanie płatności, dodanie produktów i złożenie pierwszego zamówienia.",

    ],
    'verify-email-code' => [
        'subject' => "Kod weryfikacyjny dla :name",
        'category' => "SECURITY",
        'title' => "Kod weryfikacyjny e-mail",
        'message' => "Cześć :name,<br><br>Aby potwierdzić, że <b>:email</b> to Twój poprawny adres e-mail, wprowadź następujący kod w ciągu najbliższych <b>10 minut</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Twój sklep jest gotowy| :name",
        'category' => "JESTEŚ O KROK DANYCH",
        'title' => "Konfiguracja zakończona",
        'account_title' => "Twoje konto",
        'account_msg' => "Zweryfikuj i zaloguj się na swoje konto za pomocą tych informacji.",
        'shop_msg' => "Informacje o koncie w firmowym systemie operacyjnym Selldone.",

    ],

    'reset2fa' => [
        'category' => "OFICJALNA WIADOMOŚĆ BEZPIECZEŃSTWA",
        'title' => "Poproś o wyłączenie logowania dwuetapowego",
        'message' => "Otrzymujesz tego e-maila, ponieważ otrzymaliśmy prośbę o zresetowanie uwierzytelniania dwuskładnikowego dla konta **:name** z adresem e-mail **:email**.<br><br>Znaleźliśmy następujące szczegóły Twojego konta:",
        'footer' => "Jeśli nie zażądałeś zresetowania hasła, nie są wymagane żadne dalsze działania.",
        'action' => 'Wyłącz logowanie dwuetapowe',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Twój sklep jest już gotowy!",
        'category' => "NARODZONY NOWY SKLEP INTERNETOWY NA ŚWIECIE",
        'title' => "Gratulacje, :name!",
        'message' => "<b>Gratulacje, :name! Twój nowy biznes internetowy jest już aktywny!</b> Cieszymy się, że możemy powitać Cię w społeczności Selldoners. Zrobiłeś pierwszy krok w stronę sukcesu, a my jesteśmy tutaj, aby pomóc Ci na każdym kroku.<br>Teraz, gdy Twój sklep jest gotowy, upewnijmy się, że możesz otrzymywać płatności bezpośrednio od swoich klientów i zacznij rozwijać swoje imperium. Jeśli kiedykolwiek będziesz potrzebować pomocy, wystarczy wiadomość — nasz zespół pomocy technicznej jest zawsze do Twojej dyspozycji.<br><br><b>Ważne kolejne kroki:</b> Na początek upewnij się, że wszystko jest skonfigurowane do otrzymywania płatności i sprawnego działania. Przeprowadzimy Cię przez każdy etap, aby Twój sklep działał płynnie.",
        'pdf-book' => "Nie przegap dołączonego podręcznika: Do Your Business Like A Game",

        'account' => [
            'title' => 'Krok 1: Utwórz konto w portfelu Selldone',
            'message' => "Aby rozpocząć, utwórz konto w swoim portfelu Selldone. W tym miejscu zostaną potrącone Twoje opłaty, a także w tym miejscu dokonasz doładowania, aby Twój sklep działał sprawnie. Jeśli kiedykolwiek Twoje saldo stanie się ujemne, nie martw się! Twój sklep będzie działał bez zakłóceń.",
            'action' => 'Zaloguj się do portfela',
        ],

        'shop-account' => [
            'title' => 'Krok 2: połącz konto ze sklepem',
            'message' => "Następnie połącz swoje konto portfela ze swoim sklepem. Przejdź do <b>Store > Księgowość > Faktura</b> i połącz swój portfel. Dzięki temu wszystkie płatności klientów zostaną wpłacone bezpośrednio na Twoje konto bankowe — Selldone nie potrąca żadnych kwot z Twoich zarobków.",
            'action' => 'Sklepowy panel faktur',
        ],

        'gateway' => [
            'title' => 'Krok 3: Podłącz bramkę płatności online',
            'message' => "Teraz skonfigurujmy Twoją bramkę płatności online. Przejdź do <b>Store > Księgowość > Port</b> i kliknij <b>Dodaj nowy Port</b>. Wybierz walutę, a zobaczysz listę dostępnych bramek płatniczych. Podłączenie bramy jest szybkie i łatwe, ale jeśli potrzebujesz pomocy, zapoznaj się z przewodnikami Selldone lub skontaktuj się z nami.",
            'action' => 'Dodaj portal do sklepu',
        ],

        'domain' => [
            'title' => 'Ostatni krok: podłączenie dedykowanej domeny',
            'message' => "Teraz połącz swoją domenę niestandardową ze swoim sklepem. Dzięki temu klienci mogą kupować Twoje produkty lub usługi i dokonywać płatności bezpośrednio Tobie.",
            'action' => 'Wprowadzanie i otrzymywanie nielimitowanych kart podarunkowych',
        ],
    ],


    'basket-list' => [
        'item' => "przedmiot",
        'count' => "Liczyć",
        'price' => "Cena",
        'discount-code' => "Kod rabatowy",
        'customer-club' => 'Klub Klienta',
        'shipping' => "Wysyłka",
        'total' => "Całkowity",
        'offer' => "Oferta",
        'coupon' => "Kupon",
        'lottery' => "Nagroda",
        'tax' => "Podatek",
        'tax_included' => "Wliczony w cenę",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'metoda',
        'amount' => 'Ilość',
        'giftcard' => 'Gift card',
        'payment' => 'Zapłata',
    ],


    'shop-subscription-email' => [
        'category' => "Aktualizacja subskrypcji",
        'title' => "Licencja na sklep: :shop_title",
        'title-reserved' => "Zarezerwuj licencję: :shop_title",
        'title-active' => "Aktywna licencja: :shop_title",
        'title-finished' => "Gotowa licencja: :shop_title",
        'title-cancel' => "Anuluj licencję: :shop_title",
        'message' => "Zaktualizowany plan licencyjny Twojego sklepu,",
        'RESERVED' => "⚡ Twój plan subskrypcji został **zarezerwowany**.",
        'ACTIVE' => "🟢 Twój plan subskrypcji został **aktywowany**.",
        'FINISHED' => "🚧 Twój plan subskrypcji został **ukończony**.",
        'CANCEL' => "⛔ Twój plan subskrypcji został **anulowany**.",
    ],

    'support' => [
        'subject' => "Centrum wsparcia|Odpowiedź :name",
        'category' => "Centrum Wsparcia",
        'title' => "Otrzymałeś odpowiedź",
        'action' => "Otwórz sklep administratora",
    ],

    'shop-customer-join' => [
        'subject' => "Dołącz do :shop_title",
        'category' => "Święto nowego klienta",
        'title' => "Cieszymy się z Twojego członkostwa",
        'action' => "Odwiedź teraz",
    ],

    'shop-vendor-join' => [
        'subject' => "Wdrażanie dostawców | :shop_title",
        'category' => "Świętowanie nowego sprzedawcy",
        'title' => "Cieszymy się z Twojego członkostwa",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Karta podarunkowa :shop_title",
        'category' => "Dodaj nową kartę",
        'title' => "Gratulacje, otrzymałeś kartę podarunkową",
        'action' => "Kupuj teraz",
        'message' => "Otrzymałeś kartę podarunkową na kwotę :balance :currency. Za pomocą tej karty podarunkowej będziesz mógł kupować w naszym sklepie.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Centrum wsparcia| :shop",
        'category' => "wsparcie",
        'title' => "Otrzymałeś odpowiedź",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Potwierdzenie zamówienia|Zamów :order_id",
        'title' => "zamówienie",
        'message' => "Złożyłeś zamówienie w naszym sklepie. Otrzymaliśmy Twoje zamówienie i wyślemy Ci kolejny e-mail po potwierdzeniu płatności."
    ,

        'payments' => 'Płatności',
    ],

    'order-payment' => [
        'subject' => "🛍️Potwierdzenie płatności|Zamów :order_id",
        'title' => "Polecenie zapłaty",
        'message' => "Twoja płatność zakończona,<br> Mamy twoje zamówienie. Wyślemy Ci kolejną wiadomość e-mail, gdy Twoje zamówienie zostanie wysłane.",
    

        'payments' => 'Płatności',
    ],

    'order-update' => [
        'subject' => "🛍️ Aktualizacja statusu zamówienia|Zamów :order_id",
        'title' => "Aktualizacja statusu zamówienia",
        'message' => "Twoje zamówienie zostało zaktualizowane. Aktualny status tego zamówienia możesz sprawdzić na swoim koncie.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Twoje zamówienie oczekuje w kolejce do realizacji. Powiadomimy Cię, gdy będzie on przygotowywany.",
                'OrderConfirm' => "Twoje zamówienie zostało potwierdzone i rozpoczęły się przygotowania.",
                'PreparingOrder' => "Twoje zamówienie jest przygotowywane i wkrótce zostanie wysłane.",
                'SentOrder' => "Twoje zamówienie zostało wysłane. Wkrótce go otrzymasz.",
                'ToCustomer' => "Twoje zamówienie zostało dostarczone. Mamy nadzieję, że Ci się spodoba!",

                'PreparingOrder-PICKUP' => "Twoje zamówienie jest przygotowywane. Otrzymasz powiadomienie, gdy produkt będzie gotowy do odbioru.",
                'SentOrder-PICKUP' => "Twoje zamówienie jest gotowe do odbioru. Proszę przyjść do sklepu po odbiór.",
                'ToCustomer-PICKUP' => "Twoje zamówienie zostało odebrane. Mamy nadzieję, że Ci się spodoba!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Twoje zamówienie oczekuje w kolejce do realizacji. Powiadomimy Cię, gdy będzie gotowy.",
                'OrderConfirm' => "Twoje zamówienie zostało potwierdzone i przygotowania w toku.",
                'PreparingOrder' => "Twoje zamówienie jest przygotowywane i wkrótce zostanie do Ciebie wysłane.",
                'ToCustomer' => "Twoje wirtualne zamówienie zostało dostarczone na Twoje konto. Dziękuję!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Twoje zgłoszenie serwisowe znajduje się w kolejce. Powiadomimy Cię, kiedy zaczniemy.",
                'OrderConfirm' => "Twoja usługa została potwierdzona i przygotowujemy się do rozpoczęcia.",
                'PreparingOrder' => "Przygotowujemy Twoją usługę i powiadomimy Cię, gdy będzie ona zakończona.",
                'ToCustomer' => "Twoja usługa jest kompletna. Dziękujemy, że nas wybrałeś!"
            ],
            'FILE' => [
                'PreparingOrder' => "Twój plik jest przygotowywany i wkrótce będzie dostępny.",
                'ToCustomer' => "Twój plik jest gotowy i został dostarczony. Możesz go teraz pobrać."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Twoje zamówienie na subskrypcję znajduje się w kolejce. Powiadomimy Cię, gdy rozpocznie się przetwarzanie.",
                'OrderConfirm' => "Twoja subskrypcja została potwierdzona i jest w trakcie konfigurowania.",
                'PreparingOrder' => "Przygotowujemy Twoją subskrypcję, która rozpocznie się wkrótce.",
                'SentOrder' => "Twoja subskrypcja została aktywowana. Będziesz otrzymywać bieżące aktualizacje.",
                'ToCustomer' => "Twoja usługa subskrypcji została pomyślnie aktywowana."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Gratulacje :name|Nowy kupon: :title',
        'category' => "GRATULACJE, NOWY VOUCHER",
        'message' => "Hej :name,<br><br>Otrzymałeś od nas nowy kupon w prezencie! Możesz zdobyć jeszcze więcej kuponów, przedstawiając Selldone swoim znajomym i wszystkim, których znasz. Wartość tego kuponu wynosi **:price :currency**.<br><br>Zrobiłeś pierwszy krok, a my pomożemy Ci odblokować nowe funkcje za pomocą Twojego kuponu! Zaloguj się za pomocą **:email** i znajdź swój kupon w sklepie **Dashboard** > **Ustawienia** > **Licencja**.<br><br>Gratulacje!",
        'action' => "Moja tablica",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Gratulacje, drogi :name|Otrzymałeś wyjątkowy prezent!',
        'category' => "Ogłoszenie otrzymania prezentu",
        'title' => "Prezenty dla Ciebie",
        'message' => "Cześć :name, z radością informujemy, że otrzymałeś specjalny prezent od Selldone! 🎉 Możesz zdobyć więcej prezentów, pozostając aktywnym, rozwijając swój sklep i pogłębiając swoją wiedzę na temat Selldone. Aby sprawdzić swój prezent, po prostu zaloguj się za pomocą :email i poszukaj go w prawym górnym rogu pulpitu nawigacyjnego.<br><br>Ten prezent jest wart **:price :currency** i możesz go łatwo wpłacić do swojego portfela w ramach Selldone.<br><br>Wykorzystaj swój prezent, aby ulepszyć swój wykup licencję sklepu i odblokuj jeszcze potężniejsze narzędzia, które wzmocnią Twój biznes w Internecie!",
        'action' => "Prezenty",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Otrzymano nowe zamówienie| :order_id",
        'title' => "New Order",
        'message' => "Otrzymałeś nowe zamówienie. Przejdź do strony przetwarzania zamówienia w swoim sklepie.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Twoje wypełnione informacje',
        'output-form-title' => 'Informacje o zakupionym przedmiocie',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬:shop_title|Raport tygodniowy :time',
        'title' => 'Tygodniowy raport wydajności sklepu',
        'message' => "To jest tygodniowy raport Twojego sklepu od <b>:start</b> do <b>:end</b>. Raport ten zawiera wskazówki, jak ulepszyć Twój biznes, możesz także sprawdzić status swojego sklepu internetowego i ostatnie zamówienia. Mam nadzieję, że nadchodzący dzień i tydzień będą dla Was miłe."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Twój raport oszczędności :amount w ciągu ostatnich trzech miesięcy| :shop_title',
        'title' => 'Raport sezonowy o Twojej działalności, nagrodach i oszczędnościach finansowych',
        'message' => "To jest Twój raport sezonowy <b>:shop_title</b> od <b>:start</b> do <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Połączone konta',
        'sub-title' => 'Jaki jest najnowszy stan kont portfela połączonych z moim sklepem?',
        'view-wallet' => 'Zobacz portfel',
        'tip-title' => 'Ważne wskazówki',
        'tip' => "Załóż darmowy portfel Selldone i połącz go ze swoim sklepem. Nawet jeśli Twoje saldo jest ujemne, Twoi klienci nadal mogą robić zakupy i płacić bez żadnych problemów. Nie martw się, działanie i dane Twojego sklepu będą działać sprawnie nawet przez 1 miesiąc, bez żadnych przerw.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Połącz z kontem'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Zainstalowane aplikacje',
        'sub-title' => 'Lista aplikacji, które zainstalowałeś w swoim sklepie w tym tygodniu.',
        'tip' => "Chcesz znaleźć więcej aplikacji do swojego sklepu?",
        'view-app-store' => 'Odwiedź Selldone App Store..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Twoje boty w sklepie',
        'sub-title' => 'Aktywne boty sprzedażowe w moim sklepie.',
        'tip-title' => 'Wyprzedaż botów',
        'tip' => "Selldone udostępnił Ci automatyczne boty sprzedażowe. Wszystko, co musisz zrobić, to przejść do panelu Dodatki> Boty i aktywować boty sklepu. Pamiętaj, że odpowiednia usługa musi być dostępna w Twoim kraju.",
        'view-bots' => 'Zarządzaj botami',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Komunikacja z Klientami',
        'sub-title' => 'Ile kontaktów miałem w tym tygodniu z moimi klientami?',
        'faqs' => 'Często Zadawane Pytania',
        'tickets' => 'Bilety klienta',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Status użytkowników',
        'sub-title' => 'Aktywność od :start do :end',
        'users' => [
            'title' => 'Klienci',
            'subtitle' => 'Rejestracja użytkowników',
        ],
        'views' => [
            'title' => 'Odwiedziny',
            'subtitle' => 'Ile razy odwiedziłeś sklep',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Zwróceni użytkownicy',

        'shop_views' => 'Widoki sklepu',
        'baskets' => [
            'title' => 'Wózki na zakupy',
            'subtitle' => 'Zgłoś liczbę nowych koszyków',
        ],
        'products' => [
            'title' => 'Przegląd produktów',
            'subtitle' => 'Status produktów w sklepie według typu',
            'value_name' => 'Produkty'
        ],
        'products_count' => 'Rodzaje produktów',
        'views_count' => 'Licznik wyświetleń',
        'sell_count' => 'Sprzedaj licznik',
        'send_count' => 'Liczba przesyłek',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Panel dla głównych sprzedawców Drop Shipping Selldone.',
        'total_fulfillments' => 'Łączna liczba otrzymanych zamówień',
        'ds_count' => 'Otrzymane zamówienia',
        'statistics_title' => 'Zgłoś otrzymane zamówienia',
        'ds_cancels' => 'Anuluj przez sprzedawcę interfejsu',
        'ds_rejects' => 'Anuluj przez Ciebie',
        'tip' => "Czy jesteś głównym sprzedawcą towarów? Posiadasz magazyn, fabrykę lub dystrybutora produktów? Możesz oferować swoje produkty innym sprzedawcom w usłudze Selldone Drop Shipping, aby sprzedawać swój produkt na dużą skalę. Napisz do nas na support@selldone.com, aby Cię poprowadzić.",
        'view-drop-shipping-panel' => 'Zaloguj się do panelu hurtowego',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Kurs wymiany',
        'sub-title' => 'Lista najnowszych kursów wymiany walut w Twoim sklepie.',
        'from' => 'Waluta źródłowa',
        'to' => 'Waluta docelowa',
        'rate' => 'Współczynnik konwersji',
        'view-exchange-panel' => 'Zarządzaj kursami wymiany',
    

        'vew-exchange-panel' => 'panel zarządzania kursami walut',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Kontrakty eksperckie',
        'sub-title' => 'Jacy profesjonaliści pracują w moim sklepie?',
        'cost' => 'Kwota kontraktu',
        'duration' => 'Czas trwania',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Data Anuluj',
        'end_at' => 'Data dostarczenia',
        'tip' => 'Możesz zatrudnić najlepszych specjalistów w Selldone, aby rozwijać swój biznes.',
        'view-experts' => 'Kliknij, aby rozpocząć.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Zgłoś aktywne bramki płatności w sklepie :shop.',
        'tip-title' => 'Ważne wskazówki',
        'tip' => "Przejdź do strony zarządzania portalem w swoim sklepie i dodaj co najmniej jeden port w ciągu kilku minut. Twoi klienci lubią płacić szybko i bezpiecznie za pośrednictwem portali internetowych.",
        'view-shop-gateways' => 'Zaloguj się do zarządzania portalem mojego sklepu.',
        'view-gateways' => 'Zobacz więcej bram',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Zamówienia',
        'sub-title' => 'Lista zamówień, które otrzymałem w tym tygodniu.',
        'total_baskets' => 'Razem zamówienia',
        'total_posBaskets' => 'Łączne zamówienia gotówkowe',
        'pos-title' => 'Pudełko sklepu POS',
        'chart-label' => 'Zamówienia zrealizowane (te zamówienia niekoniecznie są płatne!)',
        'tip-title' => 'Powinieneś spróbować mocniej ...',
        'tip' => "Nie ma prostego sukcesu.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Centrum przetwarzania',
        'sub-title' => 'Ile zamówień przetworzyliśmy w sklepie w tym tygodniu?',
        'tip-title' => 'Nie miałeś wyprzedaży!',
        'tip' => "Niestety w tym tygodniu nie miałeś żadnych wyprzedaży. Potrzebujesz więcej do swojego sklepu. Możesz dodać więcej produktów, wybrać lepsze zdjęcia lub napisać lepsze opisy swoich produktów. Zastanów się nad pracą na pełen etat dla swojej firmy. Jeśli zrobisz to dobrze i nie będziesz sfrustrowany, odniesiesz sukces.",
        'view-process-center' => 'Zobacz centrum przetwarzania',
        'return' => [
            'title' => 'Zwrócone zamówienie',
            'subtitle' => 'Zgłoś zwrócone zamówienia.',
            'tip-title' => 'Czy wiedziałeś o tym ...',
            'tip' => "Dzięki Selldone POS możesz utworzyć dowolną liczbę kas fiskalnych! Niezależnie od tego, czy jest to tablet, telefon komórkowy czy laptop, możesz zamienić dowolne urządzenie w punkt sprzedaży swojego sklepu. Jest prosty, szybki w konfiguracji i w pełni przygotowany dla Twojego serwera. Zacznij go używać już dziś!",
            'view-pos' => 'Zaloguj się do Kasjera mojego sklepu internetowego'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sesje',
        'sub-title' => 'Ile razy odwiedziłem mój sklep?',
        'countries-title' => 'Które kraje były najczęściej odwiedzane?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Chcesz zarabiać nie wydając ani złotówki?',
        'message' => "Drogi :name, możesz przejść do Dashboard > Demonetization i utworzyć link polecający. Wyślij link do znajomych, Otrzymasz karty podarunkowe Selldone i procent od wpłat znajomego. Pamiętaj, że karta podarunkowa zostanie wysłana zarówno do Ciebie, jak i do Twojego znajomego.",
        'action' => 'Wyświetl mój link wprowadzający',
        'mail-clip' => "<b style='color: #C2185B'>Ważne:</b> jeśli korzystasz z usług poczty e-mail, takich jak Gmail, które ograniczają długość wiadomości e-mail, znajdź następującą opcję na końcu wiadomości e-mail, aby wyświetlić pełny raport, i kliknij ją:",

        'no-coin-reward' => "<b style='color: #C2185B'>Przepraszamy:</b> Twoja aktywność nie spełniała wymagań, aby otrzymać darmową nagrodę w postaci monet SEL. Staraj się i sprzedawaj więcej w swoim sklepie na następny sezon.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Nagroda:</b> Gratulacje, z powodu twojego fantastycznego występu, daliśmy ci darmową nagrodę :amount SEL Coin.",

        'need-buy-license' => "<b>Rozwiń swój biznes:</b> Wygląda na to, że nie zarejestrowałeś jeszcze żadnego planu subskrypcji dla swojej witryny! Uaktualnij teraz, aby odblokować więcej funkcji za jedyne :amount miesięcznie, jeśli płacisz rocznie.",
        'not-afford-message' => "Jeśli nie możesz sobie pozwolić lub masz problem z płatnością, skontaktuj się z nami poprzez support@selldone.com.",
        'add-domain' => "<b>Dlaczego nie mieć niestandardowej domeny dla swojej firmy?</b><br> Dodaj domenę do swojej witryny teraz; jest wolne!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone to <del>produkt</del> <span style = 'color: forestgreen'> społeczność</span>.<br>Bądź profesjonalnym sprzedawcą!",
        'message' => "Śledź oficjalne strony Selldone na Twitterze, LinkedIn i portalach społecznościowych. Wyślij nam wszelkie uwagi, prośby lub uwagi krytyczne lub weź udział w dyskusjach na temat Selldone. Jesteśmy także częścią społeczności Selldone, którą <b>You tworzysz</b>."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Otrzymano nowe zamówienia na awokado|:shop_title :time',
        'title' => "Raport skuteczności z ostatnich 24 godzin",
        'message' => "Twoi klienci czekają na sprawdzenie i wycenę Twoich zamówień. Odpowiadaj na prośby swoich klientów tak szybko, jak to możliwe, aby zwiększyć sprzedaż.",
        'card_title' => "Zamówienia w kolejce",
        'card_subtitle' => "Od :date",

        'card_payed' => "Opłacone zamówienia"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Odpowiedz na swój post w :community_title',
        'title' => ":name i :count inni skomentowali Twoje posty.",
        'message' => "Cześć :name, Twoje posty przyciągają uwagę! Otrzymałeś komentarze w naszej społeczności. Zaloguj się na swoje konto, aby dołączyć do dyskusji i zobaczyć, co mówią wszyscy.",
        'title-simple' => ":name skomentował Twój post!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Odpowiedz na swój temat :topic_title',
        'title' => ":name i :count inni odpowiedzieli na Twój temat.",
        'message' => "Cześć :name, Twój temat przyciąga uwagę! Otrzymałeś odpowiedzi w naszej społeczności. Zaloguj się na swoje konto, aby dołączyć do dyskusji i zobaczyć, co mówią wszyscy.",
        'title-simple' => ":name odpowiedział na Twój temat.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Nowy login :name',
        'category' => 'Powiadomienia dotyczące bezpieczeństwa',
        'title' => "Zaloguj się do konta",
        'message' => "Drogi :name, byłeś zalogowany do swojego konta Selldone.",   // Login in selldone (seller)
        'message-shop' => "Drogi :name, zalogowałeś się do :shop_title .",  // Login in shop (buyer)

        'footer' => "Jeśli nie jesteś zalogowany, zmień hasło.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Wycofanie",
        'deposit' => "Depozyt",

        'withdraw_subject' => "Wypłata z konta :account",
        'deposit_subject' => "Wpłata na konto :account",

        'message' => "Przelew został wykonany z następującymi specyfikacjami.",

        'type' => "Typ transakcji",

        'from' => "Konto źródłowe",
        'to' => "Destination account",

        'desc' => "Opis transakcji",
        'action' => "Zobacz transakcję",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Ważne! Naruszenie zasad| :shop",
        'category' => "Informacje krytyczne",
        'title' => "Twój sklep został ukarany",
        'action' => "Otwórz pulpit nawigacyjny sklepu",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter zaprosił Cię do przyłączenia się do Selldone",
        'title' => ":name wysłał Ci :amount, aby pomóc Ci uruchomić Twój nowy sklep internetowy i zarabiać na nim!",
        'message' => "Cześć **:receiver_name**,<br><br>Witamy w Selldone! Za pomocą Selldone możesz łatwo utworzyć witrynę e-commerce, blog, społeczność internetową, a nawet skonfigurować internetowy system POS do sprzedaży osobistej – a wszystko to w ciągu kilku minut. To kompletny system operacyjny dla firm online, zaprojektowany tak, aby Twoja firma była lepsza, szybsza i łatwiejsza w prowadzeniu.<br><br>Zarejestruj się przez <b>:date</b> i otrzymaj kupon :amount na początek!",
        'accept' => "Przyjąć zaproszenie",
        'owner' => "Właściciel",
        'join-date' => "Dołączył do Selldone w dniu",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Link do odzyskiwania| :shop",
        'category' => "Bezpieczeństwo sklepu",
        'title' => "Link do odzyskiwania sklepu <b>:shop_name</b>.",
        'message' => "Ta wiadomość e-mail została do Ciebie wysłana, ponieważ poprosiłeś o przywrócenie sklepu. Kliknięcie w poniższy link spowoduje odzyskanie Twojego sklepu i wszystkich należących do niego danych.",
        'action' => "Potwierdź odzyskanie sklepu",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Ile pieniędzy Selldone zaoszczędziło dla Twojej firmy?',
        'sub-title' => 'Od daty :start do :end',
        'infrastructure' => [
            'title' => 'Infrastruktura',
            'subtitle' => 'Serwery, CDN, pamięć masowa i inne usługi w chmurze',
        ],
        'experts' => [
            'title' => 'Eksperci i personel',
            'subtitle' => 'Deweloperzy, utrzymanie i wsparcie',
        ],
        'total_save' => 'Razem zaoszczędzone pieniądze'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Twój występ',
        'sub-title' => 'Przegląd działalności od :start do :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Zwróceni użytkownicy',

        'shop_views' => 'Widoki sklepu',
        'baskets' => [
            'title' => 'Wózki na zakupy',
            'subtitle' => 'Zgłoś liczbę nowych koszyków',

        ],
        'products' => [
            'title' => 'Przegląd produktów',
            'subtitle' => 'Status produktów w sklepie według typu',
            'value_name' => 'Produkty'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Całkowita liczba wyświetleń strony internetowej',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Otrzymałeś nowe zamówienie. Przejdź na stronę przetwarzania zamówienia w panelu sprzedawcy.",
        'subject' => "🛍️ Otrzymano nowe zamówienie| :order_id",
        'your_revenue' => "Twój dochód",
    ],
    'vendor-invite' => [
        'title' => 'Zaproszenie dla sprzedawcy',
        'message' => "Otrzymałeś zaproszenie do zostania sprzedawcą :shop_name. Możesz je zaakceptować lub odrzucić, klikając na następujące przyciski.",
        'subject' => ":shop_name | Otrzymałeś zaproszenie do zostania naszym dostawcą",
        'accept' => "Akceptuj i zostań dostawcą",
        'reject' => "Odrzucić",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Zaproszenie do dołączenia do naszego zespołu',
        'message' => "Zostałeś zaproszony do dołączenia do :vendor_name w :shop_name. Możesz zaakceptować lub odrzucić to zaproszenie, korzystając z poniższych przycisków.",
        'subject' => "Zaproszenie do przyłączenia się do :vendor_name|Zostań członkiem zespołu",
        'accept' => "Zaakceptuj i dołącz do zespołu",
        'reject' => "Odrzuć",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Twój kod logowania dla :shop",
        'header-message' => "Wysyłamy Ci ten e-mail, ponieważ poprosiłeś o kod logowania do sklepu. Poniżej znajdziesz swoje jednorazowe hasło (OTP):",
        'footer-message' => "Ten kod będzie ważny przez 10 minut. Jeśli nie poprosiłeś o ten kod logowania, zignoruj ten e-mail."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Zweryfikuj swój adres e-mail | :shop",
        'title' => 'Weryfikacja adresu e-mail',
        'header-message' => "Cześć :name,<br> Potwierdź, że **:email** jest Twoim adresem e-mail, klikając przycisk lub korzystając z poniższego łącza w ciągu 48 godzin.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Aktualizacje produktów| :shop",
        'title' => "Aktualizacja statusu produktu – ostatnie 24 godziny",
        'message' => "Mam nadzieję, że ta wiadomość zastanie Cię w dobrym zdrowiu. To jest krótka aktualizacja, która informuje Cię o stanie Twoich produktów na naszej platformie w ciągu ostatnich 24 godzin.\nW tym okresie nastąpiły zmiany w statusie niektórych produktów. Zmiany te mogą wynikać z zakupów, aktualizacji zapasów lub innych powiązanych wydarzeń.\nAby uzyskać bardziej szczegółowe informacje o każdym produkcie, zaloguj się na swoje konto i sprawdź sekcję „Status produktu”.",
        'action' => "Otwórz panel dostawcy",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Otrzymano zamówienia zbiorcze| :shop | :date",
        'title' => "Powiadomienie o zamówieniach zbiorczych",
        'message' => "Otrzymałeś partię zamówień zbiorczych. Aby uzyskać więcej informacji, odwiedź stronę przetwarzania zamówienia w swoim panelu. Możesz także pobrać listę zamówień za pomocą podanego bezpiecznego łącza, ważnego przez 7 dni.<br><br>\n        <b>WAŻNE:</b> Ten link jest ważny przez 7 dni.<br>\n        Ten link jest dynamiczny, więc za każdym razem, gdy go klikniesz, otrzymasz najbardziej aktualne zamówienia na ten konkretny dzień. <b>Oznacza to, że jeśli status płatności zamówienia zmieni się na odrzucone, nie będziesz już widzieć tego zamówienia w pobranym pliku CSV lub jeśli zamówienie zostało opłacone, pojawi się ono na liście.</b><br><br>\n        <ul>\n            <li> CSV zawiera opłacone zamówienia z zarezerwowaną datą w :date.</li>\n            <li>Zarezerwowana data to data, w której użytkownik kliknie opcję realizacji zakupu na stronie zamówienia.</li>\n        </ul>\n        <b>Aby zapobiec duplikowaniu zamówień, zawsze sprawdź zamówienie ID przed wysłaniem.</b>",
        'action' => "Pobierz listę zamówień",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Niektóre pozycje w Twoim zamówieniu nie zostały przyjęte i nie mogą zostać dostarczone. Kwota za te przedmioty zostanie wkrótce zwrócona na Twoją kartę."
    ]

];
