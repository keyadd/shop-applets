<?php
/**
 
 * Date: 2018/7/23
 * Time: 21:56
 */

namespace app\api\validate;


class IsValidUserToken extends BaseValidate
{
    protected $rule = [
        'token' => 'isValidUserToken'
    ];
}