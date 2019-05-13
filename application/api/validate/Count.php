<?php
/**
 * Created by GE
 * User: GE
 * Date: 2018/7/18
 * Time: 12:35
 */
namespace app\api\validate;

class Count extends BaseValidate
{
    protected $rule = [
        'count' => 'isPositiveInteger|between:1,15',
    ];
}
