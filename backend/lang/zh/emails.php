<?php


use App\Shop\Mail\enums\ShopMailTemplateCodes;

return [

    'email-types-description' => [
        ShopMailTemplateCodes::ShopCustomerJoin => '此消息欢迎新买家来到商店。',
        ShopMailTemplateCodes::OrderCheckout => '当买家确认订单时发送此通知。',
        ShopMailTemplateCodes::OrderPayment => '此通知确认客户已成功付款。',
        ShopMailTemplateCodes::OrderUpdate => '发送此消息是为了更新买家的订单状态。',

        ShopMailTemplateCodes::OrderPaymentAdmin => '此消息发送给卖家，通知他们订单已确认。',
        ShopMailTemplateCodes::PosCheckout => '发送此通知是为了确认买家的销售点订单。',
        ShopMailTemplateCodes::PosPayment => '此通知确认买家进行的销售点付款。',
        ShopMailTemplateCodes::PosPaymentAdmin => '此消息通知卖家在其销售点进行的购买。',
        ShopMailTemplateCodes::ShopContact => '提交联系表单后会发送此通知。',
        ShopMailTemplateCodes::ShopGiftCard => '此通知通知用户他们已收到礼品卡。',

        ShopMailTemplateCodes::ShopVendorJoin => '此消息欢迎新供应商来到商店。',
        ShopMailTemplateCodes::ShopVendorInvite => "发送此消息是为了邀请供应商加入您的市场。",
        ShopMailTemplateCodes::ShopVendorOrder => "当收到处于“已付款”或“货到付款”(COD) 状态的订单时，将发送此消息给供应商。",
        ShopMailTemplateCodes::ShopVendorProducts => "每天发送，向供应商更新其产品状态。",
        ShopMailTemplateCodes::ShopVendorMemberInvite => "发送此消息是为了邀请供应商加入您的市场。",

        ShopMailTemplateCodes::UserLogin => "出于安全目的，通知用户登录详细信息，包括 IP 地址、日期和设备。",
        ShopMailTemplateCodes::LoginCode => "发送一次性密码，供用户登录商店。",

        ShopMailTemplateCodes::EmailVerifyLink => "发送链接以验证用户的电子邮件地址。当用户通过 SMS 注册并输入电子邮件时发送此电子邮件。当用户直接使用社交登录名或电子邮件注册时，不会发送该信息。",

        ShopMailTemplateCodes::EmailBulkOrder => "批量发送特定日期已接收和已付款订单的列表。"


    ,

    ],


    'global' => [
        'greetings' => '你好，:name！',
        'end-statement' => '支持团队',

        'receiver_name' => '你好 :user_name',
        'footer-help' => "需要帮助吗？请通过[support@selldone.com](mailto:support@selldone.com)询问或访问我们的[帮助中心](https://selldone.com/community)。",
        'selldone-team' => 'Selldone团队',
        'footer-shop' => "如果您需要任何帮助，请随时给我们发电子邮件：:shop_mail",
        'accept' => "接受",
        'reject' => "拒绝",
        'verify' => "核实",
        'title' => "标题",
        'value' => "价值",
        'description' => "描述",
        'shop' => "店铺",
        'shop-info' => "店铺信息",
        'user' => "用户",
        'user-info' => "账户信息",
        'license' => "执照",
        'status' => "地位",
        'start' => "开始",
        'end' => "结尾",
        'renewal' => "续订",
        'view' => "看法",

        'balance' => "平衡",
        'card_number' => "卡号",
        'cvv' => "简历",
        'expire_date' => "到期日期",

        'Dashboard' => "仪表板",
        'order' => "命令",
        'view_order' => "查看订单",
        'pay_now' => "Pay now",

        'official_selldone' => "官方销售",

        'account-number' => "Account number",
        'account-name' => "Account name",
        'currency' => "货币",
        'free-balance' => "免费余额",
        'locked-balance' => "锁定余额",
        'bot' => "机器人",
        'requests' => "要求",
        'baskets' => '推车',
        'physical' => "身体的",
        'virtual' => "虚拟的",
        'file' => "文件",
        'service' => "服务",
        'fulfillment' => "履行",
        'open' => "打开",
        'reserved' => "预订的",
        'canceled' => "取消",
        'payed' => "有薪酬的",
        'cod' => "COD",
        'orders-count' => '订单',
        'payments-count' => '付款',
        'confirms-count' => '确认',
        'sends-count' => '发送',
        'delivers-count' => '提供',
        'count' => '数数',
        'transactions-count' => '交易计数',
        'success-transactions' => '成功交易',
        'total-amount' => '总金额',
        'amount' => '数量',
        'wage' => '工资',
        'debug' => '调试',
        'pos' => 'POS',
        'live' => '居住',
        'CheckQueue' => '检查队列',
        'OrderConfirm' => '订单确认',
        'PreparingOrder' => '准备订单',
        'SentOrder' => '已发送订单',
        'ToCustomer' => '交付给客户',
        'Pending' => '待办的',
        'Accepted' => '公认',
        'Rejected' => '被拒绝',
        'pc' => 'PC',
        'tablet' => '药片',
        'phone' => '电话',
        'total' => '全部的',
        'view-detail' => '查看详细',
        'empty' => '空的',
        'dropshipping' => '代发货',
        'reply' => '回复',
        'reactions' => '反应',
        'Comments' => '评论',
        'last-comment' => '最后评论',
        'response-to' => '响应',
        'posts' => '帖子',
        'post' => '邮政',

        'name' => '姓名',
        'email' => '电子邮件',
        'type' => '类型',
        'device' => '设备',
        'platform' => '平台',
        'browser' => '浏览器',
        'time' => '时间',
        'Wallet' => '钱包',
        'date' => '日期',

        'account' => '帐户',
        'transaction' => '交易',
        'fee' => '费用',

        'location' => 'Location',
        'ip' => 'IP',

        'bill' => '账单',
        'category' => '类别',
        'password' => '密码',
        'verify-login' => "验证并登录",
        'url' => 'URL',
        'avocado' => '牛油果',
        'hyper' => '超',
        'buy-now' => "立即购买",
        'add-domain' => "Add Domain",
        'views' => '意见',


        'country' => '国家',
        'address' => '地址',
        'postal' => '邮政编码',
        'building_no' => '建造 ＃',
        'building_unit' => '单元 ＃',
        'message' => '信息',


        'customer' => '顾客',
        'cart-items' => '购物车物品',
        'payment' => '支付',
        'receiver' => '接收者',
        'virtual-items' => '虚拟物品',
        'no-payment' => '没有付款！',

        'enable' => '使能够',
        'access' => '使用权',
        'bank' => '银行信息',

        'vendor' => '小贩',

        'view_content' => "查看完整内容",
        'files' => '文件',
        'download' => '下载',
        'file_name' => '文件名',
        'file_size' => '尺寸',

        'subscription' => '订阅',
        'products' => '产品',
        'vendor_products' => '供应商产品',

        'pickup' => '皮卡',

        'minutes' => '分钟',
        'hours' => '时间',

        'refund' => '退款',
        'recipient_address' => '收件人地址',
        'signature' => '签名',
        'blockchain' => '区块链',
        'details' => '详情',


    

        'Shop' => '店铺',
        'dashboard' => '仪表板',
        'comments' => '注释',
        'wallet' => '钱包',
    ],
    //―――――――――――――――――――――――――――― Titles ―――――――――――――――――――――――――
    'selldone-business-os' => "Selldone 商业操作系统",

    //―――――――――――――――――――――――――――― Senders name & emails ―――――――――――――――――――――――――
    'senders' => [
        'WeeklyReport' => [
            'id' => 'performance',
            'name' => '业绩报告，Selldone'
        ],
        'SeasonalReport' => [
            'id' => 'seasonal',
            'name' => '季节性报告，Selldone'
        ],
        'Onboarding' => [
            'id' => '你好',
            'name' => 'Selldone商户'
        ],
        'Support' => [
            'id' => 'support',
            'name' => '支持:name'
        ],
        'EmailVerify' => [
            'id' => 'verify',
            'name' => 'Selldone'
        ],
        'Welcome' => [
            'id' => '你好',
            'name' => '社区，Selldone'
        ],
        'NewShop' => [
            'id' => '商人',
            'name' => 'Selldone商户'
        ],
        'Approve' => [
            'id' => '批准',
            'name' => 'Selldone商户'
        ],
        'SellerReceiveOrder' => [
            'id' => 'order',
            'name' => '订单管理:name'
        ],

        'Recovery' => [
            'id' => '恢复',
            'name' => 'Selldone 恢复团队'
        ],

    ],


    'bill-status' => [
        'PENDING' => '待定⌛',
        'PAYED' => '付费✅',
        'CANCELED' => '取消❌',

    ],

    'shop-invite' => [
        'LEVEL-NAME' => [
            'ADMIN' => '行政人员',
            'OFFICER' => '官员和主管',
            'AUDITING' => '审计经理',
            'EMPLOYEE' => '员工',
            'PRODUCT' => '产品经理',
            'CONTENT' => '内容管理者',
            'MARKETING' => '市场经理',
            'VIEWER' => '查看器',

        ],
        'subject' => ":inviter 邀请您使用 :level| :shop",
        'category' => "员工邀请",
        'title' => "您已被邀请到<b>:shop_name</b>作为<b>:level</b> 。",
        'message' => "您已收到与 <b>:shop_title</b> 团队进行业务合作的邀请。您可以选择接受或拒绝此优惠。如果您选择接受，请登录Selldone服务确认您的决定。确认后，您将可以访问商店管理部分。",

    ],

    'welcome-email' => [
        'subject' => "👋欢迎:name，让我们从Selldone开始吧！",
        'category' => 'CONGRATULATION',
        'title' => "欢迎使用Selldone",
        'message' => "感谢您选择Selldone！您现在是一个充满活力的社区的一部分，该社区将全球卖家与客户、本地企业与企业、个人与公司联系起来。我们所有的 Master 和 Pro 工具都可供您**免费**且**无限制**。我们随时为您提供支持并为您打开成功之门。",

        'index' => "步骤:step。",

        'step-domain' => [
            'title' => '添加您的自定义域',
            'message' => "首先，请在商店仪表板的“设置”>“域名设置”下免费添加您的自定义域名。",
            'action' => '管理我的域名',
        ],
        'step-landing' => [
            'title' => '定制您的主页',
            'message' => "通过转至仪表板 > 页面来个性化您的主页。选择一个登陆页面或创建一个新页面。它简单直观，您可以立即开始使用。",
            'action' => '自定义我的登陆页面',
        ],
        'step-payment' => [
            'title' => '设置付款方式',
            'message' => "开始直接接受付款到您的银行帐户。要连接 Stripe、PayPal 等支付提供商，请转至仪表板 > 会计 > 网关。",
            'action' => '添加付款方式',
        ],
        'step-products' => [
            'title' => '添加您的产品',
            'message' => "在仪表板 > 产品中轻松添加产品和类别。这就像管理 PC 上的文件和文件夹一样 – 完全可以拖放。您还可以使用 Excel 批量导入产品。可以使用示例模板来帮助您入门。",
            'action' => '管理我的产品',
        ],
        'step-shipping' => [
            'title' => '设置运送方式',
            'message' => "要向客户收取运费，请在仪表板 > 物流 > 运输中定义您的运输方式。您可以为不同地点设置不同的定价和支持。不要忘记在仪表板 > 物流 > 仓库中设置您的仓库来源。",
            'action' => '管理运输方式',
        ],
    

        'seller' => [
            'title' => '你是卖家吗？',
            'message' => '要开始销售，请通过以下链接在 Selldone 中输入您的仪表板，并完全免费创建您的第一家商店。这将需要几分钟，您将拥有自己的商店和在线网站。然后，我们将引导您进行下一步并获取支付网关。',
            'action' => '登录我的仪表板',
        ],
        'buyer' => [
            'title' => '我是买家',
            'message' => '恭喜。一旦您成为 Selldone 的会员，您将摆脱在线商店的会员资格和身份验证的所有麻烦。要从使用 Selldone 平台的任何商店和网站中受益，您可以一键登录，让您的购买变得简单、快速和安全。',
        ],
    ],


    'charge-account' => [
        'category' => '钱包 > 账户 > 收费',
        'title' => "成功冲锋",
        'message' => "您的帐号<b>:account_number</b>已成功扣款<b>:amount</b>。",
        'account' => '帐户',
        'charge' => '收费',
        'balance' => '平衡',
        'footer' => "让世界各地的任何人都可以轻松、可实现和访问业务。"
    ],

    'verify-email' => [
        'subject' => "🙌 完成您对 Selldone 的注册！验证链接。",
        'category' => "一步之遥",
        'title' => "确认你的邮件地址",
        'message' => "您好，:name，<br><br>感谢您选择Selldone！<br><br>要确认<b>:email</b>是您正确的电子邮件地址，请单击下面的按钮或使用提供的链接。您有 48 小时的时间来完成此验证。",
        'footer' => "如果您在单击“验证”按钮时遇到问题，请将以下 URL 复制并粘贴到您的网络浏览器中：:activation_url",
        'next-step' => "接下来，我们将向您发送一些有用的材料和分步指南，以便您轻松添加自定义域、设置付款、添加产品并获得第一个订单。",

    ],
    'verify-email-code' => [
        'subject' => ":name 的验证码",
        'category' => "SECURITY",
        'title' => "邮箱验证码",
        'message' => "您好，:name，<br><br>为了确认<b>:email</b>是您正确的电子邮件地址，请在接下来的<b>10分钟内输入以下代码</b>：",
    ],
    'onboarding-verify-email' => [
        'subject' => "🎉 您的商店已准备就绪| :name",
        'category' => "一步之遥",
        'title' => "设置完成",
        'account_title' => "您的帐户",
        'account_msg' => "使用此信息验证并登录您的帐户。",
        'shop_msg' => "Selldone 业务操作系统上的帐户信息。",

    ],

    'reset2fa' => [
        'category' => "安全官方消息",
        'title' => "请求禁用两步登录",
        'message' => "您收到这封电子邮件是因为我们收到了一个请求，要求重置 **:name** 帐户（使用 **:email** 电子邮件）的双因素身份验证。<br><br>我们发现您帐户的以下详细信息：",
        'footer' => "如果您未请求重置密码，则无需进一步操作。",
        'action' => '禁用两步登录',
    ],


    'build-new-shop' => [
        'subject' => "🎊 您的店铺现已准备就绪！",
        'category' => "在世界上诞生新的在线商店",
        'title' => "恭喜您，:name！",
        'message' => "<b>恭喜您，:name！您的新在线业务现已上线！</b> 我们很高兴欢迎您来到 Selldoners 社区。您已经迈出了成功的第一步，我们将全程为您提供帮助。<br>既然您的商店已准备就绪，那么让我们确保您已准备好直接从客户那里接收付款并开始发展您的帝国。如果您需要帮助，只需向我们发送一条消息，我们的支持团队将随时为您服务。<br><br><b>重要的后续步骤：</b> 首先，请确保您已做好接收付款和顺利操作的准备。我们将指导您完成每个阶段，让您的商店无缝运行。",
        'pdf-book' => "不要错过随附的手册：像游戏一样开展业务",

        'account' => [
            'title' => '第 1 步：在 Selldone 钱包中创建一个账户',
            'message' => "首先，在您的 Selldone 钱包中创建一个帐户。这是扣除您的费用的地方，也是您充值以保持商店顺利运营的地方。如果您的余额变为负数，请不要担心！您的商店将继续营业而不会中断。",
            'action' => '登录钱包',
        ],

        'shop-account' => [
            'title' => '第 2 步：将帐户连接到商店',
            'message' => "接下来，将您的钱包帐户连接到您的商店。前往 <b>Store > 会计 > 发票</b>，并链接您的钱包。这可确保所有客户付款都直接存入您的银行帐户 - Selldone 不会从您的收入中扣除任何金额。",
            'action' => '商店发票面板',
        ],

        'gateway' => [
            'title' => '第三步：连接在线支付网关',
            'message' => "现在，让我们设置您的在线支付网关。进入<b>商店 > 账户 > 端口</b>，点击<b>添加新端口</b>。选择您的货币，您将看到可用支付网关的列表。连接网关既快速又简单，但如果您需要任何帮助，请随时查看 Selldone 指南或联系我们。",
            'action' => '将门户添加到商店',
        ],

        'domain' => [
            'title' => '最后一步：连接专用域',
            'message' => "现在，将您的自定义域链接到您的商店。这允许客户购买您的产品或服务并直接向您付款。",
            'action' => '介绍和接收无限的礼品卡',
        ],
    ],


    'basket-list' => [
        'item' => "物品",
        'count' => "数数",
        'price' => "价格",
        'discount-code' => "优惠码",
        'customer-club' => '客户俱乐部',
        'shipping' => "船运",
        'total' => "全部的",
        'offer' => "提供",
        'coupon' => "优惠券",
        'lottery' => "奖",
        'tax' => "税",
        'tax_included' => "包含在价格中",
        'tax_shipping' => "Shipping Tax",
    ],

    'buyable-payments' => [
        'method' => '方法',
        'amount' => '数量',
        'giftcard' => 'Gift card',
        'payment' => '支付',
    ],


    'shop-subscription-email' => [
        'category' => "订阅更新",
        'title' => "店铺执照: :shop_title",
        'title-reserved' => "预留许可证：:shop_title",
        'title-active' => "有效许可证：:shop_title",
        'title-finished' => "成品许可证：:shop_title",
        'title-cancel' => "取消许可证：:shop_title",
        'message' => "您的商店许可证计划已更新，",
        'RESERVED' => "⚡ 您的订阅计划已被**保留**。",
        'ACTIVE' => "🟢 您的订阅计划已**激活**。",
        'FINISHED' => "🚧 您的订阅计划已**完成**。",
        'CANCEL' => "⛔ 您的订阅计划已**取消**。",
    ],

    'support' => [
        'subject' => "支持中心 | :name 回复",
        'category' => "支持中心",
        'title' => "您收到了回复",
        'action' => "开店管理员",
    ],

    'shop-customer-join' => [
        'subject' => "加入:shop_title",
        'category' => "新客户庆典",
        'title' => "我们很高兴成为您的会员",
        'action' => "立即访问",
    ],

    'shop-vendor-join' => [
        'subject' => "供应商入职 | :shop_title",
        'category' => "新供应商庆祝活动",
        'title' => "我们很高兴成为您的会员",
        'action' => "Vendor Panel",
    ],


    'shop-giftcard' => [
        'subject' => "礼品卡:shop_title",
        'category' => "添加新卡",
        'title' => "恭喜，您已收到礼品卡",
        'action' => "现在去购物",
        'message' => "您收到了一张金额为 :balance :currency 的礼品卡。您可以使用此礼品卡从我们的商店购买。",

    ],
    // -------------------------------------- Shop Contact ------------------------------------
    'contact' => [
        'subject' => "支持中心| :shop",
        'category' => "支持",
        'title' => "您收到了回复",
    ],

    // -------------------------------------- Shop Customer ------------------------------------
    'order-checkout' => [
        'subject' => "🛍 订单结帐 | :order_id",
        'title' => "命令",
        'message' => "您在我们的商店下了订单。我们收到您的订单，付款确认后将向您发送另一封电子邮件。"
    ,

        'payments' => '付款',
    ],

    'order-payment' => [
        'subject' => "🛍 付款确认 | :order_id",
        'title' => "付款单",
        'message' => "您的付款已完成，<br>我们收到了您的订单。当您的订单发货时，我们会再给您发送一封电子邮件。",
    

        'payments' => '付款',
    ],

    'order-update' => [
        'subject' => "🛍️订单状态更新|订购:order_id",
        'title' => "订单状态更新",
        'message' => "您的订单已更新。您可以在您的账户中查看该订单的最新状态。",
        'instructions' => [
            'PHYSICAL' => [
                'CheckQueue' => "您的订单正在排队等待处理。准备好后我们会通知您。",
                'OrderConfirm' => "您的订单已确认，准备工作已开始。",
                'PreparingOrder' => "您的订单正在准备中，很快就会发货。",
                'SentOrder' => "您的订单已发货。您很快就会收到它。",
                'ToCustomer' => "您的订单已送达。我们希望您喜欢它！",

                'PreparingOrder-PICKUP' => "您的订单正在准备中。当货物准备好取货时，您会收到通知。",
                'SentOrder-PICKUP' => "您的订单已准备好取货。请来商店领取。",
                'ToCustomer-PICKUP' => "您的订单已被取走。我们希望您喜欢它！"

            ],
            'VIRTUAL' => [
                'CheckQueue' => "您的订单正在排队等待处理。准备好后我们会通知您。",
                'OrderConfirm' => "您的订单已确认，准备工作正在进行中。",
                'PreparingOrder' => "您的订单正在准备中，很快就会发送给您。",
                'ToCustomer' => "您的虚拟订单已发送至您的帐户。谢谢你！"
            ],
            'SERVICE' => [
                'CheckQueue' => "您的服务请求已在队列中。我们会在开始时通知您。",
                'OrderConfirm' => "您的服务已确认，我们正准备开始。",
                'PreparingOrder' => "我们正在为您准备服务，完成后将通知您。",
                'ToCustomer' => "您的服务已经完成。感谢您选择我们！"
            ],
            'FILE' => [
                'PreparingOrder' => "您的文件正在准备中，很快就会提供。",
                'ToCustomer' => "您的文件已准备好并已交付。您现在可以下载它。"
            ],
            'SUBSCRIPTION' => [
                'CheckQueue' => "您的订阅订单已在队列中。处理开始时我们会通知您。",
                'OrderConfirm' => "您的订阅已确认并正在设置中。",
                'PreparingOrder' => "我们正在准备您的订阅，很快就会开始。",
                'SentOrder' => "您的订阅已激活。您将收到持续更新。",
                'ToCustomer' => "您的订阅服务已成功激活。"
            ]
        ]

    ],

    // -------------------------------------- Vouchers ------------------------------------
    'get-voucher' => [
        'subject' => '恭喜:name|新优惠券：:title',
        'category' => "恭喜，新优惠券",
        'message' => "嘿:name，<br><br>您收到了我们赠送的新优惠券！通过向您的朋友和您认识的每个人介绍 Selldone，您可以获得更多优惠券。这张优惠券价值**:price :currency**。<br><br>您已经迈出了第一步，我们将帮助您用优惠券解锁新功能！请使用**:email**登录并在商店**仪表板** > **设置** > **许可证**中找到您的凭证。<br><br>恭喜！",
        'action' => "我的仪表板",
    ],


    // -------------------------------------- Received Gift ------------------------------------
    'received-gift' => [
        'subject' => '恭喜，亲爱的:name |你收到了一份礼物',
        'category' => "收到礼物的通知",
        'title' => "给你的礼物",
        'message' => "您好，:name，我们很高兴地通知您，您收到了来自 Selldone 的特别礼物！ 🎉 您可以通过在 Selldone 上保持活跃、发展您的商店以及提高您的专业知识来赚取更多礼物。要查看您的礼物，只需使用 :email 登录，然后在仪表板右上角查找即可。<br><br> 此礼物价值 **:price :currency**，您可以轻松地将其存入 Selldone 中的钱包。<br><br> 使用您的礼物升级您的商店许可证并解锁更强大的工具来促进您的在线业务！",
        'action' => "礼物",
    ],

    // -------------------------------------- Shop Order Payment Admin (Seller) ------------------------------------

    'order-payment-admin' => [
        'subject' => "🛍 收到新订单 | :order_id",
        'title' => "New Order",
        'message' => "您收到了一份新订单。请转到您商店的订单处理页面。",
    ],


    // -------------------------------------- Virtual item info component ------------------------------------

    'virtual-item' => [
        'input-form-title' => '您填写的信息',
        'output-form-title' => '购买商品信息',
    ],

    // -------------------------------------- Weekly shop report ------------------------------------
    'selldone-weekly-report' => [
        'subject' => '📬:shop_title|周报:time',
        'title' => '每周商店业绩报告',
        'message' => "这是您商店的每周报告，从 <b>:start</b> 到 <b>:end</b>。该报告包括改善您的业务的提示，您还可以检查在线商店的状态和最近的订单。我希望您未来的一天和一周过得愉快。"
    ],

    // -------------------------------------- Seasonal shop report ------------------------------------
    'shop-seasonal-report' => [
        'subject' => '☘ 您的:amount最近三个月的保存报告| :shop_title',
        'title' => '关于您的业务活动、奖励和财务节省的季节性报告',
        'message' => "这是您的 <b>:shop_title</b> 季节性报告，从 <b>:start</b> 到 <b>:end</b>。"
    ],


// -------------------------------------- EC-ShopAccounts ------------------------------------
    'EC-ShopAccounts' => [
        'title' => '关联账户',
        'sub-title' => '连接到我的商店的钱包帐户的最新状态是什么？',
        'view-wallet' => '查看钱包',
        'tip-title' => '重要提示',
        'tip' => "设置免费的 Selldone 钱包并将其链接到您的商店。即使您的余额为负数，您的客户仍然可以毫无问题地购物和付款。不用担心，您的商店运营和数据将顺利持续长达 1 个月，不会出现任何中断。",
        'view-my-wallet' => 'My wallet',
        'connect-account' => '连接到帐户'
    ],

// -------------------------------------- EC-ShopApps ------------------------------------
    'EC-ShopApps' => [
        'title' => '已安装的应用程序',
        'sub-title' => '本周您在商店中安装的应用程序列表。',
        'tip' => "您想为您的商店找到更多应用吗？",
        'view-app-store' => '访问 Selldone 应用商店。',
    ],

// -------------------------------------- EC-ShopBots ------------------------------------
    'EC-ShopBots' => [
        'title' => '您的商店机器人',
        'sub-title' => '我商店中的活跃销售机器人。',
        'tip-title' => '机器人销售',
        'tip' => "Selldone 为您提供了自动销售机器人。您所要做的就是转到附加组件> 机器人面板并激活您的商店机器人。请注意，相关服务必须在您所在的国家/地区可用。",
        'view-bots' => '管理机器人',
    ],

// -------------------------------------- EC-ShopContacts ------------------------------------
    'EC-ShopContacts' => [
        'title' => '与客户沟通',
        'sub-title' => '本周我与客户有多少联系？',
        'faqs' => '经常问的问题',
        'tickets' => '客户票',
    ],

// -------------------------------------- EC-ShopData ------------------------------------
    'EC-ShopData' => [
        'title' => '用户状态',
        'sub-title' => '活动从 :start 到 :end',
        'users' => [
            'title' => '顾客',
            'subtitle' => '注册用户',
        ],
        'views' => [
            'title' => '访问',
            'subtitle' => '你去过这家店多少次',
        ],
        'new_visitors' => 'New Users',
        'returning_visitors' => '返回用户',

        'shop_views' => '店铺景观',
        'baskets' => [
            'title' => '购物车',
            'subtitle' => '报告新购物车的数量',
        ],
        'products' => [
            'title' => '产品概述',
            'subtitle' => '商店中产品的状态（按类型）',
            'value_name' => '产品'
        ],
        'products_count' => '产品类型',
        'views_count' => '查看次数',
        'sell_count' => '销售数量',
        'send_count' => '运输计数',
    ],


// -------------------------------------- EC-ShopDropShipping ------------------------------------
    'EC-ShopDropShipping' => [
        'title' => '代发货',
        'sub-title' => 'Drop Shipping Selldone 主要卖家的面板。',
        'total_fulfillments' => '收到的订单总数',
        'ds_count' => '收到的订单',
        'statistics_title' => '报告收到的订单',
        'ds_cancels' => '接口卖家取消',
        'ds_rejects' => '由您取消',
        'tip' => "您是商品的主要卖家吗？您是否拥有仓库、工厂或产品经销商？您可以在 Selldone Drop Shipping 服务中将您的产品提供给其他卖家，以大规模销售您的产品。发送电子邮件至 support@selldone.com 为您提供指导。",
        'view-drop-shipping-panel' => '登录批发面板',
    ],


// -------------------------------------- EC-ShopExchangeRates ------------------------------------
    'EC-ShopExchangeRates' => [
        'title' => '汇率',
        'sub-title' => '您商店中最新的货币兑换率列表。',
        'from' => '来源货币',
        'to' => '目的地货币',
        'rate' => '转化率',
        'view-exchange-panel' => '管理汇率',
    

        'vew-exchange-panel' => '汇率管理小组',
    ],


// -------------------------------------- EC-ShopExperts ------------------------------------
    'EC-ShopExperts' => [
        'title' => '专家合同',
        'sub-title' => '哪些专业人员在我的商店工作？',
        'cost' => '合约金额',
        'duration' => '期间',
        'start_at' => 'Start Date',
        'complete_at' => 'Completion Date',
        'cancel_at' => '日期取消',
        'end_at' => '邮寄日期',
        'tip' => '您可以聘请 Selldone 最好的专家来发展您的业务。',
        'view-experts' => '点击开始。',
    ],


// -------------------------------------- EC-ShopGateways ------------------------------------
    'EC-ShopGateways' => [
        'title' => 'Payment gateways',
        'sub-title' => '您的商店有活跃的支付网关 :shop',
        'tip-title' => '重要提示',
        'tip' => "转到您商店的门户管理页面，并在几分钟内添加至少一个端口。您的客户喜欢通过在线门户快速安全地付款。",
        'view-shop-gateways' => '登录我的商店门户管理。',
        'view-gateways' => '查看更多网关',
    ],


// -------------------------------------- EC-ShopOrders ------------------------------------
    'EC-ShopOrders' => [
        'title' => '订单',
        'sub-title' => '我本周收到的订单清单。',
        'total_baskets' => '总订单',
        'total_posBaskets' => '总现金订单',
        'pos-title' => 'POS 存储箱',
        'chart-label' => '订单已完成（这些订单不一定要付款！）',
        'tip-title' => '你应该更加努力...',
        'tip' => "没有简单的成功。",
    ],

// -------------------------------------- EC-ShopProcessCenter ------------------------------------
    'EC-ShopProcessCenter' => [
        'title' => '加工中心',
        'sub-title' => '本周我们在商店处理了多少订单？',
        'tip-title' => '你没有销售！',
        'tip' => "不幸的是，你这周没有任何销售。你需要更多的东西到你的商店。您可以添加更多产品、选择更好的图像或为您的产品编写更好的描述。考虑为您的企业找一份全职工作。如果你做对了并且不沮丧，你就会成功。",
        'view-process-center' => '查看流程中心',
        'return' => [
            'title' => '退货订单',
            'subtitle' => '报告退货订单。',
            'tip-title' => '你知道吗 ...',
            'tip' => "使用Selldone POS，您可以创建任意数量的收银机！无论是平板电脑、手机还是笔记本电脑，您都可以将任何设备变成商店的销售点。它设置简单、快速，并为您的服务器做好了充分准备。今天就开始使用吧！",
            'view-pos' => '登录我的在线商店收银员'
        ]
    ],


// -------------------------------------- EC-ShopSessions ------------------------------------
    'EC-ShopSessions' => [
        'title' => '会话',
        'sub-title' => '我光顾了我的商店多少次？',
        'countries-title' => '访问量最大的国家是哪些？',
    ],


// -------------------------------------- EC-PublicMessage ------------------------------------
    'EC-PublicMessage' => [
        'title' => '你想不花一分钱就赚钱吗？',
        'message' => "亲爱的 :name，您可以转到仪表板 > 取消货币化并创建推荐链接。将链接发送给您的朋友，您会收到一张 Selldone 礼品卡和您朋友付款的百分比。请注意，礼品卡将同时发送给您和您的朋友。",
        'action' => '查看我的介绍链接',
        'mail-clip' => "<b style='color: #C2185B'>重要提示：</b>如果您使用限制电子邮件长度的电子邮件服务（例如 Gmail），请在电子邮件末尾找到以下选项以显示完整报告并单击它：",

        'no-coin-reward' => "<b style='color: #C2185B'>抱歉：</b>您的活动不符合获得免费 SEL Coins 奖励的要求。更加努力地为下一季在您的商店销售更多产品。",
        'yes-coin-reward' => "<b style='color: #4CAF50'>奖励：</b>恭喜，因为你的出色表现，我们给了你一个:amount SEL Coin的免费奖励。",

        'need-buy-license' => "<b>升级您的业务：</b> 您似乎还没有为您的网站注册任何订阅计划！如果按年付费，每月只需 :amount，立即升级即可解锁更多功能。",
        'not-afford-message' => "如果您负担不起或付款有任何问题，请随时通过 support@selldone.com 告诉我们。",
        'add-domain' => "<b>为什么不为您的企业创建一个自定义域？</b><br>立即向您的网站添加域；免费！"
    ],


    // -------------------------------------- Widget-Socials ------------------------------------
    'Widget-Socials' => [
        'title' => "Selldone 是一个<del>产品</del><span style = 'color: forestgreen'>社区</span>。<br>做一个专业的卖家！",
        'message' => "在 Twitter、LinkedIn 和社交网络上关注 Selldone 的官方页面。向我们发送任何评论、请求或批评，或参与有关 Selldone 的讨论。我们也是<b>您创建</b>的 Selldone 社区的一部分。"
    ],


    // -------------------------------------- Avocado (Seller) ------------------------------------
    'avocado-seller-daily-report' => [
        'subject' => '收到新的鳄梨订单|:shop_title :time',
        'title' => "过去 24 小时的绩效报告",
        'message' => "您的客户正在等待对您的订单进行审核和定价。尽快响应客户的要求以获得更多销售。",
        'card_title' => "队列中的订单",
        'card_subtitle' => "自:date起",

        'card_payed' => "已付款订单"
    ],


    // -------------------------------------- Community > Post ------------------------------------
    'community-comments' => [
        'subject' => '在 :community_title 中回复您的帖子',
        'title' => ":name 和 :count 其他人对您的帖子发表了评论。",
        'message' => "嗨:name，您的帖子受到关注！您已在我们的社区中收到评论。登录您的帐户加入讨论并查看每个人都在说什么。",
        'title-simple' => ":name 对您的帖子发表了评论。",
    ],


    // -------------------------------------- Community > Topic ------------------------------------
    'community-topic' => [
        'subject' => '🔔回复您的主题:topic_title',
        'title' => ":name 和 :count 其他人回复了您的主题。",
        'message' => ":name您好，您的话题正在受到关注！您已在我们的社区中收到回复。登录您的帐户加入讨论并查看每个人都在说什么。",
        'title-simple' => ":name 回复了您的主题。",
    ],

    // -------------------------------------- User > Login ------------------------------------
    'user-login' => [
        'subject' => '🔔 新登录:name',
        'category' => '安全通知',
        'title' => "登录帐户",
        'message' => "亲爱的 :name，您已登录您的 Selldone 帐户。",   // Login in selldone (seller)
        'message-shop' => "亲爱的 :name，您已登录 :shop_title 。",  // Login in shop (buyer)

        'footer' => "如果您没有登录，请更改您的密码。",

    ],


    // -------------------------------------- Account > TransactionNotification ------------------------------------
    'account-transaction' => [
        'withdraw' => "退出",
        'deposit' => "订金",

        'withdraw_subject' => "提现帐号:account",
        'deposit_subject' => "充值至账户:account",

        'message' => "汇款已按照以下规格进行。",

        'type' => "交易类型",

        'from' => "来源账户",
        'to' => "Destination account",

        'desc' => "交易说明",
        'action' => "查看交易",
    ],
    // -------------------------------------- Shop > Penalty ------------------------------------

    'penalty' => [
        'subject' => "⛔ 重要！违反规则| :shop",
        'category' => "关键信息",
        'title' => "您的店铺已被处罚",
        'action' => "打开商店仪表板",
    ],


    // -------------------------------------- User > Invite friend ------------------------------------
    'invite' => [
        'subject' => ":inviter 邀请你到 Selldone",
        'title' => ":name 向您发送 :amount 以帮助您启动新的在线网站并从中获利！",
        'message' => "您好**:receiver_name**，<br><br>欢迎使用Selldone！在 Selldone 上，您可以轻松创建电子商务网站、博客、在线社区，甚至设置在线 POS 系统进行面对面销售 - 所有这些都在几分钟内完成。它是完整的在线商务操作系统，旨在让您的业务更好、更快、更轻松地运行。<br><br>通过<b>:date</b>注册并获得:amount优惠券即可开始！",
        'accept' => "接受邀请",
        'owner' => "的主人",
        'join-date' => "自 Selldone 以来",
    ],

    // -------------------------------------- Shop > Recovery mail ------------------------------------
    'shop-recovery' => [
        'subject' => "恢复链接| :shop",
        'category' => "店铺保安",
        'title' => "存储<b>:shop_name</b>的恢复链接。",
        'message' => "之所以向您发送这封电子邮件，是因为您请求恢复您的商店。单击下面的链接将恢复您的商店和属于它的所有数据。",
        'action' => "确认商店恢复",

    ],


    // -------------------------------------- SR-SeasonalSaving ------------------------------------
    'SR-SeasonalSaving' => [
        'title' => 'Selldone 为您的企业节省了多少钱？',
        'sub-title' => '从日期 :start 到 :end',
        'infrastructure' => [
            'title' => '基础设施',
            'subtitle' => '服务器、CDN、存储和其他云服务',
        ],
        'experts' => [
            'title' => '专家和员工',
            'subtitle' => '开发人员、维护和支持',
        ],
        'total_save' => '总节省的钱'
    ],
    // -------------------------------------- SR-SeasonalPerformance ------------------------------------
    'SR-SeasonalPerformance' => [
        'title' => '你的表现',
        'sub-title' => '从 :start 到 :end 的业务概览',

        'new_visitors' => 'New Users',
        'returning_visitors' => '返回用户',

        'shop_views' => '店铺景观',
        'baskets' => [
            'title' => '购物车',
            'subtitle' => '报告新购物车的数量',

        ],
        'products' => [
            'title' => '产品概述',
            'subtitle' => '商店中产品的状态（按类型）',
            'value_name' => '产品'
        ],
        'views' => [
            'title' => 'Page Views',
            'subtitle' => '网站总浏览量',
        ],
    ],


    // ██████████████████████ Marketplace ██████████████████████
    'vendor-order' => [
        'title' => 'New Order',
        'message' => "您已收到新订单。请转至供应商面板中的订单处理页面。",
        'subject' => "🛍 收到新订单 | :order_id",
        'your_revenue' => "您的收入",
    ],
    'vendor-invite' => [
        'title' => '供应商邀请',
        'message' => "您已收到成为 :shop_name 供应商的邀请。您可以点击以下按钮接受或拒绝。",
        'subject' => ":shop_name | 您收到了成为我们供应商的邀请",
        'accept' => "接受并成为供应商",
        'reject' => "拒绝",

    ],

    // Staff of vendor
    'vendor-member-invite' => [
        'title' => '邀请加入我们的团队',
        'message' => "您已被邀请加入 :vendor_name（:shop_name）。您可以使用下面的按钮接受或拒绝此邀请。",
        'subject' => "邀请加入:vendor_name|成为团队成员",
        'accept' => "接受并加入团队",
        'reject' => "拒绝",

    ],

    // -------------------------------------- ShopEmailLogin ------------------------------------
    'shop-email-login' => [
        'subject' => "您的 :shop 登录代码",
        'header-message' => "我们向您发送这封电子邮件是因为您请求了商店的登录代码。请在下面找到您的一次性密码 (OTP)：",
        'footer-message' => "此代码有效期为 10 分钟。如果您未请求此登录代码，请忽略此电子邮件。"
    ],

    // -------------------------------------- ShopEmailVerifyLinkEmail ------------------------------------
    'shop-email-verify-link' => [
        'subject' => "验证您的电子邮件 | :shop",
        'title' => '电子邮件验证',
        'header-message' => "您好，:name，<br>请在48小时内点击下面的按钮或使用下面的链接确认**:email**是您的电子邮件地址。",
        'footer-message' => ""
    ],


    // -------------------------------------- VendorProductsChangeEmail ------------------------------------
    'vendor-products' => [
        'subject' => "产品更新| :shop",
        'title' => "产品状态更新 - 过去 24 小时",
        'message' => "我希望这封邮件对您有好处。这是一个简短的更新，旨在告知您过去 24 小时内您的产品在我们平台上的状态。\n在此期间，部分产品的状态发生了变化。这些变化可能是由于购买、库存更新或其他相关事件造成的。\n有关每个产品的更多详细信息，请登录您的帐户并查看“产品状态”部分。",
        'action' => "打开供应商面板",
    ],

    // -------------------------------------- ShopBulkOrdersEmail ------------------------------------
    'bulk-orders' => [
        'subject' => "收到批量订单| :shop | :date",
        'title' => "批量订单通知",
        'message' => "您已收到一批批量订单。请访问面板中的订单处理页面了解更多详细信息。您还可以通过提供的安全链接下载订单列表，有效期7天。<br><br>\n        <b>重要提示：</b> 此链接有效期7天。<br>\n        该链接是动态的，因此每次单击它时，您都会收到该特定日期的最新订单。 <b>表示如果订单付款状态更改为拒绝，您将不再在下载的CSV中看到该订单，或者如果订单已付款，则会出现在列表中。</b><br><br>\n        <ul>\n            <li>CSV 包含 :date.</li> 中保留日期的已付款订单\n            <li>保留日期为用户在订单页面点击结账的日期。</li>\n        </ul>\n        <b>为防止重复订单，请在发送前务必检查订单ID。</b>",
        'action' => "下载订单清单",
    ],

    // -------------------------------------- Order Refund ------------------------------------
    'order-refund' => [
        'message' => "您订单中的某些商品未被接受且无法交付。这些商品的金额将很快退还至您的卡中。"
    ]

];
