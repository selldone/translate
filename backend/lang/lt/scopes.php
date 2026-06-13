<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone administratoriaus sritis.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Apribota investuotojų prieiga.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Skaitykite vartotojo profilio informaciją.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Skaityti telefono numerį.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Skaityti ir atnaujinti išsaugotus adresus.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Atnaujinti vartotojo profilį.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Pateikite užsakymus.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Peržiūrėkite užsakymų istoriją.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Prisijunkite prie dovanų kortelių.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Redaguoti straipsnius.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Tvarkyti pranešimus.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Peržiūrėkite parduotuvių sąrašą.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Redaguoti parduotuvės informaciją.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Pridėti naują parduotuvę.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Ištrinti parduotuvę.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Tvarkykite palaikymo bilietus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Tvarkykite dovanų korteles.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Peržiūrėkite dovanų korteles.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Tvarkyti DUK.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Peržiūrėkite DUK.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Tvarkyti kategorijas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Peržiūrėkite kategorijas.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Tvarkyti produktus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Peržiūrėkite produktus.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Peržiūrėkite ataskaitas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Tvarkyti finansines sąskaitas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Peržiūrėkite finansines sąskaitas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Redaguoti parduotuvės puslapius.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Peržiūrėkite parduotuvės puslapius.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Tvarkyti sandėlį.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Žiūrėti sandėlį.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Valdykite darbuotojų prieigą.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Peržiūrėkite darbuotojų prieigą.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Peržiūrėkite užsakymus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Tvarkyti užsakymus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Tvarkyti verslo profilį.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Peržiūrėti įmonės profilį.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Tvarkykite nuolaidų kodus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Žiūrėti nuolaidų kodus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Tvarkyti kuponus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Žiūrėti kuponus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Tvarkyti pasiūlymus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Žiūrėti pasiūlymus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Tvarkykite pinigų grąžinimus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Peržiūrėkite grynųjų pinigų grąžinimus.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Tvarkyti loterijas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Žiūrėti loterijas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Manage community.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Žiūrėti bendruomenę.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Tvarkyti klientus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Peržiūrėkite klientus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Tvarkyti prenumeratas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Peržiūrėkite prenumeratas.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Peržiūrėkite tiekėjo užsakymus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Tvarkykite pardavėjo užsakymus ir mokėjimus.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Tvarkykite ryšio tiekėjus.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Peržiūrėkite prisijungimo teikėjus.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Vykdykite AI komandas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Peržiūrėkite AI informaciją.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Tvarkyti pardavėjo mokėjimus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Peržiūrėkite pardavėjo mokėjimus.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Peržiūrėti įmonės profilį.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Tvarkyti verslo profilį.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Peržiūrėkite agentūros informaciją.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Tvarkykite agentūros informaciją.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Peržiūrėkite parduotuvės užrašus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Tvarkykite parduotuvės užrašus.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Peržiūrėkite kūrėjo išteklius.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Tvarkykite kūrėjo išteklius.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Pasiekite asmeninę informaciją ir paskyros nustatymus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Tvarkykite piniginę ir operacijas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Peržiūrėkite piniginės operacijas.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Peržiūrėkite OAuth žetonus ir klientus.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Tvarkykite OAuth žetonus ir klientus.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Tvarkyti saugos nustatymus.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Valdykite filialus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Peržiūrėkite filialus.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Tvarkykite spausdinimo šablonus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'View print templates.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Tvarkyti atsiliepimus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Peržiūrėkite atsiliepimus.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Peržiūrėkite pajamų gavimo informaciją.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Tvarkykite pajamų gavimo informaciją.',



    'profile' => 'Skaitykite profilio informaciją, įskaitant vardą, el. pašto adresą, vaizdą ir autentifikavimo būseną.',
    'phone' => 'Prieiga prie kontaktinio numerio',
    'address' => 'Skaityti ir redaguoti adresą iš išsaugotos adresų knygos',
    'buy' => 'Užsakymas ir užsakymas parduotuvėje.',
    'order-history' => 'Skaityti užsakymų istoriją.',
    'my-gift-cards' => 'Prieiga prie mano dovanų kortelių.',
    'articles' => 'Redaguoti straipsnius.',
    'notifications' => 'Siųskite ir gaukite pranešimus.',
    'read-shops' => 'Skaityti parduotuvių sąrašą.',
    'shop-edit' => 'Parduotuvės redagavimo prieiga.',
    'shop-contacts' => 'Gaukite ir redaguokite kontaktų formas.',
    'shop-gift-cards' => 'Kortelių kūrimas, redagavimas ir tvarkymas.',
    'shop-faqs' => 'Kurkite, redaguokite ir tvarkykite dažniausiai užduodamus klausimus.',
    'shop-categories' => 'Kategorijų kūrimas, redagavimas ir tvarkymas.',
    'backoffice-write-products' => 'Įgalioti kurti, redaguoti ir tvarkyti produktus atgaliniame biure.',
    'backoffice-read-products' => 'Suteikite prieigą, kad peržiūrėtumėte produktų sąrašą ir išsamią produktų informaciją „back office“.',
    'shop-read-reports' => 'Skaitykite informaciją ir ataskaitas.',
    'shop-socials' => 'Redaguoti parduotuvės socialinius tinklus.',
    'shop-accounts' => 'Redaguokite ir ištrinkite su parduotuve susietas finansines sąskaitas.',
    'shop-menus' => 'Redaguoti parduotuvės meniu.',
    'shop-pages' => 'Redaguoti parduotuvės puslapius.',
    'shop-warehouse' => 'Redaguoti parduotuvės sandėlį',
    'shop-permissions' => 'Peržiūrėkite ir redaguokite parduotuvės prieigą.',
    'shop-process-center' => 'Tvarkyti gautus užsakymus.',
    'shop-profile' => 'Tvarkykite parduotuvių profilius.',
    'shop-discount-code' => 'Tvarkykite nuolaidų kodus.',
    'shop-coupon' => 'Tvarkyti kuponus.',
    'shop-offer' => 'Tvarkyti pasiūlymus.',
    'shop-cashback' => 'Tvarkykite grynųjų pinigų grąžinimus.',
    'shop-lottery' => 'Tvarkyti loterijas.',
    'shop-community' => 'Tvarkyti bendruomenę.',
    'shop-customers' => 'Tvarkyti klientus.',
    'shop-ribbon' => 'Tvarkykite juostelės prenumeratas.',
    'community-read' => 'Skaitykite Selldone bendruomenę.',
    'community-write' => 'Rašykite parduotą bendruomenę.',
    'profile-write' => 'Parašykite vartotojo profilio informaciją.',
    'vendor-read' => 'Prieiga prie tiekėjo užsakymų vykdymo veiksmų.',
    'vendor-write' => 'Keisti užsakymus, mokėjimą ir kitą pardavėjo informaciją.',
    'connect-providers' => 'Pridėkite, skaitykite ir rašykite ryšio tiekėjus.',
    'personal-identification' => 'Skaitykite asmeninę informaciją, prieigas ir paskyros konfigūraciją.',
    'accounts' => 'Prieiga prie piniginių, skaitykite sandorius ir papildymo istorijas.',
    'shop-add' => 'Pridėti naują parduotuvę.',
    'shop-delete' => 'Pašalinkite parduotuvę.',
    'shop-ai-write' => 'Leidžia vartotojui vykdyti AI komandas.',
    'shop-ai-read' => 'Leidžia vartotojui pasiekti AI informaciją nevykdant komandų.',
    'vendor-payment' => 'Leidžia vartotojui pridėti pardavėjų mokėjimų įrašus arba pervesti lėšas per prijungtas sąskaitas, pvz., Stripe Connect.',
    'company-read' => 'Leidžia skaityti verslo profilio informaciją.',
    'company-write' => 'Leidžia skaityti ir rašyti verslo profilio informaciją.',
    'agency-read' => 'Leidžia skaityti agentūros informaciją.',
    'agency-write' => 'Leidžia skaityti ir rašyti agentūros informaciją.',
    'note-read' => 'Leidžia skaityti parduotuvės užrašus.',
    'note-write' => 'Leidžia skaityti ir rašyti parduotuvės užrašus.',
    'developer-read' => 'Leidžia skaityti kūrėjų išteklius.',
    'developer-write' => 'Leidžia skaityti ir rašyti kūrėjų turtą.',
    'tokens-read' => 'Skaitykite „Oauth“ prieigos raktus ir klientus.',
    'tokens-write' => 'Parašykite Oauth žetonus ir klientus.',
];
