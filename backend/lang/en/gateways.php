<?php

/*
|--------------------------------------------------------------------------
| Payment services ▶ Public labels
|--------------------------------------------------------------------------
|
| Every key is the definition key of one payment service (App\Gateway\...\XService::GetDefinition()).
| `name` and `description` are shown to merchants and buyers; `fields.<variable>.title` and the
| optional `fields.<variable>.hint` label the credential inputs of the merchant setup form.
| Variable names are fixed in code and must never be translated.
|
*/

return [

    // ―――――――――――――――――――――― Offline ――――――――――――――――――――――

    'cash' => [
        'name' => 'Cash payment',
        'description' => 'Cash payment at the counter, available only in the Selldone POS.',
        'fields' => [],
    ],

    'cod' => [
        'name' => 'Cash on delivery',
        'description' => 'The buyer pays the courier when the order is delivered.',
        'fields' => [],
    ],

    'dir' => [
        'name' => 'Bank transfer',
        'description' => 'The buyer transfers the amount to your bank account and uploads the payment receipt.',
        'fields' => [
            'bank name' => ['title' => 'Bank name'],
            'card name' => ['title' => 'Card name'],
            'card no' => ['title' => 'Card number'],
            'account no' => ['title' => 'Bank account number'],
            'iban' => ['title' => 'International Bank Account Number (IBAN)'],
            'swift' => ['title' => 'SWIFT code'],
            'qr' => ['title' => 'QR'],
        ],
    ],

    // ―――――――――――――――――――――― Global ――――――――――――――――――――――

    'stripe' => [
        'name' => 'Stripe',
        'description' => 'Stripe is an American technology company based in San Francisco, California. Its software allows individuals and businesses to make and receive payments over the Internet.',
        'fields' => [
            'key' => ['title' => 'Public Key', 'hint' => 'Publishable key from Stripe > Developers > API keys. It starts with pk_.'],
            'secret' => ['title' => 'Secret Key', 'hint' => 'It starts with sk_. Use the test key in debug mode and the live key in live mode.'],
            'whsec' => ['title' => 'Webhook Secret', 'hint' => 'Signing secret of the shop webhook endpoint. It starts with whsec_.'],
        ],
    ],

    'paypalst' => [
        'name' => 'PayPal',
        'description' => 'PayPal is an online payment system that makes paying for things online and sending and receiving money safe and secure.',
        'fields' => [
            'client_id' => ['title' => 'Client ID'],
            'secret' => ['title' => 'Secret Key'],
        ],
    ],

    'paypal' => [
        'name' => 'Braintree',
        'description' => 'Built for large enterprises with international scale. Easily add payment methods, including digital wallets such as Apple Pay and Google Pay. Accept and process cards, wallets, and Local Payment Methods in a single, modern integration.',
        'fields' => [
            'merchantId' => ['title' => 'Merchant Id'],
            'publicKey' => ['title' => 'Public Key'],
            'privateKey' => ['title' => 'Private Key'],
            'merchantAccountId' => ['title' => 'Merchant Account Id'],
        ],
    ],

    'quickpay' => [
        'name' => 'QuickPay',
        'description' => 'QuickPay operates at the highest level of security and is certified by the PCI Security Standards Council. You can feel safe with us and your customers safe with you.',
        'fields' => [
            'api' => ['title' => 'API Key'],
            'private' => ['title' => 'Private Key'],
        ],
    ],

    'xendit' => [
        'name' => 'Xendit',
        'description' => 'Xendit is a payment gateway that helps businesses make payments simple, secure and easy for customers.',
        'fields' => [
            'secret' => ['title' => 'Secret Key'],
        ],
    ],

    'fondy' => [
        'name' => 'Fondy',
        'description' => "Fondy's leading one-stop payment solution for cross-border commerce, marketplaces and platforms enables the means to move money without friction.",
        'fields' => [
            'merchant_id' => ['title' => 'Merchant ID'],
            'secret' => ['title' => 'Payment Key'],
            'credit' => ['title' => 'Credit Private Key'],
        ],
    ],

    'flutterwave' => [
        'name' => 'Flutterwave',
        'description' => 'Flutterwave is a Nigerian fintech company that provides a payment infrastructure for global merchants and payment service providers across the continent.',
        'fields' => [
            'public' => ['title' => 'Public Key'],
            'secret' => ['title' => 'Secret Key'],
            'hash' => ['title' => 'Webhook Secret Hash (Auto-generate)'],
        ],
    ],

    'mercadopago' => [
        'name' => 'Mercado Pago',
        'description' => 'Mercado Pago develops an online payment platform that enables its customers to send and receive money via emails. It offers solutions that enable its customers to facilitate transactions with online stores which accept MercadoPago.',
        'fields' => [
            'key' => ['title' => 'Public Key'],
            'access' => ['title' => 'Access Token'],
        ],
    ],

    'paystack' => [
        'name' => 'Paystack',
        'description' => 'Paystack is a Nigerian financial technology company that offers payment processing services to businesses.',
        'fields' => [
            'public' => ['title' => 'Public Key'],
            'secret' => ['title' => 'Secret Key'],
        ],
    ],

    'monetbil' => [
        'name' => 'Monetbil',
        'description' => 'Monetbil is a mobile payment service that enables merchants to accept payments from customers through mobile money accounts.',
        'fields' => [
            'key' => ['title' => 'Service Key'],
            'secret' => ['title' => 'Service Secret'],
        ],
    ],

    'paymob' => [
        'name' => 'Paymob',
        'description' => 'Paymob is a payment service provider that offers a suite of financial services and payment solutions for businesses. Paymob primarily operates in the Middle East and North Africa (MENA) region, with a significant presence in Egypt.',
        'fields' => [
            'card_id' => ['title' => 'Card Iframe ID', 'hint' => 'Find it in your Paymob > Developers > Iframes'],
            'installment_id' => ['title' => 'Installment Iframe ID', 'hint' => 'Find it in your Paymob > Developers > Iframes'],
            'valu_id' => ['title' => 'ValU Iframe ID', 'hint' => 'Find it in your Paymob > Developers > Iframes'],
            'forsa_id' => ['title' => 'Forsa Iframe ID', 'hint' => 'Find it in your Paymob > Developers > Iframes'],
            'api' => ['title' => 'API Key', 'hint' => 'Find it in your Paymob > Settings > Account Info'],
            'hmac' => ['title' => 'HMAC', 'hint' => 'Find it in your Paymob > Settings > Account Info'],
            'card_integration_id' => ['title' => 'Card Payment Integration ID', 'hint' => 'Find it in your Paymob > Developers > Payment Integrations'],
        ],
    ],

    'squareup' => [
        'name' => 'Square',
        'description' => 'Square is a financial services company. It offers point-of-sale systems, mobile card readers, online payment solutions, and business tools for sales tracking, inventory, and analytics.',
        'fields' => [
            'id' => ['title' => 'Application ID', 'hint' => 'Find it in your Square > Applications > Credentials'],
            'location' => ['title' => 'Location ID', 'hint' => 'Find it in your Square > Applications > Locations'],
            'secret' => ['title' => 'Access token', 'hint' => 'Find it in your Square > Applications > Credentials'],
        ],
    ],

    'paytabs' => [
        'name' => 'PayTabs',
        'description' => 'PayTabs is a secure payment processing company which facilitates payments for startups, entrepreneurs, SMEs, merchants and governments by providing ecommerce, mobile commerce, social commerce and payment orchestration solutions.',
        'fields' => [
            'profile_id' => ['title' => 'Profile ID', 'hint' => 'Find it in your Paytabs > Profile tab.'],
            'server_key' => ['title' => 'Server Key', 'hint' => 'Find it in your Paytabs > Developers > API Keys > Key management.'],
            'client_key' => ['title' => 'Client Key', 'hint' => 'Find it in your Paytabs > Developers > API Keys > Key management.'],
        ],
    ],

    'mollie' => [
        'name' => 'Mollie',
        'description' => 'Mollie is a Dutch payment service provider that helps businesses accept secure online payments through cards, wallets, and popular European local payment methods.',
        'fields' => [
            'api_key' => ['title' => 'API Key', 'hint' => 'Find it in Mollie Dashboard > Developers > API keys. Use a test_ key in debug mode and a live_ key in live mode.'],
        ],
    ],

    'viva' => [
        'name' => 'Viva',
        'description' => 'Accept online payments through Viva.com Smart Checkout.',
        'fields' => [
            'client_id' => ['title' => 'Smart Checkout Client ID', 'hint' => 'Use the Smart Checkout client ID from the matching demo or live Viva.com account.'],
            'client_secret' => ['title' => 'Smart Checkout Client Secret', 'hint' => 'Use the Smart Checkout client secret from the same Viva.com account.'],
            'source_code' => ['title' => 'Payment Source Code', 'hint' => 'Enter the four-digit payment source code, including any leading zeros.'],
            'webhook_verification_key' => ['title' => 'Webhook Verification Key', 'hint' => 'Optional. Enter the Viva.com webhook verification key to enable webhook URL verification.'],
        ],
    ],

    'pesapal' => [
        'name' => 'Pesapal',
        'description' => 'Accept online card and mobile payments through Pesapal.',
        'fields' => [
            'consumer_key' => ['title' => 'Consumer Key', 'hint' => 'Enter the Consumer Key from your Pesapal merchant account. Use sandbox credentials in Debug mode and live credentials in Live mode.'],
            'consumer_secret' => ['title' => 'Consumer Secret', 'hint' => 'Enter the matching Consumer Secret from the same Pesapal account and environment. Selldone registers the IPN callback automatically when you enable and save this gateway.'],
        ],
    ],

    'razorpay' => [
        'name' => 'Razorpay',
        'description' => 'Razorpay is the only payments solution in India that allows businesses to accept, process and disburse payments with its product suite.',
        'fields' => [
            'key' => ['title' => 'API Key'],
            'secret' => ['title' => 'Secret Key'],
            'whsec' => ['title' => 'Webhook Secret', 'hint' => 'Optional. The secret you chose for the shop webhook in Razorpay > Settings > Webhooks; it verifies subscription events.'],
        ],
    ],

    'esewa' => [
        'name' => 'eSewa',
        'description' => 'eSewa is a digital wallet based in Nepal providing instant online payment solutions.',
        'fields' => [
            'merchant_code' => ['title' => 'Merchant Code'],
        ],
    ],

    'easebuzz' => [
        'name' => 'Easebuzz',
        'description' => 'Easebuzz is a comprehensive digital payment solution platform, offering a range of services including payment gateway, merchant accounts, and seamless integration for businesses to facilitate smooth online transactions.',
        'fields' => [
            'key' => ['title' => 'Key', 'hint' => 'Find it in your Easebuzz dashboard, e.g. 8542AAD2.'],
            'salt' => ['title' => 'Salt', 'hint' => 'Find it in your Easebuzz dashboard, e.g. DANN887YUE.'],
        ],
    ],

    'jazzcash' => [
        'name' => 'JazzCash',
        'description' => 'JazzCash, formerly known as MobiCash, is a Pakistani mobile wallet, mobile payments, and branchless banking services provider.',
        'fields' => [
            'merchant_id' => ['title' => 'Merchant ID'],
            'password' => ['title' => 'Password'],
            'integrity_salt' => ['title' => 'Integrity Salt'],
        ],
    ],

    'zaincash' => [
        'name' => 'ZainCash',
        'description' => 'ZainCash is a mobile wallet, money transfer, electronic bill payment, funds disbursement service, licensed by the Central Bank of Iraq.',
        'fields' => [
            'merchant_id' => ['title' => 'Merchant ID'],
            'msisdn' => ['title' => 'MSISDN'],
            'secret' => ['title' => 'Secret Key'],
        ],
    ],

    'momo' => [
        'name' => 'MoMo',
        'description' => 'MoMo is an e-wallet and payments app that allows users to make payments and transfer money digitally.',
        'fields' => [
            'partner_code' => ['title' => 'Partner Code'],
            'sub_partner_code' => ['title' => 'Sub partner Id (optional)'],
            'access' => ['title' => 'Access Key'],
            'secret' => ['title' => 'Secret Key'],
        ],
    ],

    'sslcommerz' => [
        'name' => 'SSLCommerz',
        'description' => 'SSLCommerz is a premier online payment gateway provider offering secure and efficient transaction solutions for businesses in Bangladesh.',
        'fields' => [
            'store_id' => ['title' => 'Store ID'],
            'store_passwd' => ['title' => 'Store Password'],
        ],
    ],

    // ―――――――――――――――――――――― Iran (IRR) ――――――――――――――――――――――

    'idpay' => [
        'name' => 'IDPay',
        'description' => 'IDPay online payment gateway for Iranian rial.',
        'fields' => [
            'key' => ['title' => 'API Key'],
        ],
    ],

    'payping' => [
        'name' => 'PayPing',
        'description' => 'PayPing online payment gateway for Iranian rial.',
        'fields' => [
            'key' => ['title' => 'API key'],
        ],
    ],

    'zarinpal' => [
        'name' => 'Zarinpal',
        'description' => 'Zarinpal online payment gateway for Iranian rial.',
        'fields' => [
            'key' => ['title' => 'Merchant ID'],
        ],
    ],

    'pasargad' => [
        'name' => 'Pasargad',
        'description' => 'Bank Pasargad online payment gateway for Iranian rial.',
        'fields' => [
            'terminal_code' => ['title' => 'Terminal Code'],
            'merchant_code' => ['title' => 'Merchant Code'],
            'private_key' => ['title' => 'Private Key'],
        ],
    ],

    'digipay' => [
        'name' => 'DigiPay',
        'description' => 'Smart and fast transactions with the DigiPay mobile payment application.',
        'fields' => [
            'username' => ['title' => 'Username'],
            'password' => ['title' => 'Password'],
            'client_id' => ['title' => 'Client ID'],
            'client_secret' => ['title' => 'Client Secret'],
        ],
    ],

    // ―――――――――――――――――――――― Crypto ――――――――――――――――――――――

    'bitcoin' => [
        'name' => 'Bitcoin',
        'description' => 'Accept Bitcoin payments to addresses derived from your wallet extended public key.',
        'fields' => [
            'xpub' => ['title' => 'XPUB', 'hint' => 'Extended public key of your Bitcoin wallet. Selldone derives one receiving address per payment from it.'],
        ],
    ],

    'cardano' => [
        'name' => 'Cardano',
        'description' => "Cardano is a cryptocurrency network and open source project that aims to run a public blockchain platform for smart contracts. Cardano's internal cryptocurrency is called Ada.",
        'fields' => [],
    ],

    'solana' => [
        'name' => 'Solana',
        'description' => 'Solana is a high-performance blockchain supporting developers around the world in creating decentralized applications.',
        'fields' => [
            'wallet' => ['title' => 'Wallet', 'hint' => 'Your Solana wallet address that receives the payments.'],
        ],
    ],

];
