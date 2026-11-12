<?php

return [
    /*
    |--------------------------------------------------------------------------
    | General
    |--------------------------------------------------------------------------
    */

    'shop' => "Loja",
    'request' => "solicitação",
    'stage' => "Estado",
    'budget' => "orçamento",
    'contact' => "Contato",
    'name' => "Nome",
    'email' => "E-mail",
    'user' => "Usuário",
    'copy' => "Copiar",
    'important' => "Importante",
    'faq' => "FAQ",

    'select_shop' => "Selecione Loja",
    'loading' => "Carregando",

    'add_comment' => "Adicionar comentário",
    'add_comment_sub' => "Compartilhe seus pensamentos conosco",

    /*
    |--------------------------------------------------------------------------
    | Special agreements > SMS Services
    |--------------------------------------------------------------------------
    */
    'sms_agreement_twilio' => "Ao clicar em 'Inscrever-se', você concorda com :name <a href='/terms' target='_blank'>Termos de uso</a> e <a href='/privacy' target='_blank'>Política de privacidade</a>. Você concorda em receber chamadas telefônicas e mensagens SMS de :name para atualizações de pedidos e/ou fins de marketing. A frequência das mensagens depende da sua atividade. Você pode cancelar enviando uma mensagem de texto <b>STOP</b> para <b>86753</b>. Taxas de mensagens e dados podem ser aplicadas. Respeitamos a privacidade das pessoas e nunca vendemos seus dados nem os usamos para anúncios. Se precisar de informações adicionais, entre em contato conosco.",

    /*
    |--------------------------------------------------------------------------
    | Expert
    |--------------------------------------------------------------------------
    */
    'expert' => [
        'no_budget_set' => 'Não definido. Preciso de mais informações.',
        'start' => "Estou apenas começando meu negócio.",
        'online' => "Tenho um negócio e quero colocá-lo online.",
        'extend' => "Eu trabalho na minha loja online.",
        'pos' => "Pretendo utilizar o POS Selldone em minha loja física.",
    ],

    /*
      |--------------------------------------------------------------------------
      | @see VendorPaymentOptionObject
      |--------------------------------------------------------------------------
      */
    'vendor_payment_option' => [
        'bank' => [
            'title' => "Transferência bancária",
            'description' => "Transfira fundos manualmente para a conta do fornecedor.",
        ],
    ],

];
