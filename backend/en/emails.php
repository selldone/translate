<?php


return [

    'email-types' => [
        ['code' => 'order-checkout', 'title' => 'Order confirmed by buyer','icon'=>'shopping_bag'],
        ['code' => 'order-payment', 'title' => 'Customer payment confirmation','icon'=>'shopping_bag add payment'],
        ['code' => 'order-payment-admin', 'title' => 'Order confirmation notice to seller','icon'=>'shopping_bag add payment'],
        ['code' => 'pos-checkout', 'title' => 'Confirm store box order for buyer','icon'=>'point_of_sale'],
        ['code' => 'pos-payment', 'title' => 'Confirm payment of cash register for buyer','icon'=>'point_of_sale add payment'],
        ['code' => 'pos-payment-admin', 'title' => "Notice of purchase in the seller's box",'icon'=>'point_of_sale add payment'],
        ['code' => 'shop-contact', 'title' => 'Inform contact form','icon'=>'contact_support'],
        ['code' => 'shop-customer-join', 'title' => 'Congratulations on joining the store','icon'=>'celebration'],
        ['code' => 'shop-giftcard', 'title' => 'Announcement of receiving a gift card to the user','icon'=>'card_giftcard'],

    ],

    'global' => [
        'greetings' => 'Hi, :name!',
        'end-statement' => 'Support team',

        'receiver_name' => 'Hi :user_name',
        'footer-help' => "Need help? Ask at [support@selldone.com](mailto:support@selldone.com) or visit our [help center](https://selldone.com/help)",
        'footer-shop' => "If you need help with anything please don't hesitate to drop us an email: :shop_mail",
        'accept' => "Accept",
        'reject' => "Reject",
        'verify' => "Verify",
        'title' => "Title",
        'value' => "Value",
        'description' => "Description",
        'Shop' => "Shop",
        'user' => "User",
        'license' => "License",
        'status' => "Status",
        'start' => "Start",
        'end' => "End",
        'renewal' => "Renewal",
        'view' => "View",

        'balance' => "Balance",
        'card_number' => "Card number",
        'cvv' => "Cvv",
        'expire_date' => "Expire date",

        'dashboard' => "Dashboard",
        'order' => "Order",
        'view_order' => "View order",
        'pay_now' => "Pay now",

        'official_selldone' => "OFFICIAL SELLDONE",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "Currency",
        'free-balance' => "Free balance",
        'locked-balance' => "Locked balance",
        'bot' => "Bot",
        'requests' => "Requests",
        'baskets' => 'Carts',
        'physical' => "Physical",
        'virtual' => "Virtual",
        'file' => "File",
        'service' => "Service",
        'fulfillment' => "Fulfillment",
        'open' => "Open",
        'reserved' => "Reserved",
        'canceled' => "Canceled",
        'payed' => "Paid",
        'cod' => "COD",
        'orders-count' => 'Orders',
        'payments-count' => 'Payments',
        'confirms-count' => 'Confirms',
        'sends-count' => 'Sends',
        'delivers-count' => 'Delivers',
        'count' => 'Count',
        'transactions-count' => 'Transactions count',
        'success-transactions' => 'Success transactions',
        'total-amount' => 'Total amount',
        'amount' => 'Amount',
        'wage' => 'Wage',
        'debug' => 'Debug',
        'pos' => 'POS',
        'live' => 'Live',
        'CheckQueue' => 'Check queue',
        'OrderConfirm' => 'Order confirm',
        'PreparingOrder' => 'Preparing order',
        'SentOrder' => 'Sent order',
        'ToCustomer' => 'Delivered to customer',
        'Pending' => 'Pending',
        'Accepted' => 'Accepted',
        'Rejected' => 'Rejected',
        'pc' => 'PC',
        'tablet' => 'Tablet',
        'phone' => 'Phone',
        'total' => 'Total',
        'view-detail' => 'View detail',
        'empty' => 'Empty',
        'dropshipping' => 'Dropshipping',
        'reply' => 'Reply',
        'reactions' => 'Reactions',
        'comments' => 'Comments',
        'last-comment' => 'Last comment',
        'response-to' => 'Response to',
        'posts' => 'Posts',
        'post' => 'Post',

        'name' => 'Name',
        'email' => 'Email',
        'type' => 'Type',
        'device' => 'Device',
        'platform' => 'Platform',
        'browser' => 'Browser',
        'time' => 'Time',
        'wallet' => 'Wallet',
        'date' => 'Date',

        'account' => 'Account',
        'transaction' => 'Transaction',
        'fee'=>'Fee',

        'location'=>'Location',
        'ip'=>'Ip',

        'bill'=>'Bill',
        'category'=>'Category',
        'password' => 'Password',
        'shop' => 'Shop',
        'verify-login' => "Verify & Login",
        'url'=>'URL',
        'avocado'=>'Avocado',
        'hyper'=>'Hyper',
        'buy-now'=>"Buy Now",
        'add-domain'=>"Add Domain",
        'views'=>'Views',


        'country'=>'Country',
        'address'=>'Address',
        'postal'=>'Postal Code',
        'building_no'=>'Building #',
        'building_unit'=>'Unit #',
        'message'=>'Message',


        'customer'=>'Customer',
        'cart-items'=>'Cart items',
        'payment'=>'Payment',
        'receiver'=>'Receiver',
        'virtual-items'=>'Virtual items',
        'no-payment'=>'No payment!',

        'enable'=>'Enable',
        'access'=>'Access',
        'bank'=>'Bank info',

        'vendor'=>'Vendor',


    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os'=>"Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders'=>[
        'WeeklyReport'=>[
            'id'=>'performance',
            'name'=>'Performance Report, Selldone'
        ],
        'SeasonalReport'=>[
            'id'=>'seasonal',
            'name'=>'Seasonal Report, Selldone'
        ],
        'Onboarding'=>[
            'id'=>'hi',
            'name'=>'Selldone Team'
        ],
        'Support'=>[
            'id'=>'support',
            'name'=>'Support :name'
        ],
        'EmailVerify'=>[
            'id'=>'verify',
            'name'=>'Verify, Selldone'
        ],
        'Welcome'=>[
            'id'=>'hi',
            'name'=>'Community, Selldone'
        ],
        'NewShop'=>[
            'id'=>'merchants',
            'name'=>'Merchants, Selldone'
        ],
        'Approve'=>[
            'id'=>'approve',
            'name'=>'Approve, Selldone'
        ],
        'SellerReceiveOrder'=>[
            'id'=>'order',
            'name'=>'Orders Management :name'
        ],

        'Recovery'=>[
            'id'=>'recovery',
            'name'=>'Selldone Recovery Team'
        ],

    ],







    'bill-status' => [
        'PENDING'=>'Pending ⌛',
        'PAYED'=>'Paid ✅',
        'CANCELED'=>'Canceled ❌',

        ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => 'Administrator',
            'OFFICER' => 'Officer and Supervisor',
            'AUDITING' => 'Auditing manager',
            'EMPLOYEE' => 'Employee',
            'PRODUCT' => 'Products manager',
            'CONTENT' => 'Content manager',
            'MARKETING' => 'Marketing manager',
            'VIEWER' => 'Viewer',

        ],
        'subject'=>":inviter  Invite you as :level | :shop",
        'category' => "Staff invitation",
        'title' => "You have been invited to <b>:shop_name</b> as <b>:level</b>.",
        'message' => "An invitation has been sent to you. You can confirm or reject it. If this invitation is approved by you, you must enter the Selldone service to confirm it. By confirming this invitation, you will have access to the store management section.",

    ],

    'welcome-email' => [
        'subject'=>"👋 Welcome :name, Some interesting things just for you.",
        'category' => 'CONGRATULATION',
        'title' => "WELCOME TO SELLDONE",
        'message' => "Thank  you for choosing Selldone,\nYou're now part of Selldone community that connects global sellers to customers, Local business to enterprise, Individual to corporation! All master and pro tools have been provided **free** and **unlimited** for you.\nYou try, we open the doors,\nJust Do It!",
        'seller' => [
            'title' => 'Are you a seller?',
            'message' => 'To start selling, enter your dashboard in Selldone via the link below and create your first store completely free. This will take a few minutes and you will have your own store and online site. We will then guide you to the next steps and get the payment gateway. ',
            'action' => 'Login to my dashboard',
        ],
        'buyer' => [
            'title' => 'I am a buyer',
            'message' => 'Congratulations. Once you are a member of Selldone, you will get rid of all the hassles of membership and authentication in online stores. To benefit from any store and site that uses the Selldone platform, you can log in with one click and make your purchase simple, fast and safe. ',
        ],
    ],


    'charge-account' => [
        'category' => 'Wallet > Account > Charge',
        'title' => "Success Charge",
        'message' => "Your account <b>:account_number</b> has been successfully <b>:amount</b> charged.",
        'account' => 'Account',
        'charge' => 'Charge',
        'balance' => 'Balance',
        'footer' => "Make business easy, achievable, and accessible to anyone around the world."
    ],

    'verify-email' => [
        'subject'=>"🙌 Complete your sign up to Selldone! Verify link.",
        'category' => "YOU'RE ONE STEP AWAY",
        'title' => "Verify your email address",
        'message' => "Hi :name,<br>Thank  you for choosing Selldone.<br>Please confirm that **:email** is your e-mail address by clicking on the button or use the below link within 48 hours.",
        'footer' => "If you’re having trouble clicking the Verify button, copy and paste the URL below into your web browser: __:activation_url__"
    ],
    'verify-email-code' => [
        'subject'=>"Verification code for :name",
        'category' => "SECURITY",
        'title' => "Email verification code",
        'message' => "Hi :name,<br><br>Please confirm that **:email** is your e-mail address by this code within 10 minutes.",
    ],
    'onboarding-verify-email' => [
        'subject'=>"🎉 Your Shop Is Ready | :name",
        'category' => "YOU'RE ONE STEP AWAY",
        'title' => "Setup completed",
        'account_title'=>"Your account",
        'account_msg'=>"Verify and login to your account with this info.",
        'shop_msg'=>"Account info on the Selldone business operating system.",

    ],

    'reset2fa' => [
        'category' => "SECURITY OFFICIAL MESSAGE",
        'title' => "Request disable 2-steps login",
        'message' => "You are receiving this email because we received a 2 factor authentication reset request for your account.<br><br>User email: <b>:email</b><br>Name: <b>:name</b>",
        'footer' => "If you did not request a password reset, no further action is required.",
        'action' => 'Disable two-step login',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Your shop is ready now!",
        'category' => "BORN NEW ONLINE STORE IN THE WORLD",
        'title' => "Celebrating",
        'message' => "<b>Congratulation :name, you have created a new online business;</b> We wish you success in your business. Welcome to Selldoners community. <br>You try, we open the doors, and You did it.",
        'pdf-book'=>"Don't miss attached hand book: Do Your Business Like A Game",
        'account' => [
            'title' => 'Step 1: Create an account in the Selldone wallet',
            'message' => 'If you do not have an account in your wallet, create one. Selldone deducts the fee from this account. You can top up this account, and Selldone will also charge you an amount of credit so that if this account is negative, your site and Store will continue to operate.',
            'action' => 'Login to wallet',
        ],
        'shop-account' => [
            'title' => 'Step 2: connect the account to the store',
            'message' => "Add your wallet account to your store. To do this, enter Store > Accounting > Invoice and connect the account to the store. Note that all your customers 'payments are deposited directly into your bank account and no amount is withdrawn or deducted by Selldone, so you need to connect this account of Selldone to the store.",
            'action' => 'Store Invoice Panel',
        ],
        'gateway' => [
            'title' => 'Step 3: Connect Online Payment Gateway',
            'message' => 'Go to Store> Accounting> Port and press <b> Add New Port </b>. After selecting the currency, you will be shown a list of portable ports. Connecting the port in Selldone is very simple and fast, but if you have Niza for guidance, refer to the Selldone guide section or ask us. ',
            'action' => 'Add a portal to the store',
        ],
        'domain' => [
            'title' => 'Last step: connecting a dedicated domain',
            'message' => "You will be able to have your store on as many domains as you want. To connect a dedicated domain to a store, you need to have at least a startup license. By introducing each friend to Selldone, you will receive a one-month startup license gift card. A percentage of your friends' payments will also be credited to your customers' accounts. ",
            'action' => 'Introducing and receiving unlimited gift cards',
        ],
    ],


    'basket-list' => [
        'item' => "Item",
        'count' => "Count",
        'price' => "Price",
        'discount-code' => "Discount code",
        'customer-club' => 'Customer club',
        'shipping' => "Shipping",
        'total' => "Total",
        'offer' => "Offer",
        'coupon' => "Coupon",
        'lottery' => "Award",
        'tax' => "Tax",
        'tax_included' => "Included in price",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => 'Method',
        'amount' => 'Amount',
        'giftcard' => 'Gift card',
        'payment' => 'Payment',
    ],


    'shop-subscription-email' => [
        'category' => "Subscription update",
        'title' => "Store Licence: :shop_title",
        'title-reserved' => "Reserve licence: :shop_title",
        'title-active' => "Active licence: :shop_title",
        'title-finished' => "Finished licence: :shop_title",
        'title-cancel' => "Cancel licence: :shop_title",
        'message' => "Your shop license plan updated,",
        'RESERVED' => "⚡ Your subscription plan has been **reserved**.",
        'ACTIVE' => "🟢 Your subscription plan has been **activated**.",
        'FINISHED' => "🚧 Your subscription plan has been **finished**.",
        'CANCEL' => "⛔ Your subscription plan has been **canceled**.",
    ],

    'support' => [
        'subject' => "Support center | :name replied",
        'category' => "Support center",
        'title' => "You received a response",
        'action' => "Open shop admin",
    ],

    'shop-customer-join' => [
        'subject' => "Join :shop_title",
        'category' => "New customer celebration",
        'title' => "We are happy for your membership",
        'action' => "Visit now",
    ],

    'shop-giftcard' => [
        'subject' => "Giftcard :shop_title",
        'category' => "Add new card",
        'title' => "Congratulations, you have received a gift card",
        'action' => "Shop now",
        'message' => "You have received a gift card in the amount of :balance :currency. You will be able to buy from our store with this gift card.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Support center | :shop",
        'category' => "Support",
        'title' => "You received a response",
        // 'action' => "Open shop admin",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Order Checkout | :order_id",
        'title' => "Order",
        'message' => "Your order confirmation,<br>We've got your order. We'll drop you another email when your order ships.",
        'payments' => 'Payments',
    ],


    'order-payment' => [
        'subject' => "🛍️ Payment Confirmation | :order_id",
        'title' => "Payment order",
        'message' => "Your payment completed,<br>We've got your order. We'll drop you another email when your order ships.",
        'payments' => 'Payments',
    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Congratulation :name | New voucher: :title',
        'category' => "CONGRATULATION, NEW VOUCHER",
        'message' => "You get new voucher, This is a gift from us for you. You can get more from these vouchers by introducing Selldone to friends and everyone you know. This voucher is worth **:price :currency**. <br>You try, we open the doors, Congratulation, Unlock features by your voucher!",
        'action' => "My dashboard",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Congratulations, Dear :name  | You have received a gift ',
        'category' => "Announcement of receiving a gift",
        'title' => "Gifts for you",
        'message' => "You have received a new gift. This is a gift from Selldone. You can receive more of these gifts by being more active in Selldone and developing your store and raising your level of specialization. This Gift value is **:price :currency** that you can deposit directly into your wallet in selldone. <br> <br> Use this gift to upgrade your store license and  use more tools in your online business.",
        'action' => "Gifts",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ New Order Received | :order_id ",
        'title' => "New Order",
        'message' => "You have received a new order. Please go to the order processing page in your store.",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => 'Your Filled Information',
        'output-form-title' => 'Purchased item information',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject'=>'📬 :shop_title | Weekly Report :time',
        'title' => 'Weekly store performance report',
        'message' => "This is your store's weekly report from :start to :end. This report includes tips for improving your business, you can also check the status of your online store and recent orders. I hope you have a good day and week ahead."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject'=>'☘ Your :amount saving report in the last three months | :shop_title',
        'title' => 'Seasonal report about your business activity, rewards and financial savings',
        'message' => "This is your :shop_title seasonal report from :start to :end."
    ],


    // -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Connected accounts',
        'sub-title' => 'What is the latest status of wallet accounts connected to my store?',
        'view-wallet' => 'View wallet',
        'tip-title' => 'Important tips',
        'tip' => "In the next step, create a free account in your Selldone wallet and connect it to this store. Even if your Selldone account balance is negative, your customers can still make purchases and payments for your store without any problems. Your data and service will not be interrupted or restricted for at least 1 month. ",
        'view-my-wallet' => 'My wallet',
        'connect-account' => 'Connect to account'
    ],

    // -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Apps installed',
        'sub-title' => 'List of apps you have installed in your store this week.',
        'tip' => "Do you want to find more apps for your store?",
        'view-app-store' => 'Visit the Selldone App Store..',
    ],


    // -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Your Store Bots',
        'sub-title' => 'Active sales bots in my store.',
        'tip-title' => 'Bot Sale',
        'tip' => "Selldone has provided you with automatic sales bots. All you have to do is go to the Add-ons> Bots panel and activate your store bots. Note that the relevant service must be available in your country.",
        'view-bots' => 'Manage bots',
    ],


    // -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Communication with Customers',
        'sub-title' => 'How many contacts have I had with my clients this week?',
        'faqs' => 'Frequently Asked Questions',
        'tickets' => 'Customer Tickets',
    ],


    // -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'Users Status',
        'sub-title' => 'From date :start to :end',
        'users' => [
            'title' => 'Customers',
            'subtitle' => 'Signup Users',
        ],
        'views' => [
            'title' => 'Visits',
            'subtitle' => 'How many times have you visited the store',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => 'Returned Users',

        'shop_views' => 'Shop Views',
        'baskets' => [
            'title' => 'Shopping Carts',
            'subtitle' => 'Report the number of new shopping carts',

        ],
        'products' => [
            'title' => 'Products Overview',
            'subtitle' => 'Status of products in the store by type',
            'value_name' => 'Products'
        ],
        'products_count' => 'Product types',
        'views_count' => 'View count',
        'sell_count' => 'Sell count',
        'send_count' => 'Shipping count',

    ],


    // -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping',
        'sub-title' => 'Panel for major sellers of Drop Shipping Selldone.',
        'total_fulfillments' => 'Total Orders Received',
        'ds_count' => 'Received Orders',
        'statistics_title' => 'Report received orders',
        'ds_cancels' => 'Cancel by interface seller',
        'ds_rejects' => 'Cancel by You',
        'tip' => "Are you a major seller of goods? Do you own a warehouse, factory or distributor of products? You can offer your products to other sellers in Selldone Drop Shipping service to sell your product on a large scale. Email us at support@selldone.com to guide you. ",
        'view-drop-shipping-panel' => 'Login to wholesale panel',
    ],


    // -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Exchange Rates',
        'sub-title' => 'List of the latest currency conversion rates in your store.',
        'from' => 'Source Currency',
        'to' => 'Destination currency',
        'rate' => 'Rate of conversion',
        'vew-exchange-panel' => 'exchange rate management panel',
    ],


    // -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Expert contracts',
        'sub-title' => 'What professionals work on my store?',
        'cost' => 'Contract amount',
        'duration' => 'Duration',
        'start_at' => "Start Date",
        'complete_at' => "Completion Date",
        'cancel_at' => "Date Cancel",
        'end_at' => "Delivery Date",
        'tip' => 'You can hire the best specialists in Selldone to develop your business.',
        'view-experts' => 'Click to get started.'
    ],


    // -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => 'Report active payment gateways on the shop :shop.',
        'tip-title' => 'Important tips',
        'tip' => "Go to the portal management page in your store and add at least one port in a few minutes. Your customers like to pay quickly and securely through online portals.",
        'view-shop-gateways' => 'Login to my store portal management.',
        'view-gateways' => 'View more gateways',
    ],


    // -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Orders',
        'sub-title' => 'List of orders I received this week.',
        'total_baskets' => 'Total Orders',
        'total_posBaskets' => 'Total Cash Orders',
        'pos-title' => 'POS Store Box',
        'chart-label' => "Orders completed (these orders are not necessarily paid!)",
        'tip-title' => 'You should try harder ...',
        'tip' => "No simple success.",
    ],


    // -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Processing Center',
        'sub-title' => 'How much order did we process in the store this week?',
        'tip-title' => 'You did not have a sale!',
        'tip' => "Unfortunately you did not have any sales this week. You need to get more to your store. You can add more products, choose better images or write better descriptions for your products. Consider a full-time job for your business. If you do it right and don't get frustrated, you will succeed.",
        'view-process-center' => 'View process center',
        'return' => [
            'title' => 'Returned Order',
            'subtitle' => 'Report returned orders.',
            'tip-title' => 'Did you know that ...',
            'tip' => "You can create as many store cash registers as you want through Selldone POS! In fact, you can turn your tablet, mobile phone or laptop into your inbox. If that excites you, Selldone POS It's something you should start using now. It only takes a simple click to launch, we have everything prepared for your server in advance.",
            'view-pos' => 'Login to My Online Store Cashier'
        ]
    ],


    // -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Sessions',
        'sub-title' => 'How many times did I visit my store?',
        'countries-title' => 'Which countries have been the most visited?',
    ],

    // -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Do you want to make money without spending one buck?',
        'message' => "Dear :name, you can go to Dashboard > Demonetization and create an referral link. Send the link to your friends, You receive a Selldone gift cards and a percentage of your friend's payments. Note that the gift card will be sent to both you and your friend.",
        'action' => 'View my introduction link',
        'mail-clip' => "<b style='color: #C2185B'>Important:</b> If you use email services such as Gmail that limit the length of the email, find the following option at the end of the email to display the full report and click on it:",

        'no-coin-reward' => "<b style='color: #C2185B'>Sorry:</b> Your activity did not meet the requirement to get free SEL Coins reward. Try harder and sell more on your shop for next season.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Reward:</b> Congratulations, because of your fantastic performance, we gave you a :amount SEL Coin free reward.",


        'need-buy-license'=>"<b>Level-up your business: </b>You have not registered any subscription plan for your business website! So it's the time to buy at least one subscription. It just costs :amount monthly for annual purchase.",
        'not-afford-message'=>"If you can't afford or have any trouble with payment, feel free to tell us via support@selldone.com.",
        'add-domain'=>"<b>Why not have a custom domain for your business?</b><br> Add a domain to your website now; it's free!",

    ],

    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone is a <del>product</del> <span style = 'color: forestgreen'> community</span>. <br>Be a professional Selldoner!",
        'message' => "Follow the official pages of the Selldone on Twitter, LinkedIn and social networks. Send us any comments, requests or criticisms or participate in discussions about the Selldone. We are also part of the community of Selldone that <b>You make</b>."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'Received new Avocado orders | :shop_title :time',
        'title' => "Performance report for the last 24 hours",
        'message' => "Your customers are waiting for your orders to be reviewed and priced. Respond to your customers' requests as soon as possible to get more sales.",
        'card_title'=>"Orders in the queue",
        'card_subtitle'=>"From :date",

        'card_payed'=>"Paid orders",

    ],

    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'Reply to your post in :community_title',
        'title' => ":name, and :count others commented on your posts.",
        'title-simple' => ":name commented on your posts.",
    ],

    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Reply to your topic :topic_title',
        'title' => ":name, and :count others replied on your topic.",
        'title-simple' => ":name replied on your topic.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 New Login :name',
        'category'=>'Security notifications',
        'title' => "Login to Account",
        'message' => "Dear :name, you have been login to your Selldone account.",
        'footer'=>"If you are not logged in, please change your password. ",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction'=>[
        'withdraw'=>"Withdrawal",
        'deposit'=>"Deposit",

        'withdraw_subject'=>"withdraw from account :account",
        'deposit_subject'=>"Deposit to account :account",

        'message'=>"The money transfer has been done with the following specifications.",

        'type'=>"Transaction type",

        'from'=>"Source account",
        'to'=>"Destination account",

        'desc'=>"Transaction description",
        'action'=>"View transaction",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ Important! Rules violation | :shop",
        'category' => "Critical inform",
        'title' => "Your shop has been penalized",
        'action' => "Open shop dashboard",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject'=>":inviter invited you to Selldone",
        'title' => ":name sent you :amount to help you launch your new online website and monetize it!",
        'message' => "On Selldone, you can create your e-commerce, blogging website, and online community and even get an online POS and set up in-person sales in minutes. It’s an online business operating system to make your business online, better and faster. Just sign up by <b>:date</b> to get a :amount voucher.",
        'accept' => "Accept invitation",
        'owner' => "Owner of",
        'join-date' => "On Selldone since",
    ],


    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject'=>"Recovery link | :shop",
        'category' => "Shop security",
        'title' => "Store recovery link of <b>:shop_name</b>.",
        'message' => "This email was sent to you because you requested to restore your store. Clicking on the link below will recover your shop and all data belonging to it.",
        'action' => "Confirm Shop Recovery",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'How much money did Selldone save for your business?',
        'sub-title' => 'From date :start to :end',
        'infrastructure' => [
            'title' => 'Infrastructure',
            'subtitle' => 'Servers, CDN, Storage, and other cloud services',
        ],
        'experts' => [
            'title' => 'Experts & Staff',
            'subtitle' => 'Developers, maintenance, and support',
        ],
'total_save'=>'Total saved money'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => 'Your performance',
        'sub-title' => 'Business overview from :start to :end',

        'new_visitors' => 'New Users',
        'returning_visitors' => 'Returned Users',

        'shop_views' => 'Shop Views',
        'baskets' => [
            'title' => 'Shopping Carts',
            'subtitle' => 'Report the number of new shopping carts',

        ],
        'products' => [
            'title' => 'Products Overview',
            'subtitle' => 'Status of products in the store by type',
            'value_name' => 'Products'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => 'Total website page views',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "You have received a new order. Please go to the order processing page in your vendor panel.",
        'subject' =>  "🛍️ New Order Received | :order_id ",
        'your_revenue'=>"Your Revenue",
    ],
    'vendor-invite' => [
        'title' => 'Vendor Invitation',
        'message' => "You have received an invitation to become vendor of :shop_name. You can accept or reject it by clicking on the following buttons.",
        'subject' =>  ":shop_name | You received an invitation to become our vendor",
        'accept'=>"Accept & Become a Vendor",
        'reject'=>"Reject",

    ],


];
