<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Ова порука жели добродошлицу новом купцу у продавницу.',
        ShopMailTemplateCodes::OrderCheckout => 'Ово обавештење се шаље када купац потврди поруџбину.',
        ShopMailTemplateCodes::OrderPayment => 'Ово обавештење потврђује успешно плаћање које је извршио купац.',
        ShopMailTemplateCodes::OrderUpdate => 'Ова порука се шаље да би се купац обавестио о статусу његове поруџбине.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Ова порука се шаље продавцу да га обавести о потврђеној поруџбини.',
        ShopMailTemplateCodes::PosCheckout => 'Ово обавештење се шаље како би се потврдила наруџба на продајном месту за купца.',
        ShopMailTemplateCodes::PosPayment => 'Ово обавештење потврђује плаћање на продајном месту које је извршио купац.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Ова порука обавештава продавца о куповини обављеној на продајном месту.',
        ShopMailTemplateCodes::ShopContact => 'Ово обавештење се шаље када се пошаље образац за контакт.',
        ShopMailTemplateCodes::ShopGiftCard => 'Ово обавештење обавештава корисника да је примио поклон картицу.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Ова порука поздравља новог продавца у продавници.',
        ShopMailTemplateCodes::ShopVendorInvite => "Ова порука се шаље да позовете продавца да се придружи вашем тржишту.",
        ShopMailTemplateCodes::ShopVendorOrder => "Ова порука се шаље продавцу када је поруџбина примљена у статусу плаћено или поузећем (КК0000КК).",
        ShopMailTemplateCodes::ShopVendorProducts => "Шаље се свакодневно ради ажурирања добављача о статусу њихових производа.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Ова порука се шаље да позовете продавца да се придружи вашем тржишту.",

        ShopMailTemplateCodes::UserLogin => "Обавестите корисника са детаљима за пријаву, укључујући КК0000КК адресу, датум и уређај, из безбедносних разлога.",
        ShopMailTemplateCodes::LoginCode => "Пошаљите код за једнократну лозинку корисницима да се пријаве у продавницу.",

        ShopMailTemplateCodes::EmailVerifyLink => "Пошаљите везу за верификацију адресе е-поште корисника. Овај емаил се шаље када се корисник региструје од стране КК0000КК и унесе своју е-пошту. Не шаље се када се корисник региструје директно са друштвеном пријавом или е-поштом.",

        ShopMailTemplateCodes::EmailBulkOrder => "Пошаљите листу примљених и плаћених поруџбина на велико за одређени дан."


    ,

    ],


    'global' => [
        'greetings' => 'Hi, :name!',
        'end-statement' => 'Тим за подршку',

        'receiver_name' => 'Hi :user_name',
        'footer-help' => "Need help? Ask at [support@selldone.com](mailto:support@selldone.com) or visit our [help center](https://selldone.com/community).",
        'selldone-team' => 'КК0000КК тим',
        'footer-shop' => "If you need help with anything, please don't hesitate to email us: :shop_mail",
        'accept' => "Прихвати",
        'reject' => "Одбити",
        'verify' => "верифи",
        'title' => "Наслов",
        'value' => "Валуе",
        'description' => "Опис",
        'shop' => "Схоп",
        'shop-info' => "Информације о продавници",
        'user' => "корисник",
        'user-info' => "Информације о налогу",
        'license' => "Лиценца",
        'status' => "Статус",
        'start' => "Почетак",
        'end' => "Крај",
        'renewal' => "Реневал",
        'view' => "Поглед",

        'balance' => "Баланс",
        'card_number' => "Број картице",
        'cvv' => "Цвв",
        'expire_date' => "Истиче",

        'Dashboard' => "Дасхбоард",
        'order' => "ред",
        'view_order' => "Погледајте редослед",
        'pay_now' => "Pay now",

        'official_selldone' => "ЗВАНИЧНО ПРОДАНО",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Валута",
        'free-balance' => "Слободно стање",
        'locked-balance' => "Закључан баланс",
        'bot' => "Бот",
        'requests' => "Захтеви",
        'baskets' => 'Цартс',
        'physical' => "Физички",
        'virtual' => "Виртуелно",
        'file' => "Филе",
        'service' => "Услуга",
        'fulfillment' => "Испуњење",
        'open' => "Отвори",
        'reserved' => "Резервисано",
        'canceled' => "Отказано",
        'payed' => "Плаћено",
        'cod' => "COD",
        'orders-count' => 'Наређења',
        'payments-count' => 'Плаћања',
        'confirms-count' => 'Потврђује',
        'sends-count' => 'Шаље',
        'delivers-count' => 'Испоручује',
        'count' => 'Цоунт',
        'transactions-count' => 'Број трансакција',
        'success-transactions' => 'Успешне трансакције',
        'total-amount' => 'Укупан износ',
        'amount' => 'Износ',
        'wage' => 'Плата',
        'debug' => 'Отклањање грешака',
        'pos' => 'POS',
        'live' => 'Уживо',
        'CheckQueue' => 'Проверите ред',
        'OrderConfirm' => 'Потврдите наруџбу',
        'PreparingOrder' => 'Припрема реда',
        'SentOrder' => 'Послат налог',
        'ToCustomer' => 'Испоручено купцу',
        'Pending' => 'нерешен',
        'Accepted' => 'Прихваћено',
        'Rejected' => 'Одбијен',
        'pc' => 'PC',
        'tablet' => 'Таблет',
        'phone' => 'Телефон',
        'total' => 'Укупно',
        'view-detail' => 'Погледај Детаљ',
        'empty' => 'Празан',
        'dropshipping' => 'Испустити поруџбеницу',
        'reply' => 'Одговорити',
        'reactions' => 'Реакције',
        'Comments' => 'Коментари',
        'last-comment' => 'Последњи коментар',
        'response-to' => 'Одговор на',
        'posts' => 'Постови',
        'post' => 'пошта',

        'name' => 'Име',
        'email' => 'Емаил',
        'type' => 'тип',
        'device' => 'Уређај',
        'platform' => 'Платформа',
        'browser' => 'Прегледач',
        'time' => 'време',
        'Wallet' => 'Новчаник',
        'date' => 'Датум',

        'account' => 'Рачун',
        'transaction' => 'Трансакција',
        'fee' => 'Надокнада',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Билл',
        'category' => 'Категорија',
        'password' => 'Лозинка',
        'verify-login' => "Потврдите и пријавите се",
        'url' => 'URL',
        'avocado' => 'Авокадо',
        'hyper' => 'Хипер',
        'buy-now' => "Купите сада",
        'add-domain' => "Add Domain",
        'views' => 'Погледи',


        'country' => 'Држава',
        'address' => 'адреса',
        'postal' => 'поштански код',
        'building_no' => 'зграда бр.',
        'building_unit' => 'Јединица #',
        'message' => 'Порука',


        'customer' => 'Купац',
        'cart-items' => 'Артикли из корпе',
        'payment' => 'Плаћање',
        'receiver' => 'Пријемник',
        'virtual-items' => 'Виртуелне ставке',
        'no-payment' => 'Без плаћања!',

        'enable' => 'Омогући',
        'access' => 'Приступ',
        'bank' => 'Подаци о банци',

        'vendor' => 'Вендор',

        'view_content' => "Прикажи цео садржај",
        'files' => 'Фајлови',
        'download' => 'Преузимање',
        'file_name' => 'Име датотеке',
        'file_size' => 'Величина',

        'subscription' => 'Претплата',
        'products' => 'Производи',
        'vendor_products' => 'Вендор Продуцтс',

        'pickup' => 'Пицкуп',

        'minutes' => 'Минуте',
        'hours' => 'Сати',

        'refund' => 'Рефунд',
        'recipient_address' => 'Адреса примаоца',
        'signature' => 'Потпис',
        'blockchain' => 'Блоцкцхаин',
        'details' => 'Детаљи',


    

        'Shop' => 'Схоп',
        'dashboard' => 'Командна табла',
        'comments' => 'коментари',
        'wallet' => 'новчаник',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "КК0000КК Пословни ОС",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'КК0000КК Извештај о учинку'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'КК0000КК сезонски извештај'
        ],
        'Onboarding' => [
            'id' => 'Здраво',
            'name' => 'КК0000КК Мерцхантс'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Support :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Selldone'
        ],
        'Welcome' => [
            'id' => 'Здраво',
            'name' => 'КК0000КК Цоммунити'
        ],
        'NewShop' => [
            'id' => 'трговци',
            'name' => 'КК0000КК Мерцхантс'
        ],
        'Approve' => [
            'id' => 'одобрити',
            'name' => 'КК0000КК Мерцхантс'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Orders Management :name'
        ],

        'Recovery' => [
            'id' => 'опоравак',
            'name' => 'КК0000КК Тим за опоравак'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'На чекању ⌛',
        'PAYED' => 'Плаћено ✅',
        'CANCELED' => 'Отказано ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Администратор',
            'OFFICER' => 'Службеник и надзорник',
            'AUDITING' => 'Менаџер ревизије',
            'EMPLOYEE' => 'Запослени',
            'PRODUCT' => 'Менаџер производа',
            'CONTENT' => 'Менаџер садржаја',
            'MARKETING' => 'Маркетинг менаџер',
            'VIEWER' => 'Виевер',

        ],
        'subject' => ":inviter invited you as :level | :shop",
        'category' => "Позив особља",
        'title' => "You have been invited to <b>:shop_name</b> as <b>:level</b>.",
        'message' => "You've received an invitation to collaborate with the <b>:shop_title</b> team in business. You have the option to accept or decline this offer. Should you choose to accept, please log in to the Selldone service to confirm your decision. Upon confirmation, you will gain access to the store management section.",

    ],

    'welcome-email' => [
        'subject' => "👋 Welcome :name, Let's Get Started with Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Добродошли у КК0000КК",
        'message' => "Хвала вам што сте изабрали КК0000КК! Сада сте део живахне заједнице која повезује глобалне продавце са купцима, локална предузећа са предузећима и појединце са корпорацијама. Сви наши Мастер и Про алати доступни су вам **бесплатно** и **неограничено**. Ту смо да вас подржимо и отворимо врата вашем успеху.",

        'index' => "Step :step. ",

        'step-domain' => [
            'title' => 'Додајте свој прилагођени домен',
            'message' => "Да бисте започели, бесплатно додајте свој прилагођени домен на контролну таблу продавнице под Подешавања > Подешавања домена.",
            'action' => 'Управљајте мојим доменима',
        ],
        'step-landing' => [
            'title' => 'Прилагодите своју почетну страницу',
            'message' => "Персонализујте своју почетну страницу тако што ћете отићи на Контролну таблу > Странице. Одаберите одредишну страницу или направите нову. Лако је и интуитивно и можете одмах почети да радите на томе.",
            'action' => 'Прилагодите моју одредишну страницу',
        ],
        'step-payment' => [
            'title' => 'Подешавање начина плаћања',
            'message' => "Почните да примате уплате директно на свој банковни рачун. Да бисте повезали своје добављаче плаћања као што су Стрипе, ПаиПал и други, идите на Контролна табла > Рачуноводство > Гатеваи.",
            'action' => 'Додајте начине плаћања',
        ],
        'step-products' => [
            'title' => 'Додајте своје производе',
            'message' => "Лако додајте производе и категорије на контролној табли > Производи. То је исто као и управљање датотекама и фасциклама на рачунару – потпуно спреман за превлачење и отпуштање. Такође можете масовно увозити производе користећи Екцел. Доступан је узорак шаблона који ће вам помоћи да почнете.",
            'action' => 'Управљајте мојим производима',
        ],
        'step-shipping' => [
            'title' => 'Подесите методе испоруке',
            'message' => "Да бисте купцима наплатили испоруку, дефинишите своје методе испоруке на контролној табли > Логистика > Слање. Можете подесити различите цене и подршку за различите локације. Не заборавите да поставите порекло складишта у Контролна табла > Логистика > Складиште.",
            'action' => 'Управљајте начинима испоруке',
        ],
    

        'seller' => [
            'title' => 'Да ли сте продавац?',
            'message' => 'Да бисте почели да продајете, унесите своју контролну таблу у Селлдоне преко доње везе и креирајте своју прву продавницу потпуно бесплатно. Ово ће потрајати неколико минута и имаћете сопствену продавницу и веб локацију на мрежи. Затим ћемо вас упутити на следеће кораке и добити пролаз за плаћање.',
            'action' => 'Пријавите се на моју контролну таблу',
        ],
        'buyer' => [
            'title' => 'Ја сам купац',
            'message' => 'Честитам. Једном када постанете члан Селлдоне-а, решићете се свих мука око чланства и аутентификације у онлајн продавницама. Да бисте имали користи од било које продавнице и сајта који користе Селлдоне платформу, можете се пријавити једним кликом и учинити куповину једноставном, брзом и безбедном.',
        ],
    ],


    'charge-account' => [
        'category' => 'Новчаник > Рачун > Наплата',
        'title' => "Суццесс Цхарге",
        'message' => "Your account <b>:account_number</b> has been charged <b>:amount</b> successfully.",
        'account' => 'Рачун',
        'charge' => 'Напунити',
        'balance' => 'Баланс',
        'footer' => "Учините пословање лаким, остваривим и доступним свима широм света."
    ],

    'verify-email' => [
        'subject' => "🙌 Завршите регистрацију за КК0000КК! Верификуј везу.",
        'category' => "ДА СТЕ НА КОРАК",
        'title' => "Потврдите Вашу емаил адресу",
        'message' => "Hi :name,<br><br>Thank you for choosing Selldone!<br><br>To confirm that <b>:email</b> is your correct email address, please click the button below or use the link provided. You have 48 hours to complete this verification.",
        'footer' => "If you’re having trouble clicking the Verify button, copy and paste the URL below into your web browser: :activation_url",
        'next-step' => "Затим ћемо вам послати неке корисне материјале и водич корак по корак који ће вам олакшати додавање прилагођеног домена, подешавање плаћања, додавање производа и добијање прве поруџбине.",

    ],
    'verify-email-code' => [
        'subject' => "Verification code for :name",
        'category' => "SECURITY",
        'title' => "Шифра за верификацију е-поште",
        'message' => "Hi :name,<br><br>To confirm that <b>:email</b> is your correct email address, please enter the following code within the next <b>10 minutes</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Ваша продавница је спремна| :name",
        'category' => "ДА СТЕ НА КОРАК",
        'title' => "Подешавање је завршено",
        'account_title' => "Ваш рачун",
        'account_msg' => "Верификујте се и пријавите се на свој налог са овим информацијама.",
        'shop_msg' => "Информације о налогу на пословном оперативном систему КК0000КК.",

    ],

    'reset2fa' => [
        'category' => "БЕЗБЕДНОСНА ЗВАНИЧНА ПОРУКА",
        'title' => "Захтевајте да онемогућите пријаву у 2 корака",
        'message' => "You are receiving this email because we received a request to reset two-factor authentication for **:name** account with **:email** email.<br><br>We found the following details for your account:",
        'footer' => "Ако нисте захтевали ресетовање лозинке, нису потребне додатне радње.",
        'action' => 'Онемогућите пријаву у два корака',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Ваша продавница је сада спремна!",
        'category' => "РОЂЕНА НОВА ОНЛИНЕ ПРОДАВНИЦА У СВЕТУ",
        'title' => "Congratulations, :name!",
        'message' => "<b>Congratulations, :name! Your new online business is now live!</b> We are excited to welcome you to the Selldoners community. You've taken the first step toward success, and we are here to help you every step of the way.<br>Now that your store is ready, let’s make sure you're set to receive payments directly from your customers and start growing your empire. If you ever need help, we're just a message away—our support team is always here for you.<br><br><b>Important Next Steps:</b> To start, ensure you're all set up for receiving payments and smooth operations. We'll guide you through each stage to get your store running seamlessly.",
        'pdf-book' => "Не пропустите приложени приручник: Радите свој посао као игра",

        'account' => [
            'title' => 'Корак 1: Подесите свој КК0000КК новчаник',
            'message' => "За почетак, направите налог у свом КК0000КК новчанику. Ово је место где ће вам бити одузете накнаде, а такође ћете и допунити да би ваша продавница несметано радила. Ако вам стање буде негативно, не брините! Ваша продавница ће наставити да ради без прекида.",
            'action' => 'Пријавите се на новчаник',
        ],

        'shop-account' => [
            'title' => 'Корак 2: повежите налог са продавницом',
            'message' => "Затим повежите налог новчаника са продавницом. Идите на КК0000ККСторе > Рачуноводство > ИнвоицеКК0001КК и повежите свој новчаник. Ово осигурава да се сва плаћања клијената депонују директно на ваш банковни рачун—КК0002КК не одузима никакве износе од ваше зараде.",
            'action' => 'Панел фактура продавнице',
        ],

        'gateway' => [
            'title' => 'Корак 3: Повежите мрежни пролаз за плаћање',
            'message' => "Сада, хајде да поставимо ваш мрежни пролаз за плаћање. Идите на КК0000ККСторе > Рачуноводство > ПортКК0001КК и кликните на КК0002ККДодај нови портКК0003КК. Изаберите своју валуту и ​​видећете листу доступних пролаза за плаћање. Повезивање мрежног пролаза је брзо и лако, али ако вам је потребна помоћ, слободно погледајте КК0004КК водиче или нам се обратите.",
            'action' => 'Додајте портал у продавницу',
        ],

        'domain' => [
            'title' => 'Последњи корак: повезивање наменског домена',
            'message' => "Моћи ћете да имате своју продавницу на онолико домена колико желите. Да бисте повезали наменски домен са продавницом, потребно је да имате најмање лиценцу за покретање. Упознавањем сваког пријатеља са Селдоне-ом, добићете једномесечну поклон картицу са лиценцом за покретање. Проценат уплата ваших пријатеља ће такође бити приписан на рачуне ваших клијената.",
            'action' => 'Представљање и примање неограничених поклон картица',
        ],
    ],


    'basket-list' => [
        'item' => "предмет",
        'count' => "Цоунт",
        'price' => "Цена",
        'discount-code' => "Код за попуст",
        'customer-club' => 'Клуб купаца',
        'shipping' => "поштарина",
        'total' => "Укупно",
        'offer' => "Понуда",
        'coupon' => "Цоупон",
        'lottery' => "Награда",
        'tax' => "Порез",
        'tax_included' => "Укључено у цену",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Метод',
        'amount' => 'Износ',
        'giftcard' => 'Gift card',
        'payment' => 'Плаћање',
    ],


    'shop-subscription-email' => [
        'category' => "Ажурирање претплате",
        'title' => "Store Licence: :shop_title",
        'title-reserved' => "Reserve licence: :shop_title",
        'title-active' => "Active licence: :shop_title",
        'title-finished' => "Finished licence: :shop_title",
        'title-cancel' => "Cancel licence: :shop_title",
        'message' => "Ваш план лиценце за продавницу је ажуриран,",
        'RESERVED' => "⚡ Ваш план претплате је **резервисан**.",
        'ACTIVE' => "🟢 Ваш план претплате је **активиран**.",
        'FINISHED' => "🚧 Ваш план претплате је **завршен**.",
        'CANCEL' => "⛔ Ваш план претплате је **отказан**.",
    ],

    'support' => [
        'subject' => "Support Center | :name replied",
        'category' => "Центар за подршку",
        'title' => "Добили сте одговор",
        'action' => "Отворите радњу администратора",
    ],

    'shop-customer-join' => [
        'subject' => "Join :shop_title",
        'category' => "Прослава нових купаца",
        'title' => "Срећни смо због вашег чланства",
        'action' => "Посетите сада",
    ],

    'shop-vendor-join' => [
        'subject' => "Укључивање добављача| :shop_title",
        'category' => "Прослава новог продавца",
        'title' => "Срећни смо због вашег чланства",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Gift Card :shop_title",
        'category' => "Додајте нову картицу",
        'title' => "Честитамо, добили сте поклон картицу",
        'action' => "Купујте сада",
        'message' => "You have received a gift card worth :balance :currency. You can use this gift card in our store.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Центар за подршку| :shop",
        'category' => "подршка",
        'title' => "Добили сте одговор",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Order Confirmation | Order :order_id",
        'title' => "ред",
        'message' => "Наручили сте у нашој продавници. Примили смо вашу поруџбину и послаћемо вам другу е-пошту када уплата буде потврђена."
    ,

        'payments' => 'Плаћања',
    ],

    'order-payment' => [
        'subject' => "🛍️ Payment Confirmation | Order :order_id",
        'title' => "Налог за плаћање",
        'message' => "Ваша уплата је завршена,<br> Имамо вашу наруџбу. Послаћемо вам још једну е-поруку када се поруџбина пошаље.",
    

        'payments' => 'Плаћања',
    ],

    'order-update' => [
        'subject' => "🛍️ Order Status Update | Order :order_id",
        'title' => "Ажурирање статуса поруџбине",
        'message' => "Ваша поруџбина је ажурирана. Можете проверити најновији статус ове поруџбине на свом налогу.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Ваша поруџбина је у реду за обраду. Обавестићемо вас када буде у припреми.",
                'OrderConfirm' => "Ваша поруџбина је потврђена и припрема је почела.",
                'PreparingOrder' => "Ваша поруџбина се припрема и ускоро ће бити послата.",
                'SentOrder' => "Ваша поруџбина је послата. Ускоро ћете га добити.",
                'ToCustomer' => "Ваша поруџбина је испоручена. Надамо се да ћете уживати!",

                'PreparingOrder-PICKUP' => "Ваша наруџба је у припреми. Добићете обавештење када буде спремно за преузимање.",
                'SentOrder-PICKUP' => "Ваша поруџбина је спремна за преузимање. Молимо дођите у продавницу да га преузмете.",
                'ToCustomer-PICKUP' => "Ваша поруџбина је преузета. Надамо се да ћете уживати!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Ваша поруџбина је у реду за обраду. Обавестићемо вас када буде спремно.",
                'OrderConfirm' => "Ваша поруџбина је потврђена и припрема је у току.",
                'PreparingOrder' => "Ваша поруџбина је у припреми и биће вам ускоро послата.",
                'ToCustomer' => "Ваша виртуелна поруџбина је испоручена на ваш налог. Хвала вам!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Ваш захтев за услугу је у реду. Обавестићемо вас када почнемо.",
                'OrderConfirm' => "Ваша услуга је потврђена и припремамо се за почетак.",
                'PreparingOrder' => "Припремамо вашу услугу и обавестићемо вас када буде завршена.",
                'ToCustomer' => "Ваша услуга је завршена. Хвала вам што сте нас изабрали!"
            ],
            'FILE' => [
                'PreparingOrder' => "Ваша датотека се припрема и ускоро ће бити доступна.",
                'ToCustomer' => "Ваша датотека је спремна и испоручена. Сада га можете преузети."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Ваш налог за претплату је у реду. Обавестићемо вас када обрада почне.",
                'OrderConfirm' => "Ваша претплата је потврђена и поставља се.",
                'PreparingOrder' => "Припремамо вашу претплату и ускоро ће почети.",
                'SentOrder' => "Ваша претплата је активирана. Примаћете стална ажурирања.",
                'ToCustomer' => "Ваша претплатничка услуга је успешно активирана."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Congratulations :name | New Voucher: :title',
        'category' => "ЧЕСТИТКЕ, НОВИ ВАУЧЕР",
        'message' => "Hey :name,<br><br>You've received a new voucher as a gift from us! You can earn even more vouchers by introducing Selldone to your friends and everyone you know. This voucher is worth **:price :currency**.<br><br>You've taken the first step, and we’re here to help you unlock new features with your voucher! Please login with **:email** and find your voucher in the Shop **Dashboard** > **Settings** > **Licence**.<br><br>Congratulations!",
        'action' => "Моја контролна табла",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Congratulations, Dear :name | You’ve Received a Special Gift!',
        'category' => "Најава добијања поклона",
        'title' => "Поклони за вас",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "Поклони",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍 Нова поруџбина примљена| :order_id",
        'title' => "New Order",
        'message' => "Добили сте нову наруџбу. Идите на страницу за обраду поруџбине у вашој продавници.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Ваше попуњене информације',
        'output-form-title' => 'Информације о купљеном артиклу',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title | Weekly Report :time',
        'title' => 'Недељни извештај о учинку продавнице',
        'message' => "This is your store's weekly report from <b>:start</b> to <b>:end</b>. This report includes tips for improving your business, you can also check the status of your online store and recent orders. I hope you have a good day and week ahead."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Your :amount saving report in the last three months | :shop_title',
        'title' => 'Сезонски извештај о вашој пословној активности, наградама и финансијским уштедама',
        'message' => "This is your <b>:shop_title</b> seasonal report from <b>:start</b> to <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Повезани налози',
        'sub-title' => 'Који је најновији статус налога новчаника повезаних са мојом продавницом?',
        'view-wallet' => 'Погледај новчаник',
        'tip-title' => 'Важни савети',
        'tip' => "Подесите бесплатан КК0000КК новчаник и повежите га са својом продавницом. Чак и ако је ваш баланс негативан, ваши купци и даље могу да купују и плаћају без икаквих проблема. Не брините, рад и подаци ваше продавнице ће се наставити несметано до 1 месеца, без икаквих прекида.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Повежите се са налогом'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Инсталиране апликације',
        'sub-title' => 'Листа апликација које сте инсталирали у својој продавници ове недеље.',
        'tip' => "Да ли желите да пронађете још апликација за своју продавницу?",
        'view-app-store' => 'Истражите КК0000КК Апп Сторе',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Ваши ботови продавнице',
        'sub-title' => 'Активни продајни ботови у мојој продавници.',
        'tip-title' => 'Бот Сале',
        'tip' => "КК0000КК вам нуди аутоматизоване продајне ботове. Једноставно их активирајте тако што ћете посетити одељак Додаци > Ботови. Уверите се да су потребне услуге доступне у вашем региону за несметан рад.",
        'view-bots' => 'Управљајте ботовима',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Комуникација са купцима',
        'sub-title' => 'Колико сам контаката имао са својим клијентима ове недеље?',
        'faqs' => 'Често постављана питања',
        'tickets' => 'Цустомер Тицкетс',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Статус корисника',
        'sub-title' => 'Activity from :start to :end',
        'users' => [
            'title' => 'Купци',
            'subtitle' => 'Региструјте се корисници',
        ],
        'views' => [
            'title' => 'Посете',
            'subtitle' => 'Колико пута сте посетили продавницу',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Ретурнед Усерс',

        'shop_views' => 'Схоп Виевс',
        'baskets' => [
            'title' => 'Колица за куповину',
            'subtitle' => 'Пријавите број нових колица за куповину',
        ],
        'products' => [
            'title' => 'Преглед производа',
            'subtitle' => 'Статус производа у продавници по врсти',
            'value_name' => 'Производи'
        ],
        'products_count' => 'Врсте производа',
        'views_count' => 'Број прегледа',
        'sell_count' => 'Селл цоунт',
        'send_count' => 'Број доставе',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Испустити поруџбеницу',
        'sub-title' => 'Главна плоча за најбоље продавце КК0000КК Дроп Схиппинг',
        'total_fulfillments' => 'Укупно примљених налога',
        'ds_count' => 'Рецеивед Ордерс',
        'statistics_title' => 'Извештај о примљеним наређењима',
        'ds_cancels' => 'Откажите од стране продавца интерфејса',
        'ds_rejects' => 'Откажите ви',
        'tip' => "Да ли сте велики продавац са складиштем, фабриком или дистрибутером производа? Можете да проширите свој досег тако што ћете своје производе понудити другим продавцима путем услуге Дроп Схиппинг компаније КК0000КК. Пошаљите нам е-пошту на КК0001КК да сазнате више.",
        'view-drop-shipping-panel' => 'Пријавите се на панел за велепродају',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'девизни курс',
        'sub-title' => 'Листа најновијих курсева конверзије валута у вашој продавници.',
        'from' => 'Изворна валута',
        'to' => 'Одредишна валута',
        'rate' => 'Стопа конверзије',
        'view-exchange-panel' => 'Управљајте девизним курсевима',
    

        'vew-exchange-panel' => 'панел за управљање девизним курсом',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Стручни уговори',
        'sub-title' => 'Који професионалци раде у мојој продавници?',
        'cost' => 'Износ уговора',
        'duration' => 'Трајање',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Датум Откажи',
        'end_at' => 'Датум испоруке',
        'tip' => 'Унајмите врхунске стручњаке из КК0000КК да помогну у развоју вашег пословања.',
        'view-experts' => 'Кликните да бисте започели.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Active Payment Gateways on Your Shop :shop',
        'tip-title' => 'Важни савети',
        'tip' => "Идите на страницу за управљање порталом у вашој продавници и додајте бар један порт за неколико минута. Ваши клијенти воле да плаћају брзо и безбедно преко онлајн портала.",
        'view-shop-gateways' => 'Пријавите се на управљање порталом моје продавнице.',
        'view-gateways' => 'Погледајте више мрежних пролаза',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Наређења',
        'sub-title' => 'Листа поруџбина које сам примио ове недеље.',
        'total_baskets' => 'Тотал Ордерс',
        'total_posBaskets' => 'Укупни готовински налози',
        'pos-title' => 'ПОС Сторе Бок',
        'chart-label' => 'Довршене поруџбине (ове поруџбине нису нужно плаћене!)',
        'tip-title' => 'Требало би да се потрудиш...',
        'tip' => "Нема једноставног успеха.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Центар за обраду',
        'sub-title' => 'Колико смо поруџбина обрадили у продавници ове недеље?',
        'tip-title' => 'Нисте имали распродају!',
        'tip' => "Нажалост, ове недеље нисте имали никакву продају. Морате да стигнете више до своје продавнице. Можете додати више производа, одабрати боље слике или написати боље описе за своје производе. Размислите о послу са пуним радним временом за свој посао. Ако то урадите како треба и не будете фрустрирани, успећете.",
        'view-process-center' => 'Погледајте процесни центар',
        'return' => [
            'title' => 'Ретурнед Ордер',
            'subtitle' => 'Пријавите враћене поруџбине.',
            'tip-title' => 'Да ли сте знали да ...',
            'tip' => "Можете креирати онолико каса колико вам је потребно са КК0000КК ПОС ПОС! Било да се ради о вашем таблету, мобилном телефону или лаптопу, било који уређај можете претворити у продајно место своје продавнице. Једноставан је, брз за подешавање и потпуно припремљен за ваш сервер. Почните да га користите данас!",
            'view-pos' => 'Пријавите се на благајну моје онлајн продавнице'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Сесије',
        'sub-title' => 'Колико пута сам посетио своју продавницу?',
        'countries-title' => 'Које земље су биле најпосећеније?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Да ли желите да зарадите новац без трошења једног долара?',
        'message' => "Hi :name, it's time to start earning with Selldone! Go to Dashboard > More > Monetization > Get Your Referral Link. Share the link with your friends, and earn gift cards and a share of their payments. The best part? Both you and your friend get a gift card!",
        'action' => 'Погледајте мој уводни линк',
        'mail-clip' => "<b style='color: #C2185B'>Важно:</b> Ако користите услуге е-поште као што је Гмаил који ограничавају дужину е-поште, пронађите следећу опцију на крају е-поруке да бисте приказали цео извештај и кликните на њу:",

        'no-coin-reward' => "КК0000ККОопс:КК0001КК Ваша тренутна активност није достигла праг за бесплатну награду КК0002КК Цоин. Наставите да се трудите и продајте више следеће сезоне да бисте имали прилику да их зарадите.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Congratulations:</b> Great job! Based on your outstanding performance, we've credited :amount SEL Coins to your account as a reward.",

        'need-buy-license' => "<b>Level Up Your Business:</b> It looks like you haven’t registered any subscription plan for your website yet! Upgrade now to unlock more features for just :amount per month if paid annually.",
        'not-afford-message' => "Ако имате било каквих проблема са плаћањем или не можете то да приуштите тренутно, не оклевајте да нам се обратите на КК0000КК.",
        'add-domain' => "<b>Зашто не бисте имали прилагођени домен за своје пословање?</b><br> Додајте домен на своју веб локацију одмах; бесплатно је!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "КК0000КК је КК0001ККпродуцтКК0002КК КК0003КК заједницаКК0004КК.КК0005ККБудите професионални продавац!",
        'message' => "Пратите званичне странице КК0000КК на Твиттер-у, ЛинкедИн-у и друштвеним мрежама. Пошаљите нам било какве коментаре, захтеве или критике или учествујте у дискусијама о КК0001КК. Такође смо део заједнице КК0002КК коју КК0003КК правите КК0004КК."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'New Avocado Orders Received | :shop_title :time',
        'title' => "Извештај о учинку за последња 24 сата",
        'message' => "Ваши клијенти чекају да се ваше поруџбине прегледају и цене. Одговорите на захтеве својих купаца што је пре могуће да бисте остварили већу продају.",
        'card_title' => "Поруџбине у реду",
        'card_subtitle' => "Since :date",

        'card_payed' => "Плаћене поруџбине"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'New Replies to Your Post in :community_title',
        'title' => ":name and :count others have joined the conversation on your posts!",
        'message' => "Hi :name, your posts are getting attention! You’ve received comments in our community. Log in to your account to join the discussion and see what everyone is saying.",
        'title-simple' => ":name has commented on your post!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Reply to your topic :topic_title',
        'title' => ":name, and :count others replied on your topic.",
        'message' => "Hi :name, your topic is getting attention! You’ve received replies in our community. Log in to your account to join the discussion and see what everyone is saying.",
        'title-simple' => ":name replied on your topic.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 New Login :name',
        'category' => 'Безбедносна обавештења',
        'title' => "Пријавите се на налог",
        'message' => "Dear :name, a login to your Selldone account was detected.",   // Login in selldone (seller)
        'message-shop' => "Dear :name, a login to :shop_title was detected.",  // Login in shop (buyer)

        'footer' => "Ако нисте пријављени, промените лозинку.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Повлачење",
        'deposit' => "Депозит",

        'withdraw_subject' => "Withdraw from account :account",
        'deposit_subject' => "Deposit to account :account",

        'message' => "Трансфер новца је обављен са следећим спецификацијама.",

        'type' => "Врста трансакције",

        'from' => "Изворни налог",
        'to' => "Destination account",

        'desc' => "Опис трансакције",
        'action' => "Погледајте трансакцију",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Важно! Кршење правила| :shop",
        'category' => "Цритицал информ",
        'title' => "Ваша продавница је кажњена",
        'action' => "Отворите контролну таблу продавнице",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter has invited you to join Selldone",
        'title' => ":name has sent you :amount to help launch your new online store and monetize it!",
        'message' => "Hi **:receiver_name**,<br><br>Welcome to Selldone! On Selldone, you can easily create your e-commerce site, blog, online community, and even set up an online POS system for in-person sales—all within minutes. It’s the complete online business operating system designed to make your business better, faster, and easier to run.<br><br>Sign up by <b>:date</b> and receive a :amount voucher to get started!",
        'accept' => "Прихватити позив",
        'owner' => "Власник",
        'join-date' => "Јоинед КК0000КК он",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Веза за опоравак| :shop",
        'category' => "Сигурност продавнице",
        'title' => "Store recovery link of <b>:shop_name</b>.",
        'message' => "Ова е-порука вам је послата јер сте тражили да вратите своју продавницу. Кликом на доњу везу повратићете вашу продавницу и све податке који јој припадају.",
        'action' => "Потврдите опоравак продавнице",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Колико је новца КК0000КК уштедео за ваше пословање?',
        'sub-title' => 'From date :start to :end',
        'infrastructure' => [
            'title' => 'Инфраструктура',
            'subtitle' => 'Сервери, ЦДН, Стораге и друге услуге у облаку',
        ],
        'experts' => [
            'title' => 'Стручњаци и особље',
            'subtitle' => 'Програмери, одржавање и подршка',
        ],
        'total_save' => 'Укупно уштеђени новац'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Ваш учинак',
        'sub-title' => 'Business overview from :start to :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Ретурнед Усерс',

        'shop_views' => 'Схоп Виевс',
        'baskets' => [
            'title' => 'Колица за куповину',
            'subtitle' => 'Пријавите број нових колица за куповину',

        ],
        'products' => [
            'title' => 'Преглед производа',
            'subtitle' => 'Статус производа у продавници по врсти',
            'value_name' => 'Производи'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Укупан број приказа страница веб локације',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Добили сте нову наруџбу. Идите на страницу за обраду поруџбине у табли вашег добављача.",
        'subject' => "🛍 Нова поруџбина примљена| :order_id",
        'your_revenue' => "Ваш приход",
    ],
    'vendor-invite' => [
        'title' => 'Вендор Инвитатион',
        'message' => "You have received an invitation to become a vendor of :shop_name. You can accept or reject it using the buttons below.",
        'subject' => ":shop_name |Позив да постанете наш продавац",
        'accept' => "Прихватите и постаните продавац",
        'reject' => "Одбити",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Позив да се придружите нашем тиму',
        'message' => "You've been invited to join :vendor_name at :shop_name. You can accept or decline this invitation using the buttons below.",
        'subject' => "Invitation to Join :vendor_name | Become a Team Member",
        'accept' => "Прихватите и придружите се тиму",
        'reject' => "Одбити",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Your Login Code for :shop",
        'header-message' => "Шаљемо вам ову е-пошту јер сте затражили код за пријаву у продавницу. Молимо пронађите своју једнократну лозинку (ОТП) у наставку:",
        'footer-message' => "Овај код ће важити 10 минута. Ако нисте захтевали овај код за пријаву, занемарите ову е-пошту."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Потврдите своју е-пошту| :shop",
        'title' => 'Верификација е-поште',
        'header-message' => "Hi :name,<br>Please confirm that **:email** is your email address by clicking the button below or using the link below within 48 hours.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Ажурирања производа| :shop",
        'title' => "Ажурирање статуса производа – последња 24 сата",
        'message' => "Надам се да ће вас ова порука добро наћи. Ово је кратко ажурирање да вас обавестимо о статусу ваших производа на нашој платформи у последња 24 сата.\nТоком овог периода дошло је до промена у статусу неких производа. Ове промене могу бити последица куповина, ажурирања залиха или других повезаних догађаја.\nЗа детаљније информације о сваком производу, пријавите се на свој налог и проверите одељак „Статус производа“.",
        'action' => "Отворите таблу добављача",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Примљене масовне поруџбине| :shop | :date",
        'title' => "Обавештење о масовним поруџбинама",
        'message' => "You have received a batch of bulk orders. Please visit the order processing page in your panel for further details. You can also download the order list via the secure link provided, valid for 7 days.<br><br>\n        <b>IMPORTANT:</b> This link is valid for 7 days.<br>\n        This link is dynamic, so every time you click it, you will receive the most updated orders for this specific date. <b>It means if the order payment status changes to rejected, you will no longer see that order in the downloaded CSV, or if the order is paid, it will appear in the list.</b><br><br>\n        <ul>\n            <li>The CSV contains paid orders with a reserved date in the :date.</li>\n            <li>Reserved date is the date when the user clicks checkout on the order page.</li>\n        </ul>\n        <b>To prevent duplicate orders, always check the Order ID before sending.</b>\n    ",
        'action' => "Преузмите листу налога",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Неки артикли у вашој наруџбини нису прихваћени и не могу се испоручити. Износ за ове артикле ће ускоро бити враћен на вашу картицу."
    ]

];
