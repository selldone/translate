<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Escopo do administrador Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Acesso restrito ao investidor.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Leia os detalhes do perfil do usuário.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Leia o número de telefone.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Leia e atualize endereços salvos.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Atualize o perfil do usuário.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Faça pedidos.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Ver histórico de pedidos.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Acesse cartões-presente.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Edite artigos.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Gerenciar notificações.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Ver lista de lojas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Edite os detalhes da loja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Adicionar nova loja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Excluir loja.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Gerenciar tickets de suporte.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Gerenciar cartões-presente.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Veja cartões-presente.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Gerenciar perguntas frequentes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Veja perguntas frequentes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Gerenciar categorias.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Veja categorias.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Gerenciar produtos.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Veja produtos.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Ver relatórios.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Gerenciar contas financeiras.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Visualize contas financeiras.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Edite as páginas da loja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Veja as páginas da loja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Gerenciar armazém.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Ver armazém.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Gerencie o acesso da equipe.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Veja o acesso da equipe.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Ver pedidos.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Gerenciar pedidos.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Gerenciar perfil comercial.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Ver perfil comercial.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Gerenciar códigos de desconto.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Veja códigos de desconto.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Gerenciar cupons.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Veja cupons.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Gerenciar ofertas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Veja ofertas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Gerenciar reembolsos.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Veja os reembolsos.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Gerenciar loterias.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Veja loterias.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Gerenciar comunidade.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Ver comunidade.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Gerenciar clientes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Veja os clientes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Gerenciar assinaturas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Ver assinaturas.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Visualize pedidos de fornecedores.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Gerenciar pedidos e pagamentos de fornecedores.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Gerenciar provedores de conexão.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Veja provedores de conexão.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Execute comandos de IA.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Veja informações de IA.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Gerenciar pagamentos de fornecedores.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Ver pagamentos de fornecedores.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Ver perfil comercial.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Gerenciar perfil comercial.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Veja informações da agência.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Gerenciar informações da agência.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Veja notas da loja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Gerenciar notas da loja.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Veja os recursos do desenvolvedor.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Gerenciar ativos do desenvolvedor.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Acesse informações pessoais e configurações da conta.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Gerenciar carteira e transações.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Veja as transações da carteira.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Visualize tokens e clientes OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Gerencie tokens e clientes OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Gerenciar configurações de segurança.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Gerenciar afiliados.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Veja afiliados.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Gerenciar modelos de impressão.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Veja modelos de impressão.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Gerenciar avaliações.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Ver comentários.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Veja informações de monetização.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Gerenciar informações de monetização.',



    'profile' => 'Leia as informações do perfil, incluindo nome, endereço de e-mail, imagem e status de autenticação.',
    'phone' => 'Acesso ao número de contato',
    'address' => 'Leia e edite o endereço do catálogo de endereços salvo',
    'buy' => 'Ordem & Ordem da Loja.',
    'order-history' => 'Leia o histórico de pedidos.',
    'my-gift-cards' => 'Acesso aos meus cartões-presente.',
    'articles' => 'Editar artigos.',
    'notifications' => 'Envie e receba notificações.',
    'read-shops' => 'Leia a lista de lojas.',
    'shop-edit' => 'Armazenar acesso de edição.',
    'shop-contacts' => 'Receba e edite formulários de contato.',
    'shop-gift-cards' => 'Criação, edição e gerenciamento de cartões.',
    'shop-faqs' => 'Crie, edite e gerencie perguntas frequentes.',
    'shop-categories' => 'Criando, Editando e Gerenciando Categorias.',
    'backoffice-write-products' => 'Autorizar a criação, edição e gerenciamento de produtos no back office.',
    'backoffice-read-products' => 'Autorize o acesso para visualizar a lista de produtos e informações detalhadas sobre os produtos no back office.',
    'shop-read-reports' => 'Leia informações e relatórios.',
    'shop-socials' => 'Edite as redes sociais da loja.',
    'shop-accounts' => 'Edite e exclua contas financeiras vinculadas à loja.',
    'shop-menus' => 'Edite os menus da loja.',
    'shop-pages' => 'Editar páginas da loja.',
    'shop-warehouse' => 'Editar Armazém da Loja',
    'shop-permissions' => 'Visualize e edite o acesso à loja.',
    'shop-process-center' => 'Gerenciar pedidos recebidos.',
    'shop-profile' => 'Gerenciar perfis de loja.',
    'shop-discount-code' => 'Gerenciar códigos de desconto.',
    'shop-coupon' => 'Gerenciar cupons.',
    'shop-offer' => 'Gerenciar ofertas.',
    'shop-cashback' => 'Gerencie cashbacks.',
    'shop-lottery' => 'Gerenciar loterias.',
    'shop-community' => 'Gerenciar comunidade.',
    'shop-customers' => 'Gerenciar clientes.',
    'shop-ribbon' => 'Gerenciar assinaturas do Ribbon.',
    'community-read' => 'Leia a comunidade Selldone.',
    'community-write' => 'Escreva para a comunidade selldone.',
    'profile-write' => 'Escreva informações do perfil do usuário.',
    'vendor-read' => 'Acesso às ações de atendimento de pedidos de fornecedores.',
    'vendor-write' => 'Alterar ordens, pagamentos e outras informações do fornecedor.',
    'connect-providers' => 'Adicione, leia e escreva provedores de conexão.',
    'personal-identification' => 'Leia informações pessoais, acessos e configurações de conta.',
    'accounts' => 'Acesso a carteiras, leitura de transações e históricos de recargas.',
    'shop-add' => 'Adicionar nova loja.',
    'shop-delete' => 'Remover uma loja.',
    'shop-ai-write' => 'Permite que o usuário execute comandos de IA.',
    'shop-ai-read' => 'Permite que o usuário acesse informações de IA sem executar comandos.',
    'vendor-payment' => 'Permite que o usuário adicione registros de pagamentos para fornecedores ou transfira fundos por meio de suas contas conectadas, como o Stripe Connect.',
    'company-read' => 'Permite ler informações do perfil empresarial.',
    'company-write' => 'Permite ler e escrever informações do perfil empresarial.',
    'agency-read' => 'Permite ler informações da agência.',
    'agency-write' => 'Permite ler e escrever informações da agência.',
    'note-read' => 'Permite ler notas da loja.',
    'note-write' => 'Permite ler e escrever notas de loja.',
    'developer-read' => 'Permite ler ativos dos desenvolvedores.',
    'developer-write' => 'Permite ler e escrever ativos de desenvolvedores.',
    'tokens-read' => 'Leia tokens e clientes Oauth.',
    'tokens-write' => 'Escreva tokens e clientes Oauth.',
];
