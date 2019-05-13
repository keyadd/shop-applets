<?php
/**
 * Created by GE
 * User: GE
 * Date: 2018/7/18
 * Time: 12:35
 */
namespace app\api\validate;

class ThemeProduct extends BaseValidate
{
    protected $rule = [
        't_id' => 'number',
        'p_id' => 'number'
    ];
}
