<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => 'This message welcomes a new buyer to the shop.',
        ShopMailTemplateCodes::OrderCheckout => 'This notification is sent when a buyer confirms an order.',
        ShopMailTemplateCodes::OrderPayment => 'This notification confirms the successful payment made by a customer.',
        ShopMailTemplateCodes::OrderUpdate => 'This message is sent to update a buyer on the status of their order.',

        ShopMailTemplateCodes::OrderPaymentAdmin => 'This message is sent to a seller to notify them of a confirmed order.',
        ShopMailTemplateCodes::PosCheckout => 'This notification is sent to confirm a point of sale order for a buyer.',
        ShopMailTemplateCodes::PosPayment => 'This notification confirms a point of sale payment made by a buyer.',
        ShopMailTemplateCodes::PosPaymentAdmin => 'This message notifies the seller of a purchase made at their point of sale.',
        ShopMailTemplateCodes::ShopContact => 'This notification is sent when a contact form has been submitted.',
        ShopMailTemplateCodes::ShopGiftCard => 'This notification informs a user that they have received a gift card.',

        ShopMailTemplateCodes::ShopVendorJoin => 'This message welcomes a new vendor to the shop.',
        ShopMailTemplateCodes::ShopVendorInvite => "This message is dispatched to invite a vendor to join your marketplace.",
        ShopMailTemplateCodes::ShopVendorOrder => "This message is sent to the vendor when an order is received in either Paid or Cash on Delivery (COD) status.",
        ShopMailTemplateCodes::ShopVendorProducts => "Dispatched daily to update vendors on the status of their products.",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "This message is sent to invite a vendor to join your marketplace.",

        ShopMailTemplateCodes::UserLogin => "Notify the user with login details, including IP address, date, and device, for security purposes.",
        ShopMailTemplateCodes::LoginCode => "Send a one-time password code for users to log in to the store.",

        ShopMailTemplateCodes::EmailVerifyLink => "Send a link to verify the user's email address. This email is sent when a user registers by SMS and enters their email. It is not sent when a user registers directly with social login or email.",

        ShopMailTemplateCodes::EmailBulkOrder => "Send a list of received and paid orders in bulk for a specific day."


    ],


    'global' => [
        'greetings' => 'Hi, :name!',
        'end-statement' => 'Support team',

        'receiver_name' => 'Hi :user_name',
        'footer-help' => "Need help? Ask at [support@selldone.com](mailto:support@selldone.com) or visit our [help center](https://selldone.com/community).",
        'selldone-team' => 'The Selldone team',
        'footer-shop' => "If you need help with anything, please don't hesitate to email us: :shop_mail",
        'accept' => "Accept",
        'reject' => "Reject",
        'verify' => "Verify",
        'title' => "Title",
        'value' => "Value",
        'description' => "Description",
        'shop' => "Shop",
        'shop-info' => "Store Information",
        'user' => "User",
        'user-info' => "Account Information",
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

        'Dashboard' => "Dashboard",
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
        'Comments' => 'Comments',
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
        'Wallet' => 'Wallet',
        'date' => 'Date',

        'account' => 'Account',
        'transaction' => 'Transaction',
        'fee' => 'Fee',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => 'Bill',
        'category' => 'Category',
        'password' => 'Password',
        'verify-login' => "Verify & Login",
        'url' => 'URL',
        'avocado' => 'Avocado',
        'hyper' => 'Hyper',
        'buy-now' => "Buy Now",
        'add-domain' => "Add Domain",
        'views' => 'Views',


        'country' => 'Country',
        'address' => 'Address',
        'postal' => 'Postal Code',
        'building_no' => 'Building #',
        'building_unit' => 'Unit #',
        'message' => 'Message',


        'customer' => 'Customer',
        'cart-items' => 'Cart items',
        'payment' => 'Payment',
        'receiver' => 'Receiver',
        'virtual-items' => 'Virtual items',
        'no-payment' => 'No payment!',

        'enable' => 'Enable',
        'access' => 'Access',
        'bank' => 'Bank info',

        'vendor' => 'Vendor',

        'view_content' => "View full content",
        'files' => 'Files',
        'download' => 'Download',
        'file_name' => 'File Name',
        'file_size' => 'Size',

        'subscription' => 'Subscription',
        'products' => 'Products',
        'vendor_products' => 'Vendor Products',

        'pickup' => 'Pickup',

        'minutes' => 'Minutes',
        'hours' => 'Hours',

        'refund' => 'Refund',
        'recipient_address' => 'Recipient Address',
        'signature' => 'Signature',
        'blockchain' => 'Blockchain',
        'details' => 'Details',


    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone Business OS",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => 'Selldone Performance Report'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => 'Selldone Seasonal Report'
        ],
        'Onboarding' => [
            'id' => 'hi',
            'name' => 'Selldone Merchants'
        ],
        'Support' => [
            'id' => 'support',
            'name' => 'Support :name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Selldone'
        ],
        'Welcome' => [
            'id' => 'hi',
            'name' => 'Selldone Community'
        ],
        'NewShop' => [
            'id' => 'merchants',
            'name' => 'Selldone Merchants'
        ],
        'Approve' => [
            'id' => 'approve',
            'name' => 'Selldone Merchants'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => 'Orders Management :name'
        ],

        'Recovery' => [
            'id' => 'recovery',
            'name' => 'Selldone Recovery Team'
        ],

    ],


    'bill-status' => [
        'PENDING' => 'Pending ⌛',
        'PAYED' => 'Paid ✅',
        'CANCELED' => 'Canceled ❌',

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
        'subject' => ":inviter invited you as :level | :shop",
        'category' => "Staff invitation",
        'title' => "You have been invited to <b>:shop_name</b> as <b>:level</b>.",
        'message' => "You've received an invitation to collaborate with the <b>:shop_title</b> team in business. You have the option to accept or decline this offer. Should you choose to accept, please log in to the Selldone service to confirm your decision. Upon confirmation, you will gain access to the store management section.",

    ],

    'welcome-email' => [
        'subject' => "👋 Welcome :name, Let's Get Started with Selldone!",
        'category' => 'CONGRATULATIONS',
        'title' => "Welcome to Selldone",
        'message' => "Thank you for choosing Selldone! You are now part of a vibrant community that connects global sellers to customers, local businesses to enterprises, and individuals to corporations. All our Master and Pro tools are available to you **free** and **unlimited**. We're here to support you and open the doors to your success.",

        'index' => "Step :step. ",

        'step-domain' => [
            'title' => 'Add Your Custom Domain',
            'message' => "To get started, add your custom domain for free in the Shop Dashboard under Settings > Domains Settings.",
            'action' => 'Manage My Domains',
        ],
        'step-landing' => [
            'title' => 'Customize Your Home Page',
            'message' => "Personalize your home page by going to Dashboard > Pages. Choose a landing page or create a new one. It's easy and intuitive, and you can start working on it right away.",
            'action' => 'Customize My Landing Page',
        ],
        'step-payment' => [
            'title' => 'Setup Payment Methods',
            'message' => "Start accepting payments directly into your bank account. To connect your payment providers like Stripe, PayPal, and more, go to Dashboard > Accounting > Gateway.",
            'action' => 'Add Payment Methods',
        ],
        'step-products' => [
            'title' => 'Add Your Products',
            'message' => "Easily add products and categories in the Dashboard > Products. It's just like managing files and folders on your PC – fully drag-and-drop ready. You can also bulk import products using Excel. A sample template is available to help you get started.",
            'action' => 'Manage My Products',
        ],
        'step-shipping' => [
            'title' => 'Setup Shipping Methods',
            'message' => "To charge customers for shipping, define your shipping methods in the Dashboard > Logistic > Shipping. You can set different pricing and support for various locations. Don’t forget to set your warehouse origin in Dashboard > Logistic > Warehouse.",
            'action' => 'Manage Shipping Methods',
        ],
    ],


    'charge-account' => [
        'category' => 'Wallet > Account > Charge',
        'title' => "Success Charge",
        'message' => "Your account <b>:account_number</b> has been charged <b>:amount</b> successfully.",
        'account' => 'Account',
        'charge' => 'Charge',
        'balance' => 'Balance',
        'footer' => "Make business easy, achievable, and accessible to anyone around the world."
    ],

    'verify-email' => [
        'subject' => "🙌 Complete your sign up to Selldone! Verify link.",
        'category' => "YOU'RE ONE STEP AWAY",
        'title' => "Verify your email address",
        'message' => "Hi :name,<br><br>Thank you for choosing Selldone!<br><br>To confirm that <b>:email</b> is your correct email address, please click the button below or use the link provided. You have 48 hours to complete this verification.",
        'footer' => "If you’re having trouble clicking the Verify button, copy and paste the URL below into your web browser: :activation_url",
        'next-step' => "Next, we'll be sending you some helpful materials and a step-by-step guide to make it easy for you to add your custom domain, set up payments, add products, and get your first order.",

    ],
    'verify-email-code' => [
        'subject' => "Verification code for :name",
        'category' => "SECURITY",
        'title' => "Email verification code",
        'message' => "Hi :name,<br><br>To confirm that <b>:email</b> is your correct email address, please enter the following code within the next <b>10 minutes</b>:",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 Your Shop Is Ready | :name",
        'category' => "YOU'RE ONE STEP AWAY",
        'title' => "Setup Completed",
        'account_title' => "Your account",
        'account_msg' => "Verify and login to your account with this info.",
        'shop_msg' => "Account info on the Selldone business operating system.",

    ],

    'reset2fa' => [
        'category' => "SECURITY OFFICIAL MESSAGE",
        'title' => "Request disable 2-steps login",
        'message' => "You are receiving this email because we received a request to reset two-factor authentication for **:name** account with **:email** email.<br><br>We found the following details for your account:",
        'footer' => "If you did not request a password reset, no further action is required.",
        'action' => 'Disable two-step login',
    ],


    'build-new-shop' => [
        'subject' => "🎊 Your Store is Now Live and Ready to Thrive!",
        'category' => "A New Online Store is Born",
        'title' => "Congratulations, :name!",
        'message' => "<b>Congratulations, :name! Your new online business is now live!</b> We are excited to welcome you to the Selldoners community. You've taken the first step toward success, and we are here to help you every step of the way.<br>Now that your store is ready, let’s make sure you're set to receive payments directly from your customers and start growing your empire. If you ever need help, we're just a message away—our support team is always here for you.<br><br><b>Important Next Steps:</b> To start, ensure you're all set up for receiving payments and smooth operations. We'll guide you through each stage to get your store running seamlessly.",
        'pdf-book' => "📘 Don’t miss the attached handbook: 'Do Your Business Like A Game' — your essential guide to success.",

        'account' => [
            'title' => 'Step 1: Set Up Your Selldone Wallet',
            'message' => "To start, create an account in your Selldone wallet. This is where your fees will be deducted, and it’s also where you'll top up to keep your store running smoothly. If your balance ever goes negative, don’t worry! Your store will continue to operate without interruption.",
            'action' => 'Login to Wallet',
        ],

        'shop-account' => [
            'title' => 'Step 2: Connect Your Wallet to Your Store',
            'message' => "Next, connect your wallet account to your store. Head to <b>Store > Accounting > Invoice</b>, and link your wallet. This ensures that all customer payments are deposited directly into your bank account—Selldone does not deduct any amounts from your earnings.",
            'action' => 'Go to Store Invoice Panel',
        ],

        'gateway' => [
            'title' => 'Step 3: Set Up Your Online Payment Gateway',
            'message' => "Now, let’s set up your online payment gateway. Go to <b>Store > Accounting > Port</b> and click on <b>Add New Port</b>. Select your currency, and you'll see a list of available payment gateways. Connecting a gateway is quick and easy, but if you need any help, feel free to check the Selldone guides or reach out to us.",
            'action' => 'Add Payment Gateway to Store',
        ],

        'domain' => [
            'title' => 'Final Step: Connect Your Custom Domain',
            'message' => "Now, link your custom domain to your store. This allows customers to purchase your products or services and make payments directly to you.",
            'action' => 'Connect Custom Domain',
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
        'subject' => "Support Center | :name replied",
        'category' => "Support Center",
        'title' => "You received a response",
        'action' => "Open shop admin",
    ],

    'shop-customer-join' => [
        'subject' => "Join :shop_title",
        'category' => "New customer celebration",
        'title' => "We are happy for your membership",
        'action' => "View Shopping List",
    ],

    'shop-vendor-join' => [
        'subject' => "Vendor Onboarding | :shop_title",
        'category' => "New vendor celebration",
        'title' => "We are happy for your membership",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "Gift Card :shop_title",
        'category' => "Add new card",
        'title' => "Congratulations, you have received a gift card",
        'action' => "Shop now",
        'message' => "You have received a gift card worth :balance :currency. You can use this gift card in our store.",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "Support Center | :shop",
        'category' => "Support",
        'title' => "You received a response",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍️ Order Confirmation | Order :order_id",
        'title' => "Order Confirmation",
        'message' => "You placed an order at our store. We received your order and will send you another email once the payment is confirmed."
    ],

    'order-payment' => [
        'subject' => "🛍️ Payment Confirmation | Order :order_id",
        'title' => "Payment Confirmation",
        'message' => "Your payment was successful!<br>We’ve received your order and will send you an update when it’s on its way.",
    ],

    'order-update' => [
        'subject' => "🛍️ Order Status Update | Order :order_id",
        'title' => "Order Status Update",
        'message' => "Your order has been updated. You can check the latest status of this order in your account.",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "Your order is in the queue for processing. We’ll notify you when it’s being prepared.",
                'OrderConfirm' => "Your order is confirmed and preparation has started.",
                'PreparingOrder' => "Your order is being prepared and will be shipped soon.",
                'SentOrder' => "Your order has been shipped. You’ll receive it shortly.",
                'ToCustomer' => "Your order has been delivered. We hope you enjoy it!",

                'PreparingOrder-PICKUP' => "Your order is being prepared. You’ll receive a notification when it's ready for pickup.",
                'SentOrder-PICKUP' => "Your order is ready for pickup. Please come to the store to collect it.",
                'ToCustomer-PICKUP' => "Your order has been picked up. We hope you enjoy it!"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "Your order is in the queue for processing. We’ll notify you when it’s ready.",
                'OrderConfirm' => "Your order is confirmed and preparation is in progress.",
                'PreparingOrder' => "Your order is being prepared and will be sent to you soon.",
                'ToCustomer' => "Your virtual order has been delivered to your account. Thank you!"
            ],
            'SERVICE' => [
                'CheckQueue' => "Your service request is in the queue. We’ll notify you when we start.",
                'OrderConfirm' => "Your service is confirmed and we’re preparing to begin.",
                'PreparingOrder' => "We’re preparing your service, and will notify you once it's completed.",
                'ToCustomer' => "Your service is complete. Thank you for choosing us!"
            ],
            'FILE' => [
                'PreparingOrder' => "Your file is being prepared and will be available soon.",
                'ToCustomer' => "Your file is ready and has been delivered. You can now download it."
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "Your subscription order is in the queue. We’ll notify you when processing begins.",
                'OrderConfirm' => "Your subscription has been confirmed and is being set up.",
                'PreparingOrder' => "We are preparing your subscription and it will start soon.",
                'SentOrder' => "Your subscription has been activated. You’ll receive ongoing updates.",
                'ToCustomer' => "Your subscription service has been activated successfully."
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => 'Congratulations :name | New Voucher: :title',
        'category' => "CONGRATULATIONS, NEW VOUCHER",
        'message' => "Hey :name,<br><br>You've received a new voucher as a gift from us! You can earn even more vouchers by introducing Selldone to your friends and everyone you know. This voucher is worth **:price :currency**.<br><br>You've taken the first step, and we’re here to help you unlock new features with your voucher! Please login with **:email** and find your voucher in the Shop **Dashboard** > **Settings** > **Licence**.<br><br>Congratulations!",
        'action' => "Go to My Dashboard",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => 'Congratulations, Dear :name | You’ve Received a Special Gift!',
        'category' => "Gift Notification",
        'title' => "Your Gift is Waiting for You!",
        'message' => "Hi :name, we're excited to let you know that you've received a special gift from Selldone! 🎉 You can earn more gifts by staying active, growing your store, and improving your expertise on Selldone. To check out your gift, simply log in with :email and look for it in the top-right corner of your dashboard.<br><br>This gift is worth **:price :currency**, and you can easily deposit it into your wallet within Selldone.<br><br>Use your gift to upgrade your store's license and unlock even more powerful tools to boost your online business!",
        'action' => "View My Gifts",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍️ New Order Received | :order_id",
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
        'subject' => '📬 :shop_title | Weekly Report :time',
        'title' => 'Weekly store performance report',
        'message' => "This is your store's weekly report from <b>:start</b> to <b>:end</b>. This report includes tips for improving your business, you can also check the status of your online store and recent orders. I hope you have a good day and week ahead."
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Your :amount saving report in the last three months | :shop_title',
        'title' => 'Seasonal report about your business activity, rewards and financial savings',
        'message' => "This is your <b>:shop_title</b> seasonal report from <b>:start</b> to <b>:end</b>."
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => 'Your Connected Wallets',
        'sub-title' => 'Check the status of your wallet accounts linked to this store.',
        'view-wallet' => 'View Wallet Details',
        'tip-title' => 'Quick Tips',
        'tip' => "Set up a free Selldone wallet and link it to your store. Even if your balance is negative, your customers can still shop and pay without any issues. Don't worry, your store's operations and data will continue smoothly for up to 1 month, without any interruptions.",
        'view-my-wallet' => 'Go to My Wallet',
        'connect-account' => 'Connect Your Wallet'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => 'Installed Apps',
        'sub-title' => 'See the apps installed in your store this week.',
        'tip' => "Looking for more apps to enhance your store?",
        'view-app-store' => 'Explore the Selldone App Store',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => 'Your Sales Bots',
        'sub-title' => 'Discover the active sales bots working for your store.',
        'tip-title' => 'Boost Sales with Bots',
        'tip' => "Selldone offers you automated sales bots. Simply activate them by visiting the Add-ons > Bots section. Ensure that the required services are available in your region for smooth operation.",
        'view-bots' => 'Manage Your Bots',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => 'Customer Communication Insights',
        'sub-title' => 'Track the number of interactions with your customers this week.',
        'faqs' => 'Common Questions',
        'tickets' => 'Customer Support Tickets',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => 'User Activity Overview',
        'sub-title' => 'Activity from :start to :end',
        'users' => [
            'title' => 'Customer Insights',
            'subtitle' => 'New Signups',
        ],
        'views' => [
            'title' => 'Store Traffic',
            'subtitle' => 'How many times your store was visited',
        ],
        'new_visitors' => 'First-Time Visitors',
        'returning_visitors' => 'Returning Customers',

        'shop_views' => 'Total Store Views',
        'baskets' => [
            'title' => 'Shopping Carts',
            'subtitle' => 'Number of new shopping carts created',
        ],
        'products' => [
            'title' => 'Product Overview',
            'subtitle' => 'Current product status by category',
            'value_name' => 'Products in Store'
        ],
        'products_count' => 'Number of Product Categories',
        'views_count' => 'View Count',
        'sell_count' => 'Total Sales',
        'send_count' => 'Shipments Processed',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => 'Drop Shipping Overview',
        'sub-title' => 'Main Panel for Top Selldone Drop Shipping Sellers',
        'total_fulfillments' => 'Total Orders Processed',
        'ds_count' => 'Orders Fulfilled',
        'statistics_title' => 'Order Fulfillment Report',
        'ds_cancels' => 'Canceled by Seller',
        'ds_rejects' => 'Canceled by You',
        'tip' => "Are you a large seller with a warehouse, factory, or product distributor? You can expand your reach by offering your products to other sellers through Selldone's Drop Shipping service. Email us at support@selldone.com to learn more.",
        'view-drop-shipping-panel' => 'Access the Wholesale Panel',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => 'Currency Exchange Rates',
        'sub-title' => 'Up-to-date conversion rates for your store\'s currencies',
        'from' => 'From Currency',
        'to' => 'To Currency',
        'rate' => 'Exchange Rate',
        'view-exchange-panel' => 'Manage Exchange Rates',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => 'Professional Contracts',
        'sub-title' => 'Which experts are working on my store?',
        'cost' => 'Contract Value',
        'duration' => 'Contract Duration',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => 'Cancellation Date',
        'end_at' => 'Delivery Date',
        'tip' => 'Hire top experts from Selldone to help grow your business.',
        'view-experts' => 'Get Started with Experts',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment Gateways',
        'sub-title' => 'Active Payment Gateways on Your Shop :shop',
        'tip-title' => 'Quick Tips',
        'tip' => "Go to your store's portal management page and add a payment gateway in just a few minutes. Your customers prefer fast and secure payment options.",
        'view-shop-gateways' => 'Access Store Portal Management',
        'view-gateways' => 'Explore More Payment Gateways',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => 'Order Summary',
        'sub-title' => 'All Orders Received This Week',
        'total_baskets' => 'Total Orders',
        'total_posBaskets' => 'Total Cash Payments',
        'pos-title' => 'POS Store Register',
        'chart-label' => 'Completed Orders (Note: Not all completed orders are paid)',
        'tip-title' => 'Keep Pushing...',
        'tip' => "Success takes consistent effort. Stay motivated!",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => 'Processing Dashboard',
        'sub-title' => 'How many orders were processed in your store this week?',
        'tip-title' => 'No sales this week?',
        'tip' => "It looks like there were no sales this week. Don't worry, every business faces slow periods. Boost your store’s performance by adding more products, improving images, and refining your descriptions. Consider treating your business as a full-time job. Keep going, stay positive, and success will follow.",
        'view-process-center' => 'View Processing Dashboard',
        'return' => [
            'title' => 'Returned Orders',
            'subtitle' => 'Track your returned orders.',
            'tip-title' => 'Did you know...?',
            'tip' => "You can create as many cash registers as you need with Selldone POS! Whether it's your tablet, mobile, or laptop, you can turn any device into your store's point of sale. It's simple, quick to set up, and fully prepared for your server. Start using it today!",
            'view-pos' => 'Access My Store Cashier'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => 'Store Sessions',
        'sub-title' => 'How often are customers visiting your store?',
        'countries-title' => 'Which countries are bringing in the most visitors?',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => 'Want to earn money without spending a dime?',
        'message' => "Hi :name, it's time to start earning with Selldone! Go to Dashboard > More > Monetization > Get Your Referral Link. Share the link with your friends, and earn gift cards and a share of their payments. The best part? Both you and your friend get a gift card!",
        'action' => 'Get My Referral Link',
        'mail-clip' => "<b style='color: #C2185B'>Important:</b> If you use email services like Gmail that limit email length, scroll to the bottom of this message to view the full report. Click to read more:",

        'no-coin-reward' => "<b style='color: #C2185B'>Oops:</b> Your current activity didn't meet the threshold for a free SEL Coin reward. Keep pushing and sell more next season for a chance to earn them.",
        'yes-coin-reward' => "<b style='color: #4CAF50'>Congratulations:</b> Great job! Based on your outstanding performance, we've credited :amount SEL Coins to your account as a reward.",

        'need-buy-license' => "<b>Level Up Your Business:</b> It looks like you haven’t registered any subscription plan for your website yet! Upgrade now to unlock more features for just :amount per month if paid annually.",
        'not-afford-message' => "If you're facing any issues with payment or can’t afford it right now, don't hesitate to reach out to us at support@selldone.com.",
        'add-domain' => "<b>Enhance your brand with a custom domain!</b><br>Get a custom domain for your website today—it's free and adds a professional touch!"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone is a <del>product</del> <span style = 'color: forestgreen'> community</span>.<br>Be a professional Selldoner!",
        'message' => "Follow the official pages of the Selldone on Twitter, LinkedIn and social networks. Send us any comments, requests or criticisms or participate in discussions about the Selldone. We are also part of the community of Selldone that <b>You make</b>."
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => 'New Avocado Orders Received | :shop_title :time',
        'title' => "Avocado Sales Report for the Last 24 Hours",
        'message' => "You have new orders waiting to be reviewed and priced. To increase your sales, respond to your customers’ requests quickly.",
        'card_title' => "Pending Orders",
        'card_subtitle' => "Since :date",

        'card_payed' => "Orders Paid"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => 'New Replies to Your Post in :community_title',
        'title' => ":name and :count others have joined the conversation on your posts!",
        'message' => "Hi :name, your posts are getting attention! You’ve received comments in our community. Log in to your account to join the discussion and see what everyone is saying.",
        'title-simple' => ":name has commented on your post!",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔 Reply to your topic :topic_title',
        'title' => ":name, and :count others replied on your topic.",
        'message' => "Hi :name, your topic is getting attention! You’ve received replies in our community. Log in to your account to join the discussion and see what everyone is saying.",
        'title-simple' => ":name replied on your topic.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 New Login :name',
        'category' => 'Security notifications',
        'title' => "Login to Account",
        'message' => "Dear :name, a login to your Selldone account was detected.",   // Login in selldone (seller)
        'message-shop' => "Dear :name, a login to :shop_title was detected.",  // Login in shop (buyer)

        'footer' => "If you are not logged in, please change your password. ",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Withdrawal",
        'deposit' => "Deposit",

        'withdraw_subject' => "Withdraw from account :account",
        'deposit_subject' => "Deposit to account :account",

        'message' => "The money transfer has been done with the following specifications.",

        'type' => "Transaction type",

        'from' => "Source account",
        'to' => "Destination account",

        'desc' => "Transaction description",
        'action' => "View transaction",
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
        'subject' => ":inviter has invited you to join Selldone",
        'title' => ":name has sent you :amount to help launch your new online store and monetize it!",
        'message' => "Hi **:receiver_name**,<br><br>Welcome to Selldone! On Selldone, you can easily create your e-commerce site, blog, online community, and even set up an online POS system for in-person sales—all within minutes. It’s the complete online business operating system designed to make your business better, faster, and easier to run.<br><br>Sign up by <b>:date</b> and receive a :amount voucher to get started!",
        'accept' => "Accept the Invitation",
        'owner' => "Owner of",
        'join-date' => "Joined Selldone on",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "Recovery link | :shop",
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
        'total_save' => 'Total saved money'
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
        'subject' => "🛍️ New Order Received | :order_id",
        'your_revenue' => "Your Revenue",
    ],
    'vendor-invite' => [
        'title' => 'Vendor Invitation',
        'message' => "You have received an invitation to become a vendor of :shop_name. You can accept or reject it using the buttons below.",
        'subject' => ":shop_name | Invitation to become our vendor",
        'accept' => "Accept & Become a Vendor",
        'reject' => "Reject",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => 'Invitation to Join Our Team',
        'message' => "You've been invited to join :vendor_name at :shop_name. You can accept or decline this invitation using the buttons below.",
        'subject' => "Invitation to Join :vendor_name | Become a Team Member",
        'accept' => "Accept & Join the Team",
        'reject' => "Reject",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "Your Login Code for :shop",
        'header-message' => "We are sending you this email because you requested a login code for the shop. Please find your One-Time Password (OTP) below:",
        'footer-message' => "This code will be valid for 10 minutes. If you did not request this login code, please ignore this email."
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "Verify your email | :shop",
        'title' => 'Email Verification',
        'header-message' => "Hi :name,<br>Please confirm that **:email** is your email address by clicking the button below or using the link below within 48 hours.",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "Product Updates | :shop",
        'title' => "Update on Product Status - Last 24 Hours",
        'message' => "I hope this message finds you well. This is a brief update to inform you about the status of your products on our platform over the past 24 hours.\nDuring this period, there have been changes in the status of some products. These changes may be due to purchases, stock updates, or other related events.\nFor more detailed information about each product, please log in to your account and check the 'Product Status' section.",
        'action' => "Open Vendor Panel",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "Bulk Orders Received | :shop | :date",
        'title' => "Bulk Orders Notification",
        'message' => "You have received a batch of bulk orders. Please visit the order processing page in your panel for further details. You can also download the order list via the secure link provided, valid for 7 days.<br><br>
        <b>IMPORTANT:</b> This link is valid for 7 days.<br>
        This link is dynamic, so every time you click it, you will receive the most updated orders for this specific date. <b>It means if the order payment status changes to rejected, you will no longer see that order in the downloaded CSV, or if the order is paid, it will appear in the list.</b><br><br>
        <ul>
            <li>The CSV contains paid orders with a reserved date in the :date.</li>
            <li>Reserved date is the date when the user clicks checkout on the order page.</li>
        </ul>
        <b>To prevent duplicate orders, always check the Order ID before sending.</b>
    ",
        'action' => "Download Order List",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Some items in your order were not accepted and cannot be delivered. The amount for these items will be refunded to your card shortly."
    ]

];
