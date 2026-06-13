<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Ámbito de administrador Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Acceso restrinxido para investidores.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Lea os detalles do perfil de usuario.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Ler o número de teléfono.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Le e actualiza os enderezos gardados.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Actualizar o perfil de usuario.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Fai pedidos.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Ver historial de pedidos.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Accede a tarxetas regalo.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Editar artigos.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Xestionar notificacións.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Ver lista de tendas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Edita os detalles da tenda.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Engadir nova tenda.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Eliminar tenda.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Xestionar tickets de soporte.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Xestionar tarxetas regalo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Ver tarxetas de agasallo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Xestionar preguntas frecuentes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Ver preguntas frecuentes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Xestionar categorías.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Ver categorías.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Xestionar produtos.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Ver produtos.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Ver informes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Xestionar contas financeiras.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Ver contas financeiras.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Editar páxinas da tenda.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Ver páxinas da tenda.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Xestionar almacén.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Ver almacén.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Xestionar o acceso do persoal.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Ver o acceso do persoal.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Ver pedidos.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Xestionar pedidos.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Xestionar o perfil da empresa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Ver o perfil da empresa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Xestionar códigos de desconto.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Ver códigos de desconto.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Xestionar cupóns.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Ver cupóns.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Xestionar ofertas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Ver ofertas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Xestionar cashbacks.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Ver cashbacks.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Xestionar loterías.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Ver loterías.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Xestionar comunidade.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Ver comunidade.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Xestionar clientes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Ver clientes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Xestionar subscricións.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Ver subscricións.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Ver pedidos de provedores.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Xestionar pedidos e pagamentos de provedores.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Xestionar provedores de conexión.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Consulta os provedores de conexión.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Executar comandos AI.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Ver información de IA.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Xestionar os pagos dos provedores.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Consulta os pagos dos provedores.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Ver o perfil da empresa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Xestionar o perfil da empresa.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Ver información da axencia.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Xestionar a información da axencia.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Ver notas da tenda.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Xestionar as notas da tenda.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Consulta os recursos do programador.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Xestionar os activos dos desenvolvedores.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Accede á información persoal e á configuración da conta.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Xestiona carteira e transaccións.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Ver transaccións de carteira.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Ver fichas OAuth e clientes.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Xestiona fichas e clientes OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Xestiona a configuración de seguranza.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Xestionar afiliados.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Ver afiliados.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Xestionar modelos de impresión.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Ver modelos de impresión.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Xestionar comentarios.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Ver comentarios.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Consulta a información de monetización.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Xestiona a información de monetización.',



    'profile' => 'Le a información do perfil, incluíndo nome, enderezo de correo electrónico, imaxe e estado de autenticación.',
    'phone' => 'Acceso ao número de contacto',
    'address' => 'Le e edita o enderezo da axenda de enderezos gardada',
    'buy' => 'Orde e pedido da tenda.',
    'order-history' => 'Ler o historial de pedidos.',
    'my-gift-cards' => 'Acceso ás miñas tarxetas regalo.',
    'articles' => 'Editar artigos.',
    'notifications' => 'Enviar e recibir notificacións.',
    'read-shops' => 'Ler a lista de tendas.',
    'shop-edit' => 'Acceso á edición da tenda.',
    'shop-contacts' => 'Recibir e editar formularios de contacto.',
    'shop-gift-cards' => 'Creación, edición e xestión de tarxetas.',
    'shop-faqs' => 'Crea, edita e xestiona as preguntas máis frecuentes.',
    'shop-categories' => 'Creación, edición e xestión de categorías.',
    'backoffice-write-products' => 'Autorizar a creación, edición e xestión de produtos no back office.',
    'backoffice-read-products' => 'Autorizar o acceso para ver a lista de produtos e a información detallada do produto no back office.',
    'shop-read-reports' => 'Ler información e informes.',
    'shop-socials' => 'Editar as redes sociais da tenda.',
    'shop-accounts' => 'Edita e elimina contas financeiras vinculadas a tendas.',
    'shop-menus' => 'Editar menús da tenda.',
    'shop-pages' => 'Editar páxinas da tenda.',
    'shop-warehouse' => 'Editar almacén almacén',
    'shop-permissions' => 'Consulta e edita o acceso á tenda.',
    'shop-process-center' => 'Xestionar pedidos recibidos.',
    'shop-profile' => 'Xestionar perfís de tenda.',
    'shop-discount-code' => 'Xestionar códigos de desconto.',
    'shop-coupon' => 'Xestionar cupóns.',
    'shop-offer' => 'Xestionar ofertas.',
    'shop-cashback' => 'Xestionar cashbacks.',
    'shop-lottery' => 'Xestionar loterías.',
    'shop-community' => 'Xestionar comunidade.',
    'shop-customers' => 'Xestionar clientes.',
    'shop-ribbon' => 'Xestionar subscricións da cinta.',
    'community-read' => 'Ler a comunidade de Selldone.',
    'community-write' => 'Escribe comunidade selldone.',
    'profile-write' => 'Escribe información do perfil do usuario.',
    'vendor-read' => 'Acceso ás accións de cumprimento dos pedidos de provedores.',
    'vendor-write' => 'Cambiar pedidos, pago e outra información do vendedor.',
    'connect-providers' => 'Engadir, ler e escribir provedores de conexión.',
    'personal-identification' => 'Lea información persoal, accesos e configuración da conta.',
    'accounts' => 'Acceso a carteiras, lectura de transaccións e historial de recargas.',
    'shop-add' => 'Engadir nova tenda.',
    'shop-delete' => 'Eliminar unha tenda.',
    'shop-ai-write' => 'Permite ao usuario executar comandos de IA.',
    'shop-ai-read' => 'Permite ao usuario acceder á información da IA sen executar comandos.',
    'vendor-payment' => 'Permite ao usuario engadir rexistros de pagos para provedores ou transferir fondos a través das súas contas conectadas como Stripe Connect.',
    'company-read' => 'Permite ler a información do perfil da empresa.',
    'company-write' => 'Permite ler e escribir información do perfil da empresa.',
    'agency-read' => 'Permite ler a información da axencia.',
    'agency-write' => 'Permite ler e escribir información da axencia.',
    'note-read' => 'Permite ler as notas da tenda.',
    'note-write' => 'Permite ler e escribir notas da tenda.',
    'developer-read' => 'Permite ler os recursos dos desenvolvedores.',
    'developer-write' => 'Permite ler e escribir recursos dos desenvolvedores.',
    'tokens-read' => 'Ler fichas e clientes de Oauth.',
    'tokens-write' => 'Escribe tokens e clientes de Oauth.',
];
