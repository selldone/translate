<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => '这些凭据与我们的记录不符。',
    'throttle' => '尝试登录次数过多。请在 :seconds 秒后重试。',


    'title_shop' => '登录到 :name',
    'title_app' => '应用程序访问 :name',
    'login_message' => '请求访问您的账户。',
    'scopes_title' => '此应用程序将有权访问以下范围',
    'accept' => '确认',
    'reject' => '拒绝',


    'login_incorrect_password' => '用户名或密码无效。',


    'reset_2fa_title' => '重置两步登录请求',
    'go_main_page' => '返回主页',

    'signing_in' => '正在登录...',


    'erp' => [
        'message' => "● 选择一个商店以继续。如果需要新商店，请先创建并重新连接。<br>● 确保您了解您正在连接的软件，或联系提供商寻求帮助。",
    ],
    'token-display' => [
        'message' => "我们根据您的请求创建了此令牌，以便 :software 访问 :shop。请妥善保管，不要与任何人分享。如果您认为您的令牌已被泄露，可以随时撤销。",
        'scopes-message' => "这是一个具有商店访问权限的令牌，带有其作用域",
        'manage-tokens-action' => '管理令牌',
        'manage-tokens-message' => "您可以随时在此撤销该令牌"
    ]


];
