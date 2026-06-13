<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Alcance del administrador de Selldone.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Acceso restringido a inversores.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Lea la información del perfil, incluido el nombre, la dirección de correo electrónico, la imagen y el estado de autenticación.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Acceso al número de contacto',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Leer y editar la dirección de la libreta de direcciones guardada',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Actualizar perfil de usuario.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Pedido y pedido de tienda.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Leer historial de pedidos.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Acceso a mis tarjetas de regalo.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Editar artículos.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Gestionar notificaciones.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Ver lista de tiendas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Editar detalles de la tienda.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Añadir nueva tienda.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Eliminar tienda.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Gestionar tickets de soporte.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Gestionar tarjetas de regalo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Ver tarjetas de regalo.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Gestionar preguntas frecuentes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Ver preguntas frecuentes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Gestionar categorías.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Ver categorías.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Gestionar productos.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Ver productos.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Ver informes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Administrar cuentas financieras.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Ver cuentas financieras.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Editar páginas de la tienda.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Ver páginas de la tienda.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Gestionar almacén.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Ver almacén.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Gestionar el acceso del personal.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Ver acceso del personal.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Ver pedidos.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Gestionar pedidos.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Gestionar perfil comercial.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Ver perfil comercial.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Gestionar códigos de descuento.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Ver códigos de descuento.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Administrar cupones.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Ver cupones.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Gestionar ofertas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Ver ofertas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Gestionar reembolsos.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Ver reembolsos.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Gestionar loterías.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Ver loterías.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Gestionar comunidad.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Ver comunidad.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Gestionar clientes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Ver clientes.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Gestionar suscripciones.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Ver suscripciones.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Acceso a acciones de cumplimiento de pedidos de proveedores.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Órdenes de cambio, pago y otra información del proveedor.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Administrar proveedores de conexión.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Ver proveedores de conexión.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Ejecuta comandos de IA.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Ver información de IA.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Gestionar pagos a proveedores.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Ver pagos de proveedores.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Ver perfil comercial.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Gestionar perfil comercial.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Ver información de la agencia.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Gestionar la información de la agencia.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Ver notas de la tienda.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Gestionar notas de la tienda.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Ver los activos del desarrollador.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Gestionar los activos del desarrollador.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Acceder a información personal y configuración de cuenta.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Administrar billetera y transacciones.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Ver transacciones de billetera.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Ver tokens y clientes de OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Administre tokens y clientes de OAuth.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Administrar la configuración de seguridad.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Administrar afiliados.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Ver afiliados.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Administrar plantillas de impresión.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Ver plantillas de impresión.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Gestionar reseñas.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Ver reseñas.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Ver información de monetización.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Gestionar la información de monetización.',



    'notifications' => 'Enviar y recibir notificaciones.',
    'read-shops' => 'Leer lista de tiendas.',
    'shop-edit' => 'Almacenar el acceso de edición.',
    'shop-contacts' => 'Recibir y editar formularios de contacto.',
    'shop-gift-cards' => 'Creación, edición y administración de tarjetas.',
    'shop-faqs' => 'Cree, edite y administre las preguntas frecuentes.',
    'shop-categories' => 'Creación, edición y gestión de categorías.',
    'backoffice-write-products' => 'Autorizar la creación, edición y gestión de productos en el back office.',
    'backoffice-read-products' => 'Autorizar el acceso para ver la lista de productos y la información detallada de los productos en el back office.',
    'shop-read-reports' => 'Leer información e informes.',
    'shop-socials' => 'Editar tienda redes sociales.',
    'shop-accounts' => 'Edite y elimine cuentas financieras vinculadas a la tienda.',
    'shop-menus' => 'Editar menús de tiendas.',
    'shop-pages' => 'Editar páginas de la tienda.',
    'shop-warehouse' => 'Editar almacén de la tienda',
    'shop-permissions' => 'Ver y editar el acceso a la tienda.',
    'shop-process-center' => 'Gestionar los pedidos recibidos.',
    'shop-profile' => 'Administrar perfiles de tiendas.',
    'shop-discount-code' => 'Administrar códigos de descuento.',
    'shop-coupon' => 'Administrar cupones.',
    'shop-offer' => 'Gestionar ofertas.',
    'shop-cashback' => 'Gestionar reembolsos.',
    'shop-lottery' => 'Administrar loterías.',
    'shop-community' => 'Administrar comunidad.',
    'shop-customers' => 'Gestionar clientes.',
    'shop-ribbon' => 'Administrar suscripciones de Ribbon.',
    'community-read' => 'Lea la comunidad Selldone.',
    'community-write' => 'Escribe en la comunidad selldone.',
    'profile-write' => 'Escribe la información del perfil del usuario.',
    'connect-providers' => 'Agregar, leer y escribir proveedores de conexión.',
    'personal-identification' => 'Leer información personal, accesos y configuración de la cuenta.',
    'accounts' => 'Acceso a billeteras, lectura de transacciones e historial de recargas.',
    'shop-add' => 'Añadir nueva tienda.',
    'shop-delete' => 'Eliminar una tienda.',
    'shop-ai-write' => 'Permite al usuario ejecutar comandos de IA.',
    'shop-ai-read' => 'Permite al usuario acceder a la información de IA sin ejecutar comandos.',
    'vendor-payment' => 'Permite al usuario agregar registros de pagos para proveedores o transferir fondos a través de sus cuentas conectadas como Stripe Connect.',
    'company-read' => 'Permite leer información del perfil empresarial.',
    'company-write' => 'Permite leer y escribir información del perfil empresarial.',
    'agency-read' => 'Permite leer información de la agencia.',
    'agency-write' => 'Permite leer y escribir información de la agencia.',
    'note-read' => 'Permite leer notas de la tienda.',
    'note-write' => 'Permite leer y escribir notas de la tienda.',
    'developer-read' => 'Permite leer activos de desarrolladores.',
    'developer-write' => 'Permite leer y escribir activos de desarrolladores.',
    'tokens-read' => 'Leer tokens y clientes de Oauth.',
    'tokens-write' => 'Escribe tokens y clientes Oauth.',
];
