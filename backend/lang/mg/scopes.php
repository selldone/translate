<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Ny vidiny sy ny fotoana nitarika ny Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Fepetra ny fidirana amin\'ny mpampiasa vola.
Sary',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Vakio ny mombamomba ny mpampiasa.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Vakio ny laharan-telefaona.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Vakio sy havaozy ny adiresy voatahiry.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Fanavaozana ny mombamomba ny mpampiasa.
Sary',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Mametraha baiko.
Sary',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Jereo ny tantaran\'ny kaomandy.
Sary',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Access karatra fanomezana.
Sary',

    AuthServiceProvider::SCOPE_ARTICLES => 'Ahitsio lahatsoratra.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Tantano ny fampahafantarana.
Sary',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Jereo ny lisitry ny fivarotana.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Ahitsio ny antsipirian\'ny fivarotana.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Manampia fivarotana vaovao.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Fafao ny fivarotana.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Tantano ny tapakila fanohanana.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Mitantana karatra fanomezana.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Jereo ny karatra fanomezana.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Mitantana FAQs.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Jereo ny FAQs.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Mitantana sokajy.
Ampahany',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Jereo ny sokajy.
Sary',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Mitantana vokatra.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Jereo ny vokatra.
Sary',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Jereo ny tatitra.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Mitantana kaonty ara-bola.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Jereo ny kaonty ara-bola.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Ahitsio ny pejin\'ny fivarotana.
Ampahany',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Jereo ny pejy fivarotana.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Mitantana trano fanatobiana entana.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Jereo ny trano fanatobiana entana.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Tantano ny fidiran\'ny mpiasa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Jereo ny fidiran\'ny mpiasa.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Jereo ny baiko.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Mitantana baiko.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Tantano ny mombamomba ny raharaham-barotra.
Ampahany',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Jereo ny mombamomba ny orinasa.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Tantano ny kaody fihenam-bidy.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Jereo ny kaody fihenam-bidy.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Mitantana tapakila.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Jereo ny tapakila.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Mitantana tolotra.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Jereo ny tolotra.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Mitantana cashbacks.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Jereo ny cashbacks.
Sary',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Mitantana loteria.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Jereo ny loteria.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Mitantana fiaraha-monina.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Jereo ny fiaraha-monina.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Mitantana mpanjifa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Jereo ny mpanjifa.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Tantano ny famandrihana.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Jereo ny famandrihana.
Sary',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Jereo ny baikon\'ny mpivarotra.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Tantano ny baikon\'ny mpivarotra sy ny fandoavam-bola.
Sary',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Tantano ny mpamatsy fifandraisana.
Ampahany',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Jereo ny mpamatsy fifandraisana.
Sary',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Manatanteraka baiko AI.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Jereo ny fampahalalana AI.
Sary',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Tantano ny fandoavana ny mpivarotra.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Jereo ny fandoavana ny mpivarotra.
Sary',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Jereo ny mombamomba ny orinasa.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Tantano ny mombamomba ny raharaham-barotra.
Ampahany',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Jereo ny mombamomba ny masoivoho.
Sary',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Tantano ny mombamomba ny masoivoho.
Sary',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Jereo ny naoty fivarotana.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Mitantana naoty fivarotana.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Jereo ny fananana developer.
Sary',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Tantano ny fananan\'ny developer.
Sary',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Midira amin\'ny mombamomba manokana sy ny firafitry ny kaonty.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Tantano ny poketra sy ny fifampiraharahana.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Jereo ny fifanakalozana amin\'ny kitapom-bola.
Sary',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Jereo ny token\'ny OAuth sy ny mpanjifa.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Mitantana marika sy mpanjifa OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Tantano ny firafitry ny fiarovana.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Mitantana mpiara-miasa.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Jereo ireo mpiara-miasa.
Sary',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Tantano ny lasitra fanontana.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Jereo ny môdely fanontana.
Sary',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Mitantana hevitra.
Sary',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Jereo ny hevitra.
Sary',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Jereo ny fampahafantarana momba ny vola.
Sary',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Tantano ny fampahafantarana momba ny vola.',



    'profile' => 'Vakio ny mombamomba ny mombamomba misy anarana, adiresy mailaka, sary ary sata fanamarinana.',
    'phone' => 'Fidirana laharana fifandraisana',
    'address' => 'Vakio sy ovay ny adiresy avy amin\'ny bokin\'ny adiresy voatahiry',
    'buy' => 'Kaomandy & Fivarotana.',
    'order-history' => 'Vakio ny tantaran\'ny baiko.',
    'my-gift-cards' => 'Fidirana amin\'ny karatra fanomezana ahy.',
    'articles' => 'Ahitsio Lahatsoratra.',
    'notifications' => 'Mandefa sy mandray fampandrenesana.',
    'read-shops' => 'Vakio ny lisitry ny fivarotana.',
    'shop-edit' => 'Mitahiry fidirana amin\'ny fanovana.',
    'shop-contacts' => 'Raiso sy ovay ny taratasy fifandraisana.',
    'shop-gift-cards' => 'Mamorona, manova ary mitantana karatra.',
    'shop-faqs' => 'Mamorona, manitsy ary mitantana fanontaniana apetraka matetika.',
    'shop-categories' => 'Mamorona, manova ary mitantana sokajy.',
    'backoffice-write-products' => 'Omeo alalana ny famoronana, fanitsiana ary fitantanana ny vokatra ao amin\'ny birao aoriana.',
    'backoffice-read-products' => 'Omeo alalana hijerena ny lisitry ny vokatra sy ny mombamomba ny vokatra amin\'ny antsipiriany ao amin\'ny birao aoriana.',
    'shop-read-reports' => 'Vakio ny vaovao sy ny tatitra.',
    'shop-socials' => 'Ahitsio ny tambajotra sosialy fivarotana.',
    'shop-accounts' => 'Ahitsio sy fafao ny kaonty ara-bola mifandray amin\'ny fivarotana.',
    'shop-menus' => 'Ahitsio ny menio fivarotana.',
    'shop-pages' => 'Ahitsio ny pejin\'ny fivarotana.',
    'shop-warehouse' => 'Ahitsio Trano fitehirizam-bokatra',
    'shop-permissions' => 'Jereo sy ovay ny fidirana amin\'ny fivarotana.',
    'shop-process-center' => 'Mitantana baiko voaray.',
    'shop-profile' => 'Tantano ny mombamomba ny fivarotana.',
    'shop-discount-code' => 'Tantano ny kaody fihenam-bidy.',
    'shop-coupon' => 'Mitantana tapakila.',
    'shop-offer' => 'Mitantana tolotra.',
    'shop-cashback' => 'Mitantana cashbacks.',
    'shop-lottery' => 'Mitantana loteria.',
    'shop-community' => 'Mitantana fiaraha-monina.',
    'shop-customers' => 'Mitantana mpanjifa.',
    'shop-ribbon' => 'Tantano ny famandrihana Ribbon.',
    'community-read' => 'Vakio ny vondrom-piarahamonina Selldone.',
    'community-write' => 'Manorata vondrom-piarahamonina seldone.',
    'profile-write' => 'Soraty ny mombamomba ny mombamomba ny mpampiasa.',
    'vendor-read' => 'Fidirana amin\'ny hetsika fanatanterahana ny baikon\'ny mpivarotra.',
    'vendor-write' => 'Manova baiko, fandoavam-bola ary fampahalalana hafa momba ny mpivarotra.',
    'connect-providers' => 'Ampio, vakio ary soraty ireo mpamatsy mampifandray.',
    'personal-identification' => 'Vakio ny mombamomba anao manokana, ny fidirana ary ny config kaonty.',
    'accounts' => 'Fidirana amin\'ny kitapom-bola, mamaky ny fifampiraharahana ary ny tantara ambony.',
    'shop-add' => 'Hanampy fivarotana vaovao.',
    'shop-delete' => 'Esory fivarotana.',
    'shop-ai-write' => 'Mamela ny mpampiasa manatanteraka baiko AI.',
    'shop-ai-read' => 'Mamela ny mpampiasa miditra amin\'ny fampahalalana AI tsy misy baiko.',
    'vendor-payment' => 'Mamela ny mpampiasa hampiditra firaketana fandoavam-bola ho an\'ny mpivarotra na mamindra vola amin\'ny kaontiny mifandray toa ny Stripe Connect.',
    'company-read' => 'Avelao hamaky ny mombamomba ny mombamomba ny orinasa.',
    'company-write' => 'Mamela ny mamaky sy manoratra ny mombamomba ny mombamomba ny orinasa.',
    'agency-read' => 'Avelao hamaky ny mombamomba ny masoivoho.',
    'agency-write' => 'Mamela ny mamaky sy manoratra ny mombamomba ny masoivoho.',
    'note-read' => 'Mamela ny mamaky naoty fivarotana.',
    'note-write' => 'Mamela ny mamaky sy manoratra naoty fivarotana.',
    'developer-read' => 'Mamela ny mamaky ny fananan\'ny mpamorona.',
    'developer-write' => 'Mamela ny mamaky sy manoratra ny fananan\'ny mpamorona.',
    'tokens-read' => 'Vakio ny token\'ny Oauth sy ny mpanjifa.',
    'tokens-write' => 'Manorata famantarana sy mpanjifa Oauth.',
];
