<?php
/**
 * Created by GE.
 * User: GE
 * Date: 2018/7/14 我去，情人节，886214
 * Time: 1:03
 */

namespace app\lib\exception;
use think\Exception;

/**
 * 微信服务器异常
 */
class WeChatException extends BaseException
{
    public $code = 400;
    public $msg = 'wechat unknown error';
    public $errorCode = 999;
}