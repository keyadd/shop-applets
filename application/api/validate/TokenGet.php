<?php
/**
 * Created by GE
 * User: GE
 * Date: 2018/7/18
 * Time: 12:35
 */
namespace app\api\validate;

class TokenGet extends BaseValidate
{
    protected $rule = [
        'code' => 'require|isNotEmpty'
    ];
    
    protected $message=[
        'code' => '没有code还想拿token？做梦哦'
    ];
}
