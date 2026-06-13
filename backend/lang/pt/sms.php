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
        'title' => 'Aceitar pagamento',
        'sample' => "Seu pagamento de US\$ 267 foi liquidado com sucesso.<br>Pedido: SM-425<br>Obrigado, <b>Nome da sua loja</b>.<br>Selldone",
        'body' => "Seu pagamento :param2 foi liquidado com sucesso.\nPedido: :param1\nObrigado, :param3.\nSelldone",
        'icon' => 'pagamento',
        'description' => 'Envie uma mensagem ao cliente da loja para informá-lo sobre o pagamento bem-sucedido.',

    ],
    'shop-order-payment-admin' => [
        'title' => 'Aceitar pagamento',
        'sample' => "Novo pagamento de \$ 267 foi liquidado com sucesso.<br>Pedido: SM-425<br>Obrigado, <b>Nome da sua loja</b>.<br>Selldone",
        'body' => "O novo pagamento :param2 foi liquidado com sucesso.\nPedido: :param1\nObrigado, :param3.\nSelldone",
        'icon' => 'pagamento',
        'description' => 'Envie uma mensagem ao proprietário da loja para informá-lo sobre o pagamento bem-sucedido.',

    ],

    'vendor-new-order' => [
        'title' => 'Novo pedido do fornecedor',
        'sample' => "Você recebeu um novo pedido de \$ 200.<br>Pedido: <b>SM-870</b> para <b>Nome do fornecedor</b>.<br>✅ Produto A| SKU100001 |1x<br>✅ Produto B| SKU100002 |1x",
        'body' => "Você recebeu um novo pedido :param2.\nPedido: :param1 para :param3.\n:param4",
        'icon' => 'vitrine',
        'description' => 'Envie uma mensagem ao fornecedor para informá-lo sobre um novo pedido.',
    ],








    'shop-login' => [
        'title' => 'Código de verificação de login',
        'sample' => "Seu código de login é: <b>123456</b><br><b>Nome da sua loja</b><br>Selldone",
        'body' => "Seu código de login é: :param1\n:param2\nSelldone",
        'icon' => 'entrar',
        'description' => 'Envie o código de login ao cliente para efetuar login na loja.',

    ],

    'user-login' => [
        'title' => 'Mensagem de sucesso de login',
        'sample' => "Prezado <b>Nome</b>,<br>Você fez login em sua conta por <b>iPhone 165.250.300.1</b> em <b>5/8/2021 9:14AM</b>.<br>Selldone",
        'body' => "Prezado :param1,\nVocê fez login em sua conta por :param2 em :param3.\nSelldone",
        'icon' => 'system_security_update_good',
        'description' => 'Envie uma mensagem após o cliente efetuar login na loja.',

    ],

    'avocado-order-submit' => [
        'title' => 'Novo pedido de abacate enviado para o comprador',
        'sample' => "<b>Nome da sua loja</b><br>Prezado <b>Seu nome</b>,<br>Recebemos seu pedido e estamos analisando-o.<br>Pedido #: <b>AVO-246</b><br>Selldone",
        'body' => ":param3\nPrezado :param1,\nRecebemos seu pedido e estamos analisando.\nNº do pedido: :param2\nSelldone",
        'icon' => 'verificação de fato',
        'description' => 'Envie uma mensagem ao cliente após fazer um pedido de Abacate.',

    ],


    'avocado-order-submit-seller' => [
        'title' => 'Abacate recebe novo pedido enviado ao vendedor',
        'sample' => "Você recebeu um pedido de abacate:<br>Loja: <b>Nome da sua loja</b><br>Comprador: <b>Nome do comprador</b><br>Pedido: <b>AVO-246</b><br>Selldone",
        'body' => "Você recebeu um pedido de abacate:\nLoja: :param1\nComprador: :param2\nPedido: :param3\nSelldone",
        'icon' => 'como_fazer_reg',
        'description' => 'Envie uma mensagem ao dono da loja para informá-lo sobre o recebimento de um novo pedido de abacate.',

    ],



    'avocado-ready-to-pay' => [
        'title' => 'Pedido de abacate pronto para pagar',
        'sample' => "<b>Nome da sua loja</b><br>Seu pedido foi confirmado e pode ser pago através do seguinte link.<br>Nº do pedido: <b>AVO-246</b><br>Link: <b>https://your-domain/avocado</b><br>Selldone",
        'body' => ":param3\nSeu pedido foi confirmado e pode ser pago através do seguinte link.\nNº do pedido: :param2\nLink: :param1\nSelldone",
        'icon' => 'recibo',
        'description' => 'Envie uma mensagem com o link de pagamento ao cliente depois que o vendedor definir o custo e confirmar o pedido de abacate.',

    ],



    // ━━━━━━━━━━━━━━━━━━━━━━ Order Ready to Ship or Pickup [to customer] ━━━━━━━━━━━━━━━━━━━━━━


    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is not Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-ship' => [
        'title' => 'Pedido pronto para envio',
        'sample' => "Olá <b>Alex</b>, boas notícias, seu pedido agora está pronto para ser enviado.<br>Pedido: <b>SM-123</b>",
        'body' => "Olá :param4, boas notícias, seu pedido agora está pronto para ser enviado.\nPedido: :param1",
        'icon' => 'envio_local',
        'description' => 'Envie uma mensagem ao cliente informando que seu pedido está pronto para ser enviado.',
    ],
    /**
     * In normal shops when the shop owner sets the order status to 'SentOrder', and delivery type is Pickup.
     * Also in marketplaces with 'Collective Shipping Mode' when the shop owner set order status to 'SentOrder'.
     */
    'order-update-status-ready-to-pickup' => [
        'title' => 'Pedido pronto para retirada',
        'sample' => "Olá Alex, boas notícias, seu pedido agora está pronto para ser retirado.<br>Pedido: <b>SM-123</b>",
        'body' => "Olá :param4, boas notícias, seu pedido agora está pronto para ser retirado.\nPedido: :param1",
        'icon' => 'compartilhar_localização',
        'description' => 'Envie uma mensagem ao cliente informando que seu pedido está pronto para retirada.',
    ],



    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is not Pickup.
     */

    'vendor-order-update-status-ready-to-ship' => [
        'title' => 'Pedido do fornecedor pronto para envio',
        'sample' => "Olá <b>Alex</b>, boas notícias, seu pedido agora está pronto para ser enviado.<br>Pedido: <b>SM-123</b>",
        'body' => "Olá :param4, boas notícias, seu pedido agora está pronto para ser enviado.\nPedido: :param1",
        'icon' => 'envio_local',
        'description' => 'Envie uma mensagem ao cliente informando que seu pedido está pronto para ser enviado. Apenas no marketplace com Modo de Envio Direto e o tipo de entrega não é Retirada.',
    ],

    /**
     * In marketplace with 'Direct Shipping Mode', when vendor set order status to 'SentOrder' and delivery type is Pickup.
     */
    'vendor-order-update-status-ready-to-pickup' => [
        'title' => 'Pedido do fornecedor pronto para retirada',
        'sample' => "Olá Alex, boas notícias, seu pedido agora está pronto para ser retirado.<br>Pedido: <b>SM-123</b>",
        'body' => "Olá :param4, boas notícias, seu pedido agora está pronto para ser retirado.\nPedido: :param1",
        'icon' => 'compartilhar_localização',
        'description' => 'Envie uma mensagem ao cliente informando que seu pedido está pronto para retirada. Apenas no marketplace com Modo de Envio Direto e o tipo de entrega é Retirada.',
    ],

    // ━━━━━━━━━━━━━━━━━━━━━━ Order Confirmation Status [to customer] ━━━━━━━━━━━━━━━━━━━━━━
    'order-update-status-confirm' => [
        'title' => 'Confirmação de itens do pedido',
        'sample' => "Olá Alex, analisamos seu pedido. Aqui está o status de confirmação para seus itens:<br>"
            . "Store: <b>Shop Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Olá :param4, analisamos seu pedido. Aqui está o status de confirmação de seus itens:"
            . "Store: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'atribuição_transformada_em',
        'description' => 'Notifica o cliente sobre os itens do pedido que foram aceitos ou rejeitados pelo vendedor.',
    ],

    'vendor-order-update-status-confirm' => [
        'title' => 'Confirmação de itens do pedido do fornecedor',
        'sample' => "Olá Alex, analisamos seu pedido. Aqui está o status de confirmação para seus itens:<br>"
            . "Vendor: <b>Vendor Name</b><br>"
            . "Order ID: <b>SM-123</b><br>"
            . "✅ Product A | SKU100001 | 1x<br>"
            . "❌ Product B | SKU100002 | 1x",
        'body' => "Olá :param4, analisamos seu pedido. Aqui está o status de confirmação de seus itens:"
            . "Vendor: :param3\n"
            . "Order ID: :param1\n"
            . ":param5",
        'icon' => 'atribuição_transformada_em',
        'description' => 'Notifica o cliente sobre os itens do pedido que foram aceitos ou rejeitados pelo fornecedor.',
    ],



];
