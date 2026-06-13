<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'Esta mensagem dá as boas-vindas a um novo comprador na loja.',
        ShopMailTemplateCodes::OrderCheckout => 'Esta notificação é enviada quando um comprador confirma um pedido.',
        ShopMailTemplateCodes::OrderPayment => 'Esta notificação confirma o pagamento bem-sucedido feito por um cliente.',
        ShopMailTemplateCodes::OrderUpdate => 'Esta mensagem é enviada para atualizar o comprador sobre o status do seu pedido.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'Esta mensagem é enviada a um vendedor para notificá-lo sobre um pedido confirmado.',
        ShopMailTemplateCodes::PosCheckout => 'Esta notificação é enviada para confirmar um pedido de ponto de venda para um comprador.',
        ShopMailTemplateCodes::PosPayment => 'Esta notificação confirma um pagamento no ponto de venda feito por um comprador.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'Esta mensagem notifica o vendedor sobre uma compra realizada em seu ponto de venda.',
        ShopMailTemplateCodes::ShopContact => 'Esta notificação é enviada quando um formulário de contato é enviado.',
        ShopMailTemplateCodes::ShopGiftCard => 'Esta notificação informa ao usuário que ele recebeu um vale-presente.',

        ShopMailTemplateCodes::ShopVendorJoin => 'Esta mensagem dá as boas-vindas a um novo fornecedor na loja.',
        ShopMailTemplateCodes::ShopVendorInvite => "Esta mensagem é enviada para convidar um fornecedor para ingressar no seu mercado.",
        ShopMailTemplateCodes::ShopVendorOrder => "Esta mensagem é enviada ao fornecedor quando um pedido é recebido no status Pago ou Pagamento na entrega (COD).",
        ShopMailTemplateCodes::ShopVendorProducts => "Enviado diariamente para atualizar os fornecedores sobre o status de seus produtos.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "Esta mensagem é enviada para convidar um fornecedor para ingressar no seu mercado.",

        ShopMailTemplateCodes::UserLogin => "Notifique o usuário com detalhes de login, incluindo endereço IP, data e dispositivo, para fins de segurança.",
        ShopMailTemplateCodes::LoginCode => "Envie um código de senha de uso único para os usuários fazerem login na loja.",

        ShopMailTemplateCodes::EmailVerifyLink => "Envie um link para verificar o endereço de e-mail do usuário. Este e-mail é enviado quando um usuário se cadastra por SMS e insere seu e-mail. Não é enviado quando um usuário se cadastra diretamente com login social ou email.",

        ShopMailTemplateCodes::EmailBulkOrder => "Envie uma lista de pedidos recebidos e pagos em massa para um dia específico."


    ,

    ],


    'global' => [
        'greetings' => 'Olá, :name!',
        'end-statement' => 'Equipe de suporte',

        'receiver_name' => 'Olá :user_name',
        'footer-help' => "Precisa de ajuda? Pergunte em [support@selldone.com](mailto:support@selldone.com) ou visite nossa [central de ajuda](https://selldone.com/community).",
        'selldone-team' => 'A equipe Selldone',
        'footer-shop' => "Se precisar de ajuda com alguma coisa, não hesite em nos enviar um e-mail: :shop_mail",
        'accept' => "Aceitar",
        'reject' => "Rejeitar",
        'verify' => "verificar",
        'title' => "Título",
        'value' => "Valor",
        'description' => "Descrição",
        'shop' => "Comprar",
        'shop-info' => "Armazenar informações",
        'user' => "Do utilizador",
        'user-info' => "Informações da conta",
        'license' => "Licença",
        'status' => "Status",
        'start' => "Começar",
        'end' => "Fim",
        'renewal' => "Renovação",
        'view' => "Visualizar",

        'balance' => "Equilíbrio",
        'card_number' => "Número do cartão",
        'cvv' => "Cvv",
        'expire_date' => "Data de validade",

        'Dashboard' => "Painel",
        'order' => "ordem",
        'view_order' => "Ver pedido",
        'pay_now' => "Pay now",

        'official_selldone' => "VENDA OFICIAL",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Moeda",
        'free-balance' => "Saldo grátis",
        'locked-balance' => "Saldo bloqueado",
        'bot' => "Robô",
        'requests' => "solicitações de",
        'baskets' => 'Carrinhos',
        'physical' => "Físico",
        'virtual' => "Virtual",
        'file' => "Arquivo",
        'service' => "Serviço",
        'fulfillment' => "Cumprimento",
        'open' => "Aberto",
        'reserved' => "Reservado",
        'canceled' => "Cancelado",
        'payed' => "Pago",
        'cod' => "COD",
        'orders-count' => 'Pedidos',
        'payments-count' => 'Pagamentos',
        'confirms-count' => 'Confirma',
        'sends-count' => 'Envia',
        'delivers-count' => 'Entrega',
        'count' => 'Contar',
        'transactions-count' => 'Contagem de transações',
        'success-transactions' => 'Transações de sucesso',
        'total-amount' => 'Montante total',
        'amount' => 'Resultar',
        'wage' => 'Remuneração',
        'debug' => 'Depurar',
        'pos' => 'POS',
        'live' => 'Ao vivo',
        'CheckQueue' => 'Verificar fila',
        'OrderConfirm' => 'Confirmar pedido',
        'PreparingOrder' => 'Preparando pedido',
        'SentOrder' => 'Pedido enviado',
        'ToCustomer' => 'Entregue ao cliente',
        'Pending' => 'Pendente',
        'Accepted' => 'Aceitaram',
        'Rejected' => 'Rejeitado',
        'pc' => 'PC',
        'tablet' => 'Tábua',
        'phone' => 'Telefone',
        'total' => 'Total',
        'view-detail' => 'Ver detalhes',
        'empty' => 'Vazio',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Responder',
        'reactions' => 'Reações',
        'Comments' => 'Comentários',
        'last-comment' => 'Último comentário',
        'response-to' => 'Resposta a',
        'posts' => 'Postagens',
        'post' => 'Publicar',

        'name' => 'Nome',
        'email' => 'E-mail',
        'type' => 'modelo',
        'device' => 'Dispositivo',
        'platform' => 'Plataforma',
        'browser' => 'Navegador',
        'time' => 'Tempo',
        'Wallet' => 'Carteira',
        'date' => 'Encontro',

        'account' => 'Conta',
        'transaction' => 'Transação',
        'fee' => 'Taxa',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Projeto de lei',
        'category' => 'Categoria',
        'password' => 'Senha',
        'verify-login' => "Verificar e fazer login",
        'url' => 'URL',
        'avocado' => 'Abacate',
        'hyper' => 'Hiper',
        'buy-now' => "Compre Agora",
        'add-domain' => "Add Domain",
        'views' => 'Visualizações',


        'country' => 'País',
        'address' => 'Morada',
        'postal' => 'Código postal',
        'building_no' => 'Prédio #',
        'building_unit' => 'Unidade #',
        'message' => 'Mensagem',


        'customer' => 'Cliente',
        'cart-items' => 'Itens do carrinho',
        'payment' => 'Pagamento',
        'receiver' => 'Receptor',
        'virtual-items' => 'Itens virtuais',
        'no-payment' => 'Sem pagamento!',

        'enable' => 'Habilitar',
        'access' => 'Acesso',
        'bank' => 'Informações bancárias',

        'vendor' => 'Fornecedor',

        'view_content' => "Ver conteúdo completo",
        'files' => 'arquivos',
        'download' => 'Download',
        'file_name' => 'Nome do arquivo',
        'file_size' => 'Tamanho',

        'subscription' => 'Inscrição',
        'products' => 'Produtos',
        'vendor_products' => 'Produtos do fornecedor',

        'pickup' => 'Retirada',

        'minutes' => 'Minutos',
        'hours' => 'Horas',

        'refund' => 'Reembolso',
        'recipient_address' => 'Endereço do destinatário',
        'signature' => 'Assinatura',
        'blockchain' => 'Blockchain',
        'details' => 'Detalhes',


    

        'Shop' => 'Comprar',
        'dashboard' => 'painel de controle',
        'comments' => 'comentários',
        'wallet' => 'carteira',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone SO empresarial",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Relatório de desempenho Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Relatório Sazonal Selldone'
        ],
        'Onboarding' => [
            'id' => 'Oi',
            'name' => 'Selldone Comerciantes'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Suporte :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Selldone'
        ],
        'Welcome' => [
            'id' => 'Oi',
            'name' => 'Comunidade, Selldone'
        ],
        'NewShop' => [
            'id' => 'comerciantes',
            'name' => 'Selldone Comerciantes'
        ],
        'Approve' => [
            'id' => 'aprovar',
            'name' => 'Selldone Comerciantes'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Gestão de Encomendas :name'
        ],

        'Recovery' => [
            'id' => 'recuperação',
            'name' => 'Equipe de recuperação Selldone'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Pendente ⌛',
        'PAYED' => 'Pago ✅',
        'CANCELED' => 'Cancelado ❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administrador',
            'OFFICER' => 'Oficial e Supervisor',
            'AUDITING' => 'Gerente de auditoria',
            'EMPLOYEE' => 'Empregado',
            'PRODUCT' => 'Gerente de produtos',
            'CONTENT' => 'Gestor de conteúdos',
            'MARKETING' => 'Gerente de marketing',
            'VIEWER' => 'Visualizador',

        ],
        'subject' => ":inviter convidou você como :level| :shop",
        'category' => "Convite da equipe",
        'title' => "Você foi convidado para <b>:shop_name</b> como <b>:level</b> .",
        'message' => "Você recebeu um convite para colaborar com a equipe <b>:shop_title</b> nos negócios. Você tem a opção de aceitar ou recusar esta oferta. Caso opte por aceitar, faça login no serviço Selldone para confirmar sua decisão. Após a confirmação, você terá acesso à seção de gerenciamento da loja.",

    ],

    'welcome-email' => [
        'subject' => "👋 Bem-vindo :name, vamos começar com Selldone!",
        'category' => 'CONGRATULATION',
        'title' => "Bem-vindo ao Selldone",
        'message' => "Obrigado por escolher Selldone! Agora você faz parte de uma comunidade vibrante que conecta vendedores globais a clientes, empresas locais a empresas e indivíduos a corporações. Todas as nossas ferramentas Master e Pro estão disponíveis para você **gratuito** e **ilimitado**. Estamos aqui para apoiá-lo e abrir as portas para o seu sucesso.",

        'index' => "Etapa :step.",

        'step-domain' => [
            'title' => 'Adicione seu domínio personalizado',
            'message' => "Para começar, adicione seu domínio personalizado gratuitamente no Painel da Loja em Configurações > Configurações de Domínios.",
            'action' => 'Gerenciar meus domínios',
        ],
        'step-landing' => [
            'title' => 'Personalize sua página inicial',
            'message' => "Personalize sua página inicial acessando Painel > Páginas. Escolha uma landing page ou crie uma nova. É fácil e intuitivo e você pode começar a trabalhar nisso imediatamente.",
            'action' => 'Personalize minha página de destino',
        ],
        'step-payment' => [
            'title' => 'Configurar métodos de pagamento',
            'message' => "Comece a aceitar pagamentos diretamente em sua conta bancária. Para conectar seus provedores de pagamento como Stripe, PayPal e muito mais, vá para Painel > Contabilidade > Gateway.",
            'action' => 'Adicionar métodos de pagamento',
        ],
        'step-products' => [
            'title' => 'Adicione seus produtos',
            'message' => "Adicione facilmente produtos e categorias em Painel > Produtos. É como gerenciar arquivos e pastas no seu PC – totalmente pronto para arrastar e soltar. Você também pode importar produtos em massa usando o Excel. Um modelo de amostra está disponível para ajudá-lo a começar.",
            'action' => 'Gerenciar meus produtos',
        ],
        'step-shipping' => [
            'title' => 'Configurar métodos de envio',
            'message' => "Para cobrar dos clientes pelo frete, defina seus métodos de envio em Painel > Logística > Frete. Você pode definir preços e suporte diferentes para vários locais. Não se esqueça de definir a origem do seu armazém em Dashboard > Logística > Armazém.",
            'action' => 'Gerenciar métodos de envio',
        ],
    

        'seller' => [
            'title' => 'Você é um vendedor?',
            'message' => 'Para começar a vender, entre no seu painel no Selldone através do link abaixo e crie sua primeira loja totalmente grátis. Isso levará alguns minutos e você terá sua própria loja e site online. Em seguida, orientaremos você para as próximas etapas e obteremos o gateway de pagamento.',
            'action' => 'Entrar no meu painel',
        ],
        'buyer' => [
            'title' => 'eu sou um comprador',
            'message' => 'Parabéns. Depois de se tornar um membro do Selldone, você se livrará de todos os problemas de associação e autenticação em lojas online. Para se beneficiar de qualquer loja e site que utilize a plataforma Selldone, você pode fazer login com um clique e fazer sua compra de forma simples, rápida e segura.',
        ],
    ],


    'charge-account' => [
        'category' => 'Carteira > Conta > Cobrança',
        'title' => "Taxa de sucesso",
        'message' => "Sua conta <b>:account_number</b> foi <b>:amount</b> cobrada com sucesso.",
        'account' => 'Conta',
        'charge' => 'Carregar',
        'balance' => 'Equilíbrio',
        'footer' => "Torne os negócios fáceis, viáveis e acessíveis a qualquer pessoa em todo o mundo."
    ],

    'verify-email' => [
        'subject' => "🙌 Complete sua inscrição no Selldone! Verificar link.",
        'category' => "VOCÊ ESTÁ A UM PASSO",
        'title' => "Verifique seu endereço de e-mail",
        'message' => "Olá :name,<br><br>Obrigado por escolher Selldone!<br><br>Para confirmar que <b>:email</b> é o seu endereço de e-mail correto, clique no botão abaixo ou use o link fornecido. Você tem 48 horas para concluir esta verificação.",
        'footer' => "Se estiver com problemas para clicar no botão Verificar, copie e cole o URL abaixo em seu navegador da web: :activation_url",
        'next-step' => "A seguir, enviaremos alguns materiais úteis e um guia passo a passo para facilitar a adição de seu domínio personalizado, a configuração de pagamentos, a adição de produtos e a obtenção de seu primeiro pedido.",

    ],
    'verify-email-code' => [
        'subject' => "Código de verificação para :name",
        'category' => "SECURITY",
        'title' => "Código de verificação de e-mail",
        'message' => "Olá :name,<br><br>Para confirmar se <b>:email</b> é o seu endereço de e-mail correto, insira o seguinte código nos próximos <b>10 minutos</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Sua loja está pronta| :name",
        'category' => "VOCÊ ESTÁ A UM PASSO",
        'title' => "Configuração concluída",
        'account_title' => "Sua conta",
        'account_msg' => "Verifique e faça login na sua conta com esta informação.",
        'shop_msg' => "Informações da conta no sistema operacional comercial da Selldone.",

    ],

    'reset2fa' => [
        'category' => "MENSAGEM OFICIAL DE SEGURANÇA",
        'title' => "Solicitar desabilitação do login em 2 etapas",
        'message' => "Você está recebendo este e-mail porque recebemos uma solicitação para redefinir a autenticação de dois fatores para a conta **:name** com o e-mail **:email**.<br><br>Encontramos os seguintes detalhes para sua conta:",
        'footer' => "Se você não solicitou uma redefinição de senha, nenhuma ação adicional será necessária.",
        'action' => 'Desativar login em duas etapas',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Sua loja já está pronta!",
        'category' => "NASCI NOVA LOJA ONLINE NO MUNDO",
        'title' => "Parabéns, :name!",
        'message' => "<b>Parabéns, :name! Seu novo negócio online já está no ar! </b> Temos o prazer de recebê-lo na comunidade Selldoners. Você deu o primeiro passo em direção ao sucesso e estamos aqui para ajudá-lo em cada etapa do caminho.<br>Agora que sua loja está pronta, vamos ter certeza de que você está pronto para receber pagamentos diretamente de seus clientes e começar a expandir seu império. Se você precisar de ajuda, estamos a apenas uma mensagem de distância - nossa equipe de suporte está sempre aqui para ajudá-lo.<br><br><b>Próximos passos importantes:</b> Para começar, certifique-se de que está tudo preparado para receber pagamentos e operações tranquilas. Iremos guiá-lo em cada etapa para que sua loja funcione perfeitamente.",
        'pdf-book' => "Não perca o manual anexo: Faça seu negócio como um jogo",

        'account' => [
            'title' => 'Passo 1: Crie uma conta na carteira Selldone',
            'message' => "Para começar, crie uma conta na sua carteira Selldone. É aqui que suas taxas serão deduzidas e também onde você recarregará para manter sua loja funcionando perfeitamente. Se o seu saldo ficar negativo, não se preocupe! Sua loja continuará operando sem interrupção.",
            'action' => 'Entrar na carteira',
        ],

        'shop-account' => [
            'title' => 'Etapa 2: conectar a conta à loja',
            'message' => "Em seguida, conecte sua conta da carteira à sua loja. Vá para <b>Store > Contabilidade > Fatura</b> e vincule sua carteira. Isso garante que todos os pagamentos do cliente sejam depositados diretamente em sua conta bancária – Selldone não deduz nenhum valor de seus ganhos.",
            'action' => 'Painel de fatura da loja',
        ],

        'gateway' => [
            'title' => 'Etapa 3: conectar o gateway de pagamento online',
            'message' => "Agora, vamos configurar seu gateway de pagamento online. Vá para <b>Store > Contabilidade > Port</b> e clique em <b>Adicionar nova porta</b>. Selecione sua moeda e você verá uma lista de gateways de pagamento disponíveis. Conectar um gateway é rápido e fácil, mas se precisar de ajuda, sinta-se à vontade para consultar os guias Selldone ou entrar em contato conosco.",
            'action' => 'Adicionar um portal à loja',
        ],

        'domain' => [
            'title' => 'Último passo: conectar um domínio dedicado',
            'message' => "Agora, vincule seu domínio personalizado à sua loja. Isso permite que os clientes comprem seus produtos ou serviços e façam pagamentos diretamente para você.",
            'action' => 'Apresentando e recebendo cartões-presente ilimitados',
        ],
    ],


    'basket-list' => [
        'item' => "item",
        'count' => "Contar",
        'price' => "preço",
        'discount-code' => "Código de desconto",
        'customer-club' => 'Clube do Cliente',
        'shipping' => "Envio",
        'total' => "Total",
        'offer' => "Oferecer",
        'coupon' => "Cupom",
        'lottery' => "Prêmio",
        'tax' => "Imposto",
        'tax_included' => "Incluído no preço",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Método',
        'amount' => 'Resultar',
        'giftcard' => 'Gift card',
        'payment' => 'Pagamento',
    ],


    'shop-subscription-email' => [
        'category' => "Atualização de assinatura",
        'title' => "Licença da loja: :shop_title",
        'title-reserved' => "Licença de reserva: :shop_title",
        'title-active' => "Licença ativa: :shop_title",
        'title-finished' => "Licença finalizada: :shop_title",
        'title-cancel' => "Cancelar licença: :shop_title",
        'message' => "Seu plano de licença de loja atualizado,",
        'RESERVED' => "⚡ Seu plano de assinatura foi **reservado**.",
        'ACTIVE' => "🟢 Seu plano de assinatura foi **ativado**.",
        'FINISHED' => "🚧 Seu plano de assinatura foi **concluído**.",
        'CANCEL' => "⛔ Seu plano de assinatura foi **cancelado**.",
    ],

    'support' => [
        'subject' => "Centro de suporte|:name respondeu",
        'category' => "Centro de Apoio",
        'title' => "Você recebeu uma resposta",
        'action' => "Administrador da loja aberta",
    ],

    'shop-customer-join' => [
        'subject' => "Junte-se a :shop_title",
        'category' => "Comemoração do novo cliente",
        'title' => "Estamos felizes por sua adesão",
        'action' => "Visite agora",
    ],

    'shop-vendor-join' => [
        'subject' => "Integração de fornecedores | :shop_title",
        'category' => "Celebração de novo fornecedor",
        'title' => "Estamos felizes por sua adesão",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Cartão-presente :shop_title",
        'category' => "Adicionar novo cartão",
        'title' => "Parabéns, você recebeu um vale-presente",
        'action' => "Compre agora",
        'message' => "Você recebeu um vale-presente no valor de :balance :currency. Você poderá comprar em nossa loja com este cartão-presente.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Centro de suporte| :shop",
        'category' => "apoiar",
        'title' => "Você recebeu uma resposta",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍 Finalizar Pedido | :order_id",
        'title' => "ordem",
        'message' => "Você fez um pedido em nossa loja. Recebemos seu pedido e enviaremos outro e-mail assim que o pagamento for confirmado."
    ,

        'payments' => 'Pagamentos',
    ],

    'order-payment' => [
        'subject' => "🛍 Confirmação de Pagamento | :order_id",
        'title' => "Ordem de pagamento",
        'message' => "Seu pagamento concluído,<br> Recebemos seu pedido. Enviaremos outro e-mail quando seu pedido for enviado.",
    

        'payments' => 'Pagamentos',
    ],

    'order-update' => [
        'subject' => "🛍️ Atualização do status do pedido|Pedido :order_id",
        'title' => "Atualização do status do pedido",
        'message' => "Seu pedido foi atualizado. Você pode verificar o status mais recente deste pedido em sua conta.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Seu pedido está na fila para processamento. Iremos notificá-lo quando estiver sendo preparado.",
                'OrderConfirm' => "Seu pedido foi confirmado e a preparação foi iniciada.",
                'PreparingOrder' => "Seu pedido está sendo preparado e será enviado em breve.",
                'SentOrder' => "Seu pedido foi enviado. Você receberá em breve.",
                'ToCustomer' => "Seu pedido foi entregue. Esperamos que você goste!",

                'PreparingOrder-PICKUP' => "Seu pedido está sendo preparado. Você receberá uma notificação quando estiver pronto para retirada.",
                'SentOrder-PICKUP' => "Seu pedido está pronto para retirada. Por favor, venha até a loja para retirá-lo.",
                'ToCustomer-PICKUP' => "Seu pedido foi retirado. Esperamos que você goste!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Seu pedido está na fila para processamento. Avisaremos você quando estiver pronto.",
                'OrderConfirm' => "Seu pedido foi confirmado e a preparação está em andamento.",
                'PreparingOrder' => "Seu pedido está sendo preparado e será enviado em breve.",
                'ToCustomer' => "Seu pedido virtual foi entregue em sua conta. Obrigado!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Sua solicitação de serviço está na fila. Avisaremos você quando começarmos.",
                'OrderConfirm' => "Seu serviço está confirmado e estamos nos preparando para começar.",
                'PreparingOrder' => "Estamos preparando seu serviço e avisaremos você assim que ele for concluído.",
                'ToCustomer' => "Seu serviço está completo. Obrigado por nos escolher!"
            ],
            'FILE' => [
                'PreparingOrder' => "Seu arquivo está sendo preparado e estará disponível em breve.",
                'ToCustomer' => "Seu arquivo está pronto e foi entregue. Agora você pode baixá-lo."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Seu pedido de assinatura está na fila. Notificaremos você quando o processamento começar.",
                'OrderConfirm' => "Sua assinatura foi confirmada e está sendo configurada.",
                'PreparingOrder' => "Estamos preparando sua assinatura e ela começará em breve.",
                'SentOrder' => "Sua assinatura foi ativada. Você receberá atualizações contínuas.",
                'ToCustomer' => "Seu serviço de assinatura foi ativado com sucesso."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Parabéns :name|Novo voucher: :title',
        'category' => "PARABÉNS, NOVO VOUCHER",
        'message' => "Olá :name,<br><br>Você recebeu um novo voucher como presente nosso! Você pode ganhar ainda mais vouchers apresentando Selldone a seus amigos e a todos que você conhece. Este voucher vale **:price :currency**.<br><br>Você deu o primeiro passo e estamos aqui para ajudá-lo a desbloquear novos recursos com seu voucher! Faça login com **:email** e encontre seu voucher no **Painel** da Loja > **Configurações** > **Licença**.<br><br>Parabéns!",
        'action' => "Meu painel",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Parabéns, caro :name | Você recebeu um presente',
        'category' => "Anúncio de receber um presente",
        'title' => "Presentes para você",
        'message' => "Olá :name, temos o prazer de informar que você recebeu um presente especial de Selldone! 🎉 Você pode ganhar mais presentes permanecendo ativo, expandindo sua loja e melhorando seu conhecimento em Selldone. Para verificar seu presente, basta fazer login com :email e procurá-lo no canto superior direito do seu painel.<br><br>Este presente vale **:price :currency**, e você pode facilmente depositá-lo em sua carteira em Selldone.<br><br>Uuse seu presente para atualizar a licença de sua loja e desbloqueie ferramentas ainda mais poderosas para impulsionar seu negócio online!",
        'action' => "Presentes",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍 Novo Pedido Recebido | :order_id",
        'title' => "New Order",
        'message' => "Você recebeu um novo pedido. Por favor, vá para a página de processamento de pedidos em sua loja.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Suas informações preenchidas',
        'output-form-title' => 'Informações do item comprado',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬 :shop_title|Relatório Semanal :time',
        'title' => 'Relatório semanal de desempenho da loja',
        'message' => "Este é o relatório semanal da sua loja de <b>:start</b> a <b>:end</b>. Este relatório inclui dicas para melhorar o seu negócio, você também pode verificar o status da sua loja online e pedidos recentes. Espero que você tenha um bom dia e semana pela frente."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Seu relatório de economia :amount nos últimos três meses| :shop_title',
        'title' => 'Relatório sazonal sobre sua atividade comercial, recompensas e economias financeiras',
        'message' => "Este é o seu relatório sazonal <b>:shop_title</b> de <b>:start</b> a <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Contas conectadas',
        'sub-title' => 'Qual é o status mais recente das contas de carteira conectadas à minha loja?',
        'view-wallet' => 'Ver carteira',
        'tip-title' => 'Dicas importantes',
        'tip' => "Configure uma carteira Selldone gratuita e vincule-a à sua loja. Mesmo que seu saldo seja negativo, seus clientes ainda poderão comprar e pagar sem problemas. Não se preocupe, as operações e os dados da sua loja continuarão sem problemas por até 1 mês, sem interrupções.",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Conectar-se à conta'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Aplicativos instalados',
        'sub-title' => 'Lista de aplicativos que você instalou em sua loja esta semana.',
        'tip' => "Quer encontrar mais aplicativos para sua loja?",
        'view-app-store' => 'Visite a App Store da Selldone.',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Bots da sua loja',
        'sub-title' => 'Bots de vendas ativos na minha loja.',
        'tip-title' => 'Venda de bot',
        'tip' => "A Selldone forneceu bots de vendas automáticos. Tudo o que você precisa fazer é acessar o painel Add-ons> Bots e ativar os bots da sua loja. Observe que o serviço relevante deve estar disponível em seu país.",
        'view-bots' => 'Gerenciar bots',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Comunicação com Clientes',
        'sub-title' => 'Quantos contatos tive com meus clientes esta semana?',
        'faqs' => 'perguntas frequentes',
        'tickets' => 'Ingressos do cliente',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Status dos usuários',
        'sub-title' => 'Atividade de :start a :end',
        'users' => [
            'title' => 'Clientes',
            'subtitle' => 'Usuários de inscrição',
        ],
        'views' => [
            'title' => 'Visitas',
            'subtitle' => 'Quantas vezes você visitou a loja',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Usuários retornados',

        'shop_views' => 'Visualizações da loja',
        'baskets' => [
            'title' => 'Carrinhos de compras',
            'subtitle' => 'Informe o número de novos carrinhos de compras',
        ],
        'products' => [
            'title' => 'Visão geral dos produtos',
            'subtitle' => 'Status dos produtos na loja por tipo',
            'value_name' => 'Produtos'
        ],
        'products_count' => 'Tipos de produtos',
        'views_count' => 'Contagem de visualizações',
        'sell_count' => 'Contagem de vendas',
        'send_count' => 'Contagem de envio',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Envio direto',
        'sub-title' => 'Painel para grandes vendedores de Drop Shipping Selldone.',
        'total_fulfillments' => 'Total de pedidos recebidos',
        'ds_count' => 'Pedidos recebidos',
        'statistics_title' => 'Relatório de pedidos recebidos',
        'ds_cancels' => 'Cancelar pelo vendedor da interface',
        'ds_rejects' => 'Cancelar por você',
        'tip' => "Você é um grande vendedor de mercadorias? Você possui um armazém, fábrica ou distribuidor de produtos? Você pode oferecer seus produtos a outros vendedores no serviço Selldone Drop Shipping para vender seu produto em grande escala. Envie-nos um e-mail para support@selldone.com para orientá-lo.",
        'view-drop-shipping-panel' => 'Faça login no painel de atacado',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Taxas de câmbio',
        'sub-title' => 'Lista das últimas taxas de conversão de moeda em sua loja.',
        'from' => 'Moeda de origem',
        'to' => 'Moeda de destino',
        'rate' => 'Taxa de conversão',
        'view-exchange-panel' => 'Gerenciar taxas de câmbio',
    

        'vew-exchange-panel' => 'painel de gerenciamento de taxa de câmbio',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Contratos de especialistas',
        'sub-title' => 'Quais profissionais trabalham na minha loja?',
        'cost' => 'Valor do contrato',
        'duration' => 'Duração',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Data Cancelar',
        'end_at' => 'Data de entrega',
        'tip' => 'Você pode contratar os melhores especialistas da Selldone para desenvolver seu negócio.',
        'view-experts' => 'Clique para começar.',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Informe gateways de pagamento ativos na loja :shop.',
        'tip-title' => 'Dicas importantes',
        'tip' => "Acesse a página de gerenciamento do portal em sua loja e adicione pelo menos uma porta em alguns minutos. Seus clientes gostam de pagar com rapidez e segurança por meio de portais online.",
        'view-shop-gateways' => 'Faça login no gerenciamento do portal da minha loja.',
        'view-gateways' => 'Ver mais gateways',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Pedidos',
        'sub-title' => 'Lista de pedidos que recebi esta semana.',
        'total_baskets' => 'Total de pedidos',
        'total_posBaskets' => 'Total de Pedidos em Dinheiro',
        'pos-title' => 'Caixa de loja POS',
        'chart-label' => 'Pedidos concluídos (esses pedidos não são necessariamente pagos!)',
        'tip-title' => 'Você deveria se esforçar mais...',
        'tip' => "Nenhum sucesso simples.",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Centro de processamento',
        'sub-title' => 'Quanto pedido processamos na loja esta semana?',
        'tip-title' => 'Você não teve uma venda!',
        'tip' => "Infelizmente você não teve nenhuma venda esta semana. Você precisa obter mais para sua loja. Você pode adicionar mais produtos, escolher imagens melhores ou escrever descrições melhores para seus produtos. Considere um emprego em tempo integral para o seu negócio. Se você fizer certo e não ficar frustrado, você terá sucesso.",
        'view-process-center' => 'Visualizar centro de processos',
        'return' => [
            'title' => 'Pedido devolvido',
            'subtitle' => 'Informe os pedidos devolvidos.',
            'tip-title' => 'Você sabia disso ...',
            'tip' => "Você pode criar quantas caixas registradoras precisar com Selldone POS! Seja seu tablet, celular ou laptop, você pode transformar qualquer dispositivo no ponto de venda da sua loja. É simples, rápido de configurar e totalmente preparado para o seu servidor. Comece a usá-lo hoje!",
            'view-pos' => 'Entrar no Caixa da Minha Loja Online'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sessões',
        'sub-title' => 'Quantas vezes visitei minha loja?',
        'countries-title' => 'Quais países foram os mais visitados?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Você quer ganhar dinheiro sem gastar um dólar?',
        'message' => "Caro :name, você pode ir para Dashboard > Demonetization e criar um link de referência. Envie o link para seus amigos, você recebe um vale-presente Selldone e uma porcentagem dos pagamentos do seu amigo. Observe que o cartão-presente será enviado para você e seu amigo.",
        'action' => 'Veja meu link de apresentação',
        'mail-clip' => "<b style='color: #C2185B'>Importante:</b> se você usa serviços de e-mail como o Gmail que limitam o tamanho do e-mail, encontre a seguinte opção no final do e-mail para exibir o relatório completo e clique nele:",

        'no-coin-reward' => "<b style='color: #C2185B'>Desculpe:</b> sua atividade não atendeu ao requisito para receber a recompensa gratuita de Moedas SEL. Tente mais e venda mais em sua loja para a próxima temporada.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Recompensa:</b> Parabéns, por causa de seu desempenho fantástico, nós lhe demos uma recompensa gratuita de :amount SEL Coin.",

        'need-buy-license' => "<b>Aumente o seu negócio:</b> Parece que você ainda não registrou nenhum plano de assinatura para o seu site! Atualize agora para desbloquear mais recursos por apenas :amount por mês, se pago anualmente.",
        'not-afford-message' => "Se você não puder pagar ou tiver algum problema com o pagamento, sinta-se à vontade para nos informar via support@selldone.com.",
        'add-domain' => "<b>Por que não ter um domínio personalizado para o seu negócio?</b><br> Adicione um domínio ao seu site agora; é grátis!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone é um produto <del></del> <span style = 'color: forestgreen'> comunidade</span>.<br>Seja um vendedor profissional!",
        'message' => "Acompanhe as páginas oficiais do Selldone no Twitter, LinkedIn e redes sociais. Envie-nos quaisquer comentários, solicitações ou críticas ou participe de discussões sobre o Selldone. Também fazemos parte da comunidade de Selldone que <b>você faz</b> ."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Recebeu novos pedidos de Abacate | :shop_title :time',
        'title' => "Relatório de desempenho das últimas 24 horas",
        'message' => "Seus clientes estão esperando que seus pedidos sejam revisados e precificados. Responda às solicitações de seus clientes o mais rápido possível para obter mais vendas.",
        'card_title' => "Pedidos na fila",
        'card_subtitle' => "Desde :date",

        'card_payed' => "Pedidos pagos"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Responda à sua postagem em :community_title',
        'title' => ":name e :count outras pessoas comentaram suas postagens.",
        'message' => "Olá :name, suas postagens estão chamando atenção! Você recebeu comentários em nossa comunidade. Faça login na sua conta para participar da discussão e ver o que todos estão dizendo.",
        'title-simple' => ":name comentou em suas postagens.",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Responda ao seu tópico :topic_title',
        'title' => ":name e :count outros responderam ao seu tópico.",
        'message' => "Olá :name, seu tópico está chamando atenção! Você recebeu respostas em nossa comunidade. Faça login na sua conta para participar da discussão e ver o que todos estão dizendo.",
        'title-simple' => ":name respondeu no seu tópico.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 Novo login :name',
        'category' => 'Notificações de segurança',
        'title' => "Entrar na conta",
        'message' => "Caro :name, você fez login na sua conta Selldone.",   // Login in selldone (seller)
        'message-shop' => "Caro :name, você foi conectado em :shop_title .",  // Login in shop (buyer)

        'footer' => "Se você não estiver logado, altere sua senha.",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Cancelamento",
        'deposit' => "Depósito",

        'withdraw_subject' => "retirar da conta :account",
        'deposit_subject' => "Depósito na conta :account",

        'message' => "A transferência de dinheiro foi feita com as seguintes especificações.",

        'type' => "Tipo de transação",

        'from' => "Conta de origem",
        'to' => "Destination account",

        'desc' => "Descrição da transação",
        'action' => "Ver transação",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔Importante! Violação de regras| :shop",
        'category' => "Informação crítica",
        'title' => "Sua loja foi penalizada",
        'action' => "Abra o painel da loja",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter convidou você para o Selldone",
        'title' => ":name lhe enviou :amount para ajudá-lo a lançar seu novo site online e monetizá-lo!",
        'message' => "Olá **:receiver_name**,<br><br>Bem-vindo ao Selldone! No Selldone, você pode criar facilmente seu site de comércio eletrônico, blog, comunidade online e até mesmo configurar um sistema POS online para vendas presenciais – tudo em minutos. É o sistema operacional de negócios online completo projetado para tornar seu negócio melhor, mais rápido e mais fácil de administrar.<br><br>Inscreva-se até <b>:date</b> e receba um voucher :amount para começar!",
        'accept' => "Aceitar convite",
        'owner' => "Dono de",
        'join-date' => "Em Selldone desde",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Link de recuperação| :shop",
        'category' => "Segurança da loja",
        'title' => "Link de recuperação da loja de <b>:shop_name</b> .",
        'message' => "Este e-mail foi enviado porque você solicitou a restauração de sua loja. Clicar no link abaixo recuperará sua loja e todos os dados pertencentes a ela.",
        'action' => "Confirmar recuperação da loja",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Quanto dinheiro a Selldone economizou para o seu negócio?',
        'sub-title' => 'Da data :start a :end',
        'infrastructure' => [
            'title' => 'A infraestrutura',
            'subtitle' => 'Servidores, CDN, Armazenamento e outros serviços em nuvem',
        ],
        'experts' => [
            'title' => 'Especialistas e equipe',
            'subtitle' => 'Desenvolvedores, manutenção e suporte',
        ],
        'total_save' => 'Dinheiro total economizado'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'O seu desempenho',
        'sub-title' => 'Visão geral do negócio de :start a :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Usuários retornados',

        'shop_views' => 'Visualizações da loja',
        'baskets' => [
            'title' => 'Carrinhos de compras',
            'subtitle' => 'Informe o número de novos carrinhos de compras',

        ],
        'products' => [
            'title' => 'Visão geral dos produtos',
            'subtitle' => 'Status dos produtos na loja por tipo',
            'value_name' => 'Produtos'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Total de visualizações de página do site',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "Você recebeu um novo pedido. Por favor, vá para a página de processamento de pedidos no seu painel de fornecedor.",
        'subject' => "🛍 Novo Pedido Recebido | :order_id",
        'your_revenue' => "Sua Receita",
    ],
    'vendor-invite' => [
        'title' => 'Convite para Fornecedor',
        'message' => "Você recebeu um convite para se tornar um fornecedor de :shop_name. Você pode aceitar ou rejeitar clicando nos seguintes botões.",
        'subject' => ":shop_name | Você recebeu um convite para se tornar nosso fornecedor",
        'accept' => "Aceite e torne-se um fornecedor",
        'reject' => "Rejeitar",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Convite para se juntar à nossa equipe',
        'message' => "Você foi convidado para ingressar no :vendor_name em :shop_name. Você pode aceitar ou recusar este convite usando os botões abaixo.",
        'subject' => "Convite para ingressar em :vendor_name|Torne-se um membro da equipe",
        'accept' => "Aceite e junte-se à equipe",
        'reject' => "Rejeitar",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Seu código de login para :shop",
        'header-message' => "Estamos enviando este e-mail porque você solicitou um código de login para a loja. Por favor, encontre sua Senha Única (OTP) abaixo:",
        'footer-message' => "Este código será válido por 10 minutos. Se você não solicitou este código de login, ignore este e-mail."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Verifique seu e-mail | :shop",
        'title' => 'Verificação de e-mail',
        'header-message' => "Olá :name,<br> Confirme se **:email** é seu endereço de e-mail clicando no botão ou use o link abaixo dentro de 48 horas.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Atualizações de produto| :shop",
        'title' => "Atualização do status do produto - últimas 24 horas",
        'message' => "Espero que esta mensagem o encontre bem. Esta é uma breve atualização para informá-lo sobre o status dos seus produtos em nossa plataforma nas últimas 24 horas.\nDurante este período, ocorreram alterações no status de alguns produtos. Essas alterações podem ocorrer devido a compras, atualizações de estoque ou outros eventos relacionados.\nPara obter informações mais detalhadas sobre cada produto, faça login na sua conta e verifique a seção 'Status do produto'.",
        'action' => "Painel de Fornecedores Aberto",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Pedidos em massa recebidos| :shop | :date",
        'title' => "Notificação de pedidos em massa",
        'message' => "Você recebeu um lote de pedidos em grandes quantidades. Visite a página de processamento de pedidos em seu painel para obter mais detalhes. Você também pode baixar a lista de pedidos através do link seguro fornecido, válido por 7 dias.<br><br>\n        <b>IMPORTANTE:</b> Este link é válido por 7 dias.<br>\n        Este link é dinâmico, portanto cada vez que você clicar nele você receberá os pedidos mais atualizados para esta data específica. <b>Isso significa que se o status de pagamento do pedido mudar para rejeitado, você não verá mais esse pedido no CSV baixado ou, se o pedido for pago, ele aparecerá na lista.</b><br><br>\n        <ul>\n            <li>O CSV contém pedidos pagos com data reservada no :date.</li>\n            <li>Data reservada é a data em que o usuário clica em finalizar compra na página do pedido.</li>\n        </ul>\n        <b>Para evitar pedidos duplicados, verifique sempre o Pedido ID antes de enviar.</b>",
        'action' => "Baixar lista de pedidos",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Alguns itens do seu pedido não foram aceitos e não podem ser entregues. O valor desses itens será reembolsado em seu cartão em breve."
    ]

];
