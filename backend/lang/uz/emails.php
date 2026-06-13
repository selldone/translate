<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Ushbu xabar do\'konga yangi xaridorni qabul qiladi.',
        ShopMailTemplateCodes::OrderCheckout => 'Ushbu bildirishnoma xaridor buyurtmani tasdiqlaganida yuboriladi.',
        ShopMailTemplateCodes::OrderPayment => 'Ushbu bildirishnoma mijoz tomonidan muvaffaqiyatli to\'langanligini tasdiqlaydi.',
        ShopMailTemplateCodes::OrderUpdate => 'Bu xabar xaridorga buyurtma holatini yangilash uchun yuboriladi.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Bu xabar sotuvchiga tasdiqlangan buyurtma haqida xabar berish uchun yuboriladi.',
        ShopMailTemplateCodes::PosCheckout => 'Ushbu bildirishnoma xaridor uchun savdo nuqtasi buyurtmasini tasdiqlash uchun yuboriladi.',
        ShopMailTemplateCodes::PosPayment => 'Ushbu bildirishnoma xaridor tomonidan to\'langan savdo nuqtasini tasdiqlaydi.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Ushbu xabar sotuvchiga o\'z savdo nuqtasida qilingan xarid haqida xabar beradi.',
        ShopMailTemplateCodes::ShopContact => 'Ushbu bildirishnoma aloqa shakli yuborilganda yuboriladi.',
        ShopMailTemplateCodes::ShopGiftCard => 'Ushbu bildirishnoma foydalanuvchiga sovg\'a kartasini olganligi haqida xabar beradi.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Ushbu xabar do\'konga yangi sotuvchini tabriklaydi.',
        ShopMailTemplateCodes::ShopVendorInvite => "Ushbu xabar sotuvchini bozoringizga qo'shilishga taklif qilish uchun yuborilgan.",
        ShopMailTemplateCodes::ShopVendorOrder => "Bu xabar sotuvchiga buyurtma pulli yoki yetkazib berishda naqd pul (COD) holatida olinganda yuboriladi.",
        ShopMailTemplateCodes::ShopVendorProducts => "Sotuvchilarga o'z mahsulotlarining holati to'g'risida yangilash uchun har kuni yuboriladi.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Bu xabar sotuvchini bozoringizga qo'shilishga taklif qilish uchun yuborilgan.",

        ShopMailTemplateCodes::UserLogin => "Xavfsizlik maqsadida foydalanuvchini login tafsilotlari, jumladan IP manzili, sanasi va qurilmasi bilan xabardor qiling.",
        ShopMailTemplateCodes::LoginCode => "Foydalanuvchilar do'konga kirishlari uchun bir martalik parol kodini yuboring.",

        ShopMailTemplateCodes::EmailVerifyLink => "Foydalanuvchining elektron pochta manzilini tekshirish uchun havolani yuboring. Ushbu elektron pochta foydalanuvchi SMS tomonidan ro'yxatdan o'tganda va elektron pochta manzilini kiritganda yuboriladi. Foydalanuvchi to'g'ridan-to'g'ri ijtimoiy login yoki elektron pochta orqali ro'yxatdan o'tganda yuborilmaydi.",

        ShopMailTemplateCodes::EmailBulkOrder => "Qabul qilingan va to'langan buyurtmalar ro'yxatini ma'lum bir kun uchun ommaviy ravishda yuboring."


    ,

    ],


    'global' => [
        'greetings' => 'Salom, :name!',
        'end-statement' => 'Yordam jamoasi',

        'receiver_name' => 'Salom :user_name',
        'footer-help' => "Yordam kerakmi? [support@selldone.com](mailto:support@selldone.com) orqali soʻrang yoki [yordam markaziga](https://selldone.com/community) tashrif buyuring.",
        'selldone-team' => 'Selldone jamoasi',
        'footer-shop' => "Agar biror narsa bo'yicha yordam kerak bo'lsa, iltimos, bizga elektron pochta xabarini yuborishdan tortinmang: :shop_mail",
        'accept' => "Qabul qiling",
        'reject' => "Rad etish",
        'verify' => "tekshirish",
        'title' => "Sarlavha",
        'value' => "Qiymat",
        'description' => "Tavsif",
        'shop' => "Do'kon",
        'shop-info' => "Do'kon ma'lumotlari",
        'user' => "Foydalanuvchi",
        'user-info' => "Hisob ma'lumotlari",
        'license' => "Litsenziya",
        'status' => "Holat",
        'start' => "Boshlash",
        'end' => "Oxiri",
        'renewal' => "Yangilash",
        'view' => "Ko'rinish",

        'balance' => "Balans",
        'card_number' => "Karta raqami",
        'cvv' => "Cvv",
        'expire_date' => "Yaroqlilik muddati",

        'Dashboard' => "Boshqaruv paneli",
        'order' => "buyurtma",
        'view_order' => "Buyurtmani ko'rish",
        'pay_now' => "Pay now",

        'official_selldone' => "RASMIY SOTILGAN",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Valyuta",
        'free-balance' => "Erkin balans",
        'locked-balance' => "Bloklangan balans",
        'bot' => "Bot",
        'requests' => "So'rovlar",
        'baskets' => 'Aravalar',
        'physical' => "Jismoniy",
        'virtual' => "Virtual",
        'file' => "Fayl",
        'service' => "Xizmat",
        'fulfillment' => "Bajarish",
        'open' => "Ochiq",
        'reserved' => "Zaxiralangan",
        'canceled' => "Bekor qilingan",
        'payed' => "To'langan",
        'cod' => "COD",
        'orders-count' => 'Buyurtmalar',
        'payments-count' => 'To\'lovlar',
        'confirms-count' => 'Tasdiqlaydi',
        'sends-count' => 'Yuboradi',
        'delivers-count' => 'Yetkazib beradi',
        'count' => 'Hisoblash',
        'transactions-count' => 'Tranzaksiyalar soni',
        'success-transactions' => 'Muvaffaqiyatli operatsiyalar',
        'total-amount' => 'Umumiy hisob',
        'amount' => 'Miqdori',
        'wage' => 'Ish haqi',
        'debug' => 'Nosozliklarni tuzatish',
        'pos' => 'POS',
        'live' => 'Jonli',
        'CheckQueue' => 'Navbatni tekshirish',
        'OrderConfirm' => 'Buyurtmani tasdiqlash',
        'PreparingOrder' => 'Buyurtma tayyorlanmoqda',
        'SentOrder' => 'Buyurtma yuborildi',
        'ToCustomer' => 'Xaridorga yetkazib beriladi',
        'Pending' => 'Kutilmoqda',
        'Accepted' => 'Qabul qilingan',
        'Rejected' => 'Rad etilgan',
        'pc' => 'PC',
        'tablet' => 'Planshet',
        'phone' => 'Telefon',
        'total' => 'Jami',
        'view-detail' => 'Tafsilotni ko\'rish',
        'empty' => 'Bo\'sh',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Javob bering',
        'reactions' => 'Reaksiyalar',
        'Comments' => 'Fikrlar',
        'last-comment' => 'Oxirgi izoh',
        'response-to' => 'Javob',
        'posts' => 'Xabarlar',
        'post' => 'Post',

        'name' => 'Ism',
        'email' => 'Elektron pochta',
        'type' => 'turi',
        'device' => 'Qurilma',
        'platform' => 'Platforma',
        'browser' => 'Brauzer',
        'time' => 'Vaqt',
        'Wallet' => 'Hamyon',
        'date' => 'Sana',

        'account' => 'Hisob',
        'transaction' => 'Tranzaksiya',
        'fee' => 'Haq',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Turkum',
        'password' => 'Parol',
        'verify-login' => "Tasdiqlash va kirish",
        'url' => 'URL',
        'avocado' => 'Avokado',
        'hyper' => 'Giper',
        'buy-now' => "Hozir xarid qilish",
        'add-domain' => "Add Domain",
        'views' => 'Koʻrishlar',


        'country' => 'Mamlakat',
        'address' => 'manzil',
        'postal' => 'Pochta kodi',
        'building_no' => 'Bino №',
        'building_unit' => 'Birlik #',
        'message' => 'Xabar',


        'customer' => 'Mijoz',
        'cart-items' => 'Savat buyumlari',
        'payment' => 'To\'lov',
        'receiver' => 'Qabul qiluvchi',
        'virtual-items' => 'Virtual elementlar',
        'no-payment' => 'To\'lov yo\'q!',

        'enable' => 'Yoqish',
        'access' => 'Kirish',
        'bank' => 'Bank ma\'lumotlari',

        'vendor' => 'Sotuvchi',

        'view_content' => "Toʻliq tarkibni koʻrish",
        'files' => 'Fayllar',
        'download' => 'Yuklab olish',
        'file_name' => 'Fayl nomi',
        'file_size' => 'Hajmi',

        'subscription' => 'Obuna',
        'products' => 'Mahsulotlar',
        'vendor_products' => 'Sotuvchi mahsulotlari',

        'pickup' => 'Olib ketish',

        'minutes' => 'Daqiqalar',
        'hours' => 'Soat',

        'refund' => 'To\'lovni qaytarish',
        'recipient_address' => 'Qabul qiluvchining manzili',
        'signature' => 'Imzo',
        'blockchain' => 'Blokcheyn',
        'details' => 'Tafsilotlar',


    

        'Shop' => 'Do\'kon',
        'dashboard' => 'asboblar paneli',
        'comments' => 'Izohlar',
        'wallet' => 'hamyon',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Ishlash hisoboti, Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Mavsumiy hisobot, Selldone'
        ],
        'Onboarding' => [
            'id' => 'salom',
            'name' => 'Qabul qiling, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => ':name-ni qo\'llab-quvvatlash'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Tasdiqlang, Selldone'
        ],
        'Welcome' => [
            'id' => 'salom',
            'name' => 'Jamiyat, Selldone'
        ],
        'NewShop' => [
            'id' => 'savdogarlar',
            'name' => 'Qabul qiling, Selldone'
        ],
        'Approve' => [
            'id' => 'ma\'qullash',
            'name' => 'Qabul qiling, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Buyurtmalarni boshqarish :name'
        ],

        'Recovery' => [
            'id' => 'tiklanish',
            'name' => 'Selldone tiklash jamoasi'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Kutilmoqda ⌛',
        'PAYED' => 'To\'langan ✅',
        'CANCELED' => 'Bekor qilingan ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administrator',
            'OFFICER' => 'Ofitser va nazoratchi',
            'AUDITING' => 'Audit menejeri',
            'EMPLOYEE' => 'Xodim',
            'PRODUCT' => 'Mahsulotlar menejeri',
            'CONTENT' => 'Kontent menejeri',
            'MARKETING' => 'Marketing menejeri',
            'VIEWER' => 'Tomoshabin',

        ],
        'subject' => ":inviter sizni :level sifatida taklif qildi| :shop",
        'category' => "Xodimlarni taklif qilish",
        'title' => "Siz <b>:shop_name</b> ga <b>:level</b> sifatida taklif qilindingiz.",
        'message' => "Siz <b>:shop_title</b> jamoasi bilan biznes sohasida hamkorlik qilish taklifini oldingiz. Sizda bu taklifni qabul qilish yoki rad etish imkoniyati mavjud. Qabul qilishni tanlasangiz, qaroringizni tasdiqlash uchun Selldone xizmatiga kiring. Tasdiqlangandan so'ng siz do'konni boshqarish bo'limiga kirishingiz mumkin.",

    ],

    'welcome-email' => [
        'subject' => "👋 Xush kelibsiz :name, Selldone bilan boshlaymiz!",
        'category' => 'CONGRATULATION',
        'title' => "Selldone ga xush kelibsiz",
        'message' => "Selldoneni tanlaganingiz uchun tashakkur, endi siz global sotuvchilarni mijozlarga, mahalliy biznesni korxonaga, jismoniy shaxsni korporatsiyaga bog‘laydigan Selldone hamjamiyatining bir qismisiz! Barcha master va pro vositalari siz uchun **bepul** va **cheksiz** taqdim etilgan. Siz harakat qiling, biz eshiklarni ochamiz, shunchaki bajaring!",

        'index' => ":step qadam.",

        'step-domain' => [
            'title' => 'Shaxsiy domeningizni qo\'shing',
            'message' => "Boshlash uchun Sozlamalar > Domenlar sozlamalari ostidagi do‘kon boshqaruv panelida shaxsiy domeningizni bepul qo‘shing.",
            'action' => 'Mening domenlarimni boshqarish',
        ],
        'step-landing' => [
            'title' => 'Bosh sahifangizni moslashtiring',
            'message' => "Boshqaruv paneli > Sahifalar bo‘limiga o‘tish orqali bosh sahifangizni shaxsiylashtiring. Ochilish sahifasini tanlang yoki yangisini yarating. Bu oson va intuitiv, va siz darhol u ustida ishlashni boshlashingiz mumkin.",
            'action' => 'Mening ochilish sahifamni moslashtiring',
        ],
        'step-payment' => [
            'title' => 'To\'lov usullarini sozlash',
            'message' => "To'lovlarni to'g'ridan-to'g'ri bank hisobingizga qabul qilishni boshlang. Stripe, PayPal va boshqalar kabi toʻlov provayderlaringizni ulash uchun asboblar paneli > Buxgalteriya > Gateway-ga oʻting.",
            'action' => 'To\'lov usullarini qo\'shing',
        ],
        'step-products' => [
            'title' => 'Mahsulotlaringizni qo\'shing',
            'message' => "Asboblar paneli > Mahsulotlar bo‘limida mahsulotlar va toifalarni osongina qo‘shing. Bu xuddi kompyuteringizdagi fayl va papkalarni boshqarishga o‘xshaydi – sudrab olib tashlash to‘liq tayyor. Bundan tashqari, Excel yordamida mahsulotlarni ommaviy import qilishingiz mumkin. Ishni boshlashingizga yordam beradigan namunaviy shablon mavjud.",
            'action' => 'Mahsulotlarimni boshqarish',
        ],
        'step-shipping' => [
            'title' => 'Yuk tashish usullarini sozlash',
            'message' => "Mijozlardan yetkazib berish uchun haq olish uchun asboblar paneli > Logistika > Yetkazib berish bo‘limida yetkazib berish usullarini belgilang. Turli joylar uchun turli narxlarni va qo'llab-quvvatlashni o'rnatishingiz mumkin. Boshqaruv paneli > Logistika > Omborda omboringizning kelib chiqishini belgilashni unutmang.",
            'action' => 'Yuk tashish usullarini boshqaring',
        ],
    

        'seller' => [
            'title' => 'Siz sotuvchimisiz?',
            'message' => 'Sotishni boshlash uchun quyidagi havola orqali Selldone-ga asboblar panelini kiriting va birinchi doʻkoningizni mutlaqo bepul yarating. Bu bir necha daqiqa davom etadi va sizda o\'z do\'koningiz va onlayn saytingiz bo\'ladi. Keyin biz sizni keyingi bosqichlarga yo\'naltiramiz va to\'lov shlyuzini olamiz.',
            'action' => 'Mening boshqaruv panelimga kiring',
        ],
        'buyer' => [
            'title' => 'Men xaridorman',
            'message' => 'Tabriklaymiz. Selldone a\'zosi bo\'lganingizdan so\'ng, siz onlayn-do\'konlarda a\'zolik va autentifikatsiya bilan bog\'liq barcha qiyinchiliklardan xalos bo\'lasiz. Selldone platformasidan foydalanadigan har qanday doʻkon va saytdan foyda olish uchun siz bir marta bosish orqali tizimga kirishingiz va xaridingizni sodda, tez va xavfsiz qilishingiz mumkin.',
        ],
    ],


    'charge-account' => [
        'category' => 'Hamyon > Hisob > To‘lov',
        'title' => "Muvaffaqiyat to'lovi",
        'message' => "<b>:account_number</b> hisobingizdan <b>:amount</b> to‘lovi muvaffaqiyatli olindi.",
        'account' => 'Hisob',
        'charge' => 'Zaryadlash',
        'balance' => 'Balans',
        'footer' => "Biznesni oson, erishish mumkin va butun dunyo bo'ylab hamma uchun ochiq qilib qo'ying."
    ],

    'verify-email' => [
        'subject' => "🙌 Selldone-ga ro'yxatdan o'tishni yakunlang! Havolani tasdiqlang.",
        'category' => "SIZ BIR QADAM UZOQDASIZ",
        'title' => "Elektron pochta manzilingizni tasdiqlang",
        'message' => "Salom :name,<br><br>Selldoneni tanlaganingiz uchun tashakkur!<br><br><b>:email</b> sizning toʻgʻri elektron pochta manzilingiz ekanligini tasdiqlash uchun yoki quyidagi havolani bosing. Bu tekshirishni yakunlash uchun 48 soatingiz bor.",
        'footer' => "Tasdiqlash tugmasini bosishda muammoga duch kelsangiz, quyidagi URL manzilini veb-brauzeringizga nusxalang va joylashtiring: :activation_url",
        'next-step' => "Keyinchalik, sizga maxsus domenni qo'shish, to'lovlarni o'rnatish, mahsulot qo'shish va birinchi buyurtmani olishni osonlashtirish uchun sizga bir nechta foydali materiallar va bosqichma-bosqich qo'llanma yuboramiz.",

    ],
    'verify-email-code' => [
        'subject' => ":name uchun tasdiqlash kodi",
        'category' => "SECURITY",
        'title' => "Elektron pochta tasdiqlash kodi",
        'message' => "Salom :name, <br><br><b>:email</b> sizning toʻgʻri elektron pochta manzilingiz ekanligini tasdiqlash uchun keyingi <b>10 daqiqa</b> ichida quyidagi kodni kiriting:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Do'koningiz tayyor| :name",
        'category' => "SIZ BIR QADAM UZOQDASIZ",
        'title' => "Sozlash tugallandi",
        'account_title' => "Sizning hisobingiz",
        'account_msg' => "Ushbu ma'lumot bilan hisobingizni tasdiqlang va tizimga kiring.",
        'shop_msg' => "Selldone biznes operatsion tizimidagi hisob ma'lumotlari.",

    ],

    'reset2fa' => [
        'category' => "XAVFSIZLIK RASMIY XABAR",
        'title' => "2 bosqichli kirishni o'chirishni so'rang",
        'message' => "**:name** hisobi uchun ikki faktorli autentifikatsiyani **:email** e-pochta orqali qayta o‘rnatish bo‘yicha so‘rov olganimiz uchun sizga ushbu xat yuborildi. <br><br>Hisobingiz uchun quyidagi ma’lumotlarni topdik:",
        'footer' => "Agar siz parolni tiklashni so'ramagan bo'lsangiz, boshqa hech qanday harakat talab etilmaydi.",
        'action' => 'Ikki bosqichli kirishni o\'chirib qo\'ying',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Sizning do'koningiz hozir tayyor!",
        'category' => "DUNYODA YANGI ONLAYNDO'KON TUG'ILGAN",
        'title' => "Tabriklaymiz, :name!",
        'message' => "<b>Tabriklaymiz, :name! Sizning yangi onlayn biznesingiz endi ishlamoqda!</b> Sizni Selldoners hamjamiyatiga qutlashdan xursandmiz. Siz muvaffaqiyat sari birinchi qadamni qo‘ydingiz va biz sizga har qadamda yordam berish uchun shu yerdamiz.<br>Do‘koningiz tayyor, keling, mijozlaringizdan to‘g‘ridan-to‘g‘ri to‘lovlarni qabul qilib, imperiyangizni rivojlantirishga sozlanganingizga ishonch hosil qilaylik. Agar sizga yordam kerak bo‘lsa, biz bir xabarcha uzoqdamiz — qo‘llab-quvvatlash guruhimiz doim siz uchun shu yerda.<br><br><b>Keyingi muhim qadamlar:</b> Boshlash uchun to‘lovlarni qabul qilish va operatsiyalarni muammosiz bajarishga sozlanganligiga ishonch hosil qiling. Do‘koningiz muammosiz ishlashi uchun har bir bosqichda sizga yo‘l-yo‘riq ko‘rsatamiz.",
        'pdf-book' => "Ilova qilingan qo'llanmani o'tkazib yubormang: Biznesingizni o'yin kabi qiling",

        'account' => [
            'title' => '1-qadam: Selldone hamyonida hisob yarating',
            'message' => "Boshlash uchun Selldone hamyoningizda hisob yarating. Bu yerda toʻlovlaringiz yechib olinadi, shuningdek, doʻkoningiz muammosiz ishlashi uchun toʻldirishingiz ham shu yerda. Agar balansingiz salbiy bo'lib qolsa, tashvishlanmang! Do‘koningiz uzluksiz ishlashda davom etadi.",
            'action' => 'Hamyonga kiring',
        ],

        'shop-account' => [
            'title' => '2-qadam: hisobni do\'konga ulang',
            'message' => "Keyin, hamyon hisobingizni do'koningizga ulang. <b>Store > Buxgalteriya > Invoice</b>-ga o'ting va hamyoningizni ulang. Bu barcha mijozlar toʻlovlari toʻgʻridan-toʻgʻri bank hisobingizga oʻtkazilishini taʼminlaydi — Selldone sizning daromadingizdan hech qanday miqdorni ushlab qolmaydi.",
            'action' => 'Hisob-faktura panelini saqlash',
        ],

        'gateway' => [
            'title' => '3-qadam: Onlayn to\'lov shlyuzini ulang',
            'message' => "Keling, onlayn to'lov shlyuzingizni sozlaylik. <b>Store > Buxgalteriya > Port</b>-ga o'ting va <b>Yangi port</b> qo'shish-ni bosing. Valyutangizni tanlang va mavjud to'lov shlyuzlari ro'yxatini ko'rasiz. Shlyuzni ulash tez va oson, lekin sizga yordam kerak bo'lsa, Selldone qo'llanmalarini tekshiring yoki biz bilan bog'laning.",
            'action' => 'Do\'konga portal qo\'shing',
        ],

        'domain' => [
            'title' => 'Oxirgi qadam: ajratilgan domenni ulash',
            'message' => "Endi shaxsiy domeningizni do'koningizga ulang. Bu mijozlarga mahsulot yoki xizmatlaringizni sotib olish va to'g'ridan-to'g'ri sizga to'lovlarni amalga oshirish imkonini beradi.",
            'action' => 'Cheksiz sovg\'a kartalarini joriy qilish va olish',
        ],
    ],


    'basket-list' => [
        'item' => "element",
        'count' => "Hisoblash",
        'price' => "narx",
        'discount-code' => "Chegirma kodi",
        'customer-club' => 'Mijozlar klubi',
        'shipping' => "yuk tashish; yetkazib berish",
        'total' => "Jami",
        'offer' => "Taklif",
        'coupon' => "Kupon",
        'lottery' => "Mukofot",
        'tax' => "Soliq",
        'tax_included' => "Narxga kiritilgan",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Usul',
        'amount' => 'Miqdori',
        'giftcard' => 'Gift card',
        'payment' => 'To\'lov',
    ],


    'shop-subscription-email' => [
        'category' => "Obuna yangilanishi",
        'title' => "Do'kon litsenziyasi: :shop_title",
        'title-reserved' => "Zaxira litsenziyasi: :shop_title",
        'title-active' => "Faol litsenziya: :shop_title",
        'title-finished' => "Yakunlangan litsenziya: :shop_title",
        'title-cancel' => "Litsenziyani bekor qilish: :shop_title",
        'message' => "Sizning do'kon litsenziya rejangiz yangilandi,",
        'RESERVED' => "⚡ Obuna rejangiz **zabonga qo‘yilgan**.",
        'ACTIVE' => "Sizning obuna rejangiz **faollashtirildi**.",
        'FINISHED' => "🚧 Obuna rejangiz **tugallandi**.",
        'CANCEL' => "⛔ Sizning obuna rejangiz **bekor qilindi**.",
    ],

    'support' => [
        'subject' => "Qo'llab-quvvatlash markazi|:name javob berdi",
        'category' => "Qo'llab-quvvatlash markazi",
        'title' => "Siz javob oldingiz",
        'action' => "Do'kon admini ochish",
    ],

    'shop-customer-join' => [
        'subject' => "Qo‘shiling:shop_title",
        'category' => "Yangi mijozlar bayrami",
        'title' => "Sizning a'zoligingizdan xursandmiz",
        'action' => "Hozir tashrif buyuring",
    ],

    'shop-vendor-join' => [
        'subject' => "Sotuvchini ishga tushirish | :shop_title",
        'category' => "Yangi sotuvchi bayrami",
        'title' => "Sizning a'zoligingizdan xursandmiz",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Sovg'a kartasi :shop_title",
        'category' => "Yangi karta qo'shing",
        'title' => "Tabriklaymiz, siz sovg'a kartasini oldingiz",
        'action' => "Hozir xarid qiling",
        'message' => "Siz :balance :currency miqdoridagi sovg‘a kartasini oldingiz. Siz ushbu sovg'a kartasi bilan do'konimizdan xarid qilishingiz mumkin bo'ladi.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Qo'llab-quvvatlash markazi| :shop",
        'category' => "qo'llab-quvvatlash",
        'title' => "Siz javob oldingiz",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Buyurtmani tasdiqlash|:order_id buyurtma qiling",
        'title' => "buyurtma",
        'message' => "Siz bizning do'konimizga buyurtma berdingiz. Buyurtmangizni oldik va to‘lov tasdiqlangandan keyin sizga yana elektron pochta xabarini yuboramiz."
    ,

        'payments' => 'To\'lovlar',
    ],

    'order-payment' => [
        'subject' => "🛍️ To'lovni tasdiqlash|:order_id buyurtma qiling",
        'title' => "To'lov topshirig'i",
        'message' => "Toʻlovingiz tugallandi,<br> Buyurtmani oldik. Buyurtma jo'natilganda sizga yana elektron pochta xabarini yuboramiz.",
    

        'payments' => 'To\'lovlar',
    ],

    'order-update' => [
        'subject' => "🛍️ Buyurtma holatini yangilash|:order_id buyurtma qiling",
        'title' => "Buyurtma holatini yangilash",
        'message' => "Buyurtmangiz yangilandi. Hisobingizda ushbu buyurtmaning so'nggi holatini tekshirishingiz mumkin.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Buyurtmangiz qayta ishlash uchun navbatda turibdi. Tayyorlanayotganda sizga xabar beramiz.",
                'OrderConfirm' => "Buyurtmangiz tasdiqlandi va tayyorgarlik boshlandi.",
                'PreparingOrder' => "Buyurtmangiz tayyorlanmoqda va tez orada jo'natiladi.",
                'SentOrder' => "Buyurtmangiz yuborildi. Siz uni tez orada olasiz.",
                'ToCustomer' => "Buyurtmangiz yetkazib berildi. Bu sizga yoqadi degan umiddamiz!",

                'PreparingOrder-PICKUP' => "Buyurtmangiz tayyorlanmoqda. U olib ketishga tayyor boʻlganda bildirishnoma olasiz.",
                'SentOrder-PICKUP' => "Buyurtmangiz olib ketishga tayyor. Iltimos, uni yig'ish uchun do'konga keling.",
                'ToCustomer-PICKUP' => "Buyurtmangiz qabul qilindi. Bu sizga yoqadi degan umiddamiz!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Buyurtmangiz qayta ishlash uchun navbatda turibdi. U tayyor bo'lganda sizga xabar beramiz.",
                'OrderConfirm' => "Buyurtmangiz tasdiqlandi va tayyorgarlik davom etmoqda.",
                'PreparingOrder' => "Buyurtmangiz tayyorlanmoqda va tez orada sizga yuboriladi.",
                'ToCustomer' => "Virtual buyurtmangiz hisobingizga yetkazildi. Rahmat!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Xizmat soʻrovingiz navbatda turibdi. Boshlaganimizda sizga xabar beramiz.",
                'OrderConfirm' => "Xizmatingiz tasdiqlandi va biz boshlashga tayyorlanmoqdamiz.",
                'PreparingOrder' => "Biz sizning xizmatingizni tayyorlayapmiz va u tugaganidan keyin sizga xabar beramiz.",
                'ToCustomer' => "Xizmatingiz tugallandi. Bizni tanlaganingiz uchun tashakkur!"
            ],
            'FILE' => [
                'PreparingOrder' => "Faylingiz tayyorlanmoqda va tez orada taqdim etiladi.",
                'ToCustomer' => "Faylingiz tayyor va yetkazib berildi. Endi uni yuklab olishingiz mumkin."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Obuna buyurtmangiz navbatda turibdi. Qayta ishlash boshlanganda sizga xabar beramiz.",
                'OrderConfirm' => "Obunangiz tasdiqlandi va sozlanmoqda.",
                'PreparingOrder' => "Biz obunangizni tayyorlayapmiz va u tez orada boshlanadi.",
                'SentOrder' => "Obunangiz faollashtirildi. Siz doimiy yangilanishlarni olasiz.",
                'ToCustomer' => "Sizning obuna xizmatingiz muvaffaqiyatli faollashtirildi."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Tabriklaymiz :name | Yangi vaucher: :title',
        'category' => "TABRIKLAYMAN, YANGI VUCHER",
        'message' => "Hey :name,<br><br>Siz bizdan sovg'a sifatida yangi vaucher oldingiz! Selldoneni doʻstlaringiz va tanishlaringiz bilan tanishtirib, yanada koʻproq vaucherlarga ega boʻlishingiz mumkin. Ushbu vaucher **:price :currency**.<br><br>Siz birinchi qadamni tashladingiz va biz sizga vaucheringiz bilan yangi funksiyalarni ochishga yordam berish uchun shu yerdamiz! Iltimos, **:email** bilan tizimga kiring va doʻkon **Boshqarish paneli** > **Sozlamalar** > **Litsenziya**. <br><br>Tabriklaymiz!",
        'action' => "Mening boshqaruv panelim",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Tabriklaymiz, aziz :name | Siz sovg\'a oldingiz',
        'category' => "Sovg'a olish to'g'risida e'lon",
        'title' => "Siz uchun sovg'alar",
        'message' => "Salom :name, sizga Selldonedan maxsus sovg'a olganingizdan xursandmiz! 🎉 Siz faol bo'lish, do'koningizni kengaytirish va Selldone bo'yicha tajribangizni oshirish orqali ko'proq sovg'alarga ega bo'lishingiz mumkin. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to do'koningiz litsenziyasini yangilang va onlayn biznesingizni rivojlantirish uchun yanada kuchli vositalarni oching!",
        'action' => "Sovg'alar",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Yangi Buyurtma olindi| :order_id",
        'title' => "New Order",
        'message' => "Siz yangi buyurtma oldingiz. Iltimos, do'koningizdagi buyurtmani qayta ishlash sahifasiga o'ting.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'To\'ldirilgan ma\'lumotlaringiz',
        'output-form-title' => 'Sotib olingan mahsulot haqida ma\'lumot',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Haftalik hisobot :time',
        'title' => 'Haftalik do\'kon faoliyati haqida hisobot',
        'message' => "Bu sizning doʻkoningizning <b>:start</b> dan <b>:end</b> gacha boʻlgan haftalik hisoboti. Ushbu hisobot biznesingizni yaxshilash bo'yicha maslahatlarni o'z ichiga oladi, shuningdek, siz onlayn-do'koningiz holatini va oxirgi buyurtmalarni tekshirishingiz mumkin. Umid qilamanki, sizda yaxshi kun va hafta bor."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Oxirgi uch oydagi :amount tejash hisoboti| :shop_title',
        'title' => 'Sizning biznes faolligingiz, mukofotlaringiz va moliyaviy tejashingiz haqida mavsumiy hisobot',
        'message' => "Bu sizning <b>:start</b>dan <b>:end</b>gacha bo'lgan <b>:shop_title</b> mavsumiy hisobotingiz."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Ulangan hisoblar',
        'sub-title' => 'Doʻkonimga ulangan hamyon hisoblarining oxirgi holati qanday?',
        'view-wallet' => 'Hamyonni ko\'rish',
        'tip-title' => 'Muhim maslahatlar',
        'tip' => "Bepul Selldone hamyonini o'rnating va uni do'koningizga ulang. Balansingiz salbiy bo'lsa ham, mijozlaringiz hech qanday muammosiz xarid qilishlari va to'lashlari mumkin. Xavotir olmang, doʻkoningizning ishlashi va maʼlumotlari hech qanday uzilishlarsiz 1 oygacha muammosiz davom etadi.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Hisobga ulaning'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Oʻrnatilgan ilovalar',
        'sub-title' => 'Bu hafta doʻkoningizga oʻrnatgan ilovalar roʻyxati.',
        'tip' => "Doʻkoningiz uchun koʻproq ilovalar topmoqchimisiz?",
        'view-app-store' => 'Selldone ilovalar doʻkoniga tashrif buyuring.',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Sizning do\'kon botlaringiz',
        'sub-title' => 'Mening do\'konimdagi faol savdo botlari.',
        'tip-title' => 'Bot sotuvi',
        'tip' => "Selldone sizga avtomatik savdo botlarini taqdim etdi. Siz qilishingiz kerak bo'lgan yagona narsa - Qo'shimchalar> Bots paneliga o'ting va do'kon botlarini faollashtiring. Tegishli xizmat mamlakatingizda mavjud bo'lishi kerakligini unutmang.",
        'view-bots' => 'Botlarni boshqaring',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Mijozlar bilan aloqa',
        'sub-title' => 'Bu hafta mijozlarim bilan qancha aloqada bo\'ldim?',
        'faqs' => 'tez-tez so\'raladigan savollar',
        'tickets' => 'Mijoz chiptalari',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Foydalanuvchilar holati',
        'sub-title' => ':start dan :end gacha bo\'lgan faoliyat',
        'users' => [
            'title' => 'Xaridorlar',
            'subtitle' => 'Ro\'yxatdan o\'tish foydalanuvchilari',
        ],
        'views' => [
            'title' => 'Tashriflar',
            'subtitle' => 'Siz do\'konga necha marta tashrif buyurdingiz',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Qaytgan foydalanuvchilar',

        'shop_views' => 'Doʻkon koʻrinishlari',
        'baskets' => [
            'title' => 'Savatga aravalari',
            'subtitle' => 'Yangi xarid qilish aravalari soni haqida xabar bering',
        ],
        'products' => [
            'title' => 'Mahsulotlar haqida umumiy ma\'lumot',
            'subtitle' => 'Turlari bo\'yicha do\'kondagi mahsulotlarning holati',
            'value_name' => 'Mahsulotlar'
        ],
        'products_count' => 'Mahsulot turlari',
        'views_count' => 'Ko\'rishlar soni',
        'sell_count' => 'Sotish soni',
        'send_count' => 'Yetkazib berish miqdori',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Yetkazib berish',
        'sub-title' => 'Drop Shipping Selldone-ning yirik sotuvchilari uchun panel.',
        'total_fulfillments' => 'Qabul qilingan jami buyurtmalar',
        'ds_count' => 'Qabul qilingan Buyurtmalar',
        'statistics_title' => 'Qabul qilingan buyurtmalar haqida xabar bering',
        'ds_cancels' => 'Interfeys sotuvchisi tomonidan bekor qilish',
        'ds_rejects' => 'Siz tomonidan bekor qiling',
        'tip' => "Siz tovarlarning asosiy sotuvchisimisiz? Sizning mahsulot omboringiz, zavodingiz yoki distribyutoringiz bormi? Mahsulotingizni keng miqyosda sotish uchun Selldone Drop Shipping xizmatida mahsulotingizni boshqa sotuvchilarga taklif qilishingiz mumkin. Sizga yo'l-yo'riq ko'rsatish uchun support@selldone.com elektron pochta manziliga yuboring.",
        'view-drop-shipping-panel' => 'Ulgurji panelga kiring',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Valyuta kurslari',
        'sub-title' => 'Do\'koningizdagi so\'nggi valyuta konvertatsiya stavkalari ro\'yxati.',
        'from' => 'Manba valyutasi',
        'to' => 'Belgilangan valyuta',
        'rate' => 'Konvertatsiya darajasi',
        'view-exchange-panel' => 'Valyuta kurslarini boshqarish',
    

        'vew-exchange-panel' => 'valyuta kursini boshqarish paneli',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Ekspert shartnomalari',
        'sub-title' => 'Mening do\'konimda qanday mutaxassislar ishlaydi?',
        'cost' => 'Shartnoma miqdori',
        'duration' => 'Davomiyligi',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Sana Bekor qilish',
        'end_at' => 'Yetkazib berish sanasi',
        'tip' => 'Biznesingizni rivojlantirishga yordam berish uchun Selldone dan eng yaxshi mutaxassislarni yollang.',
        'view-experts' => 'Boshlash uchun bosing.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Do\'konda faol to\'lov shlyuzlari haqida xabar bering :shop.',
        'tip-title' => 'Muhim maslahatlar',
        'tip' => "Do'koningizdagi portal boshqaruv sahifasiga o'ting va bir necha daqiqada kamida bitta port qo'shing. Sizning mijozlaringiz onlayn portallar orqali tez va xavfsiz to'lashni yaxshi ko'radilar.",
        'view-shop-gateways' => 'Mening do\'konim portali boshqaruviga kiring.',
        'view-gateways' => 'Koʻproq shlyuzlarni koʻring',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Buyurtmalar',
        'sub-title' => 'Bu haftada olgan buyurtmalar ro\'yxati.',
        'total_baskets' => 'Jami buyurtmalar',
        'total_posBaskets' => 'Jami naqd pul buyurtmalari',
        'pos-title' => 'POS do\'kon qutisi',
        'chart-label' => 'Buyurtmalar bajarildi (bu buyurtmalar toʻlanishi shart emas!)',
        'tip-title' => 'Siz ko\'proq harakat qilishingiz kerak ...',
        'tip' => "Oddiy muvaffaqiyat yo'q.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Protsessing markazi',
        'sub-title' => 'Bu hafta do\'konda qancha buyurtmani qayta ishladik?',
        'tip-title' => 'Sizda sotuv yo\'q edi!',
        'tip' => "Afsuski, bu hafta sizda hech qanday savdo bo'lmadi. Do'koningizga ko'proq kirishingiz kerak. Siz ko'proq mahsulotlar qo'shishingiz, yaxshiroq tasvirlarni tanlashingiz yoki mahsulotlaringiz uchun yaxshiroq tavsiflarni yozishingiz mumkin. Sizning biznesingiz uchun to'liq vaqtli ishni ko'rib chiqing. Agar siz buni to'g'ri qilsangiz va xafa bo'lmasangiz, muvaffaqiyatga erishasiz.",
        'view-process-center' => 'Jarayon markazini ko\'rish',
        'return' => [
            'title' => 'Qaytarilgan buyurtma',
            'subtitle' => 'Qaytarilgan buyurtmalar haqida xabar bering.',
            'tip-title' => 'Siz buni bilasizmi ...',
            'tip' => "Selldone POS bilan qancha kerak bo'lsa, shuncha kassa apparatlarini yaratishingiz mumkin! Planshetingiz, mobil qurilmangiz yoki noutbukingiz bo'ladimi, istalgan qurilmani do'koningizning savdo nuqtasiga aylantirishingiz mumkin. Bu oddiy, tez sozlanishi va serveringiz uchun to‘liq tayyorlangan. Bugundan foydalanishni boshlang!",
            'view-pos' => 'Mening onlayn do\'konim kassiriga kiring'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Seanslar',
        'sub-title' => 'Men do\'konimga necha marta tashrif buyurdim?',
        'countries-title' => 'Qaysi davlatlar eng ko\'p tashrif buyurgan?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Bir dollar sarflamasdan pul ishlashni xohlaysizmi?',
        'message' => "Hurmatli :name, siz asboblar paneli > Demonetizatsiya bo‘limiga o‘tib, havola yaratishingiz mumkin. Havolani do'stlaringizga yuboring, siz Selldone sovg'a kartalarini va do'stingiz to'lovlarining foizini olasiz. E'tibor bering, sovg'a kartasi sizga ham, do'stingizga ham yuboriladi.",
        'action' => 'Mening kirish havolasini ko\'ring',
        'mail-clip' => "<b style='color: #C2185B'>Muhim:</b> Agar siz Gmail kabi elektron pochta xabarining uzunligini cheklovchi elektron pochta xizmatlaridan foydalansangiz, to‘liq hisobotni ko‘rsatish uchun elektron pochta oxirida quyidagi variantni toping va ustiga bosing:",

        'no-coin-reward' => "<b style='color: #C2185B'>Kechirasiz:</b> Sizning faoliyatingiz bepul SEL Coins mukofotini olish talabiga javob bermadi. Ko'proq harakat qiling va keyingi mavsum uchun do'koningizda ko'proq soting.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Mukofot:</b> Tabriklaymiz, ajoyib ijroingiz tufayli biz sizga :amount SEL Coin bepul mukofotini taqdim etdik.",

        'need-buy-license' => "<b>Biznesingizni yuqori darajaga ko'taring:</b> Siz hali veb-saytingiz uchun obuna rejasini ro'yxatdan o'tkazmaganga o'xshaysiz! Har yili toʻlanadigan boʻlsa, oyiga atigi :amount evaziga koʻproq funksiyalarni ochish uchun hozir yangilang.",
        'not-afford-message' => "Agar to‘lovga imkoningiz bo‘lmasa yoki to‘lov bilan bog‘liq muammolarga duch kelsangiz, bizga support@selldone.com orqali xabar bering.",
        'add-domain' => "<b>Nima uchun biznesingiz uchun maxsus domenga ega bo'lmaysiz?</b><br> Veb-saytingizga domen qo'shing; bu Bepul!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone - a<del> mahsulot</del> <span style = 'color: forestgreen'>hamjamiyat</span> .<br> Professional sotuvchi bo'ling!",
        'message' => "Twitter, LinkedIn va ijtimoiy tarmoqlarda Selldone rasmiy sahifalarini kuzatib boring. Bizga har qanday sharh, so'rov yoki tanqidni yuboring yoki Selldone haqidagi munozaralarda ishtirok eting. Biz, shuningdek, <b>siz yaratgan</b> Selldone hamjamiyatining bir qismimiz."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Yangi avokado buyurtmalari olindi | :shop_title :time',
        'title' => "Oxirgi 24 soat davomida ishlash hisoboti",
        'message' => "Sizning mijozlaringiz buyurtmalaringiz ko'rib chiqilishini va narxlanishini kutishmoqda. Ko'proq sotish uchun mijozlaringizning so'rovlariga imkon qadar tezroq javob bering.",
        'card_title' => "Navbatdagi buyurtmalar",
        'card_subtitle' => ":date dan beri",

        'card_payed' => "To'langan buyurtmalar"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Postingizga javob bering:community_title',
        'title' => ":name, va :count boshqalar sizning postlaringizga fikr bildirgan.",
        'message' => "Salom :name, sizning xabarlaringiz e'tiborni tortmoqda! Hamjamiyatimizda fikr-mulohazalarni oldingiz. Munozaraga qo'shilish va hamma nima deyayotganini ko'rish uchun hisobingizga kiring.",
        'title-simple' => ":name postingizga fikr bildirdi!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 :topic_title mavzuingizga javob bering',
        'title' => ":name, va :count boshqalar sizning mavzuingizga javob berdi.",
        'message' => "Salom :name, mavzuingiz diqqatni tortmoqda! Jamiyatimizda javoblar oldingiz. Munozaraga qo'shilish va hamma nima deyayotganini ko'rish uchun hisobingizga kiring.",
        'title-simple' => ":name mavzuingizga javob berdi.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Yangi login :name',
        'category' => 'Xavfsizlik bildirishnomalari',
        'title' => "Hisobga kiring",
        'message' => "Hurmatli :name, siz Selldone hisobingizga kirgansiz.",   // Login in selldone (seller)
        'message-shop' => "Hurmatli :name, siz :shop_title ga kirgansiz.",  // Login in shop (buyer)

        'footer' => "Agar tizimga kirmagan bo'lsangiz, parolingizni o'zgartiring.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Olib tashlash",
        'deposit' => "Depozit",

        'withdraw_subject' => ":account hisobidan yechib oling",
        'deposit_subject' => ":account hisob raqamiga omonat",

        'message' => "Pul o'tkazmasi quyidagi spetsifikatsiyalar bilan amalga oshirildi.",

        'type' => "Tranzaksiya turi",

        'from' => "Manba hisobi",
        'to' => "Destination account",

        'desc' => "Tranzaksiya tavsifi",
        'action' => "Tranzaktsiyani ko'rish",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Muhim! Qoidalarning buzilishi| :shop",
        'category' => "Tanqidiy ma'lumot",
        'title' => "Sizning do'koningiz jarimaga tortildi",
        'action' => "Do'kon boshqaruv panelini oching",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter sizni Selldonega qo'shilishga taklif qildi",
        'title' => ":name sizga yangi onlayn-do'konni ishga tushirish va undan monetizatsiya qilish uchun :amount yubordi!",
        'message' => "Salom **:receiver_name**,<br><br>Selldonega xush kelibsiz! Selldone-da siz osongina elektron tijorat saytingizni, blogingizni, onlayn hamjamiyatingizni yaratishingiz va hatto bir necha daqiqa ichida shaxsan sotish uchun onlayn POS tizimini sozlashingiz mumkin. Bu biznesingizni yaxshilash, tezroq va oson boshqarish uchun moʻljallangan toʻliq onlayn biznes operatsion tizimi.<br><br><b>:date</b> orqali roʻyxatdan oʻting va boshlash uchun :amount vaucherini oling!",
        'accept' => "Taklifni qabul qiling",
        'owner' => "egasi",
        'join-date' => "Selldone-da",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Qayta tiklash havolasi| :shop",
        'category' => "Do'kon xavfsizligi",
        'title' => "<b>:shop_name</b> do'konini tiklash havolasi.",
        'message' => "Doʻkoningizni qayta tiklashni soʻraganingiz uchun bu xat sizga yuborildi. Quyidagi havolani bosish sizning do'koningiz va unga tegishli barcha ma'lumotlarni tiklaydi.",
        'action' => "Do'konni qayta tiklashni tasdiqlang",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Selldone sizning biznesingiz uchun qancha pul tejagan?',
        'sub-title' => 'From date :start to :end',
        'infrastructure' => [
            'title' => 'Infratuzilma',
            'subtitle' => 'Serverlar, CDN, saqlash va boshqa bulut xizmatlari',
        ],
        'experts' => [
            'title' => 'Mutaxassislar va xodimlar',
            'subtitle' => 'Ishlab chiquvchilar, texnik xizmat ko\'rsatish va qo\'llab-quvvatlash',
        ],
        'total_save' => 'Jami tejalgan pul'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Sizning ishlashingiz',
        'sub-title' => 'Business overview from :start to :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Qaytgan foydalanuvchilar',

        'shop_views' => 'Doʻkon koʻrinishlari',
        'baskets' => [
            'title' => 'Savatga aravalari',
            'subtitle' => 'Yangi xarid qilish aravalari soni haqida xabar bering',

        ],
        'products' => [
            'title' => 'Mahsulotlar haqida umumiy ma\'lumot',
            'subtitle' => 'Turlari bo\'yicha do\'kondagi mahsulotlarning holati',
            'value_name' => 'Mahsulotlar'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Veb-sayt sahifalarining umumiy ko\'rinishi',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Siz yangi buyurtma oldingiz. Iltimos, sotuvchi panelidagi buyurtmani qayta ishlash sahifasiga o'ting.",
        'subject' => "🛍️ Yangi Buyurtma olindi| :order_id",
        'your_revenue' => "Sizning daromadingiz",
    ],
    'vendor-invite' => [
        'title' => 'Sotuvchiga taklifnoma',
        'message' => "Siz :shop_name sotuvchisi bo'lish taklifini oldingiz. Quyidagi tugmalarni bosish orqali uni qabul qilishingiz yoki rad etishingiz mumkin.",
        'subject' => ":shop_name | Siz bizning sotuvchimiz bo'lish taklifini oldingiz",
        'accept' => "Qabul qiling va sotuvchiga aylaning",
        'reject' => "Rad etish",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Jamoamizga qo\'shilishga taklif',
        'message' => "Sizni :shop_name orqali :vendor_name guruhiga qo‘shilishga taklif qilishdi. Quyidagi tugmalar orqali ushbu taklifni qabul qilishingiz yoki rad qilishingiz mumkin.",
        'subject' => "Invitation to Join :vendor_name | Become a Team Member",
        'accept' => "Qabul qiling va jamoaga qo'shiling",
        'reject' => "Rad etish",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => ":shop uchun login kodingiz",
        'header-message' => "Siz doʻkonga kirish kodini soʻraganingiz uchun sizga ushbu xatni yubormoqdamiz. Bir martalik parolingizni (OTP) quyida toping:",
        'footer-message' => "Ushbu kod 10 daqiqa davomida amal qiladi. Agar siz ushbu login kodini so'ramagan bo'lsangiz, iltimos, ushbu xatga e'tibor bermang."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Elektron pochtangizni tasdiqlang| :shop",
        'title' => 'Elektron pochtani tekshirish',
        'header-message' => "Salom :name,<br> Iltimos, tugmani bosish orqali **:email** sizning elektron pochta manzilingiz ekanligini tasdiqlang yoki 48 soat ichida quyidagi havoladan foydalaning.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Mahsulot yangilanishlari| :shop",
        'title' => "Mahsulot holati haqida yangilanish - Oxirgi 24 soat",
        'message' => "Umid qilamanki, bu xabar sizni yaxshi topadi. Bu oxirgi 24 soat ichida platformamizdagi mahsulotlaringiz holati haqida sizni xabardor qilish uchun qisqacha yangilanishdir.\nUshbu davr mobaynida ayrim mahsulotlarning holatida o'zgarishlar yuz berdi. Ushbu o'zgarishlar xaridlar, birja yangilanishlari yoki boshqa tegishli voqealar tufayli bo'lishi mumkin.\nHar bir mahsulot haqida batafsil ma'lumot olish uchun, iltimos, hisobingizga kiring va \"Mahsulot holati\" bo'limini tekshiring.",
        'action' => "Sotuvchi panelini oching",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Ommaviy buyurtmalar qabul qilindi| :shop | :date",
        'title' => "Ommaviy buyurtmalar haqida bildirishnoma",
        'message' => "Siz ommaviy buyurtmalar toʻplamini oldingiz. Qo'shimcha ma'lumot olish uchun paneldagi buyurtmani qayta ishlash sahifasiga tashrif buyuring. Buyurtmalar roʻyxatini taqdim etilgan xavfsiz havola orqali ham yuklab olishingiz mumkin, amal qilish muddati 7 kun.<br><br>\n        <b>MUHIM:</b> Ushbu havola 7 kun davomida amal qiladi.<br>\n        Bu havola dinamikdir, shuning uchun har safar uni bosganingizda, ushbu aniq sana uchun eng yangilangan buyurtmalarni olasiz. <b>Bu, agar buyurtma toʻlovi holati rad etilganga oʻzgarsa, yuklab olingan CSV-da bu buyurtmani endi koʻrmaysiz yoki buyurtma toʻlangan boʻlsa, u roʻyxatda paydo boʻlishini anglatadi.</b><br><br>\n        <ul>\n            <li>CSVda :date.</li> sanasi ajratilgan pullik buyurtmalar mavjud.\n            <li>Bozlangan sana – foydalanuvchi buyurtma sahifasida to‘lovni bosgan sana.</li>\n        </ul>\n        <b> Ikki nusxadagi buyurtmalarni oldini olish uchun yuborishdan oldin har doim ID buyurtmasini tekshiring.</b>",
        'action' => "Buyurtmalar ro'yxatini yuklab oling",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Buyurtmangizdagi baʼzi mahsulotlar qabul qilinmadi va ularni yetkazib boʻlmaydi. Tez orada ushbu mahsulotlar uchun to'lov kartangizga qaytariladi."
    ]

];
