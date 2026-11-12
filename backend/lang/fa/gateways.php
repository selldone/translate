<?php

/*
|--------------------------------------------------------------------------
| Payment services ▶ Public labels
|--------------------------------------------------------------------------
|
| Every key is the definition key of one payment service (App\Gateway\...\XService::GetDefinition()).
| `name` and `description` are shown to merchants and buyers; `fields.<variable>.title` and the
| optional `fields.<variable>.hint` label the credential inputs of the merchant setup form.
| Variable names are fixed in code and must never be translated.
|
*/

return [

    // ―――――――――――――――――――――― Offline ――――――――――――――――――――――

    'cash' => [
        'name' => 'پرداخت نقدی',
        'description' => 'پرداخت نقدی در محل فروش، فقط در صندوق فروش سلدان در دسترس است.',
        'fields' => [],
    ],

    'cod' => [
        'name' => 'پرداخت در محل',
        'description' => 'خریدار هنگام تحویل سفارش مبلغ را به مأمور ارسال پرداخت می‌کند.',
        'fields' => [],
    ],

    'dir' => [
        'name' => 'واریز بانکی',
        'description' => 'خریدار مبلغ را به حساب بانکی شما واریز می‌کند و رسید پرداخت را بارگذاری می‌کند.',
        'fields' => [
            'bank name' => ['title' => 'نام بانک'],
            'card name' => ['title' => 'نام صاحب کارت'],
            'card no' => ['title' => 'شماره کارت'],
            'account no' => ['title' => 'شماره حساب بانکی'],
            'iban' => ['title' => 'شماره شبا (IBAN)'],
            'swift' => ['title' => 'کد سوئیفت'],
            'qr' => ['title' => 'QR'],
        ],
    ],

    // ―――――――――――――――――――――― Global ――――――――――――――――――――――

    'stripe' => [
        'name' => 'Stripe',
        'description' => 'استرایپ یک شرکت فناوری آمریکایی مستقر در سان‌فرانسیسکو است. نرم‌افزار آن به افراد و کسب‌وکارها امکان می‌دهد در اینترنت پرداخت انجام دهند و دریافت کنند.',
        'fields' => [
            'key' => ['title' => 'کلید عمومی', 'hint' => 'کلید Publishable از بخش Stripe > Developers > API keys. با pk_ شروع می‌شود.'],
            'secret' => ['title' => 'کلید خصوصی', 'hint' => 'با sk_ شروع می‌شود. در حالت آزمایشی کلید test و در حالت واقعی کلید live را وارد کنید.'],
            'whsec' => ['title' => 'رمز وب‌هوک', 'hint' => 'رمز امضای وب‌هوک فروشگاه. با whsec_ شروع می‌شود.'],
        ],
    ],

    'paypalst' => [
        'name' => 'PayPal',
        'description' => 'پی‌پال یک سامانه پرداخت آنلاین است که پرداخت اینترنتی و ارسال و دریافت پول را امن و آسان می‌کند.',
        'fields' => [
            'client_id' => ['title' => 'شناسه کلاینت (Client ID)'],
            'secret' => ['title' => 'کلید خصوصی'],
        ],
    ],

    'paypal' => [
        'name' => 'Braintree',
        'description' => 'ساخته‌شده برای کسب‌وکارهای بزرگ با مقیاس بین‌المللی. روش‌های پرداخت از جمله کیف‌پول‌های دیجیتال مانند Apple Pay و Google Pay را به‌سادگی اضافه کنید و کارت‌ها، کیف‌پول‌ها و روش‌های پرداخت محلی را در یک یکپارچه‌سازی مدرن بپذیرید.',
        'fields' => [
            'merchantId' => ['title' => 'شناسه پذیرنده (Merchant Id)'],
            'publicKey' => ['title' => 'کلید عمومی'],
            'privateKey' => ['title' => 'کلید خصوصی'],
            'merchantAccountId' => ['title' => 'شناسه حساب پذیرنده'],
        ],
    ],

    'quickpay' => [
        'name' => 'QuickPay',
        'description' => 'کوئیک‌پی در بالاترین سطح امنیت فعالیت می‌کند و دارای گواهی PCI Security Standards Council است.',
        'fields' => [
            'api' => ['title' => 'کلید API'],
            'private' => ['title' => 'کلید خصوصی'],
        ],
    ],

    'xendit' => [
        'name' => 'Xendit',
        'description' => 'زندیت درگاه پرداختی است که به کسب‌وکارها کمک می‌کند پرداخت را برای مشتریان ساده، امن و آسان کنند.',
        'fields' => [
            'secret' => ['title' => 'کلید خصوصی'],
        ],
    ],

    'fondy' => [
        'name' => 'Fondy',
        'description' => 'راهکار پرداخت یکپارچه فوندی برای تجارت فرامرزی، بازارگاه‌ها و پلتفرم‌ها امکان انتقال پول بدون اصطکاک را فراهم می‌کند.',
        'fields' => [
            'merchant_id' => ['title' => 'شناسه پذیرنده'],
            'secret' => ['title' => 'کلید پرداخت'],
            'credit' => ['title' => 'کلید خصوصی اعتبار'],
        ],
    ],

    'flutterwave' => [
        'name' => 'Flutterwave',
        'description' => 'فلاترویو یک شرکت فین‌تک نیجریه‌ای است که زیرساخت پرداخت را برای پذیرندگان جهانی و ارائه‌دهندگان خدمات پرداخت در سراسر قاره آفریقا فراهم می‌کند.',
        'fields' => [
            'public' => ['title' => 'کلید عمومی'],
            'secret' => ['title' => 'کلید خصوصی'],
            'hash' => ['title' => 'هش امنیتی وب‌هوک (تولید خودکار)'],
        ],
    ],

    'mercadopago' => [
        'name' => 'Mercado Pago',
        'description' => 'مرکادو پاگو یک پلتفرم پرداخت آنلاین است که به مشتریان امکان ارسال و دریافت پول و خرید از فروشگاه‌های آنلاین پذیرنده MercadoPago را می‌دهد.',
        'fields' => [
            'key' => ['title' => 'کلید عمومی'],
            'access' => ['title' => 'توکن دسترسی'],
        ],
    ],

    'paystack' => [
        'name' => 'Paystack',
        'description' => 'پی‌استک یک شرکت فناوری مالی نیجریه‌ای است که خدمات پردازش پرداخت را به کسب‌وکارها ارائه می‌دهد.',
        'fields' => [
            'public' => ['title' => 'کلید عمومی'],
            'secret' => ['title' => 'کلید خصوصی'],
        ],
    ],

    'monetbil' => [
        'name' => 'Monetbil',
        'description' => 'مونت‌بیل یک سرویس پرداخت موبایلی است که به پذیرندگان امکان دریافت پرداخت از حساب‌های پول موبایلی مشتریان را می‌دهد.',
        'fields' => [
            'key' => ['title' => 'کلید سرویس'],
            'secret' => ['title' => 'رمز سرویس'],
        ],
    ],

    'paymob' => [
        'name' => 'Paymob',
        'description' => 'پی‌ماب ارائه‌دهنده خدمات پرداخت با مجموعه‌ای از خدمات مالی برای کسب‌وکارها است و عمدتاً در منطقه خاورمیانه و شمال آفریقا، به‌ویژه مصر، فعالیت می‌کند.',
        'fields' => [
            'card_id' => ['title' => 'شناسه iframe کارت', 'hint' => 'در Paymob > Developers > Iframes پیدا کنید'],
            'installment_id' => ['title' => 'شناسه iframe اقساط', 'hint' => 'در Paymob > Developers > Iframes پیدا کنید'],
            'valu_id' => ['title' => 'شناسه iframe ValU', 'hint' => 'در Paymob > Developers > Iframes پیدا کنید'],
            'forsa_id' => ['title' => 'شناسه iframe Forsa', 'hint' => 'در Paymob > Developers > Iframes پیدا کنید'],
            'api' => ['title' => 'کلید API', 'hint' => 'در Paymob > Settings > Account Info پیدا کنید'],
            'hmac' => ['title' => 'HMAC', 'hint' => 'در Paymob > Settings > Account Info پیدا کنید'],
            'card_integration_id' => ['title' => 'شناسه یکپارچه‌سازی پرداخت کارتی', 'hint' => 'در Paymob > Developers > Payment Integrations پیدا کنید'],
        ],
    ],

    'squareup' => [
        'name' => 'Square',
        'description' => 'اسکوئر یک شرکت خدمات مالی است که سامانه‌های صندوق فروش، کارت‌خوان موبایلی، پرداخت آنلاین و ابزارهای کسب‌وکار برای پیگیری فروش، موجودی و تحلیل ارائه می‌دهد.',
        'fields' => [
            'id' => ['title' => 'شناسه برنامه', 'hint' => 'در Square > Applications > Credentials پیدا کنید'],
            'location' => ['title' => 'شناسه مکان', 'hint' => 'در Square > Applications > Locations پیدا کنید'],
            'secret' => ['title' => 'توکن دسترسی', 'hint' => 'در Square > Applications > Credentials پیدا کنید'],
        ],
    ],

    'paytabs' => [
        'name' => 'PayTabs',
        'description' => 'پی‌تبز یک شرکت پردازش پرداخت امن است که پرداخت را برای استارتاپ‌ها، کارآفرینان، کسب‌وکارهای کوچک و متوسط، پذیرندگان و دولت‌ها با راهکارهای تجارت الکترونیک و موبایلی تسهیل می‌کند.',
        'fields' => [
            'profile_id' => ['title' => 'شناسه پروفایل', 'hint' => 'در Paytabs > تب Profile پیدا کنید.'],
            'server_key' => ['title' => 'کلید سرور', 'hint' => 'در Paytabs > Developers > API Keys > Key management پیدا کنید.'],
            'client_key' => ['title' => 'کلید کلاینت', 'hint' => 'در Paytabs > Developers > API Keys > Key management پیدا کنید.'],
        ],
    ],

    'mollie' => [
        'name' => 'Mollie',
        'description' => 'مولی یک ارائه‌دهنده هلندی خدمات پرداخت است که به کسب‌وکارها کمک می‌کند پرداخت آنلاین امن را از طریق کارت، کیف‌پول و روش‌های پرداخت محلی اروپایی بپذیرند.',
        'fields' => [
            'api_key' => ['title' => 'کلید API', 'hint' => 'در Mollie Dashboard > Developers > API keys پیدا کنید. در حالت آزمایشی کلید test_ و در حالت واقعی کلید live_ را وارد کنید.'],
        ],
    ],

    'viva' => [
        'name' => 'Viva',
        'description' => 'پذیرش پرداخت آنلاین از طریق Viva.com Smart Checkout.',
        'fields' => [
            'client_id' => ['title' => 'شناسه کلاینت Smart Checkout', 'hint' => 'شناسه کلاینت Smart Checkout را از حساب دمو یا واقعی متناظر در Viva.com وارد کنید.'],
            'client_secret' => ['title' => 'رمز کلاینت Smart Checkout', 'hint' => 'رمز کلاینت Smart Checkout را از همان حساب Viva.com وارد کنید.'],
            'source_code' => ['title' => 'کد منبع پرداخت', 'hint' => 'کد چهاررقمی منبع پرداخت را همراه با صفرهای ابتدایی وارد کنید.'],
            'webhook_verification_key' => ['title' => 'کلید تأیید وب‌هوک', 'hint' => 'اختیاری. کلید تأیید وب‌هوک Viva.com را برای فعال‌سازی تأیید آدرس وب‌هوک وارد کنید.'],
        ],
    ],

    'pesapal' => [
        'name' => 'Pesapal',
        'description' => 'پذیرش پرداخت آنلاین کارتی و موبایلی از طریق Pesapal.',
        'fields' => [
            'consumer_key' => ['title' => 'Consumer Key', 'hint' => 'کلید Consumer را از حساب پذیرنده Pesapal وارد کنید. در حالت آزمایشی اطلاعات sandbox و در حالت واقعی اطلاعات live را به کار ببرید.'],
            'consumer_secret' => ['title' => 'Consumer Secret', 'hint' => 'رمز Consumer متناظر را از همان حساب و محیط Pesapal وارد کنید. سلدان هنگام فعال‌سازی و ذخیره این درگاه، آدرس IPN را به‌صورت خودکار ثبت می‌کند.'],
        ],
    ],

    'razorpay' => [
        'name' => 'Razorpay',
        'description' => 'ریزرپی تنها راهکار پرداخت در هند است که به کسب‌وکارها امکان پذیرش، پردازش و پرداخت وجوه را با مجموعه محصولات خود می‌دهد.',
        'fields' => [
            'key' => ['title' => 'کلید API'],
            'secret' => ['title' => 'کلید خصوصی'],
            'whsec' => ['title' => 'رمز وب‌هوک', 'hint' => 'اختیاری. رمزی که برای وب‌هوک فروشگاه در Razorpay > Settings > Webhooks انتخاب کرده‌اید؛ رویدادهای اشتراک با آن تأیید می‌شوند.'],
        ],
    ],

    'esewa' => [
        'name' => 'eSewa',
        'description' => 'ای‌سیوا یک کیف‌پول دیجیتال مستقر در نپال است که راهکارهای پرداخت آنلاین فوری ارائه می‌دهد.',
        'fields' => [
            'merchant_code' => ['title' => 'کد پذیرنده'],
        ],
    ],

    'easebuzz' => [
        'name' => 'Easebuzz',
        'description' => 'ایزباز یک پلتفرم جامع پرداخت دیجیتال است که درگاه پرداخت، حساب پذیرنده و یکپارچه‌سازی روان را برای تراکنش‌های آنلاین کسب‌وکارها فراهم می‌کند.',
        'fields' => [
            'key' => ['title' => 'کلید', 'hint' => 'در داشبورد Easebuzz پیدا کنید، مثلاً 8542AAD2.'],
            'salt' => ['title' => 'Salt', 'hint' => 'در داشبورد Easebuzz پیدا کنید، مثلاً DANN887YUE.'],
        ],
    ],

    'jazzcash' => [
        'name' => 'JazzCash',
        'description' => 'جزکش، با نام پیشین MobiCash، یک کیف‌پول موبایلی، سرویس پرداخت موبایلی و بانکداری بدون شعبه در پاکستان است.',
        'fields' => [
            'merchant_id' => ['title' => 'شناسه پذیرنده'],
            'password' => ['title' => 'رمز عبور'],
            'integrity_salt' => ['title' => 'Integrity Salt'],
        ],
    ],

    'zaincash' => [
        'name' => 'ZainCash',
        'description' => 'زین‌کش یک کیف‌پول موبایلی و سرویس انتقال پول، پرداخت قبض و پرداخت وجوه با مجوز بانک مرکزی عراق است.',
        'fields' => [
            'merchant_id' => ['title' => 'شناسه پذیرنده'],
            'msisdn' => ['title' => 'MSISDN'],
            'secret' => ['title' => 'کلید خصوصی'],
        ],
    ],

    'momo' => [
        'name' => 'MoMo',
        'description' => 'مومو یک کیف‌پول الکترونیکی و اپلیکیشن پرداخت است که به کاربران امکان پرداخت و انتقال دیجیتال پول را می‌دهد.',
        'fields' => [
            'partner_code' => ['title' => 'کد شریک (Partner Code)'],
            'sub_partner_code' => ['title' => 'شناسه زیرشریک (اختیاری)'],
            'access' => ['title' => 'کلید دسترسی'],
            'secret' => ['title' => 'کلید خصوصی'],
        ],
    ],

    'sslcommerz' => [
        'name' => 'SSLCommerz',
        'description' => 'اس‌اس‌ال‌کامرز یک ارائه‌دهنده برتر درگاه پرداخت آنلاین با راهکارهای تراکنش امن و کارآمد برای کسب‌وکارها در بنگلادش است.',
        'fields' => [
            'store_id' => ['title' => 'شناسه فروشگاه'],
            'store_passwd' => ['title' => 'رمز فروشگاه'],
        ],
    ],

    // ―――――――――――――――――――――― Iran (IRR) ――――――――――――――――――――――

    'idpay' => [
        'name' => 'آی‌دی‌پی',
        'description' => 'درگاه پرداخت ریالی آی‌دی‌پی.',
        'fields' => [
            'key' => ['title' => 'کلید دسترسی'],
        ],
    ],

    'payping' => [
        'name' => 'پی‌پینگ',
        'description' => 'درگاه پرداخت ریالی پی‌پینگ.',
        'fields' => [
            'key' => ['title' => 'کلید API'],
        ],
    ],

    'zarinpal' => [
        'name' => 'زرین‌پال',
        'description' => 'درگاه پرداخت ریالی زرین‌پال.',
        'fields' => [
            'key' => ['title' => 'مرچنت کد'],
        ],
    ],

    'pasargad' => [
        'name' => 'بانک پاسارگاد',
        'description' => 'درگاه پرداخت ریالی بانک پاسارگاد.',
        'fields' => [
            'terminal_code' => ['title' => 'کد ترمینال'],
            'merchant_code' => ['title' => 'کد پذیرنده'],
            'private_key' => ['title' => 'کلید خصوصی'],
        ],
    ],

    'digipay' => [
        'name' => 'دیجی‌پی',
        'description' => 'تراکنش‌های هوشمندانه و سریع با اپلیکیشن پرداخت موبایلی دیجی‌پی.',
        'fields' => [
            'username' => ['title' => 'نام کاربری'],
            'password' => ['title' => 'رمز عبور'],
            'client_id' => ['title' => 'شناسه کلاینت'],
            'client_secret' => ['title' => 'رمز کلاینت'],
        ],
    ],

    // ―――――――――――――――――――――― Crypto ――――――――――――――――――――――

    'bitcoin' => [
        'name' => 'Bitcoin',
        'description' => 'پذیرش پرداخت بیت‌کوین به آدرس‌هایی که از کلید عمومی گسترش‌یافته کیف‌پول شما ساخته می‌شوند.',
        'fields' => [
            'xpub' => ['title' => 'XPUB', 'hint' => 'کلید عمومی گسترش‌یافته کیف‌پول بیت‌کوین شما. سلدان برای هر پرداخت یک آدرس دریافت از آن می‌سازد.'],
        ],
    ],

    'cardano' => [
        'name' => 'Cardano',
        'description' => 'کاردانو یک شبکه رمزارز و پروژه متن‌باز است که هدف آن اجرای یک پلتفرم بلاکچین عمومی برای قراردادهای هوشمند است. رمزارز داخلی کاردانو Ada نام دارد.',
        'fields' => [],
    ],

    'solana' => [
        'name' => 'Solana',
        'description' => 'سولانا یک بلاکچین پرسرعت است که از توسعه‌دهندگان سراسر جهان در ساخت برنامه‌های غیرمتمرکز پشتیبانی می‌کند.',
        'fields' => [
            'wallet' => ['title' => 'کیف‌پول', 'hint' => 'آدرس کیف‌پول سولانای شما که پرداخت‌ها را دریافت می‌کند.'],
        ],
    ],

];
