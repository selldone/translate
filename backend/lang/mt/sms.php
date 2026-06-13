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
        'title' => 'Aċċetta ħlas',
        'sample' => "Il-ħlas tiegħek ta' 267\$ ġie saldat b'suċċess.<br> Ordni: SM-425<br> Grazzi, <b>Isem il-maħżen tiegħek</b> .<br> Selldone",
        'body' => "Il-ħlas :param2 tiegħek ġie ssaldat b'suċċess.\nOrdni: :param1\nGrazzi, :param3.\nSelldone",
        'icon' => 'ħlas',
        'description' => 'Ibgħat messaġġ lill-klijent tal-ħanut biex tinforma dwar il-ħlas b\'suċċess.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Aċċetta ħlas',
        'sample' => "Ħlas ġdid ta' 267\$ issetilja b'suċċess.<br> Ordni: SM-425<br> Grazzi, <b>Isem il-maħżen tiegħek</b> .<br> Selldone",
        'body' => "Ħlas :param2 ġdid ġie regolat b'suċċess.\nOrdni: :param1\nGrazzi, :param3.\nSelldone",
        'icon' => 'ħlas',
        'description' => 'Ibgħat messaġġ lis-sid tal-ħanut biex tinformahom dwar il-ħlas b\'suċċess.',

    ],

    'vendor-new-order' => [
        'title' => 'Ordni Ġdid tal-Bejjiegħ',
        'sample' => "Irċevejt ordni ġdida ta' \$200.<br>Ordni: <b>SM-870</b> għal <b>Isem tal-bejjiegħ</b>.<br>✅ Prodott A| SKU100001 |1x<br>✅ Prodott B| SKU100002 |1x",
        'body' => "Irċevejt ordni :param2 ġdida.\nOrdni: :param1 għal :param3.\n:param4",
        'icon' => 'storefront',
        'description' => 'Ibgħat messaġġ lill-bejjiegħ biex tinformahom dwar ordni ġdida.',
    ],








    'shop-login' => [
        'title' => 'Kodiċi ta\' verifika tal-login',
        'sample' => "Il-kodiċi tal-login tiegħek huwa: <b>123456</b><br> <b>L-isem tal-maħżen tiegħek</b><br> Selldone",
        'body' => "Il-kodiċi tal-login tiegħek huwa: :param1\n:param2\nSelldone",
        'icon' => 'login',
        'description' => 'Ibgħat il-kodiċi tal-login lill-klijent biex jidħol fil-ħanut.',

    ],

    'user-login' => [
        'title' => 'Messaġġ ta\' Suċċess tal-Loggja',
        'sample' => "Għażiż <b>Isem</b> ,<br> Dħalt fil-kont tiegħek mill <b>-iPhone 165.250.300.1</b> fi <b>5/8/2021 9:14AM</b> .<br> Selldone",
        'body' => "Għażiż :param1,\nDħalt fil-kont tiegħek minn :param2 fi :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Ibgħat messaġġ wara l-login tal-klijent fil-ħanut.',

    ],

    'avocado-order-submit' => [
        'title' => 'Avocado ordni ġdida sottomessa tibgħat lix-xerrej',
        'sample' => "<b>L-isem tal-maħżen tiegħek</b><br> Għażiż <b>ismek</b> ,<br> Irċevejna l-ordni tiegħek u qed nirreveduha.<br> Ordni #: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nGħażiż :param1,\nIrċevejna l-ordni tiegħek u qed nirreveduha.\nOrdni #: :param2\nSelldone",
        'icon' => 'fact_check',
        'description' => 'Ibgħat messaġġ lill-klijent wara li tagħmel ordni ta \'Avocado.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Avokado tirċievi ordni ġdida tibgħat lill-bejjiegħ',
        'sample' => "Irċevejt ordni ta' avokado:<br> Aħżen: <b>L-isem tal-maħżen tiegħek</b><br> Xerrej: <b>Isem ix-xerrej</b><br> Ordni: <b>AVO-246</b><br> Selldone",
        'body' => "Irċevejt ordni ta' Avocado:\nAħżen: :param1\nXerrej: :param2\nOrdni: :param3\nSelldone",
        'icon' => 'kif_reg',
        'description' => 'Ibgħat messaġġ lis-sid tal-ħanut biex tinformahom dwar ir-riċeviment ta\' ordni ġdida ta\' Avocado.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Ordni tal-avokado lesta biex tħallas',
        'sample' => "<b>Isem tal-maħżen tiegħek</b><br>L-ordni tiegħek ġiet ikkonfermata u tista' titħallas permezz tal-link li ġej.<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nL-ordni tiegħek ġiet ikkonfermata u tista' titħallas permezz tal-link li ġej.\nOrdni #: :param2\nLink: :param1\nSelldone",
        'icon' => 'irċevuta',
        'description' => 'Ibgħat messaġġ bil-link tal-ħlas lill-klijent wara li l-bejjiegħ stabbilixxa l-ispiża u jikkonferma l-ordni tal-Avocado tiegħu.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Ordni lesta għall-vapur',
        'sample' => "Hi <b>Alex</b>, aħbar tajba, l-ordni tiegħek issa hija lesta biex tiġi ttrasportata.<br>Order: <b>SM-123</b>",
        'body' => "Hi :param4, aħbar tajba, l-ordni tiegħek issa hija lesta biex tintbagħat.\nOrdni: :param1",
        'icon' => 'local_shipping',
        'description' => 'Ibgħat messaġġ lill-klijent biex jinfurmah li l-ordni tagħhom hija lesta biex tintbagħat.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Ordni lesti biex jittellgħu',
        'sample' => "Hi Alex, aħbar tajba, l-ordni tiegħek issa hija lesta biex tinġabar.<br>Ordni: <b>SM-123</b>",
        'body' => "Hi :param4, aħbar tajba, l-ordni tiegħek issa hija lesta biex tinġabar.\nOrdni: :param1",
        'icon' => 'share_location',
        'description' => 'Ibgħat messaġġ lill-klijent biex jinfurmah li l-ordni tiegħu hija lesta biex tinġabar.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Ordni tal-bejjiegħ lesta għall-vapur',
        'sample' => "Hi <b>Alex</b>, aħbar tajba, l-ordni tiegħek issa hija lesta biex tiġi ttrasportata.<br>Order: <b>SM-123</b>",
        'body' => "Hi :param4, aħbar tajba, l-ordni tiegħek issa hija lesta biex tintbagħat.\nOrdni: :param1",
        'icon' => 'local_shipping',
        'description' => 'Ibgħat messaġġ lill-klijent biex jinfurmah li l-ordni tagħhom hija lesta biex tintbagħat. Biss fis-suq bil-Modalità ta\' Trasport Dirett u t-tip ta\' kunsinna mhuwiex Pickup.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Ordni tal-bejjiegħ lest biex jittellgħu',
        'sample' => "Hi Alex, aħbar tajba, l-ordni tiegħek issa hija lesta biex tinġabar.<br>Ordni: <b>SM-123</b>",
        'body' => "Hi :param4, aħbar tajba, l-ordni tiegħek issa hija lesta biex tinġabar.\nOrdni: :param1",
        'icon' => 'share_location',
        'description' => 'Ibgħat messaġġ lill-klijent biex jinfurmah li l-ordni tiegħu hija lesta biex tinġabar. Biss fis-suq bil-Modalità ta\' Trasport Dirett u t-tip ta\' kunsinna huwa Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Konferma tal-Oġġetti tal-Ordni',
        'sample' => "Hello Alex, irrevejna l-ordni tiegħek. Hawn hu l-istatus ta 'konferma għall-oġġetti tiegħek: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hello :param4, irrevejna l-ordni tiegħek. Hawn hu l-istatus ta' konferma għall-oġġetti tiegħek:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Javża lill-klijent dwar l-oġġetti fl-ordni tiegħu li ġew aċċettati jew miċħuda mill-bejjiegħ.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Konferma tal-Oġġetti tal-Ordni tal-Bejjiegħa',
        'sample' => "Hello Alex, irrevejna l-ordni tiegħek. Hawn hu l-istatus ta 'konferma għall-oġġetti tiegħek: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Hello :param4, irrevejna l-ordni tiegħek. Hawn hu l-istatus ta' konferma għall-oġġetti tiegħek:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'Javża lill-klijent dwar l-oġġetti fl-ordni tiegħu li ġew aċċettati jew miċħuda mill-bejjiegħ.',
    ],



];
