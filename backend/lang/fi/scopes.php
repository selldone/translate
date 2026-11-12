<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone järjestelmänvalvojan laajuus.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Rajoitettu sijoittajien pääsy.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Lue käyttäjäprofiilin tiedot.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Lue puhelinnumero.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Lue ja päivitä tallennettuja osoitteita.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Päivitä käyttäjäprofiili.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Tee tilaukset.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Näytä tilaushistoria.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Pääsy lahjakortteihin.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Muokkaa artikkeleita.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Hallinnoi ilmoituksia.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Katso kauppalista.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Muokkaa kaupan tietoja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Lisää uusi kauppa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Poista kauppa.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Hallinnoi tukilippuja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Hallinnoi lahjakortteja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Katso lahjakortit.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'Hallinnoi usein kysyttyjä kysymyksiä.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'Katso usein kysytyt kysymykset.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Hallinnoi luokkia.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Näytä luokat.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Hallitse tuotteita.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Katso tuotteet.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Näytä raportit.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Hallitse rahoitustilejä.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Tarkastele rahoitustilejä.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Muokkaa kauppasivuja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Näytä kaupan sivut.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Hallitse varastoa.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Näytä varasto.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Hallinnoi henkilökunnan pääsyä.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Katso henkilökunnan pääsy.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Katso tilaukset.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Hallitse tilauksia.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Hallinnoi yritysprofiilia.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Näytä yritysprofiili.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Hallinnoi alennuskoodeja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Katso alennuskoodit.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Hallitse kuponkeja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Katso kupongit.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Hallinnoi tarjouksia.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Katso tarjoukset.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Hallitse käteispalautuksia.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Katso cashbackit.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Hallitse arpajaisia.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Katso arpajaiset.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Hallinnoi yhteisöä.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Näytä yhteisö.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Hallitse asiakkaita.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Näytä asiakkaat.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Hallinnoi tilauksia.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Näytä tilaukset.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Katso myyjätilaukset.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Hallitse myyjätilauksia ja maksuja.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Hallinnoi yhteydentarjoajia.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Katso yhteyspalveluntarjoajat.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Suorita AI-komentoja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'Näytä AI-tiedot.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Hallitse myyjän maksuja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Katso myyjän maksut.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Näytä yritysprofiili.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Hallinnoi yritysprofiilia.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Katso viraston tiedot.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Hallinnoi viraston tietoja.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Katso kaupan muistiinpanot.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Hallinnoi kaupan muistiinpanoja.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Näytä kehittäjän omaisuus.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Hallinnoi kehittäjän omaisuutta.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Käytä henkilökohtaisia tietoja ja tilin asetuksia.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Hallitse lompakkoa ja tapahtumia.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Katso lompakkotapahtumat.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'Tarkastele OAuth-tunnuksia ja asiakkaita.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Hallitse OAuth-tunnuksia ja asiakkaita.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Hallinnoi suojausasetuksia.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Hallitse tytäryhtiöitä.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Näytä tytäryhtiöt.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Hallitse tulostusmalleja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Katso tulostusmalleja.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Hallinnoi arvosteluja.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Näytä arvostelut.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Näytä kaupallistamistiedot.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Hallinnoi kaupallistamistietoja.',



    'profile' => 'Lue profiilitiedot, mukaan lukien nimi, sähköpostiosoite, kuva ja todennustila.',
    'phone' => 'Yhteysnumeron käyttöoikeus',
    'address' => 'Lue ja muokkaa osoitetta tallennetusta osoitekirjasta',
    'buy' => 'Tilaa & Shop Tilaa.',
    'order-history' => 'Lue tilaushistoria.',
    'my-gift-cards' => 'Pääsy lahjakortteihini.',
    'articles' => 'Muokkaa artikkeleita.',
    'notifications' => 'Lähetä ja vastaanota ilmoituksia.',
    'read-shops' => 'Lue myymäläluettelo.',
    'shop-edit' => 'Kaupan muokkausoikeudet.',
    'shop-contacts' => 'Vastaanota ja muokkaa yhteydenottolomakkeita.',
    'shop-gift-cards' => 'Korttien luominen, muokkaaminen ja hallinta.',
    'shop-faqs' => 'Luo, muokkaa ja hallinnoi usein kysyttyjä kysymyksiä.',
    'shop-categories' => 'Luokkien luominen, muokkaaminen ja hallinta.',
    'backoffice-write-products' => 'Valtuuta tuotteiden luominen, muokkaaminen ja hallinta taustatoimistossa.',
    'backoffice-read-products' => 'Valtuuta käyttöoikeus tarkastellaksesi tuoteluetteloa ja yksityiskohtaisia tuotetietoja taustatoimistossa.',
    'shop-read-reports' => 'Lue tiedot ja raportit.',
    'shop-socials' => 'Muokkaa kaupan sosiaalisia verkostoja.',
    'shop-accounts' => 'Muokkaa ja poista kauppaan linkitettyjä taloustilejä.',
    'shop-menus' => 'Muokkaa kaupan valikoita.',
    'shop-pages' => 'Muokkaa kauppasivuja.',
    'shop-warehouse' => 'Muokkaa Store Warehousea',
    'shop-permissions' => 'Tarkastele ja muokkaa kaupan käyttöoikeuksia.',
    'shop-process-center' => 'Hallitse vastaanotettuja tilauksia.',
    'shop-profile' => 'Hallinnoi kaupan profiileja.',
    'shop-discount-code' => 'Hallinnoi alennuskoodeja.',
    'shop-coupon' => 'Hallitse kuponkeja.',
    'shop-offer' => 'Hallinnoi tarjouksia.',
    'shop-cashback' => 'Hallitse käteispalautuksia.',
    'shop-lottery' => 'Hallitse arpajaisia.',
    'shop-community' => 'Hallinnoi yhteisöä.',
    'shop-customers' => 'Hallitse asiakkaita.',
    'shop-ribbon' => 'Hallinnoi nauhatilauksia.',
    'community-read' => 'Lue Selldone-yhteisö.',
    'community-write' => 'Kirjoita myyty yhteisö.',
    'profile-write' => 'Kirjoita käyttäjäprofiilin tiedot.',
    'vendor-read' => 'Pääsy toimittajatilausten toteutustoimintoihin.',
    'vendor-write' => 'Muuta tilauksia, maksuja ja muita myyjän tietoja.',
    'connect-providers' => 'Lisää, lue ja kirjoita yhteyspalveluntarjoajia.',
    'personal-identification' => 'Lue henkilökohtaisia tietoja, käyttöoikeuksia ja tilin asetuksia.',
    'accounts' => 'Pääsy lompakoihin, lukea tapahtumia ja lataushistoriaa.',
    'shop-add' => 'Lisää uusi kauppa.',
    'shop-delete' => 'Poista kauppa.',
    'shop-ai-write' => 'Antaa käyttäjän suorittaa AI-komentoja.',
    'shop-ai-read' => 'Antaa käyttäjän käyttää tekoälytietoja suorittamatta komentoja.',
    'vendor-payment' => 'Antaa käyttäjän lisätä maksutietueita myyjille tai siirtää varoja yhdistettyjen tiliensä, kuten Stripe Connectin, kautta.',
    'company-read' => 'Mahdollistaa yritysprofiilin tietojen lukemisen.',
    'company-write' => 'Mahdollistaa yritysprofiilin tietojen lukemisen ja kirjoittamisen.',
    'agency-read' => 'Mahdollistaa viraston tietojen lukemisen.',
    'agency-write' => 'Mahdollistaa viraston tietojen lukemisen ja kirjoittamisen.',
    'note-read' => 'Mahdollistaa kaupan muistiinpanojen lukemisen.',
    'note-write' => 'Mahdollistaa kaupan muistiinpanojen lukemisen ja kirjoittamisen.',
    'developer-read' => 'Mahdollistaa kehittäjien resurssien lukemisen.',
    'developer-write' => 'Mahdollistaa kehittäjien resurssien lukemisen ja kirjoittamisen.',
    'tokens-read' => 'Lue Oauth-tunnukset ja -asiakkaat.',
    'tokens-write' => 'Kirjoita Oauth-tunnukset ja -asiakkaat.',
];
