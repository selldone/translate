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

    'failed' => '這些憑據與我們的記錄不符。',
    'throttle' => '登錄嘗試次數過多。請在 :seconds 秒後重試。',


    'title_shop' => '登錄到 :name',
    'title_app' => ':name 的應用程序訪問權限',
    'login_message' => '請求訪問您的帳戶。',
    'scopes_title' => '此應用將有權訪問以下範圍',
    'accept' => '確認',
    'reject' => '拒絕',


    'login_incorrect_password' => '用戶名或密碼無效。',


    'reset_2fa_title' => '重置兩步登錄請求',
    'go_main_page' => '去首頁',

    'signing_in' => '登錄中...',


    'erp' => [
        'message' => "● 選擇一家商店繼續。如果您需要新商店，請先建立它並重新連接。 <br>● 確保您知道要連接的軟體，或聯絡提供者尋求協助。",
    ],
    'token-display' => [
        'message' => "我們根據您的請求創建了此令牌來為 :software 存取 :shop。請妥善保管，不要與任何人分享。如果您認為您的令牌已洩露，您可以隨時撤銷它。",
        'scopes-message' => "這是一個可以訪問商店及其範圍的令牌",
        'manage-tokens-action' => '管理代幣',
        'manage-tokens-message' => "您可以隨時在此處撤銷此令牌。"
    ]


,

    'password' => '提供的密碼不正確。',
];
