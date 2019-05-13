<?php
/**
 * Created by GE
 * User: GE
 * Date: 2018/7/18
 * Time: 12:35
 */
namespace app\api\validate;

class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger',
    ];
}
