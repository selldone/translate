<?php

/*
|--------------------------------------------------------------------------
| Shop SMS list
|--------------------------------------------------------------------------
| This array return to shop admin to see SMS preview!
|
*/

return [

    'shop-order-payment' => [
        'title' => 'Bvuma kubhadhara',
        'sample' => "Kubhadhara kwako kwe267\$ kwakagadziriswa.<br> Order: SM-425<br> Ndatenda, <b>Zita rechitoro chako</b> .<br> Selldone",
        'body' => "Kubhadhara kwako kwe:param2 kwakagadziriswa.\nOrder: :param1\nNdatenda, :param3.\nSelldone",
        'icon' => 'kubhadhara',
        'description' => 'Tumira meseji kune mutengi wekutenga kuti uzivise nezvekubhadhara kwakabudirira.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Bvuma kubhadhara',
        'sample' => "Kubhadhara kutsva kwe267\$ kwakagadziriswa.<br> Order: SM-425<br> Ndatenda, <b>Zita rechitoro chako</b> .<br> Selldone",
        'body' => "Kubhadhara kutsva kwe:param2 kwakagadziriswa zvakabudirira.\nOrder: :param1\nNdatenda, :param3.\nSelldone",
        'icon' => 'kubhadhara',
        'description' => 'Tumira meseji kumuridzi wechitoro uvazivise nezvekubhadhara kwakabudirira.',

    ],

    'vendor-new-order' => [
        'title' => 'Mutengesi New Order',
        'sample' => "Wakagamuchira odha itsva yemadhora mazana maviri.<br>Qorder: <b>SM-870</b> ye<b>Vendor zita</b>.<br>✅ Chigadzirwa A| SKU100001 |1x<br>✅ Chigadzirwa B| SKU100002 |1x",
        'body' => "Wagamuchira odha itsva ye:param2.\nOrder: :param1 ye:param3.\n:param4",
        'icon' => 'storefront',
        'description' => 'Tumira meseji kune mutengesi kuti uvazivise nezveodha nyowani.',
    ],








    'shop-login' => [
        'title' => 'Login verification code',
        'sample' => "Kodhi yako yekupinda ndeye: <b>123456</b><br> <b>Zita rechitoro chako</b><br> Selldone",
        'body' => "Kodhi yako yekupinda ndeye: :param1\n:param2\nSelldone",
        'icon' => 'login',
        'description' => 'Tumira kodhi yekupinda kumutengi kuti apinde muchitoro.',

    ],

    'user-login' => [
        'title' => 'Login Success Message',
        'sample' => "<b>Zita</b> radiwa,<br> Wapinda muakaundi yako ne <b>iPhone 165.250.300.1</b> at <b>5/8/2021 9:14AM</b> .<br> Selldone",
        'body' => "Wadiwa :param1,\nIwe wakapinda muakaundi yako ne:param2 pa:param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Tumira meseji mushure mekunge mutengi apinda muchitoro.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avocado new order yatumirwa tumira kune mutengi',
        'sample' => "<b>Zita rechitoro chako</b><br> <b>Zita renyu rinodiwa</b> ,<br> Tatambira odha yenyu uye tiri kuiongorora.<br> Order #: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nWadiwa :param1,\nTatambira odha yenyu uye tiri kuiongorora.\nOrder #: :param2\nSelldone",
        'icon' => 'chokwadi_check',
        'description' => 'Tumira meseji kumutengi mushure mekuisa odha yeAvocado.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avocado gamuchira odha nyowani kutumira kune mutengesi',
        'sample' => "Wagamuchira odha yekotapeya:<br> Chitoro: <b>Zita rechitoro chako</b><br> Mutengi: <b>Zita remutengi</b><br> Order: <b>AVO-246</b><br> Selldone",
        'body' => "Wagamuchira odha yeAvocado:\nChitoro: :param1\nMutengi: :param2\nOrder: :param3\nSelldone",
        'icon' => 'sei_kuita_reg',
        'description' => 'Tumira meseji kumuridzi wechitoro uvazivise nezvekugamuchira odha nyowani yeAvocado.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Avocado order yakagadzirira kubhadhara',
        'sample' => "<b>Zita rechitoro chako</b><br> Odha yako yakasimbiswa uye inogona kubhadharwa kuburikidza neinotevera link.<br> Order #: <b>AVO-246</b><br> Link: <b>https://your-domain/avocado</b><br> Selldone",
        'body' => ":param3\nOdha yako yakasimbiswa uye inogona kubhadharwa kuburikidza neinotevera link.\nOrder #: :param2\nKubatanidza: :param1\nSelldone",
        'icon' => 'risiti',
        'description' => 'Tumira meseji ine chinongedzo chekubhadhara kumutengi mushure mekunge mutengesi aisa mutengo uye nekusimbisa yavo Avocado order.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Order yakagadzirira kutumirwa',
        'sample' => "Mhoro <b>Alex</b>, nhau dzakanaka, odha yako yagadzirira kutumirwa.<br>order: <b>SM-123</b>",
        'body' => "Mhoro :param4, nhau dzakanaka, odha yako ikozvino yagadzirira kutumirwa.\nOrder: :param1",
        'icon' => 'local_shipping',
        'description' => 'Tumira meseji kumutengi kuti uvazivise kuti odha yavo yakagadzirira kutumirwa.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Order yakagadzirira kutorwa',
        'sample' => "Mhoro Alex, nhau dzakanaka, odha yako yagadzirira kutorwa.<br>order: <b>SM-123</b>",
        'body' => "Mhoro :param4, nhau dzakanaka, odha yako yagadzirira kutorwa.\nOrder: :param1",
        'icon' => 'share_location',
        'description' => 'Tumira meseji kumutengi uchivazivisa kuti odha yavo yagadzirira kutorwa.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Vendor order yakagadzirira kutumirwa',
        'sample' => "Mhoro <b>Alex</b>, nhau dzakanaka, odha yako yagadzirira kutumirwa.<br>order: <b>SM-123</b>",
        'body' => "Mhoro :param4, nhau dzakanaka, odha yako ikozvino yagadzirira kutumirwa.\nOrder: :param1",
        'icon' => 'local_shipping',
        'description' => 'Tumira meseji kumutengi kuti uvazivise kuti odha yavo yakagadzirira kutumirwa. Ingori mumusika neDirect Shipping Mode uye mhando yekutumira haisi Pickup.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Vendor order yakagadzirira kutora',
        'sample' => "Mhoro Alex, nhau dzakanaka, odha yako yagadzirira kutorwa.<br>order: <b>SM-123</b>",
        'body' => "Mhoro :param4, nhau dzakanaka, odha yako yagadzirira kutorwa.\nOrder: :param1",
        'icon' => 'share_location',
        'description' => 'Tumira meseji kumutengi uchivazivisa kuti odha yavo yagadzirira kutorwa. Ingori mumusika neDirect Shipping Mode uye mhando yekutumira iPickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Order Items Simbiso',
        'sample' => "Mhoro Alex, taongorora odha yako. Heino mamiriro ekusimbisa ezvinhu zvako: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Mhoro :param4, taongorora odha yako. Heino mamiriro ekusimbiswa kwezvinhu zvako:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Inozivisa mutengi nezvezvinhu zviri muhurongwa hwazvo zvakagamuchirwa kana kurambwa nemutengesi.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Vendor Order Items Confirmation',
        'sample' => "Mhoro Alex, taongorora odha yako. Heino mamiriro ekusimbisa ezvinhu zvako: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Mhoro :param4, taongorora odha yako. Heino mamiriro ekusimbiswa kwezvinhu zvako:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Inozivisa mutengi nezvezvinhu zviri muhurongwa hwavo zvakagamuchirwa kana kurambwa nemutengesi.',
    ],



];
