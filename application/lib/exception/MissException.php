<?php
/**
 * Created by GE.
 * User: GE
 * Date: 2018/7/14 我去，情人节，886214
 * Time: 1:03
 */

namespace app\lib\exception;

/**
 * 404时抛出此异常
 */
class MissException extends BaseException
{
    public $code = 404;
    public $msg = 'global:your required resource are not found';
    public $errorCode = 10001;
}