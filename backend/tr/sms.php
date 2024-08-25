<?php 

 return [
     "shop-order-payment" => [
     "title" => "Ödemeyi kabul et",
     "sample" => "267$ ödemeniz başarıyla gerçekleşti.<br> Sipariş: SM-425<br> Teşekkürler, <b>mağazanızın adı</b> .<br> satıldı",
     "body" => ":param2 ödemeniz başarıyla gerçekleşti. Sıralama: :param1 Teşekkürler, :param3. satıldı",
     "description" => "Başarılı ödeme hakkında bilgi vermek için mağaza müşterisine mesaj gönderin.",
],
     "shop-order-payment-admin" => [
     "title" => "Ödemeyi kabul et",
     "sample" => "Yeni 267$ ödeme başarıyla tamamlandı.<br> Sipariş: SM-425<br> Teşekkürler, <b>mağazanızın adı</b> .<br> satıldı",
     "body" => "Yeni :param2 ödemesi başarıyla tamamlandı. Sıralama: :param1 Teşekkürler, :param3. satıldı",
     "description" => "Ödemenizin başarılı olduğunu mağaza sahibine bildirmek için mesaj gönderin.",
],
     "vendor-new-order" => [
     "title" => "Satıcı Yeni Sipariş",
     "sample" => "200$ tutarında yeni bir sipariş aldınız.<br> Sipariş: SM-870 <b>Satıcı adı</b> .",
     "body" => "Yeni bir :param2 siparişi aldınız. Sipariş: :param3 için :param1.",
     "description" => "Yeni bir sipariş hakkında satıcıya bilgi vermek için bir mesaj gönderin.",
],
     "shop-login" => [
     "title" => "Giriş doğrulama kodu",
     "sample" => "Giriş kodunuz: <b>123456</b><br> <b>mağaza adınız</b><br> satıldı",
     "body" => "Giriş kodunuz: :param1 :param2 Selldone",
     "description" => "Müşteriye mağazaya giriş yapabilmesi için giriş kodunu gönderin.",
],
     "user-login" => [
     "title" => "Giriş Başarı Mesajı",
     "sample" => "Sevgili <b>İsim</b> ,<br> <b>5/8/2021 09:14AM'de</b> <b>iPhone 165.250.300.1</b> ile hesabınıza giriş yaptınız.<br> satıldı",
     "body" => "Sevgili :param1, :param3 adresinden :param2 ile hesabınıza giriş yaptınız. satıldı",
     "description" => "Müşteri mağazaya giriş yaptıktan sonra mesaj gönder.",
],
     "avocado-order-submit" => [
     "title" => "Avokado yeni sipariş gönderildi alıcıya gönder",
     "sample" => "<b>mağaza adınız</b><br> Sevgili <b>Adın</b> ,<br> Siparişinizi aldık ve inceliyoruz.<br> Sipariş No: <b>AVO-246</b><br> satıldı",
     "body" => ":param3 Sevgili :param1, Siparişinizi aldık ve inceliyoruz. Sipariş No: :param2 Satıldı",
     "description" => "Avokado siparişi verdikten sonra müşteriye bir mesaj gönderin.",
],
     "avocado-order-submit-seller" => [
     "title" => "Avokado satıcıya yeni sipariş gönder",
     "sample" => "Bir avokado siparişi aldınız:<br> Mağaza: <b>Mağaza adınız</b><br> Alıcı: <b>Alıcı adı</b><br> Sipariş: <b>AVO-246</b><br> satıldı",
     "body" => "Bir avokado siparişi aldınız: Mağaza: :param1 Alıcı: :param2 Sipariş: :param3 Selldone",
     "description" => "Yeni Avokado siparişinizi aldığınızı mağaza sahibine bildirmek için bir mesaj gönderin.",
],
     "avocado-ready-to-pay" => [
     "title" => "Avokado siparişi ödemeye hazır",
     "sample" => "<b>mağaza adınız</b><br> Siparişiniz onaylandı ve ödemenizi aşağıdaki linkten yapabilirsiniz.<br> Sipariş No: <b>AVO-246</b><br> Bağlantı: <b>https://alanınız/avokado</b><br> satıldı",
     "body" => ":param3 Siparişiniz onaylanmıştır ve ödemenizi aşağıdaki linkten yapabilirsiniz. Sipariş No: :param2 Bağlantı: :param1 Selldone",
     "description" => "Satıcı maliyeti belirledikten ve Avokado siparişini onayladıktan sonra müşteriye ödeme bağlantısını içeren bir mesaj gönderin.",
],
];