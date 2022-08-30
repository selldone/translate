<?php 

 return [
     "shop-order-payment" => [
     "title" => "Aceitar pagamento",
     "sample" => "Seu pagamento de $ 267 foi liquidado com sucesso.<br> Pedido: SM-425<br> Obrigado, <b>nome da sua loja</b> .<br> Vendido",
     "body" => "Seu pagamento :param2 foi liquidado com sucesso. Ordem: :param1 Obrigado, :param3. Vendido",
],
     "shop-order-payment-admin" => [
     "title" => "Aceitar pagamento",
     "sample" => "Novo pagamento de 267$ liquidado com sucesso.<br> Pedido: SM-425<br> Obrigado, <b>nome da sua loja</b> .<br> Vendido",
     "body" => "Novo pagamento :param2 liquidado com sucesso. Ordem: :param1 Obrigado, :param3. Vendido",
],
     "shop-login" => [
     "title" => "Código de verificação de login",
     "sample" => "Seu código de acesso é: <b>123456</b><br> <b>Nome da sua loja</b><br> Vendido",
     "body" => "Seu código de login é: :param1 :param2 Selldone",
],
     "user-login" => [
     "title" => "Mensagem de sucesso de login",
     "sample" => "Caro <b>Nome</b> ,<br> Você fez login em sua conta pelo <b>iPhone 165.250.300.1</b> em <b>08/05/2021 09:14</b> .<br> Vendido",
     "body" => "Caro :param1, Você fez login na sua conta por :param2 em :param3. Vendido",
],
     "avocado-order-submit" => [
     "title" => "Novo pedido de abacate enviado para o comprador",
     "sample" => "<b>Nome da sua loja</b><br> Prezado <b>Seu nome</b> ,<br> Recebemos seu pedido e estamos analisando.<br> Nº do pedido: <b>AVO-246</b><br> Vendido",
     "body" => ":param3 Prezado :param1, Recebemos seu pedido e estamos analisando. Nº do pedido: :param2 Selldone",
],
     "avocado-order-submit-seller" => [
     "title" => "Abacate recebe novo pedido enviado ao vendedor",
     "sample" => "Você recebeu um pedido de abacate:<br> Loja: <b>o nome da sua loja</b><br> Comprador: <b>Nome</b> do comprador<br> Pedido: <b>AVO-246</b><br> Vendido",
     "body" => "Você recebeu um pedido de abacate: Loja: :param1 Comprador: :param2 Pedido: :param3 Vendido",
],
     "avocado-ready-to-pay" => [
     "title" => "Pedido de abacate pronto para pagar",
     "sample" => "<b>Nome da sua loja</b><br> Seu pedido foi confirmado e pode ser pago através do link a seguir.<br> Nº do pedido: <b>AVO-246</b><br> Link: <b>https://seu-domínio/abacate</b><br> Vendido",
     "body" => ":param3 Seu pedido foi confirmado e pode ser pago através do link a seguir. Nº do pedido: :param2 Link: :param1 Vendido",
],
];