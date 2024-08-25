<?php 

 return [
     "shop-order-payment" => [
     "title" => "Aceptar o pago",
     "sample" => "O teu pago de 267 $ liquidouse correctamente.<br> Orde: SM-425<br> Grazas, <b>o nome da túa tenda</b> .<br> Vendo",
     "body" => "O teu pago :param2 liquidouse correctamente. Orde: :param1 Grazas, :param3. Vendo",
     "description" => "Envía unha mensaxe ao cliente da tenda para informarlle sobre o pago exitoso.",
],
     "shop-order-payment-admin" => [
     "title" => "Aceptar o pago",
     "sample" => "O novo pago de 267 $ liquidouse correctamente.<br> Orde: SM-425<br> Grazas, <b>o nome da túa tenda</b> .<br> Vendo",
     "body" => "Novo pago :param2 liquidado correctamente. Orde: :param1 Grazas, :param3. Vendo",
     "description" => "Envía unha mensaxe ao propietario da tenda para informarlle sobre o pago exitoso.",
],
     "vendor-new-order" => [
     "title" => "Vendedor Novo Orde",
     "sample" => "Recibiches un novo pedido de 200 $.<br> Pedido: SM-870 do <b>nome do vendedor</b> .",
     "body" => "Recibiches un novo pedido :param2. Orde: :param1 para :param3.",
     "description" => "Envía unha mensaxe ao vendedor para informarlle sobre un novo pedido.",
],
     "shop-login" => [
     "title" => "Código de verificación de inicio de sesión",
     "sample" => "O teu código de inicio de sesión é: <b>123456</b><br> <b>O nome da túa tenda</b><br> Vendo",
     "body" => "O teu código de inicio de sesión é: :param1 :param2 Selldone",
     "description" => "Envía o código de inicio de sesión ao cliente para iniciar sesión na tenda.",
],
     "user-login" => [
     "title" => "Mensaxe de éxito de inicio de sesión",
     "sample" => "Estimado <b>Nome</b> ,<br> Iniciaches sesión na túa conta mediante o <b>iPhone 165.250.300.1</b> o 08/05/2021 ás <b>09:14</b> .<br> Vendo",
     "body" => "Estimado :param1, Iniciaches sesión na túa conta por :param2 en :param3. Vendo",
     "description" => "Envía unha mensaxe despois de que o cliente inicie sesión na tenda.",
],
     "avocado-order-submit" => [
     "title" => "Novo pedido de aguacate enviado enviar ao comprador",
     "sample" => "<b>O nome da túa tenda</b><br> Querido <b>o teu nome</b> ,<br> Recibimos o teu pedido e estamos revisándoo.<br> Número de pedido: <b>AVO-246</b><br> Vendo",
     "body" => ":param3 Estimado :param1, Recibimos o teu pedido e estamos revisándoo. Número de pedido: :param2 Selldone",
     "description" => "Envía unha mensaxe ao cliente despois de facer un pedido de aguacate.",
],
     "avocado-order-submit-seller" => [
     "title" => "O aguacate recibe un novo pedido enviado ao vendedor",
     "sample" => "Recibiches un pedido de aguacate:<br> Tenda: <b>o nome da túa tenda</b><br> Comprador: <b>nome do comprador</b><br> Orde: <b>AVO-246</b><br> Vendo",
     "body" => "Recibiches un pedido de aguacate: Tenda: :param1 Comprador: :param2 Pedido: :param3 Selldone",
     "description" => "Envía unha mensaxe ao propietario da tenda para informarlle sobre a recepción dun novo pedido de Avocado.",
],
     "avocado-ready-to-pay" => [
     "title" => "Pedido de aguacate listo para pagar",
     "sample" => "<b>O nome da túa tenda</b><br> O seu pedido foi confirmado e pódese pagar a través da seguinte ligazón.<br> Número de pedido: <b>AVO-246</b><br> Ligazón: <b>https://your-domain/avocado</b><br> Vendo",
     "body" => ":param3 O seu pedido foi confirmado e pódese pagar a través da seguinte ligazón. Número de pedido: :param2 Ligazón: :param1 Selldone",
     "description" => "Envía unha mensaxe coa ligazón de pago ao cliente despois de que o vendedor estableza o custo e confirme o seu pedido de aguacate.",
],
];