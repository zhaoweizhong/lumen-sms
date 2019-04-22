<?php

$routeAttr = config('lumen-sms.route', []);
unset($routeAttr['enable']);

$attributes = array_merge([
    'prefix' => 'lumen-sms',
], $routeAttr);

Route::group($attributes, function () {
    Route::get('info', 'Zhaoweizhong\Sms\SmsController@getInfo');
    Route::post('verify-code', 'Zhaoweizhong\Sms\SmsController@postSendCode');
    Route::post('voice-verify', 'Zhaoweizhong\Sms\SmsController@postVoiceVerify');
});
