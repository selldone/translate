<?php


use App\Storefront\Mail\enums\ShopMailTemplateCodes;

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
        'success-transactions' => 'Successful transactions',
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
            'title' => 'Set Up Payment Methods',
            'message' => "Start accepting payments directly into your bank account. To connect your payment providers like Stripe, PayPal, and more, go to Dashboard > Accounting > Gateway.",
            'action' => 'Add Payment Methods',
        ],
        'step-products' => [
            'title' => 'Add Your Products',
            'message' => "Easily add products and categories in the Dashboard > Products. It's just like managing files and folders on your PC – fully drag-and-drop ready. You can also bulk import products using Excel. A sample template is available to help you get started.",
            'action' => 'Manage My Products',
        ],
        'step-shipping' => [
            'title' => 'Set Up Shipping Methods',
            'message' => "To charge customers for shipping, define your shipping methods in the Dashboard > Logistic > Shipping. You can set different pricing and support for various locations. Don’t forget to set your warehouse origin in Dashboard > Logistic > Warehouse.",
            'action' => 'Manage Shipping Methods',
        ],
    ],


    'charge-account' => [
        'category' => 'Wallet > Account > Charge',
        'title' => "Successful Charge",
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
        'account_msg' => "Verify and log in to your account with this info.",
        'shop_msg' => "Account info on the Selldone business operating system.",

    ],

    'reset2fa' => [
        'category' => "SECURITY OFFICIAL MESSAGE",
        'title' => "Request to disable 2-step login",
        'message' => "You are receiving this email because we received a request to reset two-factor authentication for the **:name** account with the **:email** email.<br><br>We found the following details for your account:",
        'footer' => "If you did not request a password reset, no further action is required.",
        'action' => 'Disable two-step login',
    ],


    'build-new-shop' => [
        'subject' => "🎉 :shop is live. Your AI can build the rest",
        'category' => "A new online store is born",
        'hello' => "Hi :name,",
        'title' => ":shop is live. Now let your AI build it.",
        'intro' => "You do not have to learn a dashboard to open your store. Three messages to your AI agent take it from empty to selling. Here they are, ready to send.",
        'step' => "Step :number of 3",
        'most-important' => "Start here",
        'copy-hint' => "Copy this text and paste it into your AI agent.",

        'mcp' => [
            'title' => "Give your AI the keys",
            'message' => "Selldone connects to Claude, ChatGPT, Codex and any other agent that supports MCP. Send this once and your agent can work inside your store.",
            'prompt' => "Connect to my Selldone store \":shop\" (shop ID :id) with MCP:\n:url",
            'hint' => "In Claude or ChatGPT, add the address as a connector in settings. You approve access once with your Selldone login.",
            'action' => "Or connect manually in your dashboard",
        ],

        'products' => [
            'title' => "Fill the shelves",
            'message' => "Send a list, a spreadsheet or a few photos. Your agent creates every product with its price, variants and category.",
            'prompt' => "Add my products to my Selldone store \":shop\" (shop ID :id). Here is my list with prices: [paste your list]",
            'action' => "See your products",
        ],

        'layout' => [
            'title' => "Make it look like you",
            'message' => "Describe the store you imagine. With a Custom Layout your agent designs the whole storefront and puts it live. These seven Selldone stores share one platform and nothing else.",
            'prompt' => "Design a custom layout for my Selldone store \":shop\" (shop ID :id) and deploy it.\nStorefront guide: :guide\nSource code: :repo\nThe style I want: [warm and minimal, bold and playful, …]",
            'action' => "Browse official Custom Layouts",
            'image-alt' => "Seven Selldone storefronts, each with a completely different design",
        ],

        'more' => [
            'title' => "Then just keep asking",
            'message' => "Everything Selldone can do, your agent can do for you:",
            'ask-1' => "Create a 20% discount code for this weekend",
            'ask-2' => "Which products sold best this week?",
            'ask-3' => "Set up shipping to Germany and France",
            'ask-4' => "Write a description for every product",
        ],
        'dashboard-note' => "Prefer to click? Everything is in your dashboard too.",
        'dashboard-action' => "Open your dashboard",
    ],


    'basket-list' => [
        'item' => "Item",
        'count' => "Count",
        'price' => "Price",
        'cross-selling-discount' => "Collection discount",
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
        'message' => "Your shop license plan has been updated,",
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
        'message' => "Hey :name,<br><br>You've received a new voucher as a gift from us! You can earn even more vouchers by introducing Selldone to your friends and everyone you know. This voucher is worth **:price :currency**.<br><br>You've taken the first step, and we’re here to help you unlock new features with your voucher! Please log in with **:email** and find your voucher in the Shop **Dashboard** > **Settings** > **Licence**.<br><br>Congratulations!",
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
        'message' => 'A focused summary of your completed week, with the full detail kept in a secure report page.',
        'period' => ':start — :end',
        'view-full' => 'See the whole week',
        'full-report-note' => 'Top products, stock levels, delivery times and customers, each compared with the week before.',
        'open-report' => 'Open the full report',
        'open-dashboard' => 'Open shop dashboard',
        'gross-sales' => 'Order value',
        'order-value-note' => 'Recorded checkout values include unpaid reservations; they are not collected revenue.',
        'sold-items' => 'Recorded orders',
        'store-views' => 'Store views',
        'new-customers' => 'New customers',
        'conversion' => 'Recorded orders / 100 views',
        'vs-previous' => 'vs previous week',
        'weekly-sales' => 'Daily order value · :currency',
        'peak-day' => 'Best day: :day ·',
        'no-sales' => 'No sales were recorded in this reporting period.',
        'revenue-currency' => 'Order value by currency',
        'needs-attention' => 'Needs your attention',
        'reserved-orders' => 'Reserved orders',
        'pending-delivery' => 'Orders to deliver',
        'pending-returns' => 'Pending returns',
        'secure-link-note' => 'Private link: it asks for your Selldone login and works for 30 days.',

        // One sentence that opens the report page and the email.
        'headline' => [
            'value-up' => 'Order value up :change to :amount',
            'value-down' => 'Order value down :change to :amount',
            'value-flat' => 'Order value steady at :amount',
            'value-new' => 'Order value reached :amount',
            'value-none' => 'No order value was recorded this week',
            'orders' => '{1} :value on :count recorded order|[2,*] :value on :count recorded orders',
            'device' => ':device drove :share of sessions',
            'device-desktop' => 'desktop',
            'device-tablet' => 'tablet',
            'device-mobile' => 'mobile',
            'join' => ':first; :second.',
            'single' => ':first.',
        ],

        // Sentences that only the weekly email uses.
        'digest' => [
            'funnel-title' => ':count of every 100 store views ended in a recorded order.',
            'look-first' => 'Where to look first:',
            'drop-product_views' => ':share of store views never opened a product.',
            'drop-carts' => ':share of product views ended without a cart.',
            'drop-checkouts' => ':share of carts never reached checkout.',
            'drop-sold_items' => ':share of checkouts did not end in a recorded order.',
            'audience-title' => 'Most visits came from :device, and :country leads your countries.',
            'audience-title-device' => 'Most visits came from :device.',
        ],

        'full' => [
            // Page frame
            'sections' => 'Report sections',
            'skip-report' => 'Skip to report content',
            'report-actions' => 'Report actions',
            'print' => 'Print or save PDF',
            'open-shop' => 'Open store',
            'back-dashboard' => 'Back to dashboard',
            'other-weeks' => 'Other weeks',
            'previous-report' => 'Previous week',
            'next-report' => 'Next week',
            'generated' => 'Generated :time',
            'security' => 'Private report · login and current shop access required',
            'empty' => 'No activity in this section for the selected period.',
            'enabled' => 'Enabled',
            'disabled' => 'Disabled',
            'open-list' => 'Open list',

            // Week-over-week comparison
            'compare' => 'Compare to previous week',
            'this-week' => 'This week',
            'previous-week' => 'Previous week',
            'delta-new' => 'New',
            'delta-up' => 'Up',
            'delta-down' => 'Down',
            'delta-flat' => 'No change',
            'points' => 'pts',

            // Overview
            'overview' => 'Overview',
            'overview-note' => 'Headline figures for the week, each compared with the week before.',
            'average-order' => 'Average paid order',
            'sessions' => 'Sessions',
            'attention-notice' => '{1} :count item needs your attention|[2,*] :count items need your attention',
            'attention-review' => 'Review',

            // Order value and payments
            'revenue' => 'Order value and payments',
            'revenue-short' => 'Order value',
            'revenue-subtitle' => 'Recorded checkout values include unpaid reservations. Gateway payments exclude cash-on-delivery and gift payments. Currency totals are kept separate.',
            'open-finance' => 'Open finance',
            'sell' => 'Order value',
            'pay' => 'Gateway payments',
            'discount' => 'Discounts',
            'trend' => 'Order value by day',
            'trend-subtitle' => 'Daily recorded checkout value in :currency, including unpaid reservations.',
            'orders-and-average' => 'Paid orders and average value',
            'orders-and-average-note' => 'Paid and cash-on-delivery orders from the online store and POS. The average covers orders in :currency.',
            'paid-orders-count' => 'Paid orders',
            'average-order-empty' => 'No paid order in :currency this week.',

            // Commerce activity
            'commerce-activity' => 'Commerce activity',
            'commerce-short' => 'Activity',
            'commerce-activity-subtitle' => 'How visits turned into orders, from the store\'s daily counters.',
            'funnel' => 'Conversion funnel',
            'funnel-note' => 'From a storefront visit to a paid online order. Steps count events, not people.',
            'funnel-sessions' => 'Sessions',
            'funnel-product-views' => 'Product views',
            'funnel-carts' => 'Carts created',
            'funnel-checkouts' => 'Checkouts started',
            'funnel-paid' => 'Paid orders',
            'funnel-of' => 'of :step',
            'funnel-drop' => 'drop-off',
            'activity-trends' => 'Daily activity trends',
            'checkouts' => 'Checkouts',
            'dropshipping-orders' => 'Dropshipping orders',
            'dropshipping-short' => 'Dropshipping',
            'other-channels' => 'Other sales channels',

            // Products
            'products' => 'Product performance',
            'products-short' => 'Products',
            'open-products' => 'Open products',
            'top-products' => 'Top products',
            'top-products-note' => 'Ranked by recorded order value in :currency. Share is of all product sales in the period.',
            'top-products-empty' => 'No product sales were recorded in this period.',
            'product' => 'Product',
            'seven-days' => '7 days',
            'units' => 'Units',
            'share' => 'Share',
            'product-types' => 'By product type',
            'product-type' => 'Product type',
            'inventory' => 'Last recorded catalog totals through the period end, with activity recorded during the period.',
            'catalog-products' => 'Products at period end',
            'views' => 'Views',
            'sold' => 'Recorded orders',
            'sent' => 'Sent',

            // Inventory
            'inventory-title' => 'Inventory',
            'inventory-note' => 'Stock of physical products. Made-to-order products from print-on-demand connectors are left out.',
            'inventory-empty' => 'This store has no physical products with tracked stock.',
            'open-inventory' => 'Open inventory',
            'stock-units' => 'Units in stock',
            'stock-value' => 'Stock value',
            'stock-products' => '{1} :count product now|[2,*] :count products now',
            'stock-other-currency' => '{1} :count product in another currency is not included|[2,*] :count products in other currencies are not included',
            'stock-value-hint' => 'Quantity × base price, now',
            'low-stock' => 'Low stock',
            'low-stock-hint' => '{1} :count unit or fewer left|[2,*] :count units or fewer left',
            'out-of-stock' => 'Out of stock',
            'stock-over-time' => 'Stock during the week',
            'stock-units-end' => 'Units at week end',
            'stock-value-end' => 'Value at week end',
            'since-week-start' => 'since week start',
            'stock-estimated' => 'Estimated from product statistics: a day without a recorded quantity uses the current stock. Daily snapshots replace the estimate once they are enabled.',
            'stock-recorded' => 'Recorded once a day from the stock of every physical product.',
            'running-low' => 'Running low',
            'running-low-note' => 'Fastest sellers first. Days of cover is stock divided by average daily sales this week.',
            'running-low-empty' => 'No product is at or below the low-stock level.',
            'in-stock' => 'In stock',
            'sold-this-week' => 'Sold this week',
            'days-of-cover' => 'Days of cover',
            'no-sales-week' => 'No sales this week',
            'restock' => 'Manage stock',

            // Orders
            'orders' => 'Orders',
            'open-orders' => 'Open orders',
            'paid-orders' => 'Paid and cash-on-delivery orders in this period',
            'online' => 'Online',
            'pos' => 'POS',
            'fulfillment' => 'Fulfillment',
            'status-breakdown' => 'Orders created in the period, by current status',

            // Audience
            'audience' => 'Audience',
            'audience-note' => 'Visits to the storefront and the customers who ordered.',
            'open-audience' => 'Open audience report',
            'new-visitors' => 'New visitors',
            'returning-visitors' => 'Returning visitors',
            'customers' => 'Customers at period end',
            'customer-change' => 'Net change in period',
            'buyers' => 'New and returning customers',
            'buyers-note' => 'Customers with a paid or cash-on-delivery online order this week. Returning buyers had ordered before.',
            'buyers-new' => 'First-time buyers',
            'buyers-returning' => 'Returning buyers',
            'guest-orders' => '{1} Plus :count guest order without a customer account.|[2,*] Plus :count guest orders without a customer account.',
            'countries' => 'Top countries',
            'devices' => 'Devices',
            'customer-care' => 'Customer care',

            // Needs attention
            'attention-short' => 'To do',
            'attention-note' => 'Work waiting in the dashboard right now. These counts are not limited to the report week.',
            'task-reserved' => 'Checkout started but the payment has not arrived.',
            'task-reserved-action' => 'Review reserved orders',
            'task-delivery' => 'Paid orders that are not delivered yet.',
            'task-delivery-action' => 'Process orders',
            'task-returns' => 'Return requests waiting for your decision.',
            'task-returns-action' => 'Review returns',
            'task-out-of-stock' => 'Physical products that can no longer be ordered.',
            'task-stock-action' => 'Open inventory',

            // Operations
            'operations' => 'Operations',
            'operations-note' => 'Delivery and returns of online orders.',
            'delivery-performance' => 'Delivery performance',
            'delivered-orders' => 'Orders delivered',
            'delivery-time' => 'Median time to deliver',
            'delivery-time-hint' => 'From checkout to delivery',
            'on-time' => 'Delivered on time',
            'on-time-hint' => '{1} Of :count order with a delivery date chosen at checkout|[2,*] Of :count orders with a delivery date chosen at checkout',
            'on-time-unknown' => 'No delivered order had a delivery date chosen at checkout',
            'delivery' => 'Delivery pipeline',
            'returns' => 'Returns',
            'returns-empty' => 'No return request was opened this week.',
            'return-rate' => 'Return rate',
            'return-rate-hint' => 'Returned units per unit sold. Rejected requests are not counted.',
            'withdrawn-orders' => 'Withdrawn orders',
            'withdrawn-orders-hint' => 'Cancelled by the customer and refunded.',
            'duration-hours' => ':count hours',
            'duration-days' => ':count days',

            // Payments and finance
            'payment' => 'Payments and finance',
            'payment-short' => 'Payments',
            'open-gateways' => 'Open gateways',
            'gateways' => 'Gateways',
            'gateway-share' => 'Share of successful payments',
            'other-gateways' => 'Other gateways',
            'gateway-period-note' => 'Only gateways with payment activity in this period. Includes unsuccessful attempts and reversals.',
            'gateway-empty' => 'No gateway transactions were recorded in this period.',
            'accounts' => 'Connected accounts',
            'accounts-caption' => 'View current wallet balances',
            'accounts-empty' => 'No wallets are connected to this store.',
            'exchange-rates' => 'Exchange rates',
            'exchange-rates-caption' => 'View currently configured conversion rates',

            // Connected tools
            'ecosystem' => 'Connected tools',
            'ecosystem-short' => 'Tools',
            'ecosystem-note' => 'Apps, sales bots and expert contracts connected to this store.',
            'apps' => 'Apps installed this week',
            'bots' => 'Sales bots',
            'contracts' => 'Expert contracts',
            'contract-pending' => 'Pending',
            'contract-active' => 'Active',
            'contract-delivered' => 'Delivered',
            'contract-completed' => 'Completed',
            'contract-canceled' => 'Canceled',
            'tasks' => 'Tasks',
        ],
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ Your :amount saving report in the last three months | :shop_title',
        'title' => 'Seasonal report about your business activity, rewards and financial savings',
        'message' => "This is your <b>:shop_title</b> seasonal report from <b>:start</b> to <b>:end</b>.",

        // Season email sections.
        'eyebrow' => 'Season report',
        'vs-previous' => 'vs the season before',
        'headline-up' => 'You sold :amount this season. That is :change more than the season before.',
        'headline-down' => 'You sold :amount this season, :change less than the season before.',
        'headline-steady' => 'You sold :amount this season.',
        'headline-none' => 'Here is how your store did this season.',
        'intro' => 'Paid orders: :orders. New customers: :customers. Here is how these :weeks weeks added up.',
        'compare-note' => 'Each change compares with the :weeks weeks before, :start — :end.',
        'sales' => 'Sales, week by week',
        'best-week' => 'Your best week was :start — :end with :amount.',
        'no-sales' => 'No order value was recorded this season.',
        'discounts' => 'Discounts given',
        'weekly-average' => 'Average per week',
        'items-sold' => 'Items sold',
        'by-type' => 'Items sold by product type',
        'customers' => 'Customers',
        'customers-title' => '{0} You have :total customers.|{1} One person joined. You now have :total customers.|[2,*] :count people joined. You now have :total customers.',
        'new-per-week' => 'New customers per week',
        'inventory-title' => '{1} :value of stock on hand, and one product needs a refill.|[2,*] :value of stock on hand, and :count products need a refill.',
        'inventory-title-ok' => ':value of stock on hand, and every product is well stocked.',
        'restock-first' => 'Restock these first',
        'left' => ':count left',
        'cover-days' => 'about :days days',
        'saving-note' => 'An estimate based on your traffic, orders, products and storage this season.',
        'next' => 'One move for next season',
        'domain-title' => 'Put your store on your own domain',
        'domain-text' => 'Your store still lives on a Selldone address. Your own domain makes shoppers trust the checkout and keeps your search ranking yours.',
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
        'message' => "Follow the official pages of Selldone on Twitter, LinkedIn and other social networks. Send us any comments, requests or criticisms or participate in discussions about Selldone. We are also part of the community of Selldone that <b>you make</b>."
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
        'title' => ":name and :count others replied to your topic.",
        'message' => "Hi :name, your topic is getting attention! You’ve received replies in our community. Log in to your account to join the discussion and see what everyone is saying.",
        'title-simple' => ":name replied to your topic.",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 New Login :name',
        'category' => 'Security notifications',
        'title' => "Login to Account",
        'message' => "Dear :name, a login to your Selldone account was detected.",   // Login in selldone (seller)
        'message-shop' => "Dear :name, a login to :shop_title was detected.",  // Login in shop (buyer)

        'footer' => "If you did not log in, please change your password. ",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "Withdrawal",
        'deposit' => "Deposit",

        'withdraw_subject' => "Withdrawal from account :account",
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
        'category' => "Critical notice",
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
            <li>The CSV contains paid orders with a reserved date of :date.</li>
            <li>Reserved date is the date when the user clicks checkout on the order page.</li>
        </ul>
        <b>To prevent duplicate orders, always check the Order ID before sending.</b>
    ",
        'action' => "Download Order List",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "Some items in your order were not accepted and cannot be delivered. The amount for these items will be refunded to your card shortly."
    ],

    // -------------------------------------- Follow-up emails ------------------------------------
    'followup' => [
        'stages' => [
            'onboarding' => "Getting started",
            'milestone' => "Milestone",
            'growth' => "Grow your business",
        ],
        'progress-title' => "Your store setup",
        'progress-count' => ":done of :total done",
        'steps' => [
            'product' => "Add your first product",
            'category' => "Organize products in a category",
            'payment' => "Connect an online payment",
            'domain' => "Connect your own domain",
            'landing' => "Publish a landing page",
        ],
        'tip' => "Tip",
    ],

    // Owner-approved Selldone administrator access (App\Backoffice\Admin\AdminShopAccessRequest).
    'admin-access-request' => [
        'subject' => "Official Selldone request: :name asks for :duration access to :shop",
        'category' => "Official Selldone request",
        'title' => "Allow :name from Selldone to work in :shop for :duration?",
        'intro' => "<b>:name</b> is a verified Selldone administrator and asks you for temporary Administrator access to <b>:shop</b>. Nothing changes until you decide.",
        'admin-role' => "Selldone · Official administrator",
        'details' => "Request details",
        'store' => "Store",
        'level' => "Access level",
        'level-value' => "Administrator (staff member)",
        'duration' => "Duration",
        'ends' => "Ends automatically",
        'ends-value' => ":duration after you accept",
        'reason' => "Reason",
        'what-happens' => "What happens if you accept",
        'point-staff' => ":name appears in your Staff list as Administrator and can work in your dashboard like a staff member.",
        'point-ends' => "The access ends by itself after :duration. You can end it earlier at any time in Dashboard → Access → Staff.",
        'point-valid' => "This request is valid for :days days. If you did not expect it, reject it.",
        'security' => "Selldone never asks for your password or verification codes. Every official request names the administrator and their Selldone address and is sent by Selldone itself, never from a personal account.",
        'durations' => [
            '24' => "24 hours",
            '168' => "7 days",
            '720' => "30 days",
        ],
        // Predefined reasons (AdminShopAccessRequest::REASONS).
        'reasons' => [
            'support' => "Support request: you asked Selldone for help",
            'setup' => "Store setup and configuration",
            'troubleshoot' => "Fixing a reported problem",
            'payment' => "Payment and gateway check",
            'migration' => "Migration or data import",
        ],
        // Result page behind the Accept / Reject links.
        'result' => [
            'accepted-title' => "Access granted",
            'accepted' => ":name now has Administrator access to :shop until :until. You can end it at any time in Access → Staff.",
            'rejected-title' => "Request rejected",
            'rejected' => "No access was given to :name for :shop. If you did not expect this request, write to support@selldone.com.",
            'accepted-before-title' => "Already accepted",
            'accepted-before' => "You already accepted this request. :name has Administrator access to :shop until :until.",
            'closed-title' => "Request closed",
            'closed' => "This Selldone access request is no longer open, so nothing changed.",
            'expired-title' => "Request expired",
            'expired' => "This Selldone access request has expired and nothing changed. Ask Selldone support to send a new one if you still need help.",
            'not-owner-title' => "Only the shop owner can answer",
            'not-owner' => "You are signed in with an account that does not own :shop. Sign in with the owner account and open the link from the email again.",
            'staff-settings' => "Open Staff settings",
            'dashboard' => "Go to the dashboard",
            'home' => "Open Selldone",
        ],
    ],

];
