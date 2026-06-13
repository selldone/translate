<?php

use App\Providers\AuthServiceProvider;

return [
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    */

    AuthServiceProvider::SCOPE_SELLDONE_ADMINISTRATOR => 'Selldone-Administratorbereich.',
    AuthServiceProvider::SCOPE_SELLDONE_INVESTOR => 'Eingeschränkter Anlegerzugang.',

    AuthServiceProvider::SCOPE_USER_PROFILE_READ => 'Lesen Sie die Details des Benutzerprofils.',
    AuthServiceProvider::SCOPE_USER_PHONE => 'Telefonnummer lesen.',
    AuthServiceProvider::SCOPE_USER_ADDRESS => 'Gespeicherte Adressen lesen und aktualisieren.',
    AuthServiceProvider::SCOPE_USER_PROFILE_WRITE => 'Benutzerprofil aktualisieren.',

    AuthServiceProvider::SCOPE_STOREFRONT_BUY => 'Bestellungen aufgeben.',
    AuthServiceProvider::SCOPE_STOREFRONT_ORDER_HISTORY => 'Bestellhistorie anzeigen.',
    AuthServiceProvider::SCOPE_STOREFRONT_MY_GIFT_CARDS => 'Greifen Sie auf Geschenkkarten zu.',

    AuthServiceProvider::SCOPE_ARTICLES => 'Artikel bearbeiten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTIFICATION => 'Benachrichtigungen verwalten.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_READ => 'Shopliste ansehen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_WRITE => 'Shop-Details bearbeiten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_ADD => 'Neuen Shop hinzufügen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_SHOP_DELETE => 'Shop löschen.',

    AuthServiceProvider::SCOPE_BACKOFFICE_SUPPORT_TICKETS => 'Verwalten Sie Support-Tickets.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_WRITE => 'Geschenkkarten verwalten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_GIFTCARD_READ => 'Geschenkkarten ansehen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_WRITE => 'FAQs verwalten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FAQ_READ => 'FAQs ansehen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_WRITE => 'Kategorien verwalten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CATEGORY_READ => 'Kategorien anzeigen.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_WRITE => 'Produkte verwalten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRODUCT_READ => 'Produkte ansehen.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REPORT_READ => 'Berichte anzeigen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_WRITE => 'Finanzkonten verwalten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_FINANCE_READ => 'Finanzkonten anzeigen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_WRITE => 'Shop-Seiten bearbeiten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PAGE_READ => 'Shop-Seiten anzeigen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_WRITE => 'Lager verwalten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOGISTIC_READ => 'Lager ansehen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_WRITE => 'Verwalten Sie den Personalzugriff.',
    AuthServiceProvider::SCOPE_BACKOFFICE_STAFF_READ => 'Mitarbeiterzugriff anzeigen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_READ => 'Bestellungen ansehen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_ORDER_WRITE => 'Bestellungen verwalten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_WRITE => 'Unternehmensprofil verwalten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_BUSINESS_PROFILE_READ => 'Unternehmensprofil ansehen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_WRITE => 'Rabattcodes verwalten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_DISCOUNT_CODE_READ => 'Rabattcodes ansehen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_WRITE => 'Gutscheine verwalten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COUPON_READ => 'Gutscheine ansehen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_WRITE => 'Angebote verwalten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_OFFER_READ => 'Angebote ansehen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_WRITE => 'Cashbacks verwalten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CASHBACK_READ => 'Cashbacks anzeigen.',

    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_WRITE => 'Lotterien verwalten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_LOTTERY_READ => 'Lotterien ansehen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_WRITE => 'Community verwalten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMMUNITY_READ => 'Community ansehen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_WRITE => 'Kunden verwalten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_CUSTOMER_READ => 'Kunden anzeigen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_WRITE => 'Abonnements verwalten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_RIBBON_READ => 'Abonnements anzeigen.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_READ => 'Lieferantenbestellungen anzeigen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_WRITE => 'Verwalten Sie Lieferantenbestellungen und -zahlungen.',

    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_WRITE => 'Verbindungsanbieter verwalten.',
    AuthServiceProvider::SCOPE_CONNECT_PROVIDER_READ => 'Connect-Anbieter anzeigen.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AI_WRITE => 'Führen Sie KI-Befehle aus.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AI_READ => 'AI-Informationen anzeigen.',

    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_WRITE => 'Verwalten Sie Lieferantenzahlungen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_VENDOR_PAYMENT_READ => 'Lieferantenzahlungen anzeigen.',

    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_READ => 'Unternehmensprofil ansehen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_COMPANY_WRITE => 'Unternehmensprofil verwalten.',

    AuthServiceProvider::SCOPE_AGENCY_READ => 'Agenturinformationen anzeigen.',
    AuthServiceProvider::SCOPE_AGENCY_WRITE => 'Agenturinformationen verwalten.',

    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_READ => 'Shop-Notizen anzeigen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_NOTE_WRITE => 'Shop-Notizen verwalten.',

    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_READ => 'Entwicklerressourcen anzeigen.',
    AuthServiceProvider::SCOPE_SELLDONE_DEVELOPER_WRITE => 'Verwalten Sie Entwicklerressourcen.',

    // Restricted:
    AuthServiceProvider::SCOPE_SELLDONE_IDENTIFICATION => 'Greifen Sie auf persönliche Informationen und Kontoeinstellungen zu.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_WRITE => 'Verwalten Sie Wallet und Transaktionen.',
    AuthServiceProvider::SCOPE_BACKOFFICE_WALLET_READ => 'Wallet-Transaktionen anzeigen.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_READ => 'OAuth-Tokens und -Clients anzeigen.',
    AuthServiceProvider::SCOPE_SELLDONE_TOKEN_WRITE => 'Verwalten Sie OAuth-Tokens und -Clients.',
    AuthServiceProvider::SCOPE_SELLDONE_SECURITY_WRITE => 'Sicherheitseinstellungen verwalten.',

    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_WRITE => 'Affiliates verwalten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_AFFILIATE_READ => 'Partner anzeigen.',

    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_WRITE => 'Druckvorlagen verwalten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_PRINT_READ => 'Druckvorlagen ansehen.',

    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_WRITE => 'Bewertungen verwalten.',
    AuthServiceProvider::SCOPE_BACKOFFICE_REVIEWS_READ => 'Bewertungen ansehen.',

    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_READ => 'Informationen zur Monetarisierung anzeigen.',
    AuthServiceProvider::SCOPE_SELLDONE_MONETIZATION_WRITE => 'Monetarisierungsinformationen verwalten.',



    'profile' => 'Profilinformationen lesen, einschließlich Name, E-Mail-Adresse, Bild und Authentifizierungsstatus.',
    'phone' => 'Zugriff auf die Kontaktnummer.',
    'address' => 'Adresse aus dem gespeicherten Adressbuch lesen und bearbeiten.',
    'buy' => 'Bestellungen aufgeben und Shop-Käufe tätigen.',
    'order-history' => 'Bestellhistorie lesen.',
    'my-gift-cards' => 'Zugriff auf eigene Geschenkkarten.',
    'articles' => 'Artikel bearbeiten.',
    'notifications' => 'Benachrichtigungen senden und empfangen.',
    'read-shops' => 'Shop-Liste lesen.',
    'shop-edit' => 'Schreibzugriff auf den Shop.',
    'shop-contacts' => 'Kontaktformulare empfangen und bearbeiten.',
    'shop-gift-cards' => 'Geschenkkarten erstellen, bearbeiten und verwalten.',
    'shop-faqs' => 'Häufig gestellte Fragen erstellen, bearbeiten und verwalten.',
    'shop-categories' => 'Kategorien erstellen, bearbeiten und verwalten.',
    'backoffice-write-products' => 'Erstellung, Bearbeitung und Verwaltung von Produkten im Backoffice autorisieren.',
    'backoffice-read-products' => 'Zugriff auf die Produktliste und detaillierte Produktinformationen im Backoffice autorisieren.',
    'shop-read-reports' => 'Informationen und Berichte lesen.',
    'shop-socials' => 'Soziale Netzwerke im Shop bearbeiten.',
    'shop-accounts' => 'Mit dem Shop verknüpfte Finanzkonten bearbeiten und löschen.',
    'shop-menus' => 'Shop-Menüs bearbeiten.',
    'shop-pages' => 'Shop-Seiten bearbeiten.',
    'shop-warehouse' => 'Lager bearbeiten.',
    'shop-permissions' => 'Shop-Zugriffsrechte anzeigen und bearbeiten.',
    'shop-process-center' => 'Eingegangene Bestellungen verwalten.',
    'shop-profile' => 'Shop-Profile verwalten.',
    'shop-discount-code' => 'Rabattcodes verwalten.',
    'shop-coupon' => 'Gutscheine verwalten.',
    'shop-offer' => 'Angebote verwalten.',
    'shop-cashback' => 'Cashbacks verwalten.',
    'shop-lottery' => 'Lotterien verwalten.',
    'shop-community' => 'Community verwalten.',
    'shop-customers' => 'Kunden verwalten.',
    'shop-ribbon' => 'Ribbon-Abonnements verwalten.',
    'community-read' => 'Selldone-Community lesen.',
    'community-write' => 'In der Selldone-Community schreiben.',
    'profile-write' => 'Benutzerprofilinformationen schreiben.',
    'vendor-read' => 'Zugriff auf Erfüllungsaktionen von Lieferantenbestellungen.',
    'vendor-write' => 'Bestellungen, Zahlungs- und sonstige Lieferanteninformationen bearbeiten.',
    'connect-providers' => 'Verbindungsanbieter hinzufügen, lesen und schreiben.',
    'personal-identification' => 'Persönliche Informationen, Zugriffsrechte und Kontokonfigurationen lesen.',
    'accounts' => 'Zugriff auf Wallets, Transaktionen und Aufladeverläufe lesen.',
    'shop-add' => 'Neuen Shop hinzufügen.',
    'shop-delete' => 'Einen Shop entfernen.',
    'shop-ai-write' => 'Ermöglicht dem Benutzer, KI-Befehle auszuführen.',
    'shop-ai-read' => 'Ermöglicht dem Benutzer, auf KI-Informationen zuzugreifen, ohne Befehle auszuführen.',
    'vendor-payment' => 'Ermöglicht das Hinzufügen von Zahlungsdatensätzen für Lieferanten oder die Überweisung von Geld über verknüpfte Konten wie Stripe Connect.',
    'company-read' => 'Unternehmensprofilinformationen lesen.',
    'company-write' => 'Unternehmensprofilinformationen lesen und schreiben.',
    'agency-read' => 'Agenturinformationen lesen.',
    'agency-write' => 'Agenturinformationen lesen und schreiben.',
    'note-read' => 'Shop-Notizen lesen.',
    'note-write' => 'Shop-Notizen lesen und schreiben.',
    'developer-read' => 'Entwickler-Assets lesen.',
    'developer-write' => 'Entwickler-Assets lesen und schreiben.',
    'tokens-read' => 'OAuth-Token und -Clients lesen.',
    'tokens-write' => 'OAuth-Token und -Clients schreiben.',
];
