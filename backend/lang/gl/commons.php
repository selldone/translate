<?php

return [
    /*
    |--------------------------------------------------------------------------
    | General
    |--------------------------------------------------------------------------
    */

    'shop' => "Tenda",
    'request' => "solicitude",
    'stage' => "Estado",
    'budget' => "orzamento",
    'contact' => "Contacto",
    'name' => "Nome",
    'email' => "Correo electrónico",
    'user' => "Usuario",
    'copy' => "Copiar",
    'important' => "Importante",
    'faq' => "FAQ",

    'select_shop' => "Seleccione Tenda",
    'loading' => "Cargando",

    'add_comment' => "Engadir comentario",
    'add_comment_sub' => "Comparte os teus pensamentos connosco",

    /*
    |--------------------------------------------------------------------------
    | Special agreements > SMS Services
    |--------------------------------------------------------------------------
    */
    'sms_agreement_twilio' => "Ao facer clic en \"Rexistrarse\", aceptas :name <a href='/terms' target='_blank'>Condicións de uso</a> e <a href='/privacy' target='_blank'>Política de privacidade</a>. Vostede acepta recibir chamadas telefónicas e mensaxes SMS de :name para actualizacións de pedidos e/ou fins de mercadotecnia. A frecuencia das mensaxes depende da túa actividade. Podes desactivar o envío enviando un texto de <b>STOP</b> a <b>86753</b>. É posible que se apliquen tarifas de mensaxes e datos. Respectamos a privacidade das persoas e nunca vendemos os teus datos nin os usamos para anuncios. Se necesitas información adicional, ponte en contacto connosco.",

    /*
    |--------------------------------------------------------------------------
    | Expert
    |--------------------------------------------------------------------------
    */
    'expert' => [
        'no_budget_set' => 'Non definido. Necesito máis información.',
        'start' => "Acabo de comezar o meu negocio.",
        'online' => "Teño un negocio e quero poñelo en liña.",
        'extend' => "Traballo na miña tenda en liña.",
        'pos' => "Teño a intención de usar Selldone POS na miña tenda física.",
    ],

    /*
      |--------------------------------------------------------------------------
      | @see VendorPaymentOptionObject
      |--------------------------------------------------------------------------
      */
    'vendor_payment_option' => [
        'bank' => [
            'title' => "Transferencia bancaria",
            'description' => "Transferir fondos manualmente á conta do provedor.",
        ],
    ],

];
