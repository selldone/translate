<?php 

 return [
     "shop-order-payment" => [
     "title" => "Accetta il pagamento",
     "sample" => "Il tuo pagamento di 267$ è andato a buon fine.<br> Ordine: SM-425<br> Grazie, <b>il nome del tuo negozio</b> .<br> Selldone",
     "body" => "Il tuo pagamento :param2 è andato a buon fine. Ordine: :param1 Grazie, :param3. Selldone",
     "description" => "Invia un messaggio al cliente del negozio per informarlo dell'avvenuto pagamento.",
],
     "shop-order-payment-admin" => [
     "title" => "Accetta il pagamento",
     "sample" => "Nuovo pagamento 267$ regolato con successo.<br> Ordine: SM-425<br> Grazie, <b>il nome del tuo negozio</b> .<br> Selldone",
     "body" => "Nuovo: pagamento param2 regolato con successo. Ordine: :param1 Grazie, :param3. Selldone",
     "description" => "Invia un messaggio al proprietario del negozio per informarlo dell'avvenuto pagamento.",
],
     "vendor-new-order" => [
     "title" => "Nuovo ordine del fornitore",
     "sample" => "Hai ricevuto un nuovo ordine da 200 $.<br> Ordine: SM-870 da <b>Nome fornitore</b> .",
     "body" => "Hai ricevuto un nuovo ordine :param2. Ordine: :param1 per :param3.",
     "description" => "Invia un messaggio al fornitore per informarlo di un nuovo ordine.",
],
     "shop-login" => [
     "title" => "Codice di verifica dell'accesso",
     "sample" => "Il tuo codice di accesso è: <b>123456</b><br> <b>Il nome del tuo negozio</b><br> Selldone",
     "body" => "Il tuo codice di accesso è: :param1 :param2 Selldone",
     "description" => "Invia il codice di accesso al cliente per accedere al negozio.",
],
     "user-login" => [
     "title" => "Messaggio di accesso riuscito",
     "sample" => "Caro <b>nome</b> ,<br> Hai effettuato l'accesso al tuo account tramite <b>iPhone 165.250.300.1</b> il <b>5/8/2021 9:14</b> .<br> Selldone",
     "body" => "Gentile :param1, Hai effettuato l'accesso al tuo account da :param2 a :param3. Selldone",
     "description" => "Invia un messaggio dopo che il cliente ha effettuato l'accesso al negozio.",
],
     "avocado-order-submit" => [
     "title" => "Avocado nuovo ordine inviato invia all'acquirente",
     "sample" => "<b>Il nome del tuo negozio</b><br> Caro <b>il tuo nome</b> ,<br> Abbiamo ricevuto il tuo ordine e lo stiamo esaminando.<br> Ordine n.: <b>AVO-246</b><br> Selldone",
     "body" => ":param3 Gentile :param1, abbiamo ricevuto il tuo ordine e lo stiamo esaminando. N. ordine: :param2 Selldone",
     "description" => "Invia un messaggio al cliente dopo aver effettuato un ordine di avocado.",
],
     "avocado-order-submit-seller" => [
     "title" => "Avocado ricevere un nuovo ordine inviato al venditore",
     "sample" => "Hai ricevuto un ordine di avocado:<br> Negozio: <b>il nome del tuo negozio</b><br> Acquirente: <b>nome dell'acquirente</b><br> Ordine: <b>AVO-246</b><br> Selldone",
     "body" => "Hai ricevuto un ordine di avocado: Negozio: :param1 Acquirente: :param2 Ordine: :param3 Selldone",
     "description" => "Invia un messaggio al proprietario del negozio per informarlo che è arrivato un nuovo ordine di avocado.",
],
     "avocado-ready-to-pay" => [
     "title" => "Ordine di avocado pronto per il pagamento",
     "sample" => "<b>Il nome del tuo negozio</b><br> Il tuo ordine è stato confermato e può essere pagato tramite il seguente link.<br> Ordine n.: <b>AVO-246</b><br> Link: <b>https://tuo-dominio/avocado</b><br> Selldone",
     "body" => ":param3 Il tuo ordine è stato confermato e può essere pagato tramite il seguente link. N. ordine: :param2 Link: :param1 Selldone",
     "description" => "Dopo che il venditore ha impostato il costo e confermato l'ordine di avocado, invia al cliente un messaggio con il link per il pagamento.",
],
];