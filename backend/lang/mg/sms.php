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
        'title' => 'Manaiky fandoavam-bola',
        'sample' => "Vita soa aman-tsara ny fandoavam-bola 267\$.<br> Fitsipika: SM-425<br> Misaotra, <b>ny anaran'ny fivarotanao</b> .<br> Selldone",
        'body' => "Voalamina soa aman-tsara ny fandoavanao :param2.\nAmpahany : :param1\nMisaotra, :param3.\nSelldone\nSary",
        'icon' => 'fandoavam-bola',
        'description' => 'Mandefasa hafatra amin\'ny mpanjifa miantsena mba hampahafantarana ny fandoavam-bola mahomby.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Manaiky fandoavam-bola',
        'sample' => "Vita soa aman-tsara ny fandoavam-bola vaovao 267\$.<br> Fitsipika: SM-425<br> Misaotra, <b>ny anaran'ny fivarotanao</b> .<br> Selldone",
        'body' => "Ny fandoavam-bola :param2 vaovao dia vita soa aman-tsara.\nAmpahany : :param1\nMisaotra, :param3.\nSelldone",
        'icon' => 'fandoavam-bola',
        'description' => 'Mandefasa hafatra any amin\'ny tompon\'ny fivarotana mba hampahafantarana azy ireo momba ny fandoavam-bola mahomby.',

    ],

    'vendor-new-order' => [
        'title' => 'Mpivarotra New Order',
        'sample' => "Nahazo baiko \$200 vaovao ianao.<br>Order: <b>SM-870</b> ho an'ny <b>Anaran'ny mpivarotra</b>.<br>✅ Product A| SKU100001 |1x<br>✅ Vokatra B| SKU100002 |1x",
        'body' => "Nahazo baiko :param2 vaovao ianao.\nOrder: :param1 ho an'ny :param3.\n:param4\nSary",
        'icon' => 'trano fivarotana
Sary',
        'description' => 'Mandefa hafatra amin\'ny mpivarotra mba hampahafantarana azy ireo ny kaomandy vaovao.',
    ],








    'shop-login' => [
        'title' => 'Kaody fanamarinana fidirana',
        'sample' => "Ny kaodim-paositra dia: <b>123456</b><br> <b>Anaran'ny fivarotanao</b><br> Selldone",
        'body' => "Ny kaody fidiranao dia: :param1\n:param2\nSelldone\nSary",
        'icon' => 'fidirana
Sary',
        'description' => 'Alefaso ny kaody fidirana amin\'ny mpanjifa mba hidirana ao amin\'ny fivarotana.',

    ],

    'user-login' => [
        'title' => 'Hafatra Fahombiazana Login',
        'sample' => "<b>Anarana</b> malala,<br> Niditra tamin'ny kaontinao tamin'ny <b>iPhone 165.250.300.1 ianao</b> tamin'ny <b>5/8/2021 9:14 maraina</b> .<br> Selldone",
        'body' => "Ry :param1,\nNiditra tao amin'ny kaontinao ianao tamin'ny alàlan'ny :param2 amin'ny :param3.\nSelldone\nSary",
        'icon' => 'system_security_update_good
Sary',
        'description' => 'Mandefasa hafatra aorian\'ny fidiran\'ny mpanjifa amin\'ny fivarotana.',

    ],

    'avocado-order-submit' => [
        'title' => 'Alefaso any amin\'ny mpividy ny kaomandy vaovao avocado',
        'sample' => "<b>Anaran'ny fivarotanao</b><br> <b>Ny anaranao</b> malala,<br> Voaray ny kaomandinao ary eo am-pandinihana izany izahay.<br> Laharana #: <b>AVO-246</b><br> Selldone",
        'body' => ":param3\nRy :param1,\nVoaray ny kaomandinao ary eo am-pandinihana izany izahay.\n#: :param2\nSelldone\nSary",
        'icon' => 'fanamarinana_zava-misy',
        'description' => 'Mandefa hafatra amin\'ny mpanjifa rehefa avy nametraka ny kaomandy avocado.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Alefaso any amin\'ny mpivarotra ny avokado',
        'sample' => "Nahazo baiko zavokà ianao:<br> Fivarotana: <b>Anaran'ny fivarotanao</b><br> Mpividy: <b>Anaran'ny mpividy</b><br> Fibaikoana: <b>AVO-246</b><br> Selldone",
        'body' => "Nahazo baiko avocado ianao:\nFivarotana: :param1\nMpividy: :param2\nAmpahany : :param3\nSelldone\nSary",
        'icon' => 'ahoana_ny_reg',
        'description' => 'Mandefa hafatra any amin\'ny tompon\'ny fivarotana mba hampahafantarana azy ireo momba ny fandraisana ny kaomandy avocado vaovao.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Kaomandy zavokà vonona handoa',
        'sample' => "<b>Anaran'ny fivarotanao</b><br> Efa voamarina ny kaomandinao ary azo aloa amin'ny rohy manaraka.<br> Laharana #: <b>AVO-246</b><br> Rohy: <b>https://your-domain/avocado</b><br> Selldone",
        'body' => ":param3\nEfa voamarina ny kaomandinao ary azo aloa amin'ny rohy manaraka.\n#: :param2\nIreo singa mifandraika amin'ny :param1\nSelldone\nSary",
        'icon' => 'rosia
Sary',
        'description' => 'Mandefa hafatra miaraka amin\'ny rohy fandoavam-bola amin\'ny mpanjifa aorian\'ny nametrahan\'ny mpivarotra ny vidiny ary hamafiso ny baikon\'ny zavokà.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Kaomandy vonona halefa
Sary',
        'sample' => "Salama <b>Alex</b>, vaovao tsara, efa vonona ny halefa ny baikonao.<br>Order: <b>SM-123</b>\nSary",
        'body' => "Salama :param4, vaovao tsara, efa vonona ny halefa ny baikonao.\nAmpahany : :param1\nSary",
        'icon' => 'local_shipping',
        'description' => 'Alefaso ny hafatra ho an\'ny mpanjifa mba hampahafantatra azy ireo fa efa vonona ny halefany.
Sary',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Kaomandy vonona alaina
Sary',
        'sample' => "Salama Alex, vaovao mahafaly, efa vonona ny alaina ny baikonao.<br>Order: <b>SM-123</b>\nSary",
        'body' => "Salama :param4, vaovao tsara, efa vonona ny alaina ny baikonao.\nAmpahany : :param1\nSary",
        'icon' => 'mizara_toerana',
        'description' => 'Alefaso ny hafatra ho an\'ny mpanjifa mba hampahafantatra azy ireo fa efa vonona ny alaina ny komandin\'izy ireo.
Sary',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Komandin\'ny mpivarotra vonona halefa
Ampahany',
        'sample' => "Salama <b>Alex</b>, vaovao tsara, efa vonona ny halefa ny baikonao.<br>Order: <b>SM-123</b>\nSary",
        'body' => "Salama :param4, vaovao tsara, efa vonona ny halefa ny baikonao.\nAmpahany : :param1\nSary",
        'icon' => 'local_shipping',
        'description' => 'Alefaso ny hafatra ho an\'ny mpanjifa mba hampahafantatra azy ireo fa efa vonona ny halefany. Eny an-tsena fotsiny miaraka amin\'ny Direct Shipping Mode sy ny karazana fanaterana dia tsy Pickup.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Komandin\'ny mpivarotra vonona alaina
Sary',
        'sample' => "Salama Alex, vaovao mahafaly, efa vonona ny alaina ny baikonao.<br>Order: <b>SM-123</b>\nSary",
        'body' => "Salama :param4, vaovao tsara, efa vonona ny alaina ny baikonao.\nAmpahany : :param1\nSary",
        'icon' => 'mizara_toerana',
        'description' => 'Alefaso ny hafatra ho an\'ny mpanjifa mba hampahafantatra azy ireo fa efa vonona ny alaina ny komandin\'izy ireo. Eny an-tsena fotsiny miaraka amin\'ny Direct Shipping Mode sy ny karazana fanaterana dia Pickup.
Sary',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Fanamafisana ny entana',
        'sample' => "Salama Alex, nandinika ny kaomandinao izahay. Ity ny sata fanamafisana ny entanao:<br>\nSary"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Salama :param4, efa nandinika ny baikonao izahay. Ity ny satan'ny fanamafisana ny entanao:\n\nSary"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'asa_mivadika_miditra
Sary',
        'description' => 'Mampandre ny mpanjifa momba ny entana ao amin\'ny baikony izay nekena na nolavin\'ny mpivarotra.
Sary',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Fanamafisana ny entana amin\'ny mpivarotra
Sary',
        'sample' => "Salama Alex, nandinika ny kaomandinao izahay. Ity ny sata fanamafisana ny entanao:<br>\nSary"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Salama :param4, efa nandinika ny baikonao izahay. Ity ny satan'ny fanamafisana ny entanao:\n\nSary"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'asa_mivadika_miditra
Sary',
        'description' => 'Mampandre ny mpanjifa momba ny entana ao amin\'ny baikony izay nekena na nolavin\'ny mpivarotra.',
    ],



];
