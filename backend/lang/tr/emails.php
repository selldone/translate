<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Bu mesaj mağazaya yeni bir alıcıyı davet ediyor.',
        ShopMailTemplateCodes::OrderCheckout => 'Bu bildirim, alıcı bir siparişi onayladığında gönderilir.',
        ShopMailTemplateCodes::OrderPayment => 'Bu bildirim, müşteri tarafından yapılan başarılı ödemeyi onaylar.',
        ShopMailTemplateCodes::OrderUpdate => 'Bu mesaj, alıcıya siparişinin durumu hakkında bilgi vermek için gönderilir.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Bu mesaj satıcıya onaylanmış bir sipariş hakkında bilgi vermek için gönderilir.',
        ShopMailTemplateCodes::PosCheckout => 'Bu bildirim, bir alıcının satış noktası siparişini onaylamak için gönderilir.',
        ShopMailTemplateCodes::PosPayment => 'Bu bildirim, alıcı tarafından yapılan satış noktası ödemesini doğrular.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Bu mesaj satıcıya, satış noktasında yapılan bir satın alma işlemi hakkında bilgi verir.',
        ShopMailTemplateCodes::ShopContact => 'Bu bildirim, bir iletişim formu gönderildiğinde gönderilir.',
        ShopMailTemplateCodes::ShopGiftCard => 'Bu bildirim kullanıcıya hediye kartı aldığı bilgisini verir.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Bu mesaj mağazaya yeni bir satıcıyı davet ediyor.',
        ShopMailTemplateCodes::ShopVendorInvite => "Bu mesaj bir satıcıyı pazar yerinize katılmaya davet etmek için gönderilir.",
        ShopMailTemplateCodes::ShopVendorOrder => "Bu mesaj, Ödenmiş veya Kapıda Ödeme (COD) durumunda bir sipariş alındığında satıcıya gönderilir.",
        ShopMailTemplateCodes::ShopVendorProducts => "Satıcıları ürünlerinin durumu hakkında güncellemek için günlük olarak gönderilir.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Bu mesaj bir satıcıyı pazar yerinize katılmaya davet etmek için gönderilir.",

        ShopMailTemplateCodes::UserLogin => "Güvenlik amacıyla kullanıcıya IP adresi, tarih ve cihaz dahil oturum açma ayrıntılarını bildirin.",
        ShopMailTemplateCodes::LoginCode => "Kullanıcıların mağazaya giriş yapabilmeleri için tek kullanımlık şifre kodu gönderin.",

        ShopMailTemplateCodes::EmailVerifyLink => "Kullanıcının e-posta adresini doğrulamak için bir bağlantı gönderin. Bu e-posta, bir kullanıcı SMS ile kaydolduğunda ve e-posta adresini girdiğinde gönderilir. Bir kullanıcı doğrudan sosyal giriş veya e-posta yoluyla kaydolduğunda gönderilmez.",

        ShopMailTemplateCodes::EmailBulkOrder => "Belirli bir gün için alınan ve ödenen siparişlerin bir listesini toplu olarak gönderin."


    ,

    ],


    'global' => [
        'greetings' => 'Merhaba :name!',
        'end-statement' => 'Destek ekibi',

        'receiver_name' => 'Merhaba :user_name',
        'footer-help' => "Yardıma mı ihtiyacınız var? [support@selldone.com](mailto:support@selldone.com) adresinden sorun veya [yardım merkezimizi](https://selldone.com/community) ziyaret edin.",
        'selldone-team' => 'Selldone ekibi',
        'footer-shop' => "Herhangi bir konuda yardıma ihtiyacınız olursa lütfen bize bir e-posta göndermekten çekinmeyin: :shop_mail",
        'accept' => "Kabul etmek",
        'reject' => "Reddetmek",
        'verify' => "doğrulamak",
        'title' => "Başlık",
        'value' => "Değer",
        'description' => "Tanım",
        'shop' => "Mağaza",
        'shop-info' => "Mağaza Bilgileri",
        'user' => "kullanıcı",
        'user-info' => "Hesap Bilgileri",
        'license' => "Lisans",
        'status' => "Durum",
        'start' => "Başlangıç",
        'end' => "Son",
        'renewal' => "yenileme",
        'view' => "görüş",

        'balance' => "Denge",
        'card_number' => "Kart numarası",
        'cvv' => "özgeçmiş",
        'expire_date' => "Son kullanma tarihi",

        'Dashboard' => "Kontrol Paneli",
        'order' => "emir",
        'view_order' => "Siparişi görüntüle",
        'pay_now' => "Pay now",

        'official_selldone' => "RESMİ SATILDI",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Para birimi",
        'free-balance' => "Ücretsiz bakiye",
        'locked-balance' => "Kilitli bakiye",
        'bot' => "bot",
        'requests' => "İstekler",
        'baskets' => 'Arabalar',
        'physical' => "Fiziksel",
        'virtual' => "Sanal",
        'file' => "Dosya",
        'service' => "Hizmet",
        'fulfillment' => "yerine getirme",
        'open' => "Açık",
        'reserved' => "Rezerve",
        'canceled' => "İptal edildi",
        'payed' => "Paralı",
        'cod' => "COD",
        'orders-count' => 'Emirler',
        'payments-count' => 'ödemeler',
        'confirms-count' => 'onaylar',
        'sends-count' => 'gönderir',
        'delivers-count' => 'sunar',
        'count' => 'Saymak',
        'transactions-count' => 'İşlem sayısı',
        'success-transactions' => 'Başarılı işlemler',
        'total-amount' => 'Toplam tutar',
        'amount' => 'Miktar',
        'wage' => 'Maaş',
        'debug' => 'hata ayıklama',
        'pos' => 'POS',
        'live' => 'Canlı',
        'CheckQueue' => 'Sırayı kontrol et',
        'OrderConfirm' => 'Siparişi onaylama',
        'PreparingOrder' => 'sipariş hazırlanıyor',
        'SentOrder' => 'Gönderilen sipariş',
        'ToCustomer' => 'Müşteriye teslim edildi',
        'Pending' => 'Bekliyor',
        'Accepted' => 'Kabul edilmiş',
        'Rejected' => 'Reddedilmiş',
        'pc' => 'PC',
        'tablet' => 'Tablet',
        'phone' => 'Telefon',
        'total' => 'Toplam',
        'view-detail' => 'Ayrıntılara bakın',
        'empty' => 'Boş',
        'dropshipping' => 'Direk nakliye',
        'reply' => 'Cevap vermek',
        'reactions' => 'reaksiyonlar',
        'Comments' => 'Yorumlar',
        'last-comment' => 'Son yorum',
        'response-to' => 'Tepki',
        'posts' => 'Gönderiler',
        'post' => 'Postalamak',

        'name' => 'İsim',
        'email' => 'E-posta',
        'type' => 'tip',
        'device' => 'Cihaz',
        'platform' => 'platformu',
        'browser' => 'Tarayıcı',
        'time' => 'Zaman',
        'Wallet' => 'Cüzdan',
        'date' => 'Tarih',

        'account' => 'Hesap',
        'transaction' => 'işlem',
        'fee' => 'Ücret',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Fatura',
        'category' => 'Kategori',
        'password' => 'Parola',
        'verify-login' => "Doğrula ve Giriş Yap",
        'url' => 'URL',
        'avocado' => 'Avokado',
        'hyper' => 'Aşırı',
        'buy-now' => "Şimdi satın al",
        'add-domain' => "Add Domain",
        'views' => 'Görüntüleme',


        'country' => 'Ülke',
        'address' => 'adres',
        'postal' => 'Posta Kodu',
        'building_no' => 'Bina #',
        'building_unit' => 'Birim #',
        'message' => 'İleti',


        'customer' => 'Müşteri',
        'cart-items' => 'Sepet öğeleri',
        'payment' => 'Ödeme',
        'receiver' => 'Alıcı',
        'virtual-items' => 'Sanal öğeler',
        'no-payment' => 'Ödeme yok!',

        'enable' => 'Olanak vermek',
        'access' => 'Giriş',
        'bank' => 'Banka bilgileri',

        'vendor' => 'SATICI',

        'view_content' => "Tüm içeriği görüntüle",
        'files' => 'Dosyalar',
        'download' => 'İndirmek',
        'file_name' => 'Dosya adı',
        'file_size' => 'Boy',

        'subscription' => 'abonelik',
        'products' => 'Ürün:% s',
        'vendor_products' => 'Satıcı Ürünleri',

        'pickup' => 'Teslim alma',

        'minutes' => 'dakika',
        'hours' => 'Saatler',

        'refund' => 'Geri ödeme',
        'recipient_address' => 'Alıcı Adresi',
        'signature' => 'İmza',
        'blockchain' => 'Blockchain',
        'details' => 'Ayrıntılar',


    

        'Shop' => 'Mağaza',
        'dashboard' => 'Gösterge Paneli',
        'comments' => 'yorumlar',
        'wallet' => 'cüzdan',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone İş İşletim Sistemi",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Selldone Performans Raporu'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Sezon Raporu, Selldone'
        ],
        'Onboarding' => [
            'id' => 'merhaba',
            'name' => 'Onaylamak, Selldone'
        ],
        'Support' => [
            'id' => 'support',
            'name' => ':name\'yu destekleyin'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Selldone'
        ],
        'Welcome' => [
            'id' => 'merhaba',
            'name' => 'Topluluk, Selldone'
        ],
        'NewShop' => [
            'id' => 'tüccarlar',
            'name' => 'Onaylamak, Selldone'
        ],
        'Approve' => [
            'id' => 'onaylamak',
            'name' => 'Onaylamak, Selldone'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Sipariş Yönetimi :name'
        ],

        'Recovery' => [
            'id' => 'kurtarma',
            'name' => 'Selldone Kurtarma Ekibi'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Beklemede ⌛',
        'PAYED' => 'Ücretli ✅',
        'CANCELED' => 'İptal edildi ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'yönetici',
            'OFFICER' => 'Memur ve Müfettiş',
            'AUDITING' => 'Denetim müdürü',
            'EMPLOYEE' => 'Çalışan',
            'PRODUCT' => 'Ürün yöneticisi',
            'CONTENT' => 'İçerik yöneticisi',
            'MARKETING' => 'Pazarlama Müdürü',
            'VIEWER' => 'izleyici',

        ],
        'subject' => ":inviter sizi :level olarak davet etti| :shop",
        'category' => "Personel daveti",
        'title' => "<b>:shop_name'ye</b> <b>:level</b> olarak davet edildiniz.",
        'message' => "İş hayatında <b>:shop_title</b> ekibiyle işbirliği yapmak için bir davet aldınız. Bu teklifi kabul etme veya reddetme seçeneğiniz vardır. Kabul etmeyi seçerseniz kararınızı onaylamak için lütfen Selldone hizmetinde oturum açın. Onaylandıktan sonra mağaza yönetimi bölümüne erişim kazanacaksınız.",

    ],

    'welcome-email' => [
        'subject' => "👋 Hoşgeldiniz :name, Selldone'ya Başlayalım!",
        'category' => 'CONGRATULATION',
        'title' => "Selldone'ya hoş geldiniz",
        'message' => "Selldone'yu seçtiğiniz için teşekkür ederiz! Artık küresel satıcıları müşterilere, yerel işletmeleri işletmelere ve bireyleri şirketlere bağlayan canlı bir topluluğun parçasısınız. Tüm Master ve Pro araçlarımız **ücretsiz** ve **sınırsız** olarak kullanımınıza sunulmaktadır. Sizi desteklemek ve başarınızın kapılarını açmak için buradayız.",

        'index' => "Adım :step.",

        'step-domain' => [
            'title' => 'Özel Alan Adınızı Ekleyin',
            'message' => "Başlamak için Mağaza Kontrol Paneli'nde Ayarlar > Alan Adı Ayarları altında özel alan adınızı ücretsiz olarak ekleyin.",
            'action' => 'Alan Adlarımı Yönet',
        ],
        'step-landing' => [
            'title' => 'Ana Sayfanızı Özelleştirin',
            'message' => "Kontrol Paneli > Sayfalar'a giderek ana sayfanızı kişiselleştirin. Bir açılış sayfası seçin veya yeni bir tane oluşturun. Kolay ve sezgiseldir ve üzerinde hemen çalışmaya başlayabilirsiniz.",
            'action' => 'Açılış Sayfamı Özelleştir',
        ],
        'step-payment' => [
            'title' => 'Ödeme Yöntemlerini Ayarlayın',
            'message' => "Ödemeleri doğrudan banka hesabınıza kabul etmeye başlayın. Stripe, PayPal ve daha fazlası gibi ödeme sağlayıcılarınızı bağlamak için Kontrol Paneli > Muhasebe > Ağ Geçidi'ne gidin.",
            'action' => 'Ödeme Yöntemleri Ekle',
        ],
        'step-products' => [
            'title' => 'Ürünlerinizi Ekleyin',
            'message' => "Kontrol Paneli > Ürünler bölümüne kolayca ürün ve kategori ekleyin. Tıpkı bilgisayarınızdaki dosya ve klasörleri yönetmek gibidir; tamamen sürükleyip bırakmaya hazırdır. Ayrıca Excel'i kullanarak ürünleri toplu olarak içe aktarabilirsiniz. Başlamanıza yardımcı olacak örnek bir şablon mevcuttur.",
            'action' => 'Ürünlerimi Yönet',
        ],
        'step-shipping' => [
            'title' => 'Gönderim Yöntemlerini Ayarlayın',
            'message' => "Müşterilerden kargo bedelini tahsil etmek için Kontrol Paneli > Lojistik > Kargo bölümünde kargo yöntemlerinizi tanımlayın. Çeşitli konumlar için farklı fiyatlandırma ve destek ayarlayabilirsiniz. Kontrol Paneli > Lojistik > Depo bölümünde depo menşeinizi ayarlamayı unutmayın.",
            'action' => 'Gönderim Yöntemlerini Yönet',
        ],
    

        'seller' => [
            'title' => 'satıcı mısınız?',
            'message' => 'Satışa başlamak için aşağıdaki bağlantıdan Selldone\'a gösterge tablonuzu girin ve tamamen ücretsiz olarak ilk mağazanızı oluşturun. Bu birkaç dakika sürecek ve kendi mağazanız ve çevrimiçi siteniz olacak. Daha sonra sizi sonraki adımlara yönlendireceğiz ve ödeme ağ geçidini alacağız.',
            'action' => 'Kontrol panelime giriş yap',
        ],
        'buyer' => [
            'title' => 'ben bir alıcıyım',
            'message' => 'Tebrikler. Selldone\'a üye olduğunuzda, çevrimiçi mağazalarda üyelik ve kimlik doğrulamanın tüm zorluklarından kurtulacaksınız. Selldone platformunu kullanan herhangi bir mağaza ve siteden yararlanmak için tek tıkla giriş yapabilir ve satın alma işleminizi basit, hızlı ve güvenli hale getirebilirsiniz.',
        ],
    ],


    'charge-account' => [
        'category' => 'Cüzdan > Hesap > Ücretlendirme',
        'title' => "Başarı Ücreti",
        'message' => "<b>:account_number</b> hesabınızdan <b>:amount</b> başarıyla ödeme alındı.",
        'account' => 'Hesap',
        'charge' => 'Şarj etmek',
        'balance' => 'Denge',
        'footer' => "İşi dünyanın her yerinden herkes için kolay, ulaşılabilir ve erişilebilir hale getirin."
    ],

    'verify-email' => [
        'subject' => "🙌 Selldone'a kaydınızı tamamlayın! Bağlantıyı doğrulayın.",
        'category' => "BİR ADIM UZAKTASIN",
        'title' => "Eposta adresinizi doğrulayın",
        'message' => "Merhaba :name,<br><br>Selldone'yu seçtiğiniz için teşekkür ederiz!<br><br><b>:email</b>'nun doğru e-posta adresiniz olduğunu onaylamak için lütfen aşağıdaki düğmeyi tıklayın veya verilen bağlantıyı kullanın. Bu doğrulamayı tamamlamak için 48 saatiniz var.",
        'footer' => "Doğrula düğmesini tıklamakta sorun yaşıyorsanız, aşağıdaki URL'yi kopyalayıp web tarayıcınıza yapıştırın: :activation_url",
        'next-step' => "Daha sonra, özel alan adınızı eklemenizi, ödemeleri ayarlamanızı, ürün eklemenizi ve ilk siparişinizi almanızı kolaylaştırmak için size bazı yararlı materyaller ve adım adım kılavuz göndereceğiz.",

    ],
    'verify-email-code' => [
        'subject' => ":name için doğrulama kodu",
        'category' => "SECURITY",
        'title' => "E-posta doğrulama kodu",
        'message' => "Merhaba :name,<br><br><b>:email</b>'nun doğru e-posta adresiniz olduğunu onaylamak için lütfen sonraki <b>10 dakika içinde aşağıdaki kodu girin</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Mağazanız Hazır| :name",
        'category' => "BİR ADIM UZAKTASIN",
        'title' => "Kurulum tamamlandı",
        'account_title' => "Hesabınız",
        'account_msg' => "Bu bilgilerle hesabınızı doğrulayın ve oturum açın.",
        'shop_msg' => "Selldone işletme işletim sistemindeki hesap bilgileri.",

    ],

    'reset2fa' => [
        'category' => "GÜVENLİK RESMİ MESAJI",
        'title' => "2 adımlı oturum açmayı devre dışı bırakma isteğinde bulunun",
        'message' => "Bu e-postayı, **:email** e-postası ile **:name** hesabı için iki faktörlü kimlik doğrulamanın sıfırlanması yönünde bir istek aldığımız için alıyorsunuz.<br><br>Hesabınız için aşağıdaki ayrıntıları bulduk:",
        'footer' => "Parola sıfırlama talebinde bulunmadıysanız, başka bir işlem yapmanız gerekmez.",
        'action' => 'İki adımlı oturum açmayı devre dışı bırak',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Dükkanınız şimdi hazır!",
        'category' => "DÜNYADA DOĞDU YENİ ONLINE MAĞAZA",
        'title' => "Tebrikler, :name!",
        'message' => "<b>Tebrikler, :name! Yeni çevrimiçi işiniz artık yayında!</b> Sizi Selldoners topluluğunda ağırlamaktan heyecan duyuyoruz. Başarıya doğru ilk adımı attınız ve biz de size yolun her adımında yardımcı olmak için buradayız.<br>Artık mağazanız hazır olduğuna göre, doğrudan müşterilerinizden ödeme almaya hazır olduğunuzdan ve imparatorluğunuzu büyütmeye başladığınızdan emin olalım. Yardıma ihtiyacınız olursa, yalnızca bir mesaj uzaktayız; destek ekibimiz her zaman yanınızda.<br><br><b>Önemli Sonraki Adımlar:</b> Başlamak için, ödemeleri almaya ve sorunsuz işlemlere hazır olduğunuzdan emin olun. Mağazanızın sorunsuz bir şekilde çalışmasını sağlamak için her aşamada size rehberlik edeceğiz.",
        'pdf-book' => "Ekli el kitabını kaçırmayın: İşinizi Oyun Gibi Yapın",

        'account' => [
            'title' => 'Adım 1: Selldone cüzdanında bir hesap oluşturun',
            'message' => "Başlamak için Selldone cüzdanınızda bir hesap oluşturun. Ücretlerinizin düşüleceği yer burasıdır ve aynı zamanda mağazanızın sorunsuz çalışmasını sağlamak için yükleme yapacağınız yerdir. Bakiyeniz eksiye düşerse endişelenmeyin! Mağazanız kesintisiz olarak faaliyetlerine devam edecektir.",
            'action' => 'Cüzdana giriş yap',
        ],

        'shop-account' => [
            'title' => '2. Adım: Hesabı mağazaya bağlayın',
            'message' => "Daha sonra cüzdan hesabınızı mağazanıza bağlayın. <b>Store > Muhasebe > Fatura</b> seçeneğine gidin ve cüzdanınızı bağlayın. Bu, tüm müşteri ödemelerinin doğrudan banka hesabınıza yatırılmasını sağlar; Selldone, kazançlarınızdan herhangi bir tutar kesmez.",
            'action' => 'Mağaza Fatura Paneli',
        ],

        'gateway' => [
            'title' => '3. Adım: Çevrimiçi Ödeme Ağ Geçidini Bağlayın',
            'message' => "Şimdi çevrimiçi ödeme ağ geçidinizi ayarlayalım. <b>Store > Muhasebe > Port</b> seçeneğine gidin ve <b>Yeni Bağlantı Noktası Ekle</b> seçeneğine tıklayın. Para biriminizi seçtiğinizde mevcut ödeme ağ geçitlerinin bir listesini göreceksiniz. Bir ağ geçidini bağlamak hızlı ve kolaydır, ancak yardıma ihtiyacınız olursa Selldone kılavuzlarına göz atmaktan veya bize ulaşmaktan çekinmeyin.",
            'action' => 'Mağazaya bir portal ekleyin',
        ],

        'domain' => [
            'title' => 'Son adım: özel bir etki alanı bağlama',
            'message' => "Şimdi özel alan adınızı mağazanıza bağlayın. Bu, müşterilerin ürün veya hizmetlerinizi satın almasına ve doğrudan size ödeme yapmasına olanak tanır.",
            'action' => 'Sınırsız hediye kartı tanıtma ve alma',
        ],
    ],


    'basket-list' => [
        'item' => "kalem",
        'count' => "Saymak",
        'price' => "fiyat",
        'discount-code' => "İndirim kodu",
        'customer-club' => 'Müşteri Kulübü',
        'shipping' => "Nakliye",
        'total' => "Toplam",
        'offer' => "Teklif",
        'coupon' => "Kupon",
        'lottery' => "Ödül",
        'tax' => "Vergi",
        'tax_included' => "Fiyata dahil",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Yöntem',
        'amount' => 'Miktar',
        'giftcard' => 'Gift card',
        'payment' => 'Ödeme',
    ],


    'shop-subscription-email' => [
        'category' => "Abonelik güncellemesi",
        'title' => "Mağaza Lisansı: :shop_title",
        'title-reserved' => "Yedek lisans: :shop_title",
        'title-active' => "Aktif lisans: :shop_title",
        'title-finished' => "Bitmiş lisans: :shop_title",
        'title-cancel' => "Lisansı iptal et: :shop_title",
        'message' => "Dükkan lisans planınız güncellendi,",
        'RESERVED' => "⚡ Abonelik planınız **ayrıldı**.",
        'ACTIVE' => "🟢 Abonelik planınız **etkinleştirildi**.",
        'FINISHED' => "🚧 Abonelik planınız **tamamlandı**.",
        'CANCEL' => "⛔ Abonelik planınız **iptal edildi**.",
    ],

    'support' => [
        'subject' => "Destek Merkezi|:name yanıtladı",
        'category' => "Destek Merkezi",
        'title' => "bir yanıt aldınız",
        'action' => "Mağaza yöneticisini aç",
    ],

    'shop-customer-join' => [
        'subject' => "Katılın :shop_title",
        'category' => "Yeni müşteri kutlaması",
        'title' => "Üyeliğiniz için mutluyuz",
        'action' => "Şimdi ziyaret edin",
    ],

    'shop-vendor-join' => [
        'subject' => "Satıcı Katılımı | :shop_title",
        'category' => "Yeni satıcı kutlaması",
        'title' => "Üyeliğiniz için mutluyuz",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Hediye kartı :shop_title",
        'category' => "Yeni kart ekle",
        'title' => "Tebrikler, bir hediye kartı aldınız",
        'action' => "Şimdi satın al",
        'message' => ":balance :currency tutarında bir hediye kartı aldınız. Bu hediye çeki ile mağazamızdan alışveriş yapabileceksiniz.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Destek Merkezi| :shop",
        'category' => "Destek",
        'title' => "bir yanıt aldınız",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Sipariş Onayı|:order_id'yu sipariş edin",
        'title' => "emir",
        'message' => "Mağazamıza sipariş verdiniz. Siparişinizi aldık ve ödeme onaylandıktan sonra size başka bir e-posta göndereceğiz."
    ,

        'payments' => 'ödemeler',
    ],

    'order-payment' => [
        'subject' => "🛍️ Ödeme Onayı|:order_id'yu sipariş edin",
        'title' => "Ödeme talimatı",
        'message' => "Ödemeniz tamamlandı,<br> Siparişinizi aldık. Siparişiniz kargoya verildiğinde size başka bir e-posta göndereceğiz.",
    

        'payments' => 'ödemeler',
    ],

    'order-update' => [
        'subject' => "🛍️ Sipariş Durumu Güncellemesi|:order_id'yu sipariş edin",
        'title' => "Sipariş Durumu Güncellemesi",
        'message' => "Siparişiniz güncellendi. Bu siparişin son durumunu hesabınızdan kontrol edebilirsiniz.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Siparişiniz işlenmek üzere sırada. Hazırlandığında sizi bilgilendireceğiz.",
                'OrderConfirm' => "Siparişiniz onaylandı ve hazırlıklara başlandı.",
                'PreparingOrder' => "Siparişiniz hazırlanıyor ve en kısa zamanda kargoya verilecek.",
                'SentOrder' => "Siparişiniz gönderildi. Kısa süre içinde alacaksınız.",
                'ToCustomer' => "Siparişiniz teslim edildi. Umarız beğenirsiniz!",

                'PreparingOrder-PICKUP' => "Siparişiniz hazırlanıyor. Teslim alınmaya hazır olduğunda bir bildirim alacaksınız.",
                'SentOrder-PICKUP' => "Siparişiniz teslim alınmaya hazır. Lütfen onu almak için mağazaya gelin.",
                'ToCustomer-PICKUP' => "Siparişiniz alınmıştır. Umarız beğenirsiniz!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Siparişiniz işlenmek üzere sırada. Hazır olduğunda sizi bilgilendireceğiz.",
                'OrderConfirm' => "Siparişiniz onaylandı ve hazırlıklar devam ediyor.",
                'PreparingOrder' => "Siparişiniz hazırlanıyor ve en kısa zamanda tarafınıza gönderilecek.",
                'ToCustomer' => "Sanal siparişiniz hesabınıza teslim edildi. Teşekkür ederim!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Hizmet talebiniz sırada. Başladığımızda sizi bilgilendireceğiz.",
                'OrderConfirm' => "Hizmetiniz onaylandı ve başlamaya hazırlanıyoruz.",
                'PreparingOrder' => "Hizmetinizi hazırlıyoruz ve tamamlandığında sizi bilgilendireceğiz.",
                'ToCustomer' => "Hizmetiniz tamamlandı. Bizi seçtiğiniz için teşekkür ederiz!"
            ],
            'FILE' => [
                'PreparingOrder' => "Dosyanız hazırlanıyor ve yakında kullanıma sunulacak.",
                'ToCustomer' => "Dosyanız hazır ve teslim edildi. Artık indirebilirsiniz."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Abonelik siparişiniz sırada. İşleme başladığında sizi bilgilendireceğiz.",
                'OrderConfirm' => "Aboneliğiniz onaylandı ve kuruluyor.",
                'PreparingOrder' => "Aboneliğinizi hazırlıyoruz ve yakında başlayacak.",
                'SentOrder' => "Aboneliğiniz etkinleştirildi. Devam eden güncellemeleri alacaksınız.",
                'ToCustomer' => "Abonelik hizmetiniz başarıyla etkinleştirildi."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Tebrikler :name|Yeni Kupon: :title',
        'category' => "TEBRİKLER, YENİ KUPON",
        'message' => "Hey :name,<br><br>Bizden hediye olarak yeni bir kupon aldınız! Selldone'yu arkadaşlarınıza ve tanıdığınız herkese tanıtarak daha da fazla kupon kazanabilirsiniz. Bu kuponun değeri **:price :currency**.<br><br>İlk adımı attınız ve kuponunuzla yeni özelliklerin kilidini açmanıza yardımcı olmak için buradayız! Lütfen **:email** ile giriş yapın ve kuponunuzu Mağaza **Kontrol Paneli** > **Ayarlar** > **Lisans**'ta bulun.<br><br>Tebrikler!",
        'action' => "Gösterge Panelim",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Tebrikler, Sevgili :name|Özel Bir Hediye Aldınız!',
        'category' => "Hediye alma duyurusu",
        'title' => "senin için hediyeler",
        'message' => "Merhaba :name, Selldone'dan özel bir hediye aldığınızı bildirmekten heyecan duyuyoruz! 🎉 Selldone'da aktif kalarak, mağazanızı büyüterek ve uzmanlığınızı geliştirerek daha fazla hediye kazanabilirsiniz. Hediyenizi kontrol etmek için :email ile giriş yapın ve kontrol panelinizin sağ üst köşesinde arayın.<br><br>Bu hediye **:price :currency** değerindedir ve onu Selldone içinde kolayca cüzdanınıza yatırabilirsiniz.<br><br>Mağazanızın lisansını yükseltmek için hediyenizi kullanın ve çevrimiçi işinizi geliştirmek için daha da güçlü araçların kilidini açın!",
        'action' => "Hediyeler",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ Yeni Sipariş Alındı| :order_id",
        'title' => "New Order",
        'message' => "Yeni bir sipariş aldınız. Lütfen mağazanızdaki sipariş işleme sayfasına gidin.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Doldurulmuş Bilgileriniz',
        'output-form-title' => 'Satın alınan ürün bilgileri',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬:shop_title|Haftalık Rapor :time',
        'title' => 'Haftalık mağaza performans raporu',
        'message' => "Bu, mağazanızın <b>:start</b> ile <b>:end</b> arasındaki haftalık raporudur. Bu rapor işinizi geliştirmeye yönelik ipuçları içerir; ayrıca çevrimiçi mağazanızın durumunu ve son siparişleri de kontrol edebilirsiniz. Umarım güzel bir gün ve hafta geçirirsiniz."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Son üç aya ait :amount tasarruf raporunuz| :shop_title',
        'title' => 'İş etkinliğiniz, ödülleriniz ve finansal tasarruflarınız hakkında sezonluk rapor',
        'message' => "Bu, <b>:start</b> ile <b>:end</b> arasındaki <b>:shop_title</b> sezonluk raporunuzdur."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Bağlı hesaplar',
        'sub-title' => 'Mağazama bağlı cüzdan hesaplarının son durumu nedir?',
        'view-wallet' => 'Cüzdanı görüntüle',
        'tip-title' => 'Önemli ipuçları',
        'tip' => "Ücretsiz bir Selldone cüzdanı kurun ve mağazanıza bağlayın. Bakiyeniz ekside olsa bile müşterileriniz sorunsuz bir şekilde alışveriş yapabilir ve ödeme yapabilir. Merak etmeyin, mağazanızın işlemleri ve verileri 1 aya kadar kesintisiz, sorunsuz bir şekilde devam edecektir.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Hesaba bağlan'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Yüklenen uygulamalar',
        'sub-title' => 'Bu hafta mağazanıza yüklediğiniz uygulamaların listesi.',
        'tip' => "Mağazanız için daha fazla uygulama mı bulmak istiyorsunuz?",
        'view-app-store' => 'Selldone App Store\'u ziyaret edin..',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Mağaza Botlarınız',
        'sub-title' => 'Mağazamda aktif satış botları.',
        'tip-title' => 'Bot Satışı',
        'tip' => "Selldone size otomatik satış botları sağladı. Tek yapmanız gereken Eklentiler > Botlar paneline gidip mağaza botlarınızı etkinleştirmek. İlgili hizmetin ülkenizde mevcut olması gerektiğini unutmayın.",
        'view-bots' => 'Botları yönet',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Müşterilerle İletişim',
        'sub-title' => 'Bu hafta danışanlarımla kaç kişiyle görüştüm?',
        'faqs' => 'Sıkça Sorulan Sorular',
        'tickets' => 'Müşteri Biletleri',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Kullanıcı Durumu',
        'sub-title' => ':start\'dan :end\'ya etkinlik',
        'users' => [
            'title' => 'müşteriler',
            'subtitle' => 'Kayıt Kullanıcıları',
        ],
        'views' => [
            'title' => 'ziyaretler',
            'subtitle' => 'Mağazayı kaç kez ziyaret ettiniz?',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Geri Dönen Kullanıcılar',

        'shop_views' => 'Mağaza Görünümleri',
        'baskets' => [
            'title' => 'Alışveriş kartı',
            'subtitle' => 'Yeni alışveriş sepetlerinin sayısını bildirin',
        ],
        'products' => [
            'title' => 'Ürünlere Genel Bakış',
            'subtitle' => 'Türe göre mağazadaki ürünlerin durumu',
            'value_name' => 'Ürün:% s'
        ],
        'products_count' => 'Ürün türleri',
        'views_count' => 'Görüntüleme sayısı',
        'sell_count' => 'satış sayısı',
        'send_count' => 'nakliye sayısı',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Direk nakliye',
        'sub-title' => 'Drop Shipping Selldone\'un büyük satıcıları için panel.',
        'total_fulfillments' => 'Alınan Toplam Sipariş',
        'ds_count' => 'Alınan Siparişler',
        'statistics_title' => 'Alınan siparişleri bildir',
        'ds_cancels' => 'Arayüz satıcısı tarafından iptal',
        'ds_rejects' => 'Sizin tarafınızdan iptal',
        'tip' => "Büyük bir mal satıcısı mısınız? Bir deponuz, fabrikanız veya ürün distribütörünüz var mı? Ürününüzü büyük ölçekte satmak için Selldone Drop Shipping hizmetinde ürünlerinizi diğer satıcılara sunabilirsiniz. Size rehberlik etmek için support@selldone.com adresinden bize e-posta gönderin.",
        'view-drop-shipping-panel' => 'Toptan satış paneline giriş yapın',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Döviz Kurları',
        'sub-title' => 'Mağazanızdaki en son para birimi dönüştürme oranlarının listesi.',
        'from' => 'Kaynak Para Birimi',
        'to' => 'hedef para birimi',
        'rate' => 'dönüşüm oranı',
        'view-exchange-panel' => 'Döviz Kurlarını Yönet',
    

        'vew-exchange-panel' => 'döviz kuru yönetim paneli',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Uzman sözleşmeleri',
        'sub-title' => 'Mağazamda hangi profesyoneller çalışıyor?',
        'cost' => 'Kontrat miktarı',
        'duration' => 'Süre',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Tarih İptal',
        'end_at' => 'Teslim tarihi',
        'tip' => 'İşletmenizi büyütmenize yardımcı olması için Selldone\'nun en iyi uzmanlarını işe alın.',
        'view-experts' => 'Başlamak için tıklayın.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Mağazanızdaki Aktif Ödeme Ağ Geçitleri :shop',
        'tip-title' => 'Önemli ipuçları',
        'tip' => "Mağazanızdaki portal yönetimi sayfasına gidin ve birkaç dakika içinde en az bir bağlantı noktası ekleyin. Müşterileriniz çevrimiçi portallar aracılığıyla hızlı ve güvenli bir şekilde ödeme yapmayı sever.",
        'view-shop-gateways' => 'Mağaza portalı yönetimime giriş yapın.',
        'view-gateways' => 'Daha fazla ağ geçidi görüntüle',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Emirler',
        'sub-title' => 'Bu hafta aldığım siparişlerin listesi.',
        'total_baskets' => 'Toplam Siparişler',
        'total_posBaskets' => 'Toplam Nakit Siparişler',
        'pos-title' => 'POS Mağaza Kutusu',
        'chart-label' => 'Tamamlanan siparişler (bu siparişler mutlaka ödenmez!)',
        'tip-title' => 'Daha çok denemelisin...',
        'tip' => "Basit bir başarı yok.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'İşleme merkezi',
        'sub-title' => 'Bu hafta mağazada ne kadar sipariş işledik?',
        'tip-title' => 'Satışınız yoktu!',
        'tip' => "Maalesef bu hafta hiç satışınız olmadı. Mağazanıza daha fazlasını getirmeniz gerekiyor. Daha fazla ürün ekleyebilir, daha iyi görseller seçebilir veya ürünleriniz için daha iyi açıklamalar yazabilirsiniz. İşletmeniz için tam zamanlı bir iş düşünün. Doğru yaparsanız ve hayal kırıklığına uğramazsanız, başarılı olursunuz.",
        'view-process-center' => 'İşlem merkezini görüntüle',
        'return' => [
            'title' => 'İade Edilen Sipariş',
            'subtitle' => 'İade edilen siparişleri bildirin.',
            'tip-title' => 'Bunu biliyor muydun ...',
            'tip' => "Selldone POS ile dilediğiniz kadar yazarkasa oluşturabilirsiniz! İster tabletiniz, ister cep telefonunuz, ister dizüstü bilgisayarınız olsun, herhangi bir cihazı mağazanızın satış noktasına dönüştürebilirsiniz. Basittir, kurulumu hızlıdır ve sunucunuz için tamamen hazırlanmıştır. Bugün kullanmaya başlayın!",
            'view-pos' => 'My Online Store Kasiyer\'e giriş yapın'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Oturumlar',
        'sub-title' => 'Mağazamı kaç kez ziyaret ettim?',
        'countries-title' => 'En çok hangi ülkeler ziyaret edildi?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Bir kuruş harcamadan para kazanmak ister misiniz?',
        'message' => "Sevgili :name, Kontrol Paneli > Demonetizasyon'a gidebilir ve bir tavsiye bağlantısı oluşturabilirsiniz. Bağlantıyı arkadaşlarınıza gönderin, Bir Selldone hediye kartı ve arkadaşınızın ödemelerinin bir yüzdesini alırsınız. Hediye kartının hem size hem de arkadaşınıza gönderileceğini unutmayın.",
        'action' => 'Giriş bağlantımı görüntüle',
        'mail-clip' => "<b style='color: #C2185B'>Önemli:</b> E-postanın uzunluğunu sınırlayan Gmail gibi e-posta hizmetleri kullanıyorsanız, tam raporu görüntülemek için e-postanın sonunda aşağıdaki seçeneği bulun ve tıklayın:",

        'no-coin-reward' => "<b style='color: #C2185B'>Üzgünüz:</b> Etkinliğiniz ücretsiz SEL Coin ödülü alma şartını karşılamadı. Gelecek sezon için daha çok deneyin ve mağazanızda daha fazla satış yapın.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Ödül:</b> Tebrikler, harika performansınız için size :amount SEL Coinsiz ödül verdik.",

        'need-buy-license' => "<b>İşinizin Seviyesini Yükseltin:</b> Görünüşe göre henüz web siteniz için herhangi bir abonelik planı kaydetmemişsiniz! Yıllık olarak ödenmesi durumunda ayda yalnızca :amount karşılığında daha fazla özelliğin kilidini açmak için şimdi yükseltin.",
        'not-afford-message' => "Ödeyecek paranız yoksa veya ödemeyle ilgili herhangi bir sorun yaşıyorsanız, bunu support@selldone.com aracılığıyla bize bildirmekten çekinmeyin.",
        'add-domain' => "<b>Neden işletmeniz için özel bir alan adınız yok?</b><br> Web sitenize şimdi bir alan adı ekleyin; bedava!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone bir<del> ürün</del> <span style = 'color: forestgreen'>topluluk</span> .<br> Profesyonel bir Selldoner olun!",
        'message' => "Selldone'un resmi sayfalarını Twitter, LinkedIn ve sosyal ağlarda takip edin. Bize herhangi bir yorum, istek veya eleştiri gönderin veya Selldone ile ilgili tartışmalara katılın. Biz de <b>sizin yaptığınız</b> Selldone topluluğunun bir parçasıyız."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Yeni Avokado Siparişleri Alındı|:shop_title :time',
        'title' => "Son 24 saat için performans raporu",
        'message' => "Müşterileriniz siparişlerinizin incelenmesini ve fiyatlandırılmasını bekliyor. Daha fazla satış elde etmek için müşterilerinizin isteklerine en kısa sürede yanıt verin.",
        'card_title' => "Sıradaki siparişler",
        'card_subtitle' => ":date'dan beri",

        'card_payed' => "Ücretli siparişler"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => ':community_title adresindeki yayınınızı yanıtlayın',
        'title' => ":name ve :count diğer gönderilerinize yorum yaptı.",
        'message' => "Merhaba :name, gönderileriniz dikkat çekiyor! Topluluğumuzdan yorumlar aldınız. Tartışmaya katılmak ve herkesin ne söylediğini görmek için hesabınıza giriş yapın.",
        'title-simple' => ":name gönderilerinize yorum yaptı.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Konunuza yanıt verin :topic_title',
        'title' => ":name ve :count diğerleri konunuza yanıt verdi.",
        'message' => "Merhaba :name, konunuz dikkat çekiyor! Topluluğumuzdan yanıtlar aldınız. Tartışmaya katılmak ve herkesin ne söylediğini görmek için hesabınıza giriş yapın.",
        'title-simple' => ":name konunuza yanıt verdi.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Yeni Giriş :name',
        'category' => 'Güvenlik bildirimleri',
        'title' => "Hesaba Giriş Yap",
        'message' => "Sevgili :name, Selldone hesabınıza giriş yaptınız.",   // Login in selldone (seller)
        'message-shop' => "Sevgili :name, :shop_title 'a giriş yaptınız.",  // Login in shop (buyer)

        'footer' => "Giriş yapmadıysanız, lütfen şifrenizi değiştirin.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Para çekme",
        'deposit' => "Depozito",

        'withdraw_subject' => ":account hesabından para çekme",
        'deposit_subject' => ":account hesabına para yatırma",

        'message' => "Aşağıdaki özelliklerde para transferi yapılmıştır.",

        'type' => "İşlem tipi",

        'from' => "Kaynak hesap",
        'to' => "Destination account",

        'desc' => "İşlem açıklaması",
        'action' => "İşlemi görüntüle",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Önemli! Kural ihlali| :shop",
        'category' => "kritik bilgi",
        'title' => "Dükkanınız cezalandırıldı",
        'action' => "Mağaza panosunu aç",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter sizi Selldone'a davet etti",
        'title' => ":name, yeni çevrimiçi mağazanızı açmanıza ve bundan para kazanmanıza yardımcı olmak için size :amount'yu gönderdi!",
        'message' => "Merhaba **:receiver_name**,<br><br>Selldone'ya hoş geldiniz! Selldone'da e-ticaret sitenizi, blogunuzu, çevrimiçi topluluğunuzu kolayca oluşturabilir ve hatta yüz yüze satışlar için çevrimiçi bir POS sistemi kurabilirsiniz; üstelik tüm bunları birkaç dakika içinde yapabilirsiniz. İşletmenizi daha iyi, daha hızlı ve daha kolay çalıştırmak için tasarlanmış eksiksiz bir çevrimiçi işletme işletim sistemidir.<br><br><b>:date</b> ile kaydolun ve başlamak için bir :amount kuponu alın!",
        'accept' => "Daveti kabul etmek",
        'owner' => "sahibi",
        'join-date' => "O zamandan beri Selldone'da",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Kurtarma bağlantısı| :shop",
        'category' => "Mağaza güvenliği",
        'title' => "<b>:shop_name dosyasının</b> kurtarma bağlantısını saklayın.",
        'message' => "Bu e-posta, mağazanızı geri yüklemeyi talep ettiğiniz için gönderildi. Aşağıdaki bağlantıya tıklamak, mağazanızı ve ona ait tüm verileri kurtaracaktır.",
        'action' => "Mağaza Kurtarmayı Onayla",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Selldone işiniz için ne kadar para biriktirdi?',
        'sub-title' => ':start tarihinden :end\'ya kadar',
        'infrastructure' => [
            'title' => 'altyapı',
            'subtitle' => 'Sunucular, CDN, Depolama ve diğer bulut hizmetleri',
        ],
        'experts' => [
            'title' => 'Uzmanlar ve Personel',
            'subtitle' => 'Geliştiriciler, bakım ve destek',
        ],
        'total_save' => 'Toplam tasarruf edilen para'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'performansınız',
        'sub-title' => ':start\'dan :end\'ya işletmeye genel bakış',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Geri Dönen Kullanıcılar',

        'shop_views' => 'Mağaza Görünümleri',
        'baskets' => [
            'title' => 'Alışveriş kartı',
            'subtitle' => 'Yeni alışveriş sepetlerinin sayısını bildirin',

        ],
        'products' => [
            'title' => 'Ürünlere Genel Bakış',
            'subtitle' => 'Türe göre mağazadaki ürünlerin durumu',
            'value_name' => 'Ürün:% s'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Toplam web sitesi sayfa görüntülemeleri',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Yeni bir sipariş aldınız. Lütfen satıcı panelinizdeki sipariş işleme sayfasına gidin.",
        'subject' => "🛍️ Yeni Sipariş Alındı| :order_id",
        'your_revenue' => "Geliriniz",
    ],
    'vendor-invite' => [
        'title' => 'Satıcı Davetiyesi',
        'message' => ":shop_name satıcısı olmak için bir davet aldınız. Aşağıdaki düğmelere tıklayarak daveti kabul edebilir veya reddedebilirsiniz.",
        'subject' => ":shop_name | Satıcımız olmanız için bir davet aldınız",
        'accept' => "Kabul Et ve Satıcı Ol",
        'reject' => "Reddetmek",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Ekibimize Katılma Daveti',
        'message' => ":shop_name'da :vendor_name'ya katılmaya davet edildiniz. Aşağıdaki butonları kullanarak bu daveti kabul edebilir veya reddedebilirsiniz.",
        'subject' => ":vendor_name'ya Katılma Daveti|Ekip Üyesi Olun",
        'accept' => "Kabul Et ve Ekibe Katıl",
        'reject' => "Reddet",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => ":shop için Giriş Kodunuz",
        'header-message' => "Mağaza için bir giriş kodu talep ettiğiniz için size bu e-postayı gönderiyoruz. Lütfen Tek Seferlik Parolanızı (OTP) aşağıda bulabilirsiniz:",
        'footer-message' => "Bu kod 10 dakika geçerli olacaktır. Bu giriş kodunu siz talep etmediyseniz, lütfen bu e-postayı dikkate almayın."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "E-postanızı doğrulayın | :shop",
        'title' => 'E-posta Doğrulaması',
        'header-message' => "Merhaba :name,<br>Lütfen aşağıdaki düğmeyi tıklayarak veya aşağıdaki bağlantıyı kullanarak 48 saat içinde **:email**'nun e-posta adresiniz olduğunu doğrulayın.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Ürün Güncellemeleri| :shop",
        'title' => "Ürün Durumu Güncellemesi - Son 24 Saat",
        'message' => "Umarım bu mesaj sizi iyi bulur. Bu, ürünlerinizin platformumuzdaki son 24 saatteki durumu hakkında sizi bilgilendirmek için yapılan kısa bir güncellemedir.\nBu dönemde bazı ürünlerin durumlarında değişiklikler oldu. Bu değişiklikler satın almalar, stok güncellemeleri veya diğer ilgili olaylardan kaynaklanabilir.\nHer ürün hakkında daha detaylı bilgi almak için lütfen hesabınıza giriş yapın ve 'Ürün Durumu' bölümünü kontrol edin.",
        'action' => "Satıcı Panelini Aç",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Alınan Toplu Siparişler| :shop | :date",
        'title' => "Toplu Sipariş Bildirimi",
        'message' => "Bir grup toplu sipariş aldınız. Daha fazla ayrıntı için lütfen panelinizdeki sipariş işleme sayfasını ziyaret edin. Ayrıca 7 gün geçerli olan güvenli bağlantı üzerinden sipariş listesini de indirebilirsiniz.<br><br>\n        <b>ÖNEMLİ:</b> Bu bağlantı 7 gün boyunca geçerlidir.<br>\n        Bu bağlantı dinamik olduğundan, her tıkladığınızda bu belirli tarih için en güncel siparişleri alacaksınız. <b>Bu, sipariş ödeme durumu reddedildi olarak değişirse, artık indirilen CSV'de bu siparişi göremeyeceğiniz veya sipariş ödendiyse listede görüneceği anlamına gelir.</b><br><br>\n        <ul>\n            <li>CSV, :date.</li>'da rezerve edilmiş bir tarihe sahip ücretli siparişler içerir\n            <li>Rezervasyon tarihi, kullanıcının sipariş sayfasında ödemeyi tıkladığı tarihtir.</li>\n        </ul>\n        <b>Yinelenen siparişleri önlemek için, göndermeden önce daima Sipariş ID'yu kontrol edin.</b>",
        'action' => "Sipariş Listesini İndir",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Siparişinizdeki bazı ürünler kabul edilmedi ve teslim edilemiyor. Bu öğelere ilişkin tutar kısa süre içinde kartınıza iade edilecektir."
    ]

];
