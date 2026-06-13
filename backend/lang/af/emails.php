<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'This message welcomes a new buyer to the shop.',
        ShopMailTemplateCodes::OrderCheckout => 'This notification is sent when a buyer confirms an order.',
        ShopMailTemplateCodes::OrderPayment => 'This notification confirms the successful payment made by a customer.',
        ShopMailTemplateCodes::OrderUpdate => 'This message is sent to update a buyer on the status of their order.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'This message is sent to a seller to notify them of a confirmed order.',
        ShopMailTemplateCodes::PosCheckout => 'This notification is sent to confirm a point of sale order for a buyer.',
        ShopMailTemplateCodes::PosPayment => 'This notification confirms a point of sale payment made by a buyer.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'This message notifies the seller of a purchase made at their point of sale.',
        ShopMailTemplateCodes::ShopContact => 'This notification is sent when a contact form has been submitted.',
        ShopMailTemplateCodes::ShopGiftCard => 'This notification informs a user that they have received a gift card.',

        ShopMailTemplateCodes::ShopVendorJoin => 'This message welcomes a new vendor to the shop.',
        ShopMailTemplateCodes::ShopVendorInvite => "This message is dispatched to invite a vendor to join your marketplace.",
        ShopMailTemplateCodes::ShopVendorOrder => "This message is sent to the vendor when an order is received in either Paid or Cash on Delivery (COD) status.",
        ShopMailTemplateCodes::ShopVendorProducts => "Dispatched daily to update vendors on the status of their products.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "This message is sent to invite a vendor to join your marketplace.",

        ShopMailTemplateCodes::UserLogin => "Notify the user with login details, including IP address, date, and device, for security purposes.",
        ShopMailTemplateCodes::LoginCode => "Send a one-time password code for users to log into the store.",

        ShopMailTemplateCodes::EmailVerifyLink => "Send a link to verify the user's email address. This mail is sent when a user register by SMS and enter their email and is not sent when user register by social or email directly.",

        ShopMailTemplateCodes::EmailBulkOrder => "Send a list of received and paid orders in bulk for a specific day."


    ],


    'global' => [
        'greetings' => 'Hallo :name',
        'end-statement' => 'Ondersteuningspan',

        'receiver_name' => 'Hallo :user_name',
        'footer-help' => "Het jy hulp nodig? Vra by [support@selldone.com](mailto:support@selldone.com) of besoek ons [hulpsentrum](https://selldone.com/help)",
        'selldone-team' => 'The Selldone team',
        'footer-shop' => "As jy hulp nodig het met enigiets, moet asseblief nie huiwer om vir ons 'n e-pos te stuur nie: :shop_mail",
        'accept' => "Aanvaar",
        'reject' => "Verwerp",
        'verify' => "verifieer",
        'title' => "Titel",
        'value' => "Waarde",
        'description' => "Beskrywing",
        'shop' => "Winkel",
        'shop-info' => "Store Information",
        'user' => "Gebruiker",
        'user-info' => "Account Information",
        'license' => "Lisensie",
        'status' => "Status",
        'start' => "Begin",
        'end' => "Einde",
        'renewal' => "Hernuwing",
        'view' => "Beskou",

        'balance' => "Balans",
        'card_number' => "Kaart nommer",
        'cvv' => "Cvv",
        'expire_date' => "Verval datum",

        'Dashboard' => "Kontrolepaneel",
        'dashboard' => "dashboard",
        'order' => "bestel",
        'view_order' => "Besigtig bestelling",
        'pay_now' => "Pay now",

        'official_selldone' => "AMPTELIKE VERKOOP",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Geldeenheid",
        'free-balance' => "Gratis balans",
        'locked-balance' => "Geslote balans",
        'bot' => "Bot",
        'requests' => "Versoeke",
        'baskets' => 'Karretjies',
        'physical' => "Fisies",
        'virtual' => "Virtuele",
        'file' => "lêer",
        'service' => "Diens",
        'fulfillment' => "Vervulling",
        'open' => "Maak oop",
        'reserved' => "Voorbehou",
        'canceled' => "Gekanselleer",
        'payed' => "Betaal",
        'cod' => "COD",
        'orders-count' => 'Bestellings',
        'payments-count' => 'Betalings',
        'confirms-count' => 'Bevestig',
        'sends-count' => 'Stuur',
        'delivers-count' => 'Lewer af',
        'count' => 'Tel',
        'transactions-count' => 'Transaksies tel',
        'success-transactions' => 'Sukses transaksies',
        'total-amount' => 'Totale bedrag',
        'amount' => 'Bedrag',
        'wage' => 'Loon',
        'debug' => 'Ontfout',
        'pos' => 'POS',
        'live' => 'Leef',
        'CheckQueue' => 'Kontroleer tou',
        'OrderConfirm' => 'Bestelling bevestig',
        'PreparingOrder' => 'Berei bestelling voor',
        'SentOrder' => 'Bestelling gestuur',
        'ToCustomer' => 'Afgelewer by kliënt',
        'Pending' => 'Hangende',
        'Accepted' => 'Aanvaar',
        'Rejected' => 'Verwerp',
        'pc' => 'PC',
        'tablet' => 'Tablet',
        'phone' => 'Foon',
        'total' => 'Totaal',
        'view-detail' => 'Bekyk detail',
        'empty' => 'Leeg',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Antwoord',
        'reactions' => 'Reaksies',
        'Comments' => 'Kommentaar',
        'comments' => 'kommentaar',
        'last-comment' => 'Laaste opmerking',
        'response-to' => 'Antwoord op',
        'posts' => 'Plasings',
        'post' => 'Post',

        'name' => 'Naam',
        'email' => 'E-pos',
        'type' => 'tipe',
        'device' => 'Toestel',
        'platform' => 'Platform',
        'browser' => 'Blaaier',
        'time' => 'Tyd',
        'Wallet' => 'Beursie',
        'wallet' => 'beursie',
        'date' => 'Datum',

        'account' => 'Rekening',
        'transaction' => 'Transaksie',
        'fee' => 'Fooi',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Kategorie',
        'password' => 'Wagwoord',
        'verify-login' => "Verifieer en meld aan",
        'url' => 'URL',
        'avocado' => 'Avokado',
        'hyper' => 'Hiper',
        'buy-now' => "Koop nou",
        'add-domain' => "Add Domain",
        'views' => 'Uitsigte',


        'country' => 'Land',
        'address' => 'adres',
        'postal' => 'Poskode',
        'building_no' => 'Gebou #',
        'building_unit' => 'Eenheid #',
        'message' => 'Boodskap',


        'customer' => 'Kliënt',
        'cart-items' => 'Karretjie items',
        'payment' => 'Betaling',
        'receiver' => 'Ontvanger',
        'virtual-items' => 'Virtuele items',
        'no-payment' => 'Geen betaling nie!',

        'enable' => 'Aktiveer',
        'access' => 'Toegang',
        'bank' => 'Bank inligting',

        'vendor' => 'Verkoper',

        'view_content' => "Bekyk volledige inhoud",
        'files' => 'Lêers',
        'download' => 'Aflaai',
        'file_name' => 'Lêernaam',
        'file_size' => 'Grootte',

        'subscription' => 'Intekening',
        'products' => 'Produkte',
        'vendor_products' => 'Verkoper produkte',

        'pickup' => 'Pickup',

        'minutes'=>'Minutes',
        'hours'=>'Hours',

        'refund' => 'Refund',
        'recipient_address' => 'Recipient Address',
        'signature' => 'Signature',
        'blockchain' => 'Blockchain',
        'details' => 'Details',


    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Prestasieverslag, Selldone'],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Seisoenverslag, Selldone'],
        'Onboarding' => [
            'id' => 'Hi',
            'name' => 'Keur dit goed, Selldone'],
        'Support' => [
            'id' => 'support',
            'name' => 'Support :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Verifieer, Sellone'],
        'Welcome' => [
            'id' => 'Hi',
            'name' => 'Gemeenskap, Selldone'],
        'NewShop' => [
            'id' => 'handelaars',
            'name' => 'Keur dit goed, Selldone'],
        'Approve' => [
            'id' => 'goedkeur',
            'name' => 'Keur dit goed, Selldone'],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Orders Management :name'
        ],

        'Recovery' => [
            'id' => 'herstel',
            'name' => 'Selldone-herstelspan'],

    ],


    'bill-status' => [
        'PENDING' => 'Hangende ⌛',
        'PAYED' => 'Betaal ✅',
        'CANCELED' => 'Gekanselleer ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administrateur',
            'OFFICER' => 'Beampte en Toesighouer',
            'AUDITING' => 'Ouditbestuurder',
            'EMPLOYEE' => 'Werknemer',
            'PRODUCT' => 'Produkte bestuurder',
            'CONTENT' => 'Inhoudbestuurder',
            'MARKETING' => 'Bemarkings bestuurder',
            'VIEWER' => 'Kyker',

        ],
        'subject' => ":inviter Nooi jou as :level | :shop",
        'category' => "Personeel uitnodiging",
        'title' => "Jy is genooi na <b>:shop_name</b> as <b>:level</b> .",
        'message' => "You've received an invitation to collaborate with the <b>:shop_title</b> team in business. You have the option to accept or decline this offer. Should you choose to accept, please log in to the Selldone service to confirm your decision. Upon confirmation, you will gain access to the store management section.",

    ],

    'welcome-email' => [
        'subject' => "👋 Welkom :name, 'n paar interessante dinge net vir jou.",
        'category' => 'CONGRATULATION',
        'title' => "WELKOM BY SELLDONE",
        'message' => "Dankie dat jy Selldone gekies het, jy is nou deel van Selldone-gemeenskap wat globale verkopers met kliënte verbind, plaaslike besigheid tot onderneming, individu tot korporasie! Alle meester- en pro-gereedskap is **gratis** en **onbeperk** vir jou voorsien. Jy probeer, ons maak die deure oop, Doen dit net!",

        'index' => "Step :step. ",

        'step-domain' => [
            'title' => 'Add Your Custom Domain',
            'message' => "To get started, add your custom domain for free in the Shop Dashboard under Settings > Domains Settings.",
            'action' => 'Manage My Domains',
        ],
        'step-landing' => [
            'title' => 'Customize Your Home Page',
            'message' => "Personalize your home page by going to Dashboard > Pages. Choose a landing page or create a new one. It's easy and intuitive, and you can start working on it right away.",
            'action' => 'Customize My Landing Page',
        ],
        'step-payment' => [
            'title' => 'Setup Payment Methods',
            'message' => "Start accepting payments directly into your bank account. To connect your payment providers like Stripe, PayPal, and more, go to Dashboard > Accounting > Gateway.",
            'action' => 'Add Payment Methods',
        ],
        'step-products' => [
            'title' => 'Add Your Products',
            'message' => "Easily add products and categories in the Dashboard > Products. It's just like managing files and folders on your PC – fully drag-and-drop ready. You can also bulk import products using Excel. A sample template is available to help you get started.",
            'action' => 'Manage My Products',
        ],
        'step-shipping' => [
            'title' => 'Setup Shipping Methods',
            'message' => "To charge customers for shipping, define your shipping methods in the Dashboard > Logistic > Shipping. You can set different pricing and support for various locations. Don’t forget to set your warehouse origin in Dashboard > Logistic > Warehouse.",
            'action' => 'Manage Shipping Methods',
        ],
    ],


    'charge-account' => [
        'category' => 'Beursie > Rekening > Heffing',
        'title' => "Suksesheffing",
        'message' => "Your account <b>:account_number</b> has been successfully <b>:amount</b> charged.",
        'account' => 'Rekening',
        'charge' => 'Laai',
        'balance' => 'Balans',
        'footer' => "Maak besigheid maklik, haalbaar en toeganklik vir enigiemand regoor die wêreld."],

    'verify-email' => [
        'subject' => "🙌 Voltooi jou aanmelding by Selldone! Verifieer skakel.",
        'category' => "JY IS EEN TREE WEG",
        'title' => "bevestig jou e-pos adres",
        'message' => "Hallo :name,<br> Dankie dat jy Selldone gekies het.<br> Bevestig asseblief dat **:email-pos** jou e-posadres is deur op die knoppie te klik of gebruik die onderstaande skakel binne 48 uur.",
        'footer' => "As jy sukkel om die Verifieer-knoppie te klik, kopieer en plak die URL hieronder in jou webblaaier: :activation_url",
        'next-step' => "Next, we'll be sending you some helpful materials and a step-by-step guide to make it easy for you to add your custom domain, set up payments, add products, and get your first order.",

    ],
    'verify-email-code' => [
        'subject' => "Verifikasiekode vir:name",
        'category' => "SECURITY",
        'title' => "E-pos verifikasie kode",
        'message' => "Hallo :name,<br><br> Bevestig asseblief dat **:email-pos** jou e-posadres is deur hierdie kode binne 10 minute.",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Jou winkel is gereed | :name",
        'category' => "JY IS EEN TREE WEG",
        'title' => "Opstelling voltooi",
        'account_title' => "Jou rekening",
        'account_msg' => "Verifieer en meld aan by jou rekening met hierdie inligting.",
        'shop_msg' => "Rekeninginligting oor die Selldone-besigheidsbedryfstelsel.",

    ],

    'reset2fa' => [
        'category' => "SEKURITEIT AMPTELIKE BOODSKAP",
        'title' => "Versoek deaktiveer 2-stap-aanmelding",
        'message' => "Jy ontvang hierdie e-pos omdat ons 'n 2-faktor-stawingterugstellingversoek vir jou rekening ontvang het.<br><br> Gebruikers-e-pos: <b>:name-pos</b><br> Naam: <b>:email</b>",
        'footer' => "As jy nie 'n wagwoordterugstelling versoek het nie, is geen verdere optrede nodig nie.",
        'action' => 'Deaktiveer tweestap-aanmelding',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Jou winkel is nou gereed!",
        'category' => "GEBORE NUWE AANLYN WINKEL IN DIE WERELD",
        'title' => "Congratulations, :name!",
        'message' => "<b>Baie geluk :name, jy het 'n nuwe aanlyn besigheid geskep;</b> Ons wens jou sukses in jou besigheid. Welkom by Selldoners-gemeenskap.<br> U probeer, ons maak die deure oop, en U het dit gedoen.",
        'pdf-book' => "Moenie aangehegte handboek misloop nie: Doen jou besigheid soos 'n speletjie",

        'account' => [
            'title' => 'Stap 1: Skep \'n rekening in die Selldone-beursie',
            'message' => "As jy nie 'n rekening in jou beursie het nie, skep een. Sellone trek die fooi van hierdie rekening af. Jy kan hierdie rekening aanvul, en Selldone sal ook 'n kredietbedrag van jou hef sodat as hierdie rekening negatief is, jou werf en winkel sal voortgaan om te werk.",
            'action' => 'Teken in op beursie',
        ],

        'shop-account' => [
            'title' => 'Stap 2: koppel die rekening aan die winkel',
            'message' => "Voeg jou beursie-rekening by jou winkel. Om dit te doen, voer Winkel > Rekeningkunde > Faktuur in en koppel die rekening aan die winkel. Let daarop dat al jou kliënte se betalings direk in jou bankrekening inbetaal word en geen bedrag word deur Selldone onttrek of afgetrek nie, dus moet jy hierdie rekening van Selldone aan die winkel koppel.",
            'action' => 'Winkelfaktuurpaneel',
        ],

        'gateway' => [
            'title' => 'Stap 3: Koppel aanlynbetalingspoort',
            'message' => "Gaan na Winkel> Rekeningkunde> Poort en druk <b>Voeg nuwe poort by</b> . Nadat u die geldeenheid gekies het, sal u 'n lys van draagbare poorte sien. Om die poort in Selldone te koppel is baie eenvoudig en vinnig, maar as jy Niza het vir leiding, verwys na die Selldone-gidsafdeling of vra ons.",
            'action' => 'Voeg \'n portaal by die winkel',
        ],

        'domain' => [
            'title' => 'Laaste stap: koppel \'n toegewyde domein',
            'message' => "U sal u winkel op soveel domeine kan hê as wat u wil. Om 'n toegewyde domein aan 'n winkel te koppel, moet u ten minste 'n opstartlisensie hê. Deur elke vriend aan Selldone bekend te stel, sal jy 'n een-maand-opstartlisensie-geskenkbewys ontvang. 'n Persentasie van jou vriende se betalings sal ook na jou kliënte se rekeninge gekrediteer word.",
            'action' => 'Bekendstelling en ontvang van onbeperkte geskenkbewyse',
        ],
    ],


    'basket-list' => [
        'item' => "item",
        'count' => "Tel",
        'price' => "prys",
        'discount-code' => "Afslagkode",
        'customer-club' => 'Kliënteklub',
        'shipping' => "Gestuur",
        'total' => "Totaal",
        'offer' => "Bied aan",
        'coupon' => "Koepon",
        'lottery' => "Toekenning",
        'tax' => "Belasting",
        'tax_included' => "Ingesluit by prys",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Metode',
        'amount' => 'Bedrag',
        'giftcard' => 'Gift card',
        'payment' => 'Betaling',
    ],


    'shop-subscription-email' => [
        'category' => "Intekeningopdatering",
        'title' => "Winkellisensie: :shop_title",
        'title-reserved' => "Reserwelisensie: :shop_title",
        'title-active' => "Aktiewe lisensie: :shop_title",
        'title-finished' => "Voltooide lisensie: :shop_title",
        'title-cancel' => "Kanselleer lisensie: :shop_title",
        'message' => "Jou winkellisensieplan is opgedateer,",
        'RESERVED' => "⚡ Jou intekeningplan is **gereserveer**.",
        'ACTIVE' => "🟢 Jou intekeningplan is **geaktiveer**.",
        'FINISHED' => "🚧 Jou intekeningplan is **klaar**.",
        'CANCEL' => "⛔ Jou intekeningplan is **gekanselleer**.",
    ],

    'support' => [
        'subject' => "Ondersteuningsentrum | :name het geantwoord",
        'category' => "Ondersteuningsentrum",
        'title' => "Jy het 'n reaksie ontvang",
        'action' => "Maak winkel admin oop",
    ],

    'shop-customer-join' => [
        'subject' => "Sluit aan by :shop_title",
        'category' => "Nuwe kliënt viering",
        'title' => "Ons is bly vir jou lidmaatskap",
        'action' => "Besoek nou",
    ],

    'shop-vendor-join' => [
        'subject' => "Verkoper aanboord | :shop_title",
        'category' => "Nuwe verkoper viering",
        'title' => "Ons is bly vir jou lidmaatskap",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Giftcard :shop_title",
        'category' => "Voeg nuwe kaart by",
        'title' => "Baie geluk, jy het 'n geskenkbewys ontvang",
        'action' => "Koop dit nou",
        'message' => "Jy het 'n geskenkbewys in die bedrag van :balance :currency ontvang. Jy sal met hierdie geskenkbewys by ons winkel kan koop.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Ondersteuningsentrum | :shop",
        'category' => "ondersteun",
        'title' => "Jy het 'n reaksie ontvang",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍 Bestel Checkout | :order_id ID",
        'title' => "bestel",
        'message' => "U bestelling bevestig,<br> Ons het jou bestelling. Ons sal vir jou nog 'n e-pos stuur wanneer jou bestelling verskeep word."],

    'order-payment' => [
        'subject' => "🛍 Betalingbevestiging | :order_id ID",
        'title' => "Betalingsopdrag",
        'message' => "Jou betaling voltooi,<br> Ons het jou bestelling. Ons sal vir jou nog 'n e-pos stuur wanneer jou bestelling verskeep word.",
    ],

    'order-update' => [
        'subject' => "🛍️ Order Status Update | Order :order_id",
        'title' => "Order Status Update",
        'message' => "Your order has been updated. You can check the latest status of this order in your account.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Your order is in the queue for processing. We’ll notify you when it’s being prepared.",
                'OrderConfirm' => "Your order is confirmed and preparation has started.",
                'PreparingOrder' => "Your order is being prepared and will be shipped soon.",
                'SentOrder' => "Your order has been shipped. You’ll receive it shortly.",
                'ToCustomer' => "Your order has been delivered. We hope you enjoy it!",

                'PreparingOrder-PICKUP' => "Your order is being prepared. You’ll receive a notification when it's ready for pickup.",
                'SentOrder-PICKUP' => "Your order is ready for pickup. Please come to the store to collect it.",
                'ToCustomer-PICKUP' => "Your order has been picked up. We hope you enjoy it!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Your order is in the queue for processing. We’ll notify you when it’s ready.",
                'OrderConfirm' => "Your order is confirmed and preparation is in progress.",
                'PreparingOrder' => "Your order is being prepared and will be sent to you soon.",
                'ToCustomer' => "Your virtual order has been delivered to your account. Thank you!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Your service request is in the queue. We’ll notify you when we start.",
                'OrderConfirm' => "Your service is confirmed and we’re preparing to begin.",
                'PreparingOrder' => "We’re preparing your service, and will notify you once it's completed.",
                'ToCustomer' => "Your service is complete. Thank you for choosing us!"
            ],
            'FILE' => [
                'PreparingOrder' => "Your file is being prepared and will be available soon.",
                'ToCustomer' => "Your file is ready and has been delivered. You can now download it."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Your subscription order is in the queue. We’ll notify you when processing begins.",
                'OrderConfirm' => "Your subscription has been confirmed and is being set up.",
                'PreparingOrder' => "We are preparing your subscription and it will start soon.",
                'SentOrder' => "Your subscription has been activated. You’ll receive ongoing updates.",
                'ToCustomer' => "Your subscription service has been successfully activated."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Baie geluk :name | Nuwe koopbewys: :title',
        'category' => "BAIE GELUK, NUWE KOSBON",
        'message' => "Hey :name,<br><br>You've received a new voucher as a gift from us! You can earn even more vouchers by introducing Selldone to your friends and everyone you know. This voucher is worth **:price :currency**.<br><br> You've taken the first step, and we’re here to help you unlock new features with your voucher! Please login with **:email** and find your voucher in the Shop **Dashboard** > **Settings** > **Licence**.<br><br>Congratulations!",
        'action' => "My dashboard",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Baie geluk, Beste :name | Jy het \'n geskenk ontvang',
        'category' => "Aankondiging van die ontvangs van 'n geskenk",
        'title' => "Geskenke vir jou",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard. <br><br> This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone. <br><br> Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "Geskenke",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍 Nuwe bestelling ontvang | :order_id ID",
        'title' => "New Order",
        'message' => "Jy het 'n nuwe bestelling ontvang. Gaan asseblief na die bestellingverwerkingsbladsy in u winkel.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Jou gevulde inligting',
        'output-form-title' => 'Gekoopte item inligting',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title | Weekly Report :time',
        'title' => 'Weeklikse winkelprestasieverslag',
        'message' => "Dit is jou winkel se weeklikse verslag van :start tot :end. Hierdie verslag bevat wenke om jou besigheid te verbeter, jy kan ook die status van jou aanlyn winkel en onlangse bestellings nagaan. Ek hoop jy het 'n goeie dag en week wat voorlê."],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Jou :amount in die afgelope drie maande | :shop_title',
        'title' => 'Seisoenale verslag oor jou besigheidsaktiwiteit, belonings en finansiële besparings',
        'message' => "Dit is jou :shop_title seisoenale verslag van :start tot :end."],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Gekoppelde rekeninge',
        'sub-title' => 'Wat is die jongste status van beursie-rekeninge wat aan my winkel gekoppel is?',
        'view-wallet' => 'Kyk beursie',
        'tip-title' => 'Belangrike wenke',
        'tip' => "Skep in die volgende stap 'n gratis rekening in jou Selldone-beursie en koppel dit aan hierdie winkel. Selfs al is jou Selldone-rekeningsaldo negatief, kan jou klante steeds sonder enige probleme aankope en betalings vir jou winkel maak. Jou data en diens sal vir ten minste 1 maand nie onderbreek of beperk word nie.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Koppel aan rekening'],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Toepassings geïnstalleer',
        'sub-title' => 'Lys van toepassings wat jy hierdie week in jou winkel geïnstalleer het.',
        'tip' => "Wil jy meer programme vir jou winkel vind?",
        'view-app-store' => 'Besoek die Selldone App Store..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Jou winkelbots',
        'sub-title' => 'Aktiewe verkoopsbots in my winkel.',
        'tip-title' => 'Bot uitverkoping',
        'tip' => "Selldone het jou voorsien van outomatiese verkoopsbots. Al wat jy hoef te doen is om na die Byvoegings> Bots-paneel te gaan en jou winkelbots te aktiveer. Let daarop dat die betrokke diens in jou land beskikbaar moet wees.",
        'view-bots' => 'Bestuur bots',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Kommunikasie met kliënte',
        'sub-title' => 'Hoeveel kontakte het ek hierdie week met my kliënte gehad?',
        'faqs' => 'Gereelde Vrae',
        'tickets' => 'Kliënt Kaartjies',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Gebruikersstatus',
        'sub-title' => 'Vanaf datum :start tot :end',
        'users' => [
            'title' => 'Kliënte',
            'subtitle' => 'Registreer gebruikers',
        ],
        'views' => [
            'title' => 'Besoeke',
            'subtitle' => 'Hoeveel keer het jy die winkel besoek',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Teruggekeerde gebruikers',

        'shop_views' => 'Winkel Uitsigte',
        'baskets' => [
            'title' => 'Inkopiemandjies',
            'subtitle' => 'Rapporteer die aantal nuwe inkopiemandjies',
        ],
        'products' => [
            'title' => 'Produkte Oorsig',
            'subtitle' => 'Status van produkte in die winkel volgens tipe',
            'value_name' => 'Produkte'],
        'products_count' => 'Produk tipes',
        'views_count' => 'View telling',
        'sell_count' => 'Verkoop tel',
        'send_count' => 'Gestuurtelling',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Los aflewering',
        'sub-title' => 'Paneel vir groot verkopers van Drop Shipping Selldone.',
        'total_fulfillments' => 'Totale bestellings ontvang',
        'ds_count' => 'Bestellings ontvang',
        'statistics_title' => 'Rapporteer ontvangde bestellings',
        'ds_cancels' => 'Kanselleer deur koppelvlakverkoper',
        'ds_rejects' => 'Kanselleer deur U',
        'tip' => "Is jy 'n groot verkoper van goedere? Besit jy 'n pakhuis, fabriek of verspreider van produkte? Jy kan jou produkte aan ander verkopers aanbied in Selldone Drop Shipping-diens om jou produk op groot skaal te verkoop. E-pos ons by support@selldone.com om jou te lei.",
        'view-drop-shipping-panel' => 'Teken in op groothandelpaneel',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Wisselkoerse',
        'sub-title' => 'Lys van die nuutste valuta-omskakelingskoerse in jou winkel.',
        'from' => 'Bron Geldeenheid',
        'to' => 'Bestemming geldeenheid',
        'rate' => 'Omskakelingskoers',
        'view-exchange-panel' => 'Manage Exchange Rates',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Deskundige kontrakte',
        'sub-title' => 'Watter professionele persone werk aan my winkel?',
        'cost' => 'Kontrakbedrag',
        'duration' => 'Duur',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Datum Kanselleer',
        'end_at' => 'Afleweringsdatum',
        'tip' => 'Jy kan die beste spesialiste in Selldone huur om jou besigheid te ontwikkel.',
        'view-experts' => 'Klik om te begin.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Rapporteer aktiewe betaalpoorte op die winkel :shop.',
        'tip-title' => 'Belangrike wenke',
        'tip' => "Gaan na die portaalbestuurbladsy in u winkel en voeg binne 'n paar minute ten minste een poort by. Jou kliënte hou daarvan om vinnig en veilig deur aanlyn portale te betaal.",
        'view-shop-gateways' => 'Meld aan by my winkelportaalbestuur.',
        'view-gateways' => 'Bekyk meer poorte',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Bestellings',
        'sub-title' => 'Lys van bestellings wat ek hierdie week ontvang het.',
        'total_baskets' => 'Totale bestellings',
        'total_posBaskets' => 'Totale kontantbestellings',
        'pos-title' => 'POS winkel boks',
        'chart-label' => 'Bestellings voltooi (hierdie bestellings word nie noodwendig betaal nie!)',
        'tip-title' => 'Jy moet harder probeer...',
        'tip' => "Geen eenvoudige sukses nie.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Verwerking sentrum',
        'sub-title' => 'Hoeveel bestelling het ons hierdie week in die winkel verwerk?',
        'tip-title' => 'Jy het nie \'n uitverkoping gehad nie!',
        'tip' => "Ongelukkig het jy hierdie week geen verkope gehad nie. Jy moet meer by jou winkel kry. Jy kan meer produkte byvoeg, beter beelde kies of beter beskrywings vir jou produkte skryf. Oorweeg 'n voltydse werk vir jou besigheid. As jy dit reg doen en nie gefrustreerd raak nie, sal jy slaag.",
        'view-process-center' => 'Bekyk prosessentrum',
        'return' => [
            'title' => 'Bestelling teruggestuur',
            'subtitle' => 'Rapporteer teruggestuurde bestellings.',
            'tip-title' => 'Het jy geweet dat ...',
            'tip' => "Jy kan soveel winkelkasregisters skep as wat jy wil deur Selldone POS! Trouens, jy kan jou tablet, selfoon of skootrekenaar in jou inkassie verander. As dit jou opgewonde maak, Selldone POS Dit is iets wat jy nou moet begin gebruik. Dit neem net 'n eenvoudige klik om te begin, ons het alles vooraf vir u bediener voorberei.",
            'view-pos' => 'Teken in by My Online Winkel Kassier']
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sessies',
        'sub-title' => 'Hoeveel keer het ek my winkel besoek?',
        'countries-title' => 'Watter lande is die meeste besoek?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Wil jy geld verdien sonder om een dollar te spandeer?',
        'message' => "Beste :name, jy kan na Dashboard > Demonetisering gaan en 'n verwysingskakel skep. Stuur die skakel na jou vriende, Jy ontvang 'n Selldone-geskenkbewyse en 'n persentasie van jou vriend se betalings. Let daarop dat die geskenkbewys aan beide jou en jou vriend gestuur sal word.",
        'action' => 'Kyk na my inleidingskakel',
        'mail-clip' => "<b style='color: #C2185B'>Belangrik:</b> As jy e-posdienste soos Gmail gebruik wat die lengte van die e-pos beperk, vind die volgende opsie aan die einde van die e-pos om die volledige verslag te vertoon en klik daarop:",

        'no-coin-reward' => "<b style='color: #C2185B'>Jammer:</b> Jou aktiwiteit het nie aan die vereiste voldoen om gratis SEL Coins-beloning te kry nie. Probeer harder en verkoop meer in jou winkel vir volgende seisoen.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Beloning:</b> Baie geluk, as gevolg van jou fantastiese prestasie, het ons vir jou 'n :amount SEL Coin gratis beloning gegee.",

        'need-buy-license' => "<b>Verhoog jou besigheid:</b> Jy het geen intekeningplan vir jou besigheidswebwerf geregistreer nie! Dit is dus die tyd om ten minste een intekening te koop. Dit kos net :amount maandeliks vir jaarlikse aankoop.",
        'not-afford-message' => "As jy nie kan bekostig nie of enige probleme ondervind met betaling, vertel ons gerus via support@selldone.com.",
        'add-domain' => "<b>Hoekom nie 'n pasgemaakte domein vir jou besigheid hê nie?</b><br> Voeg nou 'n domein by jou webwerf; dit is gratis!"],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone is 'n<del> produk</del> <span style = 'color: forestgreen'>gemeenskap</span> .<br> Wees 'n professionele verkoper!",
        'message' => "Volg die amptelike bladsye van die Selldone op Twitter, LinkedIn en sosiale netwerke. Stuur vir ons enige kommentaar, versoeke of kritiek of neem deel aan besprekings oor die Sellone. Ons is ook deel van die gemeenskap van Selldone wat <b>U maak</b> ."],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Het nuwe avokado-bestellings ontvang | :shop_title :time',
        'title' => "Prestasieverslag vir die afgelope 24 uur",
        'message' => "Jou klante wag dat jou bestellings hersien en geprys word. Reageer so gou moontlik op jou kliënte se versoeke om meer verkope te kry.",
        'card_title' => "Bestellings in die ry",
        'card_subtitle' => "Since :date",

        'card_payed' => "Betaalde bestellings"],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Antwoord op jou plasing in :community_title',
        'title' => ":name, en :count ander het kommentaar gelewer op jou plasings.",
        'message' => "Hi :name, your posts are getting attention! You’ve received comments in our community. Log in to your account to join the discussion and see what everyone is saying.",
        'title-simple' => ":name het kommentaar gelewer op jou plasings.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Reply to your topic :topic_title',
        'title' => ":name, en :count ander het oor jou onderwerp geantwoord.",
        'message' => "Hi :name, your topic is getting attention! You’ve received replies in our community. Log in to your account to join the discussion and see what everyone is saying.",
        'title-simple' => ":name het oor jou onderwerp geantwoord.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 New Login :name',
        'category' => 'Sekuriteit kennisgewings',
        'title' => "Teken in op rekening",
        'message' => "Beste :name, jy het by jou Selldone-rekening aangemeld.",   // Login in selldone (seller)
        'message-shop' => "Beste :name, jy is aangemeld by :shop_title .",  // Login in shop (buyer)

        'footer' => "As jy nie aangemeld is nie, verander asseblief jou wagwoord.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Ontrekking",
        'deposit' => "Deposito",

        'withdraw_subject' => "onttrek uit rekening :account",
        'deposit_subject' => "Deposit to account :account",

        'message' => "Die geldoordrag is met die volgende spesifikasies gedoen.",

        'type' => "Transaksie tipe",

        'from' => "Bronrekening",
        'to' => "Destination account",

        'desc' => "Transaksiebeskrywing",
        'action' => "Bekyk transaksie",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Belangrik! Reëls oortreding | :shop",
        'category' => "Kritiese inligting",
        'title' => "Jou winkel is gepenaliseer",
        'action' => "Maak winkelpaneelbord oop",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter het jou na Selldone genooi",
        'title' => ":name het vir jou :amount gestuur om jou te help om jou nuwe aanlyn webwerf bekend te stel en geld te verdien!",
        'message' => "Hi **:receiver_name**, <br><br>Welcome to Selldone! On Selldone, you can easily create your ecommerce site, blog, online community, and even set up an online POS system for in-person sales—all within minutes. It’s the complete online business operating system designed to make your business better, faster, and easier to run. <br><br>Sign up by <b>:date</b> and receive a :amount voucher to get started!",
        'accept' => "Aanvaar uitnodiging",
        'owner' => "Eienaar van",
        'join-date' => "Op Sellone sedert",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Herstel skakel | :shop",
        'category' => "Winkel sekuriteit",
        'title' => "<b>Winkelherwinningskakel van :shop_name</b> .",
        'message' => "Hierdie e-pos is aan jou gestuur omdat jy versoek het om jou winkel te herstel. As u op die skakel hieronder klik, sal u winkel en alle data wat daaraan behoort, herstel.",
        'action' => "Bevestig winkelherstel",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Hoeveel geld het Selldone vir jou besigheid gespaar?',
        'sub-title' => 'Vanaf datum :start tot :end',
        'infrastructure' => [
            'title' => 'Infrastruktuur',
            'subtitle' => 'Bedieners, CDN, berging en ander wolkdienste',
        ],
        'experts' => [
            'title' => 'Kundiges & Personeel',
            'subtitle' => 'Ontwikkelaars, instandhouding en ondersteuning',
        ],
        'total_save' => 'Totale bespaarde geld'],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Jou prestasie',
        'sub-title' => 'Besigheidsoorsig van :start tot :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Teruggekeerde gebruikers',

        'shop_views' => 'Winkel Uitsigte',
        'baskets' => [
            'title' => 'Inkopiemandjies',
            'subtitle' => 'Rapporteer die aantal nuwe inkopiemandjies',

        ],
        'products' => [
            'title' => 'Produkte Oorsig',
            'subtitle' => 'Status van produkte in die winkel volgens tipe',
            'value_name' => 'Produkte'],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Totale webwerf-bladsykyke',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Jy het 'n nuwe bestelling ontvang. Gaan asseblief na die bestellingverwerkingsbladsy in u verkoperpaneel.",
        'subject' => "🛍 Nuwe bestelling ontvang | :order_id ID",
        'your_revenue' => "Jou inkomste",
    ],
    'vendor-invite' => [
        'title' => 'Verkoper uitnodiging',
        'message' => "Jy het 'n uitnodiging ontvang om verkoper van :shop_name te word. Jy kan dit aanvaar of verwerp deur op die volgende knoppies te klik.",
        'subject' => ":shop_name | Jy het 'n uitnodiging ontvang om ons verkoper te word",
        'accept' => "Aanvaar en word 'n verkoper",
        'reject' => "Verwerp",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Invitation to Join Our Team',
        'message' => "You've been invited to join :vendor_name at :shop_name. You can accept or decline this invitation using the buttons below.",
        'subject' => "Invitation to Join :vendor_name | Become a Team Member",
        'accept' => "Accept & Join the Team",
        'reject' => "Reject",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Jou aanmeldkode vir :shop",
        'header-message' => "Ons stuur vir jou hierdie e-pos omdat jy 'n aanmeldkode vir die winkel aangevra het. Vind asseblief jou eenmalige wagwoord (OTP) hieronder:",
        'footer-message' => "Hierdie kode sal vir 10 minute geldig wees. As jy nie hierdie aanmeldkode versoek het nie, ignoreer asseblief hierdie e-pos."],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Verify your email | :shop",
        'title' => 'E-posverifikasie',
        'header-message' => "Hallo :name,<br> Bevestig asseblief dat **:email-pos** jou e-posadres is deur op die knoppie te klik of gebruik die onderstaande skakel binne 48 uur.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Products Update :shop",
        'title' => "Opdatering oor produkstatus – laaste 24 uur",
        'message' => "Ek hoop hierdie boodskap vind jou goed. Hierdie is 'n kort opdatering om jou in te lig oor die status van jou produkte op ons platform oor die afgelope 24 uur. Gedurende hierdie tydperk was daar veranderinge in die status van sommige produkte. Hierdie veranderinge kan wees as gevolg van aankope, voorraadopdaterings of ander verwante gebeurtenisse. Vir meer gedetailleerde inligting oor elke produk, meld asseblief aan by jou rekening en gaan na die 'Produkstatus'-afdeling.",
        'action' => "Maak verkoperpaneel oop",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Bulk Orders Received | :shop | :date",
        'title' => "Bulk Orders Notification",
        'message' => "You have received a batch of bulk orders. Please visit the order processing page in your panel for further details. You can also download the order list via the secure link provided, valid for 7 days.<br><br>
        <b>IMPORTANT:</b> This link is valid for 7 days.<br>
        This link is dynamic, so every time you click it, you will receive the most updated orders for this specific date. <b>It means if the order payment status changes to rejected, you will no longer see that order in the downloaded CSV, or if the order is paid, it will appear in the list.</b><br><br>
        <ul>
            <li>The CSV contains paid orders with a reserved date in the :date.</li>
            <li>Reserved date is the date when the user clicks checkout on the order page.</li>
        </ul>
        <b>To prevent duplicate orders, always check the Order ID before sending.</b>
    ",
        'action' => "Download Order List",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund'=>[
        'message'=>"Some items in your order were not accepted and cannot be delivered. The amount for these items will be refunded to your card shortly."
    ]

];
