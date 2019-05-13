<?php
/**
 
 * Date: 2018/7/25
 * Time: 16:18
 */

namespace app\lib\exception;


class UserException extends BaseException
{
    public $code = 404;
    public $msg = '用户不存在';
    public $errorCode = 60000;
}