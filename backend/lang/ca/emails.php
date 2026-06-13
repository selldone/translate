<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Aquest missatge dóna la benvinguda a un nou comprador a la botiga.',
        ShopMailTemplateCodes::OrderCheckout => 'Aquesta notificació s\'envia quan un comprador confirma una comanda.',
        ShopMailTemplateCodes::OrderPayment => 'Aquesta notificació confirma l\'èxit del pagament fet per un client.',
        ShopMailTemplateCodes::OrderUpdate => 'Aquest missatge s\'envia per actualitzar un comprador sobre l\'estat de la seva comanda.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Aquest missatge s\'envia a un venedor per notificar-li una comanda confirmada.',
        ShopMailTemplateCodes::PosCheckout => 'Aquesta notificació s\'envia per confirmar una comanda de punt de venda per a un comprador.',
        ShopMailTemplateCodes::PosPayment => 'Aquesta notificació confirma un pagament al punt de venda fet per un comprador.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Aquest missatge notifica al venedor una compra feta al seu punt de venda.',
        ShopMailTemplateCodes::ShopContact => 'Aquesta notificació s\'envia quan s\'ha enviat un formulari de contacte.',
        ShopMailTemplateCodes::ShopGiftCard => 'Aquesta notificació informa a un usuari que ha rebut una targeta regal.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Aquest missatge dóna la benvinguda a un nou venedor a la botiga.',
        ShopMailTemplateCodes::ShopVendorInvite => "Aquest missatge s'envia per convidar un venedor a unir-se al vostre mercat.",
        ShopMailTemplateCodes::ShopVendorOrder => "Aquest missatge s'envia al venedor quan es rep una comanda en estat de pagament o contra lliurament (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "S'envia diàriament per actualitzar els venedors sobre l'estat dels seus productes.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Aquest missatge s'envia per convidar un venedor a unir-se al vostre mercat.",

        ShopMailTemplateCodes::UserLogin => "Notifiqueu a l'usuari les dades d'inici de sessió, inclosa l'adreça IP, la data i el dispositiu, per motius de seguretat.",
        ShopMailTemplateCodes::LoginCode => "Envieu un codi de contrasenya d'un sol ús perquè els usuaris iniciïn sessió a la botiga.",

        ShopMailTemplateCodes::EmailVerifyLink => "Envia un enllaç per verificar l'adreça de correu electrònic de l'usuari. Aquest correu electrònic s'envia quan un usuari es registra mitjançant SMS i introdueix el seu correu electrònic. No s'envia quan un usuari es registra directament amb l'inici de sessió social o el correu electrònic.",

        ShopMailTemplateCodes::EmailBulkOrder => "Envieu una llista de comandes rebudes i pagades a granel per a un dia concret."


    ,

    ],


    'global' => [
        'greetings' => 'Hola, :name!',
        'end-statement' => 'Equip de suport',

        'receiver_name' => 'Hola :user_name',
        'footer-help' => "Necessites ajuda? Pregunteu a [support@selldone.com](mailto:support@selldone.com) o visiteu el nostre [centre d'ajuda](https://selldone.com/community).",
        'selldone-team' => 'L\'equip Selldone',
        'footer-shop' => "Si necessiteu ajuda amb qualsevol cosa, no dubteu a enviar-nos un correu electrònic: :shop_mail",
        'accept' => "Acceptar",
        'reject' => "Rebutjar",
        'verify' => "verificar",
        'title' => "Títol",
        'value' => "Valor",
        'description' => "Descripció",
        'shop' => "Botiga",
        'shop-info' => "Informació de la botiga",
        'user' => "usuari",
        'user-info' => "Informació del compte",
        'license' => "llicència",
        'status' => "Estat",
        'start' => "Començar",
        'end' => "Final",
        'renewal' => "Renovació",
        'view' => "Veure",

        'balance' => "Balanç",
        'card_number' => "Número de targeta",
        'cvv' => "Cvv",
        'expire_date' => "Data d'expiració",

        'Dashboard' => "Tauler de control",
        'order' => "ordre",
        'view_order' => "Veure l'ordre",
        'pay_now' => "Pay now",

        'official_selldone' => "VENDA OFICIAL",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Moneda",
        'free-balance' => "Balanç lliure",
        'locked-balance' => "Balanç bloquejat",
        'bot' => "Bot",
        'requests' => "Sol·licituds",
        'baskets' => 'Carrets',
        'physical' => "Física",
        'virtual' => "Virtual",
        'file' => "Dossier",
        'service' => "Servei",
        'fulfillment' => "Realització",
        'open' => "Obert",
        'reserved' => "Reservat",
        'canceled' => "Cancel·lat",
        'payed' => "Pagat",
        'cod' => "COD",
        'orders-count' => 'Comandes',
        'payments-count' => 'Pagaments',
        'confirms-count' => 'Confirma',
        'sends-count' => 'Envia',
        'delivers-count' => 'Entrega',
        'count' => 'Compte',
        'transactions-count' => 'Les transaccions compten',
        'success-transactions' => 'Transaccions d\'èxit',
        'total-amount' => 'Suma total',
        'amount' => 'Import',
        'wage' => 'Salari',
        'debug' => 'Depuració',
        'pos' => 'POS',
        'live' => 'Viu',
        'CheckQueue' => 'Comproveu la cua',
        'OrderConfirm' => 'Confirmació de comanda',
        'PreparingOrder' => 'Preparant la comanda',
        'SentOrder' => 'Enviada la comanda',
        'ToCustomer' => 'Lliurat al client',
        'Pending' => 'Pendents',
        'Accepted' => 'Acceptat',
        'Rejected' => 'Rebutjada',
        'pc' => 'PC',
        'tablet' => 'Tauleta',
        'phone' => 'Telèfon',
        'total' => 'Total',
        'view-detail' => 'Veure Detall',
        'empty' => 'Buit',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Respon',
        'reactions' => 'Reaccions',
        'Comments' => 'Comentaris',
        'last-comment' => 'Últim comentari',
        'response-to' => 'Resposta a',
        'posts' => 'Publicacions',
        'post' => 'Publicació',

        'name' => 'Nom',
        'email' => 'Correu electrònic',
        'type' => 'tipus',
        'device' => 'Dispositiu',
        'platform' => 'Plataforma',
        'browser' => 'Navegador',
        'time' => 'Temps',
        'Wallet' => 'Cartera',
        'date' => 'Data',

        'account' => 'Compte',
        'transaction' => 'Transacció',
        'fee' => 'Quota',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Categoria',
        'password' => 'Contrasenya',
        'verify-login' => "Verificar i iniciar sessió",
        'url' => 'URL',
        'avocado' => 'Alvocat',
        'hyper' => 'Hiper',
        'buy-now' => "Compra ara",
        'add-domain' => "Add Domain",
        'views' => 'Vistes',


        'country' => 'País',
        'address' => 'adreça',
        'postal' => 'Codi Postal',
        'building_no' => 'Edifici #',
        'building_unit' => 'Unitat #',
        'message' => 'Missatge',


        'customer' => 'Client',
        'cart-items' => 'Articles del carretó',
        'payment' => 'Pagament',
        'receiver' => 'Receptor',
        'virtual-items' => 'Elements virtuals',
        'no-payment' => 'Sense pagament!',

        'enable' => 'Activa',
        'access' => 'Accés',
        'bank' => 'Informació bancària',

        'vendor' => 'Venedor',

        'view_content' => "Veure contingut complet",
        'files' => 'Fitxers',
        'download' => 'descarregar',
        'file_name' => 'Nom del fitxer',
        'file_size' => 'Mida',

        'subscription' => 'Subscripció',
        'products' => 'Productes',
        'vendor_products' => 'Productes venedors',

        'pickup' => 'Recollida',

        'minutes' => 'Minuts',
        'hours' => 'Hores',

        'refund' => 'Devolució',
        'recipient_address' => 'Adreça del destinatari',
        'signature' => 'Signatura',
        'blockchain' => 'Blockchain',
        'details' => 'Detalls',


    

        'Shop' => 'Botiga',
        'dashboard' => 'panell',
        'comments' => 'comentaris',
        'wallet' => 'cartera',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Informe de rendiment, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Informe de temporada, Selldone'
        ],
        'Onboarding' => [
            'id' => 'hola',
            'name' => 'Aprova, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Suport :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Verifica, Selldone'
        ],
        'Welcome' => [
            'id' => 'hola',
            'name' => 'Comunitat, Selldone'
        ],
        'NewShop' => [
            'id' => 'comerciants',
            'name' => 'Aprova, Selldone'
        ],
        'Approve' => [
            'id' => 'aprovar',
            'name' => 'Aprova, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Gestió de comandes :name'
        ],

        'Recovery' => [
            'id' => 'recuperació',
            'name' => 'Equip de recuperació de Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Pendent ⌛',
        'PAYED' => 'Pagat ✅',
        'CANCELED' => 'Cancel·lat ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administrador',
            'OFFICER' => 'Oficial i supervisor',
            'AUDITING' => 'Gestor d\'auditoria',
            'EMPLOYEE' => 'Empleat',
            'PRODUCT' => 'Gestor de productes',
            'CONTENT' => 'Gestor de continguts',
            'MARKETING' => 'Director comercial',
            'VIEWER' => 'Visor',

        ],
        'subject' => ":inviter t'ha convidat com a :level| :shop",
        'category' => "Invitació del personal",
        'title' => "Heu estat convidat a <b>:shop_name</b> com a <b>:level</b> .",
        'message' => "Heu rebut una invitació per col·laborar amb l'equip de <b>:shop_title</b> en els negocis. Tens l'opció d'acceptar o rebutjar aquesta oferta. Si decidiu acceptar, inicieu sessió al servei Selldone per confirmar la vostra decisió. Un cop confirmada, obtindreu accés a la secció de gestió de la botiga.",

    ],

    'welcome-email' => [
        'subject' => "👋 Benvingut :name, comencem amb Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Benvingut a Selldone",
        'message' => "Gràcies per triar Selldone! Ara formeu part d'una comunitat vibrant que connecta venedors globals amb clients, empreses locals amb empreses i individus amb corporacions. Totes les nostres eines Master i Pro estan disponibles per a tu **gratuïtes** i **il·limitades**. Estem aquí per donar-te suport i obrir-te les portes al teu èxit.",

        'index' => "Pas :step.",

        'step-domain' => [
            'title' => 'Afegiu el vostre domini personalitzat',
            'message' => "Per començar, afegiu el vostre domini personalitzat gratuïtament al tauler de la botiga a Configuració > Configuració de dominis.",
            'action' => 'Gestionar els meus dominis',
        ],
        'step-landing' => [
            'title' => 'Personalitza la teva pàgina d\'inici',
            'message' => "Personalitzeu la vostra pàgina d'inici anant a Tauler > Pàgines. Trieu una pàgina de destinació o creeu-ne una de nova. És fàcil i intuïtiu, i pots començar a treballar-hi de seguida.",
            'action' => 'Personalitza la meva pàgina de destinació',
        ],
        'step-payment' => [
            'title' => 'Configurar mètodes de pagament',
            'message' => "Comenceu a acceptar pagaments directament al vostre compte bancari. Per connectar els vostres proveïdors de pagament com Stripe, PayPal i més, aneu a Tauler > Comptabilitat > Passarel·la.",
            'action' => 'Afegeix mètodes de pagament',
        ],
        'step-products' => [
            'title' => 'Afegeix els teus productes',
            'message' => "Afegeix fàcilment productes i categories al Tauler > Productes. És com gestionar fitxers i carpetes al vostre ordinador: completament preparat per arrossegar i deixar anar. També podeu importar productes a granel mitjançant Excel. Hi ha disponible una plantilla de mostra per ajudar-vos a començar.",
            'action' => 'Gestionar els meus productes',
        ],
        'step-shipping' => [
            'title' => 'Configurar mètodes d\'enviament',
            'message' => "Per cobrar als clients per l'enviament, definiu els vostres mètodes d'enviament al Tauler > Logística > Enviament. Podeu establir diferents preus i assistència per a diverses ubicacions. No us oblideu d'establir l'origen del vostre magatzem a Tauler > Logística > Magatzem.",
            'action' => 'Gestionar els mètodes d\'enviament',
        ],
    

        'seller' => [
            'title' => 'Ets venedor?',
            'message' => 'Per començar a vendre, introduïu el vostre tauler a Selldone mitjançant l\'enllaç següent i creeu la vostra primera botiga totalment gratuïta. Això trigarà uns minuts i tindreu la vostra pròpia botiga i lloc en línia. A continuació, us guiarem als passos següents i obtindrem la passarel·la de pagament.',
            'action' => 'Inicieu sessió al meu tauler',
        ],
        'buyer' => [
            'title' => 'Sóc un comprador',
            'message' => 'Felicitats. Un cop siguis membre de Selldone, t\'eliminaràs de totes les molèsties de la pertinença i l\'autenticació a les botigues en línia. Per beneficiar-vos de qualsevol botiga i lloc que utilitzi la plataforma Selldone, podeu iniciar sessió amb un sol clic i fer la vostra compra senzilla, ràpida i segura.',
        ],
    ],


    'charge-account' => [
        'category' => 'Cartera > Compte > Càrrec',
        'title' => "Càrrec d'èxit",
        'message' => "El vostre compte <b>:account_number</b> s'ha carregat <b>:amount</b> correctament.",
        'account' => 'Compte',
        'charge' => 'Càrrega',
        'balance' => 'Balanç',
        'footer' => "Feu que els negocis siguin fàcils, assolibles i accessibles a qualsevol persona del món."
    ],

    'verify-email' => [
        'subject' => "🙌 Completa el teu registre a Selldone! Verifica l'enllaç.",
        'category' => "ESTÀS A UN PAS",
        'title' => "Comproveu la vostra adreça de correu electrònic",
        'message' => "Hola :name,<br><br>Gràcies per triar Selldone!<br><br>Per confirmar que <b>:email</b> és la vostra adreça de correu electrònic correcta, o feu clic al botó que apareix a continuació. Tens 48 hores per completar aquesta verificació.",
        'footer' => "Si teniu problemes per fer clic al botó Verifica, copieu i enganxeu l'URL següent al vostre navegador web: :activation_url",
        'next-step' => "A continuació, us enviarem alguns materials útils i una guia pas a pas perquè us sigui més fàcil afegir el vostre domini personalitzat, configurar pagaments, afegir productes i obtenir la vostra primera comanda.",

    ],
    'verify-email-code' => [
        'subject' => "Codi de verificació per a :name",
        'category' => "SECURITY",
        'title' => "Codi de verificació del correu electrònic",
        'message' => "Hola, :name,<br><br>Per confirmar que <b>:email</b> és la vostra adreça de correu electrònic correcta, introduïu el codi següent durant els propers <b>10 minuts</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 La teva botiga està a punt| :name",
        'category' => "ESTÀS A UN PAS",
        'title' => "S'ha completat la configuració",
        'account_title' => "El teu compte",
        'account_msg' => "Verifiqueu i inicieu sessió al vostre compte amb aquesta informació.",
        'shop_msg' => "Informació del compte al sistema operatiu empresarial de Selldone.",

    ],

    'reset2fa' => [
        'category' => "MISSATGE OFICIAL DE SEGURETAT",
        'title' => "Sol·liciteu desactivar l'inici de sessió en dos passos",
        'message' => "Heu rebut aquest correu electrònic perquè hem rebut una sol·licitud per restablir l'autenticació de dos factors per al compte **:name** amb el correu electrònic **:email**.<br><br>Hem trobat els detalls següents per al vostre compte:",
        'footer' => "Si no heu sol·licitat un restabliment de la contrasenya, no cal fer cap altra acció.",
        'action' => 'Desactiva l\'inici de sessió en dos passos',
    ],


    'build-new-shop' => [
        'subject' => "🎊 La teva botiga ja està a punt!",
        'category' => "NACEN NOVA BOTIGA ONLINE AL MÓN",
        'title' => "Enhorabona, :name!",
        'message' => "<b>Felicitats, :name! El vostre nou negoci en línia ja està disponible! </b> Ens complau donar-vos la benvinguda a la comunitat de Selldoners. Heu fet el primer pas cap a l'èxit i estem aquí per ajudar-vos a cada pas del camí.<br>Ara que la vostra botiga està preparada, assegurem-nos que esteu preparat per rebre els pagaments directament dels vostres clients i començar a fer créixer el vostre imperi. Si alguna vegada necessiteu ajuda, estem a un missatge de distància: el nostre equip d'assistència sempre està aquí per a vosaltres.<br><br><b>Pròxims passos importants:</b> Per començar, assegureu-vos que esteu preparat per rebre pagaments i operar sense problemes. Et guiarem a través de cada etapa perquè la teva botiga funcioni perfectament.",
        'pdf-book' => "No us perdeu el llibre de mà adjunt: Feu el vostre negoci com un joc",

        'account' => [
            'title' => 'Pas 1: creeu un compte a la cartera Selldone',
            'message' => "Per començar, creeu un compte a la vostra cartera Selldone. Aquí és on es descomptaran les teves comissions i també és on recarregues per mantenir la teva botiga funcionant sense problemes. Si alguna vegada el vostre saldo surt negatiu, no us preocupeu! La teva botiga continuarà funcionant sense interrupcions.",
            'action' => 'Inicieu sessió a la cartera',
        ],

        'shop-account' => [
            'title' => 'Pas 2: connecteu el compte a la botiga',
            'message' => "A continuació, connecteu el vostre compte de cartera a la vostra botiga. Aneu a <b>Store > Comptabilitat > Factura</b> i enllaceu la vostra cartera. Això garanteix que tots els pagaments dels clients s'ingressin directament al vostre compte bancari; Selldone no dedueix cap quantitat dels vostres guanys.",
            'action' => 'Tauler de facturació de la botiga',
        ],

        'gateway' => [
            'title' => 'Pas 3: connecteu la passarel·la de pagament en línia',
            'message' => "Ara, configurem la vostra passarel·la de pagament en línia. Aneu a <b>Store > Comptabilitat > Port</b> i feu clic a <b>Add New Port</b>. Seleccioneu la vostra moneda i veureu una llista de passarel·les de pagament disponibles. Connectar una passarel·la és ràpid i senzill, però si necessiteu ajuda, no dubteu a consultar les guies Selldone o contactar amb nosaltres.",
            'action' => 'Afegiu un portal a la botiga',
        ],

        'domain' => [
            'title' => 'Últim pas: connectar un domini dedicat',
            'message' => "Ara, enllaça el teu domini personalitzat a la teva botiga. Això permet als clients comprar els vostres productes o serveis i fer-vos pagaments directament.",
            'action' => 'Presentació i recepció de targetes regal il·limitades',
        ],
    ],


    'basket-list' => [
        'item' => "article",
        'count' => "Compte",
        'price' => "preu",
        'discount-code' => "Codi de descompte",
        'customer-club' => 'Club de clients',
        'shipping' => "Enviament",
        'total' => "Total",
        'offer' => "Oferta",
        'coupon' => "Cupó",
        'lottery' => "Premi",
        'tax' => "Impost",
        'tax_included' => "Inclòs en el preu",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Mètode',
        'amount' => 'Import',
        'giftcard' => 'Gift card',
        'payment' => 'Pagament',
    ],


    'shop-subscription-email' => [
        'category' => "Actualització de la subscripció",
        'title' => "Llicència de botiga: :shop_title",
        'title-reserved' => "Reserva llicència: :shop_title",
        'title-active' => "Llicència activa: :shop_title",
        'title-finished' => "Llicència acabada: :shop_title",
        'title-cancel' => "Cancel·la la llicència: :shop_title",
        'message' => "El vostre pla de llicències de botiga s'ha actualitzat,",
        'RESERVED' => "⚡ El teu pla de subscripció ha estat **reservat**.",
        'ACTIVE' => "🟢 El teu pla de subscripció s'ha **activat**.",
        'FINISHED' => "🚧 El teu pla de subscripció s'ha **acabat**.",
        'CANCEL' => "⛔ El teu pla de subscripció s'ha **cancel·lat**.",
    ],

    'support' => [
        'subject' => "Centre de suport|:name va respondre",
        'category' => "Centre de suport",
        'title' => "Has rebut una resposta",
        'action' => "Admin de la botiga oberta",
    ],

    'shop-customer-join' => [
        'subject' => "Uneix-te a :shop_title",
        'category' => "Celebració de nous clients",
        'title' => "Estem contents per la teva pertinença",
        'action' => "Visita ara",
    ],

    'shop-vendor-join' => [
        'subject' => "Incorporació de venedors | :shop_title",
        'category' => "Celebració de nous venedors",
        'title' => "Estem contents per la teva pertinença",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Targeta de regal:shop_title",
        'category' => "Afegeix una nova targeta",
        'title' => "Enhorabona, has rebut una targeta regal",
        'action' => "Compra ara",
        'message' => "Heu rebut una targeta regal per l'import de :balance :currency. Podràs comprar a la nostra botiga amb aquesta targeta regal.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Centre de suport| :shop",
        'category' => "suport",
        'title' => "Has rebut una resposta",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍 Fes de comanda | :order_id",
        'title' => "ordre",
        'message' => "Has fet una comanda a la nostra botiga. Hem rebut la teva comanda i t'enviarem un altre correu electrònic un cop confirmat el pagament."
    ,

        'payments' => 'Pagaments',
    ],

    'order-payment' => [
        'subject' => "🛍 Confirmació de pagament | :order_id",
        'title' => "Ordre de pagament",
        'message' => "El vostre pagament s'ha completat,<br> Ja tenim la teva comanda. Us enviarem un altre correu electrònic quan s'enviï la vostra comanda.",
    

        'payments' => 'Pagaments',
    ],

    'order-update' => [
        'subject' => "🛍️ Actualització de l'estat de la comanda|Comanda :order_id",
        'title' => "Actualització de l'estat de la comanda",
        'message' => "La teva comanda s'ha actualitzat. Podeu consultar l'últim estat d'aquesta comanda al vostre compte.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "La teva comanda està a la cua de processament. T'avisarem quan s'estigui preparant.",
                'OrderConfirm' => "La teva comanda està confirmada i la preparació ha començat.",
                'PreparingOrder' => "La teva comanda s'està preparant i s'enviarà aviat.",
                'SentOrder' => "La teva comanda s'ha enviat. En breu el rebràs.",
                'ToCustomer' => "La teva comanda ha estat lliurada. Esperem que el gaudiu!",

                'PreparingOrder-PICKUP' => "La teva comanda s'està preparant. Rebràs una notificació quan estigui llest per a la recollida.",
                'SentOrder-PICKUP' => "La teva comanda està llesta per a la recollida. Si us plau, vine a la botiga a recollir-lo.",
                'ToCustomer-PICKUP' => "La teva comanda ha estat recollida. Esperem que el gaudiu!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "La teva comanda està a la cua de processament. T'avisarem quan estigui llest.",
                'OrderConfirm' => "La teva comanda està confirmada i la preparació està en curs.",
                'PreparingOrder' => "La teva comanda s'està preparant i t'enviarem aviat.",
                'ToCustomer' => "La teva comanda virtual s'ha lliurat al teu compte. Gràcies!"
            ],
            'SERVICE' => [
                'CheckQueue' => "La vostra sol·licitud de servei està a la cua. T'avisarem quan comencem.",
                'OrderConfirm' => "El vostre servei està confirmat i ens estem preparant per començar.",
                'PreparingOrder' => "Estem preparant el teu servei i t'avisarem quan s'hagi completat.",
                'ToCustomer' => "El vostre servei està complet. Gràcies per triar-nos!"
            ],
            'FILE' => [
                'PreparingOrder' => "El vostre fitxer s'està preparant i estarà disponible aviat.",
                'ToCustomer' => "El vostre fitxer està preparat i s'ha lliurat. Ja el podeu descarregar."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "La teva comanda de subscripció està a la cua. T'avisarem quan comenci el processament.",
                'OrderConfirm' => "La teva subscripció s'ha confirmat i s'està configurant.",
                'PreparingOrder' => "Estem preparant la teva subscripció i començarà aviat.",
                'SentOrder' => "La teva subscripció s'ha activat. Rebràs actualitzacions contínues.",
                'ToCustomer' => "El vostre servei de subscripció s'ha activat correctament."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Felicitats :name|Val nou: :title',
        'category' => "FELICITATS, NOU VAL",
        'message' => "Hola :name,<br><br>Has rebut un nou val com a regal de la nostra part! Pots guanyar encara més vals presentant Selldone als teus amics i a tothom que coneixes. Aquest val val **:price :currency**.<br><br>Has fet el primer pas i estem aquí per ajudar-te a desbloquejar noves funcions amb el teu val. Si us plau, inicieu la sessió amb **:email** i trobeu el vostre val a la Botiga **Tauler** > **Configuració** > **Llicència**.<br><br>Enhorabona!",
        'action' => "El meu tauler",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Felicitats, estimat :name | Has rebut un regal',
        'category' => "Anunci de rebre un regal",
        'title' => "Regals per a tu",
        'message' => "Hola :name, ens complau fer-te saber que has rebut un regal especial de Selldone! 🎉 Pots guanyar més regals mantenint-te actiu, fent créixer la teva botiga i millorant la teva experiència a Selldone. Per comprovar el vostre regal, només cal que inicieu sessió amb :email i cerqueu-lo a l'extrem superior dret del vostre tauler.<br><br>Aquest regal val **:price :currency** i podeu dipositar-lo fàcilment a la vostra cartera dins del vostre regal QQ00006QQ009QQQ08Q009QQ. per actualitzar la llicència de la vostra botiga i desbloquejar eines encara més potents per impulsar el vostre negoci en línia!",
        'action' => "Regals",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍 Nova comanda rebuda | :order_id",
        'title' => "New Order",
        'message' => "Heu rebut una nova comanda. Aneu a la pàgina de processament de comandes de la vostra botiga.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'La vostra informació emplenada',
        'output-form-title' => 'Informació de l\'article comprat',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Informe setmanal :time',
        'title' => 'Informe setmanal de rendiment de la botiga',
        'message' => "Aquest és l'informe setmanal de la vostra botiga de <b>:start</b> a <b>:end</b>. Aquest informe inclou consells per millorar el vostre negoci, també podeu consultar l'estat de la vostra botiga en línia i les comandes recents. Espero que tingueu un bon dia i una bona setmana per davant."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ El vostre informe d\'estalvi :amount dels darrers tres mesos| :shop_title',
        'title' => 'Informe estacional sobre la seva activitat empresarial, recompenses i estalvi econòmic',
        'message' => "Aquest és el vostre informe estacional <b>:shop_title</b> de <b>:start</b> a <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Comptes connectats',
        'sub-title' => 'Quin és l\'últim estat dels comptes de cartera connectats a la meva botiga?',
        'view-wallet' => 'Veure cartera',
        'tip-title' => 'Consells importants',
        'tip' => "Configureu una cartera Selldone gratuïta i enllaceu-la a la vostra botiga. Encara que el vostre saldo sigui negatiu, els vostres clients encara poden comprar i pagar sense cap problema. No et preocupis, les operacions i les dades de la teva botiga continuaran sense problemes durant un màxim d'1 mes, sense cap interrupció.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Connecteu-vos al compte'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Aplicacions instal·lades',
        'sub-title' => 'Llista d\'aplicacions que heu instal·lat a la vostra botiga aquesta setmana.',
        'tip' => "Vols trobar més aplicacions per a la teva botiga?",
        'view-app-store' => 'Visiteu l\'App Store de Selldone.',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Els vostres bots de botiga',
        'sub-title' => 'Bots de vendes actius a la meva botiga.',
        'tip-title' => 'Venda de bot',
        'tip' => "Selldone us ha proporcionat robots de vendes automàtiques. Tot el que heu de fer és anar al tauler Complements> Bots i activar els bots de la vostra botiga. Tingueu en compte que el servei corresponent ha d'estar disponible al vostre país.",
        'view-bots' => 'Gestiona els bots',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Comunicació amb els clients',
        'sub-title' => 'Quants contactes he tingut amb els meus clients aquesta setmana?',
        'faqs' => 'Preguntes freqüents',
        'tickets' => 'Bitllets de client',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Estat dels usuaris',
        'sub-title' => 'Activitat de :start a :end',
        'users' => [
            'title' => 'Clients',
            'subtitle' => 'Registre d\'usuaris',
        ],
        'views' => [
            'title' => 'Visites',
            'subtitle' => 'Quantes vegades has visitat la botiga',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Usuaris retornats',

        'shop_views' => 'Vistes de la botiga',
        'baskets' => [
            'title' => 'Carrets de la compra',
            'subtitle' => 'Informar del nombre de carretons de la compra nous',
        ],
        'products' => [
            'title' => 'Visió general dels productes',
            'subtitle' => 'Estat dels productes a la botiga per tipus',
            'value_name' => 'Productes'
        ],
        'products_count' => 'Tipus de producte',
        'views_count' => 'Recompte de visualitzacions',
        'sell_count' => 'Recompte de vendes',
        'send_count' => 'Recompte d\'enviaments',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Enviament de gota',
        'sub-title' => 'Panell per als principals venedors de Drop Shipping Selldone.',
        'total_fulfillments' => 'Total de comandes rebudes',
        'ds_count' => 'Comandes rebudes',
        'statistics_title' => 'Informar de les comandes rebudes',
        'ds_cancels' => 'Cancel·la pel venedor de la interfície',
        'ds_rejects' => 'Cancel·la per tu',
        'tip' => "Sou un venedor important de mercaderies? Tens un magatzem, fàbrica o distribuïdor de productes? Podeu oferir els vostres productes a altres venedors al servei d'enviament directe de Selldone per vendre el vostre producte a gran escala. Envieu-nos un correu electrònic a support@selldone.com per guiar-vos.",
        'view-drop-shipping-panel' => 'Inicieu sessió al panell a l\'engròs',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Tipus de canvi',
        'sub-title' => 'Llista dels darrers tipus de conversió de divises a la vostra botiga.',
        'from' => 'Moneda d\'origen',
        'to' => 'Moneda de destinació',
        'rate' => 'Taxa de conversió',
        'view-exchange-panel' => 'Gestionar els tipus de canvi',
    

        'vew-exchange-panel' => 'panell de gestió del tipus de canvi',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Contractes d\'experts',
        'sub-title' => 'Quins professionals treballen a la meva botiga?',
        'cost' => 'Import del contracte',
        'duration' => 'Durada',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Data Cancel·lació',
        'end_at' => 'Data de lliurament',
        'tip' => 'Pots contractar els millors especialistes de Selldone per desenvolupar el teu negoci.',
        'view-experts' => 'Feu clic per començar.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Informa de passarel·les de pagament actives a la botiga :shop.',
        'tip-title' => 'Consells importants',
        'tip' => "Aneu a la pàgina de gestió del portal de la vostra botiga i afegiu almenys un port en pocs minuts. Als vostres clients els agrada pagar de manera ràpida i segura a través de portals en línia.",
        'view-shop-gateways' => 'Inicieu sessió a la gestió del portal de la meva botiga.',
        'view-gateways' => 'Veure més passarel·les',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Comandes',
        'sub-title' => 'Llista de comandes que he rebut aquesta setmana.',
        'total_baskets' => 'Total de comandes',
        'total_posBaskets' => 'Total de comandes en efectiu',
        'pos-title' => 'Caixa de la botiga TPV',
        'chart-label' => 'Comandes completades (aquestes comandes no es paguen necessàriament!)',
        'tip-title' => 'Hauries d\'esforçar-te més...',
        'tip' => "Cap èxit simple.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Centre de processament',
        'sub-title' => 'Quanta comanda hem processat a la botiga aquesta setmana?',
        'tip-title' => 'No teníeu cap venda!',
        'tip' => "Malauradament, aquesta setmana no heu tingut cap venda. Necessites arribar més a la teva botiga. Podeu afegir més productes, triar millors imatges o escriure millors descripcions dels vostres productes. Penseu en una feina a temps complet per al vostre negoci. Si ho fas bé i no et frustres, tindreu èxit.",
        'view-process-center' => 'Veure centre de processos',
        'return' => [
            'title' => 'Comanda retornada',
            'subtitle' => 'Informar de les comandes retornades.',
            'tip-title' => 'Sabia vostè que ...',
            'tip' => "Podeu crear tantes caixes registradores com necessiteu amb Selldone POS! Tant si es tracta de la teva tauleta, mòbil o portàtil, pots convertir qualsevol dispositiu en el punt de venda de la teva botiga. És senzill, ràpid de configurar i totalment preparat per al vostre servidor. Comença a utilitzar-lo avui!",
            'view-pos' => 'Inicieu sessió al caixer de la meva botiga en línia'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sessions',
        'sub-title' => 'Quantes vegades he visitat la meva botiga?',
        'countries-title' => 'Quins països han estat els més visitats?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Vols guanyar diners sense gastar ni un dòlar?',
        'message' => "Hola :name, és hora de començar a guanyar amb Selldone! Aneu a Tauler > Més > Monetització > Obteniu el vostre enllaç de referència. Comparteix l'enllaç amb els teus amics i guanya targetes regal i una part dels seus pagaments. La millor part? Tant tu com el teu amic rebeu una targeta regal!",
        'action' => 'Veure el meu enllaç de presentació',
        'mail-clip' => "<b style='color: #C2185B'>Important:</b> si utilitzeu serveis de correu electrònic com Gmail que limiten la longitud del correu electrònic, cerqueu l'opció següent al final del correu electrònic per mostrar l'informe complet i feu-hi clic:",

        'no-coin-reward' => "<b style='color: #C2185B'>Ho sentim:</b> la teva activitat no complia el requisit per obtenir una recompensa SEL Coins gratuïta. Prova més i ven més a la teva botiga per a la propera temporada.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Recompensa:</b> enhorabona, a causa del vostre fantàstic rendiment, us hem donat una recompensa gratuïta de monedes SEL :amount.",

        'need-buy-license' => "<b>Puja el teu negoci: </b> Sembla que encara no has registrat cap pla de subscripció al teu lloc web! Actualitza ara per desbloquejar més funcions per només :amount al mes si es paga anualment.",
        'not-afford-message' => "Si no us podeu permetre el pagament o teniu cap problema amb el pagament, no dubteu a comunicar-nos-ho a support@selldone.com.",
        'add-domain' => "<b>Per què no tenir un domini personalitzat per a la teva empresa?</b><br> Afegiu un domini al vostre lloc web ara; és gratis!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone és un<del> producte</del> <span style = 'color: forestgreen'>comunitat</span> .<br> Sigues un venedor professional!",
        'message' => "Segueix les pàgines oficials del Selldone a Twitter, LinkedIn i xarxes socials. Envieu-nos qualsevol comentari, sol·licitud o crítica o participeu en discussions sobre Selldone. També formem part de la comunitat de Selldone que <b>tu fas</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'S\'han rebut noves comandes d\'alvocat | :shop_title :time',
        'title' => "Informe de rendiment de les últimes 24 hores",
        'message' => "Els vostres clients estan esperant que les vostres comandes siguin revisades i fixades en el preu. Respon a les sol·licituds dels teus clients tan aviat com sigui possible per obtenir més vendes.",
        'card_title' => "Comandes a la cua",
        'card_subtitle' => "Des de :date",

        'card_payed' => "Comandes pagades"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Respon a la teva publicació a :community_title',
        'title' => ":name i :count altres persones han comentat les teves publicacions.",
        'message' => "Hola :name, les teves publicacions criden l'atenció! Has rebut comentaris a la nostra comunitat. Inicieu sessió al vostre compte per unir-vos a la discussió i veure què diu tothom.",
        'title-simple' => ":name ha comentat les teves publicacions.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Respon al teu tema:topic_title',
        'title' => ":name i :count altres han respost sobre el teu tema.",
        'message' => "Hola :name, el teu tema crida l'atenció! Heu rebut respostes a la nostra comunitat. Inicieu sessió al vostre compte per unir-vos a la discussió i veure què diu tothom.",
        'title-simple' => ":name va respondre al teu tema.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Nou inici de sessió :name',
        'category' => 'Notificacions de seguretat',
        'title' => "Inicieu sessió al compte",
        'message' => "Benvolgut :name, s'ha detectat un inici de sessió al vostre compte Selldone.",   // Login in selldone (seller)
        'message-shop' => "Benvolgut :name, heu iniciat sessió a :shop_title .",  // Login in shop (buyer)

        'footer' => "Si no heu iniciat sessió, canvieu la contrasenya.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Retirada",
        'deposit' => "Dipòsit",

        'withdraw_subject' => "Retirar del compte :account",
        'deposit_subject' => "Dipòsit al compte :account",

        'message' => "La transferència de diners s'ha fet amb les especificacions següents.",

        'type' => "Tipus de transacció",

        'from' => "Compte d'origen",
        'to' => "Destination account",

        'desc' => "Descripció de la transacció",
        'action' => "Veure transacció",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Important! Incompliment de normes| :shop",
        'category' => "Informar crític",
        'title' => "La teva botiga ha estat sancionada",
        'action' => "Obre el tauler de control de la botiga",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter t'ha convidat a Selldone",
        'title' => ":name t'ha enviat :amount per ajudar-te a llançar la teva nova botiga en línia i monetitzar-la!",
        'message' => "Hola **:receiver_name**,<br><br>Benvingut a Selldone! A Selldone, podeu crear fàcilment el vostre lloc de comerç electrònic, bloc, comunitat en línia i fins i tot configurar un sistema de TPV en línia per a vendes presencials, tot en qüestió de minuts. És el sistema operatiu d'empresa en línia complet dissenyat per fer que el vostre negoci sigui millor, més ràpid i més fàcil d'executar.<br><br>Registreu-vos abans de <b>:date</b> i rebeu un val :amount per començar!",
        'accept' => "Accepta la invitació",
        'owner' => "Propietari de",
        'join-date' => "A Selldone des de llavors",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Enllaç de recuperació| :shop",
        'category' => "Seguretat de la botiga",
        'title' => "Enllaç de recuperació de la botiga de <b>:shop_name</b> .",
        'message' => "Us hem enviat aquest correu electrònic perquè heu sol·licitat restaurar la vostra botiga. Si feu clic a l'enllaç següent, recuperareu la vostra botiga i totes les dades que hi pertanyen.",
        'action' => "Confirmeu la recuperació de la botiga",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Quants diners va estalviar Selldone per al vostre negoci?',
        'sub-title' => 'De la data :start a :end',
        'infrastructure' => [
            'title' => 'Infraestructura',
            'subtitle' => 'Servidors, CDN, emmagatzematge i altres serveis al núvol',
        ],
        'experts' => [
            'title' => 'Experts i personal',
            'subtitle' => 'Desenvolupadors, manteniment i suport',
        ],
        'total_save' => 'Diners estalviats totals'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'La teva actuació',
        'sub-title' => 'Visió general del negoci de :start a :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Usuaris retornats',

        'shop_views' => 'Vistes de la botiga',
        'baskets' => [
            'title' => 'Carrets de la compra',
            'subtitle' => 'Informar del nombre de carretons de la compra nous',

        ],
        'products' => [
            'title' => 'Visió general dels productes',
            'subtitle' => 'Estat dels productes a la botiga per tipus',
            'value_name' => 'Productes'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Total de visites de pàgines web',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Heu rebut una nova comanda. Aneu a la pàgina de processament de comandes del vostre tauler de proveïdors.",
        'subject' => "🛍 Nova comanda rebuda | :order_id",
        'your_revenue' => "Els teus ingressos",
    ],
    'vendor-invite' => [
        'title' => 'Invitació del venedor',
        'message' => "Heu rebut una invitació per convertir-vos en venedor de :shop_name. Podeu acceptar-lo o rebutjar-lo fent clic als botons següents.",
        'subject' => ":shop_name |Invitació per convertir-se en el nostre venedor",
        'accept' => "Accepta i converteix-te en venedor",
        'reject' => "Rebutjar",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Invitació per unir-se al nostre equip',
        'message' => "T'han convidat a unir-te a :vendor_name a :shop_name. Pots acceptar o rebutjar aquesta invitació utilitzant els botons següents.",
        'subject' => "Invitació per unir-se a :vendor_name|Fes-te membre de l'equip",
        'accept' => "Accepta i uneix-te a l'equip",
        'reject' => "Rebutja",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "El vostre codi d'inici de sessió per a :shop",
        'header-message' => "T'enviem aquest correu electrònic perquè has sol·licitat un codi d'inici de sessió per a la botiga. Trobeu la vostra contrasenya única (OTP) a continuació:",
        'footer-message' => "Aquest codi serà vàlid durant 10 minuts. Si no heu sol·licitat aquest codi d'inici de sessió, ignoreu aquest correu electrònic."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Verifica el teu correu electrònic| :shop",
        'title' => 'Verificació del correu electrònic',
        'header-message' => "Hola, :name,<br>Si us plau, confirmeu que **:email** és la vostra adreça de correu electrònic fent clic al botó següent o utilitzant l'enllaç següent en un termini de 48 hores.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Actualitzacions de productes| :shop",
        'title' => "Actualització sobre l'estat del producte: últimes 24 hores",
        'message' => "Espero que aquest missatge us trobi bé. Aquesta és una breu actualització per informar-vos de l'estat dels vostres productes a la nostra plataforma durant les últimes 24 hores.\nDurant aquest període, hi ha hagut canvis en l'estat d'alguns productes. Aquests canvis poden ser deguts a compres, actualitzacions d'estocs o altres esdeveniments relacionats.\nPer obtenir informació més detallada sobre cada producte, inicieu sessió al vostre compte i consulteu la secció \"Estat del producte\".",
        'action' => "Obriu el panell de proveïdors",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Comandes a granel rebudes| :shop | :date",
        'title' => "Notificació de comandes a granel",
        'message' => "Heu rebut un lot de comandes a granel. Visiteu la pàgina de processament de comandes del vostre tauler per obtenir més detalls. També podeu descarregar la llista de comandes a través de l'enllaç segur proporcionat, vàlid durant 7 dies.<br><br>\n        <b>IMPORTANT:</b> Aquest enllaç és vàlid durant 7 dies.<br>\n        Aquest enllaç és dinàmic, de manera que cada vegada que hi facis clic, rebràs les comandes més actualitzades per a aquesta data concreta. <b>Vol dir que si l'estat de pagament de la comanda canvia a rebutjat, ja no veureu aquesta comanda al CSV descarregat, o si la comanda es paga, apareixerà a la llista.</b><br><br>\n        <ul>\n            <li>El CSV conté comandes pagades amb una data reservada a :date.</li>\n            <li>La data reservada és la data en què l'usuari fa clic a la compra a la pàgina de la comanda.</li>\n        </ul>\n        <b>Per evitar comandes duplicades, comproveu sempre la comanda ID abans d'enviar-la.</b>",
        'action' => "Descarrega la llista de comandes",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Alguns articles de la vostra comanda no s'han acceptat i no es poden lliurar. L'import d'aquests articles es reemborsarà a la vostra targeta en breu."
    ]

];
