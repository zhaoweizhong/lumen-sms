<?php

namespace Zhaoweizhong\Sms\Facades;

use Illuminate\Support\Facades\Facade;

class SmsManager extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Zhaoweizhong\\Sms\\SmsManager';
    }
}
