<?php 

 return [
     "shop-order-payment" => [
     "title" => "Acceptar el pagament",
     "sample" => "El vostre pagament de 267 $ s'ha liquidat correctament.<br> Comanda: SM-425<br> Gràcies, <b>el nom de la teva botiga</b> .<br> Selldone",
     "body" => "El vostre pagament :param2 s'ha liquidat correctament. Comanda: :param1 Gràcies, :param3. Selldone",
     "description" => "Envieu un missatge al client de la botiga per informar-vos del pagament correcte.",
],
     "shop-order-payment-admin" => [
     "title" => "Acceptar el pagament",
     "sample" => "El nou pagament de 267 $ s'ha liquidat correctament.<br> Comanda: SM-425<br> Gràcies, <b>el nom de la teva botiga</b> .<br> Selldone",
     "body" => "El pagament nou :param2 s'ha liquidat correctament. Comanda: :param1 Gràcies, :param3. Selldone",
     "description" => "Envieu un missatge al propietari de la botiga per informar-lo del pagament correcte.",
],
     "vendor-new-order" => [
     "title" => "Nova comanda del venedor",
     "sample" => "Heu rebut una nova comanda de 200 $.<br> Comanda: SM-870 del <b>nom del venedor</b> .",
     "body" => "Heu rebut una comanda nova :param2. Ordre: :param1 per a :param3.",
     "description" => "Envieu un missatge al venedor per informar-lo sobre una nova comanda.",
],
     "shop-login" => [
     "title" => "Codi de verificació d'inici de sessió",
     "sample" => "El vostre codi d'inici de sessió és: <b>123456</b><br> <b>Nom de la teva botiga</b><br> Selldone",
     "body" => "El vostre codi d'inici de sessió és: :param1 :param2 Selldone",
     "description" => "Envieu el codi d'inici de sessió al client per iniciar sessió a la botiga.",
],
     "user-login" => [
     "title" => "Missatge d'èxit d'inici de sessió",
     "sample" => "Benvolgut <b>Nom</b> ,<br> Heu iniciat sessió al vostre compte mitjançant l' <b>iPhone 165.250.300.1</b> <b>el</b> 08/05/2021 a les 09:14.<br> Selldone",
     "body" => "Benvolgut/da :param1, Heu iniciat sessió al vostre compte per :param2 a :param3. Selldone",
     "description" => "Envieu un missatge després de l'inici de sessió del client a la botiga.",
],
     "avocado-order-submit" => [
     "title" => "Nova comanda d'alvocat enviada enviar al comprador",
     "sample" => "<b>Nom de la teva botiga</b><br> Benvolgut <b>el teu nom</b> ,<br> Hem rebut la teva comanda i l'estem revisant.<br> Núm. de comanda: <b>AVO-246</b><br> Selldone",
     "body" => ":param3 Benvolgut :param1, Hem rebut la teva comanda i l'estem revisant. Núm. de comanda: :param2 Selldone",
     "description" => "Envieu un missatge al client després de fer una comanda d'alvocat.",
],
     "avocado-order-submit-seller" => [
     "title" => "L'alvocat rep una nova comanda enviada al venedor",
     "sample" => "Has rebut una comanda d'alvocat:<br> Botiga: <b>el nom de la vostra botiga</b><br> Comprador: <b>nom del comprador</b><br> Comanda: <b>AVO-246</b><br> Selldone",
     "body" => "Has rebut una comanda d'alvocat: Botiga: :param1 Comprador: :param2 Comanda: :param3 Selldone",
     "description" => "Envieu un missatge al propietari de la botiga per informar-los sobre la recepció d'una nova comanda d'alvocat.",
],
     "avocado-ready-to-pay" => [
     "title" => "Comanda d'alvocat a punt per pagar",
     "sample" => "<b>Nom de la teva botiga</b><br> La teva comanda ha estat confirmada i es pot pagar a través del següent enllaç.<br> Núm. de comanda: <b>AVO-246</b><br> Enllaç: <b>https://your-domain/avocado</b><br> Selldone",
     "body" => ":param3 La teva comanda ha estat confirmada i es pot pagar a través del següent enllaç. Núm. de comanda: :param2 Enllaç: :param1 Selldone",
     "description" => "Envieu un missatge amb l'enllaç de pagament al client després que el venedor hagi establert el cost i confirmeu la seva comanda d'alvocat.",
],
];