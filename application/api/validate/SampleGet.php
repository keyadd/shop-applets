<?php
/**
 * Created by GE
 * User: GE
 * Date: 2018/7/14
 * Time: 10:46
 */

namespace app\api\validate;

/**
 * Class BannerGet
 * 对获取Banner的接口做验证
 */
class SampleGet extends BaseValidate
{
    protected $rule = [
        'key' => 'number'
    ];

    protected $message = [
//        'location' => 'location 输入'
    ];
}