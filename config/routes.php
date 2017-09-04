<?php
/**
 * Site URL Rules
 *
 * You can define custom site URL rules here, which Craft will check in addition
 * to any routes you’ve defined in Settings → Routes.
 *
 * See http://www.yiiframework.com/doc-2.0/guide-runtime-routing.html for more
 * info about URL rules.
 *
 * In addition to Yii’s supported syntaxes, Craft supports a shortcut syntax for
 * defining template routes:
 *
 *     'blog/archive/<year:\d{4}>' => ['template' => 'blog/_archive'],
 *
 * That example would match URIs such as `/blog/archive/2012`, and pass the
 * request along to the `blog/_archive` template, providing it a `year` variable
 * set to the value `2012`.
 */

return [
    'api' => [
        'POST v1/updates' => 'api/v1/updates',
        'POST v1/craft-id' => 'api/v1/craft-id',
        'GET v1/plugin-store' => 'api/v1/plugin-store',
        'GET v1/account' => 'api/v1/account',
    ],
    'composer' => [
    ],
    'craftId' => [
        'GET v1/id' => 'id/v1/id',
        'GET account' => 'id/account',
        'GET account/developer' => 'id/connect',
        'GET account/developer/validate' => 'id/connect/validate',
        'GET stripe/connect' => 'id/stripe/connect',
        'GET stripe/account' => 'id/stripe/account',
        'POST stripe/disconnect' => 'id/stripe/disconnect',
        'GET stripe/customer' => 'id/stripe/customer',
        'POST stripe/save-credit-card' => 'id/stripe/save-credit-card',
    ],
   // 'queue' => [
     //   'POST v1/create' => 'queue/v1/q/create',
    //],
];
