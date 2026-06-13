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
        'title' => 'ຍອມຮັບການຈ່າຍເງິນ',
        'sample' => "ການຈ່າຍເງິນ 267 ໂດລາຂອງທ່ານຖືກແກ້ໄຂສຳເລັດແລ້ວ.<br>Order: SM-425<br>Thanks, <b> ຊື່ຮ້ານຂອງທ່ານ</b>.<br>Selldone",
        'body' => "ການຈ່າຍເງິນ :param2 ຂອງທ່ານໄດ້ສຳເລັດແລ້ວ.\nຄໍາສັ່ງ: :param1\nຂອບໃຈ, :param3.\nSelldone",
        'icon' => 'ການຈ່າຍເງິນ',
        'description' => 'ສົ່ງຂໍ້ຄວາມຫາລູກຄ້າຂອງຮ້ານຄ້າເພື່ອແຈ້ງກ່ຽວກັບການຈ່າຍເງິນທີ່ປະສົບຜົນສໍາເລັດ.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'ຍອມຮັບການຈ່າຍເງິນ',
        'sample' => "ການຈ່າຍເງິນໃໝ່ \$267 ຖືກແກ້ໄຂສຳເລັດແລ້ວ.<br>Order: SM-425<br>Thanks, <b> ຊື່ຮ້ານຂອງທ່ານ</b>.<br>Selldone",
        'body' => "ການຈ່າຍເງິນ :param2 ໃໝ່ໄດ້ຕົກລົງສຳເລັດແລ້ວ.\nຄໍາສັ່ງ: :param1\nຂອບໃຈ, :param3.\nSelldone",
        'icon' => 'ການຈ່າຍເງິນ',
        'description' => 'ສົ່ງຂໍ້ຄວາມໄປຫາເຈົ້າຂອງຮ້ານເພື່ອແຈ້ງໃຫ້ພວກເຂົາຮູ້ກ່ຽວກັບການຈ່າຍເງິນທີ່ປະສົບຜົນສໍາເລັດ.',

    ],

    'vendor-new-order' => [
        'title' => 'ຜູ້ຂາຍໃຫມ່ສັ່ງ',
        'sample' => "ທ່ານໄດ້ຮັບຄໍາສັ່ງໃຫມ່ \$200.<br>QOrder: <b>SM-870</b> ສໍາລັບ <b>Vendor name</b>.<br>✅ ສິນຄ້າ A| SKU100001 |1x<br>✅ ສິນຄ້າ B| SKU100002 |1x",
        'body' => "ທ່ານໄດ້ຮັບຄໍາສັ່ງໃຫມ່ :param2.\nຄໍາສັ່ງ: :param1 ສໍາລັບ :param3.\n:param4",
        'icon' => 'ໜ້າຮ້ານ',
        'description' => 'ສົ່ງຂໍ້ຄວາມຫາຜູ້ຂາຍເພື່ອແຈ້ງໃຫ້ພວກເຂົາຮູ້ກ່ຽວກັບຄໍາສັ່ງໃຫມ່.',
    ],








    'shop-login' => [
        'title' => 'ລະຫັດຢືນຢັນການເຂົ້າສູ່ລະບົບ',
        'sample' => "ລະ​ຫັດ​ເຂົ້າ​ສູ່​ລະ​ບົບ​ຂອງ​ທ່ານ​ແມ່ນ​: <b>123456</b><br><b> ຊື່​ຮ້ານ​ຂອງ​ທ່ານ</b><br>Selldone",
        'body' => "ລະຫັດເຂົ້າສູ່ລະບົບຂອງທ່ານແມ່ນ: :param1\n:param2\nSelldone",
        'icon' => 'ເຂົ້າສູ່ລະບົບ',
        'description' => 'ສົ່ງລະຫັດເຂົ້າສູ່ລະບົບໃຫ້ລູກຄ້າເພື່ອເຂົ້າສູ່ລະບົບຮ້ານ.',

    ],

    'user-login' => [
        'title' => 'ເຂົ້າສູ່ລະບົບຂໍ້ຄວາມສົບຜົນສໍາເລັດ',
        'sample' => "ເຖິງ <b>Name</b>, <br> ເຈົ້າໄດ້ເຂົ້າສູ່ລະບົບບັນຊີຂອງທ່ານໂດຍ <b>iPhone 165.250.300.1</b> ທີ່ <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "ສະບາຍດີ :param1,\nທ່ານໄດ້ເຂົ້າສູ່ລະບົບບັນຊີຂອງທ່ານໂດຍ :param2 ທີ່ :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'ສົ່ງຂໍ້ຄວາມຫຼັງຈາກລູກຄ້າເຂົ້າສູ່ລະບົບຮ້ານ.',

    ],

    'avocado-order-submit' => [
        'title' => 'ໃບສັ່ງໃໝ່ອາໂວກາໂດສົ່ງໃຫ້ຜູ້ຊື້',
        'sample' => "<b> ຊື່ຮ້ານຂອງທ່ານ</b><br>Dear <b>Your name</b>,<br> ພວກເຮົາໄດ້ຮັບຄໍາສັ່ງຂອງທ່ານແລະພວກເຮົາກໍາລັງທົບທວນຄືນມັນ.<br>Order #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nສະບາຍດີ :param1,\nພວກເຮົາໄດ້ຮັບຄໍາສັ່ງຂອງທ່ານແລະພວກເຮົາກໍາລັງທົບທວນຄືນມັນ.\nຄໍາສັ່ງ #: :param2\nSelldone",
        'icon' => 'fact_check',
        'description' => 'ສົ່ງຂໍ້ຄວາມຫາລູກຄ້າຫຼັງຈາກສັ່ງອາໂວກາໂດ.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'ໝາກອາໂວກາໂດຮັບໃບສັ່ງໃໝ່ສົ່ງໃຫ້ຜູ້ຂາຍ',
        'sample' => "ທ່ານໄດ້ຮັບຄໍາສັ່ງອາໂວກາໂດ: <br>Store: <b> ຊື່ຮ້ານຂອງທ່ານ</b><br>Buyer: <b> ຊື່ຜູ້ຊື້</b><br>Order: <b>AVO-246</b><br>Selldone",
        'body' => "ທ່ານໄດ້ຮັບຄໍາສັ່ງ Avocado:\nຮ້ານ: :param1\nຜູ້ຊື້: :param2\nຄໍາສັ່ງ: :param3\nSelldone",
        'icon' => 'how_to_reg',
        'description' => 'ສົ່ງຂໍ້ຄວາມຫາເຈົ້າຂອງຮ້ານເພື່ອແຈ້ງໃຫ້ພວກເຂົາຮູ້ວ່າໄດ້ຮັບຄໍາສັ່ງໃຫມ່ຂອງອາໂວກາໂດ.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'ສັ່ງອາໂວຄາໂດພ້ອມຈ່າຍ',
        'sample' => "<b> Your store name</b><br> ຄໍາສັ່ງຂອງທ່ານໄດ້ຮັບການຢືນຢັນແລະສາມາດຊໍາລະຜ່ານ link ຕໍ່ໄປນີ້.<br>Order #: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nຄໍາສັ່ງຂອງທ່ານໄດ້ຮັບການຢືນຢັນແລະສາມາດຈ່າຍຜ່ານການເຊື່ອມຕໍ່ຕໍ່ໄປນີ້.\nຄໍາສັ່ງ #: :param2\nການເຊື່ອມຕໍ່: :param1\nSelldone",
        'icon' => 'ໃບຮັບເງິນ',
        'description' => 'ສົ່ງຂໍ້ຄວາມທີ່ມີການເຊື່ອມຕໍ່ການຈ່າຍເງິນໃຫ້ກັບລູກຄ້າຫຼັງຈາກຜູ້ຂາຍໄດ້ກໍານົດຄ່າໃຊ້ຈ່າຍແລະຢືນຢັນການສັ່ງຊື້ Avocado ຂອງພວກເຂົາ.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'ສັ່ງເລີຍ ພ້ອມສົ່ງ',
        'sample' => "ສະບາຍດີ <b>Alex</b>, ຂ່າວດີ, ຄໍາສັ່ງຂອງທ່ານແມ່ນກຽມພ້ອມທີ່ຈະສົ່ງ.<br>Order: <b>SM-123</b>",
        'body' => "ສະບາຍດີ :param4, ຂ່າວດີ, ຄໍາສັ່ງຂອງທ່ານແມ່ນກຽມພ້ອມທີ່ຈະສົ່ງ.\nຄໍາສັ່ງ: :param1",
        'icon' => 'local_shipping',
        'description' => 'ສົ່ງຂໍ້ຄວາມຫາລູກຄ້າເພື່ອແຈ້ງໃຫ້ພວກເຂົາຮູ້ວ່າຄໍາສັ່ງຂອງພວກເຂົາແມ່ນກຽມພ້ອມທີ່ຈະສົ່ງ.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'ສັ່ງໄດ້ ພ້ອມສົ່ງ',
        'sample' => "ສະບາຍດີ Alex, ຂ່າວດີ, ການສັ່ງຊື້ຂອງທ່ານຕອນນີ້ພ້ອມທີ່ຈະຮັບແລ້ວ.<br>Order: <b>SM-123</b>",
        'body' => "ສະບາຍດີ :param4, ຂ່າວດີ, ການສັ່ງຊື້ຂອງທ່ານຕອນນີ້ພ້ອມທີ່ຈະຮັບແລ້ວ.\nຄໍາສັ່ງ: :param1",
        'icon' => 'share_ສະຖານທີ່',
        'description' => 'ສົ່ງຂໍ້ຄວາມຫາລູກຄ້າເພື່ອແຈ້ງໃຫ້ພວກເຂົາຮູ້ວ່າຄໍາສັ່ງຂອງພວກເຂົາແມ່ນກຽມພ້ອມທີ່ຈະຮັບ.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'ແມ່ຄ້າສັ່ງເລີຍ ພ້ອມສົ່ງ',
        'sample' => "ສະບາຍດີ <b>Alex</b>, ຂ່າວດີ, ຄໍາສັ່ງຂອງທ່ານແມ່ນກຽມພ້ອມທີ່ຈະສົ່ງ.<br>Order: <b>SM-123</b>",
        'body' => "ສະບາຍດີ :param4, ຂ່າວດີ, ຄໍາສັ່ງຂອງທ່ານແມ່ນກຽມພ້ອມທີ່ຈະສົ່ງ.\nຄໍາສັ່ງ: :param1",
        'icon' => 'local_shipping',
        'description' => 'ສົ່ງຂໍ້ຄວາມຫາລູກຄ້າເພື່ອແຈ້ງໃຫ້ພວກເຂົາຮູ້ວ່າຄໍາສັ່ງຂອງພວກເຂົາແມ່ນກຽມພ້ອມທີ່ຈະສົ່ງ. ພຽງແຕ່ຢູ່ໃນຕະຫຼາດທີ່ມີຮູບແບບການຂົນສົ່ງໂດຍກົງແລະປະເພດການຈັດສົ່ງບໍ່ແມ່ນ Pickup.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'ແມ່ຄ້າສັ່ງເລີຍ ພ້ອມສົ່ງ',
        'sample' => "ສະບາຍດີ Alex, ຂ່າວດີ, ການສັ່ງຊື້ຂອງທ່ານຕອນນີ້ພ້ອມທີ່ຈະຮັບແລ້ວ.<br>Order: <b>SM-123</b>",
        'body' => "ສະບາຍດີ :param4, ຂ່າວດີ, ການສັ່ງຊື້ຂອງທ່ານຕອນນີ້ພ້ອມທີ່ຈະຮັບແລ້ວ.\nຄໍາສັ່ງ: :param1",
        'icon' => 'share_ສະຖານທີ່',
        'description' => 'ສົ່ງຂໍ້ຄວາມຫາລູກຄ້າເພື່ອແຈ້ງໃຫ້ພວກເຂົາຮູ້ວ່າຄໍາສັ່ງຂອງພວກເຂົາແມ່ນກຽມພ້ອມທີ່ຈະຮັບ. ພຽງແຕ່ຢູ່ໃນຕະຫຼາດທີ່ມີຮູບແບບການຂົນສົ່ງໂດຍກົງແລະປະເພດການຈັດສົ່ງແມ່ນ Pickup.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'ຢືນຢັນລາຍການສັ່ງຊື້',
        'sample' => "ສະບາຍດີ Alex, ພວກເຮົາໄດ້ທົບທວນຄືນຄໍາສັ່ງຂອງທ່ານ. ນີ້ແມ່ນສະຖານະການຢືນຢັນສໍາລັບລາຍການຂອງທ່ານ: <br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "ສະບາຍດີ :param4, ພວກເຮົາໄດ້ທົບທວນຄືນຄໍາສັ່ງຂອງທ່ານ. ນີ້ແມ່ນສະຖານະການຢືນຢັນສຳລັບລາຍການຂອງທ່ານ:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'ແຈ້ງລູກຄ້າກ່ຽວກັບລາຍການໃນຄໍາສັ່ງຂອງພວກເຂົາທີ່ໄດ້ຮັບການຍອມຮັບຫຼືປະຕິເສດໂດຍຜູ້ຂາຍ.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'ການຢືນຢັນລາຍການສັ່ງຊື້ຂອງຜູ້ຂາຍ',
        'sample' => "ສະບາຍດີ Alex, ພວກເຮົາໄດ້ທົບທວນຄືນຄໍາສັ່ງຂອງທ່ານ. ນີ້ແມ່ນສະຖານະການຢືນຢັນສໍາລັບລາຍການຂອງທ່ານ: <br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "ສະບາຍດີ :param4, ພວກເຮົາໄດ້ທົບທວນຄືນຄໍາສັ່ງຂອງທ່ານ. ນີ້ແມ່ນສະຖານະການຢືນຢັນສຳລັບລາຍການຂອງທ່ານ:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'assignment_turned_in',
        'description' => 'ແຈ້ງລູກຄ້າກ່ຽວກັບລາຍການໃນຄໍາສັ່ງຂອງພວກເຂົາທີ່ໄດ້ຮັບການຍອມຮັບຫຼືປະຕິເສດໂດຍຜູ້ຂາຍ.',
    ],



];
