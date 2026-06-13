<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Bu mesaj mağazaya yeni alıcını salamlayır.',
        ShopMailTemplateCodes::OrderCheckout => 'Bu bildiriş alıcı sifarişi təsdiqlədikdə göndərilir.',
        ShopMailTemplateCodes::OrderPayment => 'Bu bildiriş müştəri tərəfindən uğurlu ödənişi təsdiqləyir.',
        ShopMailTemplateCodes::OrderUpdate => 'Bu mesaj alıcıya sifarişin statusu haqqında məlumat vermək üçün göndərilir.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Bu mesaj satıcıya təsdiqlənmiş sifariş barədə məlumat vermək üçün göndərilir.',
        ShopMailTemplateCodes::PosCheckout => 'Bu bildiriş alıcı üçün satış nöqtəsi sifarişini təsdiqləmək üçün göndərilir.',
        ShopMailTemplateCodes::PosPayment => 'Bu bildiriş alıcı tərəfindən həyata keçirilən satış nöqtəsi ödənişini təsdiqləyir.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Bu mesaj satıcıya satış nöqtəsində edilən alış haqqında məlumat verir.',
        ShopMailTemplateCodes::ShopContact => 'Bu bildiriş əlaqə forması təqdim edildikdə göndərilir.',
        ShopMailTemplateCodes::ShopGiftCard => 'Bu bildiriş istifadəçiyə hədiyyə kartı aldığını bildirir.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Bu mesaj mağazaya yeni satıcını salamlayır.',
        ShopMailTemplateCodes::ShopVendorInvite => "Bu mesaj satıcını bazarınıza qoşulmağa dəvət etmək üçün göndərilib.",
        ShopMailTemplateCodes::ShopVendorOrder => "Sifariş Ödənişli və ya Çatdırılmada Nağd (COD) statusunda alındıqda bu mesaj satıcıya göndərilir.",
        ShopMailTemplateCodes::ShopVendorProducts => "Satıcıları məhsullarının vəziyyəti haqqında yeniləmək üçün gündəlik göndərilir.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Bu mesaj satıcını bazarınıza qoşulmağa dəvət etmək üçün göndərilib.",

        ShopMailTemplateCodes::UserLogin => "Təhlükəsizlik məqsədləri üçün istifadəçini IP ünvanı, tarix və cihaz daxil olmaqla, giriş məlumatları ilə xəbərdar edin.",
        ShopMailTemplateCodes::LoginCode => "İstifadəçilərin mağazaya daxil olması üçün birdəfəlik parol kodu göndərin.",

        ShopMailTemplateCodes::EmailVerifyLink => "İstifadəçinin e-poçt ünvanını yoxlamaq üçün keçid göndərin. Bu e-poçt istifadəçi SMS tərəfindən qeydiyyatdan keçib öz e-poçtunu daxil etdikdə göndərilir. Bir istifadəçi birbaşa sosial giriş və ya e-poçt ilə qeydiyyatdan keçdikdə göndərilmir.",

        ShopMailTemplateCodes::EmailBulkOrder => "Müəyyən bir gün üçün toplu olaraq alınan və ödənilmiş sifarişlərin siyahısını göndərin.",


    ],


    'global' => [
        'greetings' => 'salam :name',
        'end-statement' => 'Dəstək komandası',

        'receiver_name' => 'Salam :user_name',
        'footer-help' => "Kömək lazımdır? [support@selldone.com](mailto:support@selldone.com) ünvanından soruşun və ya [yardım mərkəzimizə](https://selldone.com/community) baş çəkin.",
        'selldone-team' => 'Selldone komandası',
        'footer-shop' => "Hər hansı bir işdə köməyə ehtiyacınız varsa, bizə e-poçt göndərməkdən çəkinməyin: :shop_mail",
        'accept' => "Qəbul edin",
        'reject' => "Rədd edin",
        'verify' => "yoxlayın",
        'title' => "Başlıq",
        'value' => "Dəyər",
        'description' => "Təsvir",
        'shop' => "Mağaza",
        'shop-info' => "Mağaza Məlumatı",
        'user' => "İstifadəçi",
        'user-info' => "Hesab Məlumatı",
        'license' => "Lisenziya",
        'status' => "Vəziyyət",
        'start' => "Başlamaq",
        'end' => "Son",
        'renewal' => "Yenilənmə",
        'view' => "Baxın",

        'balance' => "Balans",
        'card_number' => "Kartı nömrəsi",
        'cvv' => "Cvv",
        'expire_date' => "Bitmə tarixi",

        'Dashboard' => "İdarə paneli",
        'order' => "sifariş",
        'view_order' => "Sifarişə baxın",
        'pay_now' => "Pay now",

        'official_selldone' => "RƏSMİ SATILIR",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Valyuta",
        'free-balance' => "Pulsuz balans",
        'locked-balance' => "Kilidlənmiş balans",
        'bot' => "Bot",
        'requests' => "İstək",
        'baskets' => 'Arabalar',
        'physical' => "Fiziki",
        'virtual' => "Virtual",
        'file' => "Fayl",
        'service' => "Xidmət",
        'fulfillment' => "İcra",
        'open' => "Açıq",
        'reserved' => "Qorunur",
        'canceled' => "Ləğv edildi",
        'payed' => "Ödənişli",
        'cod' => "COD",
        'orders-count' => 'Sifarişlər',
        'payments-count' => 'Ödənişlər',
        'confirms-count' => 'Təsdiq edir',
        'sends-count' => 'Göndər',
        'delivers-count' => 'Çatdırır',
        'count' => 'saymaq',
        'transactions-count' => 'Əməliyyatlar sayılır',
        'success-transactions' => 'Uğurlu əməliyyatlar',
        'total-amount' => 'Ümumi miqdar',
        'amount' => 'Məbləğ',
        'wage' => 'Əmək haqqı',
        'debug' => 'Debug',
        'pos' => 'POS',
        'live' => 'Canlı',
        'CheckQueue' => 'Növbəni yoxlayın',
        'OrderConfirm' => 'Sifariş təsdiq',
        'PreparingOrder' => 'Sifariş hazırlanır',
        'SentOrder' => 'Sifariş göndərildi',
        'ToCustomer' => 'Müştəriyə çatdırılır',
        'Pending' => 'gözləyən',
        'Accepted' => 'Qəbul edildi',
        'Rejected' => 'Rədd edildi',
        'pc' => 'PC',
        'tablet' => 'Tablet',
        'phone' => 'Telefon',
        'total' => 'Ümumi',
        'view-detail' => 'Detallara baxın',
        'empty' => 'Boş',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Cavab verin',
        'reactions' => 'Reaksiyalar',
        'Comments' => 'Şərhlər',
        'last-comment' => 'Son şərh',
        'response-to' => 'Cavab',
        'posts' => 'Yazılar',
        'post' => 'Post',

        'name' => 'ad',
        'email' => 'E-poçt',
        'type' => 'növü',
        'device' => 'Qurğu',
        'platform' => 'Platforma',
        'browser' => 'Brauzer',
        'time' => 'Vaxt',
        'Wallet' => 'Pul kisəsi',
        'date' => 'Tarix',

        'account' => 'Hesab',
        'transaction' => 'Əməliyyat',
        'fee' => 'Haqq',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Kateqoriya',
        'password' => 'parol',
        'verify-login' => "Doğrulayın və daxil olun",
        'url' => 'URL',
        'avocado' => 'avokado',
        'hyper' => 'Hiper',
        'buy-now' => "İndi al",
        'add-domain' => "Add Domain",
        'views' => 'Baxışlar',


        'country' => 'ölkə',
        'address' => 'ünvanı',
        'postal' => 'Poçt kodu',
        'building_no' => 'Bina #',
        'building_unit' => 'Vahid #',
        'message' => 'Mesaj',


        'customer' => 'Müştəri',
        'cart-items' => 'Səbət əşyaları',
        'payment' => 'Ödəniş',
        'receiver' => 'Qəbuledici',
        'virtual-items' => 'Virtual əşyalar',
        'no-payment' => 'Ödəniş yoxdur!',

        'enable' => 'Aktivləşdirin',
        'access' => 'Giriş',
        'bank' => 'Bank məlumatı',

        'vendor' => 'Satıcı',

        'view_content' => "Tam məzmuna baxın",
        'files' => 'Fayllar',
        'download' => 'Yüklə',
        'file_name' => 'Fayl adı',
        'file_size' => 'Ölçü',

        'subscription' => 'Abunəlik',
        'products' => 'Məhsullar',
        'vendor_products' => 'Satıcı Məhsullar',

        'pickup' => 'Götürmə',

        'minutes' => 'Dəqiqələr',
        'hours' => 'Saat',

        'refund' => 'Geri qaytarma',
        'recipient_address' => 'Alıcı ünvanı',
        'signature' => 'İmza',
        'blockchain' => 'Blockchain',
        'details' => 'Təfərrüatlar',
        'Shop' => 'Mağaza',
        'dashboard' => 'idarə paneli',
        'comments' => 'şərhlər',
        'wallet' => 'pul kisəsi',


    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Performans Hesabatı, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Mövsümi Hesabat, Selldone'
        ],
        'Onboarding' => [
            'id' => 'salam',
            'name' => 'Təsdiq et, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => ':name dəstəyi'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Doğrulayın, Selldone'
        ],
        'Welcome' => [
            'id' => 'salam',
            'name' => 'İcma, Selldone'
        ],
        'NewShop' => [
            'id' => 'tacirlər',
            'name' => 'Təsdiq et, Selldone'
        ],
        'Approve' => [
            'id' => 'təsdiq etmək',
            'name' => 'Təsdiq et, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Sifarişlərin İdarə Edilməsi :name'
        ],

        'Recovery' => [
            'id' => 'bərpa',
            'name' => 'Selldone Bərpa Komandası'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Gözlənir ⌛',
        'PAYED' => 'Ödənişlidir✅',
        'CANCELED' => 'Ləğv edildi ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administrator',
            'OFFICER' => 'Məmur və Nəzarətçi',
            'AUDITING' => 'Audit meneceri',
            'EMPLOYEE' => 'işçi',
            'PRODUCT' => 'Məhsullar meneceri',
            'CONTENT' => 'Məzmun meneceri',
            'MARKETING' => 'Marketinq Meneceri',
            'VIEWER' => 'İzləyici',

        ],
        'subject' => ":inviter sizi :level olaraq dəvət etdi| :shop",
        'category' => "İşçilərin dəvəti",
        'title' => "Siz <b>:shop_name :level</b> <b>olaraq</b> dəvət olundunuz.",
        'message' => "Siz <b>:shop_title</b> komandası ilə biznes sahəsində əməkdaşlıq etmək üçün dəvət aldınız. Bu təklifi qəbul etmək və ya rədd etmək seçiminiz var. Qəbul etməyi seçsəniz, qərarınızı təsdiqləmək üçün Selldone xidmətinə daxil olun. Təsdiq edildikdən sonra siz mağazanın idarə edilməsi bölməsinə giriş əldə edəcəksiniz.",

    ],

    'welcome-email' => [
        'subject' => "👋 Xoş gəlmisiniz :name, Gəlin Selldone ilə başlayaq!",
        'category' => 'CONGRATULATION',
        'title' => "Selldone-a xoş gəlmisiniz",
        'message' => "Selldone seçdiyiniz üçün təşəkkür edirik! Siz indi qlobal satıcıları müştərilərə, yerli biznesləri müəssisələrə və fiziki şəxsləri korporasiyalara birləşdirən canlı icmanın bir hissəsisiniz. Bütün Master və Pro alətlərimiz sizin üçün **pulsuz** və **məhdudiyyətsiz** mövcuddur. Biz sizə dəstək olmaq və uğurunuz üçün qapıları açmaq üçün buradayıq.",

        'index' => "Addım :step.",

        'step-domain' => [
            'title' => 'Fərdi Domeninizi əlavə edin',
            'message' => "Başlamaq üçün, Parametrlər > Domen Parametrləri altındakı Mağaza İdarə Panelində fərdi domeninizi pulsuz əlavə edin.",
            'action' => 'Domenlərimi İdarə Edin',
        ],
        'step-landing' => [
            'title' => 'Əsas Səhifənizi Fərdiləşdirin',
            'message' => "İdarə paneli > Səhifələr bölməsinə keçərək ana səhifənizi fərdiləşdirin. Açılış səhifəsi seçin və ya yenisini yaradın. Bu, asan və intuitivdir və siz dərhal onun üzərində işləməyə başlaya bilərsiniz.",
            'action' => 'Açılış səhifəmi fərdiləşdirin',
        ],
        'step-payment' => [
            'title' => 'Ödəniş üsullarını qurun',
            'message' => "Ödənişləri birbaşa bank hesabınıza qəbul etməyə başlayın. Stripe, PayPal və daha çox kimi ödəniş təminatçılarınızı birləşdirmək üçün İdarə Paneli > Mühasibat > Şlüz bölməsinə keçin.",
            'action' => 'Ödəniş üsulları əlavə edin',
        ],
        'step-products' => [
            'title' => 'Məhsullarınızı əlavə edin',
            'message' => "İdarə paneli > Məhsullar bölməsində asanlıqla məhsul və kateqoriyalar əlavə edin. Bu, kompüterinizdəki faylları və qovluqları idarə etmək kimidir – tamamilə sürükləyib buraxmağa hazırdır. Siz həmçinin Excel-dən istifadə edərək məhsulları toplu şəkildə idxal edə bilərsiniz. Başlamağınıza kömək etmək üçün nümunə şablon mövcuddur.",
            'action' => 'Məhsullarımı İdarə Edin',
        ],
        'step-shipping' => [
            'title' => 'Göndərmə Metodlarının qurulması',
            'message' => "Müştərilərdən göndərmə üçün ödəniş etmək üçün İdarə Paneli > Logistika > Göndərmə bölməsində göndərmə üsullarınızı müəyyənləşdirin. Müxtəlif yerlər üçün fərqli qiymət və dəstək təyin edə bilərsiniz. Dashboard > Logistic > Anbarda anbar mənşəyinizi təyin etməyi unutmayın.",
            'action' => 'Göndərmə üsullarını idarə edin',
        ],
    ],


    'charge-account' => [
        'category' => 'Pulqabı > Hesab > Ödəniş',
        'title' => "Uğur yükü",
        'message' => "Hesabınızdan <b>:account_number</b> <b>:amount</b> uğurla yükləndi.",
        'account' => 'Hesab',
        'charge' => 'Şarj edin',
        'balance' => 'Balans',
        'footer' => "Biznesi asan, əldə edilə bilən və dünyada hər kəs üçün əlçatan edin."
    ],

    'verify-email' => [
        'subject' => "🙌 Selldone-a qeydiyyatınızı tamamlayın! Linki yoxlayın.",
        'category' => "SİZ BİR ADIM UZAQSINIZ",
        'title' => "E-poçt ünvanınızı yoxlayın",
        'message' => "Salam :name,<br><br>Selldone seçdiyiniz üçün təşəkkür edirik!<br><br><b>:email</b>-nun düzgün e-poçt ünvanınız olduğunu təsdiqləmək üçün və ya aşağıdakı linkə klikləyin. Bu doğrulamanı tamamlamaq üçün 48 saatınız var.",
        'footer' => "Doğrulama düyməsini klikləməklə bağlı problem yaşayırsınızsa, aşağıdakı URL-ni kopyalayıb veb brauzerinizə yapışdırın: :activation_url",
        'next-step' => "Sonra, biz sizə fərdi domeninizi əlavə etməyi, ödənişləri qurmağı, məhsul əlavə etməyi və ilk sifarişinizi əldə etməyi asanlaşdırmaq üçün sizə bəzi faydalı materiallar və addım-addım bələdçi göndərəcəyik.",

    ],
    'verify-email-code' => [
        'subject' => ":name üçün doğrulama kodu",
        'category' => "SECURITY",
        'title' => "E-poçt doğrulama kodu",
        'message' => "Salam :name,<br><br><b>:email</b>-nun düzgün e-poçt ünvanınız olduğunu təsdiqləmək üçün növbəti <b>10 dəqiqə ərzində aşağıdakı kodu daxil edin</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Mağazanız Hazırdır| :name",
        'category' => "SİZ BİR ADIM UZAQSINIZ",
        'title' => "Quraşdırma tamamlandı",
        'account_title' => "Sizin hesabınız",
        'account_msg' => "Doğrulayın və bu məlumatla hesabınıza daxil olun.",
        'shop_msg' => "Selldone biznes əməliyyat sistemində hesab məlumatı.",

    ],

    'reset2fa' => [
        'category' => "TƏHLÜKƏSİZLİK RƏSMİ MESAJI",
        'title' => "2 addımlı girişi söndürməyi tələb edin",
        'message' => "**:name** hesabı üçün iki faktorlu autentifikasiyanı **:email** e-poçtu ilə sıfırlamaq üçün sorğu aldığımız üçün bu e-məktubu alırsınız. <br><br>Hesabınız üçün aşağıdakı təfərrüatları tapdıq:",
        'footer' => "Parolun sıfırlanmasını tələb etməmisinizsə, əlavə hərəkət tələb olunmur.",
        'action' => 'İki addımlı girişi deaktiv edin',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Mağazanız artıq hazırdır!",
        'category' => "DÜNYADA YENİ ONLINE MAĞAZA DOĞDU",
        'title' => "Təbrik edirik, :name!",
        'message' => "<b>Təbrik edirik, :name! Yeni onlayn biznesiniz artıq canlıdır! </b> Biz sizi Satanlar icmasında salamlamaqdan məmnunuq. Siz uğura doğru ilk addımı atdınız və biz sizə hər addımda kömək etmək üçün buradayıq.<br>İndi mağazanız hazırdır, gəlin birbaşa müştərilərinizdən ödənişlər almağa və imperiyanızı genişləndirməyə hazır olduğunuza əmin olaq. Əgər nə vaxtsa köməyə ehtiyacınız olarsa, bir mesaj uzağınızdayıq – dəstək komandamız hər zaman sizin üçün buradadır.<br><br><b>Vacib Sonrakı Addımlar:</b> Başlamaq üçün, ödənişləri qəbul etmək və əməliyyatların düzgün aparılması üçün hazır olduğunuzdan əmin olun. Mağazanızın problemsiz işləməsi üçün hər mərhələdə sizə bələdçilik edəcəyik.",
        'pdf-book' => "Əlavə edilmiş əl kitabını qaçırmayın: Biznesinizi oyun kimi edin",

        'account' => [
            'title' => 'Addım 1: Selldone cüzdanında hesab yaradın',
            'message' => "Başlamaq üçün Selldone cüzdanınızda hesab yaradın. Bu, rüsumlarınızın tutulacağı yerdir və mağazanızın rəvan işləməsini təmin etmək üçün əlavə etdiyiniz yerdir. Əgər balansınız mənfi olarsa, narahat olmayın! Mağazanız fasiləsiz işləməyə davam edəcək.",
            'action' => 'Cüzdana daxil olun',
        ],

        'shop-account' => [
            'title' => 'Addım 2: hesabı mağazaya qoşun',
            'message' => "Sonra, cüzdan hesabınızı mağazanıza qoşun. <b>Store > Mühasibat > Invoice</b> bölməsinə keçin və cüzdanınızı əlaqələndirin. Bu, bütün müştəri ödənişlərinin birbaşa bank hesabınıza yatırılmasını təmin edir—Selldone qazancınızdan heç bir məbləğ çıxmır.",
            'action' => 'Mağaza Faktura Paneli',
        ],

        'gateway' => [
            'title' => 'Addım 3: Onlayn Ödəniş Şlüzünü birləşdirin',
            'message' => "İndi onlayn ödəniş şlüzünüzü quraşdıraq. <b>Store > Mühasibat > Port</b> bölməsinə gedin və <b>Yeni Port</b> əlavə et üzərinə klikləyin. Valyutanızı seçin və mövcud ödəniş şlüzlərinin siyahısını görəcəksiniz. Şluzun qoşulması tez və asandır, lakin hər hansı yardıma ehtiyacınız varsa, Selldone bələdçilərini yoxlayın və ya bizimlə əlaqə saxlayın.",
            'action' => 'Mağazaya portal əlavə edin',
        ],

        'domain' => [
            'title' => 'Son addım: xüsusi domeni birləşdirin',
            'message' => "İndi fərdi domeninizi mağazanızla əlaqələndirin. Bu, müştərilərə məhsul və ya xidmətlərinizi almaq və birbaşa sizə ödəniş etmək imkanı verir.",
            'action' => 'Limitsiz hədiyyə kartlarının təqdim edilməsi və alınması',
        ],
    ],


    'basket-list' => [
        'item' => "maddə",
        'count' => "saymaq",
        'price' => "qiymət",
        'discount-code' => "Endirim kodu",
        'customer-club' => 'Müştəri Klubu',
        'shipping' => "Göndərmə",
        'total' => "Ümumi",
        'offer' => "Təklif",
        'coupon' => "Kupon",
        'lottery' => "Mükafat",
        'tax' => "vergi",
        'tax_included' => "Qiymətə daxildir",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Metod',
        'amount' => 'Məbləğ',
        'giftcard' => 'Gift card',
        'payment' => 'Ödəniş',
    ],


    'shop-subscription-email' => [
        'category' => "Abunəlik yeniləməsi",
        'title' => "Mağaza Lisenziyası: :shop_title",
        'title-reserved' => "Ehtiyat lisenziya: :shop_title",
        'title-active' => "Aktiv lisenziya: :shop_title",
        'title-finished' => "Bitmiş lisenziya: :shop_title",
        'title-cancel' => "Lisenziyanı ləğv edin: :shop_title",
        'message' => "Mağaza lisenziya planınız yeniləndi,",
        'RESERVED' => "⚡ Abunə planınız **rezerv edilib**.",
        'ACTIVE' => "🢢 Abunə planınız **aktiv edildi**.",
        'FINISHED' => "🚧 Abunə planınız **bitdi**.",
        'CANCEL' => "⛔ Abunəlik planınız **ləğv edildi**.",
    ],

    'support' => [
        'subject' => "Dəstək Mərkəzi|:name cavab verdi",
        'category' => "Dəstək mərkəzi",
        'title' => "Cavab aldınız",
        'action' => "Mağaza admini açın",
    ],

    'shop-customer-join' => [
        'subject' => "Qoşulun :shop_title",
        'category' => "Yeni müştəri bayramı",
        'title' => "Üzvlüyünüzdən məmnunuq",
        'action' => "İndi ziyarət edin",
    ],

    'shop-vendor-join' => [
        'subject' => "Satıcının işə qəbulu| :shop_title",
        'category' => "Yeni satıcı bayramı",
        'title' => "Üzvlüyünüzdən məmnunuq",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Hədiyyə Kartı :shop_title",
        'category' => "Yeni kart əlavə edin",
        'title' => "Təbrik edirik, hədiyyə kartı aldınız",
        'action' => "İndi alış-veriş edin",
        'message' => "Siz :balance :currency məbləğində hədiyyə kartı aldınız. Bu hədiyyə kartı ilə mağazamızdan alış-veriş edə biləcəksiniz.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Dəstək Mərkəzi| :shop",
        'category' => "dəstək",
        'title' => "Cavab aldınız",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍 Sifarişin yoxlanılması | :order_id",
        'title' => "sifariş",
        'message' => "Mağazamıza sifariş verdiniz. Sifarişinizi aldıq və ödəniş təsdiqləndikdən sonra sizə başqa e-poçt göndərəcəyik."
    ],

    'order-payment' => [
        'subject' => "🛍 Ödənişin Təsdiqi | :order_id",
        'title' => "Ödəmə qaydası",
        'message' => "Ödənişiniz tamamlandı,<br> Sifarişinizi aldıq. Sifarişiniz göndərildikdə sizə başqa bir e-məktub göndərəcəyik.",
    ],

    'order-update' => [
        'subject' => "🛍️ Sifariş statusu yeniləməsi|:order_id sifariş edin",
        'title' => "Sifariş statusunun yenilənməsi",
        'message' => "Sifarişiniz yeniləndi. Bu sifarişin son statusunu hesabınızda yoxlaya bilərsiniz.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Sifarişiniz emal üçün növbədədir. Hazırlananda sizə xəbər verəcəyik.",
                'OrderConfirm' => "Sifarişiniz təsdiqləndi və hazırlıq başlandı.",
                'PreparingOrder' => "Sifarişiniz hazırlanır və tezliklə göndəriləcək.",
                'SentOrder' => "Sifarişiniz göndərildi. Siz onu tezliklə alacaqsınız.",
                'ToCustomer' => "Sifarişiniz çatdırıldı. Ümid edirik ki, bundan zövq alacaqsınız!",

                'PreparingOrder-PICKUP' => "Sifarişiniz hazırlanır. O, götürülməyə hazır olduqda bildiriş alacaqsınız.",
                'SentOrder-PICKUP' => "Sifarişiniz götürülməyə hazırdır. Onu toplamaq üçün mağazaya gəlin.",
                'ToCustomer-PICKUP' => "Sifarişiniz götürüldü. Ümid edirik ki, bundan zövq alacaqsınız!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Sifarişiniz emal üçün növbədədir. Hazır olduqda sizi xəbərdar edəcəyik.",
                'OrderConfirm' => "Sifarişiniz təsdiqləndi və hazırlıq gedir.",
                'PreparingOrder' => "Sifarişiniz hazırlanır və tezliklə sizə göndəriləcək.",
                'ToCustomer' => "Virtual sifarişiniz hesabınıza çatdırıldı. Təşəkkür edirəm!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Xidmət sorğunuz növbədədir. Başladıqda sizi xəbərdar edəcəyik.",
                'OrderConfirm' => "Xidmətiniz təsdiqləndi və biz başlamağa hazırlaşırıq.",
                'PreparingOrder' => "Xidmətinizi hazırlayırıq və tamamlandıqdan sonra sizi xəbərdar edəcəyik.",
                'ToCustomer' => "Xidmətiniz tamamlandı. Bizi seçdiyiniz üçün təşəkkür edirik!"
            ],
            'FILE' => [
                'PreparingOrder' => "Faylınız hazırlanır və tezliklə əlçatan olacaq.",
                'ToCustomer' => "Faylınız hazırdır və çatdırılıb. İndi onu yükləyə bilərsiniz."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Abunəlik sifarişiniz növbədədir. Emal başlayanda sizi xəbərdar edəcəyik.",
                'OrderConfirm' => "Abunəliyiniz təsdiqləndi və qurulur.",
                'PreparingOrder' => "Abunəliyinizi hazırlayırıq və tezliklə başlayacaq.",
                'SentOrder' => "Abunəliyiniz aktivləşdirilib. Davam edən yeniləmələri alacaqsınız.",
                'ToCustomer' => "Abunəlik xidmətiniz uğurla aktivləşdirildi."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Təbriklər :name | Yeni çek: :title',
        'category' => "TƏBRİK EDİRƏM, YENİ VUÇER",
        'message' => "Salam :name,<br><br>Siz bizdən hədiyyə olaraq yeni çek aldınız! Dostlarınıza və tanıdığınız hər kəsə Selldone təqdim etməklə daha çox çek qazana bilərsiniz. Bu vauçer dəyərlidir **:price :currency**.<br><br>Siz ilk addımı atdınız və biz vauçerinizlə yeni funksiyaların kilidini açmağınıza kömək etmək üçün buradayıq! Lütfən, **:email** ilə daxil olun və Mağazada **İdarəetmə Paneli** > **Parametrlər** > **Lisenziya**-da çekinizi tapın.<br><br>Təbrik edirik!",
        'action' => "Mənim idarə panelim",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Təbriklər, Hörmətli :name | Siz hədiyyə aldınız',
        'category' => "Hədiyyənin alınması haqqında elan",
        'title' => "Sizin üçün hədiyyələr",
        'message' => "Salam :name, Selldone-dan xüsusi hədiyyə aldığınızı bildirməkdən məmnunuq! 🎉 Aktiv qalmaqla, mağazanızı böyütməklə və Selldone üzrə təcrübənizi təkmilləşdirməklə daha çox hədiyyələr qazana bilərsiniz. Hədiyyənizi yoxlamaq üçün sadəcə :email ilə daxil olun və onu idarə panelinizin yuxarı sağ küncündə axtarın.<br><br>Bu hədiyyə **:price :currency** dəyərindədir və siz onu hədiyyəniz daxilində SelldoneQ0Q1QQQ0Q1QQ000000000000000000000000000000000000000000000: mağazanızın lisenziyasını təkmilləşdirin və onlayn biznesinizi artırmaq üçün daha da güclü alətləri açın!",
        'action' => "Hədiyyələr",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍 Yeni Sifariş Alındı | :order_id",
        'title' => "New Order",
        'message' => "Yeni sifariş aldınız. Zəhmət olmasa mağazanızda sifarişin işlənməsi səhifəsinə keçin.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Doldurulmuş Məlumatınız',
        'output-form-title' => 'Satın alınan məhsul haqqında məlumat',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Həftəlik Hesabat :time',
        'title' => 'Həftəlik mağaza performans hesabatı',
        'message' => "Bu, mağazanızın <b>:start</b> - <b>:end</b> arası həftəlik hesabatıdır. Bu hesabata biznesinizi təkmilləşdirmək üçün məsləhətlər daxildir, siz həmçinin onlayn mağazanızın vəziyyətini və son sifarişləri yoxlaya bilərsiniz. Ümid edirəm ki, qarşıda yaxşı bir gün və həftə var."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Son üç ayda :amount qənaət hesabatınız| :shop_title',
        'title' => 'Biznes fəaliyyətiniz, mükafatlarınız və maliyyə qənaətləriniz haqqında mövsümi hesabat',
        'message' => "Bu, <b>:start</b>-dan <b>:end</b>-ya qədər <b>:shop_title</b> mövsümi hesabatınızdır."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Qoşulmuş hesablar',
        'sub-title' => 'Mağazama qoşulmuş pul kisəsi hesablarının son vəziyyəti necədir?',
        'view-wallet' => 'Pul kisəsinə baxın',
        'tip-title' => 'Vacib məsləhətlər',
        'tip' => "Pulsuz Selldone pul kisəsi qurun və onu mağazanızla əlaqələndirin. Balansınız mənfi olsa belə, müştəriləriniz hələ də heç bir problem olmadan alış-veriş edə və ödəyə bilərlər. Narahat olmayın, mağazanızın əməliyyatları və məlumatları heç bir fasilə olmadan 1 aya qədər rəvan davam edəcək.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Hesaba qoşulun'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Quraşdırılmış proqramlar',
        'sub-title' => 'Bu həftə mağazanızda quraşdırdığınız proqramların siyahısı.',
        'tip' => "Mağazanız üçün daha çox proqram tapmaq istəyirsiniz?",
        'view-app-store' => 'Selldone Tətbiq Mağazasını ziyarət edin..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Mağaza Botlarınız',
        'sub-title' => 'Mağazamda aktiv satış botları.',
        'tip-title' => 'Bot Satışı',
        'tip' => "Selldone sizə avtomatik satış botları təqdim etdi. Etməli olduğunuz tək şey Əlavələr> Botlar panelinə getmək və mağaza botlarınızı aktivləşdirməkdir. Nəzərə alın ki, müvafiq xidmət ölkənizdə mövcud olmalıdır.",
        'view-bots' => 'Botları idarə edin',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Müştərilərlə ünsiyyət',
        'sub-title' => 'Bu həftə müştərilərimlə nə qədər əlaqə saxladım?',
        'faqs' => 'Tez-tez soruşulan suallar',
        'tickets' => 'Müştəri Biletləri',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'İstifadəçilərin statusu',
        'sub-title' => ':start-dan :end-dək fəaliyyət',
        'users' => [
            'title' => 'Müştərilər',
            'subtitle' => 'İstifadəçilər qeydiyyatdan keçin',
        ],
        'views' => [
            'title' => 'Ziyarətlər',
            'subtitle' => 'Mağazaya neçə dəfə baş çəkmisiniz',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Qaytarılmış İstifadəçilər',

        'shop_views' => 'Mağaza Baxışları',
        'baskets' => [
            'title' => 'Alış-veriş Səbətləri',
            'subtitle' => 'Yeni alış-veriş arabalarının sayını bildirin',
        ],
        'products' => [
            'title' => 'Məhsullara Baxış',
            'subtitle' => 'Mağazadakı məhsulların növlərinə görə vəziyyəti',
            'value_name' => 'Məhsullar'
        ],
        'products_count' => 'Məhsul növləri',
        'views_count' => 'Baxış sayı',
        'sell_count' => 'Satmaq sayı',
        'send_count' => 'Göndərmə sayı',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Drop Shipping Selldone əsas satıcıları üçün panel.',
        'total_fulfillments' => 'Cəmi Qəbul Edilən Sifarişlər',
        'ds_count' => 'Alınan Sifarişlər',
        'statistics_title' => 'Alınan sifarişləri bildirin',
        'ds_cancels' => 'İnterfeys satıcısı tərəfindən ləğv edin',
        'ds_rejects' => 'Sizin tərəfinizdən ləğv edin',
        'tip' => "Siz malların əsas satıcısısınız? Sizin anbarınız, fabrikiniz və ya məhsulların distribyutoru varmı? Məhsulunuzu geniş miqyasda satmaq üçün Selldone Drop Shipping xidmətində məhsullarınızı digər satıcılara təklif edə bilərsiniz. Sizi istiqamətləndirmək üçün support@selldone.com ünvanına e-poçt göndərin.",
        'view-drop-shipping-panel' => 'Topdansatış panelinə daxil olun',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Valyuta məzənnələri',
        'sub-title' => 'Mağazanızda ən son valyuta konvertasiya məzənnələrinin siyahısı.',
        'from' => 'Mənbə Valyuta',
        'to' => 'Təyinat valyutası',
        'rate' => 'Dönüşüm dərəcəsi',
        'view-exchange-panel' => 'Valyuta məzənnələrini idarə edin',
        'vew-exchange-panel' => 'məzənnə idarəetmə paneli',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Ekspert müqavilələri',
        'sub-title' => 'Mağazamda hansı peşəkarlar işləyir?',
        'cost' => 'Müqavilə məbləği',
        'duration' => 'Müddət',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Tarix Ləğv et',
        'end_at' => 'Çatdırılma tarixi',
        'tip' => 'Biznesinizi inkişaf etdirmək üçün Selldone-də ən yaxşı mütəxəssisləri işə götürə bilərsiniz.',
        'view-experts' => 'Başlamaq üçün klikləyin.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Mağazada aktiv ödəniş şlüzlərini bildirin :shop.',
        'tip-title' => 'Vacib məsləhətlər',
        'tip' => "Mağazanızda portal idarəetmə səhifəsinə keçin və bir neçə dəqiqə ərzində ən azı bir port əlavə edin. Müştəriləriniz onlayn portallar vasitəsilə tez və təhlükəsiz ödəniş etməyi xoşlayırlar.",
        'view-shop-gateways' => 'Mağazamın portal rəhbərliyinə daxil olun.',
        'view-gateways' => 'Daha çox şlüzlərə baxın',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Sifarişlər',
        'sub-title' => 'Bu həftə aldığım sifarişlərin siyahısı.',
        'total_baskets' => 'Ümumi Sifarişlər',
        'total_posBaskets' => 'Ümumi Nağd Sifarişlər',
        'pos-title' => 'POS Mağaza qutusu',
        'chart-label' => 'Sifarişlər tamamlandı (bu sifarişlər mütləq ödənilmir!)',
        'tip-title' => 'Daha çox cəhd etməlisən...',
        'tip' => "Sadə uğur yoxdur.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Prosessinq mərkəzi',
        'sub-title' => 'Bu həftə mağazada nə qədər sifariş emal etdik?',
        'tip-title' => 'Satışınız yox idi!',
        'tip' => "Təəssüf ki, bu həftə heç bir satışınız olmadı. Mağazanıza daha çox müraciət etməlisiniz. Siz daha çox məhsul əlavə edə, daha yaxşı şəkillər seçə və ya məhsullarınız üçün daha yaxşı təsvirlər yaza bilərsiniz. Biznesiniz üçün tam zamanlı bir iş düşünün. Əgər bunu düzgün etsəniz və məyus olmasanız, uğur qazanacaqsınız.",
        'view-process-center' => 'Proses mərkəzinə baxın',
        'return' => [
            'title' => 'Qaytarılmış Sifariş',
            'subtitle' => 'Qaytarılan sifarişləri bildirin.',
            'tip-title' => 'bilirdinizmi ki...',
            'tip' => "Selldone POS ilə istədiyiniz qədər kassa yarada bilərsiniz! Planşetiniz, mobil telefonunuz və ya noutbukunuz olsun, istənilən cihazı mağazanızın satış nöqtəsinə çevirə bilərsiniz. Sadə, tez qurulur və serveriniz üçün tam hazırdır. Bu gün istifadə etməyə başlayın!",
            'view-pos' => 'Onlayn Mağazamın Kassirinə daxil olun'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sessiyalar',
        'sub-title' => 'Mağazama neçə dəfə baş çəkmişəm?',
        'countries-title' => 'Ən çox ziyarət edilən ölkələr hansılardır?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Bir dollar xərcləmədən pul qazanmaq istəyirsiniz?',
        'message' => "Hörmətli :name, siz İdarə Paneli > Demonetizasiya bölməsinə keçib, istinad linki yarada bilərsiniz. Linki dostlarınıza göndərin, Siz Selldone hədiyyə kartları və dostunuzun ödənişlərinin faizini alırsınız. Qeyd edək ki, hədiyyə kartı həm sizə, həm də dostunuza göndəriləcək.",
        'action' => 'Giriş linkimə baxın',
        'mail-clip' => "<b style='color: #C2185B'>Vacib:</b> Əgər e-poçtun uzunluğunu məhdudlaşdıran Gmail kimi e-poçt xidmətlərindən istifadə edirsinizsə, tam hesabatı göstərmək üçün e-poçtun sonunda aşağıdakı seçimi tapın və üzərinə klikləyin:",

        'no-coin-reward' => "<b style='color: #C2185B'>Üzr istəyirik:</b> fəaliyyətiniz pulsuz SEL Coins mükafatı almaq tələbinə cavab vermədi. Növbəti mövsüm üçün daha çox cəhd edin və mağazanızda daha çox satış edin.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Təbrik edirik:</b> Əla iş! Görkəmli performansınıza əsaslanaraq, biz :amount SEL sikkələrini mükafat olaraq hesabınıza köçürdük.",

        'need-buy-license' => "<b>Biznesinizi Səviyyələndirin:</b> Deyəsən, hələ veb saytınız üçün heç bir abunə planını qeydiyyatdan keçirməmisiniz! Hər il ödənilirsə, ayda sadəcə :amount ödəməklə daha çox funksiyanı açmaq üçün indi təkmilləşdirin.",
        'not-afford-message' => "Əgər ödəyə bilmirsinizsə və ya ödənişlə bağlı hər hansı probleminiz varsa, bizə support@selldone.com vasitəsilə məlumat verin.",
        'add-domain' => "<b>Niyə biznesiniz üçün fərdi domeniniz olmasın?</b><br> İndi veb saytınıza bir domen əlavə edin; pulsuzdur!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone a<del> məhsul</del> <span style = 'color: forestgreen'>icma</span> .<br> Peşəkar Satıcı olun!",
        'message' => "Twitter, LinkedIn və sosial şəbəkələrdə Selldone rəsmi səhifələrini izləyin. Bizə hər hansı şərh, sorğu və ya tənqid göndərin və ya Selldone haqqında müzakirələrdə iştirak edin. Biz həm də <b>Sizin</b> yaratdığınız Selldone icmasının bir hissəsiyik."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Yeni Avokado sifarişləri alındı | :shop_title :time',
        'title' => "Son 24 saat ərzində performans hesabatı",
        'message' => "Müştəriləriniz sifarişlərinizin nəzərdən keçirilməsini və qiymət verilməsini gözləyir. Daha çox satış əldə etmək üçün müştərilərinizin istəklərinə ən qısa zamanda cavab verin.",
        'card_title' => "Sifarişlər növbədə",
        'card_subtitle' => ":date-dan bəri",

        'card_payed' => "Ödənişli sifarişlər"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Postunuza :community_title ünvanında cavab verin',
        'title' => ":name, və :count başqalarının yazılarınıza şərh yazdığını.",
        'message' => "Salam :name, yazılarınız diqqət çəkir! Cəmiyyətimizdə şərhlər aldınız. Müzakirələrə qoşulmaq üçün hesabınıza daxil olun və hamının nə dediyinə baxın.",
        'title-simple' => ":name yazınıza şərh verdi!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Mövzunuza :topic_title cavab verin',
        'title' => ":name, və :count başqaları mövzunuza cavab verdi.",
        'message' => "Salam :name, mövzunuz diqqət çəkir! İcmamızda cavablar aldınız. Müzakirələrə qoşulmaq üçün hesabınıza daxil olun və hamının nə dediyinə baxın.",
        'title-simple' => ":name mövzunuza cavab verdi.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Yeni Giriş :name',
        'category' => 'Təhlükəsizlik bildirişləri',
        'title' => "Hesaba daxil olun",
        'message' => "Hörmətli :name, siz Selldone hesabınıza daxil olmusunuz.",   // Login in selldone (seller)
        'message-shop' => "Hörmətli :name, siz :shop_title saytına daxil olmusunuz.",  // Login in shop (buyer)

        'footer' => "Daxil olmamısınızsa, parolunuzu dəyişdirin.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Çıxarma",
        'deposit' => "Depozit",

        'withdraw_subject' => ":account hesabından çıxarın",
        'deposit_subject' => ":account hesabına depozit qoyun",

        'message' => "Pul köçürmələri aşağıdakı spesifikasiyalarla həyata keçirilib.",

        'type' => "Əməliyyat növü",

        'from' => "Mənbə hesabı",
        'to' => "Destination account",

        'desc' => "Əməliyyatın təsviri",
        'action' => "Əməliyyata baxın",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Vacibdir! Qaydaların pozulması| :shop",
        'category' => "Kritik məlumat",
        'title' => "Mağazanız cəzalandırılıb",
        'action' => "Mağazanın idarə panelini açın",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter sizi Selldone-ya qoşulmağa dəvət etdi",
        'title' => ":name, yeni onlayn mağazanızı işə salmağa və ondan pul qazanmağa kömək etmək üçün sizə :amount göndərdi!",
        'message' => "Salam **:receiver_name**,<br><br>Selldone-a xoş gəlmisiniz! Selldone-da siz asanlıqla e-ticarət saytınızı, bloqunuzu, onlayn icmanızı yarada və hətta bir neçə dəqiqə ərzində şəxsən satış üçün onlayn POS sistemi qura bilərsiniz. Bu, biznesinizi daha yaxşı, daha sürətli və asan idarə etmək üçün nəzərdə tutulmuş tam onlayn biznes əməliyyat sistemidir.<br><br><b>:date</b> ilə qeydiyyatdan keçin və başlamaq üçün :amount çeki əldə edin!",
        'accept' => "Dəvəti qəbul edin",
        'owner' => "sahibi",
        'join-date' => "O vaxtdan Selldone-da",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Bərpa linki| :shop",
        'category' => "Mağaza təhlükəsizliyi",
        'title' => "Mağaza bərpa linki <b>:shop_name</b> .",
        'message' => "Mağazanızı bərpa etmək üçün sorğu göndərdiyiniz üçün bu e-məktub sizə göndərilib. Aşağıdakı linkə klikləməklə mağazanızı və ona aid olan bütün məlumatları bərpa edəcəksiniz.",
        'action' => "Mağazanın bərpasını təsdiqləyin",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Selldone biznesiniz üçün nə qədər pul yığdı?',
        'sub-title' => ':start tarixindən :end tarixinə qədər',
        'infrastructure' => [
            'title' => 'İnfrastruktur',
            'subtitle' => 'Serverlər, CDN, Saxlama və digər bulud xidmətləri',
        ],
        'experts' => [
            'title' => 'Ekspertlər və İşçilər',
            'subtitle' => 'Tərtibatçılar, texniki xidmət və dəstək',
        ],
        'total_save' => 'Ümumi qənaət edilmiş pul'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Sizin performansınız',
        'sub-title' => ':start-dan :end-a qədər biznes icmalı',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Qaytarılmış İstifadəçilər',

        'shop_views' => 'Mağaza Baxışları',
        'baskets' => [
            'title' => 'Alış-veriş Səbətləri',
            'subtitle' => 'Yeni alış-veriş arabalarının sayını bildirin',

        ],
        'products' => [
            'title' => 'Məhsullara Baxış',
            'subtitle' => 'Mağazadakı məhsulların növlərinə görə vəziyyəti',
            'value_name' => 'Məhsullar'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Veb sayt səhifəsinin ümumi baxışları',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Yeni sifariş aldınız. Lütfən, satıcı panelinizdə sifariş emalı səhifəsinə keçin.",
        'subject' => "🛍 Yeni Sifariş Alındı | :order_id",
        'your_revenue' => "Sizin Gəliriniz",
    ],
    'vendor-invite' => [
        'title' => 'Satıcı dəvəti',
        'message' => "Siz :shop_name satıcısı olmaq üçün dəvət aldınız. Aşağıdakı düymələrə klikləməklə onu qəbul edə və ya rədd edə bilərsiniz.",
        'subject' => ":shop_name |Satıcımız olmağa dəvət",
        'accept' => "Qəbul et və Satıcı ol",
        'reject' => "Rədd edin",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Komandamıza Qoşulmağa Dəvət',
        'message' => "Siz :shop_name-da :vendor_name-ya qoşulmağa dəvət olundunuz. Aşağıdakı düymələrdən istifadə edərək bu dəvəti qəbul edə və ya rədd edə bilərsiniz.",
        'subject' => ":vendor_name-ya qoşulmağa dəvət|Komanda üzvü ol",
        'accept' => "Qəbul edin və Komandaya Qoşulun",
        'reject' => "Rədd edin",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => ":shop üçün Giriş Kodunuz",
        'header-message' => "Mağaza üçün giriş kodu tələb etdiyiniz üçün bu e-məktubu sizə göndəririk. Lütfən, Aşağıda Birdəfəlik Şifrənizi (OTP) tapın:",
        'footer-message' => "Bu kod 10 dəqiqə etibarlı olacaq. Bu giriş kodunu tələb etməmisinizsə, lütfən, bu e-məktubu iqnor edin."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "E-poçtunuzu doğrulayın| :shop",
        'title' => 'E-poçt Doğrulaması',
        'header-message' => "salam :name,<br> Lütfən, 48 saat ərzində düyməni sıxmaqla və ya aşağıdakı linkdən istifadə etməklə **:email**-in sizin e-poçt ünvanınız olduğunu təsdiqləyin.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Məhsul Yeniləmələri| :shop",
        'title' => "Məhsul Statusunda Yenilik - Son 24 Saat",
        'message' => "Ümid edirəm bu mesaj sizi yaxşı tapacaq. Bu, son 24 saat ərzində platformamızdakı məhsullarınızın vəziyyəti haqqında sizə məlumat vermək üçün qısa bir yeniləmədir.\nBu müddət ərzində bəzi məhsulların statusunda dəyişikliklər olub. Bu dəyişikliklər alışlar, səhm yeniləmələri və ya digər əlaqəli hadisələrlə bağlı ola bilər.\nHər bir məhsul haqqında daha ətraflı məlumat üçün hesabınıza daxil olun və \"Məhsul Status\" bölməsini yoxlayın.",
        'action' => "Satıcı Panelini açın",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Toplu Sifarişlər Qəbul Edilir| :shop | :date",
        'title' => "Toplu Sifariş Bildirişi",
        'message' => "Siz toplu sifarişlər toplusu aldınız. Əlavə məlumat üçün panelinizdə sifarişin işlənməsi səhifəsinə daxil olun. Siz həmçinin 7 gün ərzində etibarlı olan təhlükəsiz link vasitəsilə sifariş siyahısını yükləyə bilərsiniz.<br><br>\n        <b>VACİB:</b> Bu keçid 7 gün ərzində etibarlıdır.<br>\n        Bu keçid dinamikdir, ona görə də hər dəfə kliklədiyiniz zaman bu konkret tarix üçün ən çox yenilənmiş sifarişləri alacaqsınız. <b>Bu o deməkdir ki, əgər sifarişin ödəniş statusu rədd edilibsə, siz artıq yüklənmiş CSV-də həmin sifarişi görməyəcəksiniz və ya sifariş ödənilibsə, o, siyahıda görünəcək.</b><br><br>\n        <ul>\n            <li>CSV :date.</li>-da qorunmuş tarixi olan ödənişli sifarişləri ehtiva edir.\n            <li>Qeyd olunmuş tarix istifadəçinin sifariş səhifəsində ödənişi kliklədiyi tarixdir.</li>\n        </ul>\n        <b>Dublikat sifarişlərin qarşısını almaq üçün göndərməzdən əvvəl həmişə ID Sifarişini yoxlayın.</b>",
        'action' => "Sifariş siyahısını yükləyin",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Sifarişinizdəki bəzi məhsullar qəbul edilmədi və çatdırıla bilməz. Bu əşyalar üçün məbləğ tezliklə kartınıza qaytarılacaq."
    ]

];
