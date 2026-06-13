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

    'failed' => 'These credentials do not match our records.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',


    'title_shop' => 'Login to :name',
    'title_app' => 'Application access for :name',
    'login_message' => 'Request access to your account.',
    'scopes_title' => 'This app will have access to the following scopes',
    'accept' => 'Confirm',
    'reject' => 'Reject',


    'login_incorrect_password' => 'Invalid username or password.',


    'reset_2fa_title' => 'Reset two-step login request',
    'go_main_page' => 'Go to homepage',

    'signing_in' => 'Signing in...',


    'erp' => [
        'message' => "● Choose a store to proceed. If you need a new store, create it first and reconnect.<br>● Ensure you know the software you're connecting to, or contact the provider for help.",
    ],
    'token-display' => [
        'message' => "We created this token to access :shop for :software based on your request. Please keep it safe and do not share it with anyone. If you believe your token has been compromised, you can revoke it at any time.",
        'scopes-message' => "This is a token that has access to the shop with its scopes",
        'manage-tokens-action' => 'Manage tokens',
        'manage-tokens-message' => "You can revoke this token here at any time."
    ]


];
