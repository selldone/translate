<?php

return [
    /*
    |--------------------------------------------------------------------------
    | General
    |--------------------------------------------------------------------------
    */

    'shop' => "Tienda",
    'request' => "solicitud",
    'stage' => "Estado",
    'budget' => "presupuesto",
    'contact' => "Contacto",
    'name' => "Nombre",
    'email' => "Correo electrónico",
    'user' => "Usuario",
    'copy' => "Copiar",
    'important' => "Importante",
    'faq' => "FAQ",

    'select_shop' => "Seleccionar tienda",
    'loading' => "Cargando",

    'add_comment' => "Añadir comentario",
    'add_comment_sub' => "Comparte tu opinión con nosotros",

    /*
    |--------------------------------------------------------------------------
    | Special agreements > SMS Services
    |--------------------------------------------------------------------------
    */
    'sms_agreement_twilio' => "Al hacer clic en 'Registrarse', aceptas los <a href='/terms' target='_blank'>Términos de uso</a> y la <a href='/privacy' target='_blank'>Política de privacidad</a> de :name. Aceptas recibir llamadas telefónicas y mensajes SMS de :name con actualizaciones de pedidos y/o fines de marketing. La frecuencia de los mensajes depende de tu actividad. Puedes darte de baja enviando un mensaje de texto con la palabra <b>STOP</b> al <b>86753</b>. Es posible que se apliquen tarifas de mensajes y datos. Respetamos la privacidad de las personas y nunca vendemos tus datos ni los usamos para anuncios. Si necesitas más información, contáctanos.",

    /*
    |--------------------------------------------------------------------------
    | Expert
    |--------------------------------------------------------------------------
    */
    'expert' => [
        'no_budget_set' => 'No establecido. Necesito más información.',
        'start' => "Recién estoy comenzando mi negocio.",
        'online' => "Tengo un negocio y quiero ponerlo en línea.",
        'extend' => "Trabajo en mi tienda online.",
        'pos' => "Tengo la intención de utilizar Selldone POS en mi tienda física.",
    ],

    /*
      |--------------------------------------------------------------------------
      | @see VendorPaymentOptionObject
      |--------------------------------------------------------------------------
      */
    'vendor_payment_option' => [
        'bank' => [
            'title' => "Transferencia bancaria",
            'description' => "Transfiere manualmente los fondos a la cuenta del vendedor.",
        ],
    ],

];
